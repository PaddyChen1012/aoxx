<?php
$json_string = file_get_contents('data.json');  
$data = json_decode($json_string, true);

switch ($_SERVER['HTTP_CF_IPCOUNTRY']) {
    case 'TH':
        $co = 'th';
        break;
    
    default:
        $co = 'en';
        break;
}


// echo'<pre>';
// print_r($_SERVER['HTTP_CF_IPCOUNTRY']);
// // print_r($data);
// echo'</pre>';
// exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="">
    <title>ทางเข้า AOXX69</title>
    <meta name="description" content="ทางเข้า AOXX69">
    <link rel="icon" href="images/apple_touch_icon-152x152.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/apple_touch_icon-152x152.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://dev.xav69.com/assets/511ade84/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P68MGRZ');</script>
    <!-- End Google Tag Manager -->
    <style>
        *{
            /* padding: 0; */
            margin: 0;
            font-family: 'Itim', cursive;
        }
        h2{
            font-size: calc(2.5rem + 2.5vw);
            text-shadow: 1px 1px 0px #fff,1px 0px 0px #fff,1px -1px 0px #fff,0px -1px 0px #fff,-1px -1px 0px #fff,-1px 0px 0px #fff,-1px 1px 0px #fff,0px 1px 0px #fff,1px 1px 2px #ff5983,1px 0px 2px #ff5983,1px -1px 2px #ff5983,0px -1px 2px #ff5983,-1px -1px 2px #ff5983,-1px 0px 2px #ff5983,-1px 1px 2px #ff5983,0px 1px 2px #ff5983;
        }
        .fixed-box{
            bottom: 10px;
            right: 10px;
            width: 60px;
            z-index: 1;
        }
        .contact-box{
            border-radius: 5px;
            background: rgba(255,255,255,.5);
        }
        .change-page.warp {
            background-color: #ff5983;
        }
        .change-page .logo{
            top: 8px;
            left: 8px;
            width: 240px;
            z-index: 1;
        }
        .change-page .page{
            min-height: 100vh;
            margin-top: -1px !important;
        }
        .change-page .warp-img {
            width: 500px;
            max-width: 100%;
            z-index: 1
        }
        .change-page .page-1 .color-bg{
            clip-path: polygon(0 0, 100% 0%, 100% 65%, 50% 85%, 0 65%);
            background-color: #3a1b33;
        }
        .change-page .page-2 .color-bg{
            clip-path: polygon(0 30%, 74% 0, 100% 15%, 100% 100%, 0% 100%);
            background-color: #3a1b33;
            background: linear-gradient(0deg, #ffffff 0%, rgba(255,255,255,0.55) 15% 85% , #ffffff 100%),url(images/f36624a369639398833c84565211fb15.jpg)no-repeat center/cover;
        }
        .change-page .page-1>div>div{
            width: 50%;
            min-width: 750px;
            padding: 1% 1% 0;
        }
        .change-page .page-2>div>div{
            width: 50%;
            min-width: 750px;
            padding: 0 1% 1%;
        }
        .btn-box{
            /* max-width: 470px; */
        }
        .change-page .animation{
            animation: down-animation 1.2s ease infinite;
        } 
        .change-page svg{
            color: #fff;
        }
        .change-page .phone-img{width: 40%;}
        .change-page .word-img{width: 60%;background: #3a1b3380;border-radius: 10px;}
        .change-page .btn{
            position: relative;
            width: 50vw;
            height: 20vw;
            max-width: 320px;
            max-height: 60px;
            border-radius: 10px;
            box-shadow: 0 0 10px inset;
        }
        .change-page .btn img{
            width: 60px;
            height: 60px;
            padding: 15px;
        }
        .change-page .btn>div{
            width: calc(100% - 30px);
        }
        .speed{
            font-size: 0.75rem;
            position: absolute;
            right: -10px;
            width: 70px !important;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            border-radius: 50px;
            border: 5px solid;
            box-shadow: 0 0 10px inset;
        }
        .speed.fast{
            border-color: #74df74;
        }
        .speed.slow{
            border-color: #dfa874;
        }
        .link-btn-wd {
            padding-right: 60px;
        }
        .page-3{
            background: linear-gradient(180deg, #ffffff 0%, rgba(255,255,255,.45) 15% 85% , #ffffff 100%),url(images/sexy-woman-listening-music.jpg)no-repeat left/cover fixed;
        }
        .page-4{
            background: linear-gradient(180deg, #ffffff 0%, rgba(255,255,255,.75) 15% 85%,#ffffff 100%),url(images/Asian_Pose_Chairs_Sitting_Legs_Shorts_Singlet_613589_1280x853.jpg)no-repeat center/cover;
        }
        .page-5{
            background: linear-gradient(180deg, #ffffff 0%, rgba(255,255,255,.45) 15% 100%),url(images/1-1910061102390-L.jpg)no-repeat center/cover fixed;
        }
        .msg-box{
            background: rgb(255 89 131 / 25%);
            border-radius: 10px;
            font-size: 1.25rem;
        }
        .img-box{
            max-height: 100vh;
            overflow: hidden;
        }

        @media (max-width: 766px){
            .change-page .page>div>div{
                width: 75%;
                min-width: unset;
            }
            .change-page .page-1>div>div{
                padding: 2.5% 2.5% 0;
            }
            .change-page .page-2>div>div{
                padding: 0 2.5% 2.5%;
            }
            .img-box{
                order: -1;
            }
        }

        @media (max-width: 575px){
            .change-page .logo{
                left: calc(50% - 120px);
            }
            .change-page .warp-img {
                width: 100%;
            }
            .change-page .page>div>div{
                width: 100%;
            }
            .change-page .page-1>div>div{
                padding: 5% 5% 0;
            }
            .change-page .page-2>div>div{
                padding: 0 5% 5%;
            }
            .change-page .phone-img{width: 50%;top: 0%;left: 50%;z-index: 9;}
            .change-page .word-img{width: 100%;}
        }

        @keyframes down-animation {
            0%{transform: translateY(-5px);opacity: 0;}
            100%{transform: translateY(5px);opacity: 1;}
        }

        .contact-btn{
            bottom: -25px;
            right: -25px;
            width: 100px;
            height: 100px;
            background: #ff9fb7;
            border-width: 10px;
            border-color: rgb(255 255 255);
            box-shadow: 0 0 10px #fff inset;
            z-index: 3;
        }
        .btn-wrap{
            bottom: -25px;
            right: -25px;
            width: 100px;
            height: 100px;
            background: rgb(58 27 51 / 75%);
            z-index: 2;
        }
        .btn-wrap.show{
            bottom: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            transition: all .4s ease;
        }
        .link-download{
            bottom: 8px;
            left: 8px;
            width: 80px;
            height: 80px;
            background: rgba(255,255,255,1);
            z-index: 2;
        }
        .link-circle{
            position: absolute;
            width: 80px;
            height: 80px;
            background: rgba(255,255,255,1);
        }
        .link-circle:nth-child(1){
            top: 8%;
            left: 35%;
        }
        .link-circle:nth-child(2){
            top: 35%;
            left: 8%;
        }
    </style>
</head>
<body>
    <div class="position-fixed fixed-box">
        <div class="apk-box mb-3 p-0">
            <a class="link-1 btn btn-light download-btn d-flex align-items-center justify-content-center border-0 rounded-circle p-2" href="/H52C33BD0_0510064628.apk">
                <img class="w-100" src="images/android-icon.png" alt="">
            </a>
        </div>
        <div class="contact-box p-2">
            <a class="link-2 btn btn-light line-btn d-flex align-items-center justify-content-center border-0 mb-2 p-0" href="https://lin.ee/PEQGiMN">
                <img class="w-100 p-2" src="images/Line@-icon.png" alt="">
            </a>
            <a class="link-2 btn btn-light line-btn d-flex align-items-center justify-content-center border-0 p-0" href="https://t.me/paiyed69">
                <img class="w-100 p-2" src="images/telegram-communication-chat-interaction-network-connection-svgrepo-com.svg" alt="">
            </a>
        </div>
    </div>
    <section class="change-page warp w-100">
        <img class="position-absolute logo" src="images/LOGO.png" alt="aoxx69">
        <div class="position-relative page page-1 row align-items-center justify-content-center w-100 m-0">
            <div class="position-absolute color-bg w-100 h-100"></div>
            <div class="d-flex align-items-center justify-content-center w-100" style="z-index: 1;">
                <div class="d-flex justify-content-center flex-wrap">
                    <img class="warp-img mb-4" src="images/AD0315-1_1040x1040_nobg.png" alt="aoxx69">
                    <div class="d-flex flex-column flex-sm-row justify-content-around flex-wrap btn-box">
                        <a class="link-1 btn btn-light download-btn d-flex align-items-center justify-content-center border-0 mx-3 mb-3 p-0" href="/H52C33BD0_0510064628.apk">
                            <img class="border-right" src="images/android-icon.png" alt=""><div class="font-weight-bold download-btn-wd">APK Download</div>
                        </a>
                        <!-- <a class="link-2 btn btn-light line-btn d-flex align-items-center justify-content-center border-0 mx-3 mb-3 p-0" href="https://lin.ee/PEQGiMN">
                            <img class="border-right" src="images/Line@-icon.png" alt=""><div class="font-weight-bold line-btn-wd"><?= $data[$co]['line-btn-wd'] ?></div>
                        </a>
                        <a class="link-2 btn btn-light line-btn d-flex align-items-center justify-content-center border-0 mx-3 mb-3 p-0" href="https://t.me/paiyed69">
                            <img class="border-right" src="images/telegram-communication-chat-interaction-network-connection-svgrepo-com.svg" alt=""><div class="font-weight-bold line-btn-wd">Telegram</div>
                        </a> -->
                        <a name="link" class="link-3 btn btn-light link-btn d-flex align-items-center justify-content-center border-0 mx-3 mb-3 p-0" data-href="aHR0cHM6Ly93d3cuYW94eDY5LnZpcC8/dXRtX3NvdXJjZT1wZXJtYWxpbmtscCZ1dG1fbWVkaXVtPWxhcHUmdXRtX2NhbXBhaWduPXBlcm1hbGlua2xwJnV0bV9pZD1sYXB1">
                            <img class="border-right" src="images/link-icon.png" alt="">
                            <div class="font-weight-bold link-btn-wd"><?= $data[$co]['link-btn-wd'] ?>1</div>
                            <div class="speed"></div>
                        </a>
                        <a name="link" class="link-4 btn btn-light link-btn d-flex align-items-center justify-content-center border-0 mx-3 mb-3 p-0" data-href="aHR0cHM6Ly93d3cuYW94eDY5LmNjLz91dG1fc291cmNlPXBlcm1hbGlua2xwJnV0bV9tZWRpdW09bGFwdSZ1dG1fY2FtcGFpZ249cGVybWFsaW5rbHAmdXRtX2lkPWxhcHU=">
                            <img class="border-right" src="images/link-icon.png" alt="">
                            <div class="font-weight-bold link-btn-wd"><?= $data[$co]['link-btn-wd'] ?>2</div>
                            <div class="speed"></div>
                        </a>
                        <a name="link" class="link-5 btn btn-light link-btn d-flex align-items-center justify-content-center border-0 mx-3 mb-3 p-0" data-href="aHR0cHM6Ly93d3cuYW94eDY5Lm5ldC8/dXRtX3NvdXJjZT1wZXJtYWxpbmtscCZ1dG1fbWVkaXVtPWxhcHUmdXRtX2NhbXBhaWduPXBlcm1hbGlua2xwJnV0bV9pZD1sYXB1">
                            <img class="border-right" src="images/link-icon.png" alt="">
                            <div class="font-weight-bold link-btn-wd"><?= $data[$co]['link-btn-wd'] ?>3</div>
                            <div class="speed"></div>
                        </a>
                        <a name="link" class="link-6 btn btn-light link-btn d-flex align-items-center justify-content-center border-0 mx-3 mb-3 p-0" data-href="aHR0cHM6Ly93d3cuYW94eDY5LmNvbS8/dXRtX3NvdXJjZT1wZXJtYWxpbmtscCZ1dG1fbWVkaXVtPWxhcHUmdXRtX2NhbXBhaWduPXBlcm1hbGlua2xwJnV0bV9pZD1sYXB1">
                            <img class="border-right" src="images/link-icon.png" alt="">
                            <div class="font-weight-bold link-btn-wd"><?= $data[$co]['link-btn-wd'] ?>4</div>
                            <div class="speed"></div>
                        </a>
                    </div>
                    <i class="w-100 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-double-down animation" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </i>
                </div>
            </div>
        </div>
        <div class="position-relative page page-2 row align-items-center justify-content-center w-100 m-0">
            <div class="position-absolute color-bg w-100 h-100"></div>
            <div class="d-flex align-items-center justify-content-center w-100 h-100" style="z-index: 1;">
                <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                    <img class="phone-img mw-100" src="images/phone.png" alt="aoxx69">
                    <img class="word-img mw-100" src="images/text_thai.png" alt="aoxx69">
                </div>
            </div>
        </div>
        <div class="position-relative page page-3 row align-items-center justify-content-center w-100 m-0">
            <div class="row justify-content-around w-100">
                <div class="col-12 col-md-5 p-2"></div>
                <div class="col-12 col-md-5 p-2">
                    <h2 class="text-center mb-4"><?= $data[$co]['long-video-title'] ?></h2>
                    <div class="msg-box p-3 mb-4">
                        <?= $data[$co]['long-video-main'] ?>
                    </div>
                    <div class="msg-box p-2">
                        <ul>
                            <li><?= $data[$co]['long-video-advantage-1'] ?></li>
                            <li><?= $data[$co]['long-video-advantage-2'] ?></li>
                            <li><?= $data[$co]['long-video-advantage-3'] ?></li>
                            <li><?= $data[$co]['long-video-advantage-4'] ?></li>
                            <li><?= $data[$co]['long-video-advantage-5'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative page page-4 row align-items-center justify-content-center w-100 m-0">
            <div class="row justify-content-around w-100">
                <div class="col-12 col-md-5 p-2 d-flex flex-column justify-content-center">
                    <h2 class="text-center mb-4 w-100"><?= $data[$co]['short-video-title'] ?></h2>
                    <div class="msg-box p-3 mb-4 w-100">
                        <?= $data[$co]['short-video-main'] ?>
                    </div>
                    <div class="msg-box p-2 w-100">
                        <ul>
                            <li><?= $data[$co]['long-video-advantage-1'] ?></li>
                            <li><?= $data[$co]['long-video-advantage-2'] ?></li>
                            <li><?= $data[$co]['long-video-advantage-3'] ?></li>
                        </ul>
                    </div>
                </div>
                <div class="img-box position-relative col-12 col-md-5">
                    <img src="images/Hot-Asian-Girls-29-1.png" class="w-100" alt="">
                </div>
            </div>
        </div>
        <div class="position-relative page page-5 row align-items-center justify-content-center w-100 m-0">
            <div class="row justify-content-around w-100">
                <div class="col-12 col-md-8 p-2 d-flex flex-column justify-content-center">
                    <h2 class="text-center mb-4 w-100"><?= $data[$co]['av-page-title'] ?></h2>
                    <div class="msg-box p-3 mb-4 w-100">
                        <?= $data[$co]['av-page-mian'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P68MGRZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script>
        let link = document.querySelectorAll('[name="link"]');
        for(let i=0; i<link.length; i++){
            link[i].addEventListener('click', function () {
                let oldLink = link[i].dataset.href;
                let newLink = atob(oldLink);
                window.location.href = newLink;
            });
        }
    </script>

    <script>
        $(function() {
            var obj_n =0;
            var start_time;
            var picLoad = function() {
                var end_time = new Date().getTime(); // 結束時間
                var pass_time = (end_time - start_time) + ' ms';
                $('.speed').eq(obj_n).html(pass_time);
                if((end_time - start_time) < 151){
                    $('.speed').eq(obj_n).addClass("fast");
                }else{
                    $('.speed').eq(obj_n).addClass("slow");
                }
                nextTest();
            };
            var picError = function() {
                $('.speed').eq(obj_n).html("Error");
                $('.speed').addClass("error");
                nextTest();
            };
            var nextTest = function() {
                ++obj_n;
                $('.speed').eq(obj_n).html('Waiting...');
                setTimeout(function() {
                    testSpeed();
                }, 500);
            };

            var testSpeed = function() {
                var obj = $('.speed').eq(obj_n);
                let testUrl = window.atob(obj.parents('.link-btn').data('href'));
                if (obj.length != 1) {
                    return false;
                }
                obj.html('Waiting...');
                // 建立 img 元素
                var pic = document.createElement('img');
                pic.onload = picLoad;
                pic.onerror = picError;
                start_time = new Date().getTime(); // 開始時間
                pic.src = testUrl.split('/').slice(0, 3).join('/') + '/favicon.ico' + "?" + (Math.random() + '').replace('0.', '') + "s" + obj_n;
            };
            obj_n = 0;
            testSpeed();
        });
    </script>
</body>
</html>