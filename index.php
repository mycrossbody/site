<?php

//*********************** Главная страница *************************
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)
 
if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}
 
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta charset="utf-8"/>
<link rel="icon" type='image/png' href="img/x474b8634283a2fbd53f6be5c4aa43c7a.png.pagespeed.ic.jZPtxwr0V8.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>window.plp={"page_id":1,"content_id":2,"lang":"ru","time":1,"screens":"screens-xs-md-lg","animations":{"section":{"type":"scroll"},"widget":{"type":"scroll"}}};window.plp_page_id=1;window.plp_content_id=2;window.plp_lang="ru";window.lptag="";window.error_handler=function(e,fn_id){window.console&&console.log&&console.log(fn_id);window['error_handler_'+fn_id]&&eval(window['error_handler_'+fn_id]);window.trackJs&&trackJs.track(e);window.console&&console.error&&console.error(e.message);};setTimeout(function(){try{x=new(XMLHttpRequest||ActiveXObject),x.open('PUT','/',1),x.send(window.lptag+'\n'+document.referrer+'\n'+(location.pathname+location.search))}catch(a){}},1e3);</script>
<link type="text/css" rel="stylesheet" href="A.assets,,_3.3,,_vendors.css+assets,,_3.3,,_plp.css+assets,,_3.3,,_nodes.css+contactless-delivery.css,Mcc.4W_GsJpsDU.css.pagespeed.cf.cxONAoN0ul.css"></link>
</link>
</link>



</head>
<body class="area ">

<div id="contactless-m1">
    <div class="contactless-m1__close"></div>
    <div class="contactless-m1__note">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABGdBTUEAALGPC/xhBQAACsBJREFUeNrlW3lQlOcZf9kFBc82k7SJZmqSam0zSRtHbSfXGJuYTNPW/JNJ06btjE2a1on9o04mnTbR1GlrrYKKwrK74AKKgoY2arQeIAKBhd2Pm0W5BcUDRZBDbnj6PM+3uxzuqt/BoX1n3tll2f2+97mv3yfEeK3V/5RfQ1OMIjwjZGp03uyvxhU+QBvfz8LPgkXoCYMAEGLlKnFvr78fEsLsFEhUoIjMmSOiHC+IKOe7+NlGYZbicR8NsORlGK15ObTpPX52BHccfucf+N1VwuR4TkTaHxbh6YH4eyHWJ9wDhEfYhdjxZZAw5S5EQt5DgvbiPiMseW24B3DDXW76biv+1oV7N14LGZI737AzK1DszJ5kRIemCBFdIFDSM1ByP8IDxwqLVI8E9Csg+E4bryXV4rWj8R6vIKOnC0u+EJuPTyDhH8XLah5hn4YqupJV2JLXriPR/jZpxkFkxOvI9GDUjAkgntRwW7oBCV+Ch0kcJ8J9MSIez/CMCEsNEDuzxoHwD6NQ6hKp+yx8XYuHOD8BhI/aZBrOD9gETY6xtPWTQsQUCeT4fLfUeyaeeO/u5ghicjyG71FDv9Tbu6PKH7hIxD+LN8qdRISP3GYpE8+4WMSfpWikE/GROUKcbCeH9yqqW8WkJX7IJFzoIJcJW7HQ7iDJsSRUuYnPq5n8xHt3BTMh1oWakKlB7cmeSO0tUrl+asqqCiJKkl897z1/66cJpWwO7BOURogNB2RvLzu8XL2InhqdD0/sK4UVRyrhN+l1sDbnAnyI+3eZ9fDT41Xw5AEXzNhV4GaMLj4hA2mYh9qgkAEUTuRQt0+HQ8DXdxfBr9POQXJtM9S2dcPNvgEYhJGrp38QLt3shZSGVlhrvwDzE0vB4GGetvvbOHMkX3Z3Tg/z+XX7SQP+qCnU4cGnozR/lVYLjsYO6B0YTbL/RV+tutENf3Y0wNeQeRpNowt92GpxauAuTGHTEY/qL8Uf1muR+ry9JWArvwadKO3hqxslfa6tBzIvt8Pn51pQK1ogtaENylu6oKN35Hf7Bwf5f9//z1mNmiBVI03fZdre+dMdQl5E9jRNqo/Ef2e/C05dbBtBTFN3HyRUXYc3T9bAE6jeM20FEIQ+IRD3NNSUuQnF7Bu2lTQyg4avihtd8NrRSm1MYFPImurfFLaeEsKKVV2U8w3VuT0e8PF9JXB6GPEkxRMXWmH5FxUwBYmVvb1/R0l2/9SBMog+e419hWfVtHbDssPlWsyhBbXgNWH1V0USZyLtM91VnaqbkFT3VDYNOTY05h2ljfBQvEI7xu+GxOTDmqx6aOrq816PfAlFEdWaYJY+Q4cYcqsWbEh2x3ys5+XmhSrpv59Rxzbukfx2VGc5rKk7sBH3b/GarT39XiZEuBrZdNRrgXM507pg0ajydnt6oNzMUEf8NxJKoKip03vQI/U34MG4Is1hLMiaDxsLLoMniFxHX/LS4Qr1pmCWTNx7HBERqOdmcixEb1mn1vGRunoOeaWzF54/WK5PZocMnLOnGHJR/T1rF0aXQKtaLZAqsUZ4nGnmFZYqt7Soh6esbzfC9lMxgfEsy5mreEBdqzw2r75BmcP17T2wMMmlVrv6kNZ32Bn+65iQy8ZtpwO5galSQpS1/ff8Dci+0g4l1zvhlSMV+ub1eA/KK05iNMnC/IG04SfHqrSYQYzYeNiAZu/1/nPc3VtVF6TwRloQElMAD+8uhuCYfN0rPANq1FdiC/kes/F1Fm4NGlWI0eAhznq5sUl9e+qxqZTOXLTRn6XWwPuZdZy1BVn1ZwAVUs8dPIuFUx28mVLD9YUGB3sd/cBSuUgiW6ChhSVvUA3xS/59BuxXOjjs0bqGcfsvzgY56dGJeJL63/IvQXO3HA770NtSsvX0Z2VqmdCPNP+Cw6HYUyl4YqPiYFTsHMR8fvRqwbi9glNXSRcH+Mbx6lvqBFr7MLWeqpbRZuc6EVsqKC00cHtZ4QUoDL2M6S2FPF/rr3kXdQuDW4qu+LzHeYwGLxwqB6NVFWMtYnVYAM3vQmhWpyg5Qa6TmlP97q/IpUPr0tTAHVl21ec9yOoaOnq5f2BU6nfMUrIITZkiaErLw0kFEvkmhr3RFdvotbnosn4McF297b2olH4UM1FF9zNLJwyR9umCxtM0oVVik09jtdbY2TdpGNDQ0QMLkhQXSaexFJ+pigFPMQN6Jw0DLmhhAIETlJnAfcIAMgFq/ojwzBBFPYD7hwHkBIOE2MJhMO7/zgeYJbN4aw3mAbvLBcNSFLa9qlu7Jw0Dypo7uWRWxgDnx8JW6k2FVylJhSnmfoD1P7Wu/XW7dc0D/DCA0m8Kge9hqWywKk6F35ZTYbkYel5pMYSOE37w+Vm42OHbF6yT9MsENxVe9nkPykUWJZ/hsyi8bpMwORbLxZBcDj/CgCSFF6KyN6m6+ZaDUUGksYM7wue8inVFc/etPsdW3qSu6DJL+VgOP8igLm6IbE0zMhpLhXQoIlCjoqt/gFWSPPIfss5raFn5Tr1pyOJZdK9DdS2wIFFlh5jqgA3J7oYIobys3BJbpQrZhQeg5icNLt7COp0YYtS5HfbY3hLIu3rTOzaj0niWrVCtj+lFWt9m37fpi+FN0dwFjLfRcFBVI27PuNzPsIS6QLHlQ7OGgms3uQOt3rykcqR13lBTFFdAZLYwhKcbGYc3jkAGmgJRC43G4hTGjKMY+gh+Zj1zjRsgtNp6++HnqbVaR2Q7gkKPGwwRwwGX65M8g5EVqltjCvcsWwF8lNvATVTqKZQ1d8GneRfhgbhCbrQQXiDjUrs3zNKUiVRfY6fpOtL4Ig9JfQ9GsTwkEOJYSx59xKcYJkePzOlvcm7UYSZpexbNCCkUapkyuaWfKHZmBcvNUF+QVzkpen1MtcDdRq+5QyY5fChKjVCaFWpMrFD6jpdZ0zcdve14PFhNi0yJs1x2uMJnj28IIDEIdZjkhJc2cuMzQJ/7WlD6U26PFFmf6AFILMIf1Y4VA57B7O2qn2KqA9X9Y2cDfAuLG54u6TJgkSqQpifvDitEg1J6aMHsXMMIzDFgAgEifGWQnqHqbFuBnpOlTqTlXZF4TgF4kgCGhL1VUiYr9APf3u+Co0gsZXUekNSphjb4XnKZbkWUt+yNtIcIU45CpBgVSYS9JfjpGDGBQt6Pj1XB7zPrYeXxajeQQlfiU1CYj45IehRB4mWg5BKGn46hUxwCSuoKmS1gYJRF0oAbph/GlVFofInhp/cOVNbFCFdbiRDb0jTihcl2bMyEZWOqCfpK/lku8CJzdEKME5wkziUYeztWPkH7HsSzpbLa7yoRcqmr62MyWR6fMM+NJeqaRMR3src35c6VbT5TjN2SccQzGH46KSD0mORQnI+0Txu/B6hIG7acDHDDT214kBsTQHwzp7cmzPA+2UdD3gl4eow4HmEPZgQmDRrGhxFEeBI65R+i1KdMzGNzIx6TPSxXkfLzg8sZh2eRqhiNpR/RvdzJMUs78B4vMtPJ1j9JmmyPzmaTAzLKODznL/HAuxiQRFJT1m/s59Y1dW9JzamHZ8qdZwjPMI7P84F6LEqitqcbGY1lcixlTA7BUpggNBezdIImtLzpvfyZmSc2UUzwYm5db00ziPBMcX+smGIhNp8IIGQGgRNoPE2bp7RhKUEiDB2ryT6uR/ofF1Y8Jei0/0IAAAAASUVORK5CYII=" alt="" class="contactless-m1__icon">
    
        <div class="contactless-m1__title">
            <p>Бесплатная консультация</p>
Наш менеджер перезвонит Вам в ближайшее время и ответит на все интересующие Вас вопросы!
Если Вам не перезвонили в течении 1 часа позвоните по номеру: <a href="tel:0964674737">096 46 74 737</a>    </div>
    </div>
</div>
<div class="area font-text-roboto font-header-roboto"><style>.node2>.wrapper1{color:#333}.node2>.wrapper1>.wrapper2{padding-top:0;padding-right:1px;padding-bottom:0;padding-left:5px}.node2 a{color:#195de6}#uid8{background-color:rgba(255,255,255,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#fff;padding-top:6px;padding-bottom:6px;padding-left:10px;padding-right:10px;font-size:14px;color:#9ca1ae}#uid8:hover,#uid8.hover,#uid8.hover-on-scroll{background-color:rgba(230,230,230,0);border-color:#e6e6e6;color:#787f90}#uid8:active,#uid8.active{background-color:rgba(230,230,230,0);border-color:#b8b8b8;color:#17645c}#uid8:before{}#uid8:active:before,#uid8.active:before{background-color:rgba(230,230,230,0)}#uid8 .fa{font-size:18px}.node5>.wrapper1{color:#333}.node5>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node5 a{color:#195de6}#uid9{background-color:rgba(255,255,255,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#fff;padding-top:6px;padding-bottom:6px;padding-left:10px;padding-right:10px;font-size:14px;color:#9ca1ae}#uid9:hover,#uid9.hover,#uid9.hover-on-scroll{background-color:rgba(230,230,230,0);border-color:#e6e6e6;color:#787f90}#uid9:active,#uid9.active{background-color:rgba(230,230,230,0);border-color:#b8b8b8;color:#17645c}#uid9:before{}#uid9:active:before,#uid9.active:before{background-color:rgba(230,230,230,0)}#uid9 .fa{font-size:18px}.node6>.wrapper1{color:#333}.node6>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node6 a{color:#195de6}#uid10{background-color:rgba(255,255,255,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#fff;padding-top:6px;padding-bottom:6px;padding-left:10px;padding-right:10px;font-size:14px;color:#9ca1ae}#uid10:hover,#uid10.hover,#uid10.hover-on-scroll{background-color:rgba(230,230,230,0);border-color:#e6e6e6;color:#787f90}#uid10:active,#uid10.active{background-color:rgba(230,230,230,0);border-color:#b8b8b8;color:#17645c}#uid10:before{}#uid10:active:before,#uid10.active:before{background-color:rgba(230,230,230,0)}#uid10 .fa{font-size:18px}.node7>.wrapper1{color:#333}.node7>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node7 a{color:#195de6}#uid11{background-color:rgba(255,255,255,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#fff;padding-top:6px;padding-bottom:6px;padding-left:10px;padding-right:10px;font-size:14px;color:#9ca1ae}#uid11:hover,#uid11.hover,#uid11.hover-on-scroll{background-color:rgba(230,230,230,0);border-color:#e6e6e6;color:#787f90}#uid11:active,#uid11.active{background-color:rgba(230,230,230,0);border-color:#b8b8b8;color:#17645c}#uid11:before{}#uid11:active:before,#uid11.active:before{background-color:rgba(230,230,230,0)}#uid11 .fa{font-size:18px}.node8>.wrapper1{color:#333}.node8>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node8 a{color:#195de6}#uid12{background-color:rgba(255,255,255,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#fff;padding-top:6px;padding-bottom:6px;padding-left:10px;padding-right:10px;font-size:14px;color:#9ca1ae}#uid12:hover,#uid12.hover,#uid12.hover-on-scroll{background-color:rgba(230,230,230,0);border-color:#e6e6e6;color:#787f90}#uid12:active,#uid12.active{background-color:rgba(230,230,230,0);border-color:#b8b8b8;color:#17645c}#uid12:before{}#uid12:active:before,#uid12.active:before{background-color:rgba(230,230,230,0)}#uid12 .fa{font-size:18px}.node9>.wrapper1{color:#333}.node9>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node9 a{color:#195de6}#uid13{background-color:rgba(255,255,255,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#fff;padding-top:6px;padding-bottom:6px;padding-left:10px;padding-right:10px;font-size:14px;color:#9ca1ae}#uid13:hover,#uid13.hover,#uid13.hover-on-scroll{background-color:rgba(230,230,230,0);border-color:#e6e6e6;color:#787f90}#uid13:active,#uid13.active{background-color:rgba(230,230,230,0);border-color:#b8b8b8;color:#17645c}#uid13:before{}#uid13:active:before,#uid13.active:before{background-color:rgba(230,230,230,0)}#uid13 .fa{font-size:18px}.node10>.wrapper1{color:#333}.node10>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node10 a{color:#195de6}.node3>.wrapper1{color:#333}.node3>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node3 a{color:#195de6}#uid14{background-color:rgba(255,255,255,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#42a95f;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;font-size:14px;color:#42a95f}#uid14:hover,#uid14.hover,#uid14.hover-on-scroll{background-color:rgba(66,169,95,0);border-color:#35874c;color:#fff}#uid14:active,#uid14.active{background-color:rgba(59,152,85,0);border-color:#2a6c3d;color:#fff}#uid14:before{}#uid14:active:before,#uid14.active:before{background-color:rgba(59,152,85,0)}#uid14 .fa{font-size:18px}.node11>.wrapper1{color:#333}.node11>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node11 a{color:#195de6}.node1>.wrapper1{color:#333}.node1>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node1 a{color:#195de6}.node0>.wrapper1{background-color:#fff;color:#333}.node0>.wrapper1>.wrapper2{padding-top:0;padding-bottom:0}.node0 a{color:#195de6}.node37>.wrapper1{color:#333}.node37>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node37 a{color:#19e6d2}#uid181{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:14px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid181:hover,#uid181.hover,#uid181.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid181:active,#uid181.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid181:before{}#uid181:active:before,#uid181.active:before{background-color:rgba(123,112,107,0)}#uid181 .fa{font-size:18px}.node21>.wrapper1{color:#333}.node21>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:0;padding-left:5px}.node21 a{color:#19e6d2}#uid182{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:14px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid182:hover,#uid182.hover,#uid182.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid182:active,#uid182.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid182:before{}#uid182:active:before,#uid182.active:before{background-color:rgba(123,112,107,0)}#uid182 .fa{font-size:18px}.node23>.wrapper1{color:#333}.node23>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node23 a{color:#19e6d2}#uid183{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:14px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid183:hover,#uid183.hover,#uid183.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid183:active,#uid183.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid183:before{}#uid183:active:before,#uid183.active:before{background-color:rgba(123,112,107,0)}#uid183 .fa{font-size:18px}.node25>.wrapper1{color:#333}.node25>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node25 a{color:#19e6d2}#uid184{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:14px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid184:hover,#uid184.hover,#uid184.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid184:active,#uid184.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid184:before{}#uid184:active:before,#uid184.active:before{background-color:rgba(123,112,107,0)}#uid184 .fa{font-size:18px}.node27>.wrapper1{color:#333}.node27>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node27 a{color:#19e6d2}#uid185{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:14px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid185:hover,#uid185.hover,#uid185.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid185:active,#uid185.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid185:before{}#uid185:active:before,#uid185.active:before{background-color:rgba(123,112,107,0)}#uid185 .fa{font-size:18px}.node29>.wrapper1{color:#333}.node29>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node29 a{color:#19e6d2}#uid186{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:14px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid186:hover,#uid186.hover,#uid186.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid186:active,#uid186.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid186:before{}#uid186:active:before,#uid186.active:before{background-color:rgba(123,112,107,0)}#uid186 .fa{font-size:18px}.node31>.wrapper1{color:#333}.node31>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.node31 a{color:#19e6d2}#uid187{background-color:rgba(255,255,255,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#42a95f;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;font-size:14px;color:#42a95f}#uid187:hover,#uid187.hover,#uid187.hover-on-scroll{background-color:rgba(66,169,95,0);border-color:#35874c;color:#fff}#uid187:active,#uid187.active{background-color:rgba(59,152,85,0);border-color:#2a6c3d;color:#fff}#uid187:before{}#uid187:active:before,#uid187.active:before{background-color:rgba(59,152,85,0)}#uid187 .fa{font-size:18px}.node33>.wrapper1{color:#333}.node33>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node33 a{color:#19e6d2}.node34>.wrapper1{color:#333}.node34>.wrapper1>.wrapper2{padding-top:9px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node34 a{color:#19e6d2}#uid188{background-color:rgba(38,166,154,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#1e857b;padding-top:0;padding-bottom:0;padding-left:12px;padding-right:12px;font-size:16px;text-decoration:underline;color:#42a95f;font-family:"Roboto Slab"}#uid188:hover,#uid188.hover,#uid188.hover-on-scroll{background-color:rgba(34,149,139,0);border-color:#186a63;color:#35874c}#uid188:active,#uid188.active{background-color:rgba(31,134,125,0);border-color:#1b786f;color:#000}#uid188:before{}#uid188:active:before,#uid188.active:before{background-color:rgba(31,134,125,0)}#uid188 .fa{font-size:21px}#uid190{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:18px;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid190:hover,#uid190.hover,#uid190.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid190:active,#uid190.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid190:before{}#uid190:active:before,#uid190.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid190 .fa{font-size:23px}.node35>.wrapper1{color:#333}.node35>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node35 a{color:#19e6d2}#node20_meta .hamburger1{position:relative}#node20_meta .hamburger1-header{display:flex;align-items:center;width:100%}#node20_meta .hamburger1-altmenu{flex-grow:1;order:1}#node20_meta .hamburger1-toggle{width:32px;height:19.2px;flex:0 0 32px;margin:5px;cursor:pointer;margin-top:0;order:2;position:relative}#node20_meta .hamburger1-toggle span{display:block;position:absolute;height:5px;width:100%;background:#0b73cf;border-radius:9px;opacity:1;left:0;-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg);-webkit-transition:.3s ease-in-out;-moz-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out}#node20_meta .hamburger1-toggle span:nth-child(1) {top:0}#node20_meta .hamburger1-toggle span:nth-child(2),
#node20_meta .hamburger1-toggle span:nth-child(3) {top:10px}#node20_meta .hamburger1-toggle span:nth-child(4) {top:19px}#node20_meta .hamburger1-toggle.is-expanded span:nth-child(1) {top:10px;width:0%;left:50%}#node20_meta .hamburger1-toggle.is-expanded span:nth-child(2) {-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}#node20_meta .hamburger1-toggle.is-expanded span:nth-child(3) {-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg)}#node20_meta .hamburger1-toggle.is-expanded span:nth-child(4) {top:9.6px;width:0%;left:50%}.node20>.wrapper1{background-color:rgba(255,255,255,.25);color:#333}.node20>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node20 a{color:#19e6d2}.node19>.wrapper1{background-color:#fff;color:#333}.node19>.wrapper1>.wrapper2{padding-top:0;padding-bottom:0}.node19 a{color:#195de6}.node43>.wrapper1{color:#fff}.node43>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:15px;padding-left:5px}.node43 a{color:#e65f19}.node44>.wrapper1{background-color:rgba(255,255,255,.25);color:#fff;border-radius:100px}.node44>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px;border-radius:97px}.node44 a{color:#19e6d2}.node45>.wrapper1{color:#fff}.node45>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node45 a{color:#e65f19}.node45 .padding{height:10px}.node46>.wrapper1{color:#fff}.node46>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node46 a{color:#e65f19}.node47>.wrapper1{color:#fff}.node47>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node47 a{color:#e65f19}.node47 .padding{height:40px}#svg15 path,#svg15 circle,#svg15 polygon,#svg15 rect{fill:#f6fbff}#svg15 defs>path{fill:none}#svg15 path[fill="none"],#svg15 circle[fill="none"],#svg15 polygon[fill="none"],#svg15 rect[fill="none"]{fill:none}.node49>.wrapper1{color:#fff}.node49>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node49 a{color:#e65f19}#svg16 path,#svg16 circle,#svg16 polygon,#svg16 rect{fill:#fff}#svg16 defs>path{fill:none}#svg16 path[fill="none"],#svg16 circle[fill="none"],#svg16 polygon[fill="none"],#svg16 rect[fill="none"]{fill:none}#svg16 .st0{fill:#fff}#svg16 .st1{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#fff;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg16 .st2{fill:none;stroke:#fff;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node50>.wrapper1{color:#fff}.node50>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node50 a{color:#e65f19}#svg17 path,#svg17 circle,#svg17 polygon,#svg17 rect{fill:#fff}#svg17 defs>path{fill:none}#svg17 path[fill="none"],#svg17 circle[fill="none"],#svg17 polygon[fill="none"],#svg17 rect[fill="none"]{fill:none}#svg17 .st0{fill:none;stroke:#fff;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node51>.wrapper1{color:#fff}.node51>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node51 a{color:#e65f19}#svg18 path,#svg18 circle,#svg18 polygon,#svg18 rect{fill:#fff}#svg18 defs>path{fill:none}#svg18 path[fill="none"],#svg18 circle[fill="none"],#svg18 polygon[fill="none"],#svg18 rect[fill="none"]{fill:none}#svg18 .st0{fill:none;stroke:#fff;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node52>.wrapper1{color:#fff}.node52>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node52 a{color:#e65f19}#svg19 path,#svg19 circle,#svg19 polygon,#svg19 rect{fill:#fff}#svg19 defs>path{fill:none}#svg19 path[fill="none"],#svg19 circle[fill="none"],#svg19 polygon[fill="none"],#svg19 rect[fill="none"]{fill:none}#svg19 .st0{fill:none;stroke:#fff;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node53>.wrapper1{color:#fff}.node53>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node53 a{color:#e65f19}.node55>.wrapper1{color:#fff}.node55>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:14px;padding-left:0}.node55 a{color:#19e6d2}.node56>.wrapper1{color:#fff}.node56>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:0;padding-left:0}.node56 a{color:#19e6d2}.node57>.wrapper1{color:#fff}.node57>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node57 a{color:#19e6d2}.node58>.wrapper1{color:#fff}.node58>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:5px;padding-left:0}.node58 a{color:#19e6d2}.node59>.wrapper1{color:#fff}.node59>.wrapper1>.wrapper2{padding-top:10px;padding-right:5px;padding-bottom:0;padding-left:5px}.node59 a{color:#19e6d2}#node60_meta .countdown4{text-align:center}#node60_meta .countdown4 .line{display:inline-block;text-align:center;line-height:1}#node60_meta .countdown4 .days{display:none}#node60_meta .countdown4 .hours{display:inline-block}#node60_meta .countdown4 .minutes{display:inline-block}#node60_meta .countdown4 .seconds{display:inline-block}#node60_meta .countdown4 .group .label{display:block}#node60_meta .countdown4 .group .digits{display:inline-block;color:#ff0}#node60_meta .countdown4 .digits{font-family:"Uni Sans",Impact,"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:bold;position:relative}#node60_meta .countdown4.big .label{font-size:20px;margin:2px 0 8px}#node60_meta .countdown4.big .group{margin:5px;min-width:128px}#node60_meta .countdown4.big .group .digits{font-size:88px}#node60_meta .countdown4.medium .label{font-size:17px;margin:2px 0 6px}#node60_meta .countdown4.medium .group{margin:4px;min-width:90px;border-radius:8px}#node60_meta .countdown4.medium .group .digits{font-size:64px}#node60_meta .countdown4.small .label{font-size:14px;margin:2px 0 6px}#node60_meta .countdown4.small .group{margin:3px;min-width:64px;height:64px;border-radius:6px}#node60_meta .countdown4.small .group .digits{font-size:46px}.node61>.wrapper1{color:#333}.node61>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node61 a{color:#19e6d2}.node60>.wrapper1{color:#fff}.node60>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node60 a{color:#19e6d2}#uid21{background-color:#b62f2f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#fff;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:24px;color:#fff;font-family:"TTNorms Bold";box-shadow:0 2px 5px 0 rgba(0,0,0,.5)}#uid21:hover,#uid21.hover,#uid21.hover-on-scroll{background-color:#cb3636;border-color:#fff;color:#fff}#uid21:active,#uid21.active{background-color:#d04a4a;border-color:#fff;color:#fff}#uid21:before{}#uid21:active:before,#uid21.active:before{background-color:#d04a4a}#uid21 .fa{font-size:31px}#uid23{background-color:#e25340;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#fff;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid23:hover,#uid23.hover,#uid23.hover-on-scroll{background-color:#de3c27;border-color:#ccc;color:#fff}#uid23:active,#uid23.active{background-color:#de3c27;border-color:#b52e1c;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid23:before{}#uid23:active:before,#uid23.active:before{background-color:#de3c27;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid23 .fa{font-size:23px}.node62>.wrapper1{color:#fff}.node62>.wrapper1>.wrapper2{padding-top:20px;padding-right:5px;padding-bottom:20px;padding-left:5px}.node62 a{color:#19e6d2}.node54>.wrapper1{background-color:rgba(10,11,11,.58);color:#fff;border-radius:100px;border-width:2px;border-style:solid;border-color:#fff}.node54>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;border-radius:98px}.node54 a{color:#19e6d2}.node48>.wrapper1{color:#fff}.node48>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node48 a{color:#e65f19}.node67>.wrapper1{color:#fff}.node67>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node67 a{color:#e65f19}.node67 .padding{height:16px}#uid24{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#fff;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:16px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid24:hover,#uid24.hover,#uid24.hover-on-scroll{background-color:#4dba6b;border-color:#fff;color:#fff}#uid24:active,#uid24.active{background-color:#5ec17a;border-color:#fff;color:#fff}#uid24:before{}#uid24:active:before,#uid24.active:before{background-color:#5ec17a}#uid24 .fa{font-size:21px}.node68>.wrapper1{color:#fff}.node68>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node68 a{color:#e65f19}.screen-xs .node42>.wrapper1{background-attachment:scroll!important}.screen-sm .node42>.wrapper1{background-attachment:scroll!important}.node42>.wrapper1{background-attachment:fixed;background-position:center bottom;background-size:cover;background-repeat:no-repeat;color:#fff}.node42>.wrapper1>.wrapper2{background-color:rgba(0,0,0,.7);padding-top:15px;padding-bottom:113px}.node42 a{color:#e65f19}.node75>.wrapper1{color:#fff}.node75>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:15px;padding-left:5px}.node75 a{color:#e65f19}.node76>.wrapper1{background-color:rgba(255,255,255,.25);color:#fff;border-radius:100px}.node76>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px;border-radius:97px}.node76 a{color:#19e6d2}.node77>.wrapper1{color:#fff}.node77>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node77 a{color:#e65f19}.node77 .padding{height:20px}.node78>.wrapper1{color:#fff}.node78>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node78 a{color:#e65f19}.node79>.wrapper1{color:#fff}.node79>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node79 a{color:#e65f19}.node80>.wrapper1{color:#fff}.node80>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node80 a{color:#e65f19}.node80 .padding{height:20px}.node82>.wrapper1{color:#fff}.node82>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:14px;padding-left:0}.node82 a{color:#19e6d2}.node83>.wrapper1{color:#fff}.node83>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:0}.node83 a{color:#19e6d2}.node84>.wrapper1{color:#fff}.node84>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node84 a{color:#19e6d2}.node85>.wrapper1{color:#fff}.node85>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:5px;padding-left:0}.node85 a{color:#19e6d2}.node86>.wrapper1{color:#fff}.node86>.wrapper1>.wrapper2{padding-top:10px;padding-right:5px;padding-bottom:0;padding-left:5px}.node86 a{color:#19e6d2}#node87_meta .countdown4{text-align:center}#node87_meta .countdown4 .line{display:inline-block;text-align:center;line-height:1}#node87_meta .countdown4 .days{display:none}#node87_meta .countdown4 .hours{display:inline-block}#node87_meta .countdown4 .minutes{display:inline-block}#node87_meta .countdown4 .seconds{display:inline-block}#node87_meta .countdown4 .group .label{display:block}#node87_meta .countdown4 .group .digits{display:inline-block;color:#ff0}#node87_meta .countdown4 .digits{font-family:"Uni Sans",Impact,"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:bold;position:relative}#node87_meta .countdown4.big .label{font-size:20px;margin:2px 0 8px}#node87_meta .countdown4.big .group{margin:5px;min-width:128px}#node87_meta .countdown4.big .group .digits{font-size:88px}#node87_meta .countdown4.medium .label{font-size:17px;margin:2px 0 6px}#node87_meta .countdown4.medium .group{margin:4px;min-width:90px;border-radius:8px}#node87_meta .countdown4.medium .group .digits{font-size:64px}#node87_meta .countdown4.small .label{font-size:14px;margin:2px 0 6px}#node87_meta .countdown4.small .group{margin:3px;min-width:64px;height:64px;border-radius:6px}#node87_meta .countdown4.small .group .digits{font-size:46px}.node88>.wrapper1{color:#333}.node88>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node88 a{color:#19e6d2}.node87>.wrapper1{color:#fff}.node87>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node87 a{color:#19e6d2}#uid192{background-color:#b62f2f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:1px;border-left-width:1px;border-right-width:1px;border-color:#fff;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:15px;font-weight:bold;color:#fff;font-family:"TTNorms Medium";box-shadow:0 2px 5px 0 rgba(0,0,0,.5)}#uid192:hover,#uid192.hover,#uid192.hover-on-scroll{background-color:#cb3636;border-color:#fff;color:#fff}#uid192:active,#uid192.active{background-color:#d04a4a;border-color:#fff;color:#fff}#uid192:before{}#uid192:active:before,#uid192.active:before{background-color:#d04a4a}#uid192 .fa{font-size:20px}#uid194{background-color:#e25340;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#fff;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid194:hover,#uid194.hover,#uid194.hover-on-scroll{background-color:#de3c27;border-color:#ccc;color:#fff}#uid194:active,#uid194.active{background-color:#de3c27;border-color:#b52e1c;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid194:before{}#uid194:active:before,#uid194.active:before{background-color:#de3c27;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid194 .fa{font-size:23px}.node89>.wrapper1{color:#fff}.node89>.wrapper1>.wrapper2{padding-top:20px;padding-right:5px;padding-bottom:20px;padding-left:5px}.node89 a{color:#19e6d2}.node81>.wrapper1{background-color:rgba(10,11,11,.58);color:#fff;border-radius:100px;border-width:2px;border-style:solid;border-color:#fff}.node81>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;border-radius:98px}.node81 a{color:#19e6d2}.node91>.wrapper1{color:#fff}.node91>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node91 a{color:#e65f19}.node91 .padding{height:20px}#svg195 path,#svg195 circle,#svg195 polygon,#svg195 rect{fill:#f3fcfb}#svg195 defs>path{fill:none}#svg195 path[fill="none"],#svg195 circle[fill="none"],#svg195 polygon[fill="none"],#svg195 rect[fill="none"]{fill:none}.node93>.wrapper1{color:#fff}.node93>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:0}.node93 a{color:#e65f19}#svg196 path,#svg196 circle,#svg196 polygon,#svg196 rect{fill:#f3fcfb}#svg196 defs>path{fill:none}#svg196 path[fill="none"],#svg196 circle[fill="none"],#svg196 polygon[fill="none"],#svg196 rect[fill="none"]{fill:none}#svg196 .st0{fill:#f3fcfb}#svg196 .st1{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#f3fcfb;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg196 .st2{fill:none;stroke:#f3fcfb;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node94>.wrapper1{color:#fff}.node94>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node94 a{color:#e65f19}#svg197 path,#svg197 circle,#svg197 polygon,#svg197 rect{fill:#f3fcfb}#svg197 defs>path{fill:none}#svg197 path[fill="none"],#svg197 circle[fill="none"],#svg197 polygon[fill="none"],#svg197 rect[fill="none"]{fill:none}#svg197 .st0{fill:none;stroke:#f3fcfb;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node95>.wrapper1{color:#fff}.node95>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node95 a{color:#e65f19}#svg198 path,#svg198 circle,#svg198 polygon,#svg198 rect{fill:#f3fcfb}#svg198 defs>path{fill:none}#svg198 path[fill="none"],#svg198 circle[fill="none"],#svg198 polygon[fill="none"],#svg198 rect[fill="none"]{fill:none}#svg198 .st0{fill:none;stroke:#f3fcfb;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node96>.wrapper1{color:#fff}.node96>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node96 a{color:#e65f19}#svg199 path,#svg199 circle,#svg199 polygon,#svg199 rect{fill:#f3fcfb}#svg199 defs>path{fill:none}#svg199 path[fill="none"],#svg199 circle[fill="none"],#svg199 polygon[fill="none"],#svg199 rect[fill="none"]{fill:none}#svg199 .st0{fill:none;stroke:#f3fcfb;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node97>.wrapper1{color:#fff}.node97>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node97 a{color:#e65f19}.node92>.wrapper1{color:#fff}.node92>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node92 a{color:#e65f19}#uid200{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#fff;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:14px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid200:hover,#uid200.hover,#uid200.hover-on-scroll{background-color:#4dba6b;border-color:#fff;color:#fff}#uid200:active,#uid200.active{background-color:#5ec17a;border-color:#fff;color:#fff}#uid200:before{}#uid200:active:before,#uid200.active:before{background-color:#5ec17a}#uid200 .fa{font-size:18px}.node101>.wrapper1{color:#fff}.node101>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node101 a{color:#e65f19}.screen-xs .node74>.wrapper1{background-attachment:scroll!important}.screen-sm .node74>.wrapper1{background-attachment:scroll!important}.node74>.wrapper1{background-attachment:fixed;background-position:center bottom;background-size:cover;background-repeat:no-repeat;color:#fff}.node74>.wrapper1>.wrapper2{background-color:rgba(0,0,0,.7);padding-top:15px;padding-bottom:113px}.node74 a{color:#e65f19}.node108>.wrapper1{color:#fff}.node108>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:15px;padding-left:5px}.node108 a{color:#e65f19}.node109>.wrapper1{background-color:rgba(255,255,255,.25);color:#fff;border-radius:100px}.node109>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px;border-radius:97px}.node109 a{color:#19e6d2}.node110>.wrapper1{color:#fff}.node110>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node110 a{color:#e65f19}.node110 .padding{height:10px}.node111>.wrapper1{color:#fff}.node111>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node111 a{color:#e65f19}.node112>.wrapper1{color:#fff}.node112>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node112 a{color:#e65f19}.node112 .padding{height:40px}#svg165 path,#svg165 circle,#svg165 polygon,#svg165 rect{fill:#f3fcfb}#svg165 defs>path{fill:none}#svg165 path[fill="none"],#svg165 circle[fill="none"],#svg165 polygon[fill="none"],#svg165 rect[fill="none"]{fill:none}.node114>.wrapper1{color:#fff}.node114>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node114 a{color:#e65f19}#svg166 path,#svg166 circle,#svg166 polygon,#svg166 rect{fill:#f3fcfb}#svg166 defs>path{fill:none}#svg166 path[fill="none"],#svg166 circle[fill="none"],#svg166 polygon[fill="none"],#svg166 rect[fill="none"]{fill:none}#svg166 .st0{fill:#f3fcfb}#svg166 .st1{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#f3fcfb;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg166 .st2{fill:none;stroke:#f3fcfb;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node115>.wrapper1{color:#fff}.node115>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node115 a{color:#e65f19}#svg167 path,#svg167 circle,#svg167 polygon,#svg167 rect{fill:#f3fcfb}#svg167 defs>path{fill:none}#svg167 path[fill="none"],#svg167 circle[fill="none"],#svg167 polygon[fill="none"],#svg167 rect[fill="none"]{fill:none}#svg167 .st0{fill:none;stroke:#f3fcfb;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node116>.wrapper1{color:#fff}.node116>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node116 a{color:#e65f19}#svg168 path,#svg168 circle,#svg168 polygon,#svg168 rect{fill:#f3fcfb}#svg168 defs>path{fill:none}#svg168 path[fill="none"],#svg168 circle[fill="none"],#svg168 polygon[fill="none"],#svg168 rect[fill="none"]{fill:none}#svg168 .st0{fill:none;stroke:#f3fcfb;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node117>.wrapper1{color:#fff}.node117>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node117 a{color:#e65f19}#svg169 path,#svg169 circle,#svg169 polygon,#svg169 rect{fill:#f3fcfb}#svg169 defs>path{fill:none}#svg169 path[fill="none"],#svg169 circle[fill="none"],#svg169 polygon[fill="none"],#svg169 rect[fill="none"]{fill:none}#svg169 .st0{fill:none;stroke:#f3fcfb;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node118>.wrapper1{color:#fff}.node118>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node118 a{color:#e65f19}.node119>.wrapper1{color:#fff}.node119>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node119 a{color:#e65f19}.node119 .padding{height:20px}.node121>.wrapper1{color:#fff}.node121>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:14px;padding-left:0}.node121 a{color:#19e6d2}.node122>.wrapper1{color:#fff}.node122>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:0;padding-left:0}.node122 a{color:#19e6d2}.node123>.wrapper1{color:#fff}.node123>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node123 a{color:#19e6d2}.node124>.wrapper1{color:#fff}.node124>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:5px;padding-left:0}.node124 a{color:#19e6d2}.node125>.wrapper1{color:#fff}.node125>.wrapper1>.wrapper2{padding-top:10px;padding-right:5px;padding-bottom:0;padding-left:5px}.node125 a{color:#19e6d2}#node126_meta .countdown4{text-align:center}#node126_meta .countdown4 .line{display:inline-block;text-align:center;line-height:1}#node126_meta .countdown4 .days{display:none}#node126_meta .countdown4 .hours{display:inline-block}#node126_meta .countdown4 .minutes{display:inline-block}#node126_meta .countdown4 .seconds{display:inline-block}#node126_meta .countdown4 .group .label{display:block}#node126_meta .countdown4 .group .digits{display:inline-block;color:#ff0}#node126_meta .countdown4 .digits{font-family:"Uni Sans",Impact,"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:bold;position:relative}#node126_meta .countdown4.big .label{font-size:20px;margin:2px 0 8px}#node126_meta .countdown4.big .group{margin:5px;min-width:128px}#node126_meta .countdown4.big .group .digits{font-size:88px}#node126_meta .countdown4.medium .label{font-size:17px;margin:2px 0 6px}#node126_meta .countdown4.medium .group{margin:4px;min-width:90px;border-radius:8px}#node126_meta .countdown4.medium .group .digits{font-size:64px}#node126_meta .countdown4.small .label{font-size:14px;margin:2px 0 6px}#node126_meta .countdown4.small .group{margin:3px;min-width:64px;height:64px;border-radius:6px}#node126_meta .countdown4.small .group .digits{font-size:46px}.node127>.wrapper1{color:#333}.node127>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node127 a{color:#19e6d2}.node126>.wrapper1{color:#fff}.node126>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node126 a{color:#19e6d2}#uid171{background-color:#b62f2f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#fff;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:21px;color:#fff;font-family:"TTNorms Bold";box-shadow:0 2px 5px 0 rgba(0,0,0,.5)}#uid171:hover,#uid171.hover,#uid171.hover-on-scroll{background-color:#cb3636;border-color:#fff;color:#fff}#uid171:active,#uid171.active{background-color:#d04a4a;border-color:#fff;color:#fff}#uid171:before{}#uid171:active:before,#uid171.active:before{background-color:#d04a4a}#uid171 .fa{font-size:27px}#uid173{background-color:#e25340;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#fff;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid173:hover,#uid173.hover,#uid173.hover-on-scroll{background-color:#de3c27;border-color:#ccc;color:#fff}#uid173:active,#uid173.active{background-color:#de3c27;border-color:#b52e1c;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid173:before{}#uid173:active:before,#uid173.active:before{background-color:#de3c27;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid173 .fa{font-size:23px}.node128>.wrapper1{color:#fff}.node128>.wrapper1>.wrapper2{padding-top:20px;padding-right:5px;padding-bottom:20px;padding-left:5px}.node128 a{color:#19e6d2}.node120>.wrapper1{background-color:rgba(10,11,11,.58);color:#fff;border-radius:100px;border-width:2px;border-style:solid;border-color:#fff}.node120>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;border-radius:98px}.node120 a{color:#19e6d2}.node113>.wrapper1{color:#fff}.node113>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node113 a{color:#e65f19}.node133>.wrapper1{color:#fff}.node133>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node133 a{color:#e65f19}.node133 .padding{height:23px}#uid174{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#fff;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:15px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid174:hover,#uid174.hover,#uid174.hover-on-scroll{background-color:#4dba6b;border-color:#fff;color:#fff}#uid174:active,#uid174.active{background-color:#5ec17a;border-color:#fff;color:#fff}#uid174:before{}#uid174:active:before,#uid174.active:before{background-color:#5ec17a}#uid174 .fa{font-size:20px}.node134>.wrapper1{color:#fff}.node134>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node134 a{color:#e65f19}.screen-xs .node107>.wrapper1{background-attachment:scroll!important}.screen-sm .node107>.wrapper1{background-attachment:scroll!important}.node107>.wrapper1{background-attachment:fixed;background-position:center bottom;background-size:cover;background-repeat:no-repeat;color:#fff}.node107>.wrapper1>.wrapper2{background-color:rgba(0,0,0,.7);padding-top:15px;padding-bottom:113px}.node107 a{color:#e65f19}.node141>.wrapper1{color:#333}.node141>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node141 a{color:#19e6d2}.node142>.wrapper1{color:#333}.node142>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node142 a{color:#19e6d2}.node143>.wrapper1{color:#333}.node143>.wrapper1>.wrapper2{padding-top:18px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node143 a{color:#19e6d2}#svg25 path,#svg25 circle,#svg25 polygon,#svg25 rect{fill:#e53835}#svg25 defs>path{fill:none}#svg25 path[fill="none"],#svg25 circle[fill="none"],#svg25 polygon[fill="none"],#svg25 rect[fill="none"]{fill:none}#svg25 .st0{fill:none;stroke:#e53835;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node144>.wrapper1{color:#333}.node144>.wrapper1>.wrapper2{padding-top:26px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node144 a{color:#19e6d2}.node145>.wrapper1{color:#333}.node145>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.node145 a{color:#19e6d2}#uid26{background-color:rgba(226,84,64,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:3px;border-bottom-width:3px;border-left-width:3px;border-right-width:3px;border-color:#e25440;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:15px;font-weight:bold;color:#e25440;font-family:"Open Sans"}#uid26:hover,#uid26.hover,#uid26.hover-on-scroll{background-color:#e25440;border-color:#e25440;color:#fff}#uid26:active,#uid26.active{background-color:#df3d27;border-color:#e25440;color:#fff}#uid26:before{}#uid26:active:before,#uid26.active:before{background-color:#df3d27}#uid26 .fa{font-size:20px}.node146>.wrapper1{color:#333}.node146>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node146 a{color:#19e6d2}.node148>.wrapper1{color:#333}.node148>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node148 a{color:#19e6d2}.node148 .padding{height:40px}#svg27 path,#svg27 circle,#svg27 polygon,#svg27 rect{fill:#4caf50}#svg27 defs>path{fill:none}#svg27 path[fill="none"],#svg27 circle[fill="none"],#svg27 polygon[fill="none"],#svg27 rect[fill="none"]{fill:none}#svg27 .st0{fill:#4caf50}#svg27 .st1{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg27 .st2{fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node150>.wrapper1{color:#333}.node150>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node150 a{color:#19e6d2}.node151>.wrapper1{color:#333}.node151>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node151 a{color:#19e6d2}.node152>.wrapper1{color:#333}.node152>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node152 a{color:#19e6d2}.node152 .padding{height:20px}#svg28 path,#svg28 circle,#svg28 polygon,#svg28 rect{fill:#4caf50}#svg28 defs>path{fill:none}#svg28 path[fill="none"],#svg28 circle[fill="none"],#svg28 polygon[fill="none"],#svg28 rect[fill="none"]{fill:none}#svg28 .st0{fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node153>.wrapper1{color:#333}.node153>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node153 a{color:#19e6d2}.node154>.wrapper1{color:#333}.node154>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node154 a{color:#19e6d2}.node155>.wrapper1{color:#333}.node155>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node155 a{color:#19e6d2}.node155 .padding{height:20px}#svg29 path,#svg29 circle,#svg29 polygon,#svg29 rect{fill:#4caf50}#svg29 defs>path{fill:none}#svg29 path[fill="none"],#svg29 circle[fill="none"],#svg29 polygon[fill="none"],#svg29 rect[fill="none"]{fill:none}#svg29 .st0{fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node156>.wrapper1{color:#333}.node156>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node156 a{color:#19e6d2}.node157>.wrapper1{color:#333}.node157>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node157 a{color:#19e6d2}.node158>.wrapper1{color:#333}.node158>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node158 a{color:#19e6d2}#svg30 path,#svg30 circle,#svg30 polygon,#svg30 rect{fill:#4caf50}#svg30 defs>path{fill:none}#svg30 path[fill="none"],#svg30 circle[fill="none"],#svg30 polygon[fill="none"],#svg30 rect[fill="none"]{fill:none}#svg30 .st0{fill:#4caf50}#svg30 .st1{fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node159>.wrapper1{color:#333}.node159>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node159 a{color:#19e6d2}.node160>.wrapper1{color:#333}.node160>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node160 a{color:#19e6d2}.node161>.wrapper1{color:#333}.node161>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node161 a{color:#19e6d2}.node161 .padding{height:20px}#svg31 path,#svg31 circle,#svg31 polygon,#svg31 rect{fill:#4caf50}#svg31 defs>path{fill:none}#svg31 path[fill="none"],#svg31 circle[fill="none"],#svg31 polygon[fill="none"],#svg31 rect[fill="none"]{fill:none}#svg31 .st0{fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node162>.wrapper1{color:#333}.node162>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node162 a{color:#19e6d2}.node163>.wrapper1{color:#333}.node163>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node163 a{color:#19e6d2}.node164>.wrapper1{color:#333}.node164>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node164 a{color:#19e6d2}.node164 .padding{height:20px}#svg32 path,#svg32 circle,#svg32 polygon,#svg32 rect{fill:#4caf50}#svg32 defs>path{fill:none}#svg32 path[fill="none"],#svg32 circle[fill="none"],#svg32 polygon[fill="none"],#svg32 rect[fill="none"]{fill:none}#svg32 .st0{fill:none;stroke:#4caf50;stroke-width:1.5741;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st1{fill:none;stroke:#4caf50;stroke-width:1.4706;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st2{fill:none;stroke:#4caf50;stroke-width:1.4142;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st3{fill:none;stroke:#4caf50;stroke-width:1.6325;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st4{fill:none;stroke:#4caf50;stroke-width:1.7255;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st5{fill:none;stroke:#4caf50;stroke-width:1.5409;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st6{fill:none;stroke:#4caf50;stroke-width:1.98;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st7{fill:none;stroke:#4caf50;stroke-width:1.7603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st8{fill:none;stroke:#4caf50;stroke-width:1.6115;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st9{fill:none;stroke:#4caf50;stroke-width:1.9588;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st10{fill:none;stroke:#4caf50;stroke-width:1.8303;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st11{fill:none;stroke:#4caf50;stroke-width:1.7999;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st12{fill:none;stroke:#4caf50;stroke-width:1.4403;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st13{fill:none;stroke:#4caf50;stroke-width:1.648;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st14{fill:none;stroke:#4caf50;stroke-width:1.8584;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st15{fill:none;stroke:#4caf50;stroke-width:1.7535;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st16{fill:none;stroke:#4caf50;stroke-width:1.6851;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st17{fill:none;stroke:#4caf50;stroke-width:1.5801;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st18{fill:none;stroke:#4caf50;stroke-width:2.039;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st19{fill:none;stroke:#4caf50;stroke-width:1.7798;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st20{fill:none;stroke:#4caf50;stroke-width:2.0982;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st21{fill:none;stroke:#4caf50;stroke-width:1.5389;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st22{fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st23{fill:none;stroke:#4caf50;stroke-width:1.8391;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg32 .st24{fill:none;stroke:#4caf50;stroke-width:1.6783;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node165>.wrapper1{color:#333}.node165>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node165 a{color:#19e6d2}.node166>.wrapper1{color:#333}.node166>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node166 a{color:#19e6d2}.node149>.wrapper1{color:#333}.node149>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node149 a{color:#19e6d2}.node171>.wrapper1{color:#333}.node171>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node171 a{color:#19e6d2}#uid33{background-color:#e25440;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#ca331e;padding-top:14px;padding-bottom:14px;padding-left:28px;padding-right:28px;font-size:18px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid33:hover,#uid33.hover,#uid33.hover-on-scroll{background-color:#e56553;border-color:#ca331e;color:#fff}#uid33:active,#uid33.active{background-color:#e87464;border-color:#ca331e;color:#fff}#uid33:before{}#uid33:active:before,#uid33.active:before{background-color:#e87464}#uid33 .fa{font-size:23px}#uid35{background-color:#e25440;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#ca331e;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:18px;font-weight:bold;color:#fff;font-family:"Open Sans";box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid35:hover,#uid35.hover,#uid35.hover-on-scroll{background-color:#df3d27;border-color:#a22918;color:#fff}#uid35:active,#uid35.active{background-color:#df3d27;border-color:#b62e1b;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid35:before{}#uid35:active:before,#uid35.active:before{background-color:#df3d27;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid35 .fa{font-size:23px}.node172>.wrapper1{color:#333}.node172>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node172 a{color:#19e6d2}.node170>.wrapper1{color:#333}.node170>.wrapper1>.wrapper2{padding-top:45px;padding-right:5px;padding-bottom:0;padding-left:5px}.node170 a{color:#19e6d2}.node140>.wrapper1{background-color:#fff;color:#333}.node140>.wrapper1>.wrapper2{padding-top:60px;padding-bottom:90px}.node140 a{color:#19e6d2}.node179>.wrapper1{color:#333}.node179>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node179 a{color:#19e6d2}.node180>.wrapper1{color:#333}.node180>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node180 a{color:#19e6d2}.node181>.wrapper1{color:#333}.node181>.wrapper1>.wrapper2{padding-top:18px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node181 a{color:#19e6d2}#svg201 path,#svg201 circle,#svg201 polygon,#svg201 rect{fill:#e53835}#svg201 defs>path{fill:none}#svg201 path[fill="none"],#svg201 circle[fill="none"],#svg201 polygon[fill="none"],#svg201 rect[fill="none"]{fill:none}#svg201 .st0{fill:none;stroke:#e53835;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node182>.wrapper1{color:#333}.node182>.wrapper1>.wrapper2{padding-top:26px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node182 a{color:#19e6d2}.node183>.wrapper1{color:#333}.node183>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.node183 a{color:#19e6d2}#uid202{background-color:rgba(226,84,64,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:3px;border-bottom-width:3px;border-left-width:3px;border-right-width:3px;border-color:#e25440;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:12px;font-weight:bold;color:#e25440;font-family:"Open Sans"}#uid202:hover,#uid202.hover,#uid202.hover-on-scroll{background-color:#e25440;border-color:#e25440;color:#fff}#uid202:active,#uid202.active{background-color:#df3d27;border-color:#e25440;color:#fff}#uid202:before{}#uid202:active:before,#uid202.active:before{background-color:#df3d27}#uid202 .fa{font-size:16px}.node184>.wrapper1{color:#333}.node184>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node184 a{color:#19e6d2}.node186>.wrapper1{color:#333}.node186>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node186 a{color:#19e6d2}.node186 .padding{height:40px}#svg203 path,#svg203 circle,#svg203 polygon,#svg203 rect{fill:#4caf50}#svg203 defs>path{fill:none}#svg203 path[fill="none"],#svg203 circle[fill="none"],#svg203 polygon[fill="none"],#svg203 rect[fill="none"]{fill:none}#svg203 .st0{fill:#4caf50}#svg203 .st1{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg203 .st2{fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node188>.wrapper1{color:#333}.node188>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node188 a{color:#19e6d2}.node189>.wrapper1{color:#333}.node189>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node189 a{color:#19e6d2}.node190>.wrapper1{color:#333}.node190>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node190 a{color:#19e6d2}.node190 .padding{height:20px}#svg204 path,#svg204 circle,#svg204 polygon,#svg204 rect{fill:#4caf50}#svg204 defs>path{fill:none}#svg204 path[fill="none"],#svg204 circle[fill="none"],#svg204 polygon[fill="none"],#svg204 rect[fill="none"]{fill:none}#svg204 .st0{fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node191>.wrapper1{color:#333}.node191>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node191 a{color:#19e6d2}.node192>.wrapper1{color:#333}.node192>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node192 a{color:#19e6d2}.node193>.wrapper1{color:#333}.node193>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node193 a{color:#19e6d2}.node193 .padding{height:20px}#svg205 path,#svg205 circle,#svg205 polygon,#svg205 rect{fill:#4caf50}#svg205 defs>path{fill:none}#svg205 path[fill="none"],#svg205 circle[fill="none"],#svg205 polygon[fill="none"],#svg205 rect[fill="none"]{fill:none}#svg205 .st0{fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node194>.wrapper1{color:#333}.node194>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node194 a{color:#19e6d2}.node195>.wrapper1{color:#333}.node195>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node195 a{color:#19e6d2}.node196>.wrapper1{color:#333}.node196>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node196 a{color:#19e6d2}#svg206 path,#svg206 circle,#svg206 polygon,#svg206 rect{fill:#4caf50}#svg206 defs>path{fill:none}#svg206 path[fill="none"],#svg206 circle[fill="none"],#svg206 polygon[fill="none"],#svg206 rect[fill="none"]{fill:none}#svg206 .st0{fill:#4caf50}#svg206 .st1{fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node197>.wrapper1{color:#333}.node197>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node197 a{color:#19e6d2}.node198>.wrapper1{color:#333}.node198>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node198 a{color:#19e6d2}.node199>.wrapper1{color:#333}.node199>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node199 a{color:#19e6d2}.node199 .padding{height:20px}#svg207 path,#svg207 circle,#svg207 polygon,#svg207 rect{fill:#4caf50}#svg207 defs>path{fill:none}#svg207 path[fill="none"],#svg207 circle[fill="none"],#svg207 polygon[fill="none"],#svg207 rect[fill="none"]{fill:none}#svg207 .st0{fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node200>.wrapper1{color:#333}.node200>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node200 a{color:#19e6d2}.node201>.wrapper1{color:#333}.node201>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node201 a{color:#19e6d2}.node202>.wrapper1{color:#333}.node202>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node202 a{color:#19e6d2}.node202 .padding{height:20px}#svg208 path,#svg208 circle,#svg208 polygon,#svg208 rect{fill:#4caf50}#svg208 defs>path{fill:none}#svg208 path[fill="none"],#svg208 circle[fill="none"],#svg208 polygon[fill="none"],#svg208 rect[fill="none"]{fill:none}#svg208 .st0{fill:none;stroke:#4caf50;stroke-width:1.5741;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st1{fill:none;stroke:#4caf50;stroke-width:1.4706;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st2{fill:none;stroke:#4caf50;stroke-width:1.4142;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st3{fill:none;stroke:#4caf50;stroke-width:1.6325;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st4{fill:none;stroke:#4caf50;stroke-width:1.7255;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st5{fill:none;stroke:#4caf50;stroke-width:1.5409;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st6{fill:none;stroke:#4caf50;stroke-width:1.98;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st7{fill:none;stroke:#4caf50;stroke-width:1.7603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st8{fill:none;stroke:#4caf50;stroke-width:1.6115;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st9{fill:none;stroke:#4caf50;stroke-width:1.9588;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st10{fill:none;stroke:#4caf50;stroke-width:1.8303;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st11{fill:none;stroke:#4caf50;stroke-width:1.7999;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st12{fill:none;stroke:#4caf50;stroke-width:1.4403;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st13{fill:none;stroke:#4caf50;stroke-width:1.648;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st14{fill:none;stroke:#4caf50;stroke-width:1.8584;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st15{fill:none;stroke:#4caf50;stroke-width:1.7535;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st16{fill:none;stroke:#4caf50;stroke-width:1.6851;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st17{fill:none;stroke:#4caf50;stroke-width:1.5801;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st18{fill:none;stroke:#4caf50;stroke-width:2.039;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st19{fill:none;stroke:#4caf50;stroke-width:1.7798;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st20{fill:none;stroke:#4caf50;stroke-width:2.0982;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st21{fill:none;stroke:#4caf50;stroke-width:1.5389;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st22{fill:none;stroke:#4caf50;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st23{fill:none;stroke:#4caf50;stroke-width:1.8391;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}#svg208 .st24{fill:none;stroke:#4caf50;stroke-width:1.6783;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node203>.wrapper1{color:#333}.node203>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node203 a{color:#19e6d2}.node204>.wrapper1{color:#333}.node204>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node204 a{color:#19e6d2}.node187>.wrapper1{color:#333}.node187>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node187 a{color:#19e6d2}.node209>.wrapper1{color:#333}.node209>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node209 a{color:#19e6d2}#uid209{background-color:#e25440;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#ca331e;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:14px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid209:hover,#uid209.hover,#uid209.hover-on-scroll{background-color:#e56553;border-color:#ca331e;color:#fff}#uid209:active,#uid209.active{background-color:#e87464;border-color:#ca331e;color:#fff}#uid209:before{}#uid209:active:before,#uid209.active:before{background-color:#e87464}#uid209 .fa{font-size:18px}#uid211{background-color:#e25440;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#ca331e;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid211:hover,#uid211.hover,#uid211.hover-on-scroll{background-color:#df3d27;border-color:#a22918;color:#fff}#uid211:active,#uid211.active{background-color:#df3d27;border-color:#b62e1b;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid211:before{}#uid211:active:before,#uid211.active:before{background-color:#df3d27;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid211 .fa{font-size:23px}.node210>.wrapper1{color:#333}.node210>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node210 a{color:#19e6d2}.node208>.wrapper1{color:#333}.node208>.wrapper1>.wrapper2{padding-top:45px;padding-right:5px;padding-bottom:0;padding-left:5px}.node208 a{color:#19e6d2}.node178>.wrapper1{background-color:#fff;color:#333}.node178>.wrapper1>.wrapper2{padding-top:60px;padding-bottom:90px}.node178 a{color:#19e6d2}.node217>.wrapper1{color:#333}.node217>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:47px;padding-left:5px}.node217 a{color:#19e6d2}.node227>.wrapper1{color:#333}.node227>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node227 a{color:#e61919}.node228>.wrapper1{color:#333}.node228>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node228 a{color:#e61919}.node229>.wrapper1{color:#333}.node229>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:0}.node229 a{color:#e61919}.node230>.wrapper1{color:#333}.node230>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node230 a{color:#e61919}.node231>.wrapper1{color:#333}.node231>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node231 a{color:#e61919}.node232>.wrapper1{color:#333}.node232>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node232 a{color:#e61919}.node233>.wrapper1{color:#333}.node233>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.node233 a{color:#e61919}.node234>.wrapper1{color:#333;border-width:1px;border-style:solid;border-color:red}.node234>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node234 a{color:#e61919}.node235>.wrapper1{color:#333}.node235>.wrapper1>.wrapper2{padding-top:10px;padding-right:5px;padding-bottom:0;padding-left:5px}.node235 a{color:#e61919}#node236_meta .countdown4{text-align:center}#node236_meta .countdown4 .line{display:inline-block;text-align:center;line-height:1}#node236_meta .countdown4 .days{display:none}#node236_meta .countdown4 .hours{display:inline-block}#node236_meta .countdown4 .minutes{display:inline-block}#node236_meta .countdown4 .seconds{display:inline-block}#node236_meta .countdown4 .group .label{display:block}#node236_meta .countdown4 .group .digits{display:inline-block;color:#188efa}#node236_meta .countdown4 .digits{font-family:"Uni Sans",Impact,"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:bold;position:relative}#node236_meta .countdown4.big .label{font-size:20px;margin:2px 0 8px}#node236_meta .countdown4.big .group{margin:5px;min-width:128px}#node236_meta .countdown4.big .group .digits{font-size:88px}#node236_meta .countdown4.medium .label{font-size:17px;margin:2px 0 6px}#node236_meta .countdown4.medium .group{margin:4px;min-width:90px;border-radius:8px}#node236_meta .countdown4.medium .group .digits{font-size:64px}#node236_meta .countdown4.small .label{font-size:14px;margin:2px 0 6px}#node236_meta .countdown4.small .group{margin:3px;min-width:64px;height:64px;border-radius:6px}#node236_meta .countdown4.small .group .digits{font-size:46px}.node237>.wrapper1{color:#333}.node237>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node237 a{color:#e61919}.node236>.wrapper1{color:#333}.node236>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node236 a{color:#e61919}#uid45{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#35874c;padding-top:14px;padding-bottom:14px;padding-left:28px;padding-right:28px;font-size:16px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid45:hover,#uid45.hover,#uid45.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid45:active,#uid45.active{background-color:#3b9855;border-color:#2f7a44;color:#fff}#uid45:before{}#uid45:active:before,#uid45.active:before{background-color:#3b9855}#uid45 .fa{font-size:21px}#uid47{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid47:hover,#uid47.hover,#uid47.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid47:active,#uid47.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid47:before{}#uid47:active:before,#uid47.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid47 .fa{font-size:23px}.node238>.wrapper1{color:#333}.node238>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node238 a{color:#e61919}#uid49{background-color:rgba(38,166,154,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#41a5ff;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:13px;color:#0b73cf;font-family:"TTNorms Medium"}#uid49:hover,#uid49.hover,#uid49.hover-on-scroll{background-color:rgba(38,166,154,0);border-color:#0187ff;color:#2191f3}#uid49:active,#uid49.active{background-color:rgba(38,166,154,0);border-color:#1e857b;color:#000}#uid49:before{}#uid49:active:before,#uid49.active:before{background-color:rgba(38,166,154,0)}#uid49 .fa{font-size:17px}.node240>.wrapper1{color:#333}.node240>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node240 a{color:#e61919}.node242>.wrapper1{color:#333}.node242>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node242 a{color:#e61919}#svg50 path,#svg50 circle,#svg50 polygon,#svg50 rect{fill:#06c740}#svg50 defs>path{fill:none}#svg50 path[fill="none"],#svg50 circle[fill="none"],#svg50 polygon[fill="none"],#svg50 rect[fill="none"]{fill:none}.node244>.wrapper1{color:#333}.node244>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node244 a{color:#e61919}#svg51 path,#svg51 circle,#svg51 polygon,#svg51 rect{fill:#06c740}#svg51 defs>path{fill:none}#svg51 path[fill="none"],#svg51 circle[fill="none"],#svg51 polygon[fill="none"],#svg51 rect[fill="none"]{fill:none}.node245>.wrapper1{color:#333}.node245>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node245 a{color:#e61919}#svg52 path,#svg52 circle,#svg52 polygon,#svg52 rect{fill:#06c740}#svg52 defs>path{fill:none}#svg52 path[fill="none"],#svg52 circle[fill="none"],#svg52 polygon[fill="none"],#svg52 rect[fill="none"]{fill:none}.node246>.wrapper1{color:#333}.node246>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node246 a{color:#e61919}#svg53 path,#svg53 circle,#svg53 polygon,#svg53 rect{fill:#06c740}#svg53 defs>path{fill:none}#svg53 path[fill="none"],#svg53 circle[fill="none"],#svg53 polygon[fill="none"],#svg53 rect[fill="none"]{fill:none}.node247>.wrapper1{color:#333}.node247>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node247 a{color:#e61919}#svg54 path,#svg54 circle,#svg54 polygon,#svg54 rect{fill:#06c740}#svg54 defs>path{fill:none}#svg54 path[fill="none"],#svg54 circle[fill="none"],#svg54 polygon[fill="none"],#svg54 rect[fill="none"]{fill:none}.node248>.wrapper1{color:#333}.node248>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node248 a{color:#e61919}#svg55 path,#svg55 circle,#svg55 polygon,#svg55 rect{fill:#06c740}#svg55 defs>path{fill:none}#svg55 path[fill="none"],#svg55 circle[fill="none"],#svg55 polygon[fill="none"],#svg55 rect[fill="none"]{fill:none}.node249>.wrapper1{color:#333}.node249>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node249 a{color:#e61919}#svg56 path,#svg56 circle,#svg56 polygon,#svg56 rect{fill:#06c740}#svg56 defs>path{fill:none}#svg56 path[fill="none"],#svg56 circle[fill="none"],#svg56 polygon[fill="none"],#svg56 rect[fill="none"]{fill:none}.node250>.wrapper1{color:#333}.node250>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node250 a{color:#e61919}#svg57 path,#svg57 circle,#svg57 polygon,#svg57 rect{fill:#06c740}#svg57 defs>path{fill:none}#svg57 path[fill="none"],#svg57 circle[fill="none"],#svg57 polygon[fill="none"],#svg57 rect[fill="none"]{fill:none}.node251>.wrapper1{color:#333}.node251>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node251 a{color:#e61919}#svg58 path,#svg58 circle,#svg58 polygon,#svg58 rect{fill:#06c740}#svg58 defs>path{fill:none}#svg58 path[fill="none"],#svg58 circle[fill="none"],#svg58 polygon[fill="none"],#svg58 rect[fill="none"]{fill:none}.node252>.wrapper1{color:#333}.node252>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node252 a{color:#e61919}.node243>.wrapper1{color:#333}.node243>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node243 a{color:#e61919}.node226>.wrapper1{background-color:#fff;color:#333;border-radius:5px;border-width:1px;border-style:solid;border-color:#d9d9d9;box-shadow:0 2px 5px 0 rgba(0,0,0,.5)}.node226>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;border-radius:4px}.node226 a{color:#e61919}.node254>.wrapper1{color:#333}.node254>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node254 a{color:#e61919}.node255>.wrapper1{color:#333}.node255>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node255 a{color:#e61919}.node256>.wrapper1{color:#333}.node256>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:0}.node256 a{color:#e61919}.node257>.wrapper1{color:#333}.node257>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node257 a{color:#e61919}.node258>.wrapper1{color:#333}.node258>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node258 a{color:#e61919}.node259>.wrapper1{color:#333}.node259>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node259 a{color:#e61919}.node260>.wrapper1{color:#333}.node260>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.node260 a{color:#e61919}.node261>.wrapper1{color:#333;border-width:1px;border-style:solid;border-color:red}.node261>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node261 a{color:#e61919}.node262>.wrapper1{color:#333}.node262>.wrapper1>.wrapper2{padding-top:10px;padding-right:5px;padding-bottom:0;padding-left:5px}.node262 a{color:#e61919}#node263_meta .countdown4{text-align:center}#node263_meta .countdown4 .line{display:inline-block;text-align:center;line-height:1}#node263_meta .countdown4 .days{display:none}#node263_meta .countdown4 .hours{display:inline-block}#node263_meta .countdown4 .minutes{display:inline-block}#node263_meta .countdown4 .seconds{display:inline-block}#node263_meta .countdown4 .group .label{display:block}#node263_meta .countdown4 .group .digits{display:inline-block;color:#188efa}#node263_meta .countdown4 .digits{font-family:"Uni Sans",Impact,"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:bold;position:relative}#node263_meta .countdown4.big .label{font-size:20px;margin:2px 0 8px}#node263_meta .countdown4.big .group{margin:5px;min-width:128px}#node263_meta .countdown4.big .group .digits{font-size:88px}#node263_meta .countdown4.medium .label{font-size:17px;margin:2px 0 6px}#node263_meta .countdown4.medium .group{margin:4px;min-width:90px;border-radius:8px}#node263_meta .countdown4.medium .group .digits{font-size:64px}#node263_meta .countdown4.small .label{font-size:14px;margin:2px 0 6px}#node263_meta .countdown4.small .group{margin:3px;min-width:64px;height:64px;border-radius:6px}#node263_meta .countdown4.small .group .digits{font-size:46px}.node264>.wrapper1{color:#333}.node264>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node264 a{color:#e61919}.node263>.wrapper1{color:#333}.node263>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node263 a{color:#e61919}#uid60{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#35874c;padding-top:14px;padding-bottom:14px;padding-left:28px;padding-right:28px;font-size:16px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid60:hover,#uid60.hover,#uid60.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid60:active,#uid60.active{background-color:#3b9855;border-color:#2f7a44;color:#fff}#uid60:before{}#uid60:active:before,#uid60.active:before{background-color:#3b9855}#uid60 .fa{font-size:21px}#uid62{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid62:hover,#uid62.hover,#uid62.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid62:active,#uid62.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid62:before{}#uid62:active:before,#uid62.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid62 .fa{font-size:23px}.node265>.wrapper1{color:#333}.node265>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node265 a{color:#e61919}#uid64{background-color:rgba(38,166,154,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#41a5ff;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:13px;color:#0b73cf;font-family:"TTNorms Medium"}#uid64:hover,#uid64.hover,#uid64.hover-on-scroll{background-color:rgba(38,166,154,0);border-color:#0187ff;color:#2191f3}#uid64:active,#uid64.active{background-color:rgba(38,166,154,0);border-color:#1e857b;color:#000}#uid64:before{}#uid64:active:before,#uid64.active:before{background-color:rgba(38,166,154,0)}#uid64 .fa{font-size:17px}.node267>.wrapper1{color:#333}.node267>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node267 a{color:#e61919}.node269>.wrapper1{color:#333}.node269>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node269 a{color:#e61919}#svg65 path,#svg65 circle,#svg65 polygon,#svg65 rect{fill:#06c740}#svg65 defs>path{fill:none}#svg65 path[fill="none"],#svg65 circle[fill="none"],#svg65 polygon[fill="none"],#svg65 rect[fill="none"]{fill:none}.node271>.wrapper1{color:#333}.node271>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node271 a{color:#e61919}#svg66 path,#svg66 circle,#svg66 polygon,#svg66 rect{fill:#06c740}#svg66 defs>path{fill:none}#svg66 path[fill="none"],#svg66 circle[fill="none"],#svg66 polygon[fill="none"],#svg66 rect[fill="none"]{fill:none}.node272>.wrapper1{color:#333}.node272>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node272 a{color:#e61919}#svg67 path,#svg67 circle,#svg67 polygon,#svg67 rect{fill:#06c740}#svg67 defs>path{fill:none}#svg67 path[fill="none"],#svg67 circle[fill="none"],#svg67 polygon[fill="none"],#svg67 rect[fill="none"]{fill:none}.node273>.wrapper1{color:#333}.node273>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node273 a{color:#e61919}#svg68 path,#svg68 circle,#svg68 polygon,#svg68 rect{fill:#06c740}#svg68 defs>path{fill:none}#svg68 path[fill="none"],#svg68 circle[fill="none"],#svg68 polygon[fill="none"],#svg68 rect[fill="none"]{fill:none}.node274>.wrapper1{color:#333}.node274>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node274 a{color:#e61919}#svg69 path,#svg69 circle,#svg69 polygon,#svg69 rect{fill:#06c740}#svg69 defs>path{fill:none}#svg69 path[fill="none"],#svg69 circle[fill="none"],#svg69 polygon[fill="none"],#svg69 rect[fill="none"]{fill:none}.node275>.wrapper1{color:#333}.node275>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node275 a{color:#e61919}#svg70 path,#svg70 circle,#svg70 polygon,#svg70 rect{fill:#06c740}#svg70 defs>path{fill:none}#svg70 path[fill="none"],#svg70 circle[fill="none"],#svg70 polygon[fill="none"],#svg70 rect[fill="none"]{fill:none}.node276>.wrapper1{color:#333}.node276>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node276 a{color:#e61919}#svg71 path,#svg71 circle,#svg71 polygon,#svg71 rect{fill:#06c740}#svg71 defs>path{fill:none}#svg71 path[fill="none"],#svg71 circle[fill="none"],#svg71 polygon[fill="none"],#svg71 rect[fill="none"]{fill:none}.node277>.wrapper1{color:#333}.node277>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node277 a{color:#e61919}#svg72 path,#svg72 circle,#svg72 polygon,#svg72 rect{fill:#06c740}#svg72 defs>path{fill:none}#svg72 path[fill="none"],#svg72 circle[fill="none"],#svg72 polygon[fill="none"],#svg72 rect[fill="none"]{fill:none}.node278>.wrapper1{color:#333}.node278>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node278 a{color:#e61919}#svg73 path,#svg73 circle,#svg73 polygon,#svg73 rect{fill:#06c740}#svg73 defs>path{fill:none}#svg73 path[fill="none"],#svg73 circle[fill="none"],#svg73 polygon[fill="none"],#svg73 rect[fill="none"]{fill:none}.node279>.wrapper1{color:#333}.node279>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node279 a{color:#e61919}.node270>.wrapper1{color:#333}.node270>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node270 a{color:#e61919}.node253>.wrapper1{background-color:#fff;color:#333;border-radius:5px;border-width:1px;border-style:solid;border-color:#d9d9d9;box-shadow:0 2px 5px 0 rgba(0,0,0,.5)}.node253>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;border-radius:4px}.node253 a{color:#e61919}.node281>.wrapper1{color:#333}.node281>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node281 a{color:#e61919}.node282>.wrapper1{color:#333}.node282>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node282 a{color:#e61919}.node283>.wrapper1{color:#333}.node283>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:0}.node283 a{color:#e61919}.node284>.wrapper1{color:#333}.node284>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node284 a{color:#e61919}.node285>.wrapper1{color:#333}.node285>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node285 a{color:#e61919}.node286>.wrapper1{color:#333}.node286>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node286 a{color:#e61919}.node287>.wrapper1{color:#333}.node287>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.node287 a{color:#e61919}.node288>.wrapper1{color:#333;border-width:1px;border-style:solid;border-color:red}.node288>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node288 a{color:#e61919}.node289>.wrapper1{color:#333}.node289>.wrapper1>.wrapper2{padding-top:10px;padding-right:5px;padding-bottom:0;padding-left:5px}.node289 a{color:#e61919}#node290_meta .countdown4{text-align:center}#node290_meta .countdown4 .line{display:inline-block;text-align:center;line-height:1}#node290_meta .countdown4 .days{display:none}#node290_meta .countdown4 .hours{display:inline-block}#node290_meta .countdown4 .minutes{display:inline-block}#node290_meta .countdown4 .seconds{display:inline-block}#node290_meta .countdown4 .group .label{display:block}#node290_meta .countdown4 .group .digits{display:inline-block;color:#188efa}#node290_meta .countdown4 .digits{font-family:"Uni Sans",Impact,"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:bold;position:relative}#node290_meta .countdown4.big .label{font-size:20px;margin:2px 0 8px}#node290_meta .countdown4.big .group{margin:5px;min-width:128px}#node290_meta .countdown4.big .group .digits{font-size:88px}#node290_meta .countdown4.medium .label{font-size:17px;margin:2px 0 6px}#node290_meta .countdown4.medium .group{margin:4px;min-width:90px;border-radius:8px}#node290_meta .countdown4.medium .group .digits{font-size:64px}#node290_meta .countdown4.small .label{font-size:14px;margin:2px 0 6px}#node290_meta .countdown4.small .group{margin:3px;min-width:64px;height:64px;border-radius:6px}#node290_meta .countdown4.small .group .digits{font-size:46px}.node291>.wrapper1{color:#333}.node291>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node291 a{color:#e61919}.node290>.wrapper1{color:#333}.node290>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node290 a{color:#e61919}#uid75{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#35874c;padding-top:14px;padding-bottom:14px;padding-left:28px;padding-right:28px;font-size:16px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid75:hover,#uid75.hover,#uid75.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid75:active,#uid75.active{background-color:#3b9855;border-color:#2f7a44;color:#fff}#uid75:before{}#uid75:active:before,#uid75.active:before{background-color:#3b9855}#uid75 .fa{font-size:21px}#uid77{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid77:hover,#uid77.hover,#uid77.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid77:active,#uid77.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid77:before{}#uid77:active:before,#uid77.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid77 .fa{font-size:23px}.node292>.wrapper1{color:#333}.node292>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node292 a{color:#e61919}#uid79{background-color:rgba(38,166,154,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#41a5ff;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:13px;color:#0b73cf;font-family:"TTNorms Medium"}#uid79:hover,#uid79.hover,#uid79.hover-on-scroll{background-color:rgba(38,166,154,0);border-color:#0187ff;color:#2191f3}#uid79:active,#uid79.active{background-color:rgba(38,166,154,0);border-color:#1e857b;color:#000}#uid79:before{}#uid79:active:before,#uid79.active:before{background-color:rgba(38,166,154,0)}#uid79 .fa{font-size:17px}.node294>.wrapper1{color:#333}.node294>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node294 a{color:#e61919}.node296>.wrapper1{color:#333}.node296>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node296 a{color:#e61919}#svg80 path,#svg80 circle,#svg80 polygon,#svg80 rect{fill:#06c740}#svg80 defs>path{fill:none}#svg80 path[fill="none"],#svg80 circle[fill="none"],#svg80 polygon[fill="none"],#svg80 rect[fill="none"]{fill:none}.node298>.wrapper1{color:#333}.node298>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node298 a{color:#e61919}#svg81 path,#svg81 circle,#svg81 polygon,#svg81 rect{fill:#06c740}#svg81 defs>path{fill:none}#svg81 path[fill="none"],#svg81 circle[fill="none"],#svg81 polygon[fill="none"],#svg81 rect[fill="none"]{fill:none}.node299>.wrapper1{color:#333}.node299>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node299 a{color:#e61919}#svg82 path,#svg82 circle,#svg82 polygon,#svg82 rect{fill:#06c740}#svg82 defs>path{fill:none}#svg82 path[fill="none"],#svg82 circle[fill="none"],#svg82 polygon[fill="none"],#svg82 rect[fill="none"]{fill:none}.node300>.wrapper1{color:#333}.node300>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node300 a{color:#e61919}#svg83 path,#svg83 circle,#svg83 polygon,#svg83 rect{fill:#06c740}#svg83 defs>path{fill:none}#svg83 path[fill="none"],#svg83 circle[fill="none"],#svg83 polygon[fill="none"],#svg83 rect[fill="none"]{fill:none}.node301>.wrapper1{color:#333}.node301>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node301 a{color:#e61919}#svg84 path,#svg84 circle,#svg84 polygon,#svg84 rect{fill:#06c740}#svg84 defs>path{fill:none}#svg84 path[fill="none"],#svg84 circle[fill="none"],#svg84 polygon[fill="none"],#svg84 rect[fill="none"]{fill:none}.node302>.wrapper1{color:#333}.node302>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node302 a{color:#e61919}#svg85 path,#svg85 circle,#svg85 polygon,#svg85 rect{fill:#06c740}#svg85 defs>path{fill:none}#svg85 path[fill="none"],#svg85 circle[fill="none"],#svg85 polygon[fill="none"],#svg85 rect[fill="none"]{fill:none}.node303>.wrapper1{color:#333}.node303>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node303 a{color:#e61919}#svg86 path,#svg86 circle,#svg86 polygon,#svg86 rect{fill:#06c740}#svg86 defs>path{fill:none}#svg86 path[fill="none"],#svg86 circle[fill="none"],#svg86 polygon[fill="none"],#svg86 rect[fill="none"]{fill:none}.node304>.wrapper1{color:#333}.node304>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node304 a{color:#e61919}#svg87 path,#svg87 circle,#svg87 polygon,#svg87 rect{fill:#06c740}#svg87 defs>path{fill:none}#svg87 path[fill="none"],#svg87 circle[fill="none"],#svg87 polygon[fill="none"],#svg87 rect[fill="none"]{fill:none}.node305>.wrapper1{color:#333}.node305>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node305 a{color:#e61919}#svg88 path,#svg88 circle,#svg88 polygon,#svg88 rect{fill:#06c740}#svg88 defs>path{fill:none}#svg88 path[fill="none"],#svg88 circle[fill="none"],#svg88 polygon[fill="none"],#svg88 rect[fill="none"]{fill:none}.node306>.wrapper1{color:#333}.node306>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node306 a{color:#e61919}.node297>.wrapper1{color:#333}.node297>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node297 a{color:#e61919}.node280>.wrapper1{background-color:#fff;color:#333;border-radius:5px;border-width:1px;border-style:solid;border-color:#d9d9d9;box-shadow:0 2px 5px 0 rgba(0,0,0,.5)}.node280>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;border-radius:4px}.node280 a{color:#e61919}.node308>.wrapper1{color:#333}.node308>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node308 a{color:#e61919}.node309>.wrapper1{color:#333}.node309>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node309 a{color:#e61919}.node310>.wrapper1{color:#333}.node310>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:0}.node310 a{color:#e61919}.node311>.wrapper1{color:#333}.node311>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node311 a{color:#e61919}.node312>.wrapper1{color:#333}.node312>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node312 a{color:#e61919}.node313>.wrapper1{color:#333}.node313>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node313 a{color:#e61919}.node314>.wrapper1{color:#333}.node314>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.node314 a{color:#e61919}.node315>.wrapper1{color:#333;border-width:1px;border-style:solid;border-color:red}.node315>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node315 a{color:#e61919}.node316>.wrapper1{color:#333}.node316>.wrapper1>.wrapper2{padding-top:10px;padding-right:5px;padding-bottom:0;padding-left:5px}.node316 a{color:#e61919}#node317_meta .countdown4{text-align:center}#node317_meta .countdown4 .line{display:inline-block;text-align:center;line-height:1}#node317_meta .countdown4 .days{display:none}#node317_meta .countdown4 .hours{display:inline-block}#node317_meta .countdown4 .minutes{display:inline-block}#node317_meta .countdown4 .seconds{display:inline-block}#node317_meta .countdown4 .group .label{display:block}#node317_meta .countdown4 .group .digits{display:inline-block;color:#188efa}#node317_meta .countdown4 .digits{font-family:"Uni Sans",Impact,"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:bold;position:relative}#node317_meta .countdown4.big .label{font-size:20px;margin:2px 0 8px}#node317_meta .countdown4.big .group{margin:5px;min-width:128px}#node317_meta .countdown4.big .group .digits{font-size:88px}#node317_meta .countdown4.medium .label{font-size:17px;margin:2px 0 6px}#node317_meta .countdown4.medium .group{margin:4px;min-width:90px;border-radius:8px}#node317_meta .countdown4.medium .group .digits{font-size:64px}#node317_meta .countdown4.small .label{font-size:14px;margin:2px 0 6px}#node317_meta .countdown4.small .group{margin:3px;min-width:64px;height:64px;border-radius:6px}#node317_meta .countdown4.small .group .digits{font-size:46px}.node318>.wrapper1{color:#333}.node318>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node318 a{color:#e61919}.node317>.wrapper1{color:#333}.node317>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node317 a{color:#e61919}#uid90{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#35874c;padding-top:14px;padding-bottom:14px;padding-left:28px;padding-right:28px;font-size:16px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid90:hover,#uid90.hover,#uid90.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid90:active,#uid90.active{background-color:#3b9855;border-color:#2f7a44;color:#fff}#uid90:before{}#uid90:active:before,#uid90.active:before{background-color:#3b9855}#uid90 .fa{font-size:21px}#uid92{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid92:hover,#uid92.hover,#uid92.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid92:active,#uid92.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid92:before{}#uid92:active:before,#uid92.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid92 .fa{font-size:23px}.node319>.wrapper1{color:#333}.node319>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node319 a{color:#e61919}#uid94{background-color:rgba(38,166,154,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#41a5ff;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:13px;color:#0b73cf;font-family:"TTNorms Medium"}#uid94:hover,#uid94.hover,#uid94.hover-on-scroll{background-color:rgba(38,166,154,0);border-color:#0187ff;color:#2191f3}#uid94:active,#uid94.active{background-color:rgba(38,166,154,0);border-color:#1e857b;color:#000}#uid94:before{}#uid94:active:before,#uid94.active:before{background-color:rgba(38,166,154,0)}#uid94 .fa{font-size:17px}.node321>.wrapper1{color:#333}.node321>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node321 a{color:#e61919}.node323>.wrapper1{color:#333}.node323>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node323 a{color:#e61919}#svg95 path,#svg95 circle,#svg95 polygon,#svg95 rect{fill:#06c740}#svg95 defs>path{fill:none}#svg95 path[fill="none"],#svg95 circle[fill="none"],#svg95 polygon[fill="none"],#svg95 rect[fill="none"]{fill:none}.node325>.wrapper1{color:#333}.node325>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node325 a{color:#e61919}#svg96 path,#svg96 circle,#svg96 polygon,#svg96 rect{fill:#06c740}#svg96 defs>path{fill:none}#svg96 path[fill="none"],#svg96 circle[fill="none"],#svg96 polygon[fill="none"],#svg96 rect[fill="none"]{fill:none}.node326>.wrapper1{color:#333}.node326>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node326 a{color:#e61919}#svg97 path,#svg97 circle,#svg97 polygon,#svg97 rect{fill:#06c740}#svg97 defs>path{fill:none}#svg97 path[fill="none"],#svg97 circle[fill="none"],#svg97 polygon[fill="none"],#svg97 rect[fill="none"]{fill:none}.node327>.wrapper1{color:#333}.node327>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node327 a{color:#e61919}#svg98 path,#svg98 circle,#svg98 polygon,#svg98 rect{fill:#06c740}#svg98 defs>path{fill:none}#svg98 path[fill="none"],#svg98 circle[fill="none"],#svg98 polygon[fill="none"],#svg98 rect[fill="none"]{fill:none}.node328>.wrapper1{color:#333}.node328>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node328 a{color:#e61919}#svg99 path,#svg99 circle,#svg99 polygon,#svg99 rect{fill:#06c740}#svg99 defs>path{fill:none}#svg99 path[fill="none"],#svg99 circle[fill="none"],#svg99 polygon[fill="none"],#svg99 rect[fill="none"]{fill:none}.node329>.wrapper1{color:#333}.node329>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node329 a{color:#e61919}#svg100 path,#svg100 circle,#svg100 polygon,#svg100 rect{fill:#06c740}#svg100 defs>path{fill:none}#svg100 path[fill="none"],#svg100 circle[fill="none"],#svg100 polygon[fill="none"],#svg100 rect[fill="none"]{fill:none}.node330>.wrapper1{color:#333}.node330>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node330 a{color:#e61919}#svg101 path,#svg101 circle,#svg101 polygon,#svg101 rect{fill:#06c740}#svg101 defs>path{fill:none}#svg101 path[fill="none"],#svg101 circle[fill="none"],#svg101 polygon[fill="none"],#svg101 rect[fill="none"]{fill:none}.node331>.wrapper1{color:#333}.node331>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node331 a{color:#e61919}#svg102 path,#svg102 circle,#svg102 polygon,#svg102 rect{fill:#06c740}#svg102 defs>path{fill:none}#svg102 path[fill="none"],#svg102 circle[fill="none"],#svg102 polygon[fill="none"],#svg102 rect[fill="none"]{fill:none}.node332>.wrapper1{color:#333}.node332>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node332 a{color:#e61919}#svg103 path,#svg103 circle,#svg103 polygon,#svg103 rect{fill:#06c740}#svg103 defs>path{fill:none}#svg103 path[fill="none"],#svg103 circle[fill="none"],#svg103 polygon[fill="none"],#svg103 rect[fill="none"]{fill:none}.node333>.wrapper1{color:#333}.node333>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node333 a{color:#e61919}.node324>.wrapper1{color:#333}.node324>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node324 a{color:#e61919}.node307>.wrapper1{background-color:#fff;color:#333;border-radius:5px;border-width:1px;border-style:solid;border-color:#d9d9d9;box-shadow:0 2px 5px 0 rgba(0,0,0,.5)}.node307>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;border-radius:4px}.node307 a{color:#e61919}.node219>.wrapper1{color:#333}.node219>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node219 a{color:#19e6d2}#uid40{background-color:#e25440;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#ca331e;padding-top:14px;padding-bottom:14px;padding-left:28px;padding-right:28px;font-size:18px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid40:hover,#uid40.hover,#uid40.hover-on-scroll{background-color:#e56553;border-color:#ca331e;color:#fff}#uid40:active,#uid40.active{background-color:#e87464;border-color:#ca331e;color:#fff}#uid40:before{}#uid40:active:before,#uid40.active:before{background-color:#e87464}#uid40 .fa{font-size:23px}#uid42{background-color:#e25440;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#ca331e;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;font-family:"Open Sans";box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid42:hover,#uid42.hover,#uid42.hover-on-scroll{background-color:#df3d27;border-color:#a22918;color:#fff}#uid42:active,#uid42.active{background-color:#df3d27;border-color:#b62e1b;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid42:before{}#uid42:active:before,#uid42.active:before{background-color:#df3d27;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid42 .fa{font-size:23px}.node220>.wrapper1{color:#333}.node220>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node220 a{color:#19e6d2}.node218>.wrapper1{color:#333}.node218>.wrapper1>.wrapper2{padding-top:45px;padding-right:5px;padding-bottom:0;padding-left:5px}.node218 a{color:#19e6d2}.node216>.wrapper1{background-color:#fff;color:#333;border-bottom-style:solid;border-bottom-width:1px;border-bottom-color:#ccc}.node216>.wrapper1>.wrapper2{padding-top:57px;padding-bottom:75px}.node216 a{color:#19e6d2}.node216 .s-elements-grid{margin-left:-10px;margin-right:-10px}.node216 .s-elements-grid__cell.cell-0{width:33.333333333333336%;padding-left:10px;padding-right:0}.node216 .s-elements-grid__cell.cell-0>.s-elements-grid__cellwrapper{padding-top:10px;padding-bottom:10px;padding-left:0;padding-right:10px}.node216 .s-elements-grid__cell.cell-1{width:33.333333333333336%;padding-left:0;padding-right:0}.node216 .s-elements-grid__cell.cell-1>.s-elements-grid__cellwrapper{padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px}.node216 .s-elements-grid__cell.cell-2{width:33.333333333333336%;padding-left:0;padding-right:10px}.node216 .s-elements-grid__cell.cell-2>.s-elements-grid__cellwrapper{padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:0}.node216 .s-elements-grid__cell.cell-3{width:33.333333333333336%;padding-left:10px;padding-right:0}.node216 .s-elements-grid__cell.cell-3>.s-elements-grid__cellwrapper{padding-top:10px;padding-bottom:10px;padding-left:0;padding-right:10px}.screen-xs .node216 .s-elements-grid__cell.cell-0{width:100%!important;padding-left:10px!important;padding-right:10px!important}.screen-xs .node216 .s-elements-grid__cell.cell-0>.s-elements-grid__cellwrapper{padding-top:10px!important;padding-bottom:10px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node216 .s-elements-grid__cell.cell-1{width:100%!important;padding-left:10px!important;padding-right:10px!important}.screen-xs .node216 .s-elements-grid__cell.cell-1>.s-elements-grid__cellwrapper{padding-top:10px!important;padding-bottom:10px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node216 .s-elements-grid__cell.cell-2{width:100%!important;padding-left:10px!important;padding-right:10px!important}.screen-xs .node216 .s-elements-grid__cell.cell-2>.s-elements-grid__cellwrapper{padding-top:10px!important;padding-bottom:10px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node216 .s-elements-grid__cell.cell-3{width:100%!important;padding-left:10px!important;padding-right:10px!important}.screen-xs .node216 .s-elements-grid__cell.cell-3>.s-elements-grid__cellwrapper{padding-top:10px!important;padding-bottom:10px!important;padding-left:0!important;padding-right:0!important}.node335>.wrapper1{color:#333}.node335>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:47px;padding-left:5px}.node335 a{color:#19e6d2}.node345>.wrapper1{color:#333}.node345>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node345 a{color:#e61919}.node346>.wrapper1{color:#333}.node346>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node346 a{color:#e61919}.node347>.wrapper1{color:#333}.node347>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:0}.node347 a{color:#e61919}.node348>.wrapper1{color:#333}.node348>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node348 a{color:#e61919}.node349>.wrapper1{color:#333}.node349>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node349 a{color:#e61919}.node350>.wrapper1{color:#333}.node350>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node350 a{color:#e61919}.node351>.wrapper1{color:#333}.node351>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.node351 a{color:#e61919}.node352>.wrapper1{color:#333;border-width:1px;border-style:solid;border-color:red}.node352>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node352 a{color:#e61919}.node353>.wrapper1{color:#333}.node353>.wrapper1>.wrapper2{padding-top:10px;padding-right:5px;padding-bottom:0;padding-left:5px}.node353 a{color:#e61919}#node354_meta .countdown4{text-align:center}#node354_meta .countdown4 .line{display:inline-block;text-align:center;line-height:1}#node354_meta .countdown4 .days{display:none}#node354_meta .countdown4 .hours{display:inline-block}#node354_meta .countdown4 .minutes{display:inline-block}#node354_meta .countdown4 .seconds{display:inline-block}#node354_meta .countdown4 .group .label{display:block}#node354_meta .countdown4 .group .digits{display:inline-block;color:#188efa}#node354_meta .countdown4 .digits{font-family:"Uni Sans",Impact,"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:bold;position:relative}#node354_meta .countdown4.big .label{font-size:20px;margin:2px 0 8px}#node354_meta .countdown4.big .group{margin:5px;min-width:128px}#node354_meta .countdown4.big .group .digits{font-size:88px}#node354_meta .countdown4.medium .label{font-size:17px;margin:2px 0 6px}#node354_meta .countdown4.medium .group{margin:4px;min-width:90px;border-radius:8px}#node354_meta .countdown4.medium .group .digits{font-size:64px}#node354_meta .countdown4.small .label{font-size:14px;margin:2px 0 6px}#node354_meta .countdown4.small .group{margin:3px;min-width:64px;height:64px;border-radius:6px}#node354_meta .countdown4.small .group .digits{font-size:46px}.node355>.wrapper1{color:#333}.node355>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node355 a{color:#e61919}.node354>.wrapper1{color:#333}.node354>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node354 a{color:#e61919}#uid220{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:1px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:12px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid220:hover,#uid220.hover,#uid220.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid220:active,#uid220.active{background-color:#3b9855;border-color:#2f7a44;color:#fff}#uid220:before{}#uid220:active:before,#uid220.active:before{background-color:#3b9855}#uid220 .fa{font-size:16px}#uid222{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid222:hover,#uid222.hover,#uid222.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid222:active,#uid222.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid222:before{}#uid222:active:before,#uid222.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid222 .fa{font-size:23px}.node356>.wrapper1{color:#333}.node356>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node356 a{color:#e61919}#uid224{background-color:rgba(38,166,154,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#41a5ff;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:13px;color:#0b73cf;font-family:"TTNorms Medium"}#uid224:hover,#uid224.hover,#uid224.hover-on-scroll{background-color:rgba(38,166,154,0);border-color:#0187ff;color:#2191f3}#uid224:active,#uid224.active{background-color:rgba(38,166,154,0);border-color:#1e857b;color:#000}#uid224:before{}#uid224:active:before,#uid224.active:before{background-color:rgba(38,166,154,0)}#uid224 .fa{font-size:17px}.node358>.wrapper1{color:#333}.node358>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node358 a{color:#e61919}.node360>.wrapper1{color:#333}.node360>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node360 a{color:#e61919}#svg225 path,#svg225 circle,#svg225 polygon,#svg225 rect{fill:#06c740}#svg225 defs>path{fill:none}#svg225 path[fill="none"],#svg225 circle[fill="none"],#svg225 polygon[fill="none"],#svg225 rect[fill="none"]{fill:none}.node362>.wrapper1{color:#333}.node362>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node362 a{color:#e61919}#svg226 path,#svg226 circle,#svg226 polygon,#svg226 rect{fill:#06c740}#svg226 defs>path{fill:none}#svg226 path[fill="none"],#svg226 circle[fill="none"],#svg226 polygon[fill="none"],#svg226 rect[fill="none"]{fill:none}.node363>.wrapper1{color:#333}.node363>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node363 a{color:#e61919}#svg227 path,#svg227 circle,#svg227 polygon,#svg227 rect{fill:#06c740}#svg227 defs>path{fill:none}#svg227 path[fill="none"],#svg227 circle[fill="none"],#svg227 polygon[fill="none"],#svg227 rect[fill="none"]{fill:none}.node364>.wrapper1{color:#333}.node364>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node364 a{color:#e61919}#svg228 path,#svg228 circle,#svg228 polygon,#svg228 rect{fill:#06c740}#svg228 defs>path{fill:none}#svg228 path[fill="none"],#svg228 circle[fill="none"],#svg228 polygon[fill="none"],#svg228 rect[fill="none"]{fill:none}.node365>.wrapper1{color:#333}.node365>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node365 a{color:#e61919}#svg229 path,#svg229 circle,#svg229 polygon,#svg229 rect{fill:#06c740}#svg229 defs>path{fill:none}#svg229 path[fill="none"],#svg229 circle[fill="none"],#svg229 polygon[fill="none"],#svg229 rect[fill="none"]{fill:none}.node366>.wrapper1{color:#333}.node366>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node366 a{color:#e61919}#svg230 path,#svg230 circle,#svg230 polygon,#svg230 rect{fill:#06c740}#svg230 defs>path{fill:none}#svg230 path[fill="none"],#svg230 circle[fill="none"],#svg230 polygon[fill="none"],#svg230 rect[fill="none"]{fill:none}.node367>.wrapper1{color:#333}.node367>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node367 a{color:#e61919}#svg231 path,#svg231 circle,#svg231 polygon,#svg231 rect{fill:#06c740}#svg231 defs>path{fill:none}#svg231 path[fill="none"],#svg231 circle[fill="none"],#svg231 polygon[fill="none"],#svg231 rect[fill="none"]{fill:none}.node368>.wrapper1{color:#333}.node368>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node368 a{color:#e61919}#svg232 path,#svg232 circle,#svg232 polygon,#svg232 rect{fill:#06c740}#svg232 defs>path{fill:none}#svg232 path[fill="none"],#svg232 circle[fill="none"],#svg232 polygon[fill="none"],#svg232 rect[fill="none"]{fill:none}.node369>.wrapper1{color:#333}.node369>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node369 a{color:#e61919}#svg233 path,#svg233 circle,#svg233 polygon,#svg233 rect{fill:#06c740}#svg233 defs>path{fill:none}#svg233 path[fill="none"],#svg233 circle[fill="none"],#svg233 polygon[fill="none"],#svg233 rect[fill="none"]{fill:none}.node370>.wrapper1{color:#333}.node370>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node370 a{color:#e61919}.node361>.wrapper1{color:#333}.node361>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node361 a{color:#e61919}.node344>.wrapper1{background-color:#fff;color:#333;border-radius:5px;border-width:1px;border-style:solid;border-color:#d9d9d9;box-shadow:0 2px 5px 0 rgba(0,0,0,.5)}.node344>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;border-radius:4px}.node344 a{color:#e61919}.node372>.wrapper1{color:#333}.node372>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node372 a{color:#e61919}.node373>.wrapper1{color:#333}.node373>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node373 a{color:#e61919}.node374>.wrapper1{color:#333}.node374>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:0}.node374 a{color:#e61919}.node375>.wrapper1{color:#333}.node375>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node375 a{color:#e61919}.node376>.wrapper1{color:#333}.node376>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node376 a{color:#e61919}.node377>.wrapper1{color:#333}.node377>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node377 a{color:#e61919}.node378>.wrapper1{color:#333}.node378>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.node378 a{color:#e61919}.node379>.wrapper1{color:#333;border-width:1px;border-style:solid;border-color:red}.node379>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node379 a{color:#e61919}.node380>.wrapper1{color:#333}.node380>.wrapper1>.wrapper2{padding-top:10px;padding-right:5px;padding-bottom:0;padding-left:5px}.node380 a{color:#e61919}#node381_meta .countdown4{text-align:center}#node381_meta .countdown4 .line{display:inline-block;text-align:center;line-height:1}#node381_meta .countdown4 .days{display:none}#node381_meta .countdown4 .hours{display:inline-block}#node381_meta .countdown4 .minutes{display:inline-block}#node381_meta .countdown4 .seconds{display:inline-block}#node381_meta .countdown4 .group .label{display:block}#node381_meta .countdown4 .group .digits{display:inline-block;color:#188efa}#node381_meta .countdown4 .digits{font-family:"Uni Sans",Impact,"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:bold;position:relative}#node381_meta .countdown4.big .label{font-size:20px;margin:2px 0 8px}#node381_meta .countdown4.big .group{margin:5px;min-width:128px}#node381_meta .countdown4.big .group .digits{font-size:88px}#node381_meta .countdown4.medium .label{font-size:17px;margin:2px 0 6px}#node381_meta .countdown4.medium .group{margin:4px;min-width:90px;border-radius:8px}#node381_meta .countdown4.medium .group .digits{font-size:64px}#node381_meta .countdown4.small .label{font-size:14px;margin:2px 0 6px}#node381_meta .countdown4.small .group{margin:3px;min-width:64px;height:64px;border-radius:6px}#node381_meta .countdown4.small .group .digits{font-size:46px}.node382>.wrapper1{color:#333}.node382>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node382 a{color:#e61919}.node381>.wrapper1{color:#333}.node381>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node381 a{color:#e61919}#uid235{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:1px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:13px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid235:hover,#uid235.hover,#uid235.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid235:active,#uid235.active{background-color:#3b9855;border-color:#2f7a44;color:#fff}#uid235:before{}#uid235:active:before,#uid235.active:before{background-color:#3b9855}#uid235 .fa{font-size:17px}#uid237{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid237:hover,#uid237.hover,#uid237.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid237:active,#uid237.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid237:before{}#uid237:active:before,#uid237.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid237 .fa{font-size:23px}.node383>.wrapper1{color:#333}.node383>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node383 a{color:#e61919}#uid239{background-color:rgba(38,166,154,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#41a5ff;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:13px;color:#0b73cf;font-family:"TTNorms Medium"}#uid239:hover,#uid239.hover,#uid239.hover-on-scroll{background-color:rgba(38,166,154,0);border-color:#0187ff;color:#2191f3}#uid239:active,#uid239.active{background-color:rgba(38,166,154,0);border-color:#1e857b;color:#000}#uid239:before{}#uid239:active:before,#uid239.active:before{background-color:rgba(38,166,154,0)}#uid239 .fa{font-size:17px}.node385>.wrapper1{color:#333}.node385>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node385 a{color:#e61919}.node387>.wrapper1{color:#333}.node387>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node387 a{color:#e61919}#svg240 path,#svg240 circle,#svg240 polygon,#svg240 rect{fill:#06c740}#svg240 defs>path{fill:none}#svg240 path[fill="none"],#svg240 circle[fill="none"],#svg240 polygon[fill="none"],#svg240 rect[fill="none"]{fill:none}.node389>.wrapper1{color:#333}.node389>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node389 a{color:#e61919}#svg241 path,#svg241 circle,#svg241 polygon,#svg241 rect{fill:#06c740}#svg241 defs>path{fill:none}#svg241 path[fill="none"],#svg241 circle[fill="none"],#svg241 polygon[fill="none"],#svg241 rect[fill="none"]{fill:none}.node390>.wrapper1{color:#333}.node390>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node390 a{color:#e61919}#svg242 path,#svg242 circle,#svg242 polygon,#svg242 rect{fill:#06c740}#svg242 defs>path{fill:none}#svg242 path[fill="none"],#svg242 circle[fill="none"],#svg242 polygon[fill="none"],#svg242 rect[fill="none"]{fill:none}.node391>.wrapper1{color:#333}.node391>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node391 a{color:#e61919}#svg243 path,#svg243 circle,#svg243 polygon,#svg243 rect{fill:#06c740}#svg243 defs>path{fill:none}#svg243 path[fill="none"],#svg243 circle[fill="none"],#svg243 polygon[fill="none"],#svg243 rect[fill="none"]{fill:none}.node392>.wrapper1{color:#333}.node392>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node392 a{color:#e61919}#svg244 path,#svg244 circle,#svg244 polygon,#svg244 rect{fill:#06c740}#svg244 defs>path{fill:none}#svg244 path[fill="none"],#svg244 circle[fill="none"],#svg244 polygon[fill="none"],#svg244 rect[fill="none"]{fill:none}.node393>.wrapper1{color:#333}.node393>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node393 a{color:#e61919}#svg245 path,#svg245 circle,#svg245 polygon,#svg245 rect{fill:#06c740}#svg245 defs>path{fill:none}#svg245 path[fill="none"],#svg245 circle[fill="none"],#svg245 polygon[fill="none"],#svg245 rect[fill="none"]{fill:none}.node394>.wrapper1{color:#333}.node394>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node394 a{color:#e61919}#svg246 path,#svg246 circle,#svg246 polygon,#svg246 rect{fill:#06c740}#svg246 defs>path{fill:none}#svg246 path[fill="none"],#svg246 circle[fill="none"],#svg246 polygon[fill="none"],#svg246 rect[fill="none"]{fill:none}.node395>.wrapper1{color:#333}.node395>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node395 a{color:#e61919}#svg247 path,#svg247 circle,#svg247 polygon,#svg247 rect{fill:#06c740}#svg247 defs>path{fill:none}#svg247 path[fill="none"],#svg247 circle[fill="none"],#svg247 polygon[fill="none"],#svg247 rect[fill="none"]{fill:none}.node396>.wrapper1{color:#333}.node396>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node396 a{color:#e61919}#svg248 path,#svg248 circle,#svg248 polygon,#svg248 rect{fill:#06c740}#svg248 defs>path{fill:none}#svg248 path[fill="none"],#svg248 circle[fill="none"],#svg248 polygon[fill="none"],#svg248 rect[fill="none"]{fill:none}.node397>.wrapper1{color:#333}.node397>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node397 a{color:#e61919}.node388>.wrapper1{color:#333}.node388>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node388 a{color:#e61919}.node371>.wrapper1{background-color:#fff;color:#333;border-radius:5px;border-width:1px;border-style:solid;border-color:#d9d9d9;box-shadow:0 2px 5px 0 rgba(0,0,0,.5)}.node371>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;border-radius:4px}.node371 a{color:#e61919}.node399>.wrapper1{color:#333}.node399>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node399 a{color:#e61919}.node400>.wrapper1{color:#333}.node400>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node400 a{color:#e61919}.node401>.wrapper1{color:#333}.node401>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:0}.node401 a{color:#e61919}.node402>.wrapper1{color:#333}.node402>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node402 a{color:#e61919}.node403>.wrapper1{color:#333}.node403>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node403 a{color:#e61919}.node404>.wrapper1{color:#333}.node404>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node404 a{color:#e61919}.node405>.wrapper1{color:#333}.node405>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.node405 a{color:#e61919}.node406>.wrapper1{color:#333;border-width:1px;border-style:solid;border-color:red}.node406>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node406 a{color:#e61919}.node407>.wrapper1{color:#333}.node407>.wrapper1>.wrapper2{padding-top:10px;padding-right:5px;padding-bottom:0;padding-left:5px}.node407 a{color:#e61919}#node408_meta .countdown4{text-align:center}#node408_meta .countdown4 .line{display:inline-block;text-align:center;line-height:1}#node408_meta .countdown4 .days{display:none}#node408_meta .countdown4 .hours{display:inline-block}#node408_meta .countdown4 .minutes{display:inline-block}#node408_meta .countdown4 .seconds{display:inline-block}#node408_meta .countdown4 .group .label{display:block}#node408_meta .countdown4 .group .digits{display:inline-block;color:#188efa}#node408_meta .countdown4 .digits{font-family:"Uni Sans",Impact,"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:bold;position:relative}#node408_meta .countdown4.big .label{font-size:20px;margin:2px 0 8px}#node408_meta .countdown4.big .group{margin:5px;min-width:128px}#node408_meta .countdown4.big .group .digits{font-size:88px}#node408_meta .countdown4.medium .label{font-size:17px;margin:2px 0 6px}#node408_meta .countdown4.medium .group{margin:4px;min-width:90px;border-radius:8px}#node408_meta .countdown4.medium .group .digits{font-size:64px}#node408_meta .countdown4.small .label{font-size:14px;margin:2px 0 6px}#node408_meta .countdown4.small .group{margin:3px;min-width:64px;height:64px;border-radius:6px}#node408_meta .countdown4.small .group .digits{font-size:46px}.node409>.wrapper1{color:#333}.node409>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node409 a{color:#e61919}.node408>.wrapper1{color:#333}.node408>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node408 a{color:#e61919}#uid250{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#35874c;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:13px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid250:hover,#uid250.hover,#uid250.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid250:active,#uid250.active{background-color:#3b9855;border-color:#2f7a44;color:#fff}#uid250:before{}#uid250:active:before,#uid250.active:before{background-color:#3b9855}#uid250 .fa{font-size:17px}#uid252{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid252:hover,#uid252.hover,#uid252.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid252:active,#uid252.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid252:before{}#uid252:active:before,#uid252.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid252 .fa{font-size:23px}.node410>.wrapper1{color:#333}.node410>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node410 a{color:#e61919}#uid254{background-color:rgba(38,166,154,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#41a5ff;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:13px;color:#0b73cf;font-family:"TTNorms Medium"}#uid254:hover,#uid254.hover,#uid254.hover-on-scroll{background-color:rgba(38,166,154,0);border-color:#0187ff;color:#2191f3}#uid254:active,#uid254.active{background-color:rgba(38,166,154,0);border-color:#1e857b;color:#000}#uid254:before{}#uid254:active:before,#uid254.active:before{background-color:rgba(38,166,154,0)}#uid254 .fa{font-size:17px}.node412>.wrapper1{color:#333}.node412>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node412 a{color:#e61919}.node414>.wrapper1{color:#333}.node414>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:14px;padding-left:5px}.node414 a{color:#e61919}#svg255 path,#svg255 circle,#svg255 polygon,#svg255 rect{fill:#06c740}#svg255 defs>path{fill:none}#svg255 path[fill="none"],#svg255 circle[fill="none"],#svg255 polygon[fill="none"],#svg255 rect[fill="none"]{fill:none}.node416>.wrapper1{color:#333}.node416>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node416 a{color:#e61919}#svg256 path,#svg256 circle,#svg256 polygon,#svg256 rect{fill:#06c740}#svg256 defs>path{fill:none}#svg256 path[fill="none"],#svg256 circle[fill="none"],#svg256 polygon[fill="none"],#svg256 rect[fill="none"]{fill:none}.node417>.wrapper1{color:#333}.node417>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node417 a{color:#e61919}#svg257 path,#svg257 circle,#svg257 polygon,#svg257 rect{fill:#06c740}#svg257 defs>path{fill:none}#svg257 path[fill="none"],#svg257 circle[fill="none"],#svg257 polygon[fill="none"],#svg257 rect[fill="none"]{fill:none}.node418>.wrapper1{color:#333}.node418>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node418 a{color:#e61919}#svg258 path,#svg258 circle,#svg258 polygon,#svg258 rect{fill:#06c740}#svg258 defs>path{fill:none}#svg258 path[fill="none"],#svg258 circle[fill="none"],#svg258 polygon[fill="none"],#svg258 rect[fill="none"]{fill:none}.node419>.wrapper1{color:#333}.node419>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node419 a{color:#e61919}#svg259 path,#svg259 circle,#svg259 polygon,#svg259 rect{fill:#06c740}#svg259 defs>path{fill:none}#svg259 path[fill="none"],#svg259 circle[fill="none"],#svg259 polygon[fill="none"],#svg259 rect[fill="none"]{fill:none}.node420>.wrapper1{color:#333}.node420>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node420 a{color:#e61919}#svg260 path,#svg260 circle,#svg260 polygon,#svg260 rect{fill:#06c740}#svg260 defs>path{fill:none}#svg260 path[fill="none"],#svg260 circle[fill="none"],#svg260 polygon[fill="none"],#svg260 rect[fill="none"]{fill:none}.node421>.wrapper1{color:#333}.node421>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node421 a{color:#e61919}#svg261 path,#svg261 circle,#svg261 polygon,#svg261 rect{fill:#06c740}#svg261 defs>path{fill:none}#svg261 path[fill="none"],#svg261 circle[fill="none"],#svg261 polygon[fill="none"],#svg261 rect[fill="none"]{fill:none}.node422>.wrapper1{color:#333}.node422>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node422 a{color:#e61919}#svg262 path,#svg262 circle,#svg262 polygon,#svg262 rect{fill:#06c740}#svg262 defs>path{fill:none}#svg262 path[fill="none"],#svg262 circle[fill="none"],#svg262 polygon[fill="none"],#svg262 rect[fill="none"]{fill:none}.node423>.wrapper1{color:#333}.node423>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node423 a{color:#e61919}#svg263 path,#svg263 circle,#svg263 polygon,#svg263 rect{fill:#06c740}#svg263 defs>path{fill:none}#svg263 path[fill="none"],#svg263 circle[fill="none"],#svg263 polygon[fill="none"],#svg263 rect[fill="none"]{fill:none}.node424>.wrapper1{color:#333}.node424>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node424 a{color:#e61919}.node415>.wrapper1{color:#333}.node415>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node415 a{color:#e61919}.node398>.wrapper1{background-color:#fff;color:#333;border-radius:5px;border-width:1px;border-style:solid;border-color:#d9d9d9;box-shadow:0 2px 5px 0 rgba(0,0,0,.5)}.node398>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;border-radius:4px}.node398 a{color:#e61919}.node337>.wrapper1{color:#333}.node337>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node337 a{color:#19e6d2}#uid215{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#35874c;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:14px;color:#fff;font-family:"Open Sans"}#uid215:hover,#uid215.hover,#uid215.hover-on-scroll{background-color:#4dba6b;border-color:#35874c;color:#fff}#uid215:active,#uid215.active{background-color:#5ec17a;border-color:#35874c;color:#fff}#uid215:before{}#uid215:active:before,#uid215.active:before{background-color:#5ec17a}#uid215 .fa{font-size:18px}#uid217{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;font-family:"Open Sans";box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid217:hover,#uid217.hover,#uid217.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid217:active,#uid217.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid217:before{}#uid217:active:before,#uid217.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid217 .fa{font-size:23px}.node338>.wrapper1{color:#333}.node338>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node338 a{color:#19e6d2}.node336>.wrapper1{color:#333}.node336>.wrapper1>.wrapper2{padding-top:45px;padding-right:5px;padding-bottom:0;padding-left:5px}.node336 a{color:#19e6d2}.node334>.wrapper1{background-color:#fff;color:#333;border-bottom-style:solid;border-bottom-width:1px;border-bottom-color:#ccc}.node334>.wrapper1>.wrapper2{padding-top:57px;padding-bottom:75px}.node334 a{color:#19e6d2}.node334 .s-elements-grid{margin-left:-10px;margin-right:-10px}.node334 .s-elements-grid__cell.cell-0{width:33.333333333333336%;padding-left:10px;padding-right:0}.node334 .s-elements-grid__cell.cell-0>.s-elements-grid__cellwrapper{padding-top:10px;padding-bottom:10px;padding-left:0;padding-right:10px}.node334 .s-elements-grid__cell.cell-1{width:33.333333333333336%;padding-left:0;padding-right:0}.node334 .s-elements-grid__cell.cell-1>.s-elements-grid__cellwrapper{padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px}.node334 .s-elements-grid__cell.cell-2{width:33.333333333333336%;padding-left:0;padding-right:10px}.node334 .s-elements-grid__cell.cell-2>.s-elements-grid__cellwrapper{padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:0}.screen-xs .node334 .s-elements-grid__cell.cell-0{width:100%!important;padding-left:10px!important;padding-right:10px!important}.screen-xs .node334 .s-elements-grid__cell.cell-0>.s-elements-grid__cellwrapper{padding-top:10px!important;padding-bottom:10px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node334 .s-elements-grid__cell.cell-1{width:100%!important;padding-left:10px!important;padding-right:10px!important}.screen-xs .node334 .s-elements-grid__cell.cell-1>.s-elements-grid__cellwrapper{padding-top:10px!important;padding-bottom:10px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node334 .s-elements-grid__cell.cell-2{width:100%!important;padding-left:10px!important;padding-right:10px!important}.screen-xs .node334 .s-elements-grid__cell.cell-2>.s-elements-grid__cellwrapper{padding-top:10px!important;padding-bottom:10px!important;padding-left:0!important;padding-right:0!important}.node426>.wrapper1{color:#333}.node426>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:42px;padding-left:5px}.node426 a{color:#19e6d2}.node427>.wrapper1{color:#333}.node427>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:9px;padding-left:5px}.node427 a{color:#19e6d2}.node428>.wrapper1{color:#333}.node428>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node428 a{color:#19e6d2}#node439_meta .number{color:#000;opacity:.05;font-family:Roboto;font-weight:bold;font-style:normal;text-align:left;font-size:83px;line-height:1}.node439>.wrapper1{color:#333}.node439>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node439>.wrapper1>.wrapper2{padding-left:89px!important}.node439 a{color:#19e6d2}#svg113 path,#svg113 circle,#svg113 polygon,#svg113 rect{fill:#e53835}#svg113 defs>path{fill:none}#svg113 path[fill="none"],#svg113 circle[fill="none"],#svg113 polygon[fill="none"],#svg113 rect[fill="none"]{fill:none}.node440>.wrapper1{color:#333}.node440>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:16px;padding-left:5px}.screen-xs .node440>.wrapper1>.wrapper2{padding-top:16px!important;padding-left:120px!important}.screen-sm .node440>.wrapper1>.wrapper2{padding-top:29px!important}.node440 a{color:#19e6d2}.node441>.wrapper1{color:#333}.node441>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node441 a{color:#19e6d2}.node442>.wrapper1{color:#333}.node442>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node442 a{color:#19e6d2}.node438>.wrapper1{color:#333}.node438>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node438 a{color:#19e6d2}.node437>.wrapper1{color:#333}.node437>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node437 a{color:#19e6d2}#node449_meta .number{color:#000;opacity:.05;font-family:Roboto;font-weight:bold;font-style:normal;text-align:left;font-size:83px;line-height:1}.node449>.wrapper1{color:#333}.node449>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node449>.wrapper1>.wrapper2{padding-left:90px!important}.node449 a{color:#19e6d2}#svg114 path,#svg114 circle,#svg114 polygon,#svg114 rect{fill:#e53734}#svg114 defs>path{fill:none}#svg114 path[fill="none"],#svg114 circle[fill="none"],#svg114 polygon[fill="none"],#svg114 rect[fill="none"]{fill:none}.node450>.wrapper1{color:#333}.node450>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:16px;padding-left:5px}.screen-xs .node450>.wrapper1>.wrapper2{padding-top:16px!important;padding-left:120px!important}.screen-sm .node450>.wrapper1>.wrapper2{padding-top:29px!important}.node450 a{color:#19e6d2}.node451>.wrapper1{color:#333}.node451>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node451 a{color:#19e6d2}.node452>.wrapper1{color:#333}.node452>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node452 a{color:#19e6d2}.node448>.wrapper1{color:#333}.node448>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node448 a{color:#19e6d2}.node447>.wrapper1{color:#333}.node447>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node447 a{color:#19e6d2}#node459_meta .number{color:#000;opacity:.05;font-family:Roboto;font-weight:bold;font-style:normal;text-align:left;font-size:83px;line-height:1}.node459>.wrapper1{color:#333}.node459>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node459>.wrapper1>.wrapper2{padding-left:89px!important}.node459 a{color:#19e6d2}#svg115 path,#svg115 circle,#svg115 polygon,#svg115 rect{fill:#e53734}#svg115 defs>path{fill:none}#svg115 path[fill="none"],#svg115 circle[fill="none"],#svg115 polygon[fill="none"],#svg115 rect[fill="none"]{fill:none}.node460>.wrapper1{color:#333}.node460>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:16px;padding-left:5px}.screen-xs .node460>.wrapper1>.wrapper2{padding-top:16px!important;padding-left:120px!important}.screen-sm .node460>.wrapper1>.wrapper2{padding-top:29px!important}.node460 a{color:#19e6d2}.node461>.wrapper1{color:#333}.node461>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node461 a{color:#19e6d2}.node462>.wrapper1{color:#333}.node462>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node462 a{color:#19e6d2}.node458>.wrapper1{color:#333}.node458>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node458 a{color:#19e6d2}.node457>.wrapper1{color:#333}.node457>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node457 a{color:#19e6d2}#node469_meta .number{color:#000;opacity:.05;font-family:Roboto;font-weight:bold;font-style:normal;text-align:left;font-size:83px;line-height:1}.node469>.wrapper1{color:#333}.node469>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node469>.wrapper1>.wrapper2{padding-left:89px!important}.node469 a{color:#19e6d2}#svg116 path,#svg116 circle,#svg116 polygon,#svg116 rect{fill:#e53734}#svg116 defs>path{fill:none}#svg116 path[fill="none"],#svg116 circle[fill="none"],#svg116 polygon[fill="none"],#svg116 rect[fill="none"]{fill:none}.node470>.wrapper1{color:#333}.node470>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:16px;padding-left:5px}.screen-xs .node470>.wrapper1>.wrapper2{padding-top:16px!important;padding-left:120px!important}.screen-sm .node470>.wrapper1>.wrapper2{padding-top:29px!important}.node470 a{color:#19e6d2}.node471>.wrapper1{color:#333}.node471>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node471 a{color:#19e6d2}.node472>.wrapper1{color:#333}.node472>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node472 a{color:#19e6d2}.node468>.wrapper1{color:#333}.node468>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node468 a{color:#19e6d2}.node467>.wrapper1{color:#333}.node467>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node467 a{color:#19e6d2}#node479_meta .number{color:#000;opacity:.05;font-family:Roboto;font-weight:bold;font-style:normal;text-align:left;font-size:83px;line-height:1}.node479>.wrapper1{color:#333}.node479>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node479>.wrapper1>.wrapper2{padding-left:89px!important}.node479 a{color:#19e6d2}#svg117 path,#svg117 circle,#svg117 polygon,#svg117 rect{fill:#e53734}#svg117 defs>path{fill:none}#svg117 path[fill="none"],#svg117 circle[fill="none"],#svg117 polygon[fill="none"],#svg117 rect[fill="none"]{fill:none}.node480>.wrapper1{color:#333}.node480>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:16px;padding-left:5px}.screen-xs .node480>.wrapper1>.wrapper2{padding-top:16px!important;padding-left:120px!important}.screen-sm .node480>.wrapper1>.wrapper2{padding-top:29px!important}.node480 a{color:#19e6d2}.node481>.wrapper1{color:#333}.node481>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node481 a{color:#19e6d2}.node482>.wrapper1{color:#333}.node482>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node482 a{color:#19e6d2}.node478>.wrapper1{color:#333}.node478>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node478 a{color:#19e6d2}.node477>.wrapper1{color:#333}.node477>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node477 a{color:#19e6d2}#node489_meta .number{color:#000;opacity:.05;font-family:Roboto;font-weight:bold;font-style:normal;text-align:left;font-size:83px;line-height:1}.node489>.wrapper1{color:#333}.node489>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node489>.wrapper1>.wrapper2{padding-left:89px!important}.node489 a{color:#19e6d2}#svg118 path,#svg118 circle,#svg118 polygon,#svg118 rect{fill:#e53734}#svg118 defs>path{fill:none}#svg118 path[fill="none"],#svg118 circle[fill="none"],#svg118 polygon[fill="none"],#svg118 rect[fill="none"]{fill:none}.node490>.wrapper1{color:#333}.node490>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:16px;padding-left:5px}.screen-xs .node490>.wrapper1>.wrapper2{padding-top:16px!important;padding-left:120px!important}.screen-sm .node490>.wrapper1>.wrapper2{padding-top:29px!important}.node490 a{color:#19e6d2}.node491>.wrapper1{color:#333}.node491>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node491 a{color:#19e6d2}.node492>.wrapper1{color:#333}.node492>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node492 a{color:#19e6d2}.node488>.wrapper1{color:#333}.node488>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node488 a{color:#19e6d2}.node487>.wrapper1{color:#333}.node487>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node487 a{color:#19e6d2}.node430>.wrapper1{color:#333}.node430>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node430 a{color:#19e6d2}#uid110{background-color:#e25440;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#ca331e;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:16px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid110:hover,#uid110.hover,#uid110.hover-on-scroll{background-color:#e56553;border-color:#ca331e;color:#fff}#uid110:active,#uid110.active{background-color:#e87464;border-color:#ca331e;color:#fff}#uid110:before{}#uid110:active:before,#uid110.active:before{background-color:#e87464}#uid110 .fa{font-size:21px}#uid112{background-color:#e25440;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#ca331e;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;font-family:"Open Sans";box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid112:hover,#uid112.hover,#uid112.hover-on-scroll{background-color:#df3d27;border-color:#a22918;color:#fff}#uid112:active,#uid112.active{background-color:#df3d27;border-color:#b62e1b;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid112:before{}#uid112:active:before,#uid112.active:before{background-color:#df3d27;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid112 .fa{font-size:23px}.node431>.wrapper1{color:#333}.node431>.wrapper1>.wrapper2{padding-top:14px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node431 a{color:#19e6d2}.node429>.wrapper1{color:#333}.node429>.wrapper1>.wrapper2{padding-top:45px;padding-right:5px;padding-bottom:0;padding-left:5px}.node429 a{color:#19e6d2}.node425>.wrapper1{background-color:#fff;color:#333}.node425>.wrapper1>.wrapper2{padding-top:60px;padding-bottom:90px}.node425 a{color:#19e6d2}.node425 .s-elements-grid{margin-left:-5px;margin-right:-5px}.node425 .s-elements-grid__cell.cell-0{width:33.333333333333336%;padding-left:5px;padding-right:0}.node425 .s-elements-grid__cell.cell-0>.s-elements-grid__cellwrapper{padding-top:20px;padding-bottom:20px;padding-left:0;padding-right:5px}.node425 .s-elements-grid__cell.cell-1{width:33.333333333333336%;padding-left:0;padding-right:0}.node425 .s-elements-grid__cell.cell-1>.s-elements-grid__cellwrapper{padding-top:20px;padding-bottom:20px;padding-left:5px;padding-right:5px}.node425 .s-elements-grid__cell.cell-2{width:33.333333333333336%;padding-left:0;padding-right:5px}.node425 .s-elements-grid__cell.cell-2>.s-elements-grid__cellwrapper{padding-top:20px;padding-bottom:20px;padding-left:5px;padding-right:0}.node425 .s-elements-grid__cell.cell-3{width:33.333333333333336%;padding-left:5px;padding-right:0}.node425 .s-elements-grid__cell.cell-3>.s-elements-grid__cellwrapper{padding-top:20px;padding-bottom:20px;padding-left:0;padding-right:5px}.node425 .s-elements-grid__cell.cell-4{width:33.333333333333336%;padding-left:0;padding-right:0}.node425 .s-elements-grid__cell.cell-4>.s-elements-grid__cellwrapper{padding-top:20px;padding-bottom:20px;padding-left:5px;padding-right:5px}.node425 .s-elements-grid__cell.cell-5{width:33.333333333333336%;padding-left:0;padding-right:5px}.node425 .s-elements-grid__cell.cell-5>.s-elements-grid__cellwrapper{padding-top:20px;padding-bottom:20px;padding-left:5px;padding-right:0}.screen-sm .node425 .s-elements-grid__cell.cell-0{width:50%!important;padding-left:5px!important;padding-right:0!important}.screen-sm .node425 .s-elements-grid__cell.cell-0>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:5px!important}.screen-sm .node425 .s-elements-grid__cell.cell-1{width:50%!important;padding-left:0!important;padding-right:5px!important}.screen-sm .node425 .s-elements-grid__cell.cell-1>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:5px!important;padding-right:0!important}.screen-sm .node425 .s-elements-grid__cell.cell-2{width:50%!important;padding-left:5px!important;padding-right:0!important}.screen-sm .node425 .s-elements-grid__cell.cell-2>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:5px!important}.screen-sm .node425 .s-elements-grid__cell.cell-3{width:50%!important;padding-left:0!important;padding-right:5px!important}.screen-sm .node425 .s-elements-grid__cell.cell-3>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:5px!important;padding-right:0!important}.screen-sm .node425 .s-elements-grid__cell.cell-4{width:50%!important;padding-left:5px!important;padding-right:0!important}.screen-sm .node425 .s-elements-grid__cell.cell-4>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:5px!important}.screen-sm .node425 .s-elements-grid__cell.cell-5{width:50%!important;padding-left:0!important;padding-right:5px!important}.screen-sm .node425 .s-elements-grid__cell.cell-5>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:5px!important;padding-right:0!important}.screen-xs .node425 .s-elements-grid__cell.cell-0{width:100%!important;padding-left:5px!important;padding-right:5px!important}.screen-xs .node425 .s-elements-grid__cell.cell-0>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node425 .s-elements-grid__cell.cell-1{width:100%!important;padding-left:5px!important;padding-right:5px!important}.screen-xs .node425 .s-elements-grid__cell.cell-1>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node425 .s-elements-grid__cell.cell-2{width:100%!important;padding-left:5px!important;padding-right:5px!important}.screen-xs .node425 .s-elements-grid__cell.cell-2>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node425 .s-elements-grid__cell.cell-3{width:100%!important;padding-left:5px!important;padding-right:5px!important}.screen-xs .node425 .s-elements-grid__cell.cell-3>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node425 .s-elements-grid__cell.cell-4{width:100%!important;padding-left:5px!important;padding-right:5px!important}.screen-xs .node425 .s-elements-grid__cell.cell-4>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node425 .s-elements-grid__cell.cell-5{width:100%!important;padding-left:5px!important;padding-right:5px!important}.screen-xs .node425 .s-elements-grid__cell.cell-5>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:0!important}.node498>.wrapper1{color:#333}.node498>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:20px;padding-left:5px}.node498 a{color:#19e6d2}.node499>.wrapper1{color:#333}.node499>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:9px;padding-left:5px}.node499 a{color:#19e6d2}.node500>.wrapper1{color:#333}.node500>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node500 a{color:#19e6d2}#node507_meta .number{color:#000;opacity:.05;font-family:Roboto;font-weight:bold;font-style:normal;text-align:left;font-size:83px;line-height:1}.node507>.wrapper1{color:#333}.node507>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node507>.wrapper1>.wrapper2{padding-left:89px!important}.node507 a{color:#19e6d2}#svg270 path,#svg270 circle,#svg270 polygon,#svg270 rect{fill:#e53835}#svg270 defs>path{fill:none}#svg270 path[fill="none"],#svg270 circle[fill="none"],#svg270 polygon[fill="none"],#svg270 rect[fill="none"]{fill:none}.node508>.wrapper1{color:#333}.node508>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:16px;padding-left:5px}.screen-xs .node508>.wrapper1>.wrapper2{padding-top:16px!important;padding-left:120px!important}.screen-sm .node508>.wrapper1>.wrapper2{padding-top:29px!important}.node508 a{color:#19e6d2}.node509>.wrapper1{color:#333}.node509>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node509 a{color:#19e6d2}.node510>.wrapper1{color:#333}.node510>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node510 a{color:#19e6d2}.node506>.wrapper1{color:#333}.node506>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node506 a{color:#19e6d2}.node505>.wrapper1{color:#333}.node505>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node505 a{color:#19e6d2}#node517_meta .number{color:#000;opacity:.05;font-family:Roboto;font-weight:bold;font-style:normal;text-align:left;font-size:83px;line-height:1}.node517>.wrapper1{color:#333}.node517>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node517>.wrapper1>.wrapper2{padding-left:90px!important}.node517 a{color:#19e6d2}#svg271 path,#svg271 circle,#svg271 polygon,#svg271 rect{fill:#e53734}#svg271 defs>path{fill:none}#svg271 path[fill="none"],#svg271 circle[fill="none"],#svg271 polygon[fill="none"],#svg271 rect[fill="none"]{fill:none}.node518>.wrapper1{color:#333}.node518>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:16px;padding-left:5px}.screen-xs .node518>.wrapper1>.wrapper2{padding-top:16px!important;padding-left:120px!important}.screen-sm .node518>.wrapper1>.wrapper2{padding-top:29px!important}.node518 a{color:#19e6d2}.node519>.wrapper1{color:#333}.node519>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node519 a{color:#19e6d2}.node520>.wrapper1{color:#333}.node520>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node520 a{color:#19e6d2}.node516>.wrapper1{color:#333}.node516>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node516 a{color:#19e6d2}.node515>.wrapper1{color:#333}.node515>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node515 a{color:#19e6d2}#node527_meta .number{color:#000;opacity:.05;font-family:Roboto;font-weight:bold;font-style:normal;text-align:left;font-size:83px;line-height:1}.node527>.wrapper1{color:#333}.node527>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node527>.wrapper1>.wrapper2{padding-left:89px!important}.node527 a{color:#19e6d2}#svg272 path,#svg272 circle,#svg272 polygon,#svg272 rect{fill:#e53734}#svg272 defs>path{fill:none}#svg272 path[fill="none"],#svg272 circle[fill="none"],#svg272 polygon[fill="none"],#svg272 rect[fill="none"]{fill:none}.node528>.wrapper1{color:#333}.node528>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:16px;padding-left:5px}.screen-xs .node528>.wrapper1>.wrapper2{padding-top:16px!important;padding-left:120px!important}.screen-sm .node528>.wrapper1>.wrapper2{padding-top:29px!important}.node528 a{color:#19e6d2}.node529>.wrapper1{color:#333}.node529>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node529 a{color:#19e6d2}.node530>.wrapper1{color:#333}.node530>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node530 a{color:#19e6d2}.node526>.wrapper1{color:#333}.node526>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node526 a{color:#19e6d2}.node525>.wrapper1{color:#333}.node525>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node525 a{color:#19e6d2}#node537_meta .number{color:#000;opacity:.05;font-family:Roboto;font-weight:bold;font-style:normal;text-align:left;font-size:83px;line-height:1}.node537>.wrapper1{color:#333}.node537>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node537>.wrapper1>.wrapper2{padding-left:89px!important}.node537 a{color:#19e6d2}#svg273 path,#svg273 circle,#svg273 polygon,#svg273 rect{fill:#e53734}#svg273 defs>path{fill:none}#svg273 path[fill="none"],#svg273 circle[fill="none"],#svg273 polygon[fill="none"],#svg273 rect[fill="none"]{fill:none}.node538>.wrapper1{color:#333}.node538>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:16px;padding-left:5px}.screen-xs .node538>.wrapper1>.wrapper2{padding-top:16px!important;padding-left:120px!important}.screen-sm .node538>.wrapper1>.wrapper2{padding-top:29px!important}.node538 a{color:#19e6d2}.node539>.wrapper1{color:#333}.node539>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node539 a{color:#19e6d2}.node540>.wrapper1{color:#333}.node540>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node540 a{color:#19e6d2}.node536>.wrapper1{color:#333}.node536>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node536 a{color:#19e6d2}.node535>.wrapper1{color:#333}.node535>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node535 a{color:#19e6d2}#node547_meta .number{color:#000;opacity:.05;font-family:Roboto;font-weight:bold;font-style:normal;text-align:left;font-size:83px;line-height:1}.node547>.wrapper1{color:#333}.node547>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node547>.wrapper1>.wrapper2{padding-left:89px!important}.node547 a{color:#19e6d2}#svg274 path,#svg274 circle,#svg274 polygon,#svg274 rect{fill:#e53734}#svg274 defs>path{fill:none}#svg274 path[fill="none"],#svg274 circle[fill="none"],#svg274 polygon[fill="none"],#svg274 rect[fill="none"]{fill:none}.node548>.wrapper1{color:#333}.node548>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:16px;padding-left:5px}.screen-xs .node548>.wrapper1>.wrapper2{padding-top:16px!important;padding-left:120px!important}.screen-sm .node548>.wrapper1>.wrapper2{padding-top:29px!important}.node548 a{color:#19e6d2}.node549>.wrapper1{color:#333}.node549>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node549 a{color:#19e6d2}.node550>.wrapper1{color:#333}.node550>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node550 a{color:#19e6d2}.node546>.wrapper1{color:#333}.node546>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node546 a{color:#19e6d2}.node545>.wrapper1{color:#333}.node545>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node545 a{color:#19e6d2}#node557_meta .number{color:#000;opacity:.05;font-family:Roboto;font-weight:bold;font-style:normal;text-align:left;font-size:83px;line-height:1}.node557>.wrapper1{color:#333}.node557>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node557>.wrapper1>.wrapper2{padding-left:89px!important}.node557 a{color:#19e6d2}#svg275 path,#svg275 circle,#svg275 polygon,#svg275 rect{fill:#e53734}#svg275 defs>path{fill:none}#svg275 path[fill="none"],#svg275 circle[fill="none"],#svg275 polygon[fill="none"],#svg275 rect[fill="none"]{fill:none}.node558>.wrapper1{color:#333}.node558>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:16px;padding-left:5px}.screen-xs .node558>.wrapper1>.wrapper2{padding-top:16px!important;padding-left:120px!important}.screen-sm .node558>.wrapper1>.wrapper2{padding-top:29px!important}.node558 a{color:#19e6d2}.node559>.wrapper1{color:#333}.node559>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.node559 a{color:#19e6d2}.node560>.wrapper1{color:#333}.node560>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node560 a{color:#19e6d2}.node556>.wrapper1{color:#333}.node556>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node556 a{color:#19e6d2}.node555>.wrapper1{color:#333}.node555>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node555 a{color:#19e6d2}.node497>.wrapper1{background-color:#fff;color:#333}.node497>.wrapper1>.wrapper2{padding-top:60px;padding-bottom:90px}.node497 a{color:#19e6d2}.node497 .s-elements-grid{margin-left:-5px;margin-right:-5px}.node497 .s-elements-grid__cell.cell-0{width:33.333333333333336%;padding-left:5px;padding-right:0}.node497 .s-elements-grid__cell.cell-0>.s-elements-grid__cellwrapper{padding-top:20px;padding-bottom:20px;padding-left:0;padding-right:5px}.node497 .s-elements-grid__cell.cell-1{width:33.333333333333336%;padding-left:0;padding-right:0}.node497 .s-elements-grid__cell.cell-1>.s-elements-grid__cellwrapper{padding-top:20px;padding-bottom:20px;padding-left:5px;padding-right:5px}.node497 .s-elements-grid__cell.cell-2{width:33.333333333333336%;padding-left:0;padding-right:5px}.node497 .s-elements-grid__cell.cell-2>.s-elements-grid__cellwrapper{padding-top:20px;padding-bottom:20px;padding-left:5px;padding-right:0}.node497 .s-elements-grid__cell.cell-3{width:33.333333333333336%;padding-left:5px;padding-right:0}.node497 .s-elements-grid__cell.cell-3>.s-elements-grid__cellwrapper{padding-top:20px;padding-bottom:20px;padding-left:0;padding-right:5px}.node497 .s-elements-grid__cell.cell-4{width:33.333333333333336%;padding-left:0;padding-right:0}.node497 .s-elements-grid__cell.cell-4>.s-elements-grid__cellwrapper{padding-top:20px;padding-bottom:20px;padding-left:5px;padding-right:5px}.node497 .s-elements-grid__cell.cell-5{width:33.333333333333336%;padding-left:0;padding-right:5px}.node497 .s-elements-grid__cell.cell-5>.s-elements-grid__cellwrapper{padding-top:20px;padding-bottom:20px;padding-left:5px;padding-right:0}.screen-sm .node497 .s-elements-grid__cell.cell-0{width:50%!important;padding-left:5px!important;padding-right:0!important}.screen-sm .node497 .s-elements-grid__cell.cell-0>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:5px!important}.screen-sm .node497 .s-elements-grid__cell.cell-1{width:50%!important;padding-left:0!important;padding-right:5px!important}.screen-sm .node497 .s-elements-grid__cell.cell-1>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:5px!important;padding-right:0!important}.screen-sm .node497 .s-elements-grid__cell.cell-2{width:50%!important;padding-left:5px!important;padding-right:0!important}.screen-sm .node497 .s-elements-grid__cell.cell-2>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:5px!important}.screen-sm .node497 .s-elements-grid__cell.cell-3{width:50%!important;padding-left:0!important;padding-right:5px!important}.screen-sm .node497 .s-elements-grid__cell.cell-3>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:5px!important;padding-right:0!important}.screen-sm .node497 .s-elements-grid__cell.cell-4{width:50%!important;padding-left:5px!important;padding-right:0!important}.screen-sm .node497 .s-elements-grid__cell.cell-4>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:5px!important}.screen-sm .node497 .s-elements-grid__cell.cell-5{width:50%!important;padding-left:0!important;padding-right:5px!important}.screen-sm .node497 .s-elements-grid__cell.cell-5>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:5px!important;padding-right:0!important}.screen-xs .node497 .s-elements-grid__cell.cell-0{width:100%!important;padding-left:5px!important;padding-right:5px!important}.screen-xs .node497 .s-elements-grid__cell.cell-0>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node497 .s-elements-grid__cell.cell-1{width:100%!important;padding-left:5px!important;padding-right:5px!important}.screen-xs .node497 .s-elements-grid__cell.cell-1>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node497 .s-elements-grid__cell.cell-2{width:100%!important;padding-left:5px!important;padding-right:5px!important}.screen-xs .node497 .s-elements-grid__cell.cell-2>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node497 .s-elements-grid__cell.cell-3{width:100%!important;padding-left:5px!important;padding-right:5px!important}.screen-xs .node497 .s-elements-grid__cell.cell-3>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node497 .s-elements-grid__cell.cell-4{width:100%!important;padding-left:5px!important;padding-right:5px!important}.screen-xs .node497 .s-elements-grid__cell.cell-4>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:0!important}.screen-xs .node497 .s-elements-grid__cell.cell-5{width:100%!important;padding-left:5px!important;padding-right:5px!important}.screen-xs .node497 .s-elements-grid__cell.cell-5>.s-elements-grid__cellwrapper{padding-top:20px!important;padding-bottom:20px!important;padding-left:0!important;padding-right:0!important}.node565 .gradient-top{background:#fff;background:linear-gradient(to bottom,white 0%,rgba(255,255,255,0) 100%)}.area.screen-xs .node565 .xs-wrap .s-diagonal-td.right{background-color:#8dc9ff}.node567>.wrapper1{color:#333}.node567>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node567 a{color:#19e6d2}.node568>.wrapper1{color:#333}.node568>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node568 a{color:#19e6d2}.node566>.wrapper1{color:#333}.node566>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node566 a{color:#19e6d2}.node569>.wrapper1{color:#333}.node569>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node569 a{color:#19e6d2}.node571>.wrapper1{color:#fff}.node571>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node571 a{color:#1985e6}.node570>.wrapper1{color:#fff}.node570>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node570 a{color:#1985e6}.node573>.wrapper1{color:#fff}.node573>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node573 a{color:#1985e6}.node574>.wrapper1{color:#fff}.node574>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node574 a{color:#1985e6}.node572>.wrapper1{color:#fff}.node572>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node572 a{color:#1985e6}.node579>.wrapper1{color:#fff}.node579>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node579 a{color:#1985e6}.node565>.wrapper1{background-color:#fff;color:#333;border-bottom-style:solid;border-bottom-width:1px;border-bottom-color:#ccc}.node565>.wrapper1>.wrapper2{padding-top:10px;padding-bottom:40px}.node565 a{color:#19e6d2}.node584 .gradient-top{background:#ccc;background:linear-gradient(to bottom,#ccc 0%,rgba(204,204,204,0) 100%)}.node584 .gradient-bottom{background:#fff;background:linear-gradient(to bottom,rgba(255,255,255,0) 0%,white 100%)}.node585>.wrapper1{color:#333}.node585>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:20px;padding-left:5px}.node585 a{color:#19b1e6}.node586>.wrapper1{color:#333}.node586>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node586 a{color:#19b1e6}#uid119{background-color:#e25440;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#ca331e;padding-top:17px;padding-bottom:17px;padding-left:34px;padding-right:34px;font-size:18px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid119:hover,#uid119.hover,#uid119.hover-on-scroll{background-color:#df3d27;border-color:#a22918;color:#fff}#uid119:active,#uid119.active{background-color:#cd341f;border-color:#812113;color:#fff}#uid119:before{}#uid119:active:before,#uid119.active:before{background-color:#cd341f}#uid119 .fa{font-size:23px}#uid121{background-color:#e25440;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#ca331e;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;font-family:"Open Sans";box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid121:hover,#uid121.hover,#uid121.hover-on-scroll{background-color:#df3d27;border-color:#a22918;color:#fff}#uid121:active,#uid121.active{background-color:#df3d27;border-color:#b62e1b;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid121:before{}#uid121:active:before,#uid121.active:before{background-color:#df3d27;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid121 .fa{font-size:23px}.node588>.wrapper1{color:#333}.node588>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node588 a{color:#19b1e6}.node587>.wrapper1{color:#333}.node587>.wrapper1>.wrapper2{padding-top:20px;padding-right:0;padding-bottom:6px;padding-left:0}.node587 a{color:#19b1e6}.node584>.wrapper1{background-color:#fff;color:#333}.node584>.wrapper1>.wrapper2{padding-top:40px;padding-bottom:40px}.node584 a{color:#19b1e6}.node597 .gradient-top{background:#fff;background:linear-gradient(to bottom,white 0%,rgba(255,255,255,0) 100%)}.node597 .gradient-bottom{background:#fff;background:linear-gradient(to bottom,rgba(255,255,255,0) 0%,white 100%)}.node598>.wrapper1{color:#333}.node598>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:20px;padding-left:5px}.node598 a{color:#19b1e6}.node599>.wrapper1{color:#333}.node599>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node599 a{color:#19b1e6}#uid276{background-color:rgba(66,169,95,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#42a95f;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:13px;font-weight:bold;color:#42a95f;font-family:"Open Sans"}#uid276:hover,#uid276.hover,#uid276.hover-on-scroll{background-color:#42a95f;border-color:#42a95f;color:#fff}#uid276:active,#uid276.active{background-color:#3b9855;border-color:#42a95f;color:#fff}#uid276:before{}#uid276:active:before,#uid276.active:before{background-color:#3b9855}#uid276 .fa{font-size:17px}#uid278{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;font-family:"Open Sans";box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid278:hover,#uid278.hover,#uid278.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid278:active,#uid278.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid278:before{}#uid278:active:before,#uid278.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid278 .fa{font-size:23px}.node601>.wrapper1{color:#333}.node601>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node601 a{color:#19b1e6}.node600>.wrapper1{color:#333}.node600>.wrapper1>.wrapper2{padding-top:20px;padding-right:0;padding-bottom:6px;padding-left:0}.node600 a{color:#19b1e6}.node597>.wrapper1{background-color:#fff;color:#333}.node597>.wrapper1>.wrapper2{padding-top:39px;padding-bottom:40px}.node597 a{color:#19b1e6}.node611>.wrapper1{color:#333}.node611>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:42px;padding-left:5px}.node611 a{color:#19e6d2}.node612>.wrapper1{color:#333}.node612>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:25px;padding-left:5px}.node612 a{color:#19e6d2}.node614>.wrapper1{background-color:#4caf50;color:#fff}.node614>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node614 a{color:#19e622}.node613>.wrapper1{color:#333}.node613>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node613 a{color:#19e6d2}#svg123 path,#svg123 circle,#svg123 polygon,#svg123 rect{fill:#000}#svg123 defs>path{fill:none}#svg123 path[fill="none"],#svg123 circle[fill="none"],#svg123 polygon[fill="none"],#svg123 rect[fill="none"]{fill:none}#svg123 .st0{fill:none;stroke:#000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node619>.wrapper1{color:#333}.node619>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node619 a{color:#19e6d2}.node618>.wrapper1{color:#333}.node618>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node618 a{color:#19e6d2}.node623>.wrapper1{color:#333}.node623>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node623 a{color:#19e6d2}#svg124 path,#svg124 circle,#svg124 polygon,#svg124 rect{fill:#000}#svg124 defs>path{fill:none}#svg124 path[fill="none"],#svg124 circle[fill="none"],#svg124 polygon[fill="none"],#svg124 rect[fill="none"]{fill:none}#svg124 .st0{fill:none;stroke:#000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node625>.wrapper1{color:#333}.node625>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node625 a{color:#19e6d2}.node624>.wrapper1{color:#333}.node624>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node624 a{color:#19e6d2}.node629>.wrapper1{color:#333}.node629>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node629 a{color:#19e6d2}.node631>.wrapper1{color:#333}.node631>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node631 a{color:#19e6d2}.node630>.wrapper1{color:#333}.node630>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node630 a{color:#19e6d2}.node635>.wrapper1{color:#333}.node635>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node635 a{color:#19e6d2}#svg125 path,#svg125 circle,#svg125 polygon,#svg125 rect{fill:#000}#svg125 defs>path{fill:none}#svg125 path[fill="none"],#svg125 circle[fill="none"],#svg125 polygon[fill="none"],#svg125 rect[fill="none"]{fill:none}#svg125 .st0{fill:none;stroke:#000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node637>.wrapper1{color:#333}.node637>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node637 a{color:#19e6d2}.node636>.wrapper1{color:#333}.node636>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node636 a{color:#19e6d2}.node641>.wrapper1{color:#333}.node641>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node641 a{color:#19e6d2}.node643>.wrapper1{color:#333}.node643>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node643 a{color:#19e6d2}.node642>.wrapper1{color:#333}.node642>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node642 a{color:#19e6d2}.node647>.wrapper1{color:#333}.node647>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node647 a{color:#19e6d2}#svg126 path,#svg126 circle,#svg126 polygon,#svg126 rect{fill:#000}#svg126 defs>path{fill:none}#svg126 path[fill="none"],#svg126 circle[fill="none"],#svg126 polygon[fill="none"],#svg126 rect[fill="none"]{fill:none}#svg126 .st0{fill:none;stroke:#000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node649>.wrapper1{color:#333}.node649>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node649 a{color:#19e6d2}.node648>.wrapper1{color:#333}.node648>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node648 a{color:#19e6d2}.node653>.wrapper1{color:#333}.node653>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node653 a{color:#19e6d2}#svg127 path,#svg127 circle,#svg127 polygon,#svg127 rect{fill:#000}#svg127 defs>path{fill:none}#svg127 path[fill="none"],#svg127 circle[fill="none"],#svg127 polygon[fill="none"],#svg127 rect[fill="none"]{fill:none}#svg127 .st0{fill:none;stroke:#000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node655>.wrapper1{color:#333}.node655>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node655 a{color:#19e6d2}.node654>.wrapper1{color:#333}.node654>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node654 a{color:#19e6d2}.node659>.wrapper1{color:#333}.node659>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node659 a{color:#19e6d2}.node661>.wrapper1{color:#333}.node661>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node661 a{color:#19e6d2}.node660>.wrapper1{color:#333}.node660>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node660 a{color:#19e6d2}.node665>.wrapper1{color:#333}.node665>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node665 a{color:#19e6d2}#svg128 path,#svg128 circle,#svg128 polygon,#svg128 rect{fill:#000}#svg128 defs>path{fill:none}#svg128 path[fill="none"],#svg128 circle[fill="none"],#svg128 polygon[fill="none"],#svg128 rect[fill="none"]{fill:none}#svg128 .st0{fill:none;stroke:#000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node667>.wrapper1{color:#333}.node667>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node667 a{color:#19e6d2}.node666>.wrapper1{color:#333}.node666>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node666 a{color:#19e6d2}.node671>.wrapper1{color:#333}.node671>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node671 a{color:#19e6d2}#svg129 path,#svg129 circle,#svg129 polygon,#svg129 rect{fill:#000}#svg129 defs>path{fill:none}#svg129 path[fill="none"],#svg129 circle[fill="none"],#svg129 polygon[fill="none"],#svg129 rect[fill="none"]{fill:none}#svg129 .st0{fill:none;stroke:#000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node673>.wrapper1{color:#333}.node673>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node673 a{color:#19e6d2}.node672>.wrapper1{color:#333}.node672>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node672 a{color:#19e6d2}.node677>.wrapper1{color:#333}.node677>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node677 a{color:#19e6d2}.node679>.wrapper1{color:#333}.node679>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node679 a{color:#19e6d2}.node678>.wrapper1{color:#333}.node678>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node678 a{color:#19e6d2}.node683>.wrapper1{color:#333}.node683>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node683 a{color:#19e6d2}#svg130 path,#svg130 circle,#svg130 polygon,#svg130 rect{fill:#000}#svg130 defs>path{fill:none}#svg130 path[fill="none"],#svg130 circle[fill="none"],#svg130 polygon[fill="none"],#svg130 rect[fill="none"]{fill:none}#svg130 .st0{fill:none;stroke:#000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node685>.wrapper1{color:#333}.node685>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node685 a{color:#19e6d2}.node684>.wrapper1{color:#333}.node684>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node684 a{color:#19e6d2}.node689>.wrapper1{color:#333}.node689>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node689 a{color:#19e6d2}#svg131 path,#svg131 circle,#svg131 polygon,#svg131 rect{fill:#000}#svg131 defs>path{fill:none}#svg131 path[fill="none"],#svg131 circle[fill="none"],#svg131 polygon[fill="none"],#svg131 rect[fill="none"]{fill:none}#svg131 .st0{fill:none;stroke:#000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node691>.wrapper1{color:#333}.node691>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node691 a{color:#19e6d2}.node690>.wrapper1{color:#333}.node690>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node690 a{color:#19e6d2}.node695>.wrapper1{color:#333}.node695>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node695 a{color:#19e6d2}#svg132 path,#svg132 circle,#svg132 polygon,#svg132 rect{fill:#000}#svg132 defs>path{fill:none}#svg132 path[fill="none"],#svg132 circle[fill="none"],#svg132 polygon[fill="none"],#svg132 rect[fill="none"]{fill:none}#svg132 .st0{fill:none;stroke:#000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node697>.wrapper1{color:#333}.node697>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node697 a{color:#19e6d2}.node696>.wrapper1{color:#333}.node696>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node696 a{color:#19e6d2}.node701>.wrapper1{color:#333}.node701>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node701 a{color:#19e6d2}.node703>.wrapper1{color:#333}.node703>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node703 a{color:#19e6d2}.node702>.wrapper1{color:#333}.node702>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node702 a{color:#19e6d2}.node707>.wrapper1{color:#333}.node707>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node707 a{color:#19e6d2}#svg133 path,#svg133 circle,#svg133 polygon,#svg133 rect{fill:#000}#svg133 defs>path{fill:none}#svg133 path[fill="none"],#svg133 circle[fill="none"],#svg133 polygon[fill="none"],#svg133 rect[fill="none"]{fill:none}#svg133 .st0{fill:none;stroke:#000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node709>.wrapper1{color:#333}.node709>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node709 a{color:#19e6d2}.node708>.wrapper1{color:#333}.node708>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node708 a{color:#19e6d2}.node713>.wrapper1{color:#333}.node713>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node713 a{color:#19e6d2}.node715>.wrapper1{color:#333}.node715>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node715 a{color:#19e6d2}.node714>.wrapper1{color:#333}.node714>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node714 a{color:#19e6d2}.node719>.wrapper1{color:#333}.node719>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node719 a{color:#19e6d2}.node721>.wrapper1{color:#333}.node721>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node721 a{color:#19e6d2}.node720>.wrapper1{color:#333}.node720>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node720 a{color:#19e6d2}.node725>.wrapper1{color:#333}.node725>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node725 a{color:#19e6d2}#svg134 path,#svg134 circle,#svg134 polygon,#svg134 rect{fill:#000}#svg134 defs>path{fill:none}#svg134 path[fill="none"],#svg134 circle[fill="none"],#svg134 polygon[fill="none"],#svg134 rect[fill="none"]{fill:none}#svg134 .st0{fill:none;stroke:#000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node727>.wrapper1{color:#333}.node727>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node727 a{color:#19e6d2}.node726>.wrapper1{color:#333}.node726>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node726 a{color:#19e6d2}.node731>.wrapper1{color:#333}.node731>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node731 a{color:#19e6d2}#svg135 path,#svg135 circle,#svg135 polygon,#svg135 rect{fill:#000}#svg135 defs>path{fill:none}#svg135 path[fill="none"],#svg135 circle[fill="none"],#svg135 polygon[fill="none"],#svg135 rect[fill="none"]{fill:none}#svg135 .st0{fill:none;stroke:#000;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.node733>.wrapper1{color:#333}.node733>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node733 a{color:#19e6d2}.node732>.wrapper1{color:#333}.node732>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node732 a{color:#19e6d2}.node737>.wrapper1{color:#333}.node737>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node737 a{color:#19e6d2}.node738>.wrapper1{color:#333}.node738>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node738 a{color:#19e6d2}.node738 .padding{height:50px}.node739>.wrapper1{color:#333}.node739>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node739 a{color:#19e6d2}.node740>.wrapper1{color:#333}.node740>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node740 a{color:#19e6d2}#uid136{background-color:rgba(229,56,53,0);border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:4px;border-bottom-width:4px;border-left-width:4px;border-right-width:4px;border-color:#e53835;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;font-size:16px;font-weight:bold;color:#e53835;font-family:"Open Sans"}#uid136:hover,#uid136.hover,#uid136.hover-on-scroll{background-color:#e53835;border-color:#e53835;color:#fff}#uid136:active,#uid136.active{background-color:#e0211d;border-color:#e53835;color:#fff}#uid136:before{}#uid136:active:before,#uid136.active:before{background-color:#e0211d}#uid136 .fa{font-size:21px}#uid138{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;font-family:"Open Sans";box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid138:hover,#uid138.hover,#uid138.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid138:active,#uid138.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid138:before{}#uid138:active:before,#uid138.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid138 .fa{font-size:23px}.node741>.wrapper1{color:#333}.node741>.wrapper1>.wrapper2{padding-top:30px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node741 a{color:#19e6d2}.node610>.wrapper1{background-color:#fff;color:#333}.node610>.wrapper1>.wrapper2{padding-top:60px;padding-bottom:90px}.node610 a{color:#19e6d2}.node747 .gradient-top{background:#fff;background:linear-gradient(to bottom,white 0%,rgba(255,255,255,0) 100%)}.node749>.wrapper1{color:#333}.node749>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.screen-xs .node749>.wrapper1>.wrapper2{padding-top:30px!important}.screen-sm .node749>.wrapper1>.wrapper2{padding-top:30px!important;padding-bottom:22px!important}.node749 a{color:#19e6d2}.node751>.wrapper1{color:#333}.node751>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:5px}.node751 a{color:#19e6d2}#uid139{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:16px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid139:hover,#uid139.hover,#uid139.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid139:active,#uid139.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid139:before{}#uid139:active:before,#uid139.active:before{background-color:rgba(123,112,107,0)}#uid139 .fa{font-size:21px}.node753>.wrapper1{color:#333}.node753>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node753 a{color:#19e6d2}#uid140{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:15px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid140:hover,#uid140.hover,#uid140.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid140:active,#uid140.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid140:before{}#uid140:active:before,#uid140.active:before{background-color:rgba(123,112,107,0)}#uid140 .fa{font-size:20px}.node755>.wrapper1{color:#333}.node755>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node755 a{color:#19e6d2}#uid141{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:16px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid141:hover,#uid141.hover,#uid141.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid141:active,#uid141.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid141:before{}#uid141:active:before,#uid141.active:before{background-color:rgba(123,112,107,0)}#uid141 .fa{font-size:21px}.node757>.wrapper1{color:#333}.node757>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node757 a{color:#19e6d2}#uid142{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:16px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid142:hover,#uid142.hover,#uid142.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid142:active,#uid142.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid142:before{}#uid142:active:before,#uid142.active:before{background-color:rgba(123,112,107,0)}#uid142 .fa{font-size:21px}.node759>.wrapper1{color:#333}.node759>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node759 a{color:#19e6d2}.node752>.wrapper1{color:#333}.node752>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node752 a{color:#19e6d2}.node763>.wrapper1{color:#333}.node763>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node763 a{color:#19e6d2}.node764>.wrapper1{color:#333}.node764>.wrapper1>.wrapper2{padding-top:9px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node764 a{color:#19e6d2}.node765>.wrapper1{color:#333}.node765>.wrapper1>.wrapper2{padding-top:9px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node765 a{color:#19e6d2}#uid143{background-color:rgba(38,166,154,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#1e857b;padding-top:8px;padding-bottom:8px;padding-left:12px;padding-right:12px;font-size:16px;text-decoration:underline;color:#2c7ec9;font-family:"Roboto Slab"}#uid143:hover,#uid143.hover,#uid143.hover-on-scroll{background-color:rgba(34,149,139,0);border-color:#186a63;color:#2364a1}#uid143:active,#uid143.active{background-color:rgba(31,134,125,0);border-color:#1b786f;color:#000}#uid143:before{}#uid143:active:before,#uid143.active:before{background-color:rgba(31,134,125,0)}#uid143 .fa{font-size:21px}#uid145{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid145:hover,#uid145.hover,#uid145.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid145:active,#uid145.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid145:before{}#uid145:active:before,#uid145.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid145 .fa{font-size:23px}.node766>.wrapper1{color:#333}.node766>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node766 a{color:#19e6d2}.node768>.wrapper1{color:#333}.node768>.wrapper1>.wrapper2{padding-top:9px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node768 a{color:#19e6d2}.node750>.wrapper1{color:#333}.node750>.wrapper1>.wrapper2{padding-top:25px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node750 a{color:#19e6d2}.node772>.wrapper1{color:#333}.node772>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node772>.wrapper1>.wrapper2{padding-top:14px!important}.node772 a{color:#19e6d2}.node773>.wrapper1{color:#333}.node773>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node773 a{color:#19e6d2}.node773 .padding{height:20px}.node774>.wrapper1{color:#333}.node774>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.node774 a{color:#19e6d2}.node748>.wrapper1{color:#333;border-radius:6px}.node748>.wrapper1>.wrapper2{padding-top:22px;padding-right:0;padding-bottom:0;padding-left:0;border-radius:2px}.node748 a{color:#19e6d2}.node747>.wrapper1{background-color:#fff;color:#333}.node747>.wrapper1>.wrapper2{padding-top:10px;padding-bottom:30px}.node747 a{color:#19e6d2}.node779 .gradient-top{background:#fff;background:linear-gradient(to bottom,white 0%,rgba(255,255,255,0) 100%)}.node781>.wrapper1{color:#333}.node781>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.screen-xs .node781>.wrapper1>.wrapper2{padding-top:30px!important}.screen-sm .node781>.wrapper1>.wrapper2{padding-top:30px!important;padding-bottom:22px!important}.node781 a{color:#19e6d2}.node783>.wrapper1{color:#333}.node783>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:5px}.node783 a{color:#19e6d2}#uid175{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:16px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid175:hover,#uid175.hover,#uid175.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid175:active,#uid175.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid175:before{}#uid175:active:before,#uid175.active:before{background-color:rgba(123,112,107,0)}#uid175 .fa{font-size:21px}.node785>.wrapper1{color:#333}.node785>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node785 a{color:#19e6d2}#uid176{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:15px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid176:hover,#uid176.hover,#uid176.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid176:active,#uid176.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid176:before{}#uid176:active:before,#uid176.active:before{background-color:rgba(123,112,107,0)}#uid176 .fa{font-size:20px}.node787>.wrapper1{color:#333}.node787>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node787 a{color:#19e6d2}#uid177{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:16px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid177:hover,#uid177.hover,#uid177.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid177:active,#uid177.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid177:before{}#uid177:active:before,#uid177.active:before{background-color:rgba(123,112,107,0)}#uid177 .fa{font-size:21px}.node789>.wrapper1{color:#333}.node789>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node789 a{color:#19e6d2}.node784>.wrapper1{color:#333}.node784>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node784 a{color:#19e6d2}.node793>.wrapper1{color:#333}.node793>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node793 a{color:#19e6d2}.node794>.wrapper1{color:#333}.node794>.wrapper1>.wrapper2{padding-top:9px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node794 a{color:#19e6d2}.node795>.wrapper1{color:#333}.node795>.wrapper1>.wrapper2{padding-top:9px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node795 a{color:#19e6d2}#uid178{background-color:rgba(38,166,154,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#1e857b;padding-top:8px;padding-bottom:8px;padding-left:12px;padding-right:12px;font-size:16px;text-decoration:underline;color:#2c7ec9;font-family:"Roboto Slab"}#uid178:hover,#uid178.hover,#uid178.hover-on-scroll{background-color:rgba(34,149,139,0);border-color:#186a63;color:#2364a1}#uid178:active,#uid178.active{background-color:rgba(31,134,125,0);border-color:#1b786f;color:#000}#uid178:before{}#uid178:active:before,#uid178.active:before{background-color:rgba(31,134,125,0)}#uid178 .fa{font-size:21px}#uid180{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid180:hover,#uid180.hover,#uid180.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid180:active,#uid180.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid180:before{}#uid180:active:before,#uid180.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid180 .fa{font-size:23px}.node796>.wrapper1{color:#333}.node796>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node796 a{color:#19e6d2}.node798>.wrapper1{color:#333}.node798>.wrapper1>.wrapper2{padding-top:9px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node798 a{color:#19e6d2}.node782>.wrapper1{color:#333}.node782>.wrapper1>.wrapper2{padding-top:25px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node782 a{color:#19e6d2}.node802>.wrapper1{color:#333}.node802>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node802>.wrapper1>.wrapper2{padding-top:14px!important}.node802 a{color:#19e6d2}.node803>.wrapper1{color:#333}.node803>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node803 a{color:#19e6d2}.node803 .padding{height:20px}.node804>.wrapper1{color:#333}.node804>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.node804 a{color:#19e6d2}.node780>.wrapper1{color:#333;border-radius:6px}.node780>.wrapper1>.wrapper2{padding-top:22px;padding-right:0;padding-bottom:0;padding-left:0;border-radius:2px}.node780 a{color:#19e6d2}.node779>.wrapper1{background-color:#fff;color:#333}.node779>.wrapper1>.wrapper2{padding-top:10px;padding-bottom:30px}.node779 a{color:#19e6d2}.node809 .gradient-top{background:#fff;background:linear-gradient(to bottom,white 0%,rgba(255,255,255,0) 100%)}.node812>.wrapper1{color:#333}.node812>.wrapper1>.wrapper2{padding-top:5px;padding-right:0;padding-bottom:5px;padding-left:5px}.node812 a{color:#19e6d2}#uid280{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:16px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid280:hover,#uid280.hover,#uid280.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid280:active,#uid280.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid280:before{}#uid280:active:before,#uid280.active:before{background-color:rgba(123,112,107,0)}#uid280 .fa{font-size:21px}.node814>.wrapper1{color:#333}.node814>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:0;padding-left:5px}.node814 a{color:#19e6d2}#uid281{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:16px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid281:hover,#uid281.hover,#uid281.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid281:active,#uid281.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid281:before{}#uid281:active:before,#uid281.active:before{background-color:rgba(123,112,107,0)}#uid281 .fa{font-size:21px}.node816>.wrapper1{color:#333}.node816>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node816 a{color:#19e6d2}#uid282{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:15px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid282:hover,#uid282.hover,#uid282.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid282:active,#uid282.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid282:before{}#uid282:active:before,#uid282.active:before{background-color:rgba(123,112,107,0)}#uid282 .fa{font-size:20px}.node818>.wrapper1{color:#333}.node818>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node818 a{color:#19e6d2}#uid283{background-color:rgba(123,112,107,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#2c7ec9;padding-top:6px;padding-bottom:6px;padding-left:12px;padding-right:12px;font-size:16px;color:#2c7ec9;font-family:"TTNorms Medium"}#uid283:hover,#uid283.hover,#uid283.hover-on-scroll{background-color:rgba(123,112,107,0);border-color:#5198d9;color:#5198d9}#uid283:active,#uid283.active{background-color:rgba(123,112,107,0);border-color:#4a4340;color:#2b7ac3}#uid283:before{}#uid283:active:before,#uid283.active:before{background-color:rgba(123,112,107,0)}#uid283 .fa{font-size:21px}.node820>.wrapper1{color:#333}.node820>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:0;padding-left:5px}.node820 a{color:#19e6d2}.node813>.wrapper1{color:#333}.node813>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node813 a{color:#19e6d2}.node822>.wrapper1{color:#333}.node822>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:10px;padding-left:5px}.screen-xs .node822>.wrapper1>.wrapper2{padding-top:30px!important}.screen-sm .node822>.wrapper1>.wrapper2{padding-top:30px!important;padding-bottom:22px!important}.node822 a{color:#19e6d2}.node823>.wrapper1{color:#333}.node823>.wrapper1>.wrapper2{padding-top:9px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node823 a{color:#19e6d2}.node824>.wrapper1{color:#333}.node824>.wrapper1>.wrapper2{padding-top:9px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node824 a{color:#19e6d2}#uid284{background-color:rgba(38,166,154,0);border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-style:solid;border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:0;border-color:#1e857b;padding-top:8px;padding-bottom:8px;padding-left:12px;padding-right:12px;font-size:16px;text-decoration:underline;color:#2c7ec9;font-family:"Roboto Slab"}#uid284:hover,#uid284.hover,#uid284.hover-on-scroll{background-color:rgba(34,149,139,0);border-color:#186a63;color:#2364a1}#uid284:active,#uid284.active{background-color:rgba(31,134,125,0);border-color:#1b786f;color:#000}#uid284:before{}#uid284:active:before,#uid284.active:before{background-color:rgba(31,134,125,0)}#uid284 .fa{font-size:21px}#uid286{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid286:hover,#uid286.hover,#uid286.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid286:active,#uid286.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid286:before{}#uid286:active:before,#uid286.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid286 .fa{font-size:23px}.node825>.wrapper1{color:#333}.node825>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node825 a{color:#19e6d2}.node827>.wrapper1{color:#333}.node827>.wrapper1>.wrapper2{padding-top:9px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node827 a{color:#19e6d2}.node811>.wrapper1{color:#333}.node811>.wrapper1>.wrapper2{padding-top:25px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node811 a{color:#19e6d2}.node831>.wrapper1{color:#333}.node831>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.screen-xs .node831>.wrapper1>.wrapper2{padding-top:14px!important}.node831 a{color:#19e6d2}.node832>.wrapper1{color:#333}.node832>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node832 a{color:#19e6d2}.node832 .padding{height:20px}.node833>.wrapper1{color:#333}.node833>.wrapper1>.wrapper2{padding-top:0;padding-right:5px;padding-bottom:5px;padding-left:5px}.node833 a{color:#19e6d2}.node810>.wrapper1{color:#333;border-radius:6px}.node810>.wrapper1>.wrapper2{padding-top:22px;padding-right:0;padding-bottom:0;padding-left:0;border-radius:2px}.node810 a{color:#19e6d2}.node809>.wrapper1{background-color:#fff;color:#333}.node809>.wrapper1>.wrapper2{padding-top:10px;padding-bottom:30px}.node809 a{color:#19e6d2}.node839>.wrapper1{color:#333}.node839>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node839 a{color:#19e6d2}.node840>.wrapper1{color:#333}.node840>.wrapper1>.wrapper2{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}.node840 a{color:#19e6d2}.node840 .padding{height:40px}.node843>.wrapper1{color:#333}.node843>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node843 a{color:#19e6d2}.node844>.wrapper1{color:#333}.node844>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node844 a{color:#19e6d2}.node845>.wrapper1{color:#333}.node845>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node845 a{color:#19e6d2}.node846>.wrapper1{color:#333}.node846>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node846 a{color:#19e6d2}.node847>.wrapper1{color:#333}.node847>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node847 a{color:#19e6d2}.node842>.wrapper1{color:#333}.node842>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node842 a{color:#19e6d2}.node849>.wrapper1{color:#333}.node849>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node849 a{color:#19e6d2}.node841>.wrapper1{color:#333}.node841>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node841 a{color:#19e6d2}.node851>.wrapper1{color:#333}.node851>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node851 a{color:#19e6d2}#uid161{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:2px;border-bottom-width:2px;border-left-width:2px;border-right-width:2px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:13px;font-weight:bold;color:#fff;font-family:"Open Sans"}#uid161:hover,#uid161.hover,#uid161.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid161:active,#uid161.active{background-color:#3b9855;border-color:#2f7a44;color:#fff}#uid161:before{}#uid161:active:before,#uid161.active:before{background-color:#3b9855}#uid161 .fa{font-size:17px}#uid163{background-color:#42a95f;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-style:solid;border-top-width:1px;border-bottom-width:3px;border-left-width:1px;border-right-width:1px;border-color:#35874c;padding-top:8px;padding-bottom:8px;padding-left:16px;padding-right:16px;font-size:18px;font-weight:bold;color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.25)}#uid163:hover,#uid163.hover,#uid163.hover-on-scroll{background-color:#3b9855;border-color:#2a6c3d;color:#fff}#uid163:active,#uid163.active{background-color:#3b9855;border-color:#2f7a44;border-top-width:3px;border-bottom-width:1px;color:#fff;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid163:before{}#uid163:active:before,#uid163.active:before{background-color:#3b9855;box-shadow:inset 0 2px 5px 0 rgba(0,0,0,.25)}#uid163 .fa{font-size:23px}.node852>.wrapper1{color:#333}.node852>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node852 a{color:#19e6d2}.node850>.wrapper1{color:#333}.node850>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node850 a{color:#19e6d2}#svg287 path,#svg287 circle,#svg287 polygon,#svg287 rect{fill:#9ca2ae}#svg287 defs>path{fill:none}#svg287 path[fill="none"],#svg287 circle[fill="none"],#svg287 polygon[fill="none"],#svg287 rect[fill="none"]{fill:none}.node858>.wrapper1{color:#333}.node858>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node858 a{color:#19e6d2}.node859>.wrapper1{color:#333}.node859>.wrapper1>.wrapper2{padding-top:15px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node859 a{color:#19e6d2}.node860>.wrapper1{color:#333}.node860>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node860 a{color:#19e6d2}.node861>.wrapper1{color:#333}.node861>.wrapper1>.wrapper2{padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px}.node861 a{color:#19e6d2}div.area.screen-lg{min-width:1170px}div.area.screen-lg .container{width:1170px}div.area.screen-lg .container.soft{max-width:1170px}div.area.screen-md{min-width:970px}div.area.screen-md .container{width:970px}div.area.screen-md .container.soft{max-width:970px}div.area.screen-sm{min-width:750px}div.area.screen-sm .container{width:750px}div.area.screen-sm .container.soft{max-width:750px}div.area.screen-xs .container{max-width:767px}</style>
<script>if(!plp.screenSizes){plp.screenSizes={sm:768,md:992,lg:1200,};}if(plp.screens==='screens-xs')plp.screen='xs';else if(plp.screens==='screens-sm')plp.screen='sm';else if(plp.screens==='screens-md')plp.screen='md';else if(plp.screens==='screens-lg')plp.screen='lg';else if(plp.screens==='screens-xs-sm'){if(document.body.clientWidth>=768)plp.screen='sm';else if(document.body.clientWidth<=767)plp.screen='xs';}else if(plp.screens==='screens-xs-md'){if(document.body.clientWidth>=992)plp.screen='md';else if(document.body.clientWidth<=991)plp.screen='xs';}else if(plp.screens==='screens-xs-lg'){if(document.body.clientWidth>=1200)plp.screen='lg';else if(document.body.clientWidth<=1199)plp.screen='xs';}else if(plp.screens==='screens-sm-md'){if(document.body.clientWidth>=992)plp.screen='md';else if(document.body.clientWidth<=991)plp.screen='sm';}else if(plp.screens==='screens-sm-lg'){if(document.body.clientWidth>=1200)plp.screen='lg';else if(document.body.clientWidth<=1199)plp.screen='sm';}else if(plp.screens==='screens-md-lg'){if(document.body.clientWidth>=1200)plp.screen='lg';else if(document.body.clientWidth<=1199)plp.screen='md';}else if(plp.screens==='screens-xs-sm-md'){if(document.body.clientWidth>=992)plp.screen='md';else if(document.body.clientWidth>=768&&document.body.clientWidth<=991)plp.screen='sm';else if(document.body.clientWidth<=767)plp.screen='xs';}else if(plp.screens==='screens-xs-sm-lg'){if(document.body.clientWidth>=1200)plp.screen='lg';else if(document.body.clientWidth>=768&&document.body.clientWidth<=1199)plp.screen='sm';else if(document.body.clientWidth<=767)plp.screen='xs';}else if(plp.screens==='screens-xs-md-lg'){if(document.body.clientWidth>=1200)plp.screen='lg';else if(document.body.clientWidth>=992&&document.body.clientWidth<=1199)plp.screen='md';else if(document.body.clientWidth<=991)plp.screen='xs';}else if(plp.screens==='screens-sm-md-lg'){if(document.body.clientWidth>=1200)plp.screen='lg';else if(document.body.clientWidth>=992&&document.body.clientWidth<=1199)plp.screen='md';else if(document.body.clientWidth<=991)plp.screen='sm';}else if(plp.screens==='screens-xs-sm-md-lg'){if(document.body.clientWidth>=1200)plp.screen='lg';else if(document.body.clientWidth>=992&&document.body.clientWidth<=1199)plp.screen='md';else if(document.body.clientWidth>=768&&document.body.clientWidth<=991)plp.screen='sm';else if(document.body.clientWidth<=767)plp.screen='xs';}[].slice.call(document.body.childNodes).forEach(function(el){if(el.className&&el.className.indexOf('area')>=0){el.classList.add('screen-'+plp.screen);}});</script>
					<script class="adaptive">if(["xs"].indexOf(plp.screen)>=0)document.write("<!--")</script>
					<div class="node node0 section section-clear fixation-top xs-hidden" id="шапка" data-opacity="0.9">
					<div class="wrapper1">
					<div class="wrapper2">
					<div class="container">
					<div class="cont">
					<div class="node node1 widget widget-grid">
					<div class="wrapper1">
					<div class="wrapper2">
					<div class="grid valign-middle paddings-10px xs-wrap">
					<div class="gridwrap">
					<div class="col" style="width: 21.5336%;">
					<div class="cont">
					<div class="node node2 widget widget-text">
					<div class="wrapper1">
					<div class="wrapper2">
					<div class="">
					<h1 class="spans xs-force-center textable">
					<span class="p">
					<span style="font-size: 20px;">
					<span style="color: rgb(17, 17, 17);">
					<span style="font-family: &quot;TTNorms Medium&quot;;">MORE-IZ-IKRY</span></span></span></span>
					<span class="p">
					<span style="font-size: 12px;">
					<span style="font-family: &quot;TTNorms Medium&quot;;">ИКРА В УКРАИНЕ</span></span></span></h1></div></div></div></div></div></div>
					<div class="col" style="width: 72.6153%;">
					<div class="cont">
					<div class="node node3 widget widget-menu">
					<div class="wrapper1">
					<div class="wrapper2">
					<div class="w-menu-grid right">
					<div class="w-menu-grid__cell" style="padding-left: 3px; padding-right: 3px;">
					<div class="cont cell">
					<div class="node node5 widget widget-menu-button">
					<div class="wrapper1">
					<div class="wrapper2">
					<div class="macros-button">
					<div class="btn-out center xs-none">
					<a class="btn-inner" href="#онас" target="_self">
					<button class="btn hvr-fade font-text" id="uid8" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
					<span class="text">О Нас</span></button></a></div></div></div></div></div></div></div>
					<div class="w-menu-grid__cell" style="padding-left: 3px; padding-right: 3px;">
					<div class="cont cell">
					<div class="node node6 widget widget-menu-button">
					<div class="wrapper1">
					<div class="wrapper2">
					<div class="macros-button">
					<div class="btn-out center xs-none">
					<a class="btn-inner" href="#икра" target="_self">
					<button class="btn hvr-fade font-text" id="uid9" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
					<span class="text">Икра</span></button></a></div></div></div></div></div></div></div>
					<div class="w-menu-grid__cell" style="padding-left: 3px; padding-right: 3px;">
					<div class="cont cell">
					<div class="node node7 widget widget-menu-button">
					<div class="wrapper1">
					<div class="wrapper2">
					<div class="macros-button">
					<div class="btn-out center xs-none">
					<a class="btn-inner" href="#какзаказать" target="_self">
					<button class="btn hvr-fade font-text" id="uid10" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
					<span class="text">Как Заказать?</span></button></a></div></div></div></div></div></div></div>
					<div class="w-menu-grid__cell" style="padding-left: 3px; padding-right: 3px;">
					<div class="cont cell">
					<div class="node node8 widget widget-menu-button">
					<div class="wrapper1">
					<div class="wrapper2">
					<div class="macros-button">
					<div class="btn-out center xs-none">
					<a class="btn-inner" href="#доставка" target="_self">
					<button class="btn hvr-fade font-text" id="uid11" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
					<span class="text">Доставка и Оплата</span></button></a></div></div></div></div></div></div></div>
					<div class="w-menu-grid__cell" style="padding-left: 3px; padding-right: 3px;">
					<div class="cont cell">
					<div class="node node9 widget widget-menu-button">
					<div class="wrapper1">
					<div class="wrapper2">
					<div class="macros-button">
					<div class="btn-out center xs-none">
					<a class="btn-inner" href="#отзывы" target="_self">
					<button class="btn hvr-fade font-text" id="uid12" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
					<span class="text">Отзывы</span></button></a></div></div></div></div></div></div></div>
					<div class="w-menu-grid__cell" style="padding-left: 3px; padding-right: 3px;">
					<div class="cont cell">
					<div class="node node10 widget widget-menu-button">
					<div class="wrapper1">
					<div class="wrapper2">
					<div class="macros-button">
					<div class="btn-out center xs-none">
					<a class="btn-inner" href="#контакты" target="_self">
					<button class="btn hvr-fade font-text" id="uid13" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
					<span class="text">Контакты</span></button></a></div></div></div></div></div></div></div></div></div></div></div></div></div>
					<div class="col" style="width: 5.85106%;">
					<div class="cont">
					<div class="node node11 widget widget-cart-button">
					<div class="wrapper1">
					<div class="wrapper2">
					<div class="macros-button">
					<div class="btn-out center xs-none">
					</div></div></div></div></div></div></div></div></div></div></div></div></div></div>
					<span class="plplink"></span> </div> </div> </div>
					<!-- ADAPTIVE -->
					<script class="adaptive">if(["md","lg"].indexOf(plp.screen)>=0)document.write("<!--")</script>
					<div class="node node19 section section-clear fixation-top md-hidden lg-hidden" id="шапка" data-opacity="0.9">
					<div class="wrapper1">
					<div class="wrapper2">
					<div class="container fullwidth">
					<div class="cont">
					<div class="node node20 widget widget-hamburger">
					<div class="wrapper1">
					<div class="wrapper2">
					<div class="metahtml">
					<div id="node20_meta" class="code">
					<div class="hamburger1">
  <div plp-hamburger-root="">
    <div class="hamburger1-header">
      <div plp-hamburger-toggle="" il-action="toggle" class="hamburger1-toggle is-collapsed">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="hamburger1-altmenu">
        <div class="cont">
		<div class="node node37 widget widget-text">
		<div class="wrapper1">
		<div class="wrapper2">
		<div class="">
		<div class="textable">
		<p style="line-height: 0.7;">
		<span style="color: rgb(238, 29, 36);">
		<span style="font-size: 20px;">
		<span style="font-family: &quot;TTNorms Medium&quot;;">MORE-IZ-IKRY</span></span></span></p>
		<p style="line-height: 0.7;">
		<span style="font-size: 12px;">
		<span style="font-family: &quot;TTNorms Medium&quot;;">ИКРА В УКРАИНЕ</span></span></p></div></div></div></div></div></div>
      </div>
    </div>
  </div>
  <div plp-hamburger-menu="" class="hamburger1-menu is-collapsed" style="display: none;">
    <div class="cont">
	<div class="node node21 widget widget-button">
	<div class="wrapper1">
	<div class="wrapper2">
	<div class="macros-button">
	<div class="btn-out left xs-none">
	<a class="btn-inner" href="#преимущества" target="_self">
	<button class="btn" id="uid181" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
	<span class="text">О Нас</span></button></a></div></div></div></div></div>
	<div class="node node23 widget widget-button">
	<div class="wrapper1">
	<div class="wrapper2">
	<div class="macros-button">
	<div class="btn-out left xs-none">
	<a class="btn-inner" href="#икра" target="_self">
	<button class="btn" id="uid182" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
	<span class="text">Икра</span></button></a></div></div></div></div></div>
	<div class="node node25 widget widget-button">
	<div class="wrapper1">
	<div class="wrapper2">
	<div class="macros-button">
	<div class="btn-out left xs-none">
	<a class="btn-inner" href="#какзаказать" target="_self">
	<button class="btn" id="uid183" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
	<span class="text">Как Заказать?</span></button></a></div></div></div></div></div>
	<div class="node node27 widget widget-button">
	<div class="wrapper1">
	<div class="wrapper2">
	<div class="macros-button">
	<div class="btn-out left xs-none">
	<a class="btn-inner" href="#доставка" target="_self">
	<button class="btn" id="uid184" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
	<span class="text">Доставка и Оплата</span></button></a></div></div></div></div></div>
	<div class="node node29 widget widget-button">
	<div class="wrapper1">
	<div class="wrapper2">
	<div class="macros-button">
	<div class="btn-out left xs-none">
	<a class="btn-inner" href="#отзывы" target="_self">
	<button class="btn" id="uid185" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
	<span class="text">Отзывы</span></button></a></div></div></div></div></div>
	<div class="node node31 widget widget-button">
	<div class="wrapper1">
	<div class="wrapper2">
	<div class="macros-button">
	<div class="btn-out left xs-none">
	<a class="btn-inner" href="#контакты" target="_self">
	<button class="btn" id="uid186" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
	<span class="text">Контакты</span></button></a></div></div></div></div></div>
	<div class="node node33 widget widget-cart-button">
	<div class="wrapper1">
	<div class="wrapper2">
	<div class="macros-button">
	<div class="btn-out left xs-none">
	</div></div></div></div></div>
	<div class="node node34 widget widget-text">
	<div class="wrapper1">
	<div class="wrapper2">
	<div class="">
	<div class="xs-force-center textable">
	<p style="text-align: center;">
	<span style="font-size: 14px;"></span></p></div></div></div></div></div>
	<div class="node node35 widget widget-button">
	<div class="wrapper1">
	<div class="wrapper2">
	<div class="macros-button">
	<div class="btn-out center xs-none">
	<div class="btn-inner">
	<button class="btn" id="uid188" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
	<span class="text">Заказать звонок</span></button></div></div></div>
	<div class="macros-modal">
	<div class="modal fade nocolors" data-modal="form" area-context="uid189">
	<div class="modal-dialog" style="width: 400px;">
	<div class="modal-content">
	<div class="modal-header">
	<button class="close nofonts">×</button>
	<h4 class="textable"><p style="text-align: center; line-height: 1.4;">
	<span style="font-size: 18px;">
	<span style="font-family: &quot;Open Sans&quot;;">
	<span style="color: inherit;">Наш менеджер перезвонит Вам в ближайшее время!&nbsp;</span></span></span></p></h4></div>
	<div class="modal-body">
	<div class="macros-form">
	<div class="outer">
	<div class="inner">
	<div class="vertical none size-default">
	<div class="body">
	<div class="cont"></div>
	<form id="valid" action="call.php" method="post">
	<div class="fields">
	<div class="field">
	<div class="input">
	<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
	<div class="field">
	<div class="input">
	<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div><br>
	<input type="hidden" name="hid" value="Заявка на обратный звонок">
	<div class="macros-button">
	<div class="btn-out full xs-none">
	<div class="btn-inner">
	<button class="btn font-text submit" id="uid190"><span class="text">ЗАКАЗАТЬ ЗВОНОК</span>
	<input type="submit"></button></div></div></div></form><div>
	<div class="privacy btn-modal" data-modal="agreement">Политика конфиденциальности</div></div>
	<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
  </div>
</div></div></div></div></div></div></div></div>
<span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<script class="adaptive">if(["xs","md"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node42 section section-clear xs-hidden md-hidden" id="главная" data-opacity="0.95">
<div class="separatorbottom"><div class="bigtriangle-bottom" style="height: 50px;"><svg version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M 0 100 H 100 V 0 H 100 L 50 100 L 0 0 H 0 Z" style="fill: white;"></path></svg></div></div>
<div class="wrapper1" data-lazy-bgimage="img/2556fddf1c0e15929420cceaeddad33b.jpg" data-lazy-bgimage_size="1170,650" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAICAYAAADwdn+XAAAAFklEQVQoU2NkoBAwUqifYdQAhkEQBgALLAAJYi2WEwAAAABJRU5ErkJggg==&quot;);">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node43 widget widget-text wow fadeInRightBig" data-wow-delay="0.5s">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 22px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">100% ГАРАНТИЯ</span></span></p>
<p style="text-align: center; line-height: 1;">
<span style="font-size: 20px;">
<span style="font-family: &quot;Open Sans&quot;;">Сертификат качества в каждом заказе!</span></span></p></div></div></div></div></div>
<div class="node node44 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h1 class="font-header spans xs-force-center textable">
<span style="line-height: 1.4; text-align: center;" class="p">
<span style="font-size: 64px;">
<strong><span style="font-family: &quot;TTNorms Bold&quot;;">
<span style="color: rgb(38, 166, 154);"><span style="color: rgb(238, 29, 36);">КРАСНАЯ&nbsp;</span>
<span style="color: rgb(255, 255, 255);">ИКРА</span></span></span></strong></span></span></h1></div></div></div></div>
<div class="node node45 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node46 widget widget-text wow fadeInLeftBig" data-wow-delay="0.3s">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-family: &quot;TTNorms Medium&quot;; font-size: 28px;">НАТУРАЛЬНАЯ ИКРА В УКРАИНЕ</span></p></div></div></div></div></div>
<div class="node node47 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node48 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 44.913%;">
<div class="cont">
<div class="node node49 widget widget-imagedtext wow bounceIn" data-wow-delay="0.9s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 60px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 60px; height: 60px;"><svg class="svgicon" id="svg15" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="none" stroke="rgb(246, 251, 255)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M30.064,52.637c-2.094,2.139-4.994,6.604-6.151,6.353c-1.506-0.327-1.749-1.496-1.882-3.524l0.028-0.517"></path><path fill="none" stroke="rgb(246, 251, 255)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M38.043,32.392l3.978,21.284c0.131,2.027-0.253,3.716-1.4,3.818c-0.504,0.044-1.947-1.133-3.56-2.453"></path><path fill="none" stroke="rgb(246, 251, 255)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M35.775,32.522l1.439,21.497c-0.104,2.037-0.68,3.68-1.827,3.665c-1.149-0.016-6.374-6.844-8.179-6.869 c-1.803-0.023-7.091,7.134-8.543,6.653c-1.452-0.479-1.553-1.67-1.452-3.706l3.627-21.281"></path><path fill="none" stroke="rgb(246, 251, 255)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M46.38,15.523l-2.557-2.557V9.353c0-2.476-2.006-4.483-4.483-4.483h-3.611l-2.558-2.557c-1.751-1.751-4.591-1.751-6.343,0 L24.272,4.87H20.66c-2.477,0-4.483,2.007-4.483,4.483v3.614l-2.557,2.557c-1.75,1.749-1.75,4.587,0,6.34l2.557,2.557v3.613 c0,2.477,2.007,4.483,4.483,4.483h3.613l2.555,2.556c1.752,1.751,4.592,1.751,6.343,0l2.556-2.556h3.613 c2.478,0,4.483-2.006,4.483-4.483V24.42l2.557-2.557C48.131,20.11,48.131,17.272,46.38,15.523z"></path><circle fill="none" stroke="rgb(246, 251, 255)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="30.001" cy="18.692" r="10.584"></circle></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-size: 20px;"><strong><strong>Натуральная Икра - Не Имитация&nbsp;</strong></strong></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node50 widget widget-imagedtext wow bounceIn" data-wow-delay="1.1s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 60px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 60px; height: 60px;"><svg class="svgicon" id="svg16" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M49.76,59.75H4.902c-2.086,0-3.782-1.697-3.782-3.783V4.032c0-2.085,1.696-3.782,3.782-3.782H49.76 c2.086,0,3.783,1.696,3.783,3.782V27c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V4.032 c0-1.258-1.024-2.282-2.283-2.282H4.902c-1.259,0-2.282,1.023-2.282,2.282v51.936c0,1.259,1.023,2.283,2.282,2.283H49.76 c1.259,0,2.283-1.024,2.283-2.283v-20.78c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v20.78 C53.543,58.053,51.846,59.75,49.76,59.75z"></path><path class="st0" d="M46.102,23.563H8.312c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h37.789 c0.414,0,0.75,0.336,0.75,0.75S46.516,23.563,46.102,23.563z"></path><path class="st0" d="M46.102,29.499H8.312c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h37.789 c0.414,0,0.75,0.336,0.75,0.75S46.516,29.499,46.102,29.499z"></path><path class="st0" d="M37,35.434H17.414c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75H37 c0.414,0,0.75,0.336,0.75,0.75S37.414,35.434,37,35.434z"></path><path class="st0" d="M48.251,17.833c-0.09,0-0.181-0.016-0.269-0.05c-0.044-0.017-4.515-1.725-9.557-3.198 c-0.32-0.093-0.54-0.387-0.54-0.72v-1.687c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v1.126 c2.643,0.787,5.09,1.62,6.784,2.22l-0.732-0.995c-0.125-0.169-0.173-0.383-0.132-0.59 c0.04-0.207,0.166-0.386,0.347-0.496l0.903-0.549c-0.972-0.363-2.387-0.874-4.064-1.426 c-0.394-0.129-0.607-0.553-0.479-0.947c0.13-0.393,0.55-0.606,0.947-0.478c3.258,1.072,5.549,1.995,5.572,2.004 c0.263,0.106,0.443,0.352,0.466,0.635c0.023,0.283-0.115,0.555-0.358,0.702L47.132,14.3l1.723,2.337 c0.198,0.268,0.195,0.634-0.007,0.899C48.703,17.727,48.48,17.833,48.251,17.833z"></path><path class="st0" d="M6.394,17.833c-0.229,0-0.452-0.105-0.597-0.295c-0.202-0.265-0.205-0.631-0.007-0.899L7.513,14.3 l-1.508-0.916c-0.245-0.148-0.384-0.423-0.358-0.708s0.21-0.53,0.477-0.633c0.023-0.009,2.38-0.917,5.587-1.973 c0.39-0.128,0.817,0.084,0.946,0.478c0.13,0.394-0.084,0.817-0.478,0.947c-1.658,0.546-3.085,1.051-4.071,1.411 l0.885,0.537c0.181,0.109,0.307,0.289,0.347,0.496c0.041,0.207-0.007,0.421-0.132,0.59l-0.732,0.994 c1.694-0.601,4.14-1.433,6.781-2.22v-1.139c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v1.699 c0,0.333-0.22,0.626-0.54,0.72c-5.042,1.474-9.509,3.181-9.554,3.198C6.574,17.816,6.483,17.833,6.394,17.833z"></path><path class="st0" d="M11.986,13.777c-0.165,0-0.327-0.055-0.46-0.158c-0.184-0.142-0.29-0.361-0.29-0.592v-4.34 c0-0.342,0.232-0.642,0.563-0.727c0.35-0.089,8.634-2.192,15.544-2.192c6.906,0,15.112,2.104,15.458,2.193 c0.331,0.085,0.562,0.384,0.562,0.726v4.34c0,0.232-0.107,0.451-0.29,0.593c-0.184,0.142-0.423,0.189-0.646,0.134 c-0.084-0.021-8.435-2.147-15.084-2.147c-6.654,0-15.088,2.126-15.173,2.148C12.11,13.77,12.048,13.777,11.986,13.777z M12.736,9.276v2.799c2.416-0.562,9.013-1.968,14.607-1.968c5.585,0,12.118,1.402,14.521,1.966V9.275 c-1.98-0.475-8.818-2.007-14.521-2.007C21.63,7.268,14.73,8.802,12.736,9.276z"></path><path class="st0" d="M44.399,51.221h-20.99c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h20.99 c0.414,0,0.75,0.336,0.75,0.75S44.813,51.221,44.399,51.221z"></path><path class="st0" d="M25.005,49.208c-0.307,0-0.613-0.078-0.886-0.226c-0.953-0.521-1.287-1.743-1.322-1.881 c-0.103-0.401,0.141-0.81,0.542-0.912c0.396-0.1,0.81,0.14,0.911,0.542c0.059,0.224,0.286,0.77,0.586,0.933 c0.088,0.048,0.187,0.057,0.299,0.022c0.483-0.154,0.608-0.557,0.758-1.202c0.125-0.551,0.297-1.311,1.117-1.397 c0.783-0.081,1.309,0.75,1.812,1.686c0.153,0.28,0.346,0.633,0.441,0.701c0.241,0.122,1.02-0.143,1.271-0.572 c0.219-0.363,0.487-0.575,0.804-0.639c0.596-0.124,1.191,0.312,1.714,0.693c0.21,0.153,0.391,0.287,0.568,0.386 c0.339,0.189,0.8,0.174,1.242,0.13c0.403-0.051,0.78,0.259,0.821,0.671s-0.259,0.78-0.671,0.821 c-0.653,0.066-1.42,0.081-2.124-0.313c-0.228-0.127-0.459-0.293-0.687-0.458c-0.136-0.099-0.336-0.245-0.498-0.346 c-0.729,0.969-2.188,1.432-3.118,0.964c-0.493-0.244-0.753-0.721-1.082-1.324c-0.082-0.151-0.153-0.279-0.217-0.388 c-0.175,0.678-0.538,1.647-1.698,2.017C25.396,49.178,25.2,49.208,25.005,49.208z"></path><path class="st0" d="M12.395,52.754c-0.133,0-0.266-0.035-0.384-0.106l-1.216-0.724H9.379 c-0.269,0-0.517-0.144-0.65-0.376l-0.749-1.302l-1.292-0.77c-0.23-0.137-0.369-0.386-0.366-0.654l0.018-1.415 l-0.706-1.225c-0.134-0.232-0.134-0.518,0-0.75l0.752-1.303l0.021-1.504c0.004-0.268,0.15-0.514,0.384-0.645l1.236-0.691 l0.703-1.222c0.134-0.232,0.382-0.376,0.65-0.376h1.507l1.313-0.735c0.235-0.13,0.521-0.127,0.751,0.011l1.213,0.724 h1.415c0.269,0,0.517,0.144,0.65,0.376l0.748,1.302l1.294,0.77c0.23,0.137,0.37,0.387,0.366,0.655l-0.021,1.413 l0.708,1.224c0.134,0.232,0.134,0.518,0,0.75l-0.751,1.302l-0.023,1.507c-0.004,0.267-0.15,0.512-0.383,0.643 l-1.232,0.691l-0.707,1.224c-0.134,0.232-0.382,0.375-0.649,0.375h-1.507l-1.311,0.734 C12.647,52.722,12.521,52.754,12.395,52.754z M9.812,50.424h1.189c0.135,0,0.268,0.037,0.384,0.106l1.021,0.608 l1.104-0.618c0.111-0.063,0.238-0.096,0.366-0.096h1.27l0.594-1.027c0.067-0.117,0.165-0.213,0.282-0.279l1.035-0.58 l0.02-1.27c0.002-0.127,0.036-0.252,0.101-0.363l0.632-1.095l-0.595-1.028c-0.067-0.117-0.103-0.251-0.101-0.386 l0.018-1.187l-1.09-0.648c-0.11-0.066-0.202-0.159-0.267-0.271l-0.63-1.096h-1.188c-0.136,0-0.269-0.037-0.385-0.106 l-1.019-0.608l-1.105,0.619c-0.112,0.062-0.238,0.095-0.366,0.095H9.812l-0.59,1.025 c-0.068,0.118-0.166,0.214-0.284,0.281L7.899,43.08l-0.018,1.267c-0.002,0.128-0.036,0.254-0.101,0.365l-0.633,1.097 l0.593,1.028c0.067,0.117,0.103,0.25,0.101,0.384l-0.015,1.188l1.089,0.648c0.11,0.066,0.202,0.159,0.267,0.271 L9.812,50.424z"></path><path class="st0" d="M36.222,48.768c-0.537,0-1.015-0.448-1.065-0.999c-0.009-0.095,0.001-0.19,0.028-0.281l2.775-9.37 c0.094-0.327,0.375-0.621,0.548-0.776c0.007-0.007,0.015-0.014,0.022-0.021c0.069-0.061,0.115-0.095,0.117-0.097l0.006,0.009 c0.399-0.253,1.652-0.867,6.265-3.109c0.374-0.181,0.822-0.025,1.003,0.347c0.181,0.373,0.025,0.821-0.347,1.002 c-2.176,1.057-5.712,2.786-6.102,3.003c-0.005,0.003-0.01,0.006-0.015,0.01c0.001,0,0.002-0.001,0.002-0.001 c0.01,0-0.041,0.062-0.077,0.109l-2.502,8.445l8.442-2.503c0.041-0.031,0.095-0.078,0.132-0.113 c0.278-0.547,1.883-4.017,2.873-6.172c0.173-0.377,0.622-0.539,0.995-0.369c0.376,0.173,0.541,0.618,0.368,0.995 c-2.217,4.824-2.778,6.039-3.017,6.412l0.008,0.005c-0.004,0.006-0.407,0.529-0.88,0.664v0l-9.368,2.777 C36.365,48.758,36.294,48.768,36.222,48.768z"></path><path class="st0" d="M49.01,39.315c-0.192,0-0.384-0.073-0.53-0.22l-1.821-1.822c-0.146-0.146-0.22-0.338-0.22-0.53 c0-0.192,0.073-0.384,0.22-0.53c0.294-0.294,0.769-0.292,1.061,0l1.821,1.822c0.146,0.146,0.22,0.338,0.22,0.53 c0,0.192-0.073,0.384-0.22,0.53C49.394,39.242,49.201,39.315,49.01,39.315z"></path><path class="st0" d="M49.23,39.405c-0.271,0-0.541-0.102-0.748-0.306l-3.641-3.641c-0.201-0.201-0.312-0.469-0.312-0.753 c0-0.284,0.111-0.551,0.312-0.751L57.96,20.835c0.293-0.293,0.768-0.293,1.061,0s0.293,0.768,0,1.061l-12.81,12.811l3.02,3.02 l8.369-8.369c0.293-0.293,0.768-0.293,1.061,0s0.293,0.768,0,1.061l-8.679,8.678C49.774,39.302,49.502,39.405,49.23,39.405z"></path><path class="st0" d="M36,48.688c-0.19,0-0.382-0.072-0.528-0.217c-0.294-0.292-0.296-0.767-0.004-1.061l7.188-7.25 c0.29-0.294,0.765-0.297,1.061-0.005c0.294,0.292,0.296,0.767,0.004,1.061l-7.188,7.25C36.386,48.613,36.193,48.688,36,48.688z "></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong style="font-size: 20px; color: inherit; background-color: initial; text-align: inherit;"><strong>Вся продукция имеет Сертификаты</strong></strong></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node51 widget widget-imagedtext wow bounceIn" data-wow-delay="1.3s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 60px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 60px; height: 60px;"><svg class="svgicon" id="svg17" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><line class="st0" x1="58.099" y1="53.903" x2="31.03" y2="27.827"></line><path class="st0" d="M27.02,31.735l26.262,27.264c0.014-0.012,0.027-0.023,0.041-0.035"></path><path class="st0" d="M31.274,3.7c0.881,0.449-1.084,12.561-0.76,13.346c0.324,0.789,10.574,7.375,10.565,8.193 c-0.01,0.818-12.227,2.723-12.929,3.404c-0.216,0.207-0.635,1.459-1.14,3.098c-1.144,3.713-2.73,9.416-3.387,9.48 c-0.947,0.09-6.612-10.967-7.232-11.244c-0.619-0.277-12.982,0.443-13.36-0.422c-0.379-0.861,8.32-9.48,8.459-10.35 C11.628,18.337,7.152,6.958,7.758,6.37c0.607-0.588,11.758,4.879,12.46,4.846C20.92,11.181,30.392,3.251,31.274,3.7z"></path><path class="st0" d="M26.098,12.704c0.428,0.219-0.525,6.1-0.368,6.482c0.157,0.381,5.134,3.578,5.129,3.977 c-0.003,0.396-5.935,1.322-6.276,1.652c-0.342,0.328-1.738,6.063-2.197,6.107c-0.46,0.043-3.21-5.324-3.512-5.459 s-6.304,0.215-6.487-0.205c-0.184-0.418,4.04-4.602,4.107-5.025c0.066-0.422-2.106-5.945-1.813-6.23 c0.294-0.287,5.709,2.367,6.05,2.352C21.071,16.339,25.67,12.487,26.098,12.704z"></path><line class="st0" x1="34.41" y1="14.356" x2="39.702" y2="12.341"></line><line class="st0" x1="19.29" y1="5.788" x2="18.786" y2="1.001"></line><line class="st0" x1="6.689" y1="18.64" x2="1.901" y2="17.128"></line><line class="st0" x1="14.25" y1="33.257" x2="12.485" y2="38.298"></line></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;"><p><span style="font-size: 20px;"><strong><strong>Без консервантов - Только Икра и соль</strong></strong></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node52 widget widget-imagedtext wow bounceIn" data-wow-delay="1.5s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 60px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 60px; height: 60px;"><svg class="svgicon" id="svg18" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M13.594,56.265c17.843,3.329,27.975,2.875,32.66,2.42c4.691-0.452,6.201-3.626,6.201-5.29 c0-1.966,0.604-3.027,1.361-3.479c3.327-2.722,2.267-3.628,1.361-5.593c-0.908-1.969-0.604-2.572,0.906-3.934 c1.786-1.515,0.757-3.63,0.151-4.383c-0.604-0.756-1.058-1.061-1.208-1.815c1.208-0.605,2.417-3.024,2.417-3.782 c-0.149-5.14-4.988-6.199-4.988-6.199s0,0-14.516,0c-1.059-0.151-0.302-3.025,0.303-4.082c2.569-4.536,4.082-8.618,4.082-10.738 c-0.906-10.435-8.013-8.616-8.315-7.559c-0.151,10.584-2.572,13.003-5.293,14.82c-2.723,1.812-3.025,3.931-6.199,11.188 c-3.176,7.256-8.893,4.839-8.893,4.839"></path><path class="st0" d="M12.683,31.922H3.468c-0.502,0-0.911,0.407-0.911,0.913v24.03c0,0.502,0.409,0.914,0.911,0.914h9.215 c0.503,0,0.912-0.412,0.912-0.914v-24.03C13.594,32.329,13.186,31.922,12.683,31.922z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-size: 20px;"><strong><strong>Работаем с 2010 года</strong></strong></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node53 widget widget-imagedtext wow bounceIn" data-wow-delay="1.7s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 60px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 60px; height: 60px;"><svg class="svgicon" id="svg19" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M49.13,47.148c0-0.238,0.073-0.49,0.216-0.755c0.144-0.265,0.357-0.516,0.635-0.755 c0.28-0.24,0.625-0.431,1.039-0.576c0.414-0.146,0.875-0.218,1.387-0.218c0.446,0,0.854,0.061,1.222,0.183 c0.367,0.121,0.688,0.299,0.958,0.529c0.272,0.229,0.475,0.495,0.613,0.798c0.139,0.306,0.208,0.631,0.208,0.981 c0,0.46-0.101,0.853-0.3,1.183c-0.2,0.328-0.199,1.377,0.048,1.626c0.246,0.247,0.432,0.521,0.556,0.825 c0.124,0.3,0.186,0.624,0.186,0.976c0,0.418-0.083,0.822-0.251,1.214c-0.168,0.391-0.416,0.737-0.743,1.043 c-0.326,0.309-0.713,0.548-1.163,0.719c-0.448,0.172-0.944,0.26-1.487,0.26c-0.552,0-1.047-0.101-1.484-0.297 c-0.436-0.199-0.797-0.444-1.079-0.742c-0.284-0.296-0.497-0.604-0.643-0.921c-0.145-0.318-0.216-0.579-0.216-0.786 M50.283,47.888 M51.089,46.592"></path><path class="st0" d="M7.79,44.083c0-0.314,0.071-0.646,0.214-0.992c0.142-0.345,0.354-0.657,0.639-0.937 c0.281-0.281,0.641-0.508,1.075-0.682c0.436-0.172,0.944-0.257,1.529-0.257c0.704,0,1.307,0.104,1.801,0.33 c0.937,0.429,1.917,2.584,0.741,3.891c-1.176,1.306-6.466,5.955-6.466,5.955h7.446"></path><path class="st0" d="M58.336,41.126H43.516V23.828c0-0.919-0.746-1.664-1.665-1.664H20.945c-0.918,0-1.665,0.745-1.665,1.664 v11.675H3.664C2.744,35.503,2,36.248,2,37.166v19.281c0,0.919,0.744,1.664,1.664,1.664h54.673c0.918,0,1.664-0.745,1.664-1.664 V42.789C60,41.871,59.255,41.126,58.336,41.126z"></path><path class="st0" d="M37.074,10.244c0.712-0.107,1.55-0.63,2.981-2.102c2.542-2.614,2.186-4.947,2.186-4.947 c0-0.722-0.433-1.307-0.968-1.307l-4.498,0.975"></path><path class="st0" d="M25.073,2.844l-4.412-0.955c-0.535,0-0.968,0.585-0.968,1.307c0,0-0.357,2.333,2.186,4.947 c1.406,1.445,2.238,1.976,2.942,2.095"></path><path class="st0" d="M35.209,22.185c0-0.027,0-0.057,0-0.077c0-1.067-0.901-1.824-2.232-2.192l0.501-2.502 c0.632-0.286,1.023-0.68,1.023-1.114c0-0.327-0.223-0.631-0.606-0.884c1.912-1.084,3.208-3.188,3.208-5.607 c0-0.089-0.004-0.177-0.008-0.264C37.1,9.5,37.104,9.459,37.104,9.416V3.845c0-1.044-0.848-1.893-1.895-1.893h-8.511 c-1.045,0-1.892,0.849-1.892,1.893v5.571c0,0.043,0.004,0.084,0.007,0.128c-0.003,0.087-0.007,0.175-0.007,0.264 c0,2.438,1.317,4.556,3.251,5.631c-0.359,0.248-0.57,0.543-0.57,0.86c0,0.435,0.391,0.828,1.025,1.114l0.496,2.483 c-1.37,0.359-2.309,1.123-2.309,2.211c0,0.021,0,0.05,0,0.077"></path><path class="st0" d="M33.951,7.518c0,0.157-0.125,0.284-0.282,0.284h-5.46c-0.156,0-0.285-0.127-0.285-0.284V4.922 c0-0.156,0.128-0.283,0.285-0.283h5.46c0.156,0,0.282,0.127,0.282,0.283V7.518z"></path><line class="st0" x1="31.749" y1="26.932" x2="31.749" y2="35.64"></line><line class="st0" x1="28.962" y1="28.673" x2="31.749" y2="26.932"></line><line class="st0" x1="55" y1="49.659" x2="52.78" y2="49.659"></line></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-size: 20px;"><strong><strong>Самая Выгодная Цена в Украине</strong></strong></span></p></div>
<div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 17.2174%;">
<div class="cont"></div></div>
<div class="col" style="width: 37.8696%;">
<div class="cont">
<div class="node node54 widget widget-element wow zoomInDown" data-wow-delay="0.3s">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node55 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;"><span style="color: rgb(255, 241, 0);"><span style="font-size: 32px;"><span style="font-family: &quot;TTNorms Bold&quot;;">АКЦИЯ 1 + 1 = 3</span></span></span></p></div></div></div></div></div>
<div class="node node56 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center; line-height: 1.3;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="font-size: 20px;">При покупке 2х баночек по 0.5</span></span></p>
<p style="text-align: center; line-height: 1.3;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="font-size: 20px;">&nbsp;1 баночка 0.5 в Подарок!</span></span></p></div></div></div></div></div>
<div class="node node57 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center; line-height: 1;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="font-size: 26px;">+</span></span></p></div></div></div></div></div>
<div class="node node58 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center; line-height: 1.3;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="font-size: 18px;">Быстрая Доставка по всей Украине</span></span></p></div></div></div></div></div>
<div class="node node59 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="color: rgb(183, 183, 183);">
<span style="font-size: 14px;">До конца Акции осталось:</span></span></p></div></div></div></div></div>
<div class="node node60 widget widget-countdown">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node60_meta" class="code"><div plp-countdown-root="" data-red-libs="countdown" class="countdown4 small" data-vals="{&quot;type&quot;:&quot;month&quot;,&quot;full_date&quot;:{&quot;year&quot;:2019,&quot;month&quot;:7,&quot;day&quot;:15},&quot;full_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;month_day&quot;:15,&quot;month_time&quot;:{&quot;hour&quot;:23,&quot;minute&quot;:55},&quot;week_day&quot;:5,&quot;week_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;day_time&quot;:{&quot;hour&quot;:18,&quot;minute&quot;:0},&quot;fake_days&quot;:2,&quot;fake_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;timezone&quot;:null,&quot;action&quot;:{&quot;type&quot;:&quot;none&quot;,&quot;url&quot;:&quot;&quot;,&quot;element_id&quot;:&quot;&quot;,&quot;message&quot;:{&quot;type&quot;:&quot;success&quot;,&quot;title&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;},&quot;modal&quot;:&quot;action_show_popup&quot;}}">
  <div class="line">
    <div class="group days">
      <div class="digits">{dnn}</div>
      <div class="label">{dl}</div>
    </div>
    <div class="group hours">
      <div class="digits">{hnn}</div>
      <div class="label">{hl}</div>
    </div>
  </div>
  <div class="line">
    <div class="group minutes">
      <div class="digits">{mnn}</div>
      <div class="label">{ml}</div>
    </div>
    <div class="group seconds">
      <div class="digits">{snn}</div>
      <div class="label">{sl}</div>
    </div>
  </div>
</div></div></div>
<div class="countdown-modals">
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="action_show_popup" area-context="uid20">
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><p>Заголовок окна (Действие по окончанию счетчика)</p></h4></div>
<div class="modal-body">
<div class="cont">
<div class="node node61 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable"><p>Редактируемый текст</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node62 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid21" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">ЗАКАЗАТЬ СЕЙЧАС</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid22">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><h4><p style="text-align: center; line-height: 1.3;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам для уточнения вида Икры который Вы хотите получить по Акции!</span></span></span></p></h4></h4></div>
<div class="modal-body"><div class="macros-form"><div class="outer"><div class="inner"><div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid2" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div><br>
<input type="hidden" name="hid" value="Заявка на обратный звонок">
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid23"><span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="agreement">Политика конфиденциальности</div></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node67 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node68 widget widget-button wow bounceIn" data-wow-delay="0.5s">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#икра" target="_self">
<button class="btn" id="uid24" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">СМОТРЕТЬ АССОРТИМЕНТ</span></button></a></div></div></div></div></div></div></div>
<span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<script class="adaptive">if(["md","lg"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node74 section section-clear md-hidden lg-hidden" id="главная" data-opacity="0.95">
<div class="separatorbottom">
<div class="bigtriangle-bottom" style="height: 50px;"><svg version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M 0 100 H 100 V 0 H 100 L 50 100 L 0 0 H 0 Z" style="fill: white;"></path></svg></div></div>
<div class="wrapper1" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAICAYAAADwdn+XAAAAFklEQVQoU2NkoBAwUqifYdQAhkEQBgALLAAJYi2WEwAAAABJRU5ErkJggg==&quot;);" data-lazy-bgimage="img/2556fddf1c0e15929420cceaeddad33b.jpg" data-lazy-bgimage_size="1170,650">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node75 widget widget-text wow fadeInRightBig" data-wow-delay="0.5s">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 18px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">100% ГАРАНТИЯ</span></span></p>
<p style="text-align: center; line-height: 1;">
<span style="font-size: 14px;">
<span style="font-family: &quot;Open Sans&quot;;">Сертификат качества в каждом заказе!</span></span></p></div></div></div></div></div>
<div class="node node76 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h1 class="font-header spans xs-force-center textable">
<span style="line-height: 1.4; text-align: center;" class="p">
<span style="font-size: 32px;">
<strong><span style="font-family: &quot;TTNorms Bold&quot;;">
<span style="color: rgb(38, 166, 154);">
<span style="color: rgb(238, 29, 36);">КРАСНАЯ</span></span></span></strong></span></span>
<span style="line-height: 1.4; text-align: center;" class="p">
<span style="font-size: 32px;">
<strong><span style="font-family: &quot;TTNorms Bold&quot;;">
<span style="color: rgb(38, 166, 154);">
<span style="color: rgb(255, 255, 255);">ИКРА</span></span></span></strong></span></span></h1></div></div></div></div>
<div class="node node77 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node78 widget widget-text wow fadeInLeftBig" data-wow-delay="0.3s">
<div class="wrapper1"><div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 20px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">НАТУРАЛЬНАЯ ИКРА</span></span></p>
<p style="text-align: center;">
<span style="font-size: 20px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">В УКРАИНЕ</span></span></p></div></div></div></div></div>
<div class="node node79 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" style="text-align: center;">
<img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAKCAYAAAC9vt6cAAAAGElEQVQoU2NkoBAwUqifYdQAhtEwACYiABCBAAscfVqOAAAAAElFTkSuQmCC" style="width: 168.81px;" data-lazy-image="img/0c052ea1be6093f3d3c405ed363adfe8.png" data-lazy-image_size="331,216" data-lazy-image_detect="css-width"></div>
<noscript><img src="img/x0c052ea1be6093f3d3c405ed363adfe8.png.pagespeed.ic.zWZebUwHPB.png" alt=""></noscript></div></div></div>
<div class="node node80 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node81 widget widget-element wow zoomInDown" data-wow-delay="0.3s">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node82 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 22px;">
<span style="color: rgb(255, 241, 0);">
<span style="font-family: &quot;TTNorms Bold&quot;;">АКЦИЯ 1 + 1 = 3</span></span></span></p></div></div></div></div></div>
<div class="node node83 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 16px;">
<span style="font-family: &quot;Open Sans&quot;;">При покупке 2х баночек по 0.5</span></span></p>
<p style="text-align: center; line-height: 1;">
<span style="font-size: 16px;">
<span style="font-family: &quot;Open Sans&quot;;">&nbsp;1 баночка 0.5 в Подарок!</span></span></p></div></div></div></div></div>
<div class="node node84 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 20px;">
<span style="font-family: &quot;Open Sans&quot;;">+</span></span></p></div></div></div></div></div>
<div class="node node85 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center; line-height: 1.3;">
<span style="font-size: 14px;">
<span style="font-family: &quot;Open Sans&quot;;">Быстрая Доставка по всей Украине</span></span></p></div></div></div></div></div>
<div class="node node86 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="color: rgb(183, 183, 183);">
<span style="font-size: 14px;">До конца Акции осталось:</span></span></p></div></div></div></div></div>
<div class="node node87 widget widget-countdown">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node87_meta" class="code">
<div plp-countdown-root="" data-red-libs="countdown" class="countdown4 small" data-vals="{&quot;type&quot;:&quot;month&quot;,&quot;full_date&quot;:{&quot;year&quot;:2019,&quot;month&quot;:7,&quot;day&quot;:15},&quot;full_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;month_day&quot;:15,&quot;month_time&quot;:{&quot;hour&quot;:23,&quot;minute&quot;:55},&quot;week_day&quot;:5,&quot;week_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;day_time&quot;:{&quot;hour&quot;:18,&quot;minute&quot;:0},&quot;fake_days&quot;:2,&quot;fake_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;timezone&quot;:null,&quot;action&quot;:{&quot;type&quot;:&quot;none&quot;,&quot;url&quot;:&quot;&quot;,&quot;element_id&quot;:&quot;&quot;,&quot;message&quot;:{&quot;type&quot;:&quot;success&quot;,&quot;title&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;},&quot;modal&quot;:&quot;action_show_popup&quot;}}">
  <div class="line">
    <div class="group days">
      <div class="digits">{dnn}</div>
      <div class="label">{dl}</div>
    </div>
    <div class="group hours">
      <div class="digits">{hnn}</div>
      <div class="label">{hl}</div>
    </div>
  </div>
  <div class="line">
    <div class="group minutes">
      <div class="digits">{mnn}</div>
      <div class="label">{ml}</div>
    </div>
    <div class="group seconds">
      <div class="digits">{snn}</div>
      <div class="label">{sl}</div>
    </div>
  </div>
</div></div></div>
<div class="countdown-modals">
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="action_show_popup" area-context="uid191">
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><p>Заголовок окна (Действие по окончанию счетчика)</p></h4></div>
<div class="modal-body">
<div class="cont">
<div class="node node88 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable"><p>Редактируемый текст</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node89 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid192" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">ЗАКАЗАТЬ СЕЙЧАС</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid193">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><h4>
<p style="text-align: center; line-height: 1.3;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам для уточнения вида Икры который Вы хотите получить по Акции!</span></span></span></p></h4></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid3" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div><br>
<input type="hidden" name="hid" value="Заявка на обратный звонок">
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid194">
<span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="agreement">Политика конфиденциальности</div></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node91 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node92 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 44.913%;">
<div class="cont">
<div class="node node93 widget widget-imagedtext wow bounceIn" data-wow-delay="0.5s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 60px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 60px; height: 60px;"><svg class="svgicon" id="svg195" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="none" stroke="rgb(243, 252, 251)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M30.064,52.637c-2.094,2.139-4.994,6.604-6.151,6.353c-1.506-0.327-1.749-1.496-1.882-3.524l0.028-0.517"></path><path fill="none" stroke="rgb(243, 252, 251)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M38.043,32.392l3.978,21.284c0.131,2.027-0.253,3.716-1.4,3.818c-0.504,0.044-1.947-1.133-3.56-2.453"></path><path fill="none" stroke="rgb(243, 252, 251)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M35.775,32.522l1.439,21.497c-0.104,2.037-0.68,3.68-1.827,3.665c-1.149-0.016-6.374-6.844-8.179-6.869 c-1.803-0.023-7.091,7.134-8.543,6.653c-1.452-0.479-1.553-1.67-1.452-3.706l3.627-21.281"></path><path fill="none" stroke="rgb(243, 252, 251)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M46.38,15.523l-2.557-2.557V9.353c0-2.476-2.006-4.483-4.483-4.483h-3.611l-2.558-2.557c-1.751-1.751-4.591-1.751-6.343,0 L24.272,4.87H20.66c-2.477,0-4.483,2.007-4.483,4.483v3.614l-2.557,2.557c-1.75,1.749-1.75,4.587,0,6.34l2.557,2.557v3.613 c0,2.477,2.007,4.483,4.483,4.483h3.613l2.555,2.556c1.752,1.751,4.592,1.751,6.343,0l2.556-2.556h3.613 c2.478,0,4.483-2.006,4.483-4.483V24.42l2.557-2.557C48.131,20.11,48.131,17.272,46.38,15.523z"></path><circle fill="none" stroke="rgb(243, 252, 251)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="30.001" cy="18.692" r="10.584"></circle></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p style="line-height: 1.3;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="font-size: 14px;"><strong><strong>Натуральная Икра - Не Имитация</strong></strong></span></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node94 widget widget-imagedtext wow bounceIn" data-wow-delay="0.7s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 60px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 60px; height: 60px;"><svg class="svgicon" id="svg196" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M49.76,59.75H4.902c-2.086,0-3.782-1.697-3.782-3.783V4.032c0-2.085,1.696-3.782,3.782-3.782H49.76 c2.086,0,3.783,1.696,3.783,3.782V27c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V4.032 c0-1.258-1.024-2.282-2.283-2.282H4.902c-1.259,0-2.282,1.023-2.282,2.282v51.936c0,1.259,1.023,2.283,2.282,2.283H49.76 c1.259,0,2.283-1.024,2.283-2.283v-20.78c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v20.78 C53.543,58.053,51.846,59.75,49.76,59.75z"></path><path class="st0" d="M46.102,23.563H8.312c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h37.789 c0.414,0,0.75,0.336,0.75,0.75S46.516,23.563,46.102,23.563z"></path><path class="st0" d="M46.102,29.499H8.312c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h37.789 c0.414,0,0.75,0.336,0.75,0.75S46.516,29.499,46.102,29.499z"></path><path class="st0" d="M37,35.434H17.414c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75H37 c0.414,0,0.75,0.336,0.75,0.75S37.414,35.434,37,35.434z"></path><path class="st0" d="M48.251,17.833c-0.09,0-0.181-0.016-0.269-0.05c-0.044-0.017-4.515-1.725-9.557-3.198 c-0.32-0.093-0.54-0.387-0.54-0.72v-1.687c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v1.126 c2.643,0.787,5.09,1.62,6.784,2.22l-0.732-0.995c-0.125-0.169-0.173-0.383-0.132-0.59 c0.04-0.207,0.166-0.386,0.347-0.496l0.903-0.549c-0.972-0.363-2.387-0.874-4.064-1.426 c-0.394-0.129-0.607-0.553-0.479-0.947c0.13-0.393,0.55-0.606,0.947-0.478c3.258,1.072,5.549,1.995,5.572,2.004 c0.263,0.106,0.443,0.352,0.466,0.635c0.023,0.283-0.115,0.555-0.358,0.702L47.132,14.3l1.723,2.337 c0.198,0.268,0.195,0.634-0.007,0.899C48.703,17.727,48.48,17.833,48.251,17.833z"></path><path class="st0" d="M6.394,17.833c-0.229,0-0.452-0.105-0.597-0.295c-0.202-0.265-0.205-0.631-0.007-0.899L7.513,14.3 l-1.508-0.916c-0.245-0.148-0.384-0.423-0.358-0.708s0.21-0.53,0.477-0.633c0.023-0.009,2.38-0.917,5.587-1.973 c0.39-0.128,0.817,0.084,0.946,0.478c0.13,0.394-0.084,0.817-0.478,0.947c-1.658,0.546-3.085,1.051-4.071,1.411 l0.885,0.537c0.181,0.109,0.307,0.289,0.347,0.496c0.041,0.207-0.007,0.421-0.132,0.59l-0.732,0.994 c1.694-0.601,4.14-1.433,6.781-2.22v-1.139c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v1.699 c0,0.333-0.22,0.626-0.54,0.72c-5.042,1.474-9.509,3.181-9.554,3.198C6.574,17.816,6.483,17.833,6.394,17.833z"></path><path class="st0" d="M11.986,13.777c-0.165,0-0.327-0.055-0.46-0.158c-0.184-0.142-0.29-0.361-0.29-0.592v-4.34 c0-0.342,0.232-0.642,0.563-0.727c0.35-0.089,8.634-2.192,15.544-2.192c6.906,0,15.112,2.104,15.458,2.193 c0.331,0.085,0.562,0.384,0.562,0.726v4.34c0,0.232-0.107,0.451-0.29,0.593c-0.184,0.142-0.423,0.189-0.646,0.134 c-0.084-0.021-8.435-2.147-15.084-2.147c-6.654,0-15.088,2.126-15.173,2.148C12.11,13.77,12.048,13.777,11.986,13.777z M12.736,9.276v2.799c2.416-0.562,9.013-1.968,14.607-1.968c5.585,0,12.118,1.402,14.521,1.966V9.275 c-1.98-0.475-8.818-2.007-14.521-2.007C21.63,7.268,14.73,8.802,12.736,9.276z"></path><path class="st0" d="M44.399,51.221h-20.99c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h20.99 c0.414,0,0.75,0.336,0.75,0.75S44.813,51.221,44.399,51.221z"></path><path class="st0" d="M25.005,49.208c-0.307,0-0.613-0.078-0.886-0.226c-0.953-0.521-1.287-1.743-1.322-1.881 c-0.103-0.401,0.141-0.81,0.542-0.912c0.396-0.1,0.81,0.14,0.911,0.542c0.059,0.224,0.286,0.77,0.586,0.933 c0.088,0.048,0.187,0.057,0.299,0.022c0.483-0.154,0.608-0.557,0.758-1.202c0.125-0.551,0.297-1.311,1.117-1.397 c0.783-0.081,1.309,0.75,1.812,1.686c0.153,0.28,0.346,0.633,0.441,0.701c0.241,0.122,1.02-0.143,1.271-0.572 c0.219-0.363,0.487-0.575,0.804-0.639c0.596-0.124,1.191,0.312,1.714,0.693c0.21,0.153,0.391,0.287,0.568,0.386 c0.339,0.189,0.8,0.174,1.242,0.13c0.403-0.051,0.78,0.259,0.821,0.671s-0.259,0.78-0.671,0.821 c-0.653,0.066-1.42,0.081-2.124-0.313c-0.228-0.127-0.459-0.293-0.687-0.458c-0.136-0.099-0.336-0.245-0.498-0.346 c-0.729,0.969-2.188,1.432-3.118,0.964c-0.493-0.244-0.753-0.721-1.082-1.324c-0.082-0.151-0.153-0.279-0.217-0.388 c-0.175,0.678-0.538,1.647-1.698,2.017C25.396,49.178,25.2,49.208,25.005,49.208z"></path><path class="st0" d="M12.395,52.754c-0.133,0-0.266-0.035-0.384-0.106l-1.216-0.724H9.379 c-0.269,0-0.517-0.144-0.65-0.376l-0.749-1.302l-1.292-0.77c-0.23-0.137-0.369-0.386-0.366-0.654l0.018-1.415 l-0.706-1.225c-0.134-0.232-0.134-0.518,0-0.75l0.752-1.303l0.021-1.504c0.004-0.268,0.15-0.514,0.384-0.645l1.236-0.691 l0.703-1.222c0.134-0.232,0.382-0.376,0.65-0.376h1.507l1.313-0.735c0.235-0.13,0.521-0.127,0.751,0.011l1.213,0.724 h1.415c0.269,0,0.517,0.144,0.65,0.376l0.748,1.302l1.294,0.77c0.23,0.137,0.37,0.387,0.366,0.655l-0.021,1.413 l0.708,1.224c0.134,0.232,0.134,0.518,0,0.75l-0.751,1.302l-0.023,1.507c-0.004,0.267-0.15,0.512-0.383,0.643 l-1.232,0.691l-0.707,1.224c-0.134,0.232-0.382,0.375-0.649,0.375h-1.507l-1.311,0.734 C12.647,52.722,12.521,52.754,12.395,52.754z M9.812,50.424h1.189c0.135,0,0.268,0.037,0.384,0.106l1.021,0.608 l1.104-0.618c0.111-0.063,0.238-0.096,0.366-0.096h1.27l0.594-1.027c0.067-0.117,0.165-0.213,0.282-0.279l1.035-0.58 l0.02-1.27c0.002-0.127,0.036-0.252,0.101-0.363l0.632-1.095l-0.595-1.028c-0.067-0.117-0.103-0.251-0.101-0.386 l0.018-1.187l-1.09-0.648c-0.11-0.066-0.202-0.159-0.267-0.271l-0.63-1.096h-1.188c-0.136,0-0.269-0.037-0.385-0.106 l-1.019-0.608l-1.105,0.619c-0.112,0.062-0.238,0.095-0.366,0.095H9.812l-0.59,1.025 c-0.068,0.118-0.166,0.214-0.284,0.281L7.899,43.08l-0.018,1.267c-0.002,0.128-0.036,0.254-0.101,0.365l-0.633,1.097 l0.593,1.028c0.067,0.117,0.103,0.25,0.101,0.384l-0.015,1.188l1.089,0.648c0.11,0.066,0.202,0.159,0.267,0.271 L9.812,50.424z"></path><path class="st0" d="M36.222,48.768c-0.537,0-1.015-0.448-1.065-0.999c-0.009-0.095,0.001-0.19,0.028-0.281l2.775-9.37 c0.094-0.327,0.375-0.621,0.548-0.776c0.007-0.007,0.015-0.014,0.022-0.021c0.069-0.061,0.115-0.095,0.117-0.097l0.006,0.009 c0.399-0.253,1.652-0.867,6.265-3.109c0.374-0.181,0.822-0.025,1.003,0.347c0.181,0.373,0.025,0.821-0.347,1.002 c-2.176,1.057-5.712,2.786-6.102,3.003c-0.005,0.003-0.01,0.006-0.015,0.01c0.001,0,0.002-0.001,0.002-0.001 c0.01,0-0.041,0.062-0.077,0.109l-2.502,8.445l8.442-2.503c0.041-0.031,0.095-0.078,0.132-0.113 c0.278-0.547,1.883-4.017,2.873-6.172c0.173-0.377,0.622-0.539,0.995-0.369c0.376,0.173,0.541,0.618,0.368,0.995 c-2.217,4.824-2.778,6.039-3.017,6.412l0.008,0.005c-0.004,0.006-0.407,0.529-0.88,0.664v0l-9.368,2.777 C36.365,48.758,36.294,48.768,36.222,48.768z"></path><path class="st0" d="M49.01,39.315c-0.192,0-0.384-0.073-0.53-0.22l-1.821-1.822c-0.146-0.146-0.22-0.338-0.22-0.53 c0-0.192,0.073-0.384,0.22-0.53c0.294-0.294,0.769-0.292,1.061,0l1.821,1.822c0.146,0.146,0.22,0.338,0.22,0.53 c0,0.192-0.073,0.384-0.22,0.53C49.394,39.242,49.201,39.315,49.01,39.315z"></path><path class="st0" d="M49.23,39.405c-0.271,0-0.541-0.102-0.748-0.306l-3.641-3.641c-0.201-0.201-0.312-0.469-0.312-0.753 c0-0.284,0.111-0.551,0.312-0.751L57.96,20.835c0.293-0.293,0.768-0.293,1.061,0s0.293,0.768,0,1.061l-12.81,12.811l3.02,3.02 l8.369-8.369c0.293-0.293,0.768-0.293,1.061,0s0.293,0.768,0,1.061l-8.679,8.678C49.774,39.302,49.502,39.405,49.23,39.405z"></path><path class="st0" d="M36,48.688c-0.19,0-0.382-0.072-0.528-0.217c-0.294-0.292-0.296-0.767-0.004-1.061l7.188-7.25 c0.29-0.294,0.765-0.297,1.061-0.005c0.294,0.292,0.296,0.767,0.004,1.061l-7.188,7.25C36.386,48.613,36.193,48.688,36,48.688z "></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p style="line-height: 1.3;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="font-size: 14px;">
<strong style="font-size: 20px; color: inherit; background-color: initial; text-align: inherit;"><strong>
<span style="font-size: 14px;">Вся продукция имеет сертификацию</span></strong></strong></span></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node95 widget widget-imagedtext wow bounceIn" data-wow-delay="0.9s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 60px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 60px; height: 60px;"><svg class="svgicon" id="svg197" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><line class="st0" x1="58.099" y1="53.903" x2="31.03" y2="27.827"></line><path class="st0" d="M27.02,31.735l26.262,27.264c0.014-0.012,0.027-0.023,0.041-0.035"></path><path class="st0" d="M31.274,3.7c0.881,0.449-1.084,12.561-0.76,13.346c0.324,0.789,10.574,7.375,10.565,8.193 c-0.01,0.818-12.227,2.723-12.929,3.404c-0.216,0.207-0.635,1.459-1.14,3.098c-1.144,3.713-2.73,9.416-3.387,9.48 c-0.947,0.09-6.612-10.967-7.232-11.244c-0.619-0.277-12.982,0.443-13.36-0.422c-0.379-0.861,8.32-9.48,8.459-10.35 C11.628,18.337,7.152,6.958,7.758,6.37c0.607-0.588,11.758,4.879,12.46,4.846C20.92,11.181,30.392,3.251,31.274,3.7z"></path><path class="st0" d="M26.098,12.704c0.428,0.219-0.525,6.1-0.368,6.482c0.157,0.381,5.134,3.578,5.129,3.977 c-0.003,0.396-5.935,1.322-6.276,1.652c-0.342,0.328-1.738,6.063-2.197,6.107c-0.46,0.043-3.21-5.324-3.512-5.459 s-6.304,0.215-6.487-0.205c-0.184-0.418,4.04-4.602,4.107-5.025c0.066-0.422-2.106-5.945-1.813-6.23 c0.294-0.287,5.709,2.367,6.05,2.352C21.071,16.339,25.67,12.487,26.098,12.704z"></path><line class="st0" x1="34.41" y1="14.356" x2="39.702" y2="12.341"></line><line class="st0" x1="19.29" y1="5.788" x2="18.786" y2="1.001"></line><line class="st0" x1="6.689" y1="18.64" x2="1.901" y2="17.128"></line><line class="st0" x1="14.25" y1="33.257" x2="12.485" y2="38.298"></line></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p style="line-height: 1.3;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="font-size: 14px;"><strong><strong>Без консервантов - Только Икра и соль</strong></strong></span></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node96 widget widget-imagedtext wow bounceIn" data-wow-delay="1.1s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 60px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 60px; height: 60px;"><svg class="svgicon" id="svg198" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M13.594,56.265c17.843,3.329,27.975,2.875,32.66,2.42c4.691-0.452,6.201-3.626,6.201-5.29 c0-1.966,0.604-3.027,1.361-3.479c3.327-2.722,2.267-3.628,1.361-5.593c-0.908-1.969-0.604-2.572,0.906-3.934 c1.786-1.515,0.757-3.63,0.151-4.383c-0.604-0.756-1.058-1.061-1.208-1.815c1.208-0.605,2.417-3.024,2.417-3.782 c-0.149-5.14-4.988-6.199-4.988-6.199s0,0-14.516,0c-1.059-0.151-0.302-3.025,0.303-4.082c2.569-4.536,4.082-8.618,4.082-10.738 c-0.906-10.435-8.013-8.616-8.315-7.559c-0.151,10.584-2.572,13.003-5.293,14.82c-2.723,1.812-3.025,3.931-6.199,11.188 c-3.176,7.256-8.893,4.839-8.893,4.839"></path><path class="st0" d="M12.683,31.922H3.468c-0.502,0-0.911,0.407-0.911,0.913v24.03c0,0.502,0.409,0.914,0.911,0.914h9.215 c0.503,0,0.912-0.412,0.912-0.914v-24.03C13.594,32.329,13.186,31.922,12.683,31.922z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;"><p>
<span style="font-family: &quot;Open Sans&quot;;">
<span style="font-size: 14px;"><strong><strong>Работаем с 2010 года</strong></strong></span></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node97 widget widget-imagedtext wow bounceIn" data-wow-delay="1.3s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 60px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 60px; height: 60px;"><svg class="svgicon" id="svg199" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M49.13,47.148c0-0.238,0.073-0.49,0.216-0.755c0.144-0.265,0.357-0.516,0.635-0.755 c0.28-0.24,0.625-0.431,1.039-0.576c0.414-0.146,0.875-0.218,1.387-0.218c0.446,0,0.854,0.061,1.222,0.183 c0.367,0.121,0.688,0.299,0.958,0.529c0.272,0.229,0.475,0.495,0.613,0.798c0.139,0.306,0.208,0.631,0.208,0.981 c0,0.46-0.101,0.853-0.3,1.183c-0.2,0.328-0.199,1.377,0.048,1.626c0.246,0.247,0.432,0.521,0.556,0.825 c0.124,0.3,0.186,0.624,0.186,0.976c0,0.418-0.083,0.822-0.251,1.214c-0.168,0.391-0.416,0.737-0.743,1.043 c-0.326,0.309-0.713,0.548-1.163,0.719c-0.448,0.172-0.944,0.26-1.487,0.26c-0.552,0-1.047-0.101-1.484-0.297 c-0.436-0.199-0.797-0.444-1.079-0.742c-0.284-0.296-0.497-0.604-0.643-0.921c-0.145-0.318-0.216-0.579-0.216-0.786 M50.283,47.888 M51.089,46.592"></path><path class="st0" d="M7.79,44.083c0-0.314,0.071-0.646,0.214-0.992c0.142-0.345,0.354-0.657,0.639-0.937 c0.281-0.281,0.641-0.508,1.075-0.682c0.436-0.172,0.944-0.257,1.529-0.257c0.704,0,1.307,0.104,1.801,0.33 c0.937,0.429,1.917,2.584,0.741,3.891c-1.176,1.306-6.466,5.955-6.466,5.955h7.446"></path><path class="st0" d="M58.336,41.126H43.516V23.828c0-0.919-0.746-1.664-1.665-1.664H20.945c-0.918,0-1.665,0.745-1.665,1.664 v11.675H3.664C2.744,35.503,2,36.248,2,37.166v19.281c0,0.919,0.744,1.664,1.664,1.664h54.673c0.918,0,1.664-0.745,1.664-1.664 V42.789C60,41.871,59.255,41.126,58.336,41.126z"></path><path class="st0" d="M37.074,10.244c0.712-0.107,1.55-0.63,2.981-2.102c2.542-2.614,2.186-4.947,2.186-4.947 c0-0.722-0.433-1.307-0.968-1.307l-4.498,0.975"></path><path class="st0" d="M25.073,2.844l-4.412-0.955c-0.535,0-0.968,0.585-0.968,1.307c0,0-0.357,2.333,2.186,4.947 c1.406,1.445,2.238,1.976,2.942,2.095"></path><path class="st0" d="M35.209,22.185c0-0.027,0-0.057,0-0.077c0-1.067-0.901-1.824-2.232-2.192l0.501-2.502 c0.632-0.286,1.023-0.68,1.023-1.114c0-0.327-0.223-0.631-0.606-0.884c1.912-1.084,3.208-3.188,3.208-5.607 c0-0.089-0.004-0.177-0.008-0.264C37.1,9.5,37.104,9.459,37.104,9.416V3.845c0-1.044-0.848-1.893-1.895-1.893h-8.511 c-1.045,0-1.892,0.849-1.892,1.893v5.571c0,0.043,0.004,0.084,0.007,0.128c-0.003,0.087-0.007,0.175-0.007,0.264 c0,2.438,1.317,4.556,3.251,5.631c-0.359,0.248-0.57,0.543-0.57,0.86c0,0.435,0.391,0.828,1.025,1.114l0.496,2.483 c-1.37,0.359-2.309,1.123-2.309,2.211c0,0.021,0,0.05,0,0.077"></path><path class="st0" d="M33.951,7.518c0,0.157-0.125,0.284-0.282,0.284h-5.46c-0.156,0-0.285-0.127-0.285-0.284V4.922 c0-0.156,0.128-0.283,0.285-0.283h5.46c0.156,0,0.282,0.127,0.282,0.283V7.518z"></path><line class="st0" x1="31.749" y1="26.932" x2="31.749" y2="35.64"></line><line class="st0" x1="28.962" y1="28.673" x2="31.749" y2="26.932"></line><line class="st0" x1="55" y1="49.659" x2="52.78" y2="49.659"></line></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;Open Sans&quot;;">
<span style="font-size: 14px;"><strong><strong>Самая Выгодная Цена в Украине</strong></strong></span></span></p></div>
<div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 17.2174%;">
<div class="cont"></div></div>
<div class="col" style="width: 37.8696%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node101 widget widget-button wow bounceIn" data-wow-delay="0.5s">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#икра" target="_self">
<button class="btn" id="uid200" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">СМОТРЕТЬ АССОРТИМЕНТ</span></button></a></div></div></div></div></div></div></div>
<span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<script class="adaptive">if(["xs","lg"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node107 section section-clear xs-hidden lg-hidden" id="главная" data-opacity="0.95">
<div class="separatorbottom">
<div class="bigtriangle-bottom" style="height: 50px;"><svg version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M 0 100 H 100 V 0 H 100 L 50 100 L 0 0 H 0 Z" style="fill: white;"></path></svg></div></div>
<div class="wrapper1" data-lazy-bgimage="img/2556fddf1c0e15929420cceaeddad33b.jpg" data-lazy-bgimage_size="1170,650" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAICAYAAADwdn+XAAAAFklEQVQoU2NkoBAwUqifYdQAhkEQBgALLAAJYi2WEwAAAABJRU5ErkJggg==&quot;);">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node108 widget widget-text wow fadeInRightBig" data-wow-delay="0.5s">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 20px;">
<span style="font-family: &quot;Open Sans&quot;;">100% ГАРАНТИЯ</span></span></p>
<p style="text-align: center; line-height: 1;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">Сертификат качества в каждом заказе</span></span></p></div></div></div></div></div>
<div class="node node109 widget widget-text">
<div class="wrapper1"><div class="wrapper2">
<div class="">
<h1 class="font-header spans xs-force-center textable">
<span style="line-height: 1.4; text-align: center;" class="p">
<span style="font-size: 64px;">
<strong><span style="font-family: &quot;TTNorms Bold&quot;;">
<span style="color: rgb(38, 166, 154);">
<span style="color: rgb(238, 29, 36);">КРАСНАЯ&nbsp;</span>
<span style="color: rgb(255, 255, 255);">ИКРА</span></span></span></strong></span></span></h1></div></div></div></div>
<div class="node node110 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node111 widget widget-text wow fadeInLeftBig" data-wow-delay="0.3s">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-family: &quot;TTNorms Medium&quot;; font-size: 28px;">НАТУРАЛЬНАЯ ИКРА В УКРАИНЕ</span></p></div></div></div></div></div>
<div class="node node112 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node113 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 44.913%;">
<div class="cont">
<div class="node node114 widget widget-imagedtext wow bounceIn" data-wow-delay="0.9s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg165" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.65) translate(16.153846153846153, 16.153846153846153)"><path fill="none" stroke="rgb(243, 252, 251)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M30.064,52.637c-2.094,2.139-4.994,6.604-6.151,6.353c-1.506-0.327-1.749-1.496-1.882-3.524l0.028-0.517"></path><path fill="none" stroke="rgb(243, 252, 251)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M38.043,32.392l3.978,21.284c0.131,2.027-0.253,3.716-1.4,3.818c-0.504,0.044-1.947-1.133-3.56-2.453"></path><path fill="none" stroke="rgb(243, 252, 251)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M35.775,32.522l1.439,21.497c-0.104,2.037-0.68,3.68-1.827,3.665c-1.149-0.016-6.374-6.844-8.179-6.869 c-1.803-0.023-7.091,7.134-8.543,6.653c-1.452-0.479-1.553-1.67-1.452-3.706l3.627-21.281"></path><path fill="none" stroke="rgb(243, 252, 251)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M46.38,15.523l-2.557-2.557V9.353c0-2.476-2.006-4.483-4.483-4.483h-3.611l-2.558-2.557c-1.751-1.751-4.591-1.751-6.343,0 L24.272,4.87H20.66c-2.477,0-4.483,2.007-4.483,4.483v3.614l-2.557,2.557c-1.75,1.749-1.75,4.587,0,6.34l2.557,2.557v3.613 c0,2.477,2.007,4.483,4.483,4.483h3.613l2.555,2.556c1.752,1.751,4.592,1.751,6.343,0l2.556-2.556h3.613 c2.478,0,4.483-2.006,4.483-4.483V24.42l2.557-2.557C48.131,20.11,48.131,17.272,46.38,15.523z"></path><circle fill="none" stroke="rgb(243, 252, 251)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="30.001" cy="18.692" r="10.584"></circle></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-size: 18px;"><strong><strong>Натуральная Икра - Не Имитация&nbsp;</strong></strong></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node115 widget widget-imagedtext wow bounceIn" data-wow-delay="1.1s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 50px;">
<div class="wrap"><div><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg166" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.64) translate(16.875, 16.875)"><path class="st0" d="M49.76,59.75H4.902c-2.086,0-3.782-1.697-3.782-3.783V4.032c0-2.085,1.696-3.782,3.782-3.782H49.76 c2.086,0,3.783,1.696,3.783,3.782V27c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V4.032 c0-1.258-1.024-2.282-2.283-2.282H4.902c-1.259,0-2.282,1.023-2.282,2.282v51.936c0,1.259,1.023,2.283,2.282,2.283H49.76 c1.259,0,2.283-1.024,2.283-2.283v-20.78c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v20.78 C53.543,58.053,51.846,59.75,49.76,59.75z"></path><path class="st0" d="M46.102,23.563H8.312c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h37.789 c0.414,0,0.75,0.336,0.75,0.75S46.516,23.563,46.102,23.563z"></path><path class="st0" d="M46.102,29.499H8.312c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h37.789 c0.414,0,0.75,0.336,0.75,0.75S46.516,29.499,46.102,29.499z"></path><path class="st0" d="M37,35.434H17.414c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75H37 c0.414,0,0.75,0.336,0.75,0.75S37.414,35.434,37,35.434z"></path><path class="st0" d="M48.251,17.833c-0.09,0-0.181-0.016-0.269-0.05c-0.044-0.017-4.515-1.725-9.557-3.198 c-0.32-0.093-0.54-0.387-0.54-0.72v-1.687c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v1.126 c2.643,0.787,5.09,1.62,6.784,2.22l-0.732-0.995c-0.125-0.169-0.173-0.383-0.132-0.59 c0.04-0.207,0.166-0.386,0.347-0.496l0.903-0.549c-0.972-0.363-2.387-0.874-4.064-1.426 c-0.394-0.129-0.607-0.553-0.479-0.947c0.13-0.393,0.55-0.606,0.947-0.478c3.258,1.072,5.549,1.995,5.572,2.004 c0.263,0.106,0.443,0.352,0.466,0.635c0.023,0.283-0.115,0.555-0.358,0.702L47.132,14.3l1.723,2.337 c0.198,0.268,0.195,0.634-0.007,0.899C48.703,17.727,48.48,17.833,48.251,17.833z"></path><path class="st0" d="M6.394,17.833c-0.229,0-0.452-0.105-0.597-0.295c-0.202-0.265-0.205-0.631-0.007-0.899L7.513,14.3 l-1.508-0.916c-0.245-0.148-0.384-0.423-0.358-0.708s0.21-0.53,0.477-0.633c0.023-0.009,2.38-0.917,5.587-1.973 c0.39-0.128,0.817,0.084,0.946,0.478c0.13,0.394-0.084,0.817-0.478,0.947c-1.658,0.546-3.085,1.051-4.071,1.411 l0.885,0.537c0.181,0.109,0.307,0.289,0.347,0.496c0.041,0.207-0.007,0.421-0.132,0.59l-0.732,0.994 c1.694-0.601,4.14-1.433,6.781-2.22v-1.139c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v1.699 c0,0.333-0.22,0.626-0.54,0.72c-5.042,1.474-9.509,3.181-9.554,3.198C6.574,17.816,6.483,17.833,6.394,17.833z"></path><path class="st0" d="M11.986,13.777c-0.165,0-0.327-0.055-0.46-0.158c-0.184-0.142-0.29-0.361-0.29-0.592v-4.34 c0-0.342,0.232-0.642,0.563-0.727c0.35-0.089,8.634-2.192,15.544-2.192c6.906,0,15.112,2.104,15.458,2.193 c0.331,0.085,0.562,0.384,0.562,0.726v4.34c0,0.232-0.107,0.451-0.29,0.593c-0.184,0.142-0.423,0.189-0.646,0.134 c-0.084-0.021-8.435-2.147-15.084-2.147c-6.654,0-15.088,2.126-15.173,2.148C12.11,13.77,12.048,13.777,11.986,13.777z M12.736,9.276v2.799c2.416-0.562,9.013-1.968,14.607-1.968c5.585,0,12.118,1.402,14.521,1.966V9.275 c-1.98-0.475-8.818-2.007-14.521-2.007C21.63,7.268,14.73,8.802,12.736,9.276z"></path><path class="st0" d="M44.399,51.221h-20.99c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h20.99 c0.414,0,0.75,0.336,0.75,0.75S44.813,51.221,44.399,51.221z"></path><path class="st0" d="M25.005,49.208c-0.307,0-0.613-0.078-0.886-0.226c-0.953-0.521-1.287-1.743-1.322-1.881 c-0.103-0.401,0.141-0.81,0.542-0.912c0.396-0.1,0.81,0.14,0.911,0.542c0.059,0.224,0.286,0.77,0.586,0.933 c0.088,0.048,0.187,0.057,0.299,0.022c0.483-0.154,0.608-0.557,0.758-1.202c0.125-0.551,0.297-1.311,1.117-1.397 c0.783-0.081,1.309,0.75,1.812,1.686c0.153,0.28,0.346,0.633,0.441,0.701c0.241,0.122,1.02-0.143,1.271-0.572 c0.219-0.363,0.487-0.575,0.804-0.639c0.596-0.124,1.191,0.312,1.714,0.693c0.21,0.153,0.391,0.287,0.568,0.386 c0.339,0.189,0.8,0.174,1.242,0.13c0.403-0.051,0.78,0.259,0.821,0.671s-0.259,0.78-0.671,0.821 c-0.653,0.066-1.42,0.081-2.124-0.313c-0.228-0.127-0.459-0.293-0.687-0.458c-0.136-0.099-0.336-0.245-0.498-0.346 c-0.729,0.969-2.188,1.432-3.118,0.964c-0.493-0.244-0.753-0.721-1.082-1.324c-0.082-0.151-0.153-0.279-0.217-0.388 c-0.175,0.678-0.538,1.647-1.698,2.017C25.396,49.178,25.2,49.208,25.005,49.208z"></path><path class="st0" d="M12.395,52.754c-0.133,0-0.266-0.035-0.384-0.106l-1.216-0.724H9.379 c-0.269,0-0.517-0.144-0.65-0.376l-0.749-1.302l-1.292-0.77c-0.23-0.137-0.369-0.386-0.366-0.654l0.018-1.415 l-0.706-1.225c-0.134-0.232-0.134-0.518,0-0.75l0.752-1.303l0.021-1.504c0.004-0.268,0.15-0.514,0.384-0.645l1.236-0.691 l0.703-1.222c0.134-0.232,0.382-0.376,0.65-0.376h1.507l1.313-0.735c0.235-0.13,0.521-0.127,0.751,0.011l1.213,0.724 h1.415c0.269,0,0.517,0.144,0.65,0.376l0.748,1.302l1.294,0.77c0.23,0.137,0.37,0.387,0.366,0.655l-0.021,1.413 l0.708,1.224c0.134,0.232,0.134,0.518,0,0.75l-0.751,1.302l-0.023,1.507c-0.004,0.267-0.15,0.512-0.383,0.643 l-1.232,0.691l-0.707,1.224c-0.134,0.232-0.382,0.375-0.649,0.375h-1.507l-1.311,0.734 C12.647,52.722,12.521,52.754,12.395,52.754z M9.812,50.424h1.189c0.135,0,0.268,0.037,0.384,0.106l1.021,0.608 l1.104-0.618c0.111-0.063,0.238-0.096,0.366-0.096h1.27l0.594-1.027c0.067-0.117,0.165-0.213,0.282-0.279l1.035-0.58 l0.02-1.27c0.002-0.127,0.036-0.252,0.101-0.363l0.632-1.095l-0.595-1.028c-0.067-0.117-0.103-0.251-0.101-0.386 l0.018-1.187l-1.09-0.648c-0.11-0.066-0.202-0.159-0.267-0.271l-0.63-1.096h-1.188c-0.136,0-0.269-0.037-0.385-0.106 l-1.019-0.608l-1.105,0.619c-0.112,0.062-0.238,0.095-0.366,0.095H9.812l-0.59,1.025 c-0.068,0.118-0.166,0.214-0.284,0.281L7.899,43.08l-0.018,1.267c-0.002,0.128-0.036,0.254-0.101,0.365l-0.633,1.097 l0.593,1.028c0.067,0.117,0.103,0.25,0.101,0.384l-0.015,1.188l1.089,0.648c0.11,0.066,0.202,0.159,0.267,0.271 L9.812,50.424z"></path><path class="st0" d="M36.222,48.768c-0.537,0-1.015-0.448-1.065-0.999c-0.009-0.095,0.001-0.19,0.028-0.281l2.775-9.37 c0.094-0.327,0.375-0.621,0.548-0.776c0.007-0.007,0.015-0.014,0.022-0.021c0.069-0.061,0.115-0.095,0.117-0.097l0.006,0.009 c0.399-0.253,1.652-0.867,6.265-3.109c0.374-0.181,0.822-0.025,1.003,0.347c0.181,0.373,0.025,0.821-0.347,1.002 c-2.176,1.057-5.712,2.786-6.102,3.003c-0.005,0.003-0.01,0.006-0.015,0.01c0.001,0,0.002-0.001,0.002-0.001 c0.01,0-0.041,0.062-0.077,0.109l-2.502,8.445l8.442-2.503c0.041-0.031,0.095-0.078,0.132-0.113 c0.278-0.547,1.883-4.017,2.873-6.172c0.173-0.377,0.622-0.539,0.995-0.369c0.376,0.173,0.541,0.618,0.368,0.995 c-2.217,4.824-2.778,6.039-3.017,6.412l0.008,0.005c-0.004,0.006-0.407,0.529-0.88,0.664v0l-9.368,2.777 C36.365,48.758,36.294,48.768,36.222,48.768z"></path><path class="st0" d="M49.01,39.315c-0.192,0-0.384-0.073-0.53-0.22l-1.821-1.822c-0.146-0.146-0.22-0.338-0.22-0.53 c0-0.192,0.073-0.384,0.22-0.53c0.294-0.294,0.769-0.292,1.061,0l1.821,1.822c0.146,0.146,0.22,0.338,0.22,0.53 c0,0.192-0.073,0.384-0.22,0.53C49.394,39.242,49.201,39.315,49.01,39.315z"></path><path class="st0" d="M49.23,39.405c-0.271,0-0.541-0.102-0.748-0.306l-3.641-3.641c-0.201-0.201-0.312-0.469-0.312-0.753 c0-0.284,0.111-0.551,0.312-0.751L57.96,20.835c0.293-0.293,0.768-0.293,1.061,0s0.293,0.768,0,1.061l-12.81,12.811l3.02,3.02 l8.369-8.369c0.293-0.293,0.768-0.293,1.061,0s0.293,0.768,0,1.061l-8.679,8.678C49.774,39.302,49.502,39.405,49.23,39.405z"></path><path class="st0" d="M36,48.688c-0.19,0-0.382-0.072-0.528-0.217c-0.294-0.292-0.296-0.767-0.004-1.061l7.188-7.25 c0.29-0.294,0.765-0.297,1.061-0.005c0.294,0.292,0.296,0.767,0.004,1.061l-7.188,7.25C36.386,48.613,36.193,48.688,36,48.688z "></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-size: 18px;"><strong>Вся продукция имеет Сертификаты</strong></span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node116 widget widget-imagedtext wow bounceIn" data-wow-delay="1.3s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg167" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.65) translate(16.153846153846153, 16.153846153846153)"><line class="st0" x1="58.099" y1="53.903" x2="31.03" y2="27.827"></line><path class="st0" d="M27.02,31.735l26.262,27.264c0.014-0.012,0.027-0.023,0.041-0.035"></path><path class="st0" d="M31.274,3.7c0.881,0.449-1.084,12.561-0.76,13.346c0.324,0.789,10.574,7.375,10.565,8.193 c-0.01,0.818-12.227,2.723-12.929,3.404c-0.216,0.207-0.635,1.459-1.14,3.098c-1.144,3.713-2.73,9.416-3.387,9.48 c-0.947,0.09-6.612-10.967-7.232-11.244c-0.619-0.277-12.982,0.443-13.36-0.422c-0.379-0.861,8.32-9.48,8.459-10.35 C11.628,18.337,7.152,6.958,7.758,6.37c0.607-0.588,11.758,4.879,12.46,4.846C20.92,11.181,30.392,3.251,31.274,3.7z"></path><path class="st0" d="M26.098,12.704c0.428,0.219-0.525,6.1-0.368,6.482c0.157,0.381,5.134,3.578,5.129,3.977 c-0.003,0.396-5.935,1.322-6.276,1.652c-0.342,0.328-1.738,6.063-2.197,6.107c-0.46,0.043-3.21-5.324-3.512-5.459 s-6.304,0.215-6.487-0.205c-0.184-0.418,4.04-4.602,4.107-5.025c0.066-0.422-2.106-5.945-1.813-6.23 c0.294-0.287,5.709,2.367,6.05,2.352C21.071,16.339,25.67,12.487,26.098,12.704z"></path><line class="st0" x1="34.41" y1="14.356" x2="39.702" y2="12.341"></line><line class="st0" x1="19.29" y1="5.788" x2="18.786" y2="1.001"></line><line class="st0" x1="6.689" y1="18.64" x2="1.901" y2="17.128"></line><line class="st0" x1="14.25" y1="33.257" x2="12.485" y2="38.298"></line></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-size: 18px;"><strong><strong>Без консервантов - Икра и соль</strong></strong></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node117 widget widget-imagedtext wow bounceIn" data-wow-delay="1.5s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg168" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.65) translate(16.153846153846153, 16.153846153846153)"><path class="st0" d="M13.594,56.265c17.843,3.329,27.975,2.875,32.66,2.42c4.691-0.452,6.201-3.626,6.201-5.29 c0-1.966,0.604-3.027,1.361-3.479c3.327-2.722,2.267-3.628,1.361-5.593c-0.908-1.969-0.604-2.572,0.906-3.934 c1.786-1.515,0.757-3.63,0.151-4.383c-0.604-0.756-1.058-1.061-1.208-1.815c1.208-0.605,2.417-3.024,2.417-3.782 c-0.149-5.14-4.988-6.199-4.988-6.199s0,0-14.516,0c-1.059-0.151-0.302-3.025,0.303-4.082c2.569-4.536,4.082-8.618,4.082-10.738 c-0.906-10.435-8.013-8.616-8.315-7.559c-0.151,10.584-2.572,13.003-5.293,14.82c-2.723,1.812-3.025,3.931-6.199,11.188 c-3.176,7.256-8.893,4.839-8.893,4.839"></path><path class="st0" d="M12.683,31.922H3.468c-0.502,0-0.911,0.407-0.911,0.913v24.03c0,0.502,0.409,0.914,0.911,0.914h9.215 c0.503,0,0.912-0.412,0.912-0.914v-24.03C13.594,32.329,13.186,31.922,12.683,31.922z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-size: 18px;"><strong><strong>Работаем с 2010 года</strong></strong></span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node118 widget widget-imagedtext wow bounceIn" data-wow-delay="1.7s">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg169" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.65) translate(16.153846153846153, 16.153846153846153)"><path class="st0" d="M49.13,47.148c0-0.238,0.073-0.49,0.216-0.755c0.144-0.265,0.357-0.516,0.635-0.755 c0.28-0.24,0.625-0.431,1.039-0.576c0.414-0.146,0.875-0.218,1.387-0.218c0.446,0,0.854,0.061,1.222,0.183 c0.367,0.121,0.688,0.299,0.958,0.529c0.272,0.229,0.475,0.495,0.613,0.798c0.139,0.306,0.208,0.631,0.208,0.981 c0,0.46-0.101,0.853-0.3,1.183c-0.2,0.328-0.199,1.377,0.048,1.626c0.246,0.247,0.432,0.521,0.556,0.825 c0.124,0.3,0.186,0.624,0.186,0.976c0,0.418-0.083,0.822-0.251,1.214c-0.168,0.391-0.416,0.737-0.743,1.043 c-0.326,0.309-0.713,0.548-1.163,0.719c-0.448,0.172-0.944,0.26-1.487,0.26c-0.552,0-1.047-0.101-1.484-0.297 c-0.436-0.199-0.797-0.444-1.079-0.742c-0.284-0.296-0.497-0.604-0.643-0.921c-0.145-0.318-0.216-0.579-0.216-0.786 M50.283,47.888 M51.089,46.592"></path><path class="st0" d="M7.79,44.083c0-0.314,0.071-0.646,0.214-0.992c0.142-0.345,0.354-0.657,0.639-0.937 c0.281-0.281,0.641-0.508,1.075-0.682c0.436-0.172,0.944-0.257,1.529-0.257c0.704,0,1.307,0.104,1.801,0.33 c0.937,0.429,1.917,2.584,0.741,3.891c-1.176,1.306-6.466,5.955-6.466,5.955h7.446"></path><path class="st0" d="M58.336,41.126H43.516V23.828c0-0.919-0.746-1.664-1.665-1.664H20.945c-0.918,0-1.665,0.745-1.665,1.664 v11.675H3.664C2.744,35.503,2,36.248,2,37.166v19.281c0,0.919,0.744,1.664,1.664,1.664h54.673c0.918,0,1.664-0.745,1.664-1.664 V42.789C60,41.871,59.255,41.126,58.336,41.126z"></path><path class="st0" d="M37.074,10.244c0.712-0.107,1.55-0.63,2.981-2.102c2.542-2.614,2.186-4.947,2.186-4.947 c0-0.722-0.433-1.307-0.968-1.307l-4.498,0.975"></path><path class="st0" d="M25.073,2.844l-4.412-0.955c-0.535,0-0.968,0.585-0.968,1.307c0,0-0.357,2.333,2.186,4.947 c1.406,1.445,2.238,1.976,2.942,2.095"></path><path class="st0" d="M35.209,22.185c0-0.027,0-0.057,0-0.077c0-1.067-0.901-1.824-2.232-2.192l0.501-2.502 c0.632-0.286,1.023-0.68,1.023-1.114c0-0.327-0.223-0.631-0.606-0.884c1.912-1.084,3.208-3.188,3.208-5.607 c0-0.089-0.004-0.177-0.008-0.264C37.1,9.5,37.104,9.459,37.104,9.416V3.845c0-1.044-0.848-1.893-1.895-1.893h-8.511 c-1.045,0-1.892,0.849-1.892,1.893v5.571c0,0.043,0.004,0.084,0.007,0.128c-0.003,0.087-0.007,0.175-0.007,0.264 c0,2.438,1.317,4.556,3.251,5.631c-0.359,0.248-0.57,0.543-0.57,0.86c0,0.435,0.391,0.828,1.025,1.114l0.496,2.483 c-1.37,0.359-2.309,1.123-2.309,2.211c0,0.021,0,0.05,0,0.077"></path><path class="st0" d="M33.951,7.518c0,0.157-0.125,0.284-0.282,0.284h-5.46c-0.156,0-0.285-0.127-0.285-0.284V4.922 c0-0.156,0.128-0.283,0.285-0.283h5.46c0.156,0,0.282,0.127,0.282,0.283V7.518z"></path><line class="st0" x1="31.749" y1="26.932" x2="31.749" y2="35.64"></line><line class="st0" x1="28.962" y1="28.673" x2="31.749" y2="26.932"></line><line class="st0" x1="55" y1="49.659" x2="52.78" y2="49.659"></line></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-size: 18px;"><strong><strong>Самая Выгодная Цена в Украине</strong></strong></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node119 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div></div></div>
<div class="col" style="width: 9.00686%;">
<div class="cont"></div></div>
<div class="col" style="width: 46.0801%;">
<div class="cont">
<div class="node node120 widget widget-element wow zoomInDown" data-wow-delay="0.3s">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node121 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="color: rgb(255, 241, 0);">
<span style="font-size: 32px;">
<span style="font-family: &quot;TTNorms Bold&quot;;">АКЦИЯ 1 + 1 = 3</span></span></span></p></div></div></div></div></div>
<div class="node node122 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center; line-height: 1.3;">
<span style="font-size: 16px;">
<span style="font-family: &quot;Open Sans&quot;;">При покупке 2х баночек по 0.5</span></span></p>
<p style="text-align: center; line-height: 1.3;">
<span style="font-size: 16px;">
<span style="font-family: &quot;Open Sans&quot;;">&nbsp;1 баночка 0.5 в Подарок!</span></span></p></div></div></div></div></div>
<div class="node node123 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 20px;">
<span style="font-family: &quot;Open Sans&quot;;">+</span></span></p></div></div></div></div></div>
<div class="node node124 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center; line-height: 1.3;">
<span style="font-size: 16px;">
<span style="font-family: &quot;Open Sans&quot;;">Быстрая Доставка по всей Украине</span></span></p></div></div></div></div></div>
<div class="node node125 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="color: rgb(183, 183, 183);">
<span style="font-size: 14px;">До конца Акции осталось:</span></span></p></div></div></div></div></div>
<div class="node node126 widget widget-countdown">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node126_meta" class="code">
<div plp-countdown-root="" data-red-libs="countdown" class="countdown4 small" data-vals="{&quot;type&quot;:&quot;month&quot;,&quot;full_date&quot;:{&quot;year&quot;:2019,&quot;month&quot;:7,&quot;day&quot;:15},&quot;full_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;month_day&quot;:15,&quot;month_time&quot;:{&quot;hour&quot;:23,&quot;minute&quot;:55},&quot;week_day&quot;:5,&quot;week_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;day_time&quot;:{&quot;hour&quot;:18,&quot;minute&quot;:0},&quot;fake_days&quot;:2,&quot;fake_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;timezone&quot;:null,&quot;action&quot;:{&quot;type&quot;:&quot;none&quot;,&quot;url&quot;:&quot;&quot;,&quot;element_id&quot;:&quot;&quot;,&quot;message&quot;:{&quot;type&quot;:&quot;success&quot;,&quot;title&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;},&quot;modal&quot;:&quot;action_show_popup&quot;}}">
  <div class="line">
    <div class="group days">
      <div class="digits">{dnn}</div>
      <div class="label">{dl}</div>
    </div>
    <div class="group hours">
      <div class="digits">{hnn}</div>
      <div class="label">{hl}</div>
    </div>
  </div>
  <div class="line">
    <div class="group minutes">
      <div class="digits">{mnn}</div>
      <div class="label">{ml}</div>
    </div>
    <div class="group seconds">
      <div class="digits">{snn}</div>
      <div class="label">{sl}</div>
    </div>
  </div>
</div></div></div>
<div class="countdown-modals">
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="action_show_popup" area-context="uid170">
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><p>Заголовок окна (Действие по окончанию счетчика)</p></h4></div>
<div class="modal-body">
<div class="cont">
<div class="node node127 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable"><p>Редактируемый текст</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node128 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid171" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">ЗАКАЗАТЬ СЕЙЧАС</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid172">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><h4><p style="text-align: center; line-height: 1.3;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам для уточнения вида Икры который Вы хотите получить по Акции!</span></span></span></p></h4></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid4" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div><br>
<input type="hidden" name="hid" value="Заявка на обратный звонок">
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid173">
<span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="agreement">Политика конфиденциальности</div></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node133 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node134 widget widget-button wow bounceIn" data-wow-delay="0.5s">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#икра" target="_self">
<button class="btn" id="uid174" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">СМОТРЕТЬ АССОРТИМЕНТ</span></button></a></div></div></div></div></div></div></div>
<span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<script class="adaptive">if(["xs"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node140 section section-clear xs-hidden" id="онас" data-opacity="0.95">
<div class="wrapper1">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node141 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-scale-80 sm-scale-80">
<h2 class="font-header spans xs-force-center textable">
<span style="font-size: 34px; text-align: center; line-height: 1.5;" class="p">
<span style="font-size: 32px;">
<span style="color: rgb(70, 70, 70);">
<span style="font-family: &quot;Open Sans&quot;;">НАШИ ПРЕИМУЩЕСТВА</span></span></span></span></h2></div></div></div></div>
<div class="node node142 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="color: rgb(98, 98, 98);">
<span style="font-size: 20px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">Чем мы отличаемся от остальных</span></span></span></p></div></div></div></div></div>
<div class="node node143 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="color: rgb(98, 98, 98);">
<span style="font-size: 20px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">Вы можете открыть Икру при получении на почте или при доставке курьером и проверить её качество.</span></span></span></p></div></div></div></div></div>
<div class="node node144 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" style="text-align: center;"><div class="svgwrap" style="max-width: 64px;">
<img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII="><svg class="svgicon" id="svg25" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(229, 56, 53); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M50.439,32.397c0.311,1.431,0.473,2.914,0.473,4.437c0,11.542-9.35,20.895-20.889,20.895 c-11.538,0-20.89-9.353-20.89-20.895c0-1.51,0.162-2.984,0.465-4.404"></path><path class="st0" d="M36.964,38.793c0,0.462-0.354,0.84-0.795,0.84c-0.434,0-0.79-0.377-0.79-0.84 c0-0.463,0.356-0.838,0.79-0.838C36.61,37.955,36.964,38.33,36.964,38.793z"></path><ellipse class="st0" cx="24.24" cy="38.793" rx="0.794" ry="0.84"></ellipse><path class="st0" d="M25.547,32.7c-7.8,3.526-16.413,4.134-16.413,4.134"></path><line class="st0" x1="50.912" y1="36.833" x2="46.041" y2="32.45"></line><path class="st0" d="M50.439,32.397L59,22.383L48.596,9.893L30.023,2.272l-18.897,7.82L1,22.388L9.599,32.43 C11.905,24.516,49.132,24.329,50.439,32.397z"></path><path class="st0" d="M35.429,12.135c0.812-1.193-0.037-3.221-1.925-2.551c-1.826,0.649-3.84-0.736-3.93-0.793V8.784l-0.008-0.003 l0,0l0,0l0,0l0,0l-0.008,0.003V8.79c-0.089,0.058-2.104,1.442-3.931,0.793c-1.886-0.67-2.738,1.358-1.926,2.551 c0.883,1.298,1.029,1.934,1.029,2.187c-0.004,0.684-2.54,2.142-0.56,5.367c0.735,1.194,1.229,1.027,3.979,1.293l1.416,1.272l0,0 l1.415-1.272c2.752-0.266,3.244-0.099,3.979-1.293c1.98-3.225-0.554-4.683-0.56-5.367C34.4,14.068,34.547,13.433,35.429,12.135z"></path><line class="st0" x1="50.439" y1="32.43" x2="9.599" y2="32.43"></line></g></svg></div></div><noscript>
<img src="img/x10--black.png.pagespeed.ic.4nCs-2h2xz.png" alt=""></noscript></div></div></div>
<div class="node node145 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="color: rgb(98, 98, 98);">
<span style="font-size: 20px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">ЖИВЫЕ ОТЗЫВЫ</span></span></span></p>
<p style="text-align: center;">
<span style="color: rgb(98, 98, 98);">
<span style="font-size: 20px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">Смотрите отзывы Наших клиентов&nbsp;</span></span></span></p></div></div></div></div></div>
<div class="node node146 widget widget-button wow bounceIn" data-wow-delay="0.2s">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#отзывы" target="_self">
<button class="btn" id="uid26" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">СМОТРЕТЬ ОТЗЫВЫ</span></button></a></div></div></div></div></div>
<div class="node node148 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node149 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 33.3333%;">
<div class="cont">
<div class="node node150 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td text">
<div style="padding-right: 15px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p style="text-align: right;">
<span style="color: rgb(55, 180, 74);">
<span style="font-size: 18px;">СЕРТИФИЦИРОВАНАЯ ПРОДУКЦИЯ</span></span></p></div>
<div class="cont"></div></div></div>
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg27" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(76, 175, 80); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M49.76,59.75H4.902c-2.086,0-3.782-1.697-3.782-3.783V4.032c0-2.085,1.696-3.782,3.782-3.782H49.76 c2.086,0,3.783,1.696,3.783,3.782V27c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V4.032 c0-1.258-1.024-2.282-2.283-2.282H4.902c-1.259,0-2.282,1.023-2.282,2.282v51.936c0,1.259,1.023,2.283,2.282,2.283H49.76 c1.259,0,2.283-1.024,2.283-2.283v-20.78c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v20.78 C53.543,58.053,51.846,59.75,49.76,59.75z"></path><path class="st0" d="M46.102,23.563H8.312c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h37.789 c0.414,0,0.75,0.336,0.75,0.75S46.516,23.563,46.102,23.563z"></path><path class="st0" d="M46.102,29.499H8.312c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h37.789 c0.414,0,0.75,0.336,0.75,0.75S46.516,29.499,46.102,29.499z"></path><path class="st0" d="M37,35.434H17.414c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75H37 c0.414,0,0.75,0.336,0.75,0.75S37.414,35.434,37,35.434z"></path><path class="st0" d="M48.251,17.833c-0.09,0-0.181-0.016-0.269-0.05c-0.044-0.017-4.515-1.725-9.557-3.198 c-0.32-0.093-0.54-0.387-0.54-0.72v-1.687c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v1.126 c2.643,0.787,5.09,1.62,6.784,2.22l-0.732-0.995c-0.125-0.169-0.173-0.383-0.132-0.59 c0.04-0.207,0.166-0.386,0.347-0.496l0.903-0.549c-0.972-0.363-2.387-0.874-4.064-1.426 c-0.394-0.129-0.607-0.553-0.479-0.947c0.13-0.393,0.55-0.606,0.947-0.478c3.258,1.072,5.549,1.995,5.572,2.004 c0.263,0.106,0.443,0.352,0.466,0.635c0.023,0.283-0.115,0.555-0.358,0.702L47.132,14.3l1.723,2.337 c0.198,0.268,0.195,0.634-0.007,0.899C48.703,17.727,48.48,17.833,48.251,17.833z"></path><path class="st0" d="M6.394,17.833c-0.229,0-0.452-0.105-0.597-0.295c-0.202-0.265-0.205-0.631-0.007-0.899L7.513,14.3 l-1.508-0.916c-0.245-0.148-0.384-0.423-0.358-0.708s0.21-0.53,0.477-0.633c0.023-0.009,2.38-0.917,5.587-1.973 c0.39-0.128,0.817,0.084,0.946,0.478c0.13,0.394-0.084,0.817-0.478,0.947c-1.658,0.546-3.085,1.051-4.071,1.411 l0.885,0.537c0.181,0.109,0.307,0.289,0.347,0.496c0.041,0.207-0.007,0.421-0.132,0.59l-0.732,0.994 c1.694-0.601,4.14-1.433,6.781-2.22v-1.139c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v1.699 c0,0.333-0.22,0.626-0.54,0.72c-5.042,1.474-9.509,3.181-9.554,3.198C6.574,17.816,6.483,17.833,6.394,17.833z"></path><path class="st0" d="M11.986,13.777c-0.165,0-0.327-0.055-0.46-0.158c-0.184-0.142-0.29-0.361-0.29-0.592v-4.34 c0-0.342,0.232-0.642,0.563-0.727c0.35-0.089,8.634-2.192,15.544-2.192c6.906,0,15.112,2.104,15.458,2.193 c0.331,0.085,0.562,0.384,0.562,0.726v4.34c0,0.232-0.107,0.451-0.29,0.593c-0.184,0.142-0.423,0.189-0.646,0.134 c-0.084-0.021-8.435-2.147-15.084-2.147c-6.654,0-15.088,2.126-15.173,2.148C12.11,13.77,12.048,13.777,11.986,13.777z M12.736,9.276v2.799c2.416-0.562,9.013-1.968,14.607-1.968c5.585,0,12.118,1.402,14.521,1.966V9.275 c-1.98-0.475-8.818-2.007-14.521-2.007C21.63,7.268,14.73,8.802,12.736,9.276z"></path><path class="st0" d="M44.399,51.221h-20.99c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h20.99 c0.414,0,0.75,0.336,0.75,0.75S44.813,51.221,44.399,51.221z"></path><path class="st0" d="M25.005,49.208c-0.307,0-0.613-0.078-0.886-0.226c-0.953-0.521-1.287-1.743-1.322-1.881 c-0.103-0.401,0.141-0.81,0.542-0.912c0.396-0.1,0.81,0.14,0.911,0.542c0.059,0.224,0.286,0.77,0.586,0.933 c0.088,0.048,0.187,0.057,0.299,0.022c0.483-0.154,0.608-0.557,0.758-1.202c0.125-0.551,0.297-1.311,1.117-1.397 c0.783-0.081,1.309,0.75,1.812,1.686c0.153,0.28,0.346,0.633,0.441,0.701c0.241,0.122,1.02-0.143,1.271-0.572 c0.219-0.363,0.487-0.575,0.804-0.639c0.596-0.124,1.191,0.312,1.714,0.693c0.21,0.153,0.391,0.287,0.568,0.386 c0.339,0.189,0.8,0.174,1.242,0.13c0.403-0.051,0.78,0.259,0.821,0.671s-0.259,0.78-0.671,0.821 c-0.653,0.066-1.42,0.081-2.124-0.313c-0.228-0.127-0.459-0.293-0.687-0.458c-0.136-0.099-0.336-0.245-0.498-0.346 c-0.729,0.969-2.188,1.432-3.118,0.964c-0.493-0.244-0.753-0.721-1.082-1.324c-0.082-0.151-0.153-0.279-0.217-0.388 c-0.175,0.678-0.538,1.647-1.698,2.017C25.396,49.178,25.2,49.208,25.005,49.208z"></path><path class="st0" d="M12.395,52.754c-0.133,0-0.266-0.035-0.384-0.106l-1.216-0.724H9.379 c-0.269,0-0.517-0.144-0.65-0.376l-0.749-1.302l-1.292-0.77c-0.23-0.137-0.369-0.386-0.366-0.654l0.018-1.415 l-0.706-1.225c-0.134-0.232-0.134-0.518,0-0.75l0.752-1.303l0.021-1.504c0.004-0.268,0.15-0.514,0.384-0.645l1.236-0.691 l0.703-1.222c0.134-0.232,0.382-0.376,0.65-0.376h1.507l1.313-0.735c0.235-0.13,0.521-0.127,0.751,0.011l1.213,0.724 h1.415c0.269,0,0.517,0.144,0.65,0.376l0.748,1.302l1.294,0.77c0.23,0.137,0.37,0.387,0.366,0.655l-0.021,1.413 l0.708,1.224c0.134,0.232,0.134,0.518,0,0.75l-0.751,1.302l-0.023,1.507c-0.004,0.267-0.15,0.512-0.383,0.643 l-1.232,0.691l-0.707,1.224c-0.134,0.232-0.382,0.375-0.649,0.375h-1.507l-1.311,0.734 C12.647,52.722,12.521,52.754,12.395,52.754z M9.812,50.424h1.189c0.135,0,0.268,0.037,0.384,0.106l1.021,0.608 l1.104-0.618c0.111-0.063,0.238-0.096,0.366-0.096h1.27l0.594-1.027c0.067-0.117,0.165-0.213,0.282-0.279l1.035-0.58 l0.02-1.27c0.002-0.127,0.036-0.252,0.101-0.363l0.632-1.095l-0.595-1.028c-0.067-0.117-0.103-0.251-0.101-0.386 l0.018-1.187l-1.09-0.648c-0.11-0.066-0.202-0.159-0.267-0.271l-0.63-1.096h-1.188c-0.136,0-0.269-0.037-0.385-0.106 l-1.019-0.608l-1.105,0.619c-0.112,0.062-0.238,0.095-0.366,0.095H9.812l-0.59,1.025 c-0.068,0.118-0.166,0.214-0.284,0.281L7.899,43.08l-0.018,1.267c-0.002,0.128-0.036,0.254-0.101,0.365l-0.633,1.097 l0.593,1.028c0.067,0.117,0.103,0.25,0.101,0.384l-0.015,1.188l1.089,0.648c0.11,0.066,0.202,0.159,0.267,0.271 L9.812,50.424z"></path><path class="st0" d="M36.222,48.768c-0.537,0-1.015-0.448-1.065-0.999c-0.009-0.095,0.001-0.19,0.028-0.281l2.775-9.37 c0.094-0.327,0.375-0.621,0.548-0.776c0.007-0.007,0.015-0.014,0.022-0.021c0.069-0.061,0.115-0.095,0.117-0.097l0.006,0.009 c0.399-0.253,1.652-0.867,6.265-3.109c0.374-0.181,0.822-0.025,1.003,0.347c0.181,0.373,0.025,0.821-0.347,1.002 c-2.176,1.057-5.712,2.786-6.102,3.003c-0.005,0.003-0.01,0.006-0.015,0.01c0.001,0,0.002-0.001,0.002-0.001 c0.01,0-0.041,0.062-0.077,0.109l-2.502,8.445l8.442-2.503c0.041-0.031,0.095-0.078,0.132-0.113 c0.278-0.547,1.883-4.017,2.873-6.172c0.173-0.377,0.622-0.539,0.995-0.369c0.376,0.173,0.541,0.618,0.368,0.995 c-2.217,4.824-2.778,6.039-3.017,6.412l0.008,0.005c-0.004,0.006-0.407,0.529-0.88,0.664v0l-9.368,2.777 C36.365,48.758,36.294,48.768,36.222,48.768z"></path><path class="st0" d="M49.01,39.315c-0.192,0-0.384-0.073-0.53-0.22l-1.821-1.822c-0.146-0.146-0.22-0.338-0.22-0.53 c0-0.192,0.073-0.384,0.22-0.53c0.294-0.294,0.769-0.292,1.061,0l1.821,1.822c0.146,0.146,0.22,0.338,0.22,0.53 c0,0.192-0.073,0.384-0.22,0.53C49.394,39.242,49.201,39.315,49.01,39.315z"></path><path class="st0" d="M49.23,39.405c-0.271,0-0.541-0.102-0.748-0.306l-3.641-3.641c-0.201-0.201-0.312-0.469-0.312-0.753 c0-0.284,0.111-0.551,0.312-0.751L57.96,20.835c0.293-0.293,0.768-0.293,1.061,0s0.293,0.768,0,1.061l-12.81,12.811l3.02,3.02 l8.369-8.369c0.293-0.293,0.768-0.293,1.061,0s0.293,0.768,0,1.061l-8.679,8.678C49.774,39.302,49.502,39.405,49.23,39.405z"></path><path class="st0" d="M36,48.688c-0.19,0-0.382-0.072-0.528-0.217c-0.294-0.292-0.296-0.767-0.004-1.061l7.188-7.25 c0.29-0.294,0.765-0.297,1.061-0.005c0.294,0.292,0.296,0.767,0.004,1.061l-7.188,7.25C36.386,48.613,36.193,48.688,36,48.688z "></path></g></svg></div></div></div></div></div></div></div>
<div class="node node151 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: right;">
<span style="color: rgb(70, 70, 70);">Наша продукция, всегда только самого высшего качества. В нашей продукции соблюдены абсолютно все стандарты и ГОСТы, подтверждение этому являются сертификаты, которые мы, при желании клиента, можем предоставить в любом виде и формате.</span></p></div></div></div></div></div>
<div class="node node152 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node153 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td text">
<div style="padding-right: 15px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p style="text-align: right;">
<span style="color: rgb(55, 180, 74);">
<span style="font-size: 18px;">САМАЯ НИЗКАЯ ЦЕНА</span></span></p></div>
<div class="cont"></div></div></div>
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg28" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(76, 175, 80); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M59,36.272c0-0.681-0.552-1.234-1.233-1.234c-0.283,0-0.542,0.097-0.75,0.256l-1.677-0.258l-10.582-7.591 c-1.727-1.295-0.65-4.17-0.638-4.198c0.017-0.046,0.013-0.097-0.012-0.139c-0.025-0.043-0.067-0.072-0.116-0.078 c-0.205-0.029-0.414-0.044-0.623-0.044c-2.73,0-4.972,2.45-5.44,2.999c-3.331-1.798-6.968-2.709-10.814-2.709 c-7.663,0-13.635,3.664-13.699,3.703c-2.763,1.828-4.408,4.24-4.886,7.17c-1.141,6.983,4.788,14.679,4.848,14.756 c0.006,0.008,0.015,0.016,0.023,0.023c2.915,2.466,3.403,7.458,3.407,7.508c0.008,0.083,0.078,0.147,0.161,0.147h3.29 c0.074,0,0.138-0.051,0.156-0.122l1.596-6.284c2.827,1.119,5.78,1.687,8.783,1.686c4.535,0,7.856-1.317,8.669-1.672l1.117,6.172 c0.014,0.077,0.081,0.132,0.159,0.132h2.769c0.071,0,0.133-0.046,0.154-0.114l2.053-6.756c4.845-1.579,9.509-6.508,9.889-6.917 l1.453-0.605c0.201,0.144,0.447,0.228,0.712,0.228c0.681,0,1.233-0.553,1.233-1.233V36.272z"></path><circle class="st0" cx="44.92" cy="33.459" r="1.385"></circle><path class="st0" d="M5.538,27.626c-0.336-0.465-0.234-1.113,0.231-1.451c0.463-0.337,1.06-0.191,1.45,0.229 c1.634,1.762,0.808,2.947,0.438,3.533c-0.822,1.302-2.697,1.713-4.123,1.445c-1.29-0.242-2.32-1.531-2.506-3.135 c-0.19-1.648,0.558-3.83,3.23-5.009c1.236-0.546,2.768-0.39,4.201,0.426c1.743,0.993,3.003,2.734,3.208,4.439"></path><path class="st0" d="M37.157,29c0,0-8.837-4.252-15.507-1.25"></path><circle class="st0" cx="29.988" cy="11.761" r="8.343"></circle><path class="st0" d="M32.464,9.049c-0.082-0.688-0.321-1.23-0.717-1.624c-0.308-0.304-0.721-0.489-1.241-0.554h-0.534 c-0.594,0.073-1.045,0.27-1.354,0.59c-0.451,0.476-0.677,1.1-0.677,1.871c0,0.436,0.078,0.823,0.231,1.163 c0.153,0.341,0.374,0.605,0.661,0.794c0.391,0.262,0.77,0.435,1.139,0.516l0.462,0.131c0.369,0.081,0.748,0.254,1.138,0.516 c0.287,0.188,0.507,0.453,0.661,0.794c0.153,0.341,0.23,0.728,0.23,1.164c0,0.771-0.226,1.395-0.676,1.87 c-0.309,0.321-0.76,0.518-1.354,0.591H29.9c-0.52-0.065-0.934-0.25-1.241-0.554c-0.396-0.395-0.636-0.936-0.718-1.624"></path><line class="st0" x1="30.143" y1="17.316" x2="30.143" y2="6.357"></line></g></svg></div></div></div></div></div></div></div>
<div class="node node154 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: right;">
<span style="color: rgb(70, 70, 70);">
<span style="font-size: 16px;">Мы можем Гарантировать самую низкую цену в Украине, так как, прямые поставки с фермы Камчатского Края, дают возможность доставлять на Ваш стол, качественный продукт, по самым низким ценам.</span></span></p></div></div></div></div></div>
<div class="node node155 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node156 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td text">
<div style="padding-right: 15px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p style="text-align: right;">
<span style="color: rgb(55, 180, 74);">
<span style="font-size: 18px;">ОПЫТ РАБОТЫ С 2010 ГОДА</span></span></p></div>
<div class="cont"></div></div></div>
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg29" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(76, 175, 80); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M11.771,37.033c0.996,1.347,2.31,2.979,3.624,4.196c2.678,2.479,7.574,4.706,7.574,4.706 l12.039,7.084c0.696,0.367,1.753,0.232,2.245-0.565c0.411-0.668,0.262-1.527-0.301-2.1l2.523,1.672 c0.794,0.474,2.042,0.384,2.667-0.52c0.424-0.614,0.431-1.4,0.085-2.053c-0.163-0.309-0.702-0.834-0.702-0.834 l1.025,0.583c0.84,0.484,2.149,0.366,2.79-0.591c0.641-0.96,0.323-2.297-0.71-2.988l-0.958-0.629 c0.764,0.207,1.609-0.061,2.096-0.743c0.626-0.877,0.422-2.094-0.837-2.995l-11.2-7.649 c-0.166-0.117-0.972-0.678-1.992-1.336l-1.722-1.458l0.021-0.158c1.272-0.046,3.289-0.047,3.961,0.373 M30.056,26.363 c-2.477-0.186-6.085-1.164-6.969-1.363 M22.969,45.935c0.004,0.002,0.007,0.005,0.011,0.007L22.969,45.935z"></path><path class="st0" d="M37.96,24.729l-1.071,0.366c-0.885,0.2-5.563,1.241-8.04,1.426c-1.737,0.131-2.185,0.674-2.185,0.674 l-3.519,2.407l-0.54,0.434c0,0,1.213,2.519,3.661,0.993c0.672-0.42,2.69-0.419,3.962-0.373 M44.873,41.229 c1.125-1.042,2.25-2.389,3.175-3.6 M15.335,41.257c-1.259,0.901-1.463,2.118-0.837,2.995c0.486,0.682,1.332,0.95,2.096,0.742 l-0.957,0.629c-1.035,0.69-1.352,2.028-0.71,2.988c0.641,0.958,1.949,1.076,2.79,0.591l1.843-1.153l-0.802,0.602 c-0.975,0.672-1.257,1.952-0.632,2.856c0.625,0.904,1.873,0.994,2.667,0.52l2.522-1.672c-0.562,0.573-0.711,1.432-0.3,2.1 c0.491,0.797,1.549,0.932,2.245,0.565l4.926-2.898"></path><path class="st0" d="M1,29.399l9.755,8.202c0.971,0.756,12.465-14.014,11.493-14.768L2.184,6.786"></path><path class="st0" d="M57.893,6.873L38.326,22.526C37.355,23.281,48.849,38.05,49.82,37.294L59,29.533"></path><line class="st0" x1="43.673" y1="44.995" x2="30.882" y2="36.365"></line><line class="st0" x1="41.542" y1="48.653" x2="27.599" y2="39.36"></line><line class="st0" x1="36.935" y1="50.352" x2="24.508" y2="42.086"></line><line class="st0" x1="16.594" y1="44.995" x2="18.671" y2="43.68"></line><line class="st0" x1="19.56" y1="48.05" x2="22.969" y2="45.935"></line><line class="st0" x1="23.314" y1="50.355" x2="26.771" y2="48.2"></line></g></svg></div></div></div></div></div></div></div>
<div class="node node157 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: right;">
<span style="color: rgb(70, 70, 70);">Мы работаем на прямую с крупнейшим поставщиком Икры в Украине с 2010 года. Они, а теперь и Мы, заслужили своё доверие клиентов наивысшими стандартами и высочайшим качеством продукции.</span></p></div></div></div></div></div></div></div>
<div class="col" style="width: 33.3333%;">
<div class="cont">
<div class="node node158 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" style="text-align: center;">
<img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAYAAABr5z2BAAAAG0lEQVQ4T2NkoBAwUqifYdQAhtEwACaigU8HABbaAA1J/bQdAAAAAElFTkSuQmCC" style="width: 460px;" data-lazy-image="img/849011798d8a51a09d161e3cb7115230.png" data-lazy-image_size="460,367" data-lazy-image_detect="css-width"></div><noscript>
<img src="img/x849011798d8a51a09d161e3cb7115230.png.pagespeed.ic.c0qMbRpprH.jpg" alt=""></noscript></div></div></div></div></div>
<div class="col" style="width: 33.3333%;">
<div class="cont">
<div class="node node159 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg30" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(76, 175, 80); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M29.833,56.238c-1.339,0-2.609-0.508-3.575-1.432C23.639,52.704,0.25,33.509,0.25,20.025 c0-9.423,6.839-16.263,16.261-16.263c5.392,0,10.381,2.64,13.422,7.082c3.019-4.418,8.096-7.082,13.552-7.082 c9.425,0,16.266,6.84,16.266,16.263c0,5.321-3.834,12.268-11.396,20.646c-0.277,0.307-0.753,0.331-1.06,0.054 c-0.307-0.277-0.331-0.751-0.054-1.059c7.202-7.98,11.01-14.772,11.01-19.641c0-8.554-6.21-14.763-14.766-14.763 c-4.962,0-9.578,2.42-12.348,6.475l-0.635,0.806c-0.142,0.18-0.358,0.285-0.588,0.285h-0.001c-0.23,0-0.447-0.106-0.589-0.287 l-0.4-0.51c-2.779-4.258-7.405-6.768-12.413-6.768c-8.553,0-14.761,6.209-14.761,14.763c0,13.005,24.454,32.818,25.495,33.655 c1.47,1.396,3.757,1.354,5.127,0.041c0.704-0.571,4.191-3.416,8.408-7.441c0.297-0.285,0.774-0.277,1.06,0.024 c0.286,0.3,0.275,0.774-0.024,1.061c-4.26,4.067-7.79,6.945-8.454,7.481C32.443,55.729,31.174,56.238,29.833,56.238z"></path><path class="st0" d="M57.105,27.857H51.5c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h5.605 c0.414,0,0.75,0.336,0.75,0.75S57.52,27.857,57.105,27.857z"></path><path class="st0" d="M54.838,31.896h-2.421c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h2.421 c0.414,0,0.75,0.336,0.75,0.75S55.252,31.896,54.838,31.896z"></path><path class="st0" d="M27.927,31.896H5.015c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h22.912 c0.414,0,0.75,0.336,0.75,0.75S28.341,31.896,27.927,31.896z"></path><path class="st0" d="M26.827,27.857H2.811c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h24.017 c0.414,0,0.75,0.336,0.75,0.75S27.241,27.857,26.827,27.857z"></path><path class="st0" d="M35.608,47.174c-0.073,0-0.142-0.014-0.205-0.042c-0.277-0.125-0.452-0.407-0.439-0.712l0.062-1.617 l-1.707,1.038c-0.21,0.127-0.47,0.146-0.695,0.044c-0.193-0.086-0.357-0.27-0.423-0.472c-0.145-0.444,0.03-0.748,1.001-2.428 c0.864-1.497,2.171-3.76,3.036-5.93c0.585-1.475,0.859-2.961,0.986-3.949c0.053-0.411,0.436-0.703,0.84-0.648 c0.411,0.053,0.701,0.429,0.648,0.839c-0.139,1.073-0.438,2.691-1.081,4.312c-0.801,2.007-1.938,4.051-2.804,5.558l0.612-0.372 c0.235-0.144,0.532-0.146,0.77-0.006c0.238,0.14,0.38,0.399,0.369,0.676l-0.043,1.122c1.145-1.382,2.854-3.731,3.988-5.993 c0.185-0.369,0.636-0.52,1.006-0.334c0.371,0.186,0.521,0.637,0.334,1.007C41.263,40.465,37.233,47.174,35.608,47.174z"></path><path class="st0" d="M47.5,52.625c-0.233,0-0.456-0.109-0.598-0.297l-3.234-4.273l-1.775,2.729 c-0.126,0.194-0.335,0.319-0.565,0.338c-0.239,0.024-0.482-0.079-0.639-0.25c-0.316-0.345-0.288-0.671-0.104-2.796 c0.194-2.232,0.52-5.967,0.157-8.877c-0.448-3.553-2-6.577-2.016-6.607c-0.046-0.089-0.073-0.186-0.082-0.285 c-0.02-0.247,0.067-0.489,0.244-0.681c0.799-0.865,4.394-0.918,4.43-0.918c0.591,0,1.771,0,2.013,0.76 c0.349,0.637,2.202,4.155,2.907,8.152c0.742,4.208,0.564,11.814-0.111,12.69c-0.129,0.167-0.355,0.295-0.565,0.312 C47.541,52.624,47.521,52.625,47.5,52.625z M43.621,46c0.234,0,0.456,0.11,0.598,0.297l2.851,3.766 c0.191-2.315,0.283-6.833-0.308-10.183c-0.64-3.621-2.329-6.914-2.713-7.629c-0.124-0.02-0.351-0.043-0.73-0.043 c-1.075,0-2.298,0.172-2.953,0.337c0.509,1.13,1.505,3.616,1.865,6.468c0.354,2.842,0.094,6.34-0.105,8.662l0.867-1.333 c0.134-0.205,0.358-0.332,0.603-0.341C43.604,46,43.612,46,43.621,46z"></path><path class="st0" d="M30.702,38.114c-0.426,0-0.845-0.117-1.218-0.344c-0.534-0.326-0.909-0.84-1.056-1.447l-1.994-8.126 c-0.306-1.254,0.467-2.524,1.72-2.833c0.074-0.019,0.151-0.026,0.229-0.021l8.76,0.586c0.414,0.028,0.727,0.385,0.698,0.799 c-0.027,0.413-0.396,0.726-0.798,0.698l-8.625-0.578c-0.396,0.148-0.629,0.573-0.527,0.992l1.995,8.128 c0.053,0.22,0.187,0.404,0.379,0.521c0.164,0.102,0.356,0.139,0.544,0.118l8.192-5c0.355-0.216,0.815-0.104,1.031,0.25 s0.104,0.815-0.25,1.031l-8.308,5.07c-0.065,0.041-0.138,0.07-0.213,0.088C31.077,38.091,30.889,38.114,30.702,38.114z"></path><path class="st0" d="M51.074,32.973c-0.019,0-0.037,0-0.057-0.002l-6.45-0.484c-0.412-0.031-0.723-0.391-0.691-0.804 c0.031-0.414,0.395-0.725,0.805-0.692l6.312,0.474c0.179-0.067,0.328-0.19,0.428-0.355c0.115-0.191,0.148-0.416,0.095-0.633 l-1.993-8.133c-0.101-0.414-0.495-0.68-0.906-0.638l-6.584,4.485c-0.342,0.235-0.808,0.145-1.042-0.197 c-0.233-0.342-0.145-0.809,0.198-1.042l6.714-4.574c0.074-0.051,0.156-0.087,0.244-0.109c1.253-0.307,2.525,0.464,2.833,1.718 l1.992,8.129c0.15,0.604,0.057,1.232-0.266,1.768c-0.324,0.538-0.84,0.917-1.451,1.067 C51.194,32.966,51.135,32.973,51.074,32.973z"></path><path class="st0" d="M39.393,32.997c-0.303,0-0.587-0.184-0.701-0.484l-2.147-5.654c-0.102-0.268-0.042-0.57,0.154-0.779 c1.844-1.97,4.95-1.271,5.082-1.24c0.194,0.045,0.363,0.167,0.468,0.337c0.078,0.126,1.916,3.127,3.08,6.303 c0.143,0.389-0.057,0.82-0.446,0.962c-0.388,0.143-0.819-0.057-0.962-0.446c-0.91-2.483-2.297-4.928-2.778-5.746 c-0.605-0.083-2.017-0.174-3.013,0.557l1.965,5.173c0.147,0.387-0.048,0.82-0.435,0.967 C39.571,32.981,39.481,32.997,39.393,32.997z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 15px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="color: rgb(55, 180, 74);">
<span style="font-size: 18px;">100% НАТУРАЛЬНАЯ ИКРА</span></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node160 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p><span style="color: rgb(70, 70, 70);">
<span style="font-size: 16px;">Заказав у Нас Икру всего 1 раз, вы станете Нашим постоянным клиентом и будете с гордостью и спокойствием рекомендовать Нас своим друзьям и близким. Заказывайте и убедитесь сами!</span></span></p></div></div></div></div></div>
<div class="node node161 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node162 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg31" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(76, 175, 80); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="29.991" cy="15.185" r="8.599"></circle><path class="st0" d="M32.107,12.588c-0.073-0.624-0.291-1.115-0.65-1.473c-0.278-0.275-0.653-0.443-1.126-0.502h-0.483 c-0.539,0.066-0.949,0.245-1.229,0.536c-0.409,0.431-0.612,0.997-0.612,1.696c0,0.395,0.069,0.746,0.208,1.055 c0.139,0.309,0.34,0.549,0.601,0.72c0.353,0.238,0.697,0.395,1.032,0.469l0.418,0.118c0.335,0.074,0.68,0.231,1.033,0.468 c0.261,0.171,0.461,0.412,0.6,0.72c0.14,0.309,0.209,0.661,0.209,1.056c0,0.699-0.204,1.265-0.613,1.696 c-0.28,0.291-0.688,0.469-1.229,0.536h-0.483c-0.472-0.059-0.847-0.227-1.125-0.502c-0.359-0.358-0.577-0.849-0.65-1.473"></path><line class="st0" x1="30.003" y1="20.085" x2="30.003" y2="10.146"></line><path class="st0" d="M11.771,37.233c0.996,1.347,2.309,2.979,3.623,4.196c2.678,2.479,7.574,4.706,7.574,4.706 l12.039,7.084c0.696,0.367,1.754,0.232,2.245-0.565c0.411-0.668,0.262-1.527-0.301-2.1l2.522,1.672 c0.795,0.474,2.043,0.384,2.668-0.52c0.424-0.614,0.431-1.4,0.086-2.053c-0.163-0.309-0.703-0.834-0.703-0.834 l1.025,0.583c0.84,0.484,2.148,0.366,2.79-0.591c0.642-0.96,0.323-2.297-0.71-2.988l-0.957-0.629 c0.764,0.207,1.608-0.061,2.096-0.743c0.625-0.877,0.422-2.094-0.838-2.995l-11.199-7.649 c-0.166-0.117-0.973-0.678-1.992-1.336l-1.722-1.458l0.021-0.158c1.272-0.046,3.289-0.047,3.961,0.373 M30.057,26.563 c-2.478-0.186-6.086-1.164-6.97-1.363 M22.969,46.134c0.004,0.002,0.008,0.005,0.012,0.007L22.969,46.134z"></path><path class="st0" d="M37.96,24.928l-1.071,0.366c-0.885,0.2-5.562,1.241-8.039,1.426c-1.738,0.131-2.186,0.674-2.186,0.674 l-3.52,2.407l-0.539,0.434c0,0,1.213,2.519,3.66,0.993c0.672-0.42,2.69-0.419,3.963-0.373 M44.873,41.429 c1.125-1.042,2.25-2.389,3.174-3.6 M15.336,41.457c-1.26,0.901-1.464,2.118-0.838,2.995c0.486,0.682,1.332,0.95,2.096,0.742 l-0.957,0.629c-1.034,0.69-1.352,2.028-0.71,2.988c0.642,0.958,1.949,1.076,2.79,0.591l1.843-1.153l-0.802,0.602 c-0.976,0.672-1.258,1.952-0.633,2.856s1.873,0.994,2.667,0.52l2.522-1.672c-0.562,0.573-0.711,1.432-0.3,2.1 c0.491,0.797,1.549,0.932,2.245,0.565l4.926-2.898"></path><path class="st0" d="M1,29.599l9.755,8.202c0.972,0.756,12.465-14.014,11.493-14.768L2.184,6.986"></path><path class="st0" d="M57.893,7.073L38.326,22.726C37.355,23.48,48.85,38.25,49.82,37.494L59,29.733"></path><line class="st0" x1="43.674" y1="45.195" x2="30.882" y2="36.564"></line><line class="st0" x1="41.543" y1="48.853" x2="27.6" y2="39.56"></line><line class="st0" x1="36.935" y1="50.551" x2="24.508" y2="42.286"></line><line class="st0" x1="16.594" y1="45.194" x2="18.671" y2="43.879"></line><line class="st0" x1="19.56" y1="48.25" x2="22.969" y2="46.135"></line><line class="st0" x1="23.314" y1="50.555" x2="26.771" y2="48.4"></line></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 15px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="color: rgb(55, 180, 74);">
<span style="font-size: 18px;">БЕЗ ПРЕДОПЛАТЫ</span></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node163 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="line-height: 1.6;">
<span style="color: rgb(70, 70, 70);">Мы работаем без какой либо предоплаты. Вы оплачиваете товар, только после того как возьмете его в руки и полностью убедитесь в его качестве. Проверить качество Вы можете при получении товара курьером или на отделении новой почты.</span></p></div></div></div></div></div>
<div class="node node164 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node165 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg32" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(76, 175, 80); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st20" d="M10.91,46.925c-1.649-0.702-3.723-0.306-5.172,1.143c-2.77,2.77-2.544,8.706-2.544,8.706 s5.98,0.179,8.705-2.545c1.447-1.448,1.845-3.519,1.145-5.168"></path><path class="st20" d="M34.645,38.156l1.546,7.465c0,0,0.687,1.856-1.631,3.192c-2.316,1.335-13.685,8.743-13.685,8.743 l2.328-10.717"></path><path class="st20" d="M21.788,25.355l-7.392-1.529c0,0-1.856-0.684-3.191,1.631c-1.336,2.316-8.743,13.685-8.743,13.685 l10.781-2.34"></path><path class="st20" d="M16.088,49.972c0.477,0.478,1.184,0.548,1.577,0.156l2.136-2.135"></path><path class="st20" d="M12.085,40.325l-2.111,2.111c-0.393,0.393-0.322,1.1,0.155,1.578"></path><path class="st20" d="M32.866,10.62c0,0,0.284-0.318,0.438-0.474C44.812-1.361,56.621,3.42,56.621,3.42 s5.101,11.489-6.727,23.316c-0.145,0.145-0.442,0.411-0.442,0.411"></path><path class="st20" d="M11.962,38.54c-0.423,0.553-0.445,1.169,0,1.613l7.926,7.925c0.445,0.445,1.053,0.444,1.613-0.001 l27.988-20.985c0,0-1.805-3.501-7.423-9.119c-4.938-4.937-9.117-7.421-9.117-7.421L11.962,38.54z"></path><path class="st20" d="M31.554,22.334c1.811-1.812,4.762-1.812,6.575,0c1.813,1.814,1.813,4.765,0,6.578 c-1.813,1.814-4.765,1.814-6.575,0C29.739,27.099,29.739,24.149,31.554,22.334z"></path><path class="st20" d="M25.108,30.954c1.213-1.211,3.188-1.211,4.401,0c1.213,1.214,1.213,3.188,0,4.401 c-1.213,1.214-3.188,1.214-4.401,0C23.896,34.143,23.896,32.168,25.108,30.954z"></path><ellipse transform="matrix(-0.7076 -0.7066 0.7066 -0.7076 94.5201 45.7353)" class="st20" cx="56.723" cy="3.311" rx="1.025" ry="0.952"></ellipse></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 15px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="color: rgb(55, 180, 74);">
<span style="font-size: 18px;">БЫСТРАЯ ДОСТАВКА</span></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node166 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p><span style="color: rgb(70, 70, 70);">Доставка за 1 день в любую точку Украины. Мы можем Гарантировать самую быструю доставку по всей Украине благодаря тому, что Наша компания является официальным партнером Новой Почты. Наши заказы обрабатываются и доставляются в кратчайшие сроки.</span></p></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node170 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node171 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам в ближайшее время и ответит на все интересующие Вас вопросы!</span></span></span></p></div></div></div></div></div>
<div class="node node172 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid33" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid34">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1.4;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам в ближайшее время!&nbsp;</span></span></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid5" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div><br>
<input type="hidden" name="hid" value="Заявка на обратный звонок">
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn submit" id="uid35"><span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="agreement">Политика конфиденциальности</div></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<script class="adaptive">if(["md","lg"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node178 section section-clear md-hidden lg-hidden" id="онас" data-opacity="0.95">
<div class="wrapper1">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node179 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-scale-80 sm-scale-80">
<h2 class="font-header spans xs-force-center textable">
<span style="font-size: 34px; text-align: center; line-height: 1.2;" class="p">
<span style="font-size: 26px;">
<span style="color: rgb(70, 70, 70);">
<span style="font-family: &quot;Open Sans&quot;;">НАШИ</span></span></span></span>
<span style="font-size: 34px; text-align: center; line-height: 1.2;" class="p">
<span style="font-size: 26px;">
<span style="color: rgb(238, 29, 36);">
<span style="font-family: &quot;Open Sans&quot;;">ПРЕИМУЩЕСТВА</span></span></span></span></h2></div></div></div></div>
<div class="node node180 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(98, 98, 98);">
<span style="font-family: &quot;TTNorms Medium&quot;;">Чем мы отличаемся от остальных</span></span></span></p></div></div></div></div></div>
<div class="node node181 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(98, 98, 98);">
<span style="font-family: &quot;TTNorms Medium&quot;;">Вы можете открыть Икру при получении на почте или при доставке курьером и проверить её качество.</span></span></span></p></div></div></div></div></div>
<div class="node node182 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" style="text-align: center;">
<div class="svgwrap" style="max-width: 64px;">
<img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII="><svg class="svgicon" id="svg201" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(229, 56, 53); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M50.439,32.397c0.311,1.431,0.473,2.914,0.473,4.437c0,11.542-9.35,20.895-20.889,20.895 c-11.538,0-20.89-9.353-20.89-20.895c0-1.51,0.162-2.984,0.465-4.404"></path><path class="st0" d="M36.964,38.793c0,0.462-0.354,0.84-0.795,0.84c-0.434,0-0.79-0.377-0.79-0.84 c0-0.463,0.356-0.838,0.79-0.838C36.61,37.955,36.964,38.33,36.964,38.793z"></path><ellipse class="st0" cx="24.24" cy="38.793" rx="0.794" ry="0.84"></ellipse><path class="st0" d="M25.547,32.7c-7.8,3.526-16.413,4.134-16.413,4.134"></path><line class="st0" x1="50.912" y1="36.833" x2="46.041" y2="32.45"></line><path class="st0" d="M50.439,32.397L59,22.383L48.596,9.893L30.023,2.272l-18.897,7.82L1,22.388L9.599,32.43 C11.905,24.516,49.132,24.329,50.439,32.397z"></path><path class="st0" d="M35.429,12.135c0.812-1.193-0.037-3.221-1.925-2.551c-1.826,0.649-3.84-0.736-3.93-0.793V8.784l-0.008-0.003 l0,0l0,0l0,0l0,0l-0.008,0.003V8.79c-0.089,0.058-2.104,1.442-3.931,0.793c-1.886-0.67-2.738,1.358-1.926,2.551 c0.883,1.298,1.029,1.934,1.029,2.187c-0.004,0.684-2.54,2.142-0.56,5.367c0.735,1.194,1.229,1.027,3.979,1.293l1.416,1.272l0,0 l1.415-1.272c2.752-0.266,3.244-0.099,3.979-1.293c1.98-3.225-0.554-4.683-0.56-5.367C34.4,14.068,34.547,13.433,35.429,12.135z"></path><line class="st0" x1="50.439" y1="32.43" x2="9.599" y2="32.43"></line></g></svg></div></div><noscript>
<img src="img/x10--black.png.pagespeed.ic.4nCs-2h2xz.png" alt=""></noscript></div></div></div>
<div class="node node183 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 18px;">
<span style="color: rgb(98, 98, 98);">
<span style="font-family: &quot;TTNorms Medium&quot;;">ЖИВЫЕ ОТЗЫВЫ</span></span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(98, 98, 98);">
<span style="font-family: &quot;TTNorms Medium&quot;;">Смотрите отзывы Наших клиентов</span></span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(98, 98, 98);">
<span style="font-family: &quot;TTNorms Medium&quot;;"></span></span></span></p></div></div></div></div></div>
<div class="node node184 widget widget-button wow bounceIn" data-wow-delay="0.3s">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#отзывы" target="_self">
<button class="btn" id="uid202" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">СМОТРЕТЬ ОТЗЫВЫ</span></button></a></div></div></div></div></div>
<div class="node node186 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node187 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 33.3333%;">
<div class="cont">
<div class="node node188 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td text">
<div style="padding-right: 15px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p style="text-align: right;">
<span style="font-size: 16px;">
<span style="color: rgb(55, 180, 74);">СЕРТИФИЦИРОВАНАЯ ПРОДУКЦИЯ</span></span></p></div>
<div class="cont"></div></div></div>
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg203" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(76, 175, 80); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M49.76,59.75H4.902c-2.086,0-3.782-1.697-3.782-3.783V4.032c0-2.085,1.696-3.782,3.782-3.782H49.76 c2.086,0,3.783,1.696,3.783,3.782V27c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V4.032 c0-1.258-1.024-2.282-2.283-2.282H4.902c-1.259,0-2.282,1.023-2.282,2.282v51.936c0,1.259,1.023,2.283,2.282,2.283H49.76 c1.259,0,2.283-1.024,2.283-2.283v-20.78c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v20.78 C53.543,58.053,51.846,59.75,49.76,59.75z"></path><path class="st0" d="M46.102,23.563H8.312c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h37.789 c0.414,0,0.75,0.336,0.75,0.75S46.516,23.563,46.102,23.563z"></path><path class="st0" d="M46.102,29.499H8.312c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h37.789 c0.414,0,0.75,0.336,0.75,0.75S46.516,29.499,46.102,29.499z"></path><path class="st0" d="M37,35.434H17.414c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75H37 c0.414,0,0.75,0.336,0.75,0.75S37.414,35.434,37,35.434z"></path><path class="st0" d="M48.251,17.833c-0.09,0-0.181-0.016-0.269-0.05c-0.044-0.017-4.515-1.725-9.557-3.198 c-0.32-0.093-0.54-0.387-0.54-0.72v-1.687c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v1.126 c2.643,0.787,5.09,1.62,6.784,2.22l-0.732-0.995c-0.125-0.169-0.173-0.383-0.132-0.59 c0.04-0.207,0.166-0.386,0.347-0.496l0.903-0.549c-0.972-0.363-2.387-0.874-4.064-1.426 c-0.394-0.129-0.607-0.553-0.479-0.947c0.13-0.393,0.55-0.606,0.947-0.478c3.258,1.072,5.549,1.995,5.572,2.004 c0.263,0.106,0.443,0.352,0.466,0.635c0.023,0.283-0.115,0.555-0.358,0.702L47.132,14.3l1.723,2.337 c0.198,0.268,0.195,0.634-0.007,0.899C48.703,17.727,48.48,17.833,48.251,17.833z"></path><path class="st0" d="M6.394,17.833c-0.229,0-0.452-0.105-0.597-0.295c-0.202-0.265-0.205-0.631-0.007-0.899L7.513,14.3 l-1.508-0.916c-0.245-0.148-0.384-0.423-0.358-0.708s0.21-0.53,0.477-0.633c0.023-0.009,2.38-0.917,5.587-1.973 c0.39-0.128,0.817,0.084,0.946,0.478c0.13,0.394-0.084,0.817-0.478,0.947c-1.658,0.546-3.085,1.051-4.071,1.411 l0.885,0.537c0.181,0.109,0.307,0.289,0.347,0.496c0.041,0.207-0.007,0.421-0.132,0.59l-0.732,0.994 c1.694-0.601,4.14-1.433,6.781-2.22v-1.139c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v1.699 c0,0.333-0.22,0.626-0.54,0.72c-5.042,1.474-9.509,3.181-9.554,3.198C6.574,17.816,6.483,17.833,6.394,17.833z"></path><path class="st0" d="M11.986,13.777c-0.165,0-0.327-0.055-0.46-0.158c-0.184-0.142-0.29-0.361-0.29-0.592v-4.34 c0-0.342,0.232-0.642,0.563-0.727c0.35-0.089,8.634-2.192,15.544-2.192c6.906,0,15.112,2.104,15.458,2.193 c0.331,0.085,0.562,0.384,0.562,0.726v4.34c0,0.232-0.107,0.451-0.29,0.593c-0.184,0.142-0.423,0.189-0.646,0.134 c-0.084-0.021-8.435-2.147-15.084-2.147c-6.654,0-15.088,2.126-15.173,2.148C12.11,13.77,12.048,13.777,11.986,13.777z M12.736,9.276v2.799c2.416-0.562,9.013-1.968,14.607-1.968c5.585,0,12.118,1.402,14.521,1.966V9.275 c-1.98-0.475-8.818-2.007-14.521-2.007C21.63,7.268,14.73,8.802,12.736,9.276z"></path><path class="st0" d="M44.399,51.221h-20.99c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h20.99 c0.414,0,0.75,0.336,0.75,0.75S44.813,51.221,44.399,51.221z"></path><path class="st0" d="M25.005,49.208c-0.307,0-0.613-0.078-0.886-0.226c-0.953-0.521-1.287-1.743-1.322-1.881 c-0.103-0.401,0.141-0.81,0.542-0.912c0.396-0.1,0.81,0.14,0.911,0.542c0.059,0.224,0.286,0.77,0.586,0.933 c0.088,0.048,0.187,0.057,0.299,0.022c0.483-0.154,0.608-0.557,0.758-1.202c0.125-0.551,0.297-1.311,1.117-1.397 c0.783-0.081,1.309,0.75,1.812,1.686c0.153,0.28,0.346,0.633,0.441,0.701c0.241,0.122,1.02-0.143,1.271-0.572 c0.219-0.363,0.487-0.575,0.804-0.639c0.596-0.124,1.191,0.312,1.714,0.693c0.21,0.153,0.391,0.287,0.568,0.386 c0.339,0.189,0.8,0.174,1.242,0.13c0.403-0.051,0.78,0.259,0.821,0.671s-0.259,0.78-0.671,0.821 c-0.653,0.066-1.42,0.081-2.124-0.313c-0.228-0.127-0.459-0.293-0.687-0.458c-0.136-0.099-0.336-0.245-0.498-0.346 c-0.729,0.969-2.188,1.432-3.118,0.964c-0.493-0.244-0.753-0.721-1.082-1.324c-0.082-0.151-0.153-0.279-0.217-0.388 c-0.175,0.678-0.538,1.647-1.698,2.017C25.396,49.178,25.2,49.208,25.005,49.208z"></path><path class="st0" d="M12.395,52.754c-0.133,0-0.266-0.035-0.384-0.106l-1.216-0.724H9.379 c-0.269,0-0.517-0.144-0.65-0.376l-0.749-1.302l-1.292-0.77c-0.23-0.137-0.369-0.386-0.366-0.654l0.018-1.415 l-0.706-1.225c-0.134-0.232-0.134-0.518,0-0.75l0.752-1.303l0.021-1.504c0.004-0.268,0.15-0.514,0.384-0.645l1.236-0.691 l0.703-1.222c0.134-0.232,0.382-0.376,0.65-0.376h1.507l1.313-0.735c0.235-0.13,0.521-0.127,0.751,0.011l1.213,0.724 h1.415c0.269,0,0.517,0.144,0.65,0.376l0.748,1.302l1.294,0.77c0.23,0.137,0.37,0.387,0.366,0.655l-0.021,1.413 l0.708,1.224c0.134,0.232,0.134,0.518,0,0.75l-0.751,1.302l-0.023,1.507c-0.004,0.267-0.15,0.512-0.383,0.643 l-1.232,0.691l-0.707,1.224c-0.134,0.232-0.382,0.375-0.649,0.375h-1.507l-1.311,0.734 C12.647,52.722,12.521,52.754,12.395,52.754z M9.812,50.424h1.189c0.135,0,0.268,0.037,0.384,0.106l1.021,0.608 l1.104-0.618c0.111-0.063,0.238-0.096,0.366-0.096h1.27l0.594-1.027c0.067-0.117,0.165-0.213,0.282-0.279l1.035-0.58 l0.02-1.27c0.002-0.127,0.036-0.252,0.101-0.363l0.632-1.095l-0.595-1.028c-0.067-0.117-0.103-0.251-0.101-0.386 l0.018-1.187l-1.09-0.648c-0.11-0.066-0.202-0.159-0.267-0.271l-0.63-1.096h-1.188c-0.136,0-0.269-0.037-0.385-0.106 l-1.019-0.608l-1.105,0.619c-0.112,0.062-0.238,0.095-0.366,0.095H9.812l-0.59,1.025 c-0.068,0.118-0.166,0.214-0.284,0.281L7.899,43.08l-0.018,1.267c-0.002,0.128-0.036,0.254-0.101,0.365l-0.633,1.097 l0.593,1.028c0.067,0.117,0.103,0.25,0.101,0.384l-0.015,1.188l1.089,0.648c0.11,0.066,0.202,0.159,0.267,0.271 L9.812,50.424z"></path><path class="st0" d="M36.222,48.768c-0.537,0-1.015-0.448-1.065-0.999c-0.009-0.095,0.001-0.19,0.028-0.281l2.775-9.37 c0.094-0.327,0.375-0.621,0.548-0.776c0.007-0.007,0.015-0.014,0.022-0.021c0.069-0.061,0.115-0.095,0.117-0.097l0.006,0.009 c0.399-0.253,1.652-0.867,6.265-3.109c0.374-0.181,0.822-0.025,1.003,0.347c0.181,0.373,0.025,0.821-0.347,1.002 c-2.176,1.057-5.712,2.786-6.102,3.003c-0.005,0.003-0.01,0.006-0.015,0.01c0.001,0,0.002-0.001,0.002-0.001 c0.01,0-0.041,0.062-0.077,0.109l-2.502,8.445l8.442-2.503c0.041-0.031,0.095-0.078,0.132-0.113 c0.278-0.547,1.883-4.017,2.873-6.172c0.173-0.377,0.622-0.539,0.995-0.369c0.376,0.173,0.541,0.618,0.368,0.995 c-2.217,4.824-2.778,6.039-3.017,6.412l0.008,0.005c-0.004,0.006-0.407,0.529-0.88,0.664v0l-9.368,2.777 C36.365,48.758,36.294,48.768,36.222,48.768z"></path><path class="st0" d="M49.01,39.315c-0.192,0-0.384-0.073-0.53-0.22l-1.821-1.822c-0.146-0.146-0.22-0.338-0.22-0.53 c0-0.192,0.073-0.384,0.22-0.53c0.294-0.294,0.769-0.292,1.061,0l1.821,1.822c0.146,0.146,0.22,0.338,0.22,0.53 c0,0.192-0.073,0.384-0.22,0.53C49.394,39.242,49.201,39.315,49.01,39.315z"></path><path class="st0" d="M49.23,39.405c-0.271,0-0.541-0.102-0.748-0.306l-3.641-3.641c-0.201-0.201-0.312-0.469-0.312-0.753 c0-0.284,0.111-0.551,0.312-0.751L57.96,20.835c0.293-0.293,0.768-0.293,1.061,0s0.293,0.768,0,1.061l-12.81,12.811l3.02,3.02 l8.369-8.369c0.293-0.293,0.768-0.293,1.061,0s0.293,0.768,0,1.061l-8.679,8.678C49.774,39.302,49.502,39.405,49.23,39.405z"></path><path class="st0" d="M36,48.688c-0.19,0-0.382-0.072-0.528-0.217c-0.294-0.292-0.296-0.767-0.004-1.061l7.188-7.25 c0.29-0.294,0.765-0.297,1.061-0.005c0.294,0.292,0.296,0.767,0.004,1.061l-7.188,7.25C36.386,48.613,36.193,48.688,36,48.688z "></path></g></svg></div></div></div></div></div></div></div>
<div class="node node189 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p><span style="color: rgb(70, 70, 70);">Наша продукция, всегда только самого высшего качества. В нашей продукции соблюдены абсолютно все стандарты и ГОСТы, подтверждение этому являются сертификаты, которые мы, при желании клиента, можем предоставить в любом виде и формате.</span></p></div></div></div></div></div>
<div class="node node190 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node191 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td text">
<div style="padding-right: 15px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p style="text-align: right;">
<span style="font-size: 16px;">
<span style="color: rgb(55, 180, 74);">САМАЯ НИЗКАЯ ЦЕНА</span></span></p></div>
<div class="cont"></div></div></div>
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg204" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(76, 175, 80); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M59,36.272c0-0.681-0.552-1.234-1.233-1.234c-0.283,0-0.542,0.097-0.75,0.256l-1.677-0.258l-10.582-7.591 c-1.727-1.295-0.65-4.17-0.638-4.198c0.017-0.046,0.013-0.097-0.012-0.139c-0.025-0.043-0.067-0.072-0.116-0.078 c-0.205-0.029-0.414-0.044-0.623-0.044c-2.73,0-4.972,2.45-5.44,2.999c-3.331-1.798-6.968-2.709-10.814-2.709 c-7.663,0-13.635,3.664-13.699,3.703c-2.763,1.828-4.408,4.24-4.886,7.17c-1.141,6.983,4.788,14.679,4.848,14.756 c0.006,0.008,0.015,0.016,0.023,0.023c2.915,2.466,3.403,7.458,3.407,7.508c0.008,0.083,0.078,0.147,0.161,0.147h3.29 c0.074,0,0.138-0.051,0.156-0.122l1.596-6.284c2.827,1.119,5.78,1.687,8.783,1.686c4.535,0,7.856-1.317,8.669-1.672l1.117,6.172 c0.014,0.077,0.081,0.132,0.159,0.132h2.769c0.071,0,0.133-0.046,0.154-0.114l2.053-6.756c4.845-1.579,9.509-6.508,9.889-6.917 l1.453-0.605c0.201,0.144,0.447,0.228,0.712,0.228c0.681,0,1.233-0.553,1.233-1.233V36.272z"></path><circle class="st0" cx="44.92" cy="33.459" r="1.385"></circle><path class="st0" d="M5.538,27.626c-0.336-0.465-0.234-1.113,0.231-1.451c0.463-0.337,1.06-0.191,1.45,0.229 c1.634,1.762,0.808,2.947,0.438,3.533c-0.822,1.302-2.697,1.713-4.123,1.445c-1.29-0.242-2.32-1.531-2.506-3.135 c-0.19-1.648,0.558-3.83,3.23-5.009c1.236-0.546,2.768-0.39,4.201,0.426c1.743,0.993,3.003,2.734,3.208,4.439"></path><path class="st0" d="M37.157,29c0,0-8.837-4.252-15.507-1.25"></path><circle class="st0" cx="29.988" cy="11.761" r="8.343"></circle><path class="st0" d="M32.464,9.049c-0.082-0.688-0.321-1.23-0.717-1.624c-0.308-0.304-0.721-0.489-1.241-0.554h-0.534 c-0.594,0.073-1.045,0.27-1.354,0.59c-0.451,0.476-0.677,1.1-0.677,1.871c0,0.436,0.078,0.823,0.231,1.163 c0.153,0.341,0.374,0.605,0.661,0.794c0.391,0.262,0.77,0.435,1.139,0.516l0.462,0.131c0.369,0.081,0.748,0.254,1.138,0.516 c0.287,0.188,0.507,0.453,0.661,0.794c0.153,0.341,0.23,0.728,0.23,1.164c0,0.771-0.226,1.395-0.676,1.87 c-0.309,0.321-0.76,0.518-1.354,0.591H29.9c-0.52-0.065-0.934-0.25-1.241-0.554c-0.396-0.395-0.636-0.936-0.718-1.624"></path><line class="st0" x1="30.143" y1="17.316" x2="30.143" y2="6.357"></line></g></svg></div></div></div></div></div></div></div>
<div class="node node192 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p><span style="color: rgb(70, 70, 70);">
<span style="font-size: 16px;">Мы можем Гарантировать самую низкую цену в Украине, так как, прямые поставки с фермы Камчатского Края, дают возможность доставлять на Ваш стол, качественный продукт, по самым низким ценам.</span></span></p></div></div></div></div></div>
<div class="node node193 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node194 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td text">
<div style="padding-right: 15px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p style="text-align: right;">
<span style="font-size: 16px;">
<span style="color: rgb(55, 180, 74);">ОПЫТ РАБОТЫ С 2010 ГОДА</span></span></p></div>
<div class="cont"></div></div></div>
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg205" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(76, 175, 80); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M11.771,37.033c0.996,1.347,2.31,2.979,3.624,4.196c2.678,2.479,7.574,4.706,7.574,4.706 l12.039,7.084c0.696,0.367,1.753,0.232,2.245-0.565c0.411-0.668,0.262-1.527-0.301-2.1l2.523,1.672 c0.794,0.474,2.042,0.384,2.667-0.52c0.424-0.614,0.431-1.4,0.085-2.053c-0.163-0.309-0.702-0.834-0.702-0.834 l1.025,0.583c0.84,0.484,2.149,0.366,2.79-0.591c0.641-0.96,0.323-2.297-0.71-2.988l-0.958-0.629 c0.764,0.207,1.609-0.061,2.096-0.743c0.626-0.877,0.422-2.094-0.837-2.995l-11.2-7.649 c-0.166-0.117-0.972-0.678-1.992-1.336l-1.722-1.458l0.021-0.158c1.272-0.046,3.289-0.047,3.961,0.373 M30.056,26.363 c-2.477-0.186-6.085-1.164-6.969-1.363 M22.969,45.935c0.004,0.002,0.007,0.005,0.011,0.007L22.969,45.935z"></path><path class="st0" d="M37.96,24.729l-1.071,0.366c-0.885,0.2-5.563,1.241-8.04,1.426c-1.737,0.131-2.185,0.674-2.185,0.674 l-3.519,2.407l-0.54,0.434c0,0,1.213,2.519,3.661,0.993c0.672-0.42,2.69-0.419,3.962-0.373 M44.873,41.229 c1.125-1.042,2.25-2.389,3.175-3.6 M15.335,41.257c-1.259,0.901-1.463,2.118-0.837,2.995c0.486,0.682,1.332,0.95,2.096,0.742 l-0.957,0.629c-1.035,0.69-1.352,2.028-0.71,2.988c0.641,0.958,1.949,1.076,2.79,0.591l1.843-1.153l-0.802,0.602 c-0.975,0.672-1.257,1.952-0.632,2.856c0.625,0.904,1.873,0.994,2.667,0.52l2.522-1.672c-0.562,0.573-0.711,1.432-0.3,2.1 c0.491,0.797,1.549,0.932,2.245,0.565l4.926-2.898"></path><path class="st0" d="M1,29.399l9.755,8.202c0.971,0.756,12.465-14.014,11.493-14.768L2.184,6.786"></path><path class="st0" d="M57.893,6.873L38.326,22.526C37.355,23.281,48.849,38.05,49.82,37.294L59,29.533"></path><line class="st0" x1="43.673" y1="44.995" x2="30.882" y2="36.365"></line><line class="st0" x1="41.542" y1="48.653" x2="27.599" y2="39.36"></line><line class="st0" x1="36.935" y1="50.352" x2="24.508" y2="42.086"></line><line class="st0" x1="16.594" y1="44.995" x2="18.671" y2="43.68"></line><line class="st0" x1="19.56" y1="48.05" x2="22.969" y2="45.935"></line><line class="st0" x1="23.314" y1="50.355" x2="26.771" y2="48.2"></line></g></svg></div></div></div></div></div></div></div>
<div class="node node195 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p><span style="color: rgb(70, 70, 70);">Мы работаем на прямую с крупнейшим поставщиком Икры в Украине с 2010 года. Они, а теперь и Мы, заслужили своё доверие клиентов наивысшими стандартами и высочайшим качеством продукции.</span></p></div></div></div></div></div></div></div>
<div class="col" style="width: 33.3333%;">
<div class="cont">
<div class="node node196 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" style="text-align: center;">
<img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAYAAABr5z2BAAAAG0lEQVQ4T2NkoBAwUqifYdQAhtEwACaigU8HABbaAA1J/bQdAAAAAElFTkSuQmCC" style="width: 460px;" data-lazy-image="img/849011798d8a51a09d161e3cb7115230.png" data-lazy-image_size="460,367" data-lazy-image_detect="css-width"></div><noscript>
<img src="img/x849011798d8a51a09d161e3cb7115230.png.pagespeed.ic.c0qMbRpprH.jpg" alt=""></noscript></div></div></div></div></div>
<div class="col" style="width: 33.3333%;">
<div class="cont">
<div class="node node197 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg206" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(76, 175, 80); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st0" d="M29.833,56.238c-1.339,0-2.609-0.508-3.575-1.432C23.639,52.704,0.25,33.509,0.25,20.025 c0-9.423,6.839-16.263,16.261-16.263c5.392,0,10.381,2.64,13.422,7.082c3.019-4.418,8.096-7.082,13.552-7.082 c9.425,0,16.266,6.84,16.266,16.263c0,5.321-3.834,12.268-11.396,20.646c-0.277,0.307-0.753,0.331-1.06,0.054 c-0.307-0.277-0.331-0.751-0.054-1.059c7.202-7.98,11.01-14.772,11.01-19.641c0-8.554-6.21-14.763-14.766-14.763 c-4.962,0-9.578,2.42-12.348,6.475l-0.635,0.806c-0.142,0.18-0.358,0.285-0.588,0.285h-0.001c-0.23,0-0.447-0.106-0.589-0.287 l-0.4-0.51c-2.779-4.258-7.405-6.768-12.413-6.768c-8.553,0-14.761,6.209-14.761,14.763c0,13.005,24.454,32.818,25.495,33.655 c1.47,1.396,3.757,1.354,5.127,0.041c0.704-0.571,4.191-3.416,8.408-7.441c0.297-0.285,0.774-0.277,1.06,0.024 c0.286,0.3,0.275,0.774-0.024,1.061c-4.26,4.067-7.79,6.945-8.454,7.481C32.443,55.729,31.174,56.238,29.833,56.238z"></path><path class="st0" d="M57.105,27.857H51.5c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h5.605 c0.414,0,0.75,0.336,0.75,0.75S57.52,27.857,57.105,27.857z"></path><path class="st0" d="M54.838,31.896h-2.421c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h2.421 c0.414,0,0.75,0.336,0.75,0.75S55.252,31.896,54.838,31.896z"></path><path class="st0" d="M27.927,31.896H5.015c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h22.912 c0.414,0,0.75,0.336,0.75,0.75S28.341,31.896,27.927,31.896z"></path><path class="st0" d="M26.827,27.857H2.811c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h24.017 c0.414,0,0.75,0.336,0.75,0.75S27.241,27.857,26.827,27.857z"></path><path class="st0" d="M35.608,47.174c-0.073,0-0.142-0.014-0.205-0.042c-0.277-0.125-0.452-0.407-0.439-0.712l0.062-1.617 l-1.707,1.038c-0.21,0.127-0.47,0.146-0.695,0.044c-0.193-0.086-0.357-0.27-0.423-0.472c-0.145-0.444,0.03-0.748,1.001-2.428 c0.864-1.497,2.171-3.76,3.036-5.93c0.585-1.475,0.859-2.961,0.986-3.949c0.053-0.411,0.436-0.703,0.84-0.648 c0.411,0.053,0.701,0.429,0.648,0.839c-0.139,1.073-0.438,2.691-1.081,4.312c-0.801,2.007-1.938,4.051-2.804,5.558l0.612-0.372 c0.235-0.144,0.532-0.146,0.77-0.006c0.238,0.14,0.38,0.399,0.369,0.676l-0.043,1.122c1.145-1.382,2.854-3.731,3.988-5.993 c0.185-0.369,0.636-0.52,1.006-0.334c0.371,0.186,0.521,0.637,0.334,1.007C41.263,40.465,37.233,47.174,35.608,47.174z"></path><path class="st0" d="M47.5,52.625c-0.233,0-0.456-0.109-0.598-0.297l-3.234-4.273l-1.775,2.729 c-0.126,0.194-0.335,0.319-0.565,0.338c-0.239,0.024-0.482-0.079-0.639-0.25c-0.316-0.345-0.288-0.671-0.104-2.796 c0.194-2.232,0.52-5.967,0.157-8.877c-0.448-3.553-2-6.577-2.016-6.607c-0.046-0.089-0.073-0.186-0.082-0.285 c-0.02-0.247,0.067-0.489,0.244-0.681c0.799-0.865,4.394-0.918,4.43-0.918c0.591,0,1.771,0,2.013,0.76 c0.349,0.637,2.202,4.155,2.907,8.152c0.742,4.208,0.564,11.814-0.111,12.69c-0.129,0.167-0.355,0.295-0.565,0.312 C47.541,52.624,47.521,52.625,47.5,52.625z M43.621,46c0.234,0,0.456,0.11,0.598,0.297l2.851,3.766 c0.191-2.315,0.283-6.833-0.308-10.183c-0.64-3.621-2.329-6.914-2.713-7.629c-0.124-0.02-0.351-0.043-0.73-0.043 c-1.075,0-2.298,0.172-2.953,0.337c0.509,1.13,1.505,3.616,1.865,6.468c0.354,2.842,0.094,6.34-0.105,8.662l0.867-1.333 c0.134-0.205,0.358-0.332,0.603-0.341C43.604,46,43.612,46,43.621,46z"></path><path class="st0" d="M30.702,38.114c-0.426,0-0.845-0.117-1.218-0.344c-0.534-0.326-0.909-0.84-1.056-1.447l-1.994-8.126 c-0.306-1.254,0.467-2.524,1.72-2.833c0.074-0.019,0.151-0.026,0.229-0.021l8.76,0.586c0.414,0.028,0.727,0.385,0.698,0.799 c-0.027,0.413-0.396,0.726-0.798,0.698l-8.625-0.578c-0.396,0.148-0.629,0.573-0.527,0.992l1.995,8.128 c0.053,0.22,0.187,0.404,0.379,0.521c0.164,0.102,0.356,0.139,0.544,0.118l8.192-5c0.355-0.216,0.815-0.104,1.031,0.25 s0.104,0.815-0.25,1.031l-8.308,5.07c-0.065,0.041-0.138,0.07-0.213,0.088C31.077,38.091,30.889,38.114,30.702,38.114z"></path><path class="st0" d="M51.074,32.973c-0.019,0-0.037,0-0.057-0.002l-6.45-0.484c-0.412-0.031-0.723-0.391-0.691-0.804 c0.031-0.414,0.395-0.725,0.805-0.692l6.312,0.474c0.179-0.067,0.328-0.19,0.428-0.355c0.115-0.191,0.148-0.416,0.095-0.633 l-1.993-8.133c-0.101-0.414-0.495-0.68-0.906-0.638l-6.584,4.485c-0.342,0.235-0.808,0.145-1.042-0.197 c-0.233-0.342-0.145-0.809,0.198-1.042l6.714-4.574c0.074-0.051,0.156-0.087,0.244-0.109c1.253-0.307,2.525,0.464,2.833,1.718 l1.992,8.129c0.15,0.604,0.057,1.232-0.266,1.768c-0.324,0.538-0.84,0.917-1.451,1.067 C51.194,32.966,51.135,32.973,51.074,32.973z"></path><path class="st0" d="M39.393,32.997c-0.303,0-0.587-0.184-0.701-0.484l-2.147-5.654c-0.102-0.268-0.042-0.57,0.154-0.779 c1.844-1.97,4.95-1.271,5.082-1.24c0.194,0.045,0.363,0.167,0.468,0.337c0.078,0.126,1.916,3.127,3.08,6.303 c0.143,0.389-0.057,0.82-0.446,0.962c-0.388,0.143-0.819-0.057-0.962-0.446c-0.91-2.483-2.297-4.928-2.778-5.746 c-0.605-0.083-2.017-0.174-3.013,0.557l1.965,5.173c0.147,0.387-0.048,0.82-0.435,0.967 C39.571,32.981,39.481,32.997,39.393,32.997z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 15px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-size: 16px;">
<span style="color: rgb(55, 180, 74);">100% НАТУРАЛЬНАЯ ИКРА</span></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node198 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p><span style="color: rgb(70, 70, 70);">
<span style="font-size: 16px;">Заказав у Нас Икру всего 1 раз, вы станете Нашим постоянным клиентом и будете с гордостью и спокойствием рекомендовать Нас своим друзьям и близким. Заказывайте и убедитесь сами!</span></span></p></div></div></div></div></div>
<div class="node node199 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node200 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg207" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(76, 175, 80); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="29.991" cy="15.185" r="8.599"></circle><path class="st0" d="M32.107,12.588c-0.073-0.624-0.291-1.115-0.65-1.473c-0.278-0.275-0.653-0.443-1.126-0.502h-0.483 c-0.539,0.066-0.949,0.245-1.229,0.536c-0.409,0.431-0.612,0.997-0.612,1.696c0,0.395,0.069,0.746,0.208,1.055 c0.139,0.309,0.34,0.549,0.601,0.72c0.353,0.238,0.697,0.395,1.032,0.469l0.418,0.118c0.335,0.074,0.68,0.231,1.033,0.468 c0.261,0.171,0.461,0.412,0.6,0.72c0.14,0.309,0.209,0.661,0.209,1.056c0,0.699-0.204,1.265-0.613,1.696 c-0.28,0.291-0.688,0.469-1.229,0.536h-0.483c-0.472-0.059-0.847-0.227-1.125-0.502c-0.359-0.358-0.577-0.849-0.65-1.473"></path><line class="st0" x1="30.003" y1="20.085" x2="30.003" y2="10.146"></line><path class="st0" d="M11.771,37.233c0.996,1.347,2.309,2.979,3.623,4.196c2.678,2.479,7.574,4.706,7.574,4.706 l12.039,7.084c0.696,0.367,1.754,0.232,2.245-0.565c0.411-0.668,0.262-1.527-0.301-2.1l2.522,1.672 c0.795,0.474,2.043,0.384,2.668-0.52c0.424-0.614,0.431-1.4,0.086-2.053c-0.163-0.309-0.703-0.834-0.703-0.834 l1.025,0.583c0.84,0.484,2.148,0.366,2.79-0.591c0.642-0.96,0.323-2.297-0.71-2.988l-0.957-0.629 c0.764,0.207,1.608-0.061,2.096-0.743c0.625-0.877,0.422-2.094-0.838-2.995l-11.199-7.649 c-0.166-0.117-0.973-0.678-1.992-1.336l-1.722-1.458l0.021-0.158c1.272-0.046,3.289-0.047,3.961,0.373 M30.057,26.563 c-2.478-0.186-6.086-1.164-6.97-1.363 M22.969,46.134c0.004,0.002,0.008,0.005,0.012,0.007L22.969,46.134z"></path><path class="st0" d="M37.96,24.928l-1.071,0.366c-0.885,0.2-5.562,1.241-8.039,1.426c-1.738,0.131-2.186,0.674-2.186,0.674 l-3.52,2.407l-0.539,0.434c0,0,1.213,2.519,3.66,0.993c0.672-0.42,2.69-0.419,3.963-0.373 M44.873,41.429 c1.125-1.042,2.25-2.389,3.174-3.6 M15.336,41.457c-1.26,0.901-1.464,2.118-0.838,2.995c0.486,0.682,1.332,0.95,2.096,0.742 l-0.957,0.629c-1.034,0.69-1.352,2.028-0.71,2.988c0.642,0.958,1.949,1.076,2.79,0.591l1.843-1.153l-0.802,0.602 c-0.976,0.672-1.258,1.952-0.633,2.856s1.873,0.994,2.667,0.52l2.522-1.672c-0.562,0.573-0.711,1.432-0.3,2.1 c0.491,0.797,1.549,0.932,2.245,0.565l4.926-2.898"></path><path class="st0" d="M1,29.599l9.755,8.202c0.972,0.756,12.465-14.014,11.493-14.768L2.184,6.986"></path><path class="st0" d="M57.893,7.073L38.326,22.726C37.355,23.48,48.85,38.25,49.82,37.494L59,29.733"></path><line class="st0" x1="43.674" y1="45.195" x2="30.882" y2="36.564"></line><line class="st0" x1="41.543" y1="48.853" x2="27.6" y2="39.56"></line><line class="st0" x1="36.935" y1="50.551" x2="24.508" y2="42.286"></line><line class="st0" x1="16.594" y1="45.194" x2="18.671" y2="43.879"></line><line class="st0" x1="19.56" y1="48.25" x2="22.969" y2="46.135"></line><line class="st0" x1="23.314" y1="50.555" x2="26.771" y2="48.4"></line></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 15px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-size: 16px;">
<span style="color: rgb(55, 180, 74);">БЕЗ ПРЕДОПЛАТЫ</span></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node201 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="line-height: 1.6;">
<span style="color: rgb(70, 70, 70);">Мы работаем без какой либо предоплаты. Вы оплачиваете товар, только после того как возьмете его в руки и полностью убедитесь в его качестве. Проверить качество Вы можете при получении товара курьером или на отделении новой почты.</span></p></div></div></div></div></div>
<div class="node node202 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node203 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 50px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 50px; height: 50px;"><svg class="svgicon" id="svg208" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0.8999999999999999" y="0.8999999999999999" width="58.2" height="58.2" style="stroke: rgb(76, 175, 80); fill: none; stroke-alignment: inside; stroke-width: 1.7999999999999998" rx="29.1" ry="29.1"></rect><g transform="scale(0.6) translate(20, 20)"><path class="st20" d="M10.91,46.925c-1.649-0.702-3.723-0.306-5.172,1.143c-2.77,2.77-2.544,8.706-2.544,8.706 s5.98,0.179,8.705-2.545c1.447-1.448,1.845-3.519,1.145-5.168"></path><path class="st20" d="M34.645,38.156l1.546,7.465c0,0,0.687,1.856-1.631,3.192c-2.316,1.335-13.685,8.743-13.685,8.743 l2.328-10.717"></path><path class="st20" d="M21.788,25.355l-7.392-1.529c0,0-1.856-0.684-3.191,1.631c-1.336,2.316-8.743,13.685-8.743,13.685 l10.781-2.34"></path><path class="st20" d="M16.088,49.972c0.477,0.478,1.184,0.548,1.577,0.156l2.136-2.135"></path><path class="st20" d="M12.085,40.325l-2.111,2.111c-0.393,0.393-0.322,1.1,0.155,1.578"></path><path class="st20" d="M32.866,10.62c0,0,0.284-0.318,0.438-0.474C44.812-1.361,56.621,3.42,56.621,3.42 s5.101,11.489-6.727,23.316c-0.145,0.145-0.442,0.411-0.442,0.411"></path><path class="st20" d="M11.962,38.54c-0.423,0.553-0.445,1.169,0,1.613l7.926,7.925c0.445,0.445,1.053,0.444,1.613-0.001 l27.988-20.985c0,0-1.805-3.501-7.423-9.119c-4.938-4.937-9.117-7.421-9.117-7.421L11.962,38.54z"></path><path class="st20" d="M31.554,22.334c1.811-1.812,4.762-1.812,6.575,0c1.813,1.814,1.813,4.765,0,6.578 c-1.813,1.814-4.765,1.814-6.575,0C29.739,27.099,29.739,24.149,31.554,22.334z"></path><path class="st20" d="M25.108,30.954c1.213-1.211,3.188-1.211,4.401,0c1.213,1.214,1.213,3.188,0,4.401 c-1.213,1.214-3.188,1.214-4.401,0C23.896,34.143,23.896,32.168,25.108,30.954z"></path><ellipse transform="matrix(-0.7076 -0.7066 0.7066 -0.7076 94.5201 45.7353)" class="st20" cx="56.723" cy="3.311" rx="1.025" ry="0.952"></ellipse></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 15px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-size: 16px;">
<span style="color: rgb(55, 180, 74);">БЫСТРАЯ ДОСТАВКА</span></span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node204 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p><span style="color: rgb(70, 70, 70);">Доставка за 1 день в любую точку Украины. Мы можем Гарантировать самую быструю доставку по всей Украине благодаря тому, что Наша компания является официальным партнером Новой Почты. Наши заказы обрабатываются и доставляются в кратчайшие сроки.</span></p></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node208 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node209 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам в ближайшее время и ответит на все интересующие Вас вопросы!</span></span></span></p></div></div></div></div></div>
<div class="node node210 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid209" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid210">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1.4;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам в ближайшее время!&nbsp;</span></span></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid6" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div><br>
<input type="hidden" name="hid" value="Заявка на обратный звонок">
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid211">
<span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="agreement">Политика конфиденциальности</div></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<script class="adaptive">if(["xs"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node216 section section-elements xs-hidden" id="икра" data-opacity="0.95">
<div class="wrapper1">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node217 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-scale-80">
<h2 class="font-header spans xs-force-center textable">
<span style="text-align: center;" class="p">
<font color="#464646" face="TTNorms Medium">
<span style="font-size: 48px;">Ассортимент</span></font><br></span></h2></div></div></div></div></div>
<div class="s-elements-grid valign-middle use-table">
<div class="s-elements-grid__cell cell-0">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node226 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;Икра Горбуши&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;550 грн&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;img/d385cc1c323fde6683851915b2f85475.jpg&quot;}]">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node227 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemname" class="">
<h3 data-role="itemname" class="font-header spans xs-force-center textable">
<span style="text-align: center;" class="p">
<span style="font-size: 22px;">
<strong>Икра Горбуши</strong></span></span></h3></div></div></div></div>
<div class="node node228 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node229 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" data-role="image" style="text-align: center;">
<img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 275px;" data-lazy-image="img/d385cc1c323fde6683851915b2f85475.jpg" data-lazy-image_size="500,500" data-lazy-image_detect="css-width"></div><noscript><img src="img/xd385cc1c323fde6683851915b2f85475.jpg.pagespeed.ic.npevd_SzaL.jpg" alt=""></noscript></div></div></div>
<div class="node node230 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">
<span style="font-size: 20px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 500 (грамм)</span></span></p></div></div></div></div></div>
<div class="node node231 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node232 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 22px;">
<span style="color: rgb(238, 29, 36);"><s>&nbsp;750грн&nbsp;</s></span></span></span></p></div></div></div></div></div>
<div class="node node233 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemprice" class="">
<div data-role="itemprice" class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 40px;">
<span style="color: rgb(38, 38, 38);"></span></span>
<span style="font-size: 32px;">
<span style="color: rgb(38, 38, 38);">
<span style="font-family: &quot;TTNorms Bold&quot;;">399 грн</span></span></span></p></div></div></div></div></div>
<div class="node node234 widget widget-text wow shake" data-wow-delay="0.2s">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(238, 29, 36);">
<span style="font-family: &quot;TTNorms Bold&quot;;">АКЦИЯ 1 + 1 = 3</span></span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">При покупке 2х баночек по 0.5&nbsp;</span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">0.5 &nbsp;баночка в Подарок!</span></span></p>
<p style="text-align: center;">
<span style="font-size: 14px;">
<span style="color: rgb(137, 137, 137);">Количество товара по Акции ограничено!</span></span></p></div></div></div></div></div>
<div class="node node235 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">До конца Акции осталось:</p></div></div></div></div></div>
<div class="node node236 widget widget-countdown">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node236_meta" class="code">
<div plp-countdown-root="" data-red-libs="countdown" class="countdown4 small" data-vals="{&quot;type&quot;:&quot;month&quot;,&quot;full_date&quot;:{&quot;year&quot;:2019,&quot;month&quot;:7,&quot;day&quot;:15},&quot;full_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;month_day&quot;:15,&quot;month_time&quot;:{&quot;hour&quot;:23,&quot;minute&quot;:55},&quot;week_day&quot;:5,&quot;week_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;day_time&quot;:{&quot;hour&quot;:18,&quot;minute&quot;:0},&quot;fake_days&quot;:2,&quot;fake_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;timezone&quot;:null,&quot;action&quot;:{&quot;type&quot;:&quot;none&quot;,&quot;url&quot;:&quot;&quot;,&quot;element_id&quot;:&quot;&quot;,&quot;message&quot;:{&quot;type&quot;:&quot;success&quot;,&quot;title&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;},&quot;modal&quot;:&quot;action_show_popup&quot;}}">
  <div class="line">
    <div class="group days">
      <div class="digits">{dnn}</div>
      <div class="label">{dl}</div>
    </div>
    <div class="group hours">
      <div class="digits">{hnn}</div>
      <div class="label">{hl}</div>
    </div>
  </div>
  <div class="line">
    <div class="group minutes">
      <div class="digits">{mnn}</div>
      <div class="label">{ml}</div>
    </div>
    <div class="group seconds">
      <div class="digits">{snn}</div>
      <div class="label">{sl}</div>
    </div>
  </div>
</div></div></div>
<div class="countdown-modals">
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="action_show_popup" area-context="uid44">
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><p>Заголовок окна (Действие по окончанию счетчика)</p></h4></div>
<div class="modal-body">
<div class="cont">
<div class="node node237 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable"><p>Редактируемый текст</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node238 widget widget-button wow pulse" data-wow-delay="1s">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid45" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">КУПИТЬ В 1 КЛИК</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid46">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content"><div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 18px;">
<strong>ОФОРМЛЕНИЕ ЗАКАЗА</strong></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid7" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div><br>
<input type="hidden" name="hid" value="Икра Горбуши">
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid47">
<span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="privacy">Политика конфиденциальности</div></div>
<div class="macros-modal">
<div class="modal fade nocolors robots-noindex robots-nocontent" data-modal="privacy" area-context="uid48">
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center;"><strong>Политика конфиденциальности</strong></p></h4></div>
<div class="modal-body">
<div class="textable">
<p><strong>Политика конфиденциальности</strong><br>Мы не передаем ваши данные третьим лицам. Ваши данные используются только для выполнения заказа. После выполнения заказа вся информация удаляется и негде не хранится.</p><p><strong>Гипертекстовые ссылки на сторонние сайты</strong><br>Настоящий сайт может содержать гипертекстовые ссылки на сторонние сайты и интернет-ресурсы. Риск, связанный с выходом пользователя на внешние сайты по ссылкам, имеющимся на настоящем сайте, лежит целиком на пользователе. Компания не несет ответственности за точность и надежность информации, данных, взглядов или заявлений, представленных на сторонних сайтах. Компания помещает ссылки на другие сайты исключительно для удобства пользователя. Это ни в коей мере не означает, что Компания одобряет содержание данных сайтов или несет за него ответственность, за исключением случаев, когда точно может быть установлено, что Компания располагала данными о возможных нежелательных последствиях использования информации, размещенной на стороннем сайте, и имела техническую возможность предотвратить такое использование.<br>Компания официально заявляет, что на момент размещения ссылок на сторонних сайтах не было обнаружено недостоверной, нежелательной или сомнительной информации. Компания не отслеживает изменения, в том числе изменения оформления и содержимого, произошедшие на сторонних сайтах и не несет никакой ответственности за последствия использования сторонних сайтов, изменившихся с момента размещения ссылок. Освобождение от ответственности действует как в отношении ссылок, размещенных на настоящем сайте, так и в отношении ссылок, оставленных пользователями на форумах, в гостевых книгах и списках рассылки, если таковые имеются. Ответственность за полноту, точность и надежность информации стороннего сайта, в том числе и за возможный ущерб от использования последнего, лежит исключительно на владельце стороннего сайта, и ни в коем случае на лице, разместившем ссылку.</p><p><strong>Авторские права и товарные знаки</strong><br>Компания прикладывает все усилия, направленные на предотвращение использования в своих публикациях графических изображений, аудио и видеозаписей, текстов, являющихся субъектом права собственности третьих лиц. В случае невозможности полного отказа от использования таких материалов, Компания стремится явно указывать правообладателя. Все товарные знаки, логотипы, названия продукции и моделей или производные от них, описывающие продукцию или услуги компании и являющиеся частью информации, размещённой на сайте, являются товарными знаками и/или собственностью компании.<br>Любое использование товарных знаков компании или их производных (за исключением случаев, когда имеется письменное разрешение компании на использование товарных знаков) не допускается.<br>Любое несанкционированное использование или копирование информации сайта может привести к нарушению прав собственности на товарные знаки, авторские права или другие права собственности.</p></div></div></div></div></div></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node240 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-full">
<div class="btn-inner">
</div></div></div></div></div></div>
<div class="node node242 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node243 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node244 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Тара: Стекло</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node245 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg51" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Размер икринок: 4 мм в диаметре</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node246 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg52" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p>
<span style="font-family: &quot;TTNorms Medium&quot;;">Цвет: ярко-оранжевый</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node247 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg53" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Консистенция – сухая. Не более 5-7% жидкости</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node248 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg54" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Состав: икра Горбуши, соль, растительное масло</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node249 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg55" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Отличное качество</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node250 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg56" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Срок хранения в бытовом холодильнике: не более 3-х месяцев</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node251 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg57" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Район вылова: Камчатский край</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node252 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg58" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 500 (грамм)</span></p></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-1">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node253 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;Икра Кеты&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;600 грн&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;img/5553997fbbe0eafc051fc0eca3e23d70.jpg&quot;}]">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node254 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemname" class="">
<h3 data-role="itemname" class="font-header spans xs-force-center textable">
<span style="text-align: center;" class="p">
<span style="font-size: 22px;">
<strong>Икра Кеты</strong></span></span></h3></div></div></div></div>
<div class="node node255 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node256 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" data-role="image" style="text-align: center;">
<img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 275px;" data-lazy-image="img/5553997fbbe0eafc051fc0eca3e23d70.jpg" data-lazy-image_size="500,500" data-lazy-image_detect="css-width"></div><noscript>
<img src="img/x5553997fbbe0eafc051fc0eca3e23d70.jpg.pagespeed.ic._J5AUIJCrq.jpg" alt=""></noscript></div></div></div>
<div class="node node257 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">
<span style="font-size: 20px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 500 (грамм)</span></span></p></div></div></div></div></div>
<div class="node node258 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node259 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 22px;">
<span style="color: rgb(238, 29, 36);"><s>&nbsp;870грн&nbsp;</s></span></span></span></p></div></div></div></div></div>
<div class="node node260 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemprice" class="">
<div data-role="itemprice" class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 32px;">
<span style="color: rgb(38, 38, 38);">
<span style="font-family: &quot;TTNorms Bold&quot;;">399 грн</span></span></span></p></div></div></div></div></div>
<div class="node node261 widget widget-text wow shake" data-wow-delay="0.4s">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(238, 29, 36);">
<span style="font-family: &quot;TTNorms Bold&quot;;">АКЦИЯ 1 + 1 = 3</span></span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">При покупке 2х баночек по 0.5&nbsp;</span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">0.5 &nbsp;баночка в Подарок!</span></span></p>
<p style="text-align: center;">
<span style="font-size: 14px;">
<span style="color: rgb(137, 137, 137);">Количество товара по Акции ограничено!</span></span></p></div></div></div></div></div>
<div class="node node262 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">До конца Акции осталось:</p></div></div></div></div></div>
<div class="node node263 widget widget-countdown">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node263_meta" class="code"><div plp-countdown-root="" data-red-libs="countdown" class="countdown4 small" data-vals="{&quot;type&quot;:&quot;month&quot;,&quot;full_date&quot;:{&quot;year&quot;:2019,&quot;month&quot;:7,&quot;day&quot;:15},&quot;full_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;month_day&quot;:15,&quot;month_time&quot;:{&quot;hour&quot;:23,&quot;minute&quot;:55},&quot;week_day&quot;:5,&quot;week_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;day_time&quot;:{&quot;hour&quot;:18,&quot;minute&quot;:0},&quot;fake_days&quot;:2,&quot;fake_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;timezone&quot;:null,&quot;action&quot;:{&quot;type&quot;:&quot;none&quot;,&quot;url&quot;:&quot;&quot;,&quot;element_id&quot;:&quot;&quot;,&quot;message&quot;:{&quot;type&quot;:&quot;success&quot;,&quot;title&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;},&quot;modal&quot;:&quot;action_show_popup&quot;}}">
  <div class="line">
    <div class="group days">
      <div class="digits">{dnn}</div>
      <div class="label">{dl}</div>
    </div>
    <div class="group hours">
      <div class="digits">{hnn}</div>
      <div class="label">{hl}</div>
    </div>
  </div>
  <div class="line">
    <div class="group minutes">
      <div class="digits">{mnn}</div>
      <div class="label">{ml}</div>
    </div>
    <div class="group seconds">
      <div class="digits">{snn}</div>
      <div class="label">{sl}</div>
    </div>
  </div>
</div></div></div>
<div class="countdown-modals">
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="action_show_popup" area-context="uid59">
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p>Заголовок окна (Действие по окончанию счетчика)</p></h4></div>
<div class="modal-body">
<div class="cont">
<div class="node node264 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable"><p>Редактируемый текст</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node265 widget widget-button wow pulse" data-wow-delay="2s">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid60" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">КУПИТЬ В 1 КЛИК</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid61">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 18px;">
<strong>ОФОРМЛЕНИЕ ЗАКАЗА</strong></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid8" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div><br>
<input type="hidden" name="hid" value="Икра Кеты">
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid62">
<span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="privacy">Политика конфиденциальности</div></div>
<div class="macros-modal">
<div class="modal fade nocolors robots-noindex robots-nocontent" data-modal="privacy" area-context="uid63">
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center;">
<strong>Политика конфиденциальности</strong></p></h4></div>
<div class="modal-body">
<div class="textable">
<p><strong>Политика конфиденциальности</strong><br>Мы не передаем ваши данные третьим лицам. Ваши данные используются только для выполнения заказа. После выполнения заказа вся информация удаляется и негде не хранится.</p><p><strong>Гипертекстовые ссылки на сторонние сайты</strong><br>Настоящий сайт может содержать гипертекстовые ссылки на сторонние сайты и интернет-ресурсы. Риск, связанный с выходом пользователя на внешние сайты по ссылкам, имеющимся на настоящем сайте, лежит целиком на пользователе. Компания не несет ответственности за точность и надежность информации, данных, взглядов или заявлений, представленных на сторонних сайтах. Компания помещает ссылки на другие сайты исключительно для удобства пользователя. Это ни в коей мере не означает, что Компания одобряет содержание данных сайтов или несет за него ответственность, за исключением случаев, когда точно может быть установлено, что Компания располагала данными о возможных нежелательных последствиях использования информации, размещенной на стороннем сайте, и имела техническую возможность предотвратить такое использование.<br>Компания официально заявляет, что на момент размещения ссылок на сторонних сайтах не было обнаружено недостоверной, нежелательной или сомнительной информации. Компания не отслеживает изменения, в том числе изменения оформления и содержимого, произошедшие на сторонних сайтах и не несет никакой ответственности за последствия использования сторонних сайтов, изменившихся с момента размещения ссылок. Освобождение от ответственности действует как в отношении ссылок, размещенных на настоящем сайте, так и в отношении ссылок, оставленных пользователями на форумах, в гостевых книгах и списках рассылки, если таковые имеются. Ответственность за полноту, точность и надежность информации стороннего сайта, в том числе и за возможный ущерб от использования последнего, лежит исключительно на владельце стороннего сайта, и ни в коем случае на лице, разместившем ссылку.</p><p><strong>Авторские права и товарные знаки</strong><br>Компания прикладывает все усилия, направленные на предотвращение использования в своих публикациях графических изображений, аудио и видеозаписей, текстов, являющихся субъектом права собственности третьих лиц. В случае невозможности полного отказа от использования таких материалов, Компания стремится явно указывать правообладателя. Все товарные знаки, логотипы, названия продукции и моделей или производные от них, описывающие продукцию или услуги компании и являющиеся частью информации, размещённой на сайте, являются товарными знаками и/или собственностью компании.<br>Любое использование товарных знаков компании или их производных (за исключением случаев, когда имеется письменное разрешение компании на использование товарных знаков) не допускается.<br>Любое несанкционированное использование или копирование информации сайта может привести к нарушению прав собственности на товарные знаки, авторские права или другие права собственности.</p></div></div></div></div></div></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node267 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-full">
<div class="btn-inner">
</div>
</div></div></div></div></div>
<div class="node node269 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node270 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node271 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg65" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Тара: Стекло</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node272 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg66" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Размер икринок: 6 мм в диаметре</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node273 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg67" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Цвет: янтарно-оранжевый</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node274 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg68" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Консистенция – сухая. Не более 12% жидкости</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node275 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg69" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Состав: икра Кеты, соль, растительное масло</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node276 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg70" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Отличное качество</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node277 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg71" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Срок хранения в бытовом холодильнике: не более 3-х месяцев</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node278 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg72" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Район вылова: Камчатский край</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node279 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg73" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 500 (грамм)</span></p></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-2">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node280 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;Икра Веслоноса500 грамм&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;1000 грн&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;img/aef0a75852c7ed9b00deea9c8eb4eca3.jpg&quot;}]">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node281 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemname" class="">
<h3 data-role="itemname" class="font-header spans xs-force-center textable">
<span style="text-align: center; line-height: 1.3;" class="p">
<span style="font-size: 22px;"><strong>Икра Веслоноса</strong></span></span>
<span style="text-align: center; line-height: 1.3;" class="p">
<span style="font-size: 18px;"><strong>500 грамм</strong></span></span></h3></div></div></div></div>
<div class="node node282 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node283 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" data-role="image" style="text-align: center;"><img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 275px;" data-lazy-image="img/aef0a75852c7ed9b00deea9c8eb4eca3.jpg" data-lazy-image_size="500,500" data-lazy-image_detect="css-width"></div><noscript>
<img src="img/xaef0a75852c7ed9b00deea9c8eb4eca3.jpg.pagespeed.ic.hSIk_vQ4eh.jpg" alt=""></noscript></div></div></div>
<div class="node node284 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">
<span style="font-size: 20px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 500 (грамм)</span></span></p></div></div></div></div></div>
<div class="node node285 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node286 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 22px;">
<span style="color: rgb(238, 29, 36);"><s>&nbsp;1300грн&nbsp;</s></span></span></span></p></div></div></div></div></div>
<div class="node node287 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemprice" class="">
<div data-role="itemprice" class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 32px;">
<span style="color: rgb(38, 38, 38);">
<span style="font-family: &quot;TTNorms Bold&quot;;">399 грн</span></span></span></p></div></div></div></div></div>
<div class="node node288 widget widget-text wow shake" data-wow-delay="0.6s">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(238, 29, 36);">
<span style="font-family: &quot;TTNorms Bold&quot;;">АКЦИЯ 1 + 1 = 3</span></span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">При покупке 2х баночек по 0.5&nbsp;</span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">0.5 &nbsp;баночка в Подарок!</span></span></p>
<p style="text-align: center;">
<span style="font-size: 14px;">
<span style="color: rgb(137, 137, 137);">Количество товара по Акции ограничено!</span></span></p></div></div></div></div></div>
<div class="node node289 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">До конца Акции осталось:</p></div></div></div></div></div>
<div class="node node290 widget widget-countdown">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node290_meta" class="code">
<div plp-countdown-root="" data-red-libs="countdown" class="countdown4 small" data-vals="{&quot;type&quot;:&quot;month&quot;,&quot;full_date&quot;:{&quot;year&quot;:2019,&quot;month&quot;:7,&quot;day&quot;:15},&quot;full_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;month_day&quot;:15,&quot;month_time&quot;:{&quot;hour&quot;:23,&quot;minute&quot;:55},&quot;week_day&quot;:5,&quot;week_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;day_time&quot;:{&quot;hour&quot;:18,&quot;minute&quot;:0},&quot;fake_days&quot;:2,&quot;fake_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;timezone&quot;:null,&quot;action&quot;:{&quot;type&quot;:&quot;none&quot;,&quot;url&quot;:&quot;&quot;,&quot;element_id&quot;:&quot;&quot;,&quot;message&quot;:{&quot;type&quot;:&quot;success&quot;,&quot;title&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;},&quot;modal&quot;:&quot;action_show_popup&quot;}}">
  <div class="line">
    <div class="group days">
      <div class="digits">{dnn}</div>
      <div class="label">{dl}</div>
    </div>
    <div class="group hours">
      <div class="digits">{hnn}</div>
      <div class="label">{hl}</div>
    </div>
  </div>
  <div class="line">
    <div class="group minutes">
      <div class="digits">{mnn}</div>
      <div class="label">{ml}</div>
    </div>
    <div class="group seconds">
      <div class="digits">{snn}</div>
      <div class="label">{sl}</div>
    </div>
  </div>
</div></div></div>
<div class="countdown-modals">
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="action_show_popup" area-context="uid74">
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><p>Заголовок окна (Действие по окончанию счетчика)</p></h4></div>
<div class="modal-body">
<div class="cont">
<div class="node node291 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable"><p>Редактируемый текст</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node292 widget widget-button wow pulse" data-wow-delay="3s">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid75" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">КУПИТЬ В 1 КЛИК</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid76">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 18px;">
<strong>ОФОРМЛЕНИЕ ЗАКАЗА</strong></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid9" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div><br>

<input type="hidden" name="hid" value="Икра Веслоноса"> 
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid77" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false">
<span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="privacy">Политика конфиденциальности</div></div>
<div class="macros-modal">
<div class="modal fade nocolors robots-noindex robots-nocontent" data-modal="privacy" area-context="uid78">
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center;"><strong>Политика конфиденциальности</strong></p></h4></div>
<div class="modal-body">
<div class="textable">
<p><strong>Политика конфиденциальности</strong><br>Мы не передаем ваши данные третьим лицам. Ваши данные используются только для выполнения заказа. После выполнения заказа вся информация удаляется и негде не хранится.</p><p><strong>Гипертекстовые ссылки на сторонние сайты</strong><br>Настоящий сайт может содержать гипертекстовые ссылки на сторонние сайты и интернет-ресурсы. Риск, связанный с выходом пользователя на внешние сайты по ссылкам, имеющимся на настоящем сайте, лежит целиком на пользователе. Компания не несет ответственности за точность и надежность информации, данных, взглядов или заявлений, представленных на сторонних сайтах. Компания помещает ссылки на другие сайты исключительно для удобства пользователя. Это ни в коей мере не означает, что Компания одобряет содержание данных сайтов или несет за него ответственность, за исключением случаев, когда точно может быть установлено, что Компания располагала данными о возможных нежелательных последствиях использования информации, размещенной на стороннем сайте, и имела техническую возможность предотвратить такое использование.<br>Компания официально заявляет, что на момент размещения ссылок на сторонних сайтах не было обнаружено недостоверной, нежелательной или сомнительной информации. Компания не отслеживает изменения, в том числе изменения оформления и содержимого, произошедшие на сторонних сайтах и не несет никакой ответственности за последствия использования сторонних сайтов, изменившихся с момента размещения ссылок. Освобождение от ответственности действует как в отношении ссылок, размещенных на настоящем сайте, так и в отношении ссылок, оставленных пользователями на форумах, в гостевых книгах и списках рассылки, если таковые имеются. Ответственность за полноту, точность и надежность информации стороннего сайта, в том числе и за возможный ущерб от использования последнего, лежит исключительно на владельце стороннего сайта, и ни в коем случае на лице, разместившем ссылку.</p><p><strong>Авторские права и товарные знаки</strong><br>Компания прикладывает все усилия, направленные на предотвращение использования в своих публикациях графических изображений, аудио и видеозаписей, текстов, являющихся субъектом права собственности третьих лиц. В случае невозможности полного отказа от использования таких материалов, Компания стремится явно указывать правообладателя. Все товарные знаки, логотипы, названия продукции и моделей или производные от них, описывающие продукцию или услуги компании и являющиеся частью информации, размещённой на сайте, являются товарными знаками и/или собственностью компании.<br>Любое использование товарных знаков компании или их производных (за исключением случаев, когда имеется письменное разрешение компании на использование товарных знаков) не допускается.<br>Любое несанкционированное использование или копирование информации сайта может привести к нарушению прав собственности на товарные знаки, авторские права или другие права собственности.</p></div></div></div></div></div></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node294 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-full">
<div class="btn-inner">
</div>
</div></div></div></div></div>
<div class="node node296 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node297 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node298 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg80" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Тара: Стекло</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node299 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg81" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Размер икринок: 2.2 мм в диаметре</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node300 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg82" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Цвет: чёрный</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node301 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg83" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Консистенция – сухая. Не более 5-7% жидкости</span></p></div><div class="cont"></div></div></div></div></div></div></div><div class="node node302 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg84" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Состав: икра Веслоноса, соль, растительное масло</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node303 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg85" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Отличное качество</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node304 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg86" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Срок хранения в бытовом холодильнике: не более 3-х месяцев</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node305 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg87" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Район вылова: Астрахань</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node306 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg88" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 500 (грамм)</span></p></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-3">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node307 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;Икра Веслоноса250 грамм&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;600 грн&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;img/aef0a75852c7ed9b00deea9c8eb4eca3.jpg&quot;}]">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node308 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemname" class="">
<h3 data-role="itemname" class="font-header spans xs-force-center textable">
<span style="text-align: center; line-height: 1.3;" class="p">
<span style="font-size: 22px;"><strong>Икра Веслоноса</strong></span></span>
<span style="text-align: center; line-height: 1.3;" class="p">
<span style="font-size: 18px;"><strong>250 грамм</strong></span></span></h3></div></div></div></div>
<div class="node node309 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node310 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" data-role="image" style="text-align: center;">
<img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 275px;" data-lazy-image="img/aef0a75852c7ed9b00deea9c8eb4eca3.jpg" data-lazy-image_size="500,500" data-lazy-image_detect="css-width"></div><noscript><img src="img/xaef0a75852c7ed9b00deea9c8eb4eca3.jpg.pagespeed.ic.hSIk_vQ4eh.jpg" alt=""></noscript></div></div></div>
<div class="node node311 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">
<span style="font-size: 20px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 250 (грамм)</span></span></p></div></div></div></div></div>
<div class="node node312 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node313 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 22px;">
<span style="color: rgb(238, 29, 36);"><s>&nbsp;900грн&nbsp;</s></span></span></span></p></div></div></div></div></div>
<div class="node node314 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemprice" class="">
<div data-role="itemprice" class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 32px;">
<span style="color: rgb(38, 38, 38);">
<span style="font-family: &quot;TTNorms Bold&quot;;">399 грн</span></span></span></p></div></div></div></div></div>
<div class="node node315 widget widget-text wow shake" data-wow-delay="0.6s">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(238, 29, 36);">
<span style="font-family: &quot;TTNorms Bold&quot;;">АКЦИЯ 1 + 1 = 3</span></span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">При покупке 2х баночек по 0.25&nbsp;</span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">0.25 &nbsp;баночка в Подарок!</span></span></p>
<p style="text-align: center;">
<span style="font-size: 14px;">
<span style="color: rgb(137, 137, 137);">Количество товара по Акции ограничено!</span></span></p></div></div></div></div></div>
<div class="node node316 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">До конца Акции осталось:</p></div></div></div></div></div>
<div class="node node317 widget widget-countdown">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node317_meta" class="code">
<div plp-countdown-root="" data-red-libs="countdown" class="countdown4 small" data-vals="{&quot;type&quot;:&quot;month&quot;,&quot;full_date&quot;:{&quot;year&quot;:2019,&quot;month&quot;:7,&quot;day&quot;:15},&quot;full_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;month_day&quot;:15,&quot;month_time&quot;:{&quot;hour&quot;:23,&quot;minute&quot;:55},&quot;week_day&quot;:5,&quot;week_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;day_time&quot;:{&quot;hour&quot;:18,&quot;minute&quot;:0},&quot;fake_days&quot;:2,&quot;fake_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;timezone&quot;:null,&quot;action&quot;:{&quot;type&quot;:&quot;none&quot;,&quot;url&quot;:&quot;&quot;,&quot;element_id&quot;:&quot;&quot;,&quot;message&quot;:{&quot;type&quot;:&quot;success&quot;,&quot;title&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;},&quot;modal&quot;:&quot;action_show_popup&quot;}}">
  <div class="line">
    <div class="group days">
      <div class="digits">{dnn}</div>
      <div class="label">{dl}</div>
    </div>
    <div class="group hours">
      <div class="digits">{hnn}</div>
      <div class="label">{hl}</div>
    </div>
  </div>
  <div class="line">
    <div class="group minutes">
      <div class="digits">{mnn}</div>
      <div class="label">{ml}</div>
    </div>
    <div class="group seconds">
      <div class="digits">{snn}</div>
      <div class="label">{sl}</div>
    </div>
  </div>
</div></div></div>
<div class="countdown-modals">
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="action_show_popup" area-context="uid89"><div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p>Заголовок окна (Действие по окончанию счетчика)</p></h4></div>
<div class="modal-body">
<div class="cont">
<div class="node node318 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable"><p>Редактируемый текст</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node319 widget widget-button wow pulse" data-wow-delay="3s">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid90" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form"><span class="text">КУПИТЬ В 1 КЛИК</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid91">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 18px;"><strong>ОФОРМЛЕНИЕ ЗАКАЗА</strong></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid10" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div><br>

<input type="hidden" name="hid" value="Икра Веслоноса"> 
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid92">
<span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="privacy">Политика конфиденциальности</div></div>
<div class="macros-modal">
<div class="modal fade nocolors robots-noindex robots-nocontent" data-modal="privacy" area-context="uid93"><div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center;"><strong>Политика конфиденциальности</strong></p></h4></div>
<div class="modal-body">
<div class="textable">
<p><strong>Политика конфиденциальности</strong><br>Мы не передаем ваши данные третьим лицам. Ваши данные используются только для выполнения заказа. После выполнения заказа вся информация удаляется и негде не хранится.</p><p><strong>Гипертекстовые ссылки на сторонние сайты</strong><br>Настоящий сайт может содержать гипертекстовые ссылки на сторонние сайты и интернет-ресурсы. Риск, связанный с выходом пользователя на внешние сайты по ссылкам, имеющимся на настоящем сайте, лежит целиком на пользователе. Компания не несет ответственности за точность и надежность информации, данных, взглядов или заявлений, представленных на сторонних сайтах. Компания помещает ссылки на другие сайты исключительно для удобства пользователя. Это ни в коей мере не означает, что Компания одобряет содержание данных сайтов или несет за него ответственность, за исключением случаев, когда точно может быть установлено, что Компания располагала данными о возможных нежелательных последствиях использования информации, размещенной на стороннем сайте, и имела техническую возможность предотвратить такое использование.<br>Компания официально заявляет, что на момент размещения ссылок на сторонних сайтах не было обнаружено недостоверной, нежелательной или сомнительной информации. Компания не отслеживает изменения, в том числе изменения оформления и содержимого, произошедшие на сторонних сайтах и не несет никакой ответственности за последствия использования сторонних сайтов, изменившихся с момента размещения ссылок. Освобождение от ответственности действует как в отношении ссылок, размещенных на настоящем сайте, так и в отношении ссылок, оставленных пользователями на форумах, в гостевых книгах и списках рассылки, если таковые имеются. Ответственность за полноту, точность и надежность информации стороннего сайта, в том числе и за возможный ущерб от использования последнего, лежит исключительно на владельце стороннего сайта, и ни в коем случае на лице, разместившем ссылку.</p><p><strong>Авторские права и товарные знаки</strong><br>Компания прикладывает все усилия, направленные на предотвращение использования в своих публикациях графических изображений, аудио и видеозаписей, текстов, являющихся субъектом права собственности третьих лиц. В случае невозможности полного отказа от использования таких материалов, Компания стремится явно указывать правообладателя. Все товарные знаки, логотипы, названия продукции и моделей или производные от них, описывающие продукцию или услуги компании и являющиеся частью информации, размещённой на сайте, являются товарными знаками и/или собственностью компании.<br>Любое использование товарных знаков компании или их производных (за исключением случаев, когда имеется письменное разрешение компании на использование товарных знаков) не допускается.<br>Любое несанкционированное использование или копирование информации сайта может привести к нарушению прав собственности на товарные знаки, авторские права или другие права собственности.</p></div></div></div></div></div></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node321 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-full">
<div class="btn-inner">
</div>
</div></div></div></div></div>
<div class="node node323 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node324 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node325 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg95" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Тара: Стекло</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node326 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg96" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Размер икринок: 2.2 мм в диаметре</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node327 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg97" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Цвет: чёрная</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node328 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg98" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Консистенция – сухая. Не более 5-7% жидкости</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node329 widget widget-imagedtext"><div class="wrapper1"><div class="wrapper2"><div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg99" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Состав: икра Веслоноса, соль, растительное масло</span></p></div><div class="cont"></div></div></div></div></div></div></div><div class="node node330 widget widget-imagedtext"><div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg100" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div><div class="td text"><div style="padding-left: 12px;"><div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;"><p><span style="font-family: &quot;TTNorms Medium&quot;;">Отличное качество</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node331 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg101" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Срок хранения в бытовом холодильнике: не более 3-х месяцев</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node332 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg102" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Район вылова: Астрахань</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node333 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg103" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 500 (грамм)</span></p></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="cont">
<div class="node node218 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node219 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам в ближайшее время и ответит на все интересующие Вас вопросы!</span></span></span></p></div></div></div></div></div>
<div class="node node220 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid40" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid41"><div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1.4;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам в ближайшее время!</span></span></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body"><div class="cont"></div>
<form id="valid11" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div><br>
<input type="hidden" name="hid" value="Заявка на обратный звонок">
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn submit" id="uid42"><span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="privacy">Политика конфиденциальности</div></div>
<div class="macros-modal">
<div class="modal fade nocolors robots-noindex robots-nocontent" data-modal="privacy" area-context="uid43"><div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center;">
<strong>Политика конфиденциальности</strong></p></h4></div>
<div class="modal-body">
<div class="textable">
<p><strong>Политика конфиденциальности</strong><br>Мы не передаем ваши данные третьим лицам. Ваши данные используются только для выполнения заказа. После выполнения заказа вся информация удаляется и негде не хранится.</p><p><strong>Гипертекстовые ссылки на сторонние сайты</strong><br>Настоящий сайт может содержать гипертекстовые ссылки на сторонние сайты и интернет-ресурсы. Риск, связанный с выходом пользователя на внешние сайты по ссылкам, имеющимся на настоящем сайте, лежит целиком на пользователе. Компания не несет ответственности за точность и надежность информации, данных, взглядов или заявлений, представленных на сторонних сайтах. Компания помещает ссылки на другие сайты исключительно для удобства пользователя. Это ни в коей мере не означает, что Компания одобряет содержание данных сайтов или несет за него ответственность, за исключением случаев, когда точно может быть установлено, что Компания располагала данными о возможных нежелательных последствиях использования информации, размещенной на стороннем сайте, и имела техническую возможность предотвратить такое использование.<br>Компания официально заявляет, что на момент размещения ссылок на сторонних сайтах не было обнаружено недостоверной, нежелательной или сомнительной информации. Компания не отслеживает изменения, в том числе изменения оформления и содержимого, произошедшие на сторонних сайтах и не несет никакой ответственности за последствия использования сторонних сайтов, изменившихся с момента размещения ссылок. Освобождение от ответственности действует как в отношении ссылок, размещенных на настоящем сайте, так и в отношении ссылок, оставленных пользователями на форумах, в гостевых книгах и списках рассылки, если таковые имеются. Ответственность за полноту, точность и надежность информации стороннего сайта, в том числе и за возможный ущерб от использования последнего, лежит исключительно на владельце стороннего сайта, и ни в коем случае на лице, разместившем ссылку.</p><p><strong>Авторские права и товарные знаки</strong><br>Компания прикладывает все усилия, направленные на предотвращение использования в своих публикациях графических изображений, аудио и видеозаписей, текстов, являющихся субъектом права собственности третьих лиц. В случае невозможности полного отказа от использования таких материалов, Компания стремится явно указывать правообладателя. Все товарные знаки, логотипы, названия продукции и моделей или производные от них, описывающие продукцию или услуги компании и являющиеся частью информации, размещённой на сайте, являются товарными знаками и/или собственностью компании.<br>Любое использование товарных знаков компании или их производных (за исключением случаев, когда имеется письменное разрешение компании на использование товарных знаков) не допускается.<br>Любое несанкционированное использование или копирование информации сайта может привести к нарушению прав собственности на товарные знаки, авторские права или другие права собственности.</p></div></div></div></div></div></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<script class="adaptive">if(["md","lg"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node334 section section-elements md-hidden lg-hidden" id="икра" data-opacity="0.95">
<div class="wrapper1">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node335 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-scale-80">
<h2 class="font-header spans xs-force-center textable">
<span style="text-align: center;" class="p">
<font color="#464646" face="TTNorms Medium">
<span style="font-size: 48px;">Ассортимент</span></font><br></span></h2></div></div></div></div></div>
<div class="s-elements-grid valign-middle use-table">
<div class="s-elements-grid__cell cell-0">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node344 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;Икра Горбуши&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;550 грн&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;img/d385cc1c323fde6683851915b2f85475.jpg&quot;}]">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node345 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemname" class="">
<h3 data-role="itemname" class="font-header spans xs-force-center textable">
<span style="text-align: center;" class="p">
<span style="font-size: 22px;">
<strong>Икра Горбуши</strong></span></span></h3></div></div></div></div>
<div class="node node346 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node347 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" data-role="image" style="text-align: center;">
<img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 500px;" data-lazy-image="img/d385cc1c323fde6683851915b2f85475.jpg" data-lazy-image_size="500,500" data-lazy-image_detect="css-width"></div><noscript><img src="img/xd385cc1c323fde6683851915b2f85475.jpg.pagespeed.ic.npevd_SzaL.jpg" alt=""></noscript></div></div></div>
<div class="node node348 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">
<span style="font-size: 20px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 500 (грамм)</span></span></p></div></div></div></div></div>
<div class="node node349 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node350 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 22px;">
<span style="color: rgb(238, 29, 36);"><s>&nbsp;750грн&nbsp;</s></span></span></span></p></div></div></div></div></div>
<div class="node node351 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemprice" class="">
<div data-role="itemprice" class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 40px;">
<span style="color: rgb(38, 38, 38);"></span></span>
<span style="font-size: 32px;">
<span style="color: rgb(38, 38, 38);">
<span style="font-family: &quot;TTNorms Bold&quot;;">399 грн</span></span></span></p></div></div></div></div></div>
<div class="node node352 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(238, 29, 36);">
<span style="font-family: &quot;TTNorms Bold&quot;;">АКЦИЯ 1 + 1 = 3</span></span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">При покупке 2х баночек по 0.5&nbsp;</span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">1 &nbsp;баночка 0.5 в Подарок!</span></span></p>
<p style="text-align: center;">
<span style="font-size: 14px;">
<span style="color: rgb(137, 137, 137);">Количество товара по Акции ограничено!</span></span></p></div></div></div></div></div>
<div class="node node353 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">До конца Акции осталось:</p></div></div></div></div></div>
<div class="node node354 widget widget-countdown">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node354_meta" class="code">
<div plp-countdown-root="" data-red-libs="countdown" class="countdown4 small" data-vals="{&quot;type&quot;:&quot;month&quot;,&quot;full_date&quot;:{&quot;year&quot;:2019,&quot;month&quot;:7,&quot;day&quot;:15},&quot;full_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;month_day&quot;:15,&quot;month_time&quot;:{&quot;hour&quot;:23,&quot;minute&quot;:55},&quot;week_day&quot;:5,&quot;week_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;day_time&quot;:{&quot;hour&quot;:18,&quot;minute&quot;:0},&quot;fake_days&quot;:2,&quot;fake_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;timezone&quot;:null,&quot;action&quot;:{&quot;type&quot;:&quot;none&quot;,&quot;url&quot;:&quot;&quot;,&quot;element_id&quot;:&quot;&quot;,&quot;message&quot;:{&quot;type&quot;:&quot;success&quot;,&quot;title&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;},&quot;modal&quot;:&quot;action_show_popup&quot;}}">
  <div class="line">
    <div class="group days">
      <div class="digits">{dnn}</div>
      <div class="label">{dl}</div>
    </div>
    <div class="group hours">
      <div class="digits">{hnn}</div>
      <div class="label">{hl}</div>
    </div>
  </div>
  <div class="line">
    <div class="group minutes">
      <div class="digits">{mnn}</div>
      <div class="label">{ml}</div>
    </div>
    <div class="group seconds">
      <div class="digits">{snn}</div>
      <div class="label">{sl}</div>
    </div>
  </div>
</div></div></div>
<div class="countdown-modals">
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="action_show_popup" area-context="uid219">
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p>Заголовок окна (Действие по окончанию счетчика)</p></h4></div>
<div class="modal-body">
<div class="cont">
<div class="node node355 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable"><p>Редактируемый текст</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node356 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid220" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">КУПИТЬ В 1 КЛИК</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid221">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 18px;">
<strong>ОФОРМЛЕНИЕ ЗАКАЗА</strong></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid12" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div><br>

<input type="hidden" name="hid" value="Икра Горбуши"> 
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid222">
<span class="text">ОТПРАВИТЬ ЗАЯВКУ!</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="privacy">Политика конфиденциальности</div></div>
<div class="macros-modal">
<div class="modal fade nocolors robots-noindex robots-nocontent" data-modal="privacy" area-context="uid223"><div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center;">
<strong>Политика конфиденциальности</strong></p></h4></div>
<div class="modal-body">
<div class="textable">
<p><strong>Политика конфиденциальности</strong><br>Мы не передаем ваши данные третьим лицам. Ваши данные используются только для выполнения заказа. После выполнения заказа вся информация удаляется и негде не хранится.</p><p><strong>Гипертекстовые ссылки на сторонние сайты</strong><br>Настоящий сайт может содержать гипертекстовые ссылки на сторонние сайты и интернет-ресурсы. Риск, связанный с выходом пользователя на внешние сайты по ссылкам, имеющимся на настоящем сайте, лежит целиком на пользователе. Компания не несет ответственности за точность и надежность информации, данных, взглядов или заявлений, представленных на сторонних сайтах. Компания помещает ссылки на другие сайты исключительно для удобства пользователя. Это ни в коей мере не означает, что Компания одобряет содержание данных сайтов или несет за него ответственность, за исключением случаев, когда точно может быть установлено, что Компания располагала данными о возможных нежелательных последствиях использования информации, размещенной на стороннем сайте, и имела техническую возможность предотвратить такое использование.<br>Компания официально заявляет, что на момент размещения ссылок на сторонних сайтах не было обнаружено недостоверной, нежелательной или сомнительной информации. Компания не отслеживает изменения, в том числе изменения оформления и содержимого, произошедшие на сторонних сайтах и не несет никакой ответственности за последствия использования сторонних сайтов, изменившихся с момента размещения ссылок. Освобождение от ответственности действует как в отношении ссылок, размещенных на настоящем сайте, так и в отношении ссылок, оставленных пользователями на форумах, в гостевых книгах и списках рассылки, если таковые имеются. Ответственность за полноту, точность и надежность информации стороннего сайта, в том числе и за возможный ущерб от использования последнего, лежит исключительно на владельце стороннего сайта, и ни в коем случае на лице, разместившем ссылку.</p><p><strong>Авторские права и товарные знаки</strong><br>Компания прикладывает все усилия, направленные на предотвращение использования в своих публикациях графических изображений, аудио и видеозаписей, текстов, являющихся субъектом права собственности третьих лиц. В случае невозможности полного отказа от использования таких материалов, Компания стремится явно указывать правообладателя. Все товарные знаки, логотипы, названия продукции и моделей или производные от них, описывающие продукцию или услуги компании и являющиеся частью информации, размещённой на сайте, являются товарными знаками и/или собственностью компании.<br>Любое использование товарных знаков компании или их производных (за исключением случаев, когда имеется письменное разрешение компании на использование товарных знаков) не допускается.<br>Любое несанкционированное использование или копирование информации сайта может привести к нарушению прав собственности на товарные знаки, авторские права или другие права собственности.</p></div></div></div></div></div></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node358 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-full">
<div class="btn-inner">
</div>
</div></div></div></div></div>
<div class="node node360 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node361 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node362 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg225" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Тара: Стекло</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node363 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg226" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Размер икринок: 4 мм в диаметре</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node364 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg227" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Цвет: ярко-оранжевый</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node365 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg228" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Консистенция – сухая. Не более 5-7% жидкости</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node366 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg229" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Состав: икра Горбуши, соль, растительное масло</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node367 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg230" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Отличное качество</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node368 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg231" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Срок хранения в бытовом холодильнике: не более 3-х месяцев</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node369 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg232" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Район вылова: Камчатский край</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node370 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg233" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 500 (грамм)</span></p></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-1">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node371 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;Икра Кеты&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;600 грн&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;img/5553997fbbe0eafc051fc0eca3e23d70.jpg&quot;}]"><div class="wrapper1"><div class="wrapper2"><div class="cont">
<div class="node node372 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemname" class="">
<h3 data-role="itemname" class="font-header spans xs-force-center textable">
<span style="text-align: center;" class="p">
<span style="font-size: 22px;">
<strong>Икра Кеты</strong></span></span></h3></div></div></div></div>
<div class="node node373 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node374 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" data-role="image" style="text-align: center;"><img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 500px;" data-lazy-image="img/5553997fbbe0eafc051fc0eca3e23d70.jpg" data-lazy-image_size="500,500" data-lazy-image_detect="css-width"></div><noscript><img src="img/x5553997fbbe0eafc051fc0eca3e23d70.jpg.pagespeed.ic._J5AUIJCrq.jpg" alt=""></noscript></div></div></div>
<div class="node node375 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">
<span style="font-size: 20px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 500 (грамм)</span></span></p></div></div></div></div></div>
<div class="node node376 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node377 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 22px;">
<span style="color: rgb(238, 29, 36);"><s>&nbsp;870грн&nbsp;</s></span></span></span></p></div></div></div></div></div>
<div class="node node378 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemprice" class="">
<div data-role="itemprice" class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 32px;">
<span style="color: rgb(38, 38, 38);">
<span style="font-family: &quot;TTNorms Bold&quot;;">399 грн</span></span></span></p></div></div></div></div></div>
<div class="node node379 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(238, 29, 36);">
<span style="font-family: &quot;TTNorms Bold&quot;;">АКЦИЯ 1 + 1 = 3</span></span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">При покупке 2х баночек по 0.5&nbsp;</span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">1 &nbsp;баночка 0.5 в Подарок!</span></span></p>
<p style="text-align: center;">
<span style="font-size: 14px;">
<span style="color: rgb(137, 137, 137);">Количество товара по Акции ограничено!</span></span></p></div></div></div></div></div>
<div class="node node380 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">До конца Акции осталось:</p></div></div></div></div></div>
<div class="node node381 widget widget-countdown">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node381_meta" class="code"><div plp-countdown-root="" data-red-libs="countdown" class="countdown4 small" data-vals="{&quot;type&quot;:&quot;month&quot;,&quot;full_date&quot;:{&quot;year&quot;:2019,&quot;month&quot;:7,&quot;day&quot;:15},&quot;full_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;month_day&quot;:15,&quot;month_time&quot;:{&quot;hour&quot;:23,&quot;minute&quot;:55},&quot;week_day&quot;:5,&quot;week_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;day_time&quot;:{&quot;hour&quot;:18,&quot;minute&quot;:0},&quot;fake_days&quot;:2,&quot;fake_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;timezone&quot;:null,&quot;action&quot;:{&quot;type&quot;:&quot;none&quot;,&quot;url&quot;:&quot;&quot;,&quot;element_id&quot;:&quot;&quot;,&quot;message&quot;:{&quot;type&quot;:&quot;success&quot;,&quot;title&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;},&quot;modal&quot;:&quot;action_show_popup&quot;}}">
  <div class="line">
    <div class="group days">
      <div class="digits">{dnn}</div>
      <div class="label">{dl}</div>
    </div>
    <div class="group hours">
      <div class="digits">{hnn}</div>
      <div class="label">{hl}</div>
    </div>
  </div>
  <div class="line">
    <div class="group minutes">
      <div class="digits">{mnn}</div>
      <div class="label">{ml}</div>
    </div>
    <div class="group seconds">
      <div class="digits">{snn}</div>
      <div class="label">{sl}</div>
    </div>
  </div>
</div></div></div>
<div class="countdown-modals">
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="action_show_popup" area-context="uid234">
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><p>Заголовок окна (Действие по окончанию счетчика)</p></h4></div>
<div class="modal-body">
<div class="cont">
<div class="node node382 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable"><p>Редактируемый текст</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node383 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid235" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">КУПИТЬ В 1 КЛИК</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid236">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 18px;">
<strong>ОФОРМЛЕНИЕ ЗАКАЗА</strong></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid13" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div><br>

<input type="hidden" name="hid" value="Икра Кеты"> 
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid237">
<span class="text">ОТПРАВИТЬ ЗАЯВКУ!</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="privacy">Политика конфиденциальности</div></div>
<div class="macros-modal">
<div class="modal fade nocolors robots-noindex robots-nocontent" data-modal="privacy" area-context="uid238"><div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center;">
<strong>Политика конфиденциальности</strong></p></h4></div>
<div class="modal-body">
<div class="textable">
<p><strong>Политика конфиденциальности</strong><br>Мы не передаем ваши данные третьим лицам. Ваши данные используются только для выполнения заказа. После выполнения заказа вся информация удаляется и негде не хранится.</p><p><strong>Гипертекстовые ссылки на сторонние сайты</strong><br>Настоящий сайт может содержать гипертекстовые ссылки на сторонние сайты и интернет-ресурсы. Риск, связанный с выходом пользователя на внешние сайты по ссылкам, имеющимся на настоящем сайте, лежит целиком на пользователе. Компания не несет ответственности за точность и надежность информации, данных, взглядов или заявлений, представленных на сторонних сайтах. Компания помещает ссылки на другие сайты исключительно для удобства пользователя. Это ни в коей мере не означает, что Компания одобряет содержание данных сайтов или несет за него ответственность, за исключением случаев, когда точно может быть установлено, что Компания располагала данными о возможных нежелательных последствиях использования информации, размещенной на стороннем сайте, и имела техническую возможность предотвратить такое использование.<br>Компания официально заявляет, что на момент размещения ссылок на сторонних сайтах не было обнаружено недостоверной, нежелательной или сомнительной информации. Компания не отслеживает изменения, в том числе изменения оформления и содержимого, произошедшие на сторонних сайтах и не несет никакой ответственности за последствия использования сторонних сайтов, изменившихся с момента размещения ссылок. Освобождение от ответственности действует как в отношении ссылок, размещенных на настоящем сайте, так и в отношении ссылок, оставленных пользователями на форумах, в гостевых книгах и списках рассылки, если таковые имеются. Ответственность за полноту, точность и надежность информации стороннего сайта, в том числе и за возможный ущерб от использования последнего, лежит исключительно на владельце стороннего сайта, и ни в коем случае на лице, разместившем ссылку.</p><p><strong>Авторские права и товарные знаки</strong><br>Компания прикладывает все усилия, направленные на предотвращение использования в своих публикациях графических изображений, аудио и видеозаписей, текстов, являющихся субъектом права собственности третьих лиц. В случае невозможности полного отказа от использования таких материалов, Компания стремится явно указывать правообладателя. Все товарные знаки, логотипы, названия продукции и моделей или производные от них, описывающие продукцию или услуги компании и являющиеся частью информации, размещённой на сайте, являются товарными знаками и/или собственностью компании.<br>Любое использование товарных знаков компании или их производных (за исключением случаев, когда имеется письменное разрешение компании на использование товарных знаков) не допускается.<br>Любое несанкционированное использование или копирование информации сайта может привести к нарушению прав собственности на товарные знаки, авторские права или другие права собственности.</p></div></div></div></div></div></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node385 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-full">
<div class="btn-inner">
</div></div></div></div></div></div>
<div class="node node387 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node388 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node389 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg240" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Тара: Стекло</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node390 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg241" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Размер икринок: 6 мм в диаметре</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node391 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg242" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Цвет: янтарно-оранжевый</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node392 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg243" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Консистенция – сухая. Не более 12% жидкости</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node393 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg244" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Состав: икра Кеты, соль, растительное масло</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node394 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg245" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Отличное качество</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node395 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg246" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Срок хранения в бытовом холодильнике: не более 3-х месяцев</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node396 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg247" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Район вылова: Камчатский край</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node397 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg248" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 500 (грамм)</span></p></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-2">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node398 widget widget-element" data-item="[{&quot;name&quot;:&quot;Название товара&quot;,&quot;type&quot;:&quot;title&quot;,&quot;value&quot;:&quot;Икра Веслоноса&quot;},{&quot;name&quot;:&quot;Цена товара&quot;,&quot;type&quot;:&quot;price&quot;,&quot;value&quot;:&quot;1000 грн&quot;},{&quot;name&quot;:&quot;Фото товара&quot;,&quot;type&quot;:&quot;photo&quot;,&quot;value&quot;:&quot;img/aef0a75852c7ed9b00deea9c8eb4eca3.jpg&quot;}]">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node399 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemname" class="">
<h3 data-role="itemname" class="font-header spans xs-force-center textable">
<span style="text-align: center;" class="p">
<span style="font-size: 22px;">
<strong>Икра Веслоноса</strong></span></span></h3></div></div></div></div>
<div class="node node400 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node401 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" data-role="image" style="text-align: center;"><img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 500px;" data-lazy-image="img/aef0a75852c7ed9b00deea9c8eb4eca3.jpg" data-lazy-image_size="500,500" data-lazy-image_detect="css-width"></div><noscript><img src="img/xaef0a75852c7ed9b00deea9c8eb4eca3.jpg.pagespeed.ic.hSIk_vQ4eh.jpg" alt=""></noscript></div></div></div>
<div class="node node402 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">
<span style="font-size: 20px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 500 (грамм)</span></span></p></div></div></div></div></div>
<div class="node node403 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node404 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 22px;">
<span style="color: rgb(238, 29, 36);"><s>&nbsp;1300грн&nbsp;</s></span></span></span></p></div></div></div></div></div>
<div class="node node405 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemprice" class="">
<div data-role="itemprice" class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 32px;">
<span style="color: rgb(38, 38, 38);">
<span style="font-family: &quot;TTNorms Bold&quot;;">399 грн</span></span></span></p></div></div></div></div></div>
<div class="node node406 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(238, 29, 36);">
<span style="font-family: &quot;TTNorms Bold&quot;;">АКЦИЯ 1 + 1 = 3</span></span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">При покупке 2х баночек по 0.5&nbsp;</span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">1 &nbsp;баночка 0.5 в Подарок!</span></span></p>
<p style="text-align: center;">
<span style="font-size: 14px;">
<span style="color: rgb(137, 137, 137);">Количество товара по Акции ограничено!</span></span></p></div></div></div></div></div>
<div class="node node407 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="text-align: center;">До конца Акции осталось:</p></div></div></div></div></div>
<div class="node node408 widget widget-countdown">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node408_meta" class="code">
<div plp-countdown-root="" data-red-libs="countdown" class="countdown4 small" data-vals="{&quot;type&quot;:&quot;month&quot;,&quot;full_date&quot;:{&quot;year&quot;:2019,&quot;month&quot;:7,&quot;day&quot;:15},&quot;full_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;month_day&quot;:15,&quot;month_time&quot;:{&quot;hour&quot;:23,&quot;minute&quot;:55},&quot;week_day&quot;:5,&quot;week_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;day_time&quot;:{&quot;hour&quot;:18,&quot;minute&quot;:0},&quot;fake_days&quot;:2,&quot;fake_time&quot;:{&quot;hour&quot;:12,&quot;minute&quot;:40},&quot;timezone&quot;:null,&quot;action&quot;:{&quot;type&quot;:&quot;none&quot;,&quot;url&quot;:&quot;&quot;,&quot;element_id&quot;:&quot;&quot;,&quot;message&quot;:{&quot;type&quot;:&quot;success&quot;,&quot;title&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;},&quot;modal&quot;:&quot;action_show_popup&quot;}}">
  <div class="line">
    <div class="group days">
      <div class="digits">{dnn}</div>
      <div class="label">{dl}</div>
    </div>
    <div class="group hours">
      <div class="digits">{hnn}</div>
      <div class="label">{hl}</div>
    </div>
  </div>
  <div class="line">
    <div class="group minutes">
      <div class="digits">{mnn}</div>
      <div class="label">{ml}</div>
    </div>
    <div class="group seconds">
      <div class="digits">{snn}</div>
      <div class="label">{sl}</div>
    </div>
  </div>
</div></div></div>
<div class="countdown-modals">
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="action_show_popup" area-context="uid249">
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><p>Заголовок окна (Действие по окончанию счетчика)</p></h4></div>
<div class="modal-body">
<div class="cont">
<div class="node node409 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable"><p>Редактируемый текст</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node410 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid250" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">КУПИТЬ В 1 КЛИК</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid251">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 18px;">
<strong>ОФОРМЛЕНИЕ ЗАКАЗА</strong></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid14" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div><br>


<input type="hidden" name="hid" value="Икра Веслоноса"> 
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid252" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false">
<span class="text">ОТПРАВИТЬ ЗАЯВКУ!</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="privacy">Политика конфиденциальности</div></div>
<div class="macros-modal">
<div class="modal fade nocolors robots-noindex robots-nocontent" data-modal="privacy" area-context="uid253"><div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center;">
<strong>Политика конфиденциальности</strong></p></h4></div>
<div class="modal-body">
<div class="textable">
<p><strong>Политика конфиденциальности</strong><br>Мы не передаем ваши данные третьим лицам. Ваши данные используются только для выполнения заказа. После выполнения заказа вся информация удаляется и негде не хранится.</p><p><strong>Гипертекстовые ссылки на сторонние сайты</strong><br>Настоящий сайт может содержать гипертекстовые ссылки на сторонние сайты и интернет-ресурсы. Риск, связанный с выходом пользователя на внешние сайты по ссылкам, имеющимся на настоящем сайте, лежит целиком на пользователе. Компания не несет ответственности за точность и надежность информации, данных, взглядов или заявлений, представленных на сторонних сайтах. Компания помещает ссылки на другие сайты исключительно для удобства пользователя. Это ни в коей мере не означает, что Компания одобряет содержание данных сайтов или несет за него ответственность, за исключением случаев, когда точно может быть установлено, что Компания располагала данными о возможных нежелательных последствиях использования информации, размещенной на стороннем сайте, и имела техническую возможность предотвратить такое использование.<br>Компания официально заявляет, что на момент размещения ссылок на сторонних сайтах не было обнаружено недостоверной, нежелательной или сомнительной информации. Компания не отслеживает изменения, в том числе изменения оформления и содержимого, произошедшие на сторонних сайтах и не несет никакой ответственности за последствия использования сторонних сайтов, изменившихся с момента размещения ссылок. Освобождение от ответственности действует как в отношении ссылок, размещенных на настоящем сайте, так и в отношении ссылок, оставленных пользователями на форумах, в гостевых книгах и списках рассылки, если таковые имеются. Ответственность за полноту, точность и надежность информации стороннего сайта, в том числе и за возможный ущерб от использования последнего, лежит исключительно на владельце стороннего сайта, и ни в коем случае на лице, разместившем ссылку.</p><p><strong>Авторские права и товарные знаки</strong><br>Компания прикладывает все усилия, направленные на предотвращение использования в своих публикациях графических изображений, аудио и видеозаписей, текстов, являющихся субъектом права собственности третьих лиц. В случае невозможности полного отказа от использования таких материалов, Компания стремится явно указывать правообладателя. Все товарные знаки, логотипы, названия продукции и моделей или производные от них, описывающие продукцию или услуги компании и являющиеся частью информации, размещённой на сайте, являются товарными знаками и/или собственностью компании.<br>Любое использование товарных знаков компании или их производных (за исключением случаев, когда имеется письменное разрешение компании на использование товарных знаков) не допускается.<br>Любое несанкционированное использование или копирование информации сайта может привести к нарушению прав собственности на товарные знаки, авторские права или другие права собственности.</p></div></div></div></div></div></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node412 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-full">
<div class="btn-inner">
</div></div></div></div></div></div>
<div class="node node414 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(156, 162, 174); border-radius: 0px;"></div></div></div></div></div>
<div class="node node415 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node416 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg255" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Тара: Стекло</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node417 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg256" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Размер икринок: 2.2 мм в диаметре</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node418 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg257" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Цвет: Чёрный</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node419 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg258" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Консистенция – сухая. Не более 5-7% жидкости</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node420 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg259" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Состав: икра Веслоноса, соль, растительное масло</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node421 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg260" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Отличное качество</span></p></div>
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node422 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg261" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Срок хранения в бытовом холодильнике: не более 3-х месяцев</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node423 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg262" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Район вылова: Астрахань</span></p></div><div class="cont"></div></div></div></div></div></div></div>
<div class="node node424 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 16px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 16px; height: 16px;"><svg class="svgicon" id="svg263" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.78) translate(8.461538461538458, 8.461538461538458)"><path fill="rgb(6, 199, 64)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(6, 199, 64)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 12px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><span style="font-family: &quot;TTNorms Medium&quot;;">Вес: 500 (грамм)</span></p></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="cont">
<div class="node node336 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node337 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам в ближайшее время и ответит на все интересующие Вас вопросы!</span></span></span></p></div></div></div></div></div>
<div class="node node338 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid215" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid216">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1.3;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">Наш менеджер перезвонит Вам в ближайшее время</span></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body"><div class="cont"></div>
<form id="valid15" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div>
<input type="hidden" name="hid" value="Заявка на обратный звонок"> 
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn submit" id="uid217">
<span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="privacy">Политика конфиденциальности</div></div>
<div class="macros-modal">
<div class="modal fade nocolors robots-noindex robots-nocontent" data-modal="privacy" area-context="uid218"><div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center;">
<strong>Политика конфиденциальности</strong></p></h4></div>
<div class="modal-body">
<div class="textable">
<p><strong>Политика конфиденциальности</strong><br>Мы не передаем ваши данные третьим лицам. Ваши данные используются только для выполнения заказа. После выполнения заказа вся информация удаляется и негде не хранится.</p><p><strong>Гипертекстовые ссылки на сторонние сайты</strong><br>Настоящий сайт может содержать гипертекстовые ссылки на сторонние сайты и интернет-ресурсы. Риск, связанный с выходом пользователя на внешние сайты по ссылкам, имеющимся на настоящем сайте, лежит целиком на пользователе. Компания не несет ответственности за точность и надежность информации, данных, взглядов или заявлений, представленных на сторонних сайтах. Компания помещает ссылки на другие сайты исключительно для удобства пользователя. Это ни в коей мере не означает, что Компания одобряет содержание данных сайтов или несет за него ответственность, за исключением случаев, когда точно может быть установлено, что Компания располагала данными о возможных нежелательных последствиях использования информации, размещенной на стороннем сайте, и имела техническую возможность предотвратить такое использование.<br>Компания официально заявляет, что на момент размещения ссылок на сторонних сайтах не было обнаружено недостоверной, нежелательной или сомнительной информации. Компания не отслеживает изменения, в том числе изменения оформления и содержимого, произошедшие на сторонних сайтах и не несет никакой ответственности за последствия использования сторонних сайтов, изменившихся с момента размещения ссылок. Освобождение от ответственности действует как в отношении ссылок, размещенных на настоящем сайте, так и в отношении ссылок, оставленных пользователями на форумах, в гостевых книгах и списках рассылки, если таковые имеются. Ответственность за полноту, точность и надежность информации стороннего сайта, в том числе и за возможный ущерб от использования последнего, лежит исключительно на владельце стороннего сайта, и ни в коем случае на лице, разместившем ссылку.</p><p><strong>Авторские права и товарные знаки</strong><br>Компания прикладывает все усилия, направленные на предотвращение использования в своих публикациях графических изображений, аудио и видеозаписей, текстов, являющихся субъектом права собственности третьих лиц. В случае невозможности полного отказа от использования таких материалов, Компания стремится явно указывать правообладателя. Все товарные знаки, логотипы, названия продукции и моделей или производные от них, описывающие продукцию или услуги компании и являющиеся частью информации, размещённой на сайте, являются товарными знаками и/или собственностью компании.<br>Любое использование товарных знаков компании или их производных (за исключением случаев, когда имеется письменное разрешение компании на использование товарных знаков) не допускается.<br>Любое несанкционированное использование или копирование информации сайта может привести к нарушению прав собственности на товарные знаки, авторские права или другие права собственности.</p></div></div></div></div></div></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<script class="adaptive">if(["xs"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node425 section section-elements xs-hidden" id="какзаказать" data-opacity="0.95">
<div class="wrapper1">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node426 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-scale-80">
<h2 class="font-header spans xs-force-center textable">
<span style="text-align: center;" class="p">
<span style="font-size: 36px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">КАК ЗАКАЗАТЬ?</span></span></span></h2></div></div></div></div>
<div class="node node427 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.5;">
<p style="text-align: center;">
<span style="font-size: 22px;">
<span style="color: rgb(0, 0, 0);">
<span style="font-family: &quot;TTNorms Medium&quot;;">Для оформления заказа в Нашем магазине MORE-IZ-IKRY</span></span></span></p></div></div></div></div></div>
<div class="node node428 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="color: rgb(54, 54, 54);">
<span style="font-size: 18px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="color: rgb(54, 54, 54);">
<span style="font-size: 18px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">Вам необходимо выбрать понравившийся товар</span></span></span>, <span style="color: rgb(54, 54, 54);">
<span style="font-size: 18px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">и оформить заказ в один клик,</span></span></span> после этого заполнить пару пунктов для оформления заказа.</span></span></span></p>
<p style="text-align: center;">
<span style="color: rgb(54, 54, 54);">
<span style="font-size: 18px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">После оформления заказа, с Вами свяжется менеджер для того, чтобы уточнить детали заказа и выбрать наиболее подходящий способ оплаты и доставки товара.</span></span></span></p></div></div></div></div></div></div>
<div class="s-elements-grid valign-middle use-flex">
<div class="s-elements-grid__cell cell-0">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node437 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node438 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px sm-wrap xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 116px;">
<div class="cont">
<div class="node node439 widget widget-element-number">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node439_meta" class="code">
<div class="number">
	01
</div></div></div></div></div></div></div></div>
<div class="col" style="width: 100%;">
<div class="cont">
<div class="node node440 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="bgimage" style="height: 50px;">
<img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg113" preserveAspectRatio="xMinYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="rgb(229, 56, 53)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(229, 56, 53)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div><noscript><img src="img/x207--black.png.pagespeed.ic.fsdoorwBXx.png" alt=""></noscript></div></div></div>
<div class="node node441 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="letter-spacing: 0.1em; line-height: 1.5;" class="p">
<span style="font-size: 14px;">ОСТАВЬТЕ ЗАЯВКУ</span></span></h3></div></div></div></div>
<div class="node node442 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="line-height: 1.5;">Выберете понравившейся Вам товар. Оформите заявку и мы свяжемся с вами в ближайшее время. Или перезвоните по контактным номерам на сайте.</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-1">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node447 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node448 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px sm-wrap xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 116px;">
<div class="cont">
<div class="node node449 widget widget-element-number">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node449_meta" class="code">
<div class="number">
	02
</div></div></div></div></div></div></div></div>
<div class="col" style="width: 100%;">
<div class="cont">
<div class="node node450 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="bgimage" style="height: 49px;">
<img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg114" preserveAspectRatio="xMinYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="rgb(229, 55, 52)" d="M21.159,3.173c0.023-0.002,0.044-0.003,0.062-0.004c0.018,0.041,0.038,0.099,0.062,0.173 c0.009,0.032,0.02,0.063,0.031,0.095l4.556,12.314c0.019,0.051,0.032,0.107,0.038,0.157c-0.649,0.423-0.906,1.27-0.571,1.993 c0.269,0.578,0.841,0.918,1.438,0.918c0.224,0,0.45-0.048,0.666-0.147c1.646-0.764,1.941-2.623,1.392-4.043l-4.532-12.25 c-0.52-1.668-1.729-2.504-3.41-2.363c-0.873,0.074-1.519,0.842-1.444,1.713C19.521,2.601,20.281,3.243,21.159,3.173z"></path><path fill="rgb(229, 55, 52)" d="M38.503,40.229c-0.297-0.3-0.7-0.469-1.122-0.47c0,0-0.002,0-0.004,0c-0.42,0-0.823,0.167-1.12,0.465 c-0.282,0.281-0.497,0.527-0.698,0.758c-0.346,0.396-0.555,0.634-1.059,0.972c-0.388,0.257-0.934,0.072-1.234-0.378L20.897,22.943 c-0.343-0.513-0.272-1.26,0.139-1.535c0.491-0.327,0.565-0.354,0.923-0.48c0.248-0.088,0.588-0.208,1.128-0.438 c0.789-0.335,1.169-1.235,0.858-2.033L17.693,2.394c-0.158-0.406-0.477-0.729-0.881-0.894s-0.858-0.154-1.254,0.027 c-2.13,0.975-3.984,2.232-5.685,3.861c-1.785,1.75-3.649,4.317-4.336,5.973c-0.095,0.229-0.135,0.478-0.116,0.725 c0.505,6.775,5.047,17.616,11.301,26.977c6.156,9.217,14.627,17.757,20.6,20.768c0.221,0.111,0.465,0.17,0.713,0.17h0.002 c2.342-0.002,5.42-1.209,6.649-1.733c2.274-0.999,4.624-2.428,5.847-3.556c0.316-0.292,0.5-0.699,0.51-1.129 s-0.156-0.846-0.459-1.15L38.503,40.229z M43.428,55.358c-1.927,0.822-3.805,1.363-5.034,1.458 c-5.44-2.918-13.37-11.032-19.036-19.514C13.505,28.543,9.23,18.554,8.615,12.248c0.586-1.176,1.977-3.126,3.464-4.585 c1.017-0.973,2.105-1.793,3.299-2.482l5.038,12.944c-0.306,0.13-0.617,0.301-1.14,0.648c-1.863,1.248-2.328,3.964-1.016,5.926 l12.367,18.633c0.8,1.197,2.099,1.913,3.474,1.913c0.768,0,1.514-0.227,2.158-0.656c0.513-0.343,0.869-0.653,1.161-0.948 l9.644,9.739C46.092,54.027,44.798,54.757,43.428,55.358z"></path><path fill="rgb(229, 55, 52)" d="M53.822,47.119c-0.035-0.044-0.073-0.085-0.113-0.124l-9.625-9.449c-1.083-1.027-2.956-1.459-4.294-0.238 c-0.646,0.59-0.692,1.593-0.103,2.238c0.55,0.601,1.454,0.683,2.098,0.217c0.037,0.019,0.075,0.042,0.098,0.062l9.5,9.327 c0.043,0.105,0.061,0.342-0.034,0.515c-0.422,0.767-0.144,1.729,0.622,2.152c0.243,0.134,0.505,0.197,0.764,0.197 c0.559,0,1.1-0.296,1.389-0.819C54.834,49.91,54.707,48.194,53.822,47.119z"></path></g></svg></div><noscript><img src="img/x159--black.png.pagespeed.ic.pQUm5xIvao.png" alt=""></noscript></div></div></div>
<div class="node node451 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="letter-spacing: 0.1em; line-height: 1.5;" class="p">
<span style="font-size: 14px;">КОНСУЛЬТАЦИЯ</span></span></h3></div></div></div></div>
<div class="node node452 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="line-height: 1.5;">Наш специалист проконсультирует Вас по Икре, расскажет про Акции и Скидки и ответит на все интересующие вопросы.</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-2">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node457 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node458 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px sm-wrap xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 116px;">
<div class="cont">
<div class="node node459 widget widget-element-number">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node459_meta" class="code">
<div class="number">
	03
</div></div></div></div></div></div></div></div>
<div class="col" style="width: 100%;">
<div class="cont">
<div class="node node460 widget widget-image">
<div class="wrapper1"><div class="wrapper2">
<div class="bgimage" style="height: 50px;">
<img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg115" preserveAspectRatio="xMinYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="rgb(229, 55, 52)" d="M11.008,24.796c0.029,0.03,0.062,0.051,0.094,0.078c0.037,0.031,0.074,0.063,0.113,0.092 c0.055,0.039,0.113,0.071,0.172,0.103c0.039,0.021,0.075,0.043,0.115,0.061c0.068,0.03,0.141,0.052,0.212,0.07 c0.033,0.01,0.064,0.022,0.098,0.029c0.106,0.022,0.214,0.034,0.323,0.034l0,0l0,0c0.098,0,0.193-0.01,0.289-0.027 c0.029-0.006,0.057-0.016,0.086-0.022c0.065-0.017,0.131-0.033,0.193-0.058c0.035-0.014,0.069-0.031,0.104-0.047 c0.055-0.025,0.109-0.053,0.161-0.085c0.036-0.022,0.069-0.047,0.104-0.072c0.028-0.021,0.058-0.036,0.085-0.059L25.67,14.438 c0.676-0.564,0.766-1.569,0.201-2.244c-0.563-0.676-1.569-0.766-2.245-0.201l-11.396,9.52l-2.762-2.763 c-0.622-0.622-1.632-0.622-2.254,0c-0.623,0.622-0.623,1.632,0,2.254L11.008,24.796z"></path><path fill="rgb(229, 55, 52)" d="M11.008,48.844c0.029,0.03,0.062,0.051,0.094,0.077c0.037,0.032,0.074,0.064,0.113,0.093 c0.055,0.039,0.113,0.071,0.172,0.103c0.039,0.021,0.075,0.043,0.115,0.061c0.068,0.03,0.141,0.051,0.212,0.07 c0.033,0.01,0.064,0.022,0.098,0.029c0.106,0.022,0.214,0.034,0.323,0.034l0,0l0,0c0.098,0,0.193-0.01,0.289-0.027 c0.029-0.006,0.057-0.016,0.086-0.022c0.065-0.017,0.131-0.033,0.193-0.058c0.035-0.014,0.069-0.031,0.104-0.048 c0.055-0.025,0.109-0.052,0.161-0.084c0.036-0.022,0.069-0.047,0.104-0.072c0.028-0.021,0.058-0.036,0.085-0.059L25.67,38.485 c0.676-0.564,0.766-1.57,0.201-2.245c-0.563-0.675-1.569-0.767-2.245-0.201L12.23,45.56l-2.762-2.763 c-0.622-0.623-1.632-0.623-2.254,0c-0.623,0.622-0.623,1.631,0,2.254L11.008,48.844z"></path><path fill="rgb(229, 55, 52)" d="M58.406,0H1.594C0.713,0,0,0.714,0,1.594v56.812C0,59.286,0.713,60,1.594,60h56.812 C59.287,60,60,59.286,60,58.406V1.594C60,0.714,59.287,0,58.406,0z M56.812,56.812H3.188V3.188h53.625V56.812z"></path><path fill="rgb(229, 55, 52)" d="M24.701,24.081c0,0.881,0.713,1.594,1.594,1.594h24.701c0.881,0,1.594-0.713,1.594-1.594 c0-0.88-0.713-1.594-1.594-1.594H26.295C25.414,22.487,24.701,23.201,24.701,24.081z"></path><path fill="rgb(229, 55, 52)" d="M50.996,45.307H26.295c-0.881,0-1.594,0.714-1.594,1.594c0,0.881,0.713,1.594,1.594,1.594h24.701 c0.881,0,1.594-0.713,1.594-1.594C52.59,46.021,51.877,45.307,50.996,45.307z"></path></g></svg></div><noscript><img src="img/x211--black.png.pagespeed.ic.HrV0pZ4zhd.png" alt=""></noscript></div></div></div>
<div class="node node461 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="letter-spacing: 0.1em; line-height: 1.5;" class="p">
<span style="font-size: 14px;">ПОДТВЕРЖДЕНИЕ</span></span></h3></div></div></div></div>
<div class="node node462 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="line-height: 1.5;">Менеджер уточнит данные для заказа и подтвердит, что заказ поступил по Акции.</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-3">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node467 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node468 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px sm-wrap xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 116px;">
<div class="cont">
<div class="node node469 widget widget-element-number">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node469_meta" class="code">
<div class="number">
	04
</div></div></div></div></div></div></div></div>
<div class="col" style="width: 100%;">
<div class="cont">
<div class="node node470 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="bgimage" style="height: 50px;">
<img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg116" preserveAspectRatio="xMinYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="rgb(229, 55, 52)" d="M59.431,0.553c-0.526-0.521-1.304-0.689-1.997-0.439C56.886,0.312,43.978,4.996,39.99,7.708 c-3.49,2.373-8.674,7.236-13.892,12.501c-1.399-0.707-3.483-1.572-5.325-1.572c-6.807,0-17.881,12.619-19.121,14.058 c-0.358,0.416-0.411,1.016-0.129,1.488c0.233,0.392,0.654,0.622,1.097,0.622c0.091,0,0.183-0.01,0.274-0.03l11.812-2.603 c-4.115,4.462-7.079,7.812-7.41,8.186c-0.669,0.759-0.633,1.907,0.082,2.622l1.248,1.248c-1.884,0.027-3.652,0.771-4.986,2.105 c-2.517,2.518-3.336,10.671-3.475,12.28c-0.031,0.375,0.104,0.746,0.369,1.013C0.775,59.866,1.102,60,1.438,60 c0.036,0,0.073-0.002,0.11-0.005c1.608-0.139,9.764-0.957,12.279-3.474c1.336-1.335,2.078-3.104,2.105-4.987l1.23,1.23 c0.372,0.373,0.862,0.562,1.354,0.562c0.451,0,0.902-0.159,1.266-0.478c0.38-0.335,3.807-3.358,8.35-7.54l-2.655,12.048 c-0.118,0.538,0.12,1.09,0.593,1.372c0.203,0.121,0.429,0.18,0.654,0.18c0.299,0,0.596-0.104,0.834-0.31 c1.438-1.24,14.057-12.313,14.057-19.119c0-1.895-0.914-4.048-1.633-5.446c5.258-5.211,10.106-10.39,12.459-13.888 c2.706-4.022,7.26-17.048,7.451-17.601C60.137,1.848,59.956,1.071,59.431,0.553z M12.022,54.716 c-1.241,1.241-5.765,2.155-9.148,2.571c0.417-3.384,1.331-7.906,2.571-9.148c0.879-0.878,2.047-1.362,3.289-1.362 s2.41,0.484,3.288,1.362c0.878,0.879,1.362,2.046,1.362,3.288S12.9,53.838,12.022,54.716z M6.297,31.41 C10.445,27.112,17,21.19,20.773,21.19c1.04,0,2.328,0.445,3.432,0.943c-2.223,2.277-4.412,4.58-6.445,6.751L6.297,31.41z M18.596,48.779l-7.229-7.229c0.409-0.457,0.921-1.027,1.509-1.677l7.377,7.422C19.611,47.871,19.048,48.376,18.596,48.779z M39.062,39.479c0,3.772-5.923,10.328-10.221,14.476l2.577-11.695c2.14-2.001,4.405-4.155,6.644-6.338 C38.582,37.052,39.062,38.399,39.062,39.479z M49.264,18.008c-4.688,6.971-20.585,21.672-28.062,28.431l-7.469-7.514 c6.779-7.48,21.47-23.329,28.412-28.05c2.207-1.501,8.268-3.989,12.728-5.71C53.196,9.663,50.76,15.783,49.264,18.008z"></path><path fill="rgb(229, 55, 52)" d="M36.084,19.914c0,2.347,1.908,4.256,4.255,4.256s4.256-1.909,4.256-4.256s-1.909-4.256-4.256-4.256 S36.084,17.567,36.084,19.914z M43.318,19.914c0,1.643-1.336,2.979-2.979,2.979c-1.643,0-2.979-1.336-2.979-2.979 s1.336-2.979,2.979-2.979C41.982,16.936,43.318,18.271,43.318,19.914z"></path></g></svg></div><noscript><img src="img/x231--black.png.pagespeed.ic.b3be14gV7C.png" alt=""></noscript></div></div></div>
<div class="node node471 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="letter-spacing: 0.1em; line-height: 1.5;" class="p">
<span style="font-size: 14px;">ДОСТАВКА</span></span></h3></div></div></div></div>
<div class="node node472 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="line-height: 1.5;">Мы отправим Ваш заказ в течении 40 минут после подтверждения. Новой Почтой или Курьером.</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-4">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node477 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node478 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px sm-wrap xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 116px;">
<div class="cont">
<div class="node node479 widget widget-element-number">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node479_meta" class="code">
<div class="number">
	05
</div></div></div></div></div></div></div></div>
<div class="col" style="width: 100%;">
<div class="cont">
<div class="node node480 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="bgimage" style="height: 50px;">
<img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg117" preserveAspectRatio="xMinYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="rgb(229, 55, 52)" d="M57.503,27.502h-5.896C50.536,17.424,42.55,9.385,32.497,8.229v-5.73C32.497,1.119,31.38,0,30,0 s-2.497,1.119-2.497,2.498v5.73C17.45,9.385,9.464,17.424,8.396,27.502H2.497C1.118,27.502,0,28.619,0,29.998 c0,1.381,1.118,2.498,2.497,2.498h5.946c1.228,9.898,9.135,17.752,19.06,18.893v6.113C27.503,58.881,28.62,60,30,60 s2.497-1.119,2.497-2.498v-6.113c9.926-1.141,17.832-8.994,19.061-18.893h5.945c1.379,0,2.497-1.117,2.497-2.498 C60,28.619,58.882,27.502,57.503,27.502z M32.497,46.334V41.35c0-1.381-1.117-2.498-2.497-2.498s-2.497,1.117-2.497,2.498v4.984 c-7.164-1.078-12.84-6.701-14-13.838h5.15c1.381,0,2.498-1.117,2.498-2.498c0-1.379-1.117-2.496-2.498-2.496h-5.209 c1.016-7.316,6.768-13.121,14.059-14.219v5.373c0,1.379,1.117,2.498,2.497,2.498s2.497-1.119,2.497-2.498v-5.373 c7.291,1.098,13.043,6.902,14.06,14.219h-5.21c-1.379,0-2.498,1.117-2.498,2.496c0,1.381,1.119,2.498,2.498,2.498h5.151 C45.339,39.633,39.661,45.256,32.497,46.334z"></path></g></svg></div><noscript><img src="img/x87--black.png.pagespeed.ic.mB87WtwViT.png" alt=""></noscript></div></div></div>
<div class="node node481 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="letter-spacing: 0.1em; line-height: 1.5;" class="p">
<span style="font-size: 14px;">ПОЛУЧЕНИЕ</span></span></h3></div></div></div></div>
<div class="node node482 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="line-height: 1.5;">Получите свой заказ выбранным способом.</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-5">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node487 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node488 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px sm-wrap xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 116px;">
<div class="cont">
<div class="node node489 widget widget-element-number">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node489_meta" class="code">
<div class="number">
	06
</div></div></div></div></div></div></div></div>
<div class="col" style="width: 100%;">
<div class="cont">
<div class="node node490 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="bgimage" style="height: 50px;">
<img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg118" preserveAspectRatio="xMinYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="rgb(229, 55, 52)" d="M10.215,20.57H6.38c-0.529,0-0.959,0.429-0.959,0.958c0,0.53,0.43,0.959,0.959,0.959h3.835 c0.53,0,0.959-0.429,0.959-0.959C11.174,20.999,10.745,20.57,10.215,20.57z"></path><path fill="rgb(229, 55, 52)" d="M36.289,20.57h-6.518c-0.529,0-0.959,0.429-0.959,0.958c0,0.53,0.43,0.959,0.959,0.959h6.518 c0.529,0,0.959-0.429,0.959-0.959C37.248,20.999,36.818,20.57,36.289,20.57z"></path><path fill="rgb(229, 55, 52)" d="M23.252,20.57h-6.518c-0.53,0-0.959,0.429-0.959,0.958c0,0.53,0.429,0.959,0.959,0.959h6.518 c0.53,0,0.959-0.429,0.959-0.959C24.211,20.999,23.782,20.57,23.252,20.57z"></path><path fill="rgb(229, 55, 52)" d="M42.808,22.487h3.835c0.53,0,0.959-0.429,0.959-0.959c0-0.529-0.429-0.958-0.959-0.958h-3.835 c-0.529,0-0.959,0.429-0.959,0.958C41.849,22.059,42.278,22.487,42.808,22.487z"></path><path fill="rgb(229, 55, 52)" d="M10.215,46.224H6.38c-0.529,0-0.959,0.43-0.959,0.959s0.43,0.958,0.959,0.958h3.835 c0.53,0,0.959-0.429,0.959-0.958S10.745,46.224,10.215,46.224z"></path><path fill="rgb(229, 55, 52)" d="M23.252,46.224h-6.518c-0.53,0-0.959,0.43-0.959,0.959s0.429,0.958,0.959,0.958h6.518 c0.53,0,0.959-0.429,0.959-0.958S23.782,46.224,23.252,46.224z"></path><path fill="rgb(229, 55, 52)" d="M36.289,46.224h-6.518c-0.529,0-0.959,0.43-0.959,0.959s0.43,0.958,0.959,0.958h6.518 c0.529,0,0.959-0.429,0.959-0.958S36.818,46.224,36.289,46.224z"></path><path fill="rgb(229, 55, 52)" d="M46.643,46.224h-3.835c-0.529,0-0.959,0.43-0.959,0.959s0.43,0.958,0.959,0.958h3.835 c0.53,0,0.959-0.429,0.959-0.958S47.173,46.224,46.643,46.224z"></path><path fill="rgb(229, 55, 52)" d="M55.741,27.766H53.37v-7.839c0-2.791-2.271-5.062-5.063-5.062h-5.438l-1.104-6.95 c-0.084-0.529-0.386-0.999-0.832-1.297c-0.446-0.297-0.997-0.393-1.517-0.266L4.347,14.92c-0.003,0-0.007,0.002-0.01,0.003 C1.889,15.276,0,17.383,0,19.927v28.714c0,2.792,2.271,5.062,5.063,5.062h43.243c2.792,0,5.063-2.271,5.063-5.062v-8.545h2.371 c2.349,0,4.259-2.079,4.259-4.636v-3.058C60,29.846,58.09,27.766,55.741,27.766z M38.304,10.571l0.681,4.293H20.731L38.304,10.571z M49.535,48.641c0,0.677-0.551,1.228-1.229,1.228H5.063c-0.677,0-1.228-0.551-1.228-1.228V19.927c0-0.677,0.551-1.227,1.228-1.227 H41.23h0.013h7.063c0.678,0,1.229,0.55,1.229,1.227v7.839h-1.401c-2.348,0-4.258,2.08-4.258,4.637v3.058 c0,2.557,1.91,4.636,4.258,4.636h1.401V48.641z M56.165,35.46c0,0.488-0.278,0.8-0.424,0.8h-7.607c-0.145,0-0.423-0.312-0.423-0.8 v-3.058c0-0.489,0.278-0.801,0.423-0.801h7.607c0.146,0,0.424,0.312,0.424,0.801V35.46z"></path><path fill="rgb(229, 55, 52)" d="M49.701,32.103c-1.009,0-1.829,0.82-1.829,1.828s0.82,1.828,1.829,1.828s1.828-0.82,1.828-1.828 S50.71,32.103,49.701,32.103z M49.701,34.48c-0.303,0-0.551-0.247-0.551-0.55s0.248-0.55,0.551-0.55c0.304,0,0.55,0.247,0.55,0.55 S50.005,34.48,49.701,34.48z"></path></g></svg></div><noscript><img src="img/x183--black.png.pagespeed.ic.zYAV82gjgm.png" alt=""></noscript></div></div></div>
<div class="node node491 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="letter-spacing: 0.1em; line-height: 1.5;" class="p">
<span style="font-size: 14px;">ОПЛАТА</span></span></h3></div></div></div></div>
<div class="node node492 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="line-height: 1.5;">Только после того как Вы убедились, что товар соответствует действительности - Вы оплачиваете.</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="cont">
<div class="node node429 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node430 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам в ближайшее время и ответит на все интересующие Вас вопросы!</span></span></span></p></div></div></div></div></div>
<div class="node node431 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid110" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid111">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><p style="text-align: center; line-height: 1.4;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам в ближайшее время!&nbsp;</span></span></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid16" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div><br>
<input type="hidden" name="hid" value="Заявка на обратный звонок">
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn submit" id="uid112"><span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="agreement">Политика конфиденциальности</div></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<script class="adaptive">if(["md","lg"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node497 section section-elements md-hidden lg-hidden" id="какзаказать" data-opacity="0.95"><div class="wrapper1">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node498 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-scale-80">
<h2 class="font-header spans xs-force-center textable">
<span style="text-align: center;" class="p">
<span style="font-size: 26px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">КАК ЗАКАЗАТЬ?</span></span></span></h2></div></div></div></div>
<div class="node node499 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.5;">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(0, 0, 0);">
<span style="font-family: &quot;TTNorms Medium&quot;;">Для оформления заказа в Нашем магазине </span></span></span></p></div></div></div></div></div>
<div class="node node500 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(54, 54, 54);">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="color: rgb(54, 54, 54);">
<span style="font-family: &quot;TTNorms Medium&quot;;">Вам необходимо выбрать понравившийся товар</span></span>, <span style="color: rgb(54, 54, 54);">
<span style="font-family: &quot;TTNorms Medium&quot;;">и оформить заказ в один клик,</span></span> после этого заполнить пару пунктов для оформления заказа.</span></span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(54, 54, 54);">
<span style="font-family: &quot;TTNorms Medium&quot;;">После оформления заказа, с Вами свяжется менеджер для того, чтобы уточнить детали заказа и выбрать наиболее подходящий способ оплаты и доставки товара.</span></span></span></p></div></div></div></div></div></div>
<div class="s-elements-grid valign-middle use-flex">
<div class="s-elements-grid__cell cell-0">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node505 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node506 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px sm-wrap xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 116px;">
<div class="cont">
<div class="node node507 widget widget-element-number">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node507_meta" class="code">
<div class="number">
	01
</div></div></div></div></div></div></div></div>
<div class="col" style="width: 100%;">
<div class="cont">
<div class="node node508 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="bgimage" style="height: 50px;">
<img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg270" preserveAspectRatio="xMinYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="rgb(229, 56, 53)" d="M48.851,13.399L19.953,42.297l-7.81-7.811c-0.753-0.753-1.972-0.753-2.725,0 c-0.753,0.752-0.753,1.973,0,2.725l9.172,9.173c0.376,0.377,0.869,0.564,1.362,0.564s0.986-0.188,1.362-0.564l30.261-30.259 c0.752-0.753,0.752-1.973,0-2.726C50.823,12.646,49.604,12.647,48.851,13.399z"></path><path fill="rgb(229, 56, 53)" d="M55.584,0H4.415C1.98,0,0,1.981,0,4.416v51.168C0,58.019,1.98,60,4.415,60h51.169 C58.019,60,60,58.019,60,55.584V4.416C60,1.981,58.019,0,55.584,0z M56.146,55.584c0,0.311-0.252,0.562-0.562,0.562H4.415 c-0.31,0-0.562-0.251-0.562-0.562V4.416c0-0.31,0.252-0.562,0.562-0.562h51.169c0.31,0,0.562,0.252,0.562,0.562V55.584z"></path></g></svg></div><noscript><img src="img/x207--black.png.pagespeed.ic.fsdoorwBXx.png" alt=""></noscript></div></div></div>
<div class="node node509 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="letter-spacing: 0.1em; line-height: 1.5;" class="p">
<span style="font-size: 14px;">ОСТАВЬТЕ ЗАЯВКУ</span></span></h3></div></div></div></div>
<div class="node node510 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="line-height: 1.5;">Выберете понравившейся Вам товар. Оформите заявку и мы свяжемся с вами в ближайшее время. Или перезвоните по контактным номерам на сайте.</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-1">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node515 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node516 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px sm-wrap xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 116px;">
<div class="cont">
<div class="node node517 widget widget-element-number">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node517_meta" class="code">
<div class="number">
	02
</div></div></div></div></div></div></div></div>
<div class="col" style="width: 100%;">
<div class="cont">
<div class="node node518 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="bgimage" style="height: 49px;">
<img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg271" preserveAspectRatio="xMinYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="rgb(229, 55, 52)" d="M21.159,3.173c0.023-0.002,0.044-0.003,0.062-0.004c0.018,0.041,0.038,0.099,0.062,0.173 c0.009,0.032,0.02,0.063,0.031,0.095l4.556,12.314c0.019,0.051,0.032,0.107,0.038,0.157c-0.649,0.423-0.906,1.27-0.571,1.993 c0.269,0.578,0.841,0.918,1.438,0.918c0.224,0,0.45-0.048,0.666-0.147c1.646-0.764,1.941-2.623,1.392-4.043l-4.532-12.25 c-0.52-1.668-1.729-2.504-3.41-2.363c-0.873,0.074-1.519,0.842-1.444,1.713C19.521,2.601,20.281,3.243,21.159,3.173z"></path><path fill="rgb(229, 55, 52)" d="M38.503,40.229c-0.297-0.3-0.7-0.469-1.122-0.47c0,0-0.002,0-0.004,0c-0.42,0-0.823,0.167-1.12,0.465 c-0.282,0.281-0.497,0.527-0.698,0.758c-0.346,0.396-0.555,0.634-1.059,0.972c-0.388,0.257-0.934,0.072-1.234-0.378L20.897,22.943 c-0.343-0.513-0.272-1.26,0.139-1.535c0.491-0.327,0.565-0.354,0.923-0.48c0.248-0.088,0.588-0.208,1.128-0.438 c0.789-0.335,1.169-1.235,0.858-2.033L17.693,2.394c-0.158-0.406-0.477-0.729-0.881-0.894s-0.858-0.154-1.254,0.027 c-2.13,0.975-3.984,2.232-5.685,3.861c-1.785,1.75-3.649,4.317-4.336,5.973c-0.095,0.229-0.135,0.478-0.116,0.725 c0.505,6.775,5.047,17.616,11.301,26.977c6.156,9.217,14.627,17.757,20.6,20.768c0.221,0.111,0.465,0.17,0.713,0.17h0.002 c2.342-0.002,5.42-1.209,6.649-1.733c2.274-0.999,4.624-2.428,5.847-3.556c0.316-0.292,0.5-0.699,0.51-1.129 s-0.156-0.846-0.459-1.15L38.503,40.229z M43.428,55.358c-1.927,0.822-3.805,1.363-5.034,1.458 c-5.44-2.918-13.37-11.032-19.036-19.514C13.505,28.543,9.23,18.554,8.615,12.248c0.586-1.176,1.977-3.126,3.464-4.585 c1.017-0.973,2.105-1.793,3.299-2.482l5.038,12.944c-0.306,0.13-0.617,0.301-1.14,0.648c-1.863,1.248-2.328,3.964-1.016,5.926 l12.367,18.633c0.8,1.197,2.099,1.913,3.474,1.913c0.768,0,1.514-0.227,2.158-0.656c0.513-0.343,0.869-0.653,1.161-0.948 l9.644,9.739C46.092,54.027,44.798,54.757,43.428,55.358z"></path><path fill="rgb(229, 55, 52)" d="M53.822,47.119c-0.035-0.044-0.073-0.085-0.113-0.124l-9.625-9.449c-1.083-1.027-2.956-1.459-4.294-0.238 c-0.646,0.59-0.692,1.593-0.103,2.238c0.55,0.601,1.454,0.683,2.098,0.217c0.037,0.019,0.075,0.042,0.098,0.062l9.5,9.327 c0.043,0.105,0.061,0.342-0.034,0.515c-0.422,0.767-0.144,1.729,0.622,2.152c0.243,0.134,0.505,0.197,0.764,0.197 c0.559,0,1.1-0.296,1.389-0.819C54.834,49.91,54.707,48.194,53.822,47.119z"></path></g></svg></div><noscript><img src="img/x159--black.png.pagespeed.ic.pQUm5xIvao.png" alt=""></noscript></div></div></div>
<div class="node node519 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="letter-spacing: 0.1em; line-height: 1.5;" class="p">
<span style="font-size: 14px;">КОНСУЛЬТАЦИЯ</span></span></h3></div></div></div></div>
<div class="node node520 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="line-height: 1.5;">Наш специалист проконсультирует Вас по Икре, расскажет про Акции и Скидки и ответит на все интересующие вопросы.</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-2">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node525 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node526 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px sm-wrap xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 116px;">
<div class="cont">
<div class="node node527 widget widget-element-number">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node527_meta" class="code">
<div class="number">
	03
</div></div></div></div></div></div></div></div>
<div class="col" style="width: 100%;">
<div class="cont">
<div class="node node528 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="bgimage" style="height: 50px;">
<img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg272" preserveAspectRatio="xMinYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="rgb(229, 55, 52)" d="M11.008,24.796c0.029,0.03,0.062,0.051,0.094,0.078c0.037,0.031,0.074,0.063,0.113,0.092 c0.055,0.039,0.113,0.071,0.172,0.103c0.039,0.021,0.075,0.043,0.115,0.061c0.068,0.03,0.141,0.052,0.212,0.07 c0.033,0.01,0.064,0.022,0.098,0.029c0.106,0.022,0.214,0.034,0.323,0.034l0,0l0,0c0.098,0,0.193-0.01,0.289-0.027 c0.029-0.006,0.057-0.016,0.086-0.022c0.065-0.017,0.131-0.033,0.193-0.058c0.035-0.014,0.069-0.031,0.104-0.047 c0.055-0.025,0.109-0.053,0.161-0.085c0.036-0.022,0.069-0.047,0.104-0.072c0.028-0.021,0.058-0.036,0.085-0.059L25.67,14.438 c0.676-0.564,0.766-1.569,0.201-2.244c-0.563-0.676-1.569-0.766-2.245-0.201l-11.396,9.52l-2.762-2.763 c-0.622-0.622-1.632-0.622-2.254,0c-0.623,0.622-0.623,1.632,0,2.254L11.008,24.796z"></path><path fill="rgb(229, 55, 52)" d="M11.008,48.844c0.029,0.03,0.062,0.051,0.094,0.077c0.037,0.032,0.074,0.064,0.113,0.093 c0.055,0.039,0.113,0.071,0.172,0.103c0.039,0.021,0.075,0.043,0.115,0.061c0.068,0.03,0.141,0.051,0.212,0.07 c0.033,0.01,0.064,0.022,0.098,0.029c0.106,0.022,0.214,0.034,0.323,0.034l0,0l0,0c0.098,0,0.193-0.01,0.289-0.027 c0.029-0.006,0.057-0.016,0.086-0.022c0.065-0.017,0.131-0.033,0.193-0.058c0.035-0.014,0.069-0.031,0.104-0.048 c0.055-0.025,0.109-0.052,0.161-0.084c0.036-0.022,0.069-0.047,0.104-0.072c0.028-0.021,0.058-0.036,0.085-0.059L25.67,38.485 c0.676-0.564,0.766-1.57,0.201-2.245c-0.563-0.675-1.569-0.767-2.245-0.201L12.23,45.56l-2.762-2.763 c-0.622-0.623-1.632-0.623-2.254,0c-0.623,0.622-0.623,1.631,0,2.254L11.008,48.844z"></path><path fill="rgb(229, 55, 52)" d="M58.406,0H1.594C0.713,0,0,0.714,0,1.594v56.812C0,59.286,0.713,60,1.594,60h56.812 C59.287,60,60,59.286,60,58.406V1.594C60,0.714,59.287,0,58.406,0z M56.812,56.812H3.188V3.188h53.625V56.812z"></path><path fill="rgb(229, 55, 52)" d="M24.701,24.081c0,0.881,0.713,1.594,1.594,1.594h24.701c0.881,0,1.594-0.713,1.594-1.594 c0-0.88-0.713-1.594-1.594-1.594H26.295C25.414,22.487,24.701,23.201,24.701,24.081z"></path><path fill="rgb(229, 55, 52)" d="M50.996,45.307H26.295c-0.881,0-1.594,0.714-1.594,1.594c0,0.881,0.713,1.594,1.594,1.594h24.701 c0.881,0,1.594-0.713,1.594-1.594C52.59,46.021,51.877,45.307,50.996,45.307z"></path></g></svg></div><noscript><img src="img/x211--black.png.pagespeed.ic.HrV0pZ4zhd.png" alt=""></noscript></div></div></div>
<div class="node node529 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="letter-spacing: 0.1em; line-height: 1.5;" class="p">
<span style="font-size: 14px;">ПОДТВЕРЖДЕНИЕ</span></span></h3></div></div></div></div>
<div class="node node530 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="line-height: 1.5;">Менеджер уточнит данные для заказа и подтвердит, что заказ поступил по Акции.</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-3">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node535 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node536 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px sm-wrap xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 116px;">
<div class="cont">
<div class="node node537 widget widget-element-number">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node537_meta" class="code">
<div class="number">
	04
</div></div></div></div></div></div></div></div>
<div class="col" style="width: 100%;">
<div class="cont">
<div class="node node538 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="bgimage" style="height: 50px;">
<img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg273" preserveAspectRatio="xMinYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="rgb(229, 55, 52)" d="M59.431,0.553c-0.526-0.521-1.304-0.689-1.997-0.439C56.886,0.312,43.978,4.996,39.99,7.708 c-3.49,2.373-8.674,7.236-13.892,12.501c-1.399-0.707-3.483-1.572-5.325-1.572c-6.807,0-17.881,12.619-19.121,14.058 c-0.358,0.416-0.411,1.016-0.129,1.488c0.233,0.392,0.654,0.622,1.097,0.622c0.091,0,0.183-0.01,0.274-0.03l11.812-2.603 c-4.115,4.462-7.079,7.812-7.41,8.186c-0.669,0.759-0.633,1.907,0.082,2.622l1.248,1.248c-1.884,0.027-3.652,0.771-4.986,2.105 c-2.517,2.518-3.336,10.671-3.475,12.28c-0.031,0.375,0.104,0.746,0.369,1.013C0.775,59.866,1.102,60,1.438,60 c0.036,0,0.073-0.002,0.11-0.005c1.608-0.139,9.764-0.957,12.279-3.474c1.336-1.335,2.078-3.104,2.105-4.987l1.23,1.23 c0.372,0.373,0.862,0.562,1.354,0.562c0.451,0,0.902-0.159,1.266-0.478c0.38-0.335,3.807-3.358,8.35-7.54l-2.655,12.048 c-0.118,0.538,0.12,1.09,0.593,1.372c0.203,0.121,0.429,0.18,0.654,0.18c0.299,0,0.596-0.104,0.834-0.31 c1.438-1.24,14.057-12.313,14.057-19.119c0-1.895-0.914-4.048-1.633-5.446c5.258-5.211,10.106-10.39,12.459-13.888 c2.706-4.022,7.26-17.048,7.451-17.601C60.137,1.848,59.956,1.071,59.431,0.553z M12.022,54.716 c-1.241,1.241-5.765,2.155-9.148,2.571c0.417-3.384,1.331-7.906,2.571-9.148c0.879-0.878,2.047-1.362,3.289-1.362 s2.41,0.484,3.288,1.362c0.878,0.879,1.362,2.046,1.362,3.288S12.9,53.838,12.022,54.716z M6.297,31.41 C10.445,27.112,17,21.19,20.773,21.19c1.04,0,2.328,0.445,3.432,0.943c-2.223,2.277-4.412,4.58-6.445,6.751L6.297,31.41z M18.596,48.779l-7.229-7.229c0.409-0.457,0.921-1.027,1.509-1.677l7.377,7.422C19.611,47.871,19.048,48.376,18.596,48.779z M39.062,39.479c0,3.772-5.923,10.328-10.221,14.476l2.577-11.695c2.14-2.001,4.405-4.155,6.644-6.338 C38.582,37.052,39.062,38.399,39.062,39.479z M49.264,18.008c-4.688,6.971-20.585,21.672-28.062,28.431l-7.469-7.514 c6.779-7.48,21.47-23.329,28.412-28.05c2.207-1.501,8.268-3.989,12.728-5.71C53.196,9.663,50.76,15.783,49.264,18.008z"></path><path fill="rgb(229, 55, 52)" d="M36.084,19.914c0,2.347,1.908,4.256,4.255,4.256s4.256-1.909,4.256-4.256s-1.909-4.256-4.256-4.256 S36.084,17.567,36.084,19.914z M43.318,19.914c0,1.643-1.336,2.979-2.979,2.979c-1.643,0-2.979-1.336-2.979-2.979 s1.336-2.979,2.979-2.979C41.982,16.936,43.318,18.271,43.318,19.914z"></path></g></svg></div><noscript><img src="img/x231--black.png.pagespeed.ic.b3be14gV7C.png" alt=""></noscript></div></div></div><div class="node node539 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="letter-spacing: 0.1em; line-height: 1.5;" class="p">
<span style="font-size: 14px;">ДОСТАВКА</span></span></h3></div></div></div></div>
<div class="node node540 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="line-height: 1.5;">Мы отправим Ваш заказ в течении 40 минут после подтверждения. Новой Почтой или Курьером.</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-4">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node545 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node546 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px sm-wrap xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 116px;">
<div class="cont">
<div class="node node547 widget widget-element-number">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node547_meta" class="code">
<div class="number">
	05
</div></div></div></div></div></div></div></div>
<div class="col" style="width: 100%;">
<div class="cont">
<div class="node node548 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="bgimage" style="height: 50px;">
<img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg274" preserveAspectRatio="xMinYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="rgb(229, 55, 52)" d="M57.503,27.502h-5.896C50.536,17.424,42.55,9.385,32.497,8.229v-5.73C32.497,1.119,31.38,0,30,0 s-2.497,1.119-2.497,2.498v5.73C17.45,9.385,9.464,17.424,8.396,27.502H2.497C1.118,27.502,0,28.619,0,29.998 c0,1.381,1.118,2.498,2.497,2.498h5.946c1.228,9.898,9.135,17.752,19.06,18.893v6.113C27.503,58.881,28.62,60,30,60 s2.497-1.119,2.497-2.498v-6.113c9.926-1.141,17.832-8.994,19.061-18.893h5.945c1.379,0,2.497-1.117,2.497-2.498 C60,28.619,58.882,27.502,57.503,27.502z M32.497,46.334V41.35c0-1.381-1.117-2.498-2.497-2.498s-2.497,1.117-2.497,2.498v4.984 c-7.164-1.078-12.84-6.701-14-13.838h5.15c1.381,0,2.498-1.117,2.498-2.498c0-1.379-1.117-2.496-2.498-2.496h-5.209 c1.016-7.316,6.768-13.121,14.059-14.219v5.373c0,1.379,1.117,2.498,2.497,2.498s2.497-1.119,2.497-2.498v-5.373 c7.291,1.098,13.043,6.902,14.06,14.219h-5.21c-1.379,0-2.498,1.117-2.498,2.496c0,1.381,1.119,2.498,2.498,2.498h5.151 C45.339,39.633,39.661,45.256,32.497,46.334z"></path></g></svg></div><noscript><img src="img/x87--black.png.pagespeed.ic.mB87WtwViT.png" alt=""></noscript></div></div></div>
<div class="node node549 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="letter-spacing: 0.1em; line-height: 1.5;" class="p">
<span style="font-size: 14px;">ПОЛУЧЕНИЕ</span></span></h3></div></div></div></div>
<div class="node node550 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;">
<p style="line-height: 1.5;">Получите свой заказ выбранным способом.</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="s-elements-grid__cell cell-5">
<div class="s-elements-grid__cellwrapper">
<div class="cont cell">
<div class="node node555 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node556 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px sm-wrap xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 116px;">
<div class="cont">
<div class="node node557 widget widget-element-number">
<div class="wrapper1">
<div class="wrapper2">
<div class="metahtml">
<div id="node557_meta" class="code">
<div class="number">
	06
</div></div></div></div></div></div></div></div>
<div class="col" style="width: 100%;">
<div class="cont">
<div class="node node558 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="bgimage" style="height: 50px;">
<img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt=""><svg class="svgicon" id="svg275" preserveAspectRatio="xMinYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="rgb(229, 55, 52)" d="M10.215,20.57H6.38c-0.529,0-0.959,0.429-0.959,0.958c0,0.53,0.43,0.959,0.959,0.959h3.835 c0.53,0,0.959-0.429,0.959-0.959C11.174,20.999,10.745,20.57,10.215,20.57z"></path><path fill="rgb(229, 55, 52)" d="M36.289,20.57h-6.518c-0.529,0-0.959,0.429-0.959,0.958c0,0.53,0.43,0.959,0.959,0.959h6.518 c0.529,0,0.959-0.429,0.959-0.959C37.248,20.999,36.818,20.57,36.289,20.57z"></path><path fill="rgb(229, 55, 52)" d="M23.252,20.57h-6.518c-0.53,0-0.959,0.429-0.959,0.958c0,0.53,0.429,0.959,0.959,0.959h6.518 c0.53,0,0.959-0.429,0.959-0.959C24.211,20.999,23.782,20.57,23.252,20.57z"></path><path fill="rgb(229, 55, 52)" d="M42.808,22.487h3.835c0.53,0,0.959-0.429,0.959-0.959c0-0.529-0.429-0.958-0.959-0.958h-3.835 c-0.529,0-0.959,0.429-0.959,0.958C41.849,22.059,42.278,22.487,42.808,22.487z"></path><path fill="rgb(229, 55, 52)" d="M10.215,46.224H6.38c-0.529,0-0.959,0.43-0.959,0.959s0.43,0.958,0.959,0.958h3.835 c0.53,0,0.959-0.429,0.959-0.958S10.745,46.224,10.215,46.224z"></path><path fill="rgb(229, 55, 52)" d="M23.252,46.224h-6.518c-0.53,0-0.959,0.43-0.959,0.959s0.429,0.958,0.959,0.958h6.518 c0.53,0,0.959-0.429,0.959-0.958S23.782,46.224,23.252,46.224z"></path><path fill="rgb(229, 55, 52)" d="M36.289,46.224h-6.518c-0.529,0-0.959,0.43-0.959,0.959s0.43,0.958,0.959,0.958h6.518 c0.529,0,0.959-0.429,0.959-0.958S36.818,46.224,36.289,46.224z"></path><path fill="rgb(229, 55, 52)" d="M46.643,46.224h-3.835c-0.529,0-0.959,0.43-0.959,0.959s0.43,0.958,0.959,0.958h3.835 c0.53,0,0.959-0.429,0.959-0.958S47.173,46.224,46.643,46.224z"></path><path fill="rgb(229, 55, 52)" d="M55.741,27.766H53.37v-7.839c0-2.791-2.271-5.062-5.063-5.062h-5.438l-1.104-6.95 c-0.084-0.529-0.386-0.999-0.832-1.297c-0.446-0.297-0.997-0.393-1.517-0.266L4.347,14.92c-0.003,0-0.007,0.002-0.01,0.003 C1.889,15.276,0,17.383,0,19.927v28.714c0,2.792,2.271,5.062,5.063,5.062h43.243c2.792,0,5.063-2.271,5.063-5.062v-8.545h2.371 c2.349,0,4.259-2.079,4.259-4.636v-3.058C60,29.846,58.09,27.766,55.741,27.766z M38.304,10.571l0.681,4.293H20.731L38.304,10.571z M49.535,48.641c0,0.677-0.551,1.228-1.229,1.228H5.063c-0.677,0-1.228-0.551-1.228-1.228V19.927c0-0.677,0.551-1.227,1.228-1.227 H41.23h0.013h7.063c0.678,0,1.229,0.55,1.229,1.227v7.839h-1.401c-2.348,0-4.258,2.08-4.258,4.637v3.058 c0,2.557,1.91,4.636,4.258,4.636h1.401V48.641z M56.165,35.46c0,0.488-0.278,0.8-0.424,0.8h-7.607c-0.145,0-0.423-0.312-0.423-0.8 v-3.058c0-0.489,0.278-0.801,0.423-0.801h7.607c0.146,0,0.424,0.312,0.424,0.801V35.46z"></path><path fill="rgb(229, 55, 52)" d="M49.701,32.103c-1.009,0-1.829,0.82-1.829,1.828s0.82,1.828,1.829,1.828s1.828-0.82,1.828-1.828 S50.71,32.103,49.701,32.103z M49.701,34.48c-0.303,0-0.551-0.247-0.551-0.55s0.248-0.55,0.551-0.55c0.304,0,0.55,0.247,0.55,0.55 S50.005,34.48,49.701,34.48z"></path></g></svg></div><noscript><img src="img/x183--black.png.pagespeed.ic.zYAV82gjgm.png" alt=""></noscript></div></div></div>
<div class="node node559 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="letter-spacing: 0.1em; line-height: 1.5;" class="p">
<span style="font-size: 14px;">ОПЛАТА</span></span></h3></div></div></div></div>
<div class="node node560 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center textable" style="opacity: 0.65;"><p style="line-height: 1.5;">Только после того как Вы убедились, что товар соответствует действительности - Вы оплачиваете.</p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div class="cont"></div></div>
<span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<div class="node node565 section section-diagonal" id="доставка" data-opacity="0.95">
<div class="separatortop">
<div class="gradient-top" style="height: 10px;"></div></div>
<div class="wrapper1">
<div class="wrapper2">
<div class="container">
<div class="tbl s-diagonal-tbl xs-wrap">
<div class="td left s-diagonal-td" style="padding-right: 70px; vertical-align: top;">
<div class="cont">
<div class="node node566 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node567 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 40px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: rgb(0, 0, 0);">СПОСОБЫ ДОСТАВКИ</span></span></span></p></div></div></div></div></div><div class="node node568 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" style="text-align: center;"><img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAKCAYAAAC9vt6cAAAAGElEQVQoU2NkoBAwUqifYdQAhtEwACYiABCBAAscfVqOAAAAAElFTkSuQmCC" style="width: 264px;" data-lazy-image="img/f2fda88fc29a1c2672298d67fb34044e.png" data-lazy-image_size="600,400" data-lazy-image_detect="css-width"></div><noscript><img src="img/xf2fda88fc29a1c2672298d67fb34044e.png.pagespeed.ic.gzwnrnLgOY.png" alt=""></noscript></div></div></div></div></div></div></div>
<div class="node node569 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p><span style="color: rgb(0, 0, 0);"><span style="font-size: 16px;">
<strong>Новая Почта:</strong> Доставка по всей Украине за 1 день - оплата при получении (<span style="color: rgb(0, 0, 0);"><span style="font-size: 16px;">наложенным платежом</span></span>).</span></span></p>
<p><span style="color: rgb(0, 0, 0);">
<span style="font-size: 16px;">Отправка в день заказа, Вы получаете товар, уже на следующий день.</span></span></p></div></div></div></div></div></div></div>
<div class="td right s-diagonal-td" style="padding-left: 70px; vertical-align: top;">
<div class="cont">
<div class="node node570 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node571 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 40px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: rgb(0, 0, 0);">СПОСОБЫ ОПЛАТЫ</span></span></span></p></div></div></div></div></div></div></div></div></div>
<div class="node node572 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 50%;">
<div class="cont">
<div class="node node573 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" style="text-align: center;"><img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAKCAYAAAC9vt6cAAAAGElEQVQoU2NkoBAwUqifYdQAhtEwACYiABCBAAscfVqOAAAAAElFTkSuQmCC" style="width: 600px;" data-lazy-image="img/8d34c93b28ad568c181006fec113e39b.png" data-lazy-image_size="600,400" data-lazy-image_detect="css-width"></div><noscript><img src="img/x8d34c93b28ad568c181006fec113e39b.png.pagespeed.ic.3D7TkA_-l0.png" alt=""></noscript></div></div></div></div></div>
<div class="col" style="width: 50%;">
<div class="cont">
<div class="node node574 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" style="text-align: center;"><img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAKCAYAAAC9vt6cAAAAGElEQVQoU2NkoBAwUqifYdQAhtEwACYiABCBAAscfVqOAAAAAElFTkSuQmCC" style="width: 600px;" data-lazy-image="img/05937810c0fd81b5d106f499eb39e8bd.png" data-lazy-image_size="600,400" data-lazy-image_detect="css-width"></div><noscript><img src="img/x05937810c0fd81b5d106f499eb39e8bd.png.pagespeed.ic.NLhN2RRRqu.png" alt=""></noscript></div></div></div></div></div></div></div></div></div></div>
<div class="node node579 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="line-height: 1.4;">
<span style="color: rgb(0, 0, 0);">
<strong>Наложенный платеж:&nbsp;</strong></span>
<span style="color: rgb(0, 0, 0);">Данный вид оплаты возможен при использовании доставки Новой Почтой;</span></p>
<p style="line-height: 0.5;"><br></p>
<p style="line-height: 1.4;">
<span style="color: rgb(0, 0, 0);">
<strong>Наличными:&nbsp;</strong></span>
<span style="color: rgb(0, 0, 0);">Оплата Наличными возможна при получении товара в отделении Новой Почты, Самовывозом или Курьеру.</span></p>
<p style="line-height: 1.4;">
<span style="color: rgb(0, 0, 0);"><br></span>
<span style="color: rgb(0, 0, 0);">
<strong>Безналичный расчет:&nbsp;</strong></span>
<span style="color: rgb(0, 0, 0);">На карту Приват Банка: (наши реквизиты вы можете узнать у менеджера, по контактным тел. указанным на сайте)</span></p></div></div></div></div></div></div></div></div></div>
<script class="adaptive">if(["xs"].indexOf(plp.screen)>=0)document.write("<!--")</script><svg version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none" class="xs-hidden"><path d="M 100 0 H 50 L 50 100 H 100 Z" style="fill: rgb(141, 201, 255);"></path></svg><!-- ADAPTIVE --><span class="plplink"></span></div></div></div><script class="adaptive">if(["xs"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node584 section section-clear xs-hidden" id="обратный-звонок" data-opacity="0.95">
<div class="separatortop">
<div class="gradient-top" style="height: 10px;"></div></div>
<div class="separatorbottom">
<div class="gradient-bottom" style="height: 10px;"></div></div>
<div class="wrapper1">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node585 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h2 class="font-header spans xs-force-center textable">
<span style="text-align: center;" class="p">
<span style="font-size: 32px;">
<span style="color: rgb(0, 118, 164);">
<span style="font-family: &quot;Open Sans&quot;;">
<strong>Бесплатная консультация</strong></span></span></span></span></h2></div></div></div></div>
<div class="node node586 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам в ближайшее время и ответит на все интересующие Вас вопросы!</span></span></span></p></div></div></div></div></div>
<div class="node node587 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-top paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 10%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node588 widget widget-button wow bounceIn" data-wow-delay="0.5s">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid119" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">ЗАКАЗАТЬ ЗВОНОК</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid120">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1.4;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам в ближайшее время!</span></span></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid17" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div><br>
<input type="hidden" name="hid" value="Заявка на обратный звонок"> 
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn submit" id="uid121"><span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="privacy">Политика конфиденциальности</div></div>
<div class="macros-modal">
<div class="modal fade nocolors robots-noindex robots-nocontent" data-modal="privacy" area-context="uid122"><div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center;"><strong>Политика конфиденциальности</strong></p></h4></div>
<div class="modal-body">
<div class="textable">
<p><strong>Политика конфиденциальности</strong><br>Мы не передаем ваши данные третьим лицам. Ваши данные используются только для выполнения заказа. После выполнения заказа вся информация удаляется и негде не хранится.</p><p><strong>Гипертекстовые ссылки на сторонние сайты</strong><br>Настоящий сайт может содержать гипертекстовые ссылки на сторонние сайты и интернет-ресурсы. Риск, связанный с выходом пользователя на внешние сайты по ссылкам, имеющимся на настоящем сайте, лежит целиком на пользователе. Компания не несет ответственности за точность и надежность информации, данных, взглядов или заявлений, представленных на сторонних сайтах. Компания помещает ссылки на другие сайты исключительно для удобства пользователя. Это ни в коей мере не означает, что Компания одобряет содержание данных сайтов или несет за него ответственность, за исключением случаев, когда точно может быть установлено, что Компания располагала данными о возможных нежелательных последствиях использования информации, размещенной на стороннем сайте, и имела техническую возможность предотвратить такое использование.<br>Компания официально заявляет, что на момент размещения ссылок на сторонних сайтах не было обнаружено недостоверной, нежелательной или сомнительной информации. Компания не отслеживает изменения, в том числе изменения оформления и содержимого, произошедшие на сторонних сайтах и не несет никакой ответственности за последствия использования сторонних сайтов, изменившихся с момента размещения ссылок. Освобождение от ответственности действует как в отношении ссылок, размещенных на настоящем сайте, так и в отношении ссылок, оставленных пользователями на форумах, в гостевых книгах и списках рассылки, если таковые имеются. Ответственность за полноту, точность и надежность информации стороннего сайта, в том числе и за возможный ущерб от использования последнего, лежит исключительно на владельце стороннего сайта, и ни в коем случае на лице, разместившем ссылку.</p><p><strong>Авторские права и товарные знаки</strong><br>Компания прикладывает все усилия, направленные на предотвращение использования в своих публикациях графических изображений, аудио и видеозаписей, текстов, являющихся субъектом права собственности третьих лиц. В случае невозможности полного отказа от использования таких материалов, Компания стремится явно указывать правообладателя. Все товарные знаки, логотипы, названия продукции и моделей или производные от них, описывающие продукцию или услуги компании и являющиеся частью информации, размещённой на сайте, являются товарными знаками и/или собственностью компании.<br>Любое использование товарных знаков компании или их производных (за исключением случаев, когда имеется письменное разрешение компании на использование товарных знаков) не допускается.<br>Любое несанкционированное использование или копирование информации сайта может привести к нарушению прав собственности на товарные знаки, авторские права или другие права собственности.</p></div></div></div></div></div></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div class="col" style="width: 10%;"><div class="cont"></div></div></div></div></div></div></div></div></div>
<span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<script class="adaptive">if(["md","lg"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node597 section section-clear md-hidden lg-hidden" id="обратный-звонок" data-opacity="0.95"><div class="separatortop">
<div class="gradient-top" style="height: 10px;"></div></div>
<div class="separatorbottom">
<div class="gradient-bottom" style="height: 10px;"></div></div>
<div class="wrapper1">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node598 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h2 class="font-header spans xs-force-center textable">
<span style="text-align: center;" class="p">
<span style="font-size: 24px;">
<span style="color: rgb(0, 118, 164);">
<span style="font-family: &quot;Open Sans&quot;;">
<strong>Остались вопросы?</strong></span></span></span></span></h2></div></div></div></div>
<div class="node node599 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="color: inherit;">Наш менеджер перезвонит Вам в ближайшее время и ответит на все интересующие Вас вопросы!</span></span></span></p></div></div></div></div></div>
<div class="node node600 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-top paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 10%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node601 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid276" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">ЗАКАЗАТЬ ЗВОНОК</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid277">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1.3;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">Наш менеджер перезвонит Вам в ближайшее время</span></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid18" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div><br>
<input type="hidden" name="hid" value="Заявка на обратный звонок">
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn submit" id="uid278">
<span class="text">ОТПРАВИТЬ ЗАЯВКУ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="privacy">Политика конфиденциальности</div></div>
<div class="macros-modal">
<div class="modal fade nocolors robots-noindex robots-nocontent" data-modal="privacy" area-context="uid279"><div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center;">
<strong>Политика конфиденциальности</strong></p></h4></div>
<div class="modal-body">
<div class="textable">
<p><strong>Политика конфиденциальности</strong><br>Мы не передаем ваши данные третьим лицам. Ваши данные используются только для выполнения заказа. После выполнения заказа вся информация удаляется и негде не хранится.</p><p><strong>Гипертекстовые ссылки на сторонние сайты</strong><br>Настоящий сайт может содержать гипертекстовые ссылки на сторонние сайты и интернет-ресурсы. Риск, связанный с выходом пользователя на внешние сайты по ссылкам, имеющимся на настоящем сайте, лежит целиком на пользователе. Компания не несет ответственности за точность и надежность информации, данных, взглядов или заявлений, представленных на сторонних сайтах. Компания помещает ссылки на другие сайты исключительно для удобства пользователя. Это ни в коей мере не означает, что Компания одобряет содержание данных сайтов или несет за него ответственность, за исключением случаев, когда точно может быть установлено, что Компания располагала данными о возможных нежелательных последствиях использования информации, размещенной на стороннем сайте, и имела техническую возможность предотвратить такое использование.<br>Компания официально заявляет, что на момент размещения ссылок на сторонних сайтах не было обнаружено недостоверной, нежелательной или сомнительной информации. Компания не отслеживает изменения, в том числе изменения оформления и содержимого, произошедшие на сторонних сайтах и не несет никакой ответственности за последствия использования сторонних сайтов, изменившихся с момента размещения ссылок. Освобождение от ответственности действует как в отношении ссылок, размещенных на настоящем сайте, так и в отношении ссылок, оставленных пользователями на форумах, в гостевых книгах и списках рассылки, если таковые имеются. Ответственность за полноту, точность и надежность информации стороннего сайта, в том числе и за возможный ущерб от использования последнего, лежит исключительно на владельце стороннего сайта, и ни в коем случае на лице, разместившем ссылку.</p><p><strong>Авторские права и товарные знаки</strong><br>Компания прикладывает все усилия, направленные на предотвращение использования в своих публикациях графических изображений, аудио и видеозаписей, текстов, являющихся субъектом права собственности третьих лиц. В случае невозможности полного отказа от использования таких материалов, Компания стремится явно указывать правообладателя. Все товарные знаки, логотипы, названия продукции и моделей или производные от них, описывающие продукцию или услуги компании и являющиеся частью информации, размещённой на сайте, являются товарными знаками и/или собственностью компании.<br>Любое использование товарных знаков компании или их производных (за исключением случаев, когда имеется письменное разрешение компании на использование товарных знаков) не допускается.<br>Любое несанкционированное использование или копирование информации сайта может привести к нарушению прав собственности на товарные знаки, авторские права или другие права собственности.</p></div></div></div></div></div></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div class="col" style="width: 10%;"><div class="cont"></div></div></div></div></div></div></div></div></div>
<span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<div class="node node610 section section-clear" id="отзывы" data-opacity="0.95">
<div class="wrapper1">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node611 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-scale-80">
<h2 class="font-header spans xs-force-center textable">
<span style="text-align: center;" class="p">
<span style="font-size: 36px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">Наши Отзывы</span></span></span></h2></div></div></div></div>
<div class="node node612 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="font-size: 24px; text-align: center;" class="p">
</span></h3></div></div></div></div>
<div class="node node613 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node614 widget widget-text">
<div class="wrapper1">
<div class="wrapper2"><div class="">
<div class="xs-force-center textable"><p>ОТЗЫВЫ:</p></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node618 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node619 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 40px; height: 40px;"><svg class="svgicon" id="svg123" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="30" cy="30" r="29"></circle><circle class="st0" cx="21.188" cy="20" r="4.555"></circle><circle class="st0" cx="38.407" cy="20" r="4.555"></circle><path class="st0" d="M43.008,39.778"></path><path class="st0" d="M15.27,41.288c8.048,8.316,21.249,8.362,29.357,0.107"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Артём:</strong> Икра очень вкусная.Семья довольна.Рекомендую!!!!!!</p></div>
<div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node623 widget widget-line">
<div class="wrapper1"><div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node624 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node625 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 40px; height: 40px;"><svg class="svgicon" id="svg124" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="30" cy="30" r="29"></circle><circle class="st0" cx="21.188" cy="20" r="4.555"></circle><circle class="st0" cx="38.407" cy="20" r="4.555"></circle><path class="st0" d="M43.008,39.778"></path><path class="st0" d="M15.27,41.288c8.048,8.316,21.249,8.362,29.357,0.107"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Анатолий:</strong> За свою цену очень высокое качество.</p></div>
<div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node629 widget widget-line">
<div class="wrapper1"><div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node630 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node631 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 40px; height: 40px;" data-lazy-image="img/6aaf6aff891b09c3383975f37bd9fc2d.jpg" data-lazy-image_size="100,100" data-lazy-image_detect="css-width-height"></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Людмила:</strong><span>&nbsp;</span>Очень вкусная икра! Брала икру кеты,качество отменное! Вкус и внешний вид отличные! Всем рекомендую!</p></div>
<div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node635 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node636 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node637 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 40px; height: 40px;"><svg class="svgicon" id="svg125" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="30" cy="30" r="29"></circle><circle class="st0" cx="21.188" cy="20" r="4.555"></circle><circle class="st0" cx="38.407" cy="20" r="4.555"></circle><path class="st0" d="M43.008,39.778"></path><path class="st0" d="M15.27,41.288c8.048,8.316,21.249,8.362,29.357,0.107"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Анастасия:</strong><span>&nbsp;</span>икра супер , а самое главное получили супер хорошую консультацыю , спасибо ребята за икру</p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node641 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node642 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node643 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 40px; height: 40px;" data-lazy-image="img/5731405da60923fc950eec030f7ce223.jpg" data-lazy-image_size="100,100" data-lazy-image_detect="css-width-height"></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Світлана:&nbsp;</strong>Раджу. Гарна компанія. відповідальна і швидка. Дякую за смачну ікру.</p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node647 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node648 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node649 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><div><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 40px; height: 40px;"><svg class="svgicon" id="svg126" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="30" cy="30" r="29"></circle><circle class="st0" cx="21.188" cy="20" r="4.555"></circle><circle class="st0" cx="38.407" cy="20" r="4.555"></circle><path class="st0" d="M43.008,39.778"></path><path class="st0" d="M15.27,41.288c8.048,8.316,21.249,8.362,29.357,0.107"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Паша:</strong> Работу выполнили! Доволен!</p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node653 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node654 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node655 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><div>
<img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 40px; height: 40px;"><svg class="svgicon" id="svg127" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="30" cy="30" r="29"></circle><circle class="st0" cx="21.188" cy="20" r="4.555"></circle><circle class="st0" cx="38.407" cy="20" r="4.555"></circle><path class="st0" d="M43.008,39.778"></path><path class="st0" d="M15.27,41.288c8.048,8.316,21.249,8.362,29.357,0.107"></path></g></svg></div></div></div><div class="td text"><div style="padding-left: 14px;"><div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Марина:</strong><span>&nbsp;с</span>пасибо, все прекрасно!</p></div>
<div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node659 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node660 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node661 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 40px; height: 40.4px;" data-lazy-image="img/2ef2f3bca9d04244d2a54f424e0c7db4.jpg" data-lazy-image_size="100,101" data-lazy-image_detect="css-width-height"></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Катя:&nbsp;</strong>Большое спасибо!!! Все вовремя. С качеством не подвели.</p></div><div class="cont"></div></div></div></div></div></div></div></div></div><div class="col" style="width: 10.0435%;"><div class="cont"></div></div></div></div></div></div></div>
<div class="node node665 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node666 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap"><div class="gridwrap"><div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node667 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><div><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 40px; height: 40px;"><svg class="svgicon" id="svg128" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="30" cy="30" r="29"></circle><circle class="st0" cx="21.188" cy="20" r="4.555"></circle><circle class="st0" cx="38.407" cy="20" r="4.555"></circle><path class="st0" d="M43.008,39.778"></path><path class="st0" d="M15.27,41.288c8.048,8.316,21.249,8.362,29.357,0.107"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Роман:</strong><span>&nbsp;</span>Навіть не сумнівайтесь! Я купував на стіл,реально смачно!</p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node671 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node672 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node673 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><div><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 40px; height: 40px;"><svg class="svgicon" id="svg129" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="30" cy="30" r="29"></circle><circle class="st0" cx="21.188" cy="20" r="4.555"></circle><circle class="st0" cx="38.407" cy="20" r="4.555"></circle><path class="st0" d="M43.008,39.778"></path><path class="st0" d="M15.27,41.288c8.048,8.316,21.249,8.362,29.357,0.107"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Іра:</strong><span>&nbsp;&nbsp;</span>Спасибі, Антон, ікра відмінна, хоч і трохи солонувата була</p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;"><div class="cont"></div></div></div></div></div></div></div>
<div class="node node677 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node678 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node679 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 40px; height: 40px;" data-lazy-image="img/fad4d809217462216c75c2158f91e8d6.jpg" data-lazy-image_size="100,100" data-lazy-image_detect="css-width-height"></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Наташа:</strong><span>&nbsp;</span>очень профессиональный менеджер, максимально дал консультацию по всем видам икры ,купила кету, очень вкусная, гости на свадьбе были очень довольны.</p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node683 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node684 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node685 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><div><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 40px; height: 40px;"><svg class="svgicon" id="svg130" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="30" cy="30" r="29"></circle><circle class="st0" cx="21.188" cy="20" r="4.555"></circle><circle class="st0" cx="38.407" cy="20" r="4.555"></circle><path class="st0" d="M43.008,39.778"></path><path class="st0" d="M15.27,41.288c8.048,8.316,21.249,8.362,29.357,0.107"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Люба:</strong> Я теж нещодавно замовляла тут. Доставили дуже оперативно. Подруга, дуречі мені і порадили тут замовити)</p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node689 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node690 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node691 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><div><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 40px; height: 40px;"><svg class="svgicon" id="svg131" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="30" cy="30" r="29"></circle><circle class="st0" cx="21.188" cy="20" r="4.555"></circle><circle class="st0" cx="38.407" cy="20" r="4.555"></circle><path class="st0" d="M43.008,39.778"></path><path class="st0" d="M15.27,41.288c8.048,8.316,21.249,8.362,29.357,0.107"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Александр:</strong><span>&nbsp;</span>Заказал икру Горбушы на сайте, перезвонили в течении 15 минут, заказал Икру горбушы , качество супер мне очень понравилось, буду покупать ещё</p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node695 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node696 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node697 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><div><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 40px; height: 40px;"><svg class="svgicon" id="svg132" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="30" cy="30" r="29"></circle><circle class="st0" cx="21.188" cy="20" r="4.555"></circle><circle class="st0" cx="38.407" cy="20" r="4.555"></circle><path class="st0" d="M43.008,39.778"></path><path class="st0" d="M15.27,41.288c8.048,8.316,21.249,8.362,29.357,0.107"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Аліна:</strong><span>&nbsp;</span>Відмінний магазин, рекомендую! Гості були в захваті. Замовляла ікру кети</p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node701 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node702 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node703 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 40px; height: 40px;" data-lazy-image="img/9e8e69d121273eafe6308eef17937007.jpg" data-lazy-image_size="100,100" data-lazy-image_detect="css-width-height"></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Маргарита:</strong><span>&nbsp;</span>Рекомендую. Перезвонили в течении часа. Продукт качественный ,очень вкусно! Спасибо!</p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node707 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node708 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node709 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><div><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 40px; height: 40px;"><svg class="svgicon" id="svg133" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="30" cy="30" r="29"></circle><circle class="st0" cx="21.188" cy="20" r="4.555"></circle><circle class="st0" cx="38.407" cy="20" r="4.555"></circle><path class="st0" d="M43.008,39.778"></path><path class="st0" d="M15.27,41.288c8.048,8.316,21.249,8.362,29.357,0.107"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Олег:</strong><span>&nbsp;</span>Спасибо за качественную консультацию,лояльный подход к моему выбору и быструю доставку!</p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node713 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node714 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node715 widget widget-imagedtext">
<div class="wrapper1"><div class="wrapper2"><div class="tbl middle"><div class="td icon" style="width: 40px;"><div class="wrap"><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 40px; height: 40px;" data-lazy-image="img/de5904808d26ba7a72ff44ee3865f25e.jpg" data-lazy-image_size="100,100" data-lazy-image_detect="css-width-height"></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Назар:</strong><span>&nbsp;</span>Спасибо большое что не подвели,очень вкусная икра всем советую !!!</p></div><div class="cont"></div></div></div></div></div></div></div></div></div><div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node719 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node720 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node721 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC" style="width: 40px; height: 40px;" data-lazy-image="img/c72086e5a6f546bad22cd62d01a66eb7.jpg" data-lazy-image_size="100,100" data-lazy-image_detect="css-width-height"></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Толя:</strong><span>&nbsp;</span>Та звичайно норм! Я в їх вже декілька разів замовляв. А замовляв тут місяць тому - то таких знижок тоді не було. Але бачу і тут вони не вічні - сьогодні до речі останній день.<span>&nbsp;</span></p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node725 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node726 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node727 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><div><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 40px; height: 40px;"><svg class="svgicon" id="svg134" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="30" cy="30" r="29"></circle><circle class="st0" cx="21.188" cy="20" r="4.555"></circle><circle class="st0" cx="38.407" cy="20" r="4.555"></circle><path class="st0" d="M43.008,39.778"></path><path class="st0" d="M15.27,41.288c8.048,8.316,21.249,8.362,29.357,0.107"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Илья:</strong> Позвонил, заказал, привезли. Икра отличного качества! Не та что в магазинах и супермаркетах как на вид так и на вкус. Однозначно буду заказывать ещё. Также приятно удивлен оперативностью, когда заказывал, сказал- надо, мне ответили- сделаем через столько-то, в назначенное время привезли. Рекомендую!</p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;">
<div class="cont"></div></div></div></div></div></div></div>
<div class="node node731 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node732 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 9.95652%;">
<div class="cont"></div></div>
<div class="col" style="width: 80%;">
<div class="cont">
<div class="node node733 widget widget-imagedtext">
<div class="wrapper1">
<div class="wrapper2">
<div class="tbl middle">
<div class="td icon" style="width: 40px;">
<div class="wrap"><div><img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII=" style="width: 40px; height: 40px;"><svg class="svgicon" id="svg135" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><circle class="st0" cx="30" cy="30" r="29"></circle><circle class="st0" cx="21.188" cy="20" r="4.555"></circle><circle class="st0" cx="38.407" cy="20" r="4.555"></circle><path class="st0" d="M43.008,39.778"></path><path class="st0" d="M15.27,41.288c8.048,8.316,21.249,8.362,29.357,0.107"></path></g></svg></div></div></div>
<div class="td text">
<div style="padding-left: 14px;">
<div class="cont"></div>
<div class="textable" style="margin-top: 0px; opacity: 1;">
<p><strong>Валентина:</strong><span>&nbsp;</span>Отличное качество продукции. Компания супер. Покупаю постоянно только у них.</p></div><div class="cont"></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 10.0435%;"><div class="cont"></div></div></div></div></div></div></div><div class="node node737 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.37); border-radius: 0px;"></div></div></div></div></div>
<div class="node node738 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node739 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable">
<span style="font-size: 24px; text-align: center;" class="p">
</span></h3></div></div></div></div>
<div class="node node740 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h3 class="font-header spans xs-force-center textable"><span style="font-size: 24px; text-align: center;" class="p">
</span></h3></div></div></div></div>
<div class="node node741 widget widget-button wow bounceIn" data-wow-delay="0.2s">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
</div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid137">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><p style="font-size: 24px; text-align: center;">
</p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form class="form text-in" data-form="" data-fields="">
<div class="fields">
<div class="field" data-type="name">
<div class="input">
<input class="form-control text" type="text" data-placeholder="true" value="Имя *" style="border-radius: 5px;"></div></div>
<div class="field" data-type="text">
<div class="input">
<input class="form-control text" type="text" data-placeholder="true" value="№ Заказа *" style="border-radius: 5px;"></div></div>
<div class="field" data-type="textarea">
<div class="input">
<textarea class="form-control textarea" data-placeholder="true" style="border-radius: 5px;">Ваш Отзыв *</textarea></div></div>
<div class="field" data-type="file">
<div class="input">
<div class="form-control file">
<span class="state">Выберите файл...</span>
<div class="pseudo" action="/app/f" method="POST" enctype="multipart/form-data">
<input type="hidden" name="ImageUploadForm[page]" value="1839871">
<input type="file" name="ImageUploadForm[image]"></div></div></div></div></div>
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn submit" id="uid138" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false"><span class="text">ОПУБЛИКОВАТЬ ОТЗЫВ</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="agreement">Политика конфиденциальности</div></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<span class="plplink"></span></div></div></div>
<script class="adaptive">if(["xs","md"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node747 section section-clear xs-hidden md-hidden" id="контакты" data-opacity="0.95">
<div class="separatortop">
<div class="gradient-top" style="height: 10px;"></div></div>
<div class="wrapper1">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node748 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node749 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="font-header xs-force-center textable">
<p style="letter-spacing: 0.05em; text-align: center;">
<span style="font-size: 24px;">КОНТАКТЫ</span></p></div></div></div></div></div>
<div class="node node750 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 20.5038%;">
<div class="cont">
<div class="node node751 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h1 class="spans xs-force-center textable">
<span class="p"><span style="color: rgb(238, 29, 36);">
<span style="font-size: 22px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">MORE-IZ-IKRY</span></span></span></span>
<span class="p"><span style="font-size: 14px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">ИКРА В УКРАИНЕ</span></span></span></h1></div></div></div></div></div></div>
<div class="col" style="width: 57.4098%;">
<div class="cont">
<div class="node node752 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 15.8662%;">
<div class="cont">
<div class="node node753 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#икра" target="_self">
<button class="btn" id="uid139" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">Икра</span></button></a></div></div></div></div></div></div></div>
<div class="col" style="width: 34.1338%;">
<div class="cont">
<div class="node node755 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#доставка" target="_self">
<button class="btn" id="uid140" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">Доставка/Оплата</span></button></a></div></div></div></div></div></div></div>
<div class="col" style="width: 28.9002%;">
<div class="cont">
<div class="node node757 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#какзаказать" target="_self">
<button class="btn" id="uid141" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">Как Заказать?</span></button></a></div></div></div></div></div></div></div>
<div class="col" style="width: 21.0998%;">
<div class="cont">
<div class="node node759 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#отзывы" target="_self">
<button class="btn" id="uid142" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">Отзывы</span></button></a></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node763 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont"></div></div></div></div></div></div>
<div class="col" style="width: 22.0865%;">
<div class="cont">
<div class="node node764 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(38, 38, 38);">ГРАФИК РАБОТЫ:</span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(38, 38, 38);">9:00-20:00</span></span></p></div></div></div></div></div>
<div class="node node765 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;"></span></p></div></div></div></div></div>
<div class="node node766 widget widget-button wow bounceIn">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid143" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">Заказать обратный звонок</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid144">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><h4><p style="text-align: center; line-height: 1.3;">
<span style="font-family: &quot;Open Sans&quot;;">
<span style="font-size: 18px;">Наш консультант перезвонит Вам в ближайшее время</span></span><strong><br></strong></p></h4></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid19" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div><br>
<input type="hidden" name="hid" value="Заявка на обратный звонок"> 
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid145">
<span class="text">ЗАКАЗАТЬ ЗВОНОК</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="agreement">Политика конфиденциальности</div></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node768 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable gray-theme">
<p style="text-align: center;">
<span style="font-size: 14px;">.</span></p></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node772 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(227, 227, 227); border-radius: 0px;"></div></div></div></div></div>
<div class="node node773 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node774 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center sm-force-center textable" style="opacity: 0.5;">
<p style="text-align: center; line-height: 1;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 14px;">© 2010 MORE-IZ-IKRY<br>Г.Днепр  <br> +38 (096) 46 74 737</span></span></p>
<p style="text-align: center; line-height: 1;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 14px;">Все права защищены</span></span></p>
  <p style="text-align: center;margin: 15px 0 0px;"><a style="color:#000;text-decoration:none;" href="politics.html">Политика конфиденциальности</a></p>
  </div></div></div></div></div></div></div></div></div></div></div>
<span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<script class="adaptive">if(["xs","lg"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node779 section section-clear xs-hidden lg-hidden" id="контакты" data-opacity="0.95">
<div class="separatortop">
<div class="gradient-top" style="height: 10px;"></div></div>
<div class="wrapper1">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node780 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node781 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="font-header xs-force-center textable">
<p style="letter-spacing: 0.05em; text-align: center;">
<span style="font-size: 24px;">КОНТАКТЫ</span></p></div></div></div></div></div>
<div class="node node782 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 23.8722%;">
<div class="cont">
<div class="node node783 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h1 class="spans xs-force-center textable">
<span class="p">
<span style="color: rgb(238, 29, 36);">
<span style="font-size: 22px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">MORE-IZ-IKRY</span></span></span></span>
<span class="p">
<span style="font-size: 14px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">ИКРА В УКРАИНЕ</span></span></span></h1></div></div></div></div></div></div>
<div class="col" style="width: 52.8835%;">
<div class="cont">
<div class="node node784 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 23.268%;">
<div class="cont">
<div class="node node785 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#икра" target="_self">
<button class="btn" id="uid175" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">Икра</span></button></a></div></div></div></div></div></div></div>
<div class="col" style="width: 41.7292%;">
<div class="cont">
<div class="node node787 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#доставка" target="_self">
<button class="btn" id="uid176" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">Доставка/Оплата</span></button></a></div></div></div></div></div></div></div>
<div class="col" style="width: 35.0028%;">
<div class="cont">
<div class="node node789 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#какзаказать" target="_self">
<button class="btn" id="uid177" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">Как Заказать?</span></button></a></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node793 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont"></div></div></div></div></div></div>
<div class="col" style="width: 23.2444%;">
<div class="cont">
<div class="node node794 widget widget-text">
<div class="wrapper1"><div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(38, 38, 38);">ГРАФИК РАБОТЫ:</span></span></p>
<p style="text-align: center;">
<span style="font-size: 16px;">
<span style="color: rgb(38, 38, 38);">9:00-20:00</span></span></p></div></div></div></div></div>
<div class="node node795 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;"></span></p></div></div></div></div></div>
<div class="node node796 widget widget-button wow bounceIn">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid178" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">Заказать обратный звонок</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid179">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><h4><p style="text-align: center;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 18px;">Наш консультант перезвонит Вам в течении 7-и минут</span></span><strong><br></strong></p></h4></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid20" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div><br>
<input type="hidden" name="hid" value="Заявка на обратный звонок">
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid180">
<span class="text">ЗАКАЗАТЬ ЗВОНОК</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="agreement">Политика конфиденциальности</div></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node798 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable gray-theme">
<p style="text-align: center;"><span style="font-size: 12px;">.</span></p></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node802 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(227, 227, 227); border-radius: 0px;"></div></div></div></div></div>
<div class="node node803 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node804 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center sm-force-center textable" style="opacity: 0.5;">
<p style="text-align: center; line-height: 1;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 14px;">© 2010 MORE-IZ-IKRY<br>Г.Днепр <br> 096 46 74 737</span></span></p>
<p style="text-align: center; line-height: 1;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 14px;">Все права защищены</span></span></p></div></div></div></div></div></div></div></div></div></div></div>
<span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<script class="adaptive">if(["md","lg"].indexOf(plp.screen)>=0)document.write("<!--")</script>
<div class="node node809 section section-clear md-hidden lg-hidden" id="контакты" data-opacity="0.95">
<div class="separatortop">
<div class="gradient-top" style="height: 10px;"></div></div>
<div class="wrapper1">
<div class="wrapper2">
<div class="container">
<div class="cont">
<div class="node node810 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node811 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 21.2406%;">
<div class="cont">
<div class="node node812 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<h1 class="spans xs-force-center textable">
<span class="p"><span style="color: rgb(238, 29, 36);">
<span style="font-size: 22px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">MORE-IZ-IKRY</span></span></span></span>
<span class="p">
<span style="font-size: 14px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">ИКРА ПРЕМИУМ КЛАССА</span></span></span></h1></div></div></div></div></div></div>
<div class="col" style="width: 56.6729%;">
<div class="cont">
<div class="node node813 widget widget-element">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node814 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#преимущества" target="_self">
<button class="btn" id="uid280" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">О Нас</span></button></a></div></div></div></div></div>
<div class="node node816 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#икра" target="_self">
<button class="btn" id="uid281" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">Красная Икра</span></button></a></div></div></div></div></div>
<div class="node node818 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#доставка" target="_self"><button class="btn" id="uid282" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">Доставка и Оплата</span></button></a></div></div></div></div></div>
<div class="node node820 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<a class="btn-inner" href="#отзывы" target="_self">
<button class="btn" id="uid283" data-id="" data-action="link" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="true">
<span class="text">Отзывы</span></button></a></div></div></div></div></div></div></div></div></div></div></div>
<div class="col" style="width: 22.0865%;">
<div class="cont">
<div class="node node822 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="font-header xs-force-center textable">
<p style="letter-spacing: 0.05em;">
<span style="font-size: 20px;">КОНТАКТЫ</span></p></div></div></div></div></div>
<div class="node node823 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p><span style="font-size: 16px;">
<span style="color: rgb(38, 38, 38);">ГРАФИК РАБОТЫ: 9:00-20:00</span></span></p></div></div></div></div></div>
<div class="node node824 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="font-size: 16px;"></span></p></div></div></div></div></div>
<div class="node node825 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out center xs-none">
<div class="btn-inner">
<button class="btn" id="uid284" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">Заказать обратный звонок</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid285">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><h4>
<p style="text-align: center; line-height: 1.3;">
<span style="font-size: 18px;">
<span style="font-family: &quot;Open Sans&quot;;">Наш менеджер перезвонит Вам в ближайшее время</span></span><strong><br></strong></p></h4></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form id="valid21" action="call.php" method="post">
<div class="fields">
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="name" placeholder="Имя *" required style="border-radius: 5px;"></div></div><br>
<div class="field">
<div class="input">
<input class="form-control text" type="text" name="phone" placeholder="Телефон *" required style="border-radius: 5px;"></div></div></div><br>
<input type="hidden" name="hid" value="Заявка на обратный звонок"> 
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid286">
<span class="text">ЗАКАЗАТЬ ЗВОНОК</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="agreement">Политика конфиденциальности</div></div>
<div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node827 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable gray-theme">
<p><span style="font-family: &quot;Open Sans&quot;;">
<span style="font-size: 16px;">
<span style="color: rgb(139, 144, 156);">.</span></span>
<span style="font-size: 14px;">
<span style="color: rgb(139, 144, 156);">&nbsp;</span>.</span></span></p></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node831 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(227, 227, 227); border-radius: 0px;"></div></div></div></div></div>
<div class="node node832 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node833 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="flex">
<div class="xs-force-center sm-force-center textable" style="opacity: 0.5;">
<p style="text-align: center; line-height: 1;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 14px;">© 2010 MORE-IZ-IKRY<br>Г.Днепр  <br> 096 46 74 737</span></span></p>
<p style="text-align: center; line-height: 1;">
<span style="font-family: &quot;TTNorms Medium&quot;;">
<span style="font-size: 14px;">Все права защищены</span></span></p></div></div></div></div></div></div></div></div></div></div></div>
<span class="plplink"></span></div></div></div>
<!-- ADAPTIVE -->
<div class="node section section-helper">
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="cart" area-context="uid158">
<div class="modal-dialog" style="width: 760px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p><span style="font-size: 18px;">Корзина заказов</span></p></h4></div>
<div class="modal-body">
<div class="cont">
<div class="node node839 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center; line-height: 1.3;">
<span style="font-size: 18px;">
<span style="font-family: &quot;TTNorms Medium&quot;;">При покупке 2х баночек по 0.5 - 1 баночка 0.5 в Подарок!</span></span></p></div></div></div></div></div>
<div class="node node840 widget widget-blank">
<div class="wrapper1">
<div class="wrapper2">
<div class="padding"></div></div></div></div>
<div class="node node841 widget widget-cart-list">
<div class="wrapper1">
<div class="wrapper2">
<div class="cont">
<div class="node node842 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 28.9107%;">
<div class="cont">
<div class="node node843 widget widget-cart-name">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemname" style="text-align: left;">Собака робот AIBO</div></div></div></div>
<div class="node node844 widget widget-cart-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="bgimage" data-role="itemphoto" style="background-position: center center; background-size: contain; height: 80px; background-image: url(https://ikra-premium.shop/&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAHklEQVQ4T2NkoBAwUqifYdQAhtEwACai0XQwGMIAACaYABGnE9aRAAAAAElFTkSuQmCC&quot;);" data-lazy-bgimage="aibo.jpg" data-lazy-bgimage_size="650,650"></div></div></div></div></div></div>
<div class="col" style="width: 16.6603%;">
<div class="cont"></div></div>
<div class="col" style="width: 24.2909%;">
<div class="cont">
<div class="node node845 widget widget-cart-amount">
<div class="wrapper1">
<div class="wrapper2">
<div style="text-align: center;">
<button class="btn btn-default" data-role="decreaseamount">
<i class="fa fa-minus"></i></button>
<input class="form-control" data-role="setamount" value="1">
<button class="btn btn-default" data-role="increaseamount">
<i class="fa fa-plus"></i></button></div></div></div></div></div></div>
<div class="col" style="width: 20.718%;">
<div class="cont">
<div class="node node846 widget widget-cart-price">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="itemprice" style="text-align: center;">17 000 руб.</div></div></div></div></div></div>
<div class="col" style="width: 9.42002%;">
<div class="cont">
<div class="node node847 widget widget-cart-remove">
<div class="wrapper1">
<div class="wrapper2">
<div style="text-align: right;">
<button class="btn btn-default" data-role="removefromcart">
<i class="fa fa-times"></i></button></div></div></div></div></div></div></div></div></div></div></div>
<div class="node node849 widget widget-line">
<div class="wrapper1">
<div class="wrapper2">
<div class="alignment" style="text-align: center;">
<div class="line" style="width: 100%; height: 1px; background-color: rgb(242, 242, 242); border-radius: 0px;"></div></div></div></div></div></div></div></div></div>
<div class="node node850 widget widget-grid">
<div class="wrapper1">
<div class="wrapper2">
<div class="grid valign-middle paddings-20px xs-wrap">
<div class="gridwrap">
<div class="col" style="width: 50%;">
<div class="cont">
<div class="node node851 widget widget-cart-total">
<div class="wrapper1">
<div class="wrapper2">
<div data-role="carttotal" style="text-align: left;">Итого: <span></span></div></div></div></div></div></div>
<div class="col" style="width: 50%;">
<div class="cont">
<div class="node node852 widget widget-button">
<div class="wrapper1">
<div class="wrapper2">
<div class="macros-button">
<div class="btn-out right xs-none">
<div class="btn-inner">
<button class="btn" id="uid161" data-id="" data-action="modal" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false" data-modal="form">
<span class="text">ОФОРМИТЬ ЗАКАЗ</span></button></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="form" area-context="uid162">
<div class="modal-dialog" style="width: 400px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center; line-height: 1;">
<span style="font-size: 18px;">
<strong>ОФОРМЛЕНИЕ ЗАКАЗА</strong></span></p></h4></div>
<div class="modal-body">
<div class="macros-form">
<div class="outer">
<div class="inner">
<div class="vertical none size-default">
<div class="body">
<div class="cont"></div>
<form class="form text-in" data-form="" data-fields="">
<div class="fields">
<div class="field" data-type="name">
<div class="input">
<input class="form-control text" type="text" data-placeholder="true" value="Имя *" required style="border-radius: 5px;"></div></div>
<div class="field" data-type="phone">
<div class="input">
<input class="form-control text" type="text" data-placeholder="true" value="Телефон *" required style="border-radius: 5px;"></div></div>
<div class="macros-button">
<div class="btn-out full xs-none">
<div class="btn-inner">
<button class="btn font-text submit" id="uid163" data-ym_goal="" data-ga_category="" data-ga_action="" need_hover="false">
<span class="text">ОТПРАВИТЬ ЗАЯВКУ!</span>
<input type="submit"></button></div></div></div></form><div>
<div class="privacy btn-modal" data-modal="privacy">Политика конфиденциальности</div></div>
<div class="macros-modal">
<div class="modal fade nocolors robots-noindex robots-nocontent" data-modal="privacy" area-context="uid164"><div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center;">
<strong>Политика конфиденциальности</strong></p></h4></div><div class="modal-body"><div class="textable"><p><strong>Политика конфиденциальности</strong><br>Мы не передаем ваши данные третьим лицам. Ваши данные используются только для выполнения заказа. После выполнения заказа вся информация удаляется и негде не хранится.</p><p><strong>Гипертекстовые ссылки на сторонние сайты</strong><br>Настоящий сайт может содержать гипертекстовые ссылки на сторонние сайты и интернет-ресурсы. Риск, связанный с выходом пользователя на внешние сайты по ссылкам, имеющимся на настоящем сайте, лежит целиком на пользователе. Компания не несет ответственности за точность и надежность информации, данных, взглядов или заявлений, представленных на сторонних сайтах. Компания помещает ссылки на другие сайты исключительно для удобства пользователя. Это ни в коей мере не означает, что Компания одобряет содержание данных сайтов или несет за него ответственность, за исключением случаев, когда точно может быть установлено, что Компания располагала данными о возможных нежелательных последствиях использования информации, размещенной на стороннем сайте, и имела техническую возможность предотвратить такое использование.<br>Компания официально заявляет, что на момент размещения ссылок на сторонних сайтах не было обнаружено недостоверной, нежелательной или сомнительной информации. Компания не отслеживает изменения, в том числе изменения оформления и содержимого, произошедшие на сторонних сайтах и не несет никакой ответственности за последствия использования сторонних сайтов, изменившихся с момента размещения ссылок. Освобождение от ответственности действует как в отношении ссылок, размещенных на настоящем сайте, так и в отношении ссылок, оставленных пользователями на форумах, в гостевых книгах и списках рассылки, если таковые имеются. Ответственность за полноту, точность и надежность информации стороннего сайта, в том числе и за возможный ущерб от использования последнего, лежит исключительно на владельце стороннего сайта, и ни в коем случае на лице, разместившем ссылку.</p><p><strong>Авторские права и товарные знаки</strong><br>Компания прикладывает все усилия, направленные на предотвращение использования в своих публикациях графических изображений, аудио и видеозаписей, текстов, являющихся субъектом права собственности третьих лиц. В случае невозможности полного отказа от использования таких материалов, Компания стремится явно указывать правообладателя. Все товарные знаки, логотипы, названия продукции и моделей или производные от них, описывающие продукцию или услуги компании и являющиеся частью информации, размещённой на сайте, являются товарными знаками и/или собственностью компании.<br>Любое использование товарных знаков компании или их производных (за исключением случаев, когда имеется письменное разрешение компании на использование товарных знаков) не допускается.<br>Любое несанкционированное использование или копирование информации сайта может привести к нарушению прав собственности на товарные знаки, авторские права или другие права собственности.</p></div></div></div></div></div></div><div class="cont"></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
<div class="cont">
<div class="node node858 widget widget-image">
<div class="wrapper1">
<div class="wrapper2">
<div class="xs-force-center bgnormal" style="text-align: center;">
<div class="svgwrap" style="max-width: 43.52px;"><img class="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAAQMAAABmvDolAAAAA1BMVEVMaXFNx9g6AAAAAXRSTlMAQObYZgAAAB9JREFUeAHtwQEBAAAIAqD+r+5GKTAAAAAAAAAAAM8tIQAAAYRf8qsAAAAASUVORK5CYII="><svg class="svgicon" id="svg287" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect x="0" y="0" width="60" height="60" style="fill: transparent" rx="50%" ry="50%"></rect><g transform="scale(0.6) translate(20, 20)"><path fill="rgb(156, 162, 174)" d="M58.339,23.549h-3.338v-3.939c0-8.413-6.734-15.286-15.614-16.271c-0.57-1.311-1.876-2.229-3.393-2.229 H24.006c-1.526,0-2.839,0.929-3.404,2.251C11.824,4.424,5.17,11.285,5.17,19.609v3.939H1.66c-0.917,0-1.66,0.743-1.66,1.66v6.67 c0,0.918,0.743,1.661,1.66,1.661h1.327l3.991,23.963c0.133,0.801,0.826,1.388,1.638,1.388h43.102c0.812,0,1.505-0.587,1.638-1.388 l3.991-23.963h0.992c0.918,0,1.661-0.743,1.661-1.661v-6.67C60,24.292,59.257,23.549,58.339,23.549z M35.994,4.431 c0.03,0,0.058,0.011,0.087,0.018c-0.034,0.125-0.059,0.255-0.062,0.391c-0.004,0.116,0.006,0.229,0.025,0.339 c-0.018,0.003-0.033,0.011-0.051,0.011H24.006c-0.016,0-0.029-0.007-0.044-0.009c0.02-0.114,0.03-0.231,0.026-0.351 c-0.005-0.133-0.029-0.26-0.063-0.382c0.027-0.006,0.052-0.017,0.081-0.017H35.994z M8.491,19.609 c0-6.566,5.301-11.993,12.328-12.928c0.644,1.092,1.83,1.828,3.187,1.828h11.988c1.365,0,2.558-0.746,3.199-1.85 C46.31,7.529,51.68,12.968,51.68,19.609v3.939H8.491V19.609z M3.321,26.869h53.358v3.35H55.94H4.394H3.321V26.869z M50.311,55.569 H10.023L6.354,33.54H53.98L50.311,55.569z"></path><path fill="rgb(156, 162, 174)" d="M14.58,51.96c0.458,0,0.83-0.372,0.83-0.83V36.937c0-0.459-0.372-0.831-0.83-0.831 c-0.459,0-0.831,0.372-0.831,0.831V51.13C13.749,51.588,14.121,51.96,14.58,51.96z"></path><path fill="rgb(156, 162, 174)" d="M24.744,51.96c0.458,0,0.831-0.372,0.831-0.83V36.937c0-0.459-0.372-0.831-0.831-0.831 s-0.83,0.372-0.83,0.831V51.13C23.914,51.588,24.285,51.96,24.744,51.96z"></path><path fill="rgb(156, 162, 174)" d="M34.908,51.96c0.458,0,0.83-0.372,0.83-0.83V36.937c0-0.459-0.372-0.831-0.83-0.831 c-0.459,0-0.831,0.372-0.831,0.831V51.13C34.077,51.588,34.449,51.96,34.908,51.96z"></path><path fill="rgb(156, 162, 174)" d="M45.072,51.96c0.458,0,0.83-0.372,0.83-0.83V36.937c0-0.459-0.372-0.831-0.83-0.831 c-0.459,0-0.83,0.372-0.83,0.831V51.13C44.242,51.588,44.613,51.96,45.072,51.96z"></path></g></svg></div></div><noscript><img src="img/x182--black.png.pagespeed.ic.FOOKmrpXeu.png" alt=""></noscript></div></div></div>
<div class="node node859 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p style="text-align: center;">
<span style="color: rgb(160, 160, 160);">
<span style="font-size: 24px;">В корзине пусто</span></span></p></div></div></div></div></div></div></div></div></div></div></div>
<div class="macros-modal">
<div class="modal fade nocolors robots-noindex robots-nocontent" data-modal="agreement" area-context="uid159">
<!--googleoff: all-->
<!--noindex-->
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable">
<p style="text-align: center;">
<strong>Политика конфиденциальности</strong></p></h4></div>
<div class="modal-body">
<div class="cont">
<div class="node node860 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable">
<p><strong>Политика конфиденциальности</strong><br>Мы не передаем ваши данные третьим лицам. Ваши данные используются только для выполнения заказа. После выполнения заказа вся информация удаляется и негде не хранится.</p><p><strong>Гипертекстовые ссылки на сторонние сайты</strong><br>Настоящий сайт может содержать гипертекстовые ссылки на сторонние сайты и интернет-ресурсы. Риск, связанный с выходом пользователя на внешние сайты по ссылкам, имеющимся на настоящем сайте, лежит целиком на пользователе. Компания не несет ответственности за точность и надежность информации, данных, взглядов или заявлений, представленных на сторонних сайтах. Компания помещает ссылки на другие сайты исключительно для удобства пользователя. Это ни в коей мере не означает, что Компания одобряет содержание данных сайтов или несет за него ответственность, за исключением случаев, когда точно может быть установлено, что Компания располагала данными о возможных нежелательных последствиях использования информации, размещенной на стороннем сайте, и имела техническую возможность предотвратить такое использование.<br>Компания официально заявляет, что на момент размещения ссылок на сторонних сайтах не было обнаружено недостоверной, нежелательной или сомнительной информации. Компания не отслеживает изменения, в том числе изменения оформления и содержимого, произошедшие на сторонних сайтах и не несет никакой ответственности за последствия использования сторонних сайтов, изменившихся с момента размещения ссылок. Освобождение от ответственности действует как в отношении ссылок, размещенных на настоящем сайте, так и в отношении ссылок, оставленных пользователями на форумах, в гостевых книгах и списках рассылки, если таковые имеются. Ответственность за полноту, точность и надежность информации стороннего сайта, в том числе и за возможный ущерб от использования последнего, лежит исключительно на владельце стороннего сайта, и ни в коем случае на лице, разместившем ссылку.</p><p><strong>Авторские права и товарные знаки</strong><br>Компания прикладывает все усилия, направленные на предотвращение использования в своих публикациях графических изображений, аудио и видеозаписей, текстов, являющихся субъектом права собственности третьих лиц. В случае невозможности полного отказа от использования таких материалов, Компания стремится явно указывать правообладателя. Все товарные знаки, логотипы, названия продукции и моделей или производные от них, описывающие продукцию или услуги компании и являющиеся частью информации, размещённой на сайте, являются товарными знаками и/или собственностью компании.<br>Любое использование товарных знаков компании или их производных (за исключением случаев, когда имеется письменное разрешение компании на использование товарных знаков) не допускается.<br>Любое несанкционированное использование или копирование информации сайта может привести к нарушению прав собственности на товарные знаки, авторские права или другие права собственности.</p></div></div></div></div></div></div></div></div></div>
<!--/noindex-->
<!--googleon: all-->
</div></div>
<div class="macros-modal">
<div class="modal fade nocolors" data-modal="cookie" area-context="uid160">
<div class="modal-dialog" style="width: 600px;">
<div class="modal-content">
<div class="modal-header">
<button class="close nofonts">×</button>
<h4 class="textable"><p>Данный сайт использует Cookie</p></h4></div>
<div class="modal-body">
<div class="cont">
<div class="node node861 widget widget-text">
<div class="wrapper1">
<div class="wrapper2">
<div class="">
<div class="xs-force-center textable"><p>Редактируемый текст</p></div></div></div></div></div></div></div></div></div></div></div>
<div class="eventmodals" disableevent="1"></div></div></div>
<script type="text/javascript" src="assets/3.3/vendors.js.pagespeed.jm.7la8G_OOvS.js"></script>
<script type="text/javascript" src="assets/3.3/plp.js.pagespeed.jm.dV31MXqsV9.js"></script>
<script src="assets/3.3/nodes.js+countdown.js.pagespeed.jc.KhgaxgVx9Y.js"></script><script>eval(mod_pagespeed_UKYUfr7GCF);</script>
<script>eval(mod_pagespeed_xz7cJXEleM);</script>
<script type="text/javascript">$(function(){$("#contactless-m1").prependTo($("body"));$(document).on("click",".contactless-m1__close",function(){$("#contactless-m1, .contactless-m1-space").hide();return false;});});</script>

<script type="text/javascript" src="assets/jquery-3.5.1.min.js.pagespeed.jm.A8biqtTJrt.js"></script>
<script type="text/javascript" src="assets/jquery.validate.min.js.pagespeed.jm.yDB-19wSeS.js"></script>

<script>$(document).ready(function(){$("#valid").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid2").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid3").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid4").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid5").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid6").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid7").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid8").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid9").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid10").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid11").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid12").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid13").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid14").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid15").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid16").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid17").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid18").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid19").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid20").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});$("#valid21").validate({rules:{name:{required:true,maxlength:16,},phone:{required:true,number:true,minlength:9,maxlength:16,},},messages:{name:{required:"Это поле обязательно для заполнения",maxlength:"Максимальное число символов - 16",},phone:{required:"Это поле обязательно для заполнения",minlength:"Номер телефона должен быть минимум 9 символов",maxlength:"Максимальное число символов - 16",number:"Допускаются только цифры, без +",},}});});</script>

</body>
</html>