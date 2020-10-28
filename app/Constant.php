<?php


namespace App;


class Constant
{
    const SEARCH_HISTORY_FROM_WX = 'wx';

    /**
     * 收藏
     */
    const COLLECT_GOOD_TYPE = 0;

    /**
     * 评论
     */
    const COMMENT_GOOD_TYPE = 0;

    /**
     * 优惠券
     */
    const COUPON_STATUS_NORMAL  = 0;
    const COUPON_TYPE_COMMON    = 0;
    const COUPON_TYPE_REGISTER  = 1;
    const COUPON_TYPE_CODE      = 2;
    const COUPON_STATUS_EXPIRED = 1;
    const COUPON_STATUS_OUT     = 2;

    const COUPON_TIME_TYPE_DAYS = 0;
    const COUPON_TIME_TYPE_TIME = 1;

}