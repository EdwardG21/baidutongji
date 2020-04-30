<?php
namespace Block;
/**
 * Baidu Analytics - Main Class
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
class BaiduAnalytics extends \SCHLIX\cmsBlock
{
	public function Run()
	{
                $baidu_tracking_number = $this->config['str_baidu_tracking_number'];	
                
                $domain_name = $this->config['str_domain_name'];			
		$track_sub_domains = $this->config['bool_track_sub_domains'];
                $this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
  	}
}
