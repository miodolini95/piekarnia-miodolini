<html>
<head>
<script src="https://kit.fontawesome.com/38a1dfcaa1.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
input[type=text]{
	width: 250px;
}

.admin_input{
	-webkit-appearance: none;
    width: 70px;
    height: 30px;
    background-color: #d80000;
    border-radius: 30px;
    box-shadow: inset -1px -1px 20px black;
	outline: none;
	transition: .5s linear;
	position: relative;
	margin-left: 15px;
    margin-top: 5px;
}

.admin_input:checked{
    background-color: #2cb51a;
}

.admin_input:before{
	content: "";
    background-color: #2e2e2e;
	height: 20px;
	width: 20px;
	padding: 5px;
	position: absolute;
	border-radius: 50%;
	left: 0px;
	transition: .5s linear;
	box-shadow: 0px 0px 3px #000000;
}

.admin_input:checked:before{
	left: 40px;
}

body{
	display: flex;  
	flex-flow: row wrap; 
	justify-content: space-around;
}

td:first-child{
	text-align: right;
}

tr{
	margin-bottom: 10px;
	min-height: 40px;
}
fieldset{
width: max-content;
padding-right: 220px;
}
</style>
</head>
<body>
<a href="<?php echo basename(__FILE__, '.php');?>.php" style="position: absolute; left: 20px; top: 20px;"><i class="fas fa-redo fa-2x"></i></a>
<?php 
include("configuration.php");

$config = new JConfig;
$MetaAuthor = $config->MetaAuthor;
$MetaDesc = $config->MetaDesc;
$MetaKeys = $config->MetaKeys;
$MetaRights = $config->MetaRights;
$MetaTitle = $config->MetaTitle;
$MetaVersion = $config->MetaVersion;
$access = $config->access;
$cache_handler = $config->cache_handler;
$cachetime = $config->cachetime;
$caching = $config->caching;
$captcha = $config->captcha;
$cookie_domain = $config->cookie_domain;
$cookie_path = $config->cookie_path;
$db = $config->db;
$dbprefix = $config->dbprefix;
$dbtype = $config->dbtype;
$debug = $config->debug;
$debug_lang = $config->debug_lang;
$display_offline_message = $config->display_offline_message;
$editor = $config->editor;
$error_reporting = $config->error_reporting;
$feed_email = $config->feed_email;
$feed_limit = $config->feed_limit;
$force_ssl = $config->force_ssl;
$fromname = $config->fromname;
$ftp_enable = $config->ftp_enable;
$ftp_host = $config->ftp_host;
$ftp_pass = $config->ftp_pass;
$ftp_port = $config->ftp_port;
$ftp_root = $config->ftp_root;
$ftp_user = $config->ftp_user;
$gzip = $config->gzip;
$helpurl = $config->helpurl;
$host = $config->host;
$lifetime = $config->lifetime;
$list_limit = $config->list_limit;
$live_site = $config->live_site;
$log_path = $config->log_path;
$mailer = $config->mailer;
$mailfrom = $config->mailfrom;
$memcache_compress = $config->memcache_compress;
$memcache_persist = $config->memcache_persist;
$memcache_server_host = $config->memcache_server_host;
$memcache_server_port = $config->memcache_server_port;
$offline = $config->offline;
$offline_image = $config->offline_image;
$offline_message = $config->offline_message;
$offset = $config->offset;
$offset_user = $config->offset_user;
$password = $config->password;
$robots = $config->robots;
$secret = $config->secret;
$sef = $config->sef;
$sef_rewrite = $config->sef_rewrite;
$sef_suffix = $config->sef_suffix;
$sendmail = $config->sendmail;
$session_handler = $config->session_handler;
$sitename = $config->sitename;
$sitename_pagetitles = $config->sitename_pagetitles;
$smtpauth = $config->smtpauth;
$smtphost = $config->smtphost;
$smtppass = $config->smtppass;
$smtpport = $config->smtpport;
$smtpsecure = $config->smtpsecure;
$smtpuser = $config->smtpuser;
$tmp_path = $config->tmp_path;
$unicodeslugs = $config->unicodeslugs;
$user = $config->user;
$mailonline = $config->mailonline;
$cache_platformprefix = $config->cache_platformprefix;
$memcached_persist = $config->memcached_persist;
$memcached_compress = $config->memcached_compress;
$memcached_server_host = $config->memcached_server_host;
$memcached_server_port = $config->memcached_server_port;
$redis_persist = $config->redis_persist;
$redis_server_host = $config->redis_server_host;
$redis_server_port = $config->redis_server_port;
$redis_server_auth = $config->redis_server_auth;
$redis_server_db = $config->redis_server_db;
$proxy_enable = $config->proxy_enable;
$proxy_host = $config->proxy_host;
$proxy_port = $config->proxy_port;
$proxy_user = $config->proxy_user;
$proxy_pass = $config->proxy_pass;
$massmailoff = $config->massmailoff;
$session_memcache_server_host = $config->session_memcache_server_host;
$session_memcache_server_port = $config->session_memcache_server_port;
$session_memcached_server_host = $config->session_memcached_server_host;
$session_memcached_server_port = $config->session_memcached_server_port;
$frontediting = $config->frontediting;
$asset_id = $config->asset_id;
$replyto = $config->replyto;
$replytoname = $config->replytoname;
$shared_session = $config->shared_session;
$session_redis_server_host = $config->session_redis_server_host;
$session_redis_server_port = $config->session_redis_server_port;
$session_redis_server_db = $config->session_redis_server_db;
$debug_lang_const = $config->debug_lang_const;
$session_redis_persist = $config->session_redis_persist;
$session_redis_server_auth = $config->session_redis_server_auth;

$db_host = $host;
$db_name = "$db";
$db_user = $user;
$db_pass = $password;

if(isset($_POST['send']))
{
		$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if (mysqli_connect_errno())
	{
		echo "Niepoprawne dane logowania do bazy danych";
	}
	else
	{
		//ssl
		if(isset($_POST['force_ssl']))
		{
			$force_ssl = 2;
			$htaccess = fopen(".htaccess", "r");
			$htaccess_info = fread($htaccess, filesize(".htaccess"));
			fclose($htaccess);
			$htaccess = fopen(".htaccess", "w");
			$htaccess_info = str_replace("http://", "https://", $htaccess_info);
			fputs($htaccess, $htaccess_info);
			fclose($htaccess);
			
			$robots = fopen("robots.txt", "r");
			$robots_info = fread($robots, filesize("robots.txt"));
			fclose($robots);
			$robots = fopen("robots.txt", "w");
			$robots_info = str_replace("Sitemap: http://", "Sitemap: https://", $robots_info);
			fputs($robots, $robots_info);
			fclose($robots);
		}
		else
		{
			$force_ssl = 0;
			$htaccess = fopen(".htaccess", "r");
			$htaccess_info = fread($htaccess, filesize(".htaccess"));
			fclose($htaccess);
			$htaccess = fopen(".htaccess", "w");
			$htaccess_info = str_replace("https://", "http://", $htaccess_info);
			fputs($htaccess, $htaccess_info);
			fclose($htaccess);
			
			$robots = fopen("robots.txt", "r");
			$robots_info = fread($robots, filesize("robots.txt"));
			fclose($robots);
			$robots = fopen("robots.txt", "w");
			$robots_info = str_replace("Sitemap: https://", "Sitemap: http://", $robots_info);
			fputs($robots, $robots_info);
			fclose($robots);
		}
		
		//send_mail
		
		if(isset($_POST['send_mail']))
			$mailonline = 1;
		else
			$mailonline = 0;
		
		//shared_session
		if(isset($_POST['shared_session']))
			$shared_session = 1;
			else
				$shared_session = 0;
		
		//Cache time
		$cachetime = $_POST['cachetime'];
		
		//log path
		$log_path = $_POST['log_path'];
		
		//tmp path
		$tmp_path = $_POST['log_path'];
		
		//cookie info
		if(isset($_POST['cookie_info']))
			$cookie_info_status = 1;
			else
				$cookie_info_status = 0;
			
		$question = "UPDATE ".$dbprefix."extensions set enabled = ".$cookie_info_status." WHERE element = 'cookiesalert'";
		mysqli_query($connect, $question);
		
		//jch enable
		if(isset($_POST['jch_enable']))
			$jch_info_status = 1;
			else
				$jch_info_status = 0;
			
		$question = "UPDATE ".$dbprefix."extensions set enabled = ".$jch_info_status." WHERE element = 'jch_optimize'";
		mysqli_query($connect, $question);
		
		//google index
		if(isset($_POST['google_index']))
			$robots = "";
		else
			$robots = "noindex, nofollow";
		
		//update info
		if(isset($_POST['update_info']))
			$update_info_status = 1;
		else
			$update_info_status = 0;
		
		$question = "UPDATE ".$dbprefix."extensions set enabled = ".$update_info_status." WHERE element = 'updatenotification'";
		mysqli_query($connect, $question);
		
		//redirect_enable info
		if(isset($_POST['redirect_enable']))
			$redirect_enable_status = 1;
		else
			$redirect_enable_status = 0;
		
		$question = "UPDATE ".$dbprefix."extensions set enabled = ".$redirect_enable_status." WHERE element = 'redirect'";
		mysqli_query($connect, $question);
		
		//RSFirewall
		$question = "UPDATE  ".$dbprefix."rsfirewall_configuration set value = '".$_POST['rsfirewall']."' WHERE name = 'code'";
		mysqli_query($connect, $question);
		
		//RSForm
		$question = "UPDATE ".$dbprefix."rsform_config set SettingValue = '".$_POST['rsform']."' WHERE SettingName = 'global.register.code'";
		$rsform_info = mysqli_query($connect, $question);
		
		
		/////////////////DB/////////////////////
		
		
		//Recaptcha site
		$question = "UPDATE ".$dbprefix."rsform_config set SettingValue = '".$_POST['recaptcha_site']."' WHERE SettingName = 'recaptchav2.site.key'";
		mysqli_query($connect, $question);

		//Recaptcha secret
		$question = "UPDATE ".$dbprefix."rsform_config set SettingValue = '".$_POST['recaptcha_secret']."' WHERE SettingName = 'recaptchav2.secret.key'";
		mysqli_query($connect, $question);
		 
		 //MAP
		$question = "SELECT * FROM ".$dbprefix."modules WHERE module = 'mod_bt_googlemaps'";
		$map_info = mysqli_query($connect, $question);
		$map_info = mysqli_fetch_array($map_info);
		$map_info = preg_replace('/"map_api":"(.*?)","markes"/', '"map_api":"'.$_POST['map_api_key'].'","markes"', $map_info['params']);
		
		$map_info = preg_replace('/"mapCenterType":"(.*?)","mapCenterAddress"/', '"mapCenterType":"'.$_POST['map_addres_type'].'","mapCenterAddress"', $map_info);
		
		$map_info = preg_replace('/"mapCenterCoordinate":"(.*?)","width"/', '"mapCenterCoordinate":"'.$_POST['map_coordinate'].'","width"', $map_info);
		
		$map_info = mysqli_real_escape_string($connect, $map_info);
		
		$question = "UPDATE ".$dbprefix."modules set params = '".$map_info."' WHERE module = 'mod_bt_googlemaps'";
		mysqli_query($connect, $question);
		 
		 
		 /////////////////5STAR////////////////
		 
		 
		$question = "SELECT * FROM ".$dbprefix."extensions WHERE element = 'com_customsettings'";
		$com_customsettings = mysqli_query($connect, $question);
		$com_customsettings = mysqli_fetch_array($com_customsettings);
			
		$api_key_update = preg_replace('/"csformrecaptchasite":"(.*?)","csformrecaptchasecret"/', '"csformrecaptchasite":"'.$_POST['recaptcha_site_5star'].'","csformrecaptchasecret"', $com_customsettings['params']);
		
		$api_key_update = preg_replace('/"csformrecaptchasecret":"(.*?)","csrodoprivacypolicy_pl_PL"/', '"csformrecaptchasecret":"'.$_POST['recaptcha_secret_5star'].'","csrodoprivacypolicy_pl_PL"', $api_key_update);
		
		$api_key_update = preg_replace('/"csgmapsapikey":"(.*?)","csformrecaptchasite"/', '"csgmapsapikey":"'.$_POST['map_api_key_5star'].'","csformrecaptchasite"', $api_key_update);
		
		
		 
		$api_key_update = mysqli_real_escape_string($connect, $api_key_update);
		$question = "UPDATE ".$dbprefix."extensions set params = '".$api_key_update."' WHERE element = 'com_customsettings'";
		mysqli_query($connect, $question); 
		 
		 
		 
		 
		//Form
		for($i=0; $i<count($_POST['form_id']); $i++)
		{
			$question = "SELECT * FROM ".$dbprefix."rsform_forms WHERE FormId = ".$_POST['form_id'][$i];
			$form_isset = mysqli_query($connect, $question);
			if(mysqli_num_rows($form_isset) == 1)
			{
				$question = "UPDATE ".$dbprefix."rsform_forms set AdminEmailFrom = '".$_POST['form_from'][$i]."', AdminEmailTo = '".$_POST['form_to'][$i]."' WHERE FormId = ".$_POST['form_id'][$i];
				mysqli_query($connect, $question);
				if(count($_POST['form_id']) == 1)
				{
					$question = "UPDATE ".$dbprefix."rsform_translations set value = '".$_POST['form_name'][$i]."' WHERE reference_id = 'AdminEmailFromName'";
					mysqli_query($connect, $question);
				}
			}				
		 }
		 
		 //Dev mode
		 
		$question = "SELECT * FROM ".$dbprefix."extensions WHERE element = 'com_customsettings'";
		$com_customsettings = mysqli_query($connect, $question);
		$com_customsettings = mysqli_fetch_array($com_customsettings);
			
		if(isset($_POST['dev_mode']))
			$dev_mode_status = 1;
		else
			$dev_mode_status = 0;
			
		$dev_mode_update = preg_replace('/"devmode":(.*?),"devmodebuttonalign"/', '"devmode":'.$dev_mode_status.',"devmodebuttonalign"', $com_customsettings['params']);
				
		$dev_mode_update = mysqli_real_escape_string($connect, $dev_mode_update);
		$question = "UPDATE ".$dbprefix."extensions set params = '".$dev_mode_update."' WHERE element = 'com_customsettings'";
		mysqli_query($connect, $question);
		
		//JCH update key
		$question = "SELECT * FROM ".$dbprefix."extensions WHERE element = 'jch_optimize'";
		$com_customsettings = mysqli_query($connect, $question);
		$com_customsettings = mysqli_fetch_array($com_customsettings);
		
		$jch_key_update = preg_replace('/"pro_downloadid":"(.*?)","hidden_api_secret"/', '"pro_downloadid":"'.$_POST['jch_download_id'].'","hidden_api_secret"', $com_customsettings['params']);
		
		$jch_key_update = mysqli_real_escape_string($connect, $jch_key_update);
		$question = "UPDATE ".$dbprefix."extensions set params = '".$jch_key_update."' WHERE element = 'jch_optimize'";
		mysqli_query($connect, $question);
		
		//analytics
		$question = "SELECT * FROM ".$dbprefix."extensions WHERE element = 'com_customsettings'";
		$com_customsettings = mysqli_query($connect, $question);
		$com_customsettings = mysqli_fetch_array($com_customsettings);
		
		$analytics_link = strtr($_POST['analytics_link'], array(  "\n" => "\\n",  "\r" => "\\r", "/" => "\\/" ));
		
		$analytics_update = preg_replace('/"anxexternalscripts":"(.*?)","anxscript"/', '"anxexternalscripts":"'.$analytics_link.'","anxscript"', $com_customsettings['params']);
		
		$analytics_script = strtr($_POST['analytics_script'], array(  "\n" => "\\n",  "\r" => "\\r", "/" => "\\/" ));
		
		//echo $analytics_script;
		
		$analytics_update = preg_replace('/"anxscript":"(.*?)","anxnoscript"/', '"anxscript":"'.$analytics_script.'","anxnoscript"', $analytics_update);
		
		$analytics_update = mysqli_real_escape_string($connect, $analytics_update);
		$question = "UPDATE ".$dbprefix."extensions set params = '".$analytics_update."' WHERE element = 'com_customsettings'";
		mysqli_query($connect, $question);
		
		
		//admin exile
		$question = "SELECT * FROM ".$dbprefix."extensions WHERE element = 'adminexile'";
		$admin_exile_info = mysqli_query($connect, $question);
		$admin_exile_info = mysqli_fetch_array($admin_exile_info);
		
		$admin_exile_info = $admin_exile_info[11];
		
		$admin_exile_update = preg_replace('/"key":"(.*?)","twofactor"/', '"key":"'.$_POST['adminexile_key'].'","twofactor"', $admin_exile_info);
		
		if(isset($_POST['adminexile_key_second_enable']))
			$adminexile_key_second_enable = 1;
		else
			$adminexile_key_second_enable = 0;
		
		$admin_exile_update = preg_replace('/"twofactor":"(.*?)","keyvalue"/', '"twofactor":"'.$adminexile_key_second_enable.'","keyvalue"', $admin_exile_update);
		
		$admin_exile_update = preg_replace('/"keyvalue":"(.*?)","tmpwhitelist"/', '"keyvalue":"'.$_POST['adminexile_key_second'].'","tmpwhitelist"', $admin_exile_update);
		
		$admin_exile_update = mysqli_real_escape_string($connect, $admin_exile_update);
		
		$question = "UPDATE ".$dbprefix."extensions set params = '".$admin_exile_update."' WHERE element = 'adminexile'";
		mysqli_query($connect, $question);
		 
		 
	$config_file = "<?php
	class JConfig {
	public $"."MetaAuthor = '{$MetaAuthor}';
	public $"."MetaDesc = '{$MetaDesc}';
	public $"."MetaKeys = '{$MetaKeys}';
	public $"."MetaRights = '{$MetaRights}';
	public $"."MetaTitle = '{$MetaTitle}';
	public $"."MetaVersion = '{$MetaVersion}';
	public $"."access = '{$access}';
	public $"."cache_handler = '{$cache_handler}';
	public $"."cachetime = '{$_POST['cachetime']}';
	public $"."caching = '{$caching}';
	public $"."captcha = '{$captcha}';
	public $"."cookie_domain = '{$cookie_domain}';
	public $"."cookie_path = '{$cookie_path}';
	public $"."db = '{$db}';
	public $"."dbprefix = '{$dbprefix}';
	public $"."dbtype = '{$dbtype}';
	public $"."debug = '{$debug}';
	public $"."debug_lang = '{$debug_lang}';
	public $"."display_offline_message = '{$display_offline_message}';
	public $"."editor = '{$editor}';
	public $"."error_reporting = '{$error_reporting}';
	public $"."feed_email = '{$feed_email}';
	public $"."feed_limit = '{$feed_limit}';
	public $"."force_ssl = '{$force_ssl}';
	public $"."fromname = '{$fromname}';
	public $"."ftp_enable = '{$ftp_enable}';
	public $"."ftp_host = '{$ftp_host}';
	public $"."ftp_pass = '{$ftp_pass}';
	public $"."ftp_port = '{$ftp_port}';
	public $"."ftp_root = '{$ftp_root}';
	public $"."ftp_user = '{$ftp_user}';
	public $"."gzip = '{$gzip}';
	public $"."helpurl = '{$helpurl}';
	public $"."host = '{$host}';
	public $"."lifetime = '{$lifetime}';
	public $"."list_limit = '{$list_limit}';
	public $"."live_site = '{$live_site}';
	public $"."log_path = '{$log_path}';
	public $"."mailer = '{$mailer}';
	public $"."mailfrom = '{$mailfrom}';
	public $"."memcache_compress = '{$memcache_compress}';
	public $"."memcache_persist = '{$memcache_persist}';
	public $"."memcache_server_host = '{$memcache_server_host }';
	public $"."memcache_server_port = '{$memcache_server_port}';
	public $"."offline = '{$offline}';
	public $"."offline_image = '{$offline_image}';
	public $"."offline_message = '{$offline_message}';
	public $"."offset = '{$offset}';
	public $"."offset_user = '{$offset_user}';
	public $"."password = '{$password}';
	public $"."robots = '{$robots}';
	public $"."secret = '{$secret}';
	public $"."sef = '{$sef}';
	public $"."sef_rewrite = '{$sef_rewrite}';
	public $"."sef_suffix = '{$sef_suffix}';
	public $"."sendmail = '{$sendmail}';
	public $"."session_handler = '{$session_handler}';
	public $"."sitename = '{$sitename}';
	public $"."sitename_pagetitles = '{$sitename_pagetitles}';
	public $"."smtpauth = '{$smtpauth}';
	public $"."smtphost = '{$smtphost}';
	public $"."smtppass = '{$smtppass}';
	public $"."smtpport = '{$smtpport}';
	public $"."smtpsecure = '{$smtpsecure}';
	public $"."smtpuser = '{$smtpuser}';
	public $"."tmp_path = '{$tmp_path}';
	public $"."unicodeslugs = '{$unicodeslugs}';
	public $"."user = '{$user}';
	public $"."mailonline = '{$mailonline}';
	public $"."cache_platformprefix = '{$cache_platformprefix}';
	public $"."memcached_persist = '{$memcached_persist}';
	public $"."memcached_compress = '{$memcached_compress}';
	public $"."memcached_server_host = '{$memcached_server_host}';
	public $"."memcached_server_port = '{$memcached_server_port}';
	public $"."redis_persist = '{$redis_persist}';
	public $"."redis_server_host = '{$redis_server_host}';
	public $"."redis_server_port = '{$redis_server_port}';
	public $"."redis_server_auth = '{$redis_server_auth}';
	public $"."redis_server_db = '{$redis_server_db}';
	public $"."proxy_enable = '{$proxy_enable}';
	public $"."proxy_host = '{$proxy_host}';
	public $"."proxy_port = '{$proxy_port}';
	public $"."proxy_user = '{$proxy_user}';
	public $"."proxy_pass = '{$proxy_pass}';
	public $"."massmailoff = '{$massmailoff}';
	public $"."session_memcache_server_host = '{$session_memcache_server_host}';
	public $"."session_memcache_server_port = '{$session_memcache_server_port}';
	public $"."session_memcached_server_host = '{$session_memcached_server_host}';
	public $"."session_memcached_server_port = '{$session_memcached_server_port}';
	public $"."frontediting = '{$frontediting}';
	public $"."asset_id = '{$asset_id}';
	public $"."replyto = '{$replyto}';
	public $"."replytoname = '{$replytoname}';
	public $"."shared_session = '{$shared_session}';
	public $"."session_redis_server_host = '{$session_redis_server_host}';
	public $"."session_redis_server_port = '{$session_redis_server_port}';
	public $"."session_redis_server_db = '{$session_redis_server_db}';
	public $"."debug_lang_const = '{$debug_lang_const}';
	public $"."session_redis_persist = '{$session_redis_persist}';
	public $"."session_redis_server_auth = '{$session_redis_server_auth}';
}";
	$config_options = fopen("configuration.php", "w+");
	fputs($config_options, $config_file);
	fclose($config_options);
	}
	
}
$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if (mysqli_connect_errno())
	{
		echo "Niepoprawne dane logowania do bazy danych";
		return;
	}
	else
	{
		//jch
		$question = "SELECT * FROM ".$dbprefix."extensions WHERE element = 'jch_optimize'";
		$jch_info = mysqli_query($connect, $question);
		$jch_info = mysqli_fetch_array($jch_info);
		
		if (preg_match('/"pro_downloadid":"(.*?)","hidden_api_secret"/', $jch_info['params'], $match) == 1)
		$jch_download_id = $match[1];
		else
		$jch_download_id = "";
	
		//dev mode
		$question = "SELECT * FROM ".$dbprefix."extensions WHERE element = 'com_customsettings'";
		$dev_mode = mysqli_query($connect, $question);
		$dev_mode = mysqli_fetch_array($dev_mode);
	
		preg_match('/"devmode":(.*?),"devmodebuttonalign"/', $dev_mode['params'], $dev_mode);
		
		//cookie
		$question = "SELECT * FROM ".$dbprefix."extensions WHERE element = 'cookiesalert'";
		$cookie_info = mysqli_query($connect, $question);
		$cookie_info = mysqli_fetch_array($cookie_info);
		
		//update
		$question = "SELECT * FROM ".$dbprefix."extensions WHERE element = 'updatenotification'";
		$update_info = mysqli_query($connect, $question);
		$update_info = mysqli_fetch_array($update_info);
		
		//Rredirect
		$question = "SELECT * FROM ".$dbprefix."extensions WHERE element = 'redirect'";
		$redirect_info = mysqli_query($connect, $question);
		$redirect_info = mysqli_fetch_array($redirect_info);
		
		//firewall
		$question = "SELECT * FROM ".$dbprefix."rsfirewall_configuration WHERE name = 'code'";
		$rsfirewall_info = mysqli_query($connect, $question);
		$rsfirewall_info = mysqli_fetch_array($rsfirewall_info);
		
		//form update
		$question = "SELECT * FROM ".$dbprefix."rsform_config WHERE SettingName = 'global.register.code'";
		$rsform_info = mysqli_query($connect, $question);
		$rsform_info = mysqli_fetch_array($rsform_info);
		
		///////////////////////DB///////////////
		
		//recaptchav2
		$question = "SELECT * FROM ".$dbprefix."rsform_config WHERE SettingName = 'recaptchav2.site.key'";
		$recaptcha_site_info = mysqli_query($connect, $question);
		$recaptcha_site_info = mysqli_fetch_array($recaptcha_site_info);
		
		$question = "SELECT * FROM ".$dbprefix."rsform_config WHERE SettingName = 'recaptchav2.secret.key'";
		$recaptcha_secret_info = mysqli_query($connect, $question);
		$recaptcha_secret_info = mysqli_fetch_array($recaptcha_secret_info);
		
		//map
		$question = "SELECT * FROM ".$dbprefix."modules WHERE module = 'mod_bt_googlemaps'";
		$map_info = mysqli_query($connect, $question);
		$map_info = mysqli_fetch_array($map_info);
		
		preg_match('/"map_api":"(.*?)","markes"/', $map_info['params'], $match);
		$map_api_key = $match[1];
		
		preg_match('/"mapCenterType":"(.*?)","mapCenterAddress"/', $map_info['params'], $match);
		$map_addres_type = $match[1];
		
		preg_match('/"mapCenterCoordinate":"(.*?)","width"/', $map_info['params'], $match);
		$map_coordinate = $match[1];
		
		///////////////////5STAR/////////////////////
		//recaptchav2
		$question = "SELECT * FROM ".$dbprefix."extensions WHERE element = 'com_customsettings'";
		$customsettings_info_5star = mysqli_query($connect, $question);
		$customsettings_info_5star = mysqli_fetch_array($customsettings_info_5star);
		
		if(preg_match('/"csformrecaptchasite":"(.*?)","csformrecaptchasecret"/', $customsettings_info_5star['params'], $match) == 1)
			$recaptcha_site_info_5star = $match[1];
		else
			$recaptcha_site_info_5star = "";
		
		if(preg_match('/"csformrecaptchasecret":"(.*?)","csrodoprivacypolicy_pl_PL"/', $customsettings_info_5star['params'], $match) == 1)
			$recaptcha_secret_info_5star = $match[1];
		else
			$recaptcha_secret_info_5star = "";
		
		//map
		if(preg_match('/"csgmapsapikey":"(.*?)","csformrecaptchasite"/', $customsettings_info_5star['params'], $match) == 1)
			$map_api_key_5star = $match[1];
		else
			$map_api_key_5star = "";
		
		//analytics
		$question = "SELECT * FROM ".$dbprefix."extensions WHERE element = 'com_customsettings'";
		$analytics_info = mysqli_query($connect, $question);
		$analytics_info = mysqli_fetch_array($analytics_info);
		
		if (preg_match('/"anxexternalscripts":"(.*?)","anxscript"/', $analytics_info['params'], $match) == 1)
		{
		$link_analytics = strtr($match[1], array(  "\\n" => "\n",  "\\r" => "\r", "\\" => "" ));
		}
		else
			$link_analytics = "";
	
		if (preg_match('/"anxscript":"(.*?)","anxnoscript"/', $analytics_info['params'], $match) == 1)
		{
			$script_analytics = strtr($match[1], array(  "\\n" => "\n",  "\\r" => "\r", "\\" => "" ));
		}
		else
			$script_analytics = "";
		
		//admin exile
		$question = "SELECT * FROM ".$dbprefix."extensions WHERE element = 'adminexile'";
		$admin_exile_info = mysqli_query($connect, $question);
		$admin_exile_info = mysqli_fetch_array($admin_exile_info);
		
		preg_match('/"key":"(.*?)","twofactor"/', $admin_exile_info['params'], $match) == 1;
		$admin_exile_key = $match[1];
		
		preg_match('/"twofactor":"(.*?)","keyvalue"/', $admin_exile_info['params'], $match);
		$admin_exile_key_second_enable = $match[1];
		
		preg_match('/"keyvalue":"(.*?)","tmpwhitelist"/', $admin_exile_info['params'], $match) == 1;
		$admin_exile_key_second = $match[1];
		
		
		//form
		$question = "SELECT * FROM ".$dbprefix."rsform_forms";
		$forms_info = mysqli_query($connect, $question);
		$question = "SELECT * FROM ".$dbprefix."rsform_translations WHERE reference_id = 'AdminEmailFromName'";
		$form_name = mysqli_query($connect, $question);
		$form_name = mysqli_fetch_array($form_name);
		if(mysqli_num_rows($forms_info) == 1)
		{
			$form_info = mysqli_fetch_array($forms_info);
			$form_echo = '<fieldset>
<legend>Formularz "'.$form_info['FormName'].'"</legend>
<table>
<tr><td>Od: </td><td><input type="text" rows="10" name="form_from[]" value="'.$form_info['AdminEmailFrom'].'"></td></tr>
<tr><td>Tytuł: </td><td><input type="text" rows="10" name="form_name[]" value="'.$form_name['value'].'"></td></tr>
<tr><td>Do: </td><td><input type="text" rows="10" name="form_to[]" value="'.$form_info['AdminEmailTo'].'"></td></tr>
</table></fieldset>
<input type="hidden" name="form_id[]" value="'.$form_info['FormId'].'">';
		}
		else if(mysqli_num_rows($forms_info) > 1)
		{
			$form_echo = "";
			while($form_info = mysqli_fetch_array($forms_info))
			{
			$form_echo .= '<fieldset>
<legend>Formularz "'.$form_info['FormName'].'"</legend>
<table>
<tr><td>Od: </td><td><input type="text" rows="10" name="form_from[]" value="'.$form_info['AdminEmailFrom'].'"></td></tr>
<tr><td>Tytuł: </td><td><input type="text" rows="10" name="form_name[]" value="'.$form_name['value'].'"></td></tr>
<tr><td>Do: </td><td><input type="text" name="form_to[]" value="'.$form_info['AdminEmailTo'].'"></td></tr>
</table></fieldset>
<input type="hidden" name="form_id[]" value="'.$form_info['FormId'].'">';
		}
		}
	}
	$good = '<i class="fas fa-check fa-2x" style="color: green"></i>';

?>


<form method="POST">
<table>
<tr><td><span>
SSL:</td><td> <input type="checkbox" class="admin_input" name="force_ssl" <?php if($force_ssl == 2)echo 'checked = "checked"';?>><?php if($force_ssl == 2) echo $good; ?>
</span><tr><td>
cookie info:</td><td> <input type="checkbox" class="admin_input" name="cookie_info" <?php if($cookie_info['enabled'] == 1)echo 'checked = "checked"';?>><?php if($cookie_info['enabled'] == 1) echo $good; ?></td></tr>
<tr><td>
Update info:</td><td> <input type="checkbox" class="admin_input" name="update_info" <?php if($update_info['enabled'] == 1)echo 'checked = "checked"';?>><?php if($update_info['enabled'] != 1) echo $good; ?></td></tr>
<tr><td>
google index:</td><td> <input type="checkbox" class="admin_input" name="google_index" <?php if($robots == "")echo 'checked = "checked"';?>><?php if($robots == "") echo $good; ?></td></tr>
<tr><td>
send mail:</td><td> <input type="checkbox" class="admin_input" name="send_mail" <?php if($mailonline == 1)echo 'checked = "checked"';?>><?php if($mailonline == 1) echo $good; ?></td></tr>
<tr><td>
JCH:</td><td> <input type="checkbox" class="admin_input" name="jch_enable" <?php if($jch_info['enabled'] == 1)echo 'checked = "checked"';?>><?php if($jch_info['enabled'] == 1) echo $good; ?></td></tr>
<tr><td>
dev mode:</td><td> <input type="checkbox" class="admin_input" name="dev_mode" <?php if($dev_mode[1] == 1)echo 'checked = "checked"';?>><?php if($dev_mode[1] != 1) echo $good; ?></td></tr>
<tr><td>
shared session:</td><td> <input type="checkbox" class="admin_input" name="shared_session" <?php if($shared_session == 1)echo 'checked = "checked"';?>><?php if($shared_session != 1) echo $good; ?></td></tr>
<tr><td>
Redirect:</td><td> <input type="checkbox" class="admin_input" name="redirect_enable" <?php if($redirect_info['enabled'] == 1)echo 'checked = "checked"';?>></td></tr>
<tr><td>
Cache time:</td><td> <input type="text" name="cachetime" value="<?php echo $cachetime;?>"><?php if($cachetime == 15) echo $good; ?></td></tr>
<tr><td>
JCH:</td><td> <input type="text" name="jch_download_id" value="<?php echo $jch_download_id;?>"><?php if($jch_download_id != "") echo $good; ?></td></tr>
<tr><td>
RSFirewall:</td><td> <input type="text" name="rsfirewall" value="<?php echo $rsfirewall_info['value'];?>"><?php if($rsfirewall_info['value'] != "") echo $good; ?></td></tr>
<tr><td>
RSForm:</td><td> <input type="text" name="rsform" value="<?php echo $rsform_info['SettingValue'];?>"><?php if($rsform_info['SettingValue'] != "") echo $good; ?></td></tr>
<tr><td>
AdminExile key:</td><td> <input type="text" name="adminexile_key" value="<?php echo $admin_exile_key;?>"><?php if($admin_exile_key != "dev") echo $good; ?></td></tr>
<tr><td>
AdminExile value:</td><td> <input type="checkbox" class="admin_input" name="adminexile_key_second_enable" <?php if($admin_exile_key_second_enable == 1)echo 'checked = "checked"';?>></td></tr>
<tr><td>
AdminExile value:</td><td><input type="text" name="adminexile_key_second" value="<?php echo $admin_exile_key_second;?>"></td></tr>
<tr><td>
Log path required:</td><td><input type="text" name="" disabled value="<?php echo getcwd() . DIRECTORY_SEPARATOR . 'administrator' . DIRECTORY_SEPARATOR . 'logs';?>"></td></tr>
<tr><td>
Log path current:</td><td><input type="text" name="log_path" value="<?php echo $log_path;?>"></td></tr>
<tr><td>
TMP path required:</td><td><input type="text" name="" disabled value="<?php echo getcwd() . DIRECTORY_SEPARATOR . 'tmp';?>"></td></tr>
<tr><td>
TMP path current:</td><td><input type="text" name="tmp_path" value="<?php echo $tmp_path;?>"></td></tr>
<tr><td>
Map address type:</td><td> 
<select name="map_addres_type">
<option value="coordinate" <?php if($map_addres_type == "coordinate")echo "selected"; ?>>coordinate</option>
<option value="address" <?php if($map_addres_type == "address")echo "selected"; ?>>address</option>
</select><?php if($map_addres_type == "coordinate") echo $good; ?>
</td></tr>
<tr><td>
Map coordinate:</td><td> <input type="text" name="map_coordinate" value="<?php echo $map_coordinate;?>"></td></tr>
<tr><td>
</table>

<fieldset>
<legend>DB</legend>
<table>
<tr><td>
Recaptcha site key:</td><td> <input type="text" name="recaptcha_site" value="<?php echo $recaptcha_site_info['SettingValue'];?>"><?php if($recaptcha_site_info['SettingValue'] != "") echo $good; ?></td></tr>
<tr><td>
Recaptcha secret key:</td><td> <input type="text" name="recaptcha_secret" value="<?php echo $recaptcha_secret_info['SettingValue'];?>"><?php if($recaptcha_secret_info['SettingValue'] != "") echo $good; ?></td></tr>
<tr><td>
MAP:</td><td> <input type="text" name="map_api_key" value="<?php echo $map_api_key;?>"><?php if($map_api_key != "") echo $good; ?></td></tr>
</table>
</fieldset>

<fieldset>
<legend>5Star</legend>
<table>
<tr><td>
Recaptcha site key:</td><td> <input type="text" name="recaptcha_site_5star" value="<?php echo $recaptcha_site_info_5star;?>"><?php if($recaptcha_site_info_5star != "") echo $good; ?></td></tr>
<tr><td>
Recaptcha secret key:</td><td> <input type="text" name="recaptcha_secret_5star" value="<?php echo $recaptcha_secret_info_5star;?>"><?php if($recaptcha_secret_info_5star != "") echo $good; ?></td></tr>
<tr><td>
MAP:</td><td> <input type="text" name="map_api_key_5star" value="<?php echo $map_api_key_5star;?>"><?php if($map_api_key_5star != "") echo $good; ?></td></tr>
</table>
</fieldset>

<table>
<tr><td>
Analytics link:</td><td> <textarea type="text" name="analytics_link" rows="4" cols="50"><?php echo $link_analytics;?></textarea><?php if($link_analytics != "") echo $good; ?></td></tr>
<tr><td>
Analytics script:</td><td> <textarea type="text" name="analytics_script" rows="6" cols="50"><?php echo $script_analytics;?></textarea><?php if($script_analytics != "") echo $good; ?></td></tr>
<tr><td>
</table>
<?php echo $form_echo; ?>
<button name='send' class='' type='submit'>Wyślij</button>

</form>
</body>
</html>