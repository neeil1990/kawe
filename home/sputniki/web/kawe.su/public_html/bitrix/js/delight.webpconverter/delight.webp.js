document.addEventListener('DOMContentLoaded', function(){
	if(!canUseWebP()){
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

function ForeachImages(){
	var images = document.body.getElementsByTagName('img');
	for (var i = 0; i < images.length; i++) {
		for (var k = 0; k < window.attrs.length; k++) {
			if (images[i].hasAttribute("data-webp-"+window.attrs[k])) {
				if ((images[i].hasAttribute(window.attrs[k])) && (images[i].getAttribute(window.attrs[k]) != images[i].getAttribute("data-webp-"+window.attrs[k]))) {
					images[i].setAttribute(window.attrs[k],images[i].getAttribute("data-webp-"+window.attrs[k]));
				}
			}
		}
	}
}

function ForeachBgr(){
	var bgr_tags = document.querySelectorAll('[data-bgr-webp]');
	for (var i = 0; i < bgr_tags.length; i++) {
		if (bgr_tags[i].hasAttribute("data-bgr-webp")) {
			bgr_tags[i].style.backgroundImage = "url('"+bgr_tags[i].getAttribute("data-bgr-webp")+"')";
		}
	}
}

function canUseWebP() {
    var elem = document.createElement('canvas');
    if (!!(elem.getContext && elem.getContext('2d'))) {
        // was able or not to get WebP representation
        return elem.toDataURL('image/webp').indexOf('data:image/webp') == 0;
    }
    // very old browser like IE 8, canvas not supported
    return false;
}