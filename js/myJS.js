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

    var homeWrap = document.querySelector('#homeWrap');
    var pageImg = document.querySelector('#pageImg img');
    // var Link1 = document.querySelector('#Link1');
    // var Link2 = document.querySelector('#Link2');
    var GameMain1 = document.querySelector('#GameMain1')
    var GameMain2 = document.querySelector('#GameMain2')
    var GameMain3 = document.querySelector('#GameMain3')
    var GameMain4 = document.querySelector('#GameMain4')

    function getNum(btnNo) {
        Num = btnNo.target.dataset.no;
        GameName.textContent = onz_LP[Num].name;
        pageImg.setAttribute('src', onz_LP[Num].img)
        // Link1.setAttribute('href', onz_LP[Num].link1);
        // Link2.setAttribute('href', onz_LP[Num].link2);
        GameMain1.textContent = onz_LP[Num].main1;
        GameMain2.textContent = onz_LP[Num].main2;
        GameMain3.textContent = onz_LP[Num].main3;
        GameMain4.textContent = onz_LP[Num].main4;
    }

    var el = document.body;
    el.addEventListener('click', getNum, false);
    
}
let btnNo = document.querySelectorAll('[name="btn"]');
for(var j = 0; j < btnNo.length ; j++) {
    btnNo[j].addEventListener('click', loadData,false);
}

