<?php
/**
 *  Disable New, Cancelled, and Failed Order Email Notifications:
 */
wp option patch update woocommerce_new_order_settings enabled no;
wp option patch update woocommerce_cancelled_order_settings enabled no;
wp option patch update woocommerce_failed_order_settings enabled no;
