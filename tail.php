<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

<div class="footer_gnb">
    <ul>
        <li>
            <span class="material-icons">
            bar_chart
            <!-- main -->
            </span>
        </li>
        <li>
            <span class="material-icons">
            spa
            <!-- quest -->
            </span>
        </li>
        <li>
            <span class="material-icons">
            notifications_none
            <!-- notifi -->
            </span>
        </li>
        <li>
            <span class="material-icons">
            message
            </span>
        </li>
    </ul>
</div>


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
?>