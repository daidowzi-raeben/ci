<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

define('PHP_SERVER',$_SERVER['PHP_SELF']);
?>

<div class="dim"></div>

<div id="warp">
    <header>
        <div class="my_price clb">
            <div class="fl my_price__photo" style="background-image:url('../image/test_profile.png');">
                <div class="upload_profile">
                    <span class="material-icons">
                    photo_camera
                    </span>
                </div>
            </div>
            <div class="fl my_price__left">
                <div class="up__sub_title">나의 자산</div>
                <div class="s-font down__price">500,000 <span>루피</span></div>
            </div>
            <div class="fr my_price__right">
                <span class="material-icons">
                keyboard_arrow_right
                </span>
            </div>
        </div>
    </header>
    <section>
        <div class="hello_word s-font">
            안녕하세요, <span>홍길동님</span>
        </div>
    </section>
    <section>
        <div class="main_contents">
            <ul class="clb">
                <li>
                    <div class="in__box">
                        <p>5초전</p>
                    </div>
                </li>
                <li><div class="in__box">asd</div></li>
                <li><div class="in__box">asd</div></li>
                <li><div class="in__box">asd</div></li>
                
            </ul>
        </div>
    </section>

    <section>
        <div>asd</div>
    </section>
</div>