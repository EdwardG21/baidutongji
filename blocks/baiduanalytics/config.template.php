<?php
/**
 * Baidu Analytics - Config
 * 
 * Largest Chinese analytic APP
 *
 * Largest Chinese analytic APP
 *
 * @copyright Edward Gao
 *
 * @license MIT
 *
 * @package baiduanalytics
 * @version 1.0
 * @author  Edward Gao <edward.gao21@gmail.com>
 * @link    https://github.com/EdwardG21
 */
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>

<!-- Example begins -->
<schlix-config:textbox config-key='str_baidu_tracking_number' label='<?=___('Tracking Number') ?>' class='form-control'/>

<h3>Adds the Baidu Analytics web statistics tracking system to your website.</h3>

<p>
    Baidu Analytics (百度统计 Baidu Tongji, in Chinese) is Baidu search engine's web analytics platform.
</p>

<p>
    You can get Baidu tracking number from <a href="https://tongji.baidu.com/" target="_blank">Baidu</a>.
</p>

<h3>百度统计</h3>

<p>
    百度统计是百度推出的一款免费的专业网站流量分析工具，帮助企业收集网站访问数据，提供流量趋势、来源分析、转化跟踪、页面热力图、访问流等多种统计分析服务，同时与百度搜索、百度推广、云服务无缝结合，为网站的精细化运营决策提供数据支持，进而有效提高企业的投资回报率。“世界很复杂，百度更懂你”，百度统计提供了几十种图形化报告，全程跟踪访客的行为路径。同时，百度统计集成百度推广数据，帮助用户及时了解百度推广效果并优化推广方案。<a href="https://tongji.baidu.com/" target="_blank">点击这里</a>开始使用百度统计。
</p>

<p>
    Written by : <a href="https://github.com/EdwardG21" target="_blank">Edward Gao</a>
</p>
<!-- Example Ends -->

<schlix-config:textbox config-key="str_domain_name" label="<?= ___('Override domain name') ?>"   placeholder="<?= ___('optional, e.g. schlix.com (without www.)') ?>" />
    <schlix-config:checkbox config-key="bool_track_sub_domains" label="<?= ___('Track Subdomains') ?>" />
