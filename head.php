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
        <div class="back"></div>
        <div class="s-font back__name">
        홍길동님,<br>
        <span>안녕하세요</span>
        </div>
        <div class="s-font back__coin">
            10,000,000
            <span>루피</span>
        </div>
        <div class="back__tag">
            <ul class="clb">
                <li>
                    # asd
                </li>
                <li>
                    # asd
                </li>
                <li>
                    # asd
                </li>
                <li>
                    # asd
                </li>
            </ul>
        </div>
    </header>

    <div class="warp">
        <session>
            <ul>
                <li>asd</li>
            </ul>
        </session>
    </div>
    
</div>
           