// const GameMsg = document.querySelector('#productDescription');
let requestURL = '/json/data.json';
let request = new XMLHttpRequest();
request.open('GET', requestURL);
request.responseType = 'json';
request.send();

request.onload = function() {
    const onz_LP = request.response;
    loadData(onz_LP);
}

function loadData(obj) {
    var onz_LP = obj['ONZMAIN'];

    let bannerNum = document.querySelectorAll('[name="bannerBox"]');

    console.log(bannerNum.length);    

    for( i=0 ; i<bannerNum.length; i++){
        let a = '#banner' + i;
        let b = '#link' + i;
        let banner = document.querySelector(a);
        let link = document.querySelector(b);

        banner.classList.add(onz_LP[i].onoff);
        banner.setAttribute('style', 'background:url(' + onz_LP[i].img + ')' + 'no-repeat center/cover;')
        link.setAttribute('href', onz_LP[i].link)
    }
    
}

