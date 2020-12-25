<?php
use Noodlehaus\Config;
require 'config/ConfigInterface.php';
require 'config/AbstractConfig.php';
require 'config/Config.php';
require 'config/Parser/ParserInterface.php';
require 'config/Parser/Json.php';
require 'config/ErrorException.php';
require 'config/Exception.php';
require 'config/Exception/ParseException.php';
require 'config/Exception/FileNotFoundException.php';

$conf = Config::load(__DIR__.'/settings.json');

$white_action = $conf['white.action']; 
$white_folder_name = $conf['white.folder.name']; 
$white_redirect_url = $conf['white.redirect.url'];
$white_redirect_type = $conf['white.redirect.type']; 
$white_curl_url = $conf['white.curl.url'];
$white_error_code = $conf['white.error.code'];
$white_use_domain_specific=$conf['white.domainfilter.use'];
$white_domain_specific= $conf['white.domainfilter.domains'];
$use_js_checks = $conf['white.jschecks.enabled'];
$js_checks = $conf['white.jschecks.events'];
$js_timeout =$conf['white.jschecks.timeout']; 
$js_obfuscate = $conf['white.jschecks.obfuscate'];

$black_preland_action = $conf['black.prelanding.action'];
$black_preland_redirect_urls = $conf['black.prelanding.redirect.urls']; 
$black_preland_redirect_type = $conf['black.prelanding.redirect.type']; 
$black_preland_folder_names = $conf['black.prelanding.folders']; 

$black_land_action = $conf['black.landing.action'];
$black_land_folder_names = $conf['black.landing.folder.names'];
$black_land_redirect_urls = $conf['black.landing.redirect.urls'];
$black_land_redirect_type = $conf['black.landing.redirect.type']; 
$black_land_conversion_script = $conf['black.landing.conversions.script']; 
$black_land_log_conversions_on_button_click = $conf['black.landing.conversions.logonbuttonclick']; 
$black_land_use_custom_thankyou_page = $conf['black.landing.customthankyoupage.use']; 
$black_land_thankyou_page_language = $conf['black.landing.customthankyoupage.language'];

$ya_id= $conf['pixels.ya.id'];
$gtm_id= $conf['pixels.gtm.id'];
$fbpixel_subname = $conf['pixels.fb.subname'];
$fb_use_pageview = $conf['pixels.fb.pageview'];
$fb_use_viewcontent = $conf['pixels.fb.viewcontent.use'];
$fb_view_content_time = $conf['pixels.fb.viewcontent.time'];
$fb_view_content_percent = $conf['pixels.fb.viewcontent.percent'];
$fb_thankyou_event = $conf['pixels.fb.conversion.event'];
$fb_add_button_pixel= $conf['pixels.fb.conversion.fireonbutton'];
$use_cloaked_pixel = $conf['pixels.fb.cloak'];

$full_cloak_on = $conf['tds.fullcloak'];
$disable_tds = $conf['tds.disable'];
$save_user_flow = $conf['tds.saveuserflow'];

$os_white = $conf['tds.filters.allowed.os'];
$country_white = $conf['tds.filters.allowed.countries'];
$url_should_contain =$conf['tds.filters.allowed.inurl'];

$ip_black = $conf['tds.filters.blocked.ips'];
$tokens_black = $conf['tds.filters.blocked.tokens'];
$ua_black = $conf['tds.filters.blocked.useragents'];
$isp_black = $conf['tds.filters.blocked.isps'];
$block_without_referer = $conf['tds.filters.blocked.withoutreferer'];

$disable_back_button = $conf['scripts.back.disable'];
$replace_back_button = $conf['scripts.back.replace.use'];
$replace_back_address = $conf['scripts.back.replace.url'];
$disable_text_copy = $conf['scripts.disabletextcopy'];
$replace_prelanding = $conf['scripts.prelandingreplace.use'];
$replace_prelanding_address = $conf['scripts.prelandingreplace.url'];
$black_land_use_phone_mask = $conf['scripts.phonemask.use'];
$black_land_phone_mask = $conf['scripts.phonemask.mask'];

$sub_ids = $conf['subids'];

$log_password = $conf['statistics.password']; 
$creative_sub_name = $conf['statistics.creativesubname'];
$lead_status_name = $conf['statistics.postback.lead'];
$purchase_status_name = $conf['statistics.postback.purchase'];
$reject_status_name = $conf['statistics.postback.reject'];
$trash_status_name = $conf['statistics.postback.trash'];

//var_dump($conf);
?>