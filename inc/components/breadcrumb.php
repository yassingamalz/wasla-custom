<?php
/**
 * Breadcrumb Component
 * Navigation breadcrumb
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/breadcrumb',
    array(
        'title'       => __('مسار التنقل', 'wasla'),
        'description' => __('شريط التنقل', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#666666"}}} -->
<p style="color:#666666;font-size:0.875rem"><a href="/">الرئيسية</a> / <a href="/category">القسم</a> / العنوان الحالي</p>
<!-- /wp:paragraph -->'
    )
);
