document.addEventListener("DOMContentLoaded", function(event) {
    var primeIncut = document.getElementsByClassName("prime-incut");
    var primeIncutUrl   = 'https://incut.prime-ltd.su/incut/incut.php';

    var domainFrom = extractDomain(window.location.href);
    var mainDomainTo = 'https://prime-ltd.su/?from=' + domainFrom;
    var fullUrlTo = mainDomainTo

    function extractDomain(url) {
        var domain;
        if (url.indexOf("://") > -1) { domain = url.split('/')[2];}
        else { domain = url.split('/')[0];}
        domain = domain.split(':')[0];
        return domain;
    }

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
            if(xmlhttp.status == 200){
                for (var i = 0; i < primeIncut.length; i++) {
                    primeIncut[i].innerHTML = xmlhttp.responseText
                }
            }
            else if(xmlhttp.status == 400) { console.dir('Error 400')}
            else { console.dir('Not 200')}
        }
    }
    xmlhttp.open("GET", primeIncutUrl, true);
    xmlhttp.send();

    for (var i = 0; i < primeIncut.length; i++) {
        primeIncut[i].addEventListener( "click" , function(){
            window.location = fullUrlTo;
        }, false)
    }
});
