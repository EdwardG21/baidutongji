<?php
/**
 * Baidu Analytics - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
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
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($baidu_tracking_number): ?>

        <script>
        var _hmt = _hmt || [];
        _hmt.push(['_setAccount', '<?= ___h($baidu_tracking_number) ?>']);
        _hmt.push(['_trackPageview']);
        <?php if ($domain_name && ($track_sub_domains || $track_multiple_top_level_domains)): ?>
        _hmt.push(['_setDomainName', '<?= ___h($domain_name) ?>']);
        <?php endif; ?>
            
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?<?= ___h($baidu_tracking_number) ?>";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>

<?php else: ?>
    <x-ui:alert type="danger">
        <?= ___('Baidu Tongji tracking number has not been provided') ?>
    </x-ui:alert>
<?php endif ?>