document.addEventListener('DOMContentLoaded', function(){
	check_webp_feature('lossy', function (feature, isSupported) {
		if (!isSupported) {
			// img src replace
			var meta_attrs_ob = document.getElementsByName('delight_webpconverter_attr')[0];
			if(meta_attrs_ob){
				window.attrs = meta_attrs_ob.getAttribute('value').split("|");
			} else {
				window.attrs = ["data-src","src"];
			}
			
			ForeachImages();
			
			// background replace
			ForeachBgr();
			
			// DOM changes (Ajax detection)
			var observer = new MutationObserver(function(mutations) {
				mutations.forEach(function(mutation) {
					if(mutation.addedNodes.length > 0){
						Array.prototype.forEach.call(mutation.addedNodes, function (node) {
							if( node && node.nodeType === Node.ELEMENT_NODE ){
								images = node.getElementsByTagName('img');
								if(images.length > 0){
									ForeachImages();
								}
								bgr_tags = node.querySelectorAll('[data-bgr-webp]');
								if(bgr_tags.length > 0){
									ForeachBgr();
								}
							}
						});
					}
				});    
			});
			
			observer.observe(document.getElementsByTagName('body')[0], {childList: true, subtree: true});
		}
	});
});

function check_webp_feature(feature, callback) {
    var kTestImages = {
        lossy: "UklGRiIAAABXRUJQVlA4IBYAAAAwAQCdASoBAAEADsD+JaQAA3AAAAAA",
        lossless: "UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA==",
        alpha: "UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",
        animation: "UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"
    };
    var img = new Image();
    img.onload = function () {
        var result = (img.width > 0) && (img.height > 0);
        callback(feature, result);
    };
    img.onerror = function () {
        callback(feature, false);
    };
    img.src = "data:image/webp;base64," + kTestImages[feature];
}

function ForeachImages(){
	for (var k = 0; k < window.attrs.length; k++) {
		var images = document.querySelectorAll('[data-webp-'+window.attrs[k]+']');
		for (var i = 0; i < images.length; i++) {
			if ((images[i].hasAttribute(window.attrs[k])) && (images[i].getAttribute(window.attrs[k]) != images[i].getAttribute("data-webp-"+window.attrs[k]))){
				images[i].setAttribute(window.attrs[k],images[i].getAttribute("data-webp-"+window.attrs[k]));
			}
		}
	}
}

function ForeachBgr(){
	var bgr_tags = document.querySelectorAll('[data-bgr-webp]');
	for (var i = 0; i < bgr_tags.length; i++) {
		if (bgr_tags[i].hasAttribute("data-bgr-webp")) {
			style_priority = bgr_tags[i].style.getPropertyPriority("background-image");
			if(style_priority == ""){
				style_priority = bgr_tags[i].style.getPropertyPriority("background");
			}
			bgr_tags[i].style.setProperty("background-image", "url('"+bgr_tags[i].getAttribute("data-bgr-webp")+"')", style_priority);
		}
	}
}