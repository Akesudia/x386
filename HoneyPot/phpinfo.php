<?php
// fake phpinfo
// 欺骗诱导式攻击
date_default_timezone_set('PRC');
$to = 'wenjian@vpgame.cn'; //replace with your email address
$subject = 'Some one is viewing the fake phpinfo page!';
$message = '
Date: '.date('l jS \of F Y h:i:s A').'
Source IP: '.$_SERVER['REMOTE_ADDR'];
 
mail($to, $subject, $message);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<style type="text/css">
body {background-color: #ffffff; color: #000000;}
body, td, th, h1, h2 {font-family: sans-serif;}
pre {margin: 0px; font-family: monospace;}
a:link {color: #000099; text-decoration: none; background-color: #ffffff;}
a:hover {text-decoration: underline;}
table {border-collapse: collapse;}
.center {text-align: center;}
.center table { margin-left: auto; margin-right: auto; text-align: left;}
.center th { text-align: center !important; }
td, th { border: 1px solid #000000; font-size: 75%; vertical-align: baseline;}
h1 {font-size: 150%;}
h2 {font-size: 125%;}
.p {text-align: left;}
.e {background-color: #ccccff; font-weight: bold; color: #000000;}
.h {background-color: #9999cc; font-weight: bold; color: #000000;}
.v {background-color: #cccccc; color: #000000;}
.vr {background-color: #cccccc; text-align: right; color: #000000;}
img {float: right; border: 0px;}
hr {width: 600px; background-color: #cccccc; border: 0px; height: 1px; color: #000000;}
</style>
<title>phpinfo()</title><meta name="ROBOTS" content="NOINDEX,NOFOLLOW,NOARCHIVE" /></head>
<body><div class="center">
<table border="0" cellpadding="3" width="600">
<tr class="h"><td>
<a href="http://www.php.net/"><img border="0" src="data:image/gif;base64,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" alt="PHP logo"></a><h1 class="p">PHP Version 5.3.29</h1>
</td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr><td class="e">System </td><td class="v">Linux piter1.dns-rus.net 2.6.32-642.6.2.el6.x86_64 #1 SMP Wed Oct 26 06:52:09 UTC 2016 x86_64 </td></tr>
<tr><td class="e">Build Date </td><td class="v">Jan 22 2015 19:20:06 </td></tr>
<tr><td class="e">Configure Command </td><td class="v"> &#039;./configure&#039;  &#039;--disable-posix&#039; &#039;--enable-bcmath&#039; &#039;--enable-calendar&#039; &#039;--enable-exif&#039; &#039;--enable-ftp&#039; &#039;--enable-gd-native-ttf&#039; &#039;--enable-intl&#039; &#039;--enable-libxml&#039; &#039;--enable-magic-quotes&#039; &#039;--enable-mbstring&#039; &#039;--enable-pdo=shared&#039; &#039;--enable-soap&#039; &#039;--enable-sockets&#039; &#039;--enable-ucd-snmp-hack&#039; &#039;--enable-wddx&#039; &#039;--enable-zend-multibyte&#039; &#039;--enable-zip&#039; &#039;--prefix=/usr/local&#039; &#039;--with-apxs2=/usr/local/apache/bin/apxs&#039; &#039;--with-bz2&#039; &#039;--with-config-file-path=/usr/local/lib&#039; &#039;--with-config-file-scan-dir=/usr/local/lib/php.ini.d&#039; &#039;--with-curl=/opt/curlssl/&#039; &#039;--with-curlwrappers&#039; &#039;--with-enchant=/usr&#039; &#039;--with-freetype-dir=/usr&#039; &#039;--with-gd&#039; &#039;--with-gettext&#039; &#039;--with-gmp&#039; &#039;--with-icu-dir=/usr&#039; &#039;--with-imap=/opt/php_with_imap_client/&#039; &#039;--with-imap-ssl=/usr&#039; &#039;--with-interbase=/opt/firebird/&#039; &#039;--with-jpeg-dir=/usr&#039; &#039;--with-kerberos&#039; &#039;--with-libdir=lib64&#039; &#039;--with-libexpat-dir=/usr&#039; &#039;--with-libxml-dir=/opt/xml2&#039; &#039;--with-libxml-dir=/opt/xml2/&#039; &#039;--with-mcrypt=/opt/libmcrypt/&#039; &#039;--with-mm=/opt/mm/&#039; &#039;--with-mysql=/usr&#039; &#039;--with-mysql-sock=/var/lib/mysql/mysql.sock&#039; &#039;--with-mysqli=/usr/bin/mysql_config&#039; &#039;--with-openssl=/usr&#039; &#039;--with-openssl-dir=/usr&#039; &#039;--with-pcre-regex=/opt/pcre&#039; &#039;--with-pdo-mysql=shared&#039; &#039;--with-pdo-sqlite=shared&#039; &#039;--with-pic&#039; &#039;--with-png-dir=/usr&#039; &#039;--with-pspell&#039; &#039;--with-snmp&#039; &#039;--with-sqlite=shared&#039; &#039;--with-tidy=/opt/tidy/&#039; &#039;--with-xmlrpc&#039; &#039;--with-xpm-dir=/usr&#039; &#039;--with-xsl=/opt/xslt/&#039; &#039;--with-zlib&#039; &#039;--with-zlib-dir=/usr&#039; </td></tr>
<tr><td class="e">Server API </td><td class="v">Apache 2.0 Handler </td></tr>
<tr><td class="e">Virtual Directory Support </td><td class="v">disabled </td></tr>
<tr><td class="e">Configuration File (php.ini) Path </td><td class="v">/usr/local/lib </td></tr>
<tr><td class="e">Loaded Configuration File </td><td class="v">/usr/local/lib/php.ini </td></tr>
<tr><td class="e">Scan this dir for additional .ini files </td><td class="v">/usr/local/lib/php.ini.d </td></tr>
<tr><td class="e">Additional .ini files parsed </td><td class="v">(none) </td></tr>
<tr><td class="e">PHP API </td><td class="v">20090626 </td></tr>
<tr><td class="e">PHP Extension </td><td class="v">20090626 </td></tr>
<tr><td class="e">Zend Extension </td><td class="v">220090626 </td></tr>
<tr><td class="e">Zend Extension Build </td><td class="v">API220090626,NTS </td></tr>
<tr><td class="e">PHP Extension Build </td><td class="v">API20090626,NTS </td></tr>
<tr><td class="e">Debug Build </td><td class="v">no </td></tr>
<tr><td class="e">Thread Safety </td><td class="v">disabled </td></tr>
<tr><td class="e">Zend Memory Manager </td><td class="v">enabled </td></tr>
<tr><td class="e">Zend Multibyte Support </td><td class="v">enabled </td></tr>
<tr><td class="e">IPv6 Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Registered PHP Streams </td><td class="v">compress.zlib, compress.bzip2, dict, ftp, ftps, gopher, http, https, imap, imaps, pop3, pop3s, rtsp, smtp, smtps, telnet, tftp, php, file, glob, data, zip, phar   </td></tr>
<tr><td class="e">Registered Stream Socket Transports </td><td class="v">tcp, udp, unix, udg, ssl, sslv3, sslv2, tls </td></tr>
<tr><td class="e">Registered Stream Filters </td><td class="v">zlib.*, bzip2.*, convert.iconv.*, mcrypt.*, mdecrypt.*, string.rot13, string.toupper, string.tolower, string.strip_tags, convert.*, consumed, dechunk </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="v"><td>
<a href="http://www.zend.com/"><img border="0" src="/phpinfo.php?=PHPE9568F35-D428-11d2-A769-00AA001ACF42" alt="Zend logo" /></a>
This program makes use of the Zend Scripting Language Engine:<br />Zend&nbsp;Engine&nbsp;v2.3.0,&nbsp;Copyright&nbsp;(c)&nbsp;1998-2014&nbsp;Zend&nbsp;Technologies<br />&nbsp;&nbsp;&nbsp;&nbsp;with&nbsp;the&nbsp;ionCube&nbsp;PHP&nbsp;Loader&nbsp;v6.1.0&nbsp;(),&nbsp;Copyright&nbsp;(c)&nbsp;2002-2017,&nbsp;by&nbsp;ionCube&nbsp;Ltd.<br />&nbsp;&nbsp;&nbsp;&nbsp;with&nbsp;Zend&nbsp;Guard&nbsp;Loader&nbsp;v3.3,&nbsp;Copyright&nbsp;(c)&nbsp;1998-2010,&nbsp;by&nbsp;Zend&nbsp;Technologies<br /></td></tr>
</table><br />
<hr />
<h1><a href="/phpinfo.php?=PHPB8B5F2A0-3C92-11d3-A3A9-4C7B08C10000">PHP Credits</a></h1>
<hr />
<h1>Configuration</h1>
<h2><a name="module_apache2handler">apache2handler</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Apache Version </td><td class="v">Apache </td></tr>
<tr><td class="e">Apache API Version </td><td class="v">20051115 </td></tr>
<tr><td class="e">Server Administrator </td><td class="v">dns@bh-group.net </td></tr>
<tr><td class="e">Hostname:Port </td><td class="v">91.219.194.1:0 </td></tr>
<tr><td class="e">User/Group </td><td class="v">nobody(99)/99 </td></tr>
<tr><td class="e">Max Requests </td><td class="v">Per Child: 10000 - Keep Alive: on - Max Per Connection: 100 </td></tr>
<tr><td class="e">Timeouts </td><td class="v">Connection: 300 - Keep-Alive: 5 </td></tr>
<tr><td class="e">Virtual Server </td><td class="v">Yes </td></tr>
<tr><td class="e">Server Root </td><td class="v">/usr/local/apache </td></tr>
<tr><td class="e">Loaded Modules </td><td class="v">core mod_authn_file mod_authn_dbm mod_authn_anon mod_authn_dbd mod_authn_default mod_authn_alias mod_authz_host mod_authz_groupfile mod_authz_user mod_authz_dbm mod_authz_owner mod_authz_default mod_auth_basic mod_auth_digest mod_file_cache mod_cache mod_dbd mod_bucketeer mod_dumpio mod_echo mod_case_filter mod_case_filter_in mod_ext_filter mod_include mod_filter mod_charset_lite mod_deflate mod_log_config mod_log_forensic mod_logio mod_env mod_mime_magic mod_cern_meta mod_expires mod_headers mod_ident mod_usertrack mod_unique_id mod_setenvif mod_version mod_proxy mod_proxy_connect mod_proxy_ftp mod_proxy_http mod_proxy_scgi mod_proxy_ajp mod_proxy_balancer mod_ssl mod_optional_hook_export mod_optional_hook_import mod_optional_fn_import mod_optional_fn_export prefork http_core mod_mime mod_dav mod_status mod_autoindex mod_asis mod_info mod_suexec mod_cgi mod_dav_fs mod_dav_lock mod_vhost_alias mod_negotiation mod_dir mod_imagemap mod_actions mod_speling mod_userdir mod_alias mod_rewrite mod_so mod_rpaf-2 mod_bwlimited mod_ruid2 mod_php5 mod_security2 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">engine</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">last_modified</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">xbithack</td><td class="v">0</td><td class="v">0</td></tr>
</table><br />
<h2>Apache Environment</h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">UNIQUE_ID </td><td class="v">WWQwlVvbwgEAADBN2nsAAAAD </td></tr>
<tr><td class="e">HTTP_HOST </td><td class="v">piter1.dns-rus.net </td></tr>
<tr><td class="e">HTTP_X_REAL_IP </td><td class="v">60.191.110.98 </td></tr>
<tr><td class="e">HTTP_X_FORWARDED_FOR </td><td class="v">127.0.0.1, 60.191.110.98 </td></tr>
<tr><td class="e">HTTP_CONNECTION </td><td class="v">close </td></tr>
<tr><td class="e">HTTP_UPGRADE_INSECURE_REQUESTS </td><td class="v">1 </td></tr>
<tr><td class="e">HTTP_USER_AGENT </td><td class="v"><?php echo $_SERVER['HTTP_USER_AGENT'];?></td></tr>
<tr><td class="e">HTTP_ACCEPT </td><td class="v">text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8 </td></tr>
<tr><td class="e">HTTP_ACCEPT_ENCODING </td><td class="v">gzip, deflate, sdch </td></tr>
<tr><td class="e">HTTP_ACCEPT_LANGUAGE </td><td class="v">zh-CN,zh;q=0.8,zh-TW;q=0.6 </td></tr>
<tr><td class="e">HTTP_PRAGMA </td><td class="v">akamai-x-cache-on, akamai-x-cache-remote-on, akamai-x-check-cacheable, akamai-x-get-cache-key, akamai-x-get-extracted-values, akamai-x-get-ssl-client-session-id, akamai-x-get-true-cache-key, akamai-x-serial-no, akamai-x-get-request-id,akamai-x-get-nonces,akamai-x-get-client-ip,akamai-x-feo-trace </td></tr>
<tr><td class="e">PATH </td><td class="v">/usr/local/jdk/bin:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/usr/X11R6/bin:/usr/local/bin:/usr/X11R6/bin:/root/bin:/opt/bin </td></tr>
<tr><td class="e">SERVER_SIGNATURE </td><td class="v"><i>no value</i> </td></tr>
<tr><td class="e">SERVER_SOFTWARE </td><td class="v">Apache </td></tr>
<tr><td class="e">SERVER_NAME </td><td class="v">piter1.dns-rus.net </td></tr>
<tr><td class="e">SERVER_ADDR </td><td class="v">60.191.120.68</td></tr>
<tr><td class="e">SERVER_PORT </td><td class="v">80 </td></tr>
<tr><td class="e">REMOTE_ADDR </td><td class="v"><?php echo $_SERVER["REMOTE_ADDR"];?></td></tr>
<tr><td class="e">DOCUMENT_ROOT </td><td class="v">/usr/local/apache/htdocs </td></tr>
<tr><td class="e">SERVER_ADMIN </td><td class="v">dns@bh-group.net </td></tr>
<tr><td class="e">SCRIPT_FILENAME </td><td class="v">/usr/local/apache/htdocs/phpinfo.php </td></tr>
<tr><td class="e">REMOTE_PORT </td><td class="v">38267 </td></tr>
<tr><td class="e">GATEWAY_INTERFACE </td><td class="v">CGI/1.1 </td></tr>
<tr><td class="e">SERVER_PROTOCOL </td><td class="v">HTTP/1.0 </td></tr>
<tr><td class="e">REQUEST_METHOD </td><td class="v">GET </td></tr>
<tr><td class="e">QUERY_STRING </td><td class="v"><i>no value</i> </td></tr>
<tr><td class="e">REQUEST_URI </td><td class="v">/phpinfo.php </td></tr>
<tr><td class="e">SCRIPT_NAME </td><td class="v">/phpinfo.php </td></tr>
</table><br />
<h2>HTTP Headers Information</h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th colspan="2">HTTP Request Headers</th></tr>
<tr><td class="e">HTTP Request </td><td class="v">GET /phpinfo.php HTTP/1.0 </td></tr>
<tr><td class="e">Host </td><td class="v">piter1.dns-rus.net </td></tr>
<tr><td class="e">X-Real-IP </td><td class="v">60.191.110.98 </td></tr>
<tr><td class="e">X-Forwarded-For </td><td class="v">127.0.0.1, 60.191.110.98 </td></tr>
<tr><td class="e">Connection </td><td class="v">close </td></tr>
<tr><td class="e">Upgrade-Insecure-Requests </td><td class="v">1 </td></tr>
<tr><td class="e">User-Agent </td><td class="v"><?php echo $_SERVER['HTTP_USER_AGENT'];?></td></tr>
<tr><td class="e">Accept </td><td class="v">text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8 </td></tr>
<tr><td class="e">Accept-Encoding </td><td class="v">gzip, deflate, sdch </td></tr>
<tr><td class="e">Accept-Language </td><td class="v">zh-CN,zh;q=0.8,zh-TW;q=0.6 </td></tr>
<tr><td class="e">Pragma </td><td class="v">akamai-x-cache-on, akamai-x-cache-remote-on, akamai-x-check-cacheable, akamai-x-get-cache-key, akamai-x-get-extracted-values, akamai-x-get-ssl-client-session-id, akamai-x-get-true-cache-key, akamai-x-serial-no, akamai-x-get-request-id,akamai-x-get-nonces,akamai-x-get-client-ip,akamai-x-feo-trace </td></tr>
<tr class="h"><th colspan="2">HTTP Response Headers</th></tr>
<tr><td class="e">X-Powered-By </td><td class="v">PHP/5.3.29 </td></tr>
<tr><td class="e">Connection </td><td class="v">close </td></tr>
<tr><td class="e">Content-Type </td><td class="v">text/html </td></tr>
</table><br />
<h2><a name="module_apc">apc</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>APC Support</th><th>enabled</th></tr>
<tr><td class="e">Version </td><td class="v">3.1.13 </td></tr>
<tr><td class="e">APC Debugging </td><td class="v">Disabled </td></tr>
<tr><td class="e">MMAP Support </td><td class="v">Enabled </td></tr>
<tr><td class="e">MMAP File Mask </td><td class="v"><i>no value</i> </td></tr>
<tr><td class="e">Locking type </td><td class="v">pthread read/write Locks </td></tr>
<tr><td class="e">Serialization Support </td><td class="v">php </td></tr>
<tr><td class="e">Revision </td><td class="v">$Revision: 327136 $ </td></tr>
<tr><td class="e">Build Date </td><td class="v">Dec 19 2015 18:49:44 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">apc.cache_by_default</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">apc.canonicalize</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">apc.coredump_unmap</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">apc.enable_cli</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">apc.enabled</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">apc.file_md5</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">apc.file_update_protection</td><td class="v">2</td><td class="v">2</td></tr>
<tr><td class="e">apc.filters</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">apc.gc_ttl</td><td class="v">3600</td><td class="v">3600</td></tr>
<tr><td class="e">apc.include_once_override</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">apc.lazy_classes</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">apc.lazy_functions</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">apc.max_file_size</td><td class="v">1M</td><td class="v">1M</td></tr>
<tr><td class="e">apc.mmap_file_mask</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">apc.num_files_hint</td><td class="v">1000</td><td class="v">1000</td></tr>
<tr><td class="e">apc.preload_path</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">apc.report_autofilter</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">apc.rfc1867</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">apc.rfc1867_freq</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">apc.rfc1867_name</td><td class="v">APC_UPLOAD_PROGRESS</td><td class="v">APC_UPLOAD_PROGRESS</td></tr>
<tr><td class="e">apc.rfc1867_prefix</td><td class="v">upload_</td><td class="v">upload_</td></tr>
<tr><td class="e">apc.rfc1867_ttl</td><td class="v">3600</td><td class="v">3600</td></tr>
<tr><td class="e">apc.serializer</td><td class="v">default</td><td class="v">default</td></tr>
<tr><td class="e">apc.shm_segments</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">apc.shm_size</td><td class="v">32M</td><td class="v">32M</td></tr>
<tr><td class="e">apc.slam_defense</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">apc.stat</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">apc.stat_ctime</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">apc.ttl</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">apc.use_request_time</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">apc.user_entries_hint</td><td class="v">4096</td><td class="v">4096</td></tr>
<tr><td class="e">apc.user_ttl</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">apc.write_lock</td><td class="v">On</td><td class="v">On</td></tr>
</table><br />
<h2><a name="module_bcmath">bcmath</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">BCMath support </td><td class="v">enabled </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">bcmath.scale</td><td class="v">0</td><td class="v">0</td></tr>
</table><br />
<h2><a name="module_bz2">bz2</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">BZip2 Support </td><td class="v">Enabled </td></tr>
<tr><td class="e">Stream Wrapper support </td><td class="v">compress.bzip2:// </td></tr>
<tr><td class="e">Stream Filter support </td><td class="v">bzip2.decompress, bzip2.compress </td></tr>
<tr><td class="e">BZip2 Version </td><td class="v">1.0.5, 10-Dec-2007 </td></tr>
</table><br />
<h2><a name="module_calendar">calendar</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Calendar support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_Core">Core</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">PHP Version </td><td class="v">5.3.29 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">allow_call_time_pass_reference</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">allow_url_fopen</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">allow_url_include</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">always_populate_raw_post_data</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">arg_separator.input</td><td class="v">&amp;</td><td class="v">&amp;</td></tr>
<tr><td class="e">arg_separator.output</td><td class="v">&amp;</td><td class="v">&amp;</td></tr>
<tr><td class="e">asp_tags</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">auto_append_file</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">auto_globals_jit</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">auto_prepend_file</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">browscap</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">default_charset</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">default_mimetype</td><td class="v">text/html</td><td class="v">text/html</td></tr>
<tr><td class="e">define_syslog_variables</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">detect_unicode</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">disable_classes</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">disable_functions</td><td class="v">system,&nbsp;shell_exec,&nbsp;proc_terminate,&nbsp;proc_open,&nbsp;proc_nice,&nbsp;proc_getstatus,&nbsp;proc_close,&nbsp;&nbsp;&nbsp;passthru,&nbsp;popen,&nbsp;virtual,&nbsp;show_source,&nbsp;&nbsp;pclose,&nbsp;exec,&nbsp;safe_dir,&nbsp;dl,&nbsp;ini_restore,&nbsp;allow_url_fopen,&nbsp;chown,&nbsp;chgrp,&nbsp;shown_source,&nbsp;mysql_list_dbs,&nbsp;get_current_user,&nbsp;getmyid,&nbsp;apache_child_terminate,&nbsp;leak,&nbsp;pfsockopen,&nbsp;ftp_exec</td><td class="v">system,&nbsp;shell_exec,&nbsp;proc_terminate,&nbsp;proc_open,&nbsp;proc_nice,&nbsp;proc_getstatus,&nbsp;proc_close,&nbsp;&nbsp;&nbsp;passthru,&nbsp;popen,&nbsp;virtual,&nbsp;show_source,&nbsp;&nbsp;pclose,&nbsp;exec,&nbsp;safe_dir,&nbsp;dl,&nbsp;ini_restore,&nbsp;allow_url_fopen,&nbsp;chown,&nbsp;chgrp,&nbsp;shown_source,&nbsp;mysql_list_dbs,&nbsp;get_current_user,&nbsp;getmyid,&nbsp;apache_child_terminate,&nbsp;leak,&nbsp;pfsockopen,&nbsp;ftp_exec</td></tr>
<tr><td class="e">display_errors</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">display_startup_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">doc_root</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">docref_ext</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">docref_root</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">enable_dl</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">error_append_string</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">error_log</td><td class="v">error_log</td><td class="v">error_log</td></tr>
<tr><td class="e">error_prepend_string</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">error_reporting</td><td class="v">6135</td><td class="v">6135</td></tr>
<tr><td class="e">exit_on_timeout</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">expose_php</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">extension_dir</td><td class="v">/usr/local/lib/php/extensions/no-debug-non-zts-20090626</td><td class="v">/usr/local/lib/php/extensions/no-debug-non-zts-20090626</td></tr>
<tr><td class="e">file_uploads</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">highlight.bg</td><td class="v"><font style="color: #FFFFFF">#FFFFFF</font></td><td class="v"><font style="color: #FFFFFF">#FFFFFF</font></td></tr>
<tr><td class="e">highlight.comment</td><td class="v"><font style="color: #FF8000">#FF8000</font></td><td class="v"><font style="color: #FF8000">#FF8000</font></td></tr>
<tr><td class="e">highlight.default</td><td class="v"><font style="color: #0000BB">#0000BB</font></td><td class="v"><font style="color: #0000BB">#0000BB</font></td></tr>
<tr><td class="e">highlight.html</td><td class="v"><font style="color: #000000">#000000</font></td><td class="v"><font style="color: #000000">#000000</font></td></tr>
<tr><td class="e">highlight.keyword</td><td class="v"><font style="color: #007700">#007700</font></td><td class="v"><font style="color: #007700">#007700</font></td></tr>
<tr><td class="e">highlight.string</td><td class="v"><font style="color: #DD0000">#DD0000</font></td><td class="v"><font style="color: #DD0000">#DD0000</font></td></tr>
<tr><td class="e">html_errors</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">ignore_repeated_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">ignore_repeated_source</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">ignore_user_abort</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">implicit_flush</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">include_path</td><td class="v">.:/usr/lib/php:/usr/local/lib/php</td><td class="v">.:/usr/lib/php:/usr/local/lib/php</td></tr>
<tr><td class="e">log_errors</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">log_errors_max_len</td><td class="v">1024</td><td class="v">1024</td></tr>
<tr><td class="e">magic_quotes_gpc</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">magic_quotes_runtime</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">magic_quotes_sybase</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">mail.add_x_header</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">mail.force_extra_parameters</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mail.log</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">max_execution_time</td><td class="v">30</td><td class="v">30</td></tr>
<tr><td class="e">max_file_uploads</td><td class="v">20</td><td class="v">20</td></tr>
<tr><td class="e">max_input_nesting_level</td><td class="v">64</td><td class="v">64</td></tr>
<tr><td class="e">max_input_time</td><td class="v">60</td><td class="v">60</td></tr>
<tr><td class="e">max_input_vars</td><td class="v">2000</td><td class="v">2000</td></tr>
<tr><td class="e">memory_limit</td><td class="v">192M</td><td class="v">192M</td></tr>
<tr><td class="e">open_basedir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">output_buffering</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">output_handler</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">post_max_size</td><td class="v">32M</td><td class="v">32M</td></tr>
<tr><td class="e">precision</td><td class="v">12</td><td class="v">12</td></tr>
<tr><td class="e">realpath_cache_size</td><td class="v">16M</td><td class="v">16M</td></tr>
<tr><td class="e">realpath_cache_ttl</td><td class="v">120</td><td class="v">120</td></tr>
<tr><td class="e">register_argc_argv</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">register_globals</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">register_long_arrays</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">report_memleaks</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">report_zend_debug</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">request_order</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">safe_mode</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">safe_mode_exec_dir</td><td class="v">/usr/local/php/bin</td><td class="v">/usr/local/php/bin</td></tr>
<tr><td class="e">safe_mode_gid</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">safe_mode_include_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">sendmail_from</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">sendmail_path</td><td class="v">/usr/sbin/sendmail&nbsp;-t&nbsp;-i</td><td class="v">/usr/sbin/sendmail&nbsp;-t&nbsp;-i</td></tr>
<tr><td class="e">serialize_precision</td><td class="v">100</td><td class="v">100</td></tr>
<tr><td class="e">short_open_tag</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">SMTP</td><td class="v">localhost</td><td class="v">localhost</td></tr>
<tr><td class="e">smtp_port</td><td class="v">25</td><td class="v">25</td></tr>
<tr><td class="e">sql.safe_mode</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">track_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">unserialize_callback_func</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">upload_max_filesize</td><td class="v">32M</td><td class="v">32M</td></tr>
<tr><td class="e">upload_tmp_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">user_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">user_ini.cache_ttl</td><td class="v">300</td><td class="v">300</td></tr>
<tr><td class="e">user_ini.filename</td><td class="v">.user.ini</td><td class="v">.user.ini</td></tr>
<tr><td class="e">variables_order</td><td class="v">EGPCS</td><td class="v">EGPCS</td></tr>
<tr><td class="e">xmlrpc_error_number</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">xmlrpc_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">y2k_compliance</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">zend.enable_gc</td><td class="v">On</td><td class="v">On</td></tr>
</table><br />
<h2><a name="module_ctype">ctype</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">ctype functions </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_curl">curl</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">cURL support </td><td class="v">enabled </td></tr>
<tr><td class="e">cURL Information </td><td class="v">7.38.0 </td></tr>
<tr><td class="e">Age </td><td class="v">3 </td></tr>
<tr><td class="e">Features </td></tr>
<tr><td class="e">AsynchDNS </td><td class="v">No </td></tr>
<tr><td class="e">Debug </td><td class="v">No </td></tr>
<tr><td class="e">GSS-Negotiate </td><td class="v">No </td></tr>
<tr><td class="e">IDN </td><td class="v">Yes </td></tr>
<tr><td class="e">IPv6 </td><td class="v">Yes </td></tr>
<tr><td class="e">Largefile </td><td class="v">Yes </td></tr>
<tr><td class="e">NTLM </td><td class="v">Yes </td></tr>
<tr><td class="e">SPNEGO </td><td class="v">No </td></tr>
<tr><td class="e">SSL </td><td class="v">Yes </td></tr>
<tr><td class="e">SSPI </td><td class="v">No </td></tr>
<tr><td class="e">krb4 </td><td class="v">No </td></tr>
<tr><td class="e">libz </td><td class="v">Yes </td></tr>
<tr><td class="e">CharConv </td><td class="v">No </td></tr>
<tr><td class="e">Protocols </td><td class="v">dict, file, ftp, ftps, gopher, http, https, imap, imaps, pop3, pop3s, rtsp, smtp, smtps, telnet, tftp </td></tr>
<tr><td class="e">Host </td><td class="v">x86_64-unknown-linux-gnu </td></tr>
<tr><td class="e">SSL Version </td><td class="v">OpenSSL/1.0.1e </td></tr>
<tr><td class="e">ZLib Version </td><td class="v">1.2.3 </td></tr>
</table><br />
<h2><a name="module_date">date</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">date/time support </td><td class="v">enabled </td></tr>
<tr><td class="e">&quot;Olson&quot; Timezone Database Version </td><td class="v">0.system </td></tr>
<tr><td class="e">Timezone Database </td><td class="v">internal </td></tr>
<tr><td class="e">Default timezone </td><td class="v">Europe/Moscow </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">date.default_latitude</td><td class="v">31.7667</td><td class="v">31.7667</td></tr>
<tr><td class="e">date.default_longitude</td><td class="v">35.2333</td><td class="v">35.2333</td></tr>
<tr><td class="e">date.sunrise_zenith</td><td class="v">90.583333</td><td class="v">90.583333</td></tr>
<tr><td class="e">date.sunset_zenith</td><td class="v">90.583333</td><td class="v">90.583333</td></tr>
<tr><td class="e">date.timezone</td><td class="v">Europe/Moscow</td><td class="v">Europe/Moscow</td></tr>
</table><br />
<h2><a name="module_dom">dom</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">DOM/XML </td><td class="v">enabled </td></tr>
<tr><td class="e">DOM/XML API Version </td><td class="v">20031129 </td></tr>
<tr><td class="e">libxml Version </td><td class="v">2.9.2 </td></tr>
<tr><td class="e">HTML Support </td><td class="v">enabled </td></tr>
<tr><td class="e">XPath Support </td><td class="v">enabled </td></tr>
<tr><td class="e">XPointer Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Schema Support </td><td class="v">enabled </td></tr>
<tr><td class="e">RelaxNG Support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_enchant">enchant</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>enchant support</th><th>enabled</th></tr>
<tr><td class="e">Version </td><td class="v">1.1.0 </td></tr>
<tr><td class="e">Libenchant Version </td><td class="v">1.5.x </td></tr>
<tr><td class="e">Revision </td><td class="v">$Id: c36987fc33e8b5385cee0e9f7bd179a859c30266 $ </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr><td class="e">myspell </td><td class="v">Myspell Provider </td><td class="v">/usr/lib64/enchant/libenchant_myspell.so </td></tr>
</table><br />
<h2><a name="module_ereg">ereg</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Regex Library </td><td class="v">Bundled library enabled </td></tr>
</table><br />
<h2><a name="module_exif">exif</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">EXIF Support </td><td class="v">enabled </td></tr>
<tr><td class="e">EXIF Version </td><td class="v">1.4 $Id$ </td></tr>
<tr><td class="e">Supported EXIF Version </td><td class="v">0220 </td></tr>
<tr><td class="e">Supported filetypes </td><td class="v">JPEG,TIFF </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">exif.decode_jis_intel</td><td class="v">JIS</td><td class="v">JIS</td></tr>
<tr><td class="e">exif.decode_jis_motorola</td><td class="v">JIS</td><td class="v">JIS</td></tr>
<tr><td class="e">exif.decode_unicode_intel</td><td class="v">UCS-2LE</td><td class="v">UCS-2LE</td></tr>
<tr><td class="e">exif.decode_unicode_motorola</td><td class="v">UCS-2BE</td><td class="v">UCS-2BE</td></tr>
<tr><td class="e">exif.encode_jis</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">exif.encode_unicode</td><td class="v">ISO-8859-15</td><td class="v">ISO-8859-15</td></tr>
</table><br />
<h2><a name="module_ffmpeg">ffmpeg</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">ffmpeg-php version </td><td class="v">0.6.0-svn </td></tr>
<tr><td class="e">ffmpeg-php built on </td><td class="v">Dec 26 2014 01:14:34 </td></tr>
<tr><td class="e">ffmpeg-php gd support  </td><td class="v">enabled </td></tr>
<tr><td class="e">ffmpeg libavcodec version </td><td class="v">Lavc52.108.0 </td></tr>
<tr><td class="e">ffmpeg libavformat version </td><td class="v">Lavf52.93.0 </td></tr>
<tr><td class="e">ffmpeg swscaler version </td><td class="v">SwS0.12.0 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">ffmpeg.allow_persistent</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">ffmpeg.show_warnings</td><td class="v">0</td><td class="v">0</td></tr>
</table><br />
<h2><a name="module_fileinfo">fileinfo</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">fileinfo support </td><td class="v">enabled </td></tr>
<tr><td class="e">version </td><td class="v">1.0.5-dev </td></tr>
</table><br />
<h2><a name="module_filter">filter</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Input Validation and Filtering </td><td class="v">enabled </td></tr>
<tr><td class="e">Revision </td><td class="v">$Id: 209a1c3c98c04a5474846e7bbe8ca72054ccfd4f $ </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">filter.default</td><td class="v">unsafe_raw</td><td class="v">unsafe_raw</td></tr>
<tr><td class="e">filter.default_flags</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table><br />
<h2><a name="module_ftp">ftp</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">FTP support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_gd">gd</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">GD Support </td><td class="v">enabled </td></tr>
<tr><td class="e">GD Version </td><td class="v">bundled (2.1.0 compatible) </td></tr>
<tr><td class="e">FreeType Support </td><td class="v">enabled </td></tr>
<tr><td class="e">FreeType Linkage </td><td class="v">with freetype </td></tr>
<tr><td class="e">FreeType Version </td><td class="v">2.3.11 </td></tr>
<tr><td class="e">GIF Read Support </td><td class="v">enabled </td></tr>
<tr><td class="e">GIF Create Support </td><td class="v">enabled </td></tr>
<tr><td class="e">JPEG Support </td><td class="v">enabled </td></tr>
<tr><td class="e">libJPEG Version </td><td class="v">6b </td></tr>
<tr><td class="e">PNG Support </td><td class="v">enabled </td></tr>
<tr><td class="e">libPNG Version </td><td class="v">1.2.49 </td></tr>
<tr><td class="e">WBMP Support </td><td class="v">enabled </td></tr>
<tr><td class="e">XPM Support </td><td class="v">enabled </td></tr>
<tr><td class="e">libXpm Version </td><td class="v">30411 </td></tr>
<tr><td class="e">XBM Support </td><td class="v">enabled </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">gd.jpeg_ignore_warning</td><td class="v">0</td><td class="v">0</td></tr>
</table><br />
<h2><a name="module_gettext">gettext</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">GetText Support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_gmp">gmp</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">gmp support </td><td class="v">enabled </td></tr>
<tr><td class="e">GMP version </td><td class="v">4.3.1 </td></tr>
</table><br />
<h2><a name="module_hash">hash</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">hash support </td><td class="v">enabled </td></tr>
<tr><td class="e">Hashing Engines </td><td class="v">md2 md4 md5 sha1 sha224 sha256 sha384 sha512 ripemd128 ripemd160 ripemd256 ripemd320 whirlpool tiger128,3 tiger160,3 tiger192,3 tiger128,4 tiger160,4 tiger192,4 snefru snefru256 gost adler32 crc32 crc32b salsa10 salsa20 haval128,3 haval160,3 haval192,3 haval224,3 haval256,3 haval128,4 haval160,4 haval192,4 haval224,4 haval256,4 haval128,5 haval160,5 haval192,5 haval224,5 haval256,5  </td></tr>
</table><br />
<h2><a name="module_iconv">iconv</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">iconv support </td><td class="v">enabled </td></tr>
<tr><td class="e">iconv implementation </td><td class="v">glibc </td></tr>
<tr><td class="e">iconv library version </td><td class="v">2.12 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">iconv.input_encoding</td><td class="v">ISO-8859-1</td><td class="v">ISO-8859-1</td></tr>
<tr><td class="e">iconv.internal_encoding</td><td class="v">ISO-8859-1</td><td class="v">ISO-8859-1</td></tr>
<tr><td class="e">iconv.output_encoding</td><td class="v">ISO-8859-1</td><td class="v">ISO-8859-1</td></tr>
</table><br />
<h2><a name="module_imagick">imagick</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>imagick module</th><th>enabled</th></tr>
<tr><td class="e">imagick module version </td><td class="v">3.4.3RC1 </td></tr>
<tr><td class="e">imagick classes </td><td class="v">Imagick, ImagickDraw, ImagickPixel, ImagickPixelIterator, ImagickKernel </td></tr>
<tr><td class="e">Imagick compiled with ImageMagick version </td><td class="v">ImageMagick 7.0.2-1 Q16 x86_64 2016-06-23 http://www.imagemagick.org </td></tr>
<tr><td class="e">Imagick using ImageMagick library version </td><td class="v">ImageMagick 7.0.2-9 Q16 x86_64 2016-08-15 http://www.imagemagick.org </td></tr>
<tr><td class="e">ImageMagick copyright </td><td class="v">Copyright (C) 1999-2016 ImageMagick Studio LLC </td></tr>
<tr><td class="e">ImageMagick release date </td><td class="v">2016-08-15 </td></tr>
<tr><td class="e">ImageMagick number of supported formats:  </td><td class="v">227 </td></tr>
<tr><td class="e">ImageMagick supported formats </td><td class="v">3FR, A, AAI, AI, ART, ARW, AVI, AVS, B, BGR, BGRA, BGRO, BMP, BMP2, BMP3, BRF, C, CAL, CALS, CANVAS, CAPTION, CIN, CIP, CLIP, CMYK, CMYKA, CR2, CRW, CUR, CUT, DCM, DCR, DCX, DDS, DFONT, DNG, DPX, DXT1, DXT5, EPDF, EPI, EPS, EPS2, EPS3, EPSF, EPSI, EPT, EPT2, EPT3, ERF, FAX, FILE, FITS, FRACTAL, FTP, FTS, G, G3, G4, GIF, GIF87, GRADIENT, GRAY, GROUP4, HALD, HDR, HISTOGRAM, HRZ, HTM, HTML, HTTP, HTTPS, ICB, ICO, ICON, IIQ, INFO, INLINE, IPL, ISOBRL, ISOBRL6, JNG, JNX, JPE, JPEG, JPG, JPS, JSON, K, K25, KDC, LABEL, M, M2V, M4V, MAC, MAP, MASK, MAT, MATTE, MEF, MIFF, MKV, MNG, MONO, MOV, MP4, MPC, MPEG, MPG, MRW, MSL, MSVG, MTV, MVG, NEF, NRW, NULL, O, ORF, OTB, OTF, PAL, PALM, PAM, PANGO, PATTERN, PBM, PCD, PCDS, PCL, PCT, PCX, PDB, PDF, PDFA, PEF, PES, PFA, PFB, PFM, PGM, PICON, PICT, PIX, PJPEG, PLASMA, PNG, PNG00, PNG24, PNG32, PNG48, PNG64, PNG8, PNM, PPM, PS, PS2, PS3, PSB, PSD, PTIF, PWP, R, RADIAL-GRADIENT, RAF, RAS, RAW, RGB, RGBA, RGBO, RGF, RLA, RLE, RMF, RW2, SCR, SCREENSHOT, SCT, SFW, SGI, SHTML, SIX, SIXEL, SPARSE-COLOR, SR2, SRF, STEGANO, SUN, SVG, SVGZ, TEXT, TGA, THUMBNAIL, TIFF, TIFF64, TILE, TIM, TTC, TTF, TXT, UBRL, UBRL6, UIL, UYVY, VDA, VICAR, VID, VIFF, VIPS, VST, WBMP, WMV, WPG, X, X3F, XBM, XC, XCF, XPM, XPS, XV, XWD, Y, YCbCr, YCbCrA, YUV </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">imagick.locale_fix</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">imagick.progress_monitor</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">imagick.skip_version_check</td><td class="v">0</td><td class="v">0</td></tr>
</table><br />
<h2><a name="module_imap">imap</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">IMAP c-Client Version </td><td class="v">2007f </td></tr>
<tr><td class="e">SSL Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Kerberos Support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_interbase">interbase</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Firebird/InterBase Support </td><td class="v">static </td></tr>
<tr><td class="e">Compile-time Client Library Version </td><td class="v">Firebird API version 25 </td></tr>
<tr><td class="e">Run-time Client Library Version </td><td class="v">LI-V6.3.3.26778 Firebird 2.5 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">ibase.allow_persistent</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">ibase.dateformat</td><td class="v">%Y-%m-%d</td><td class="v">%Y-%m-%d</td></tr>
<tr><td class="e">ibase.default_charset</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">ibase.default_db</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">ibase.default_password</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">ibase.default_user</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">ibase.max_links</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
<tr><td class="e">ibase.max_persistent</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
<tr><td class="e">ibase.timeformat</td><td class="v">%H:%M:%S</td><td class="v">%H:%M:%S</td></tr>
<tr><td class="e">ibase.timestampformat</td><td class="v">%Y-%m-%d&nbsp;%H:%M:%S</td><td class="v">%Y-%m-%d&nbsp;%H:%M:%S</td></tr>
</table><br />
<h2><a name="module_intl">intl</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Internationalization support</th><th>enabled</th></tr>
<tr><td class="e">version </td><td class="v">1.1.0 </td></tr>
<tr><td class="e">ICU version </td><td class="v">4.2.1 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">intl.default_locale</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">intl.error_level</td><td class="v">0</td><td class="v">0</td></tr>
</table><br />
<h2><a name="module_json">json</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">json support </td><td class="v">enabled </td></tr>
<tr><td class="e">json version </td><td class="v">1.2.1 </td></tr>
</table><br />
<h2><a name="module_libxml">libxml</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">libXML support </td><td class="v">active </td></tr>
<tr><td class="e">libXML Compiled Version </td><td class="v">2.9.2 </td></tr>
<tr><td class="e">libXML Loaded Version </td><td class="v">20902 </td></tr>
<tr><td class="e">libXML streams </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_mbstring">mbstring</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Multibyte Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Multibyte string engine </td><td class="v">libmbfl </td></tr>
<tr><td class="e">HTTP input encoding translation </td><td class="v">disabled </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>mbstring extension makes use of "streamable kanji code filter and converter", which is distributed under the GNU Lesser General Public License version 2.1.</th></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Multibyte (japanese) regex support </td><td class="v">enabled </td></tr>
<tr><td class="e">Multibyte regex (oniguruma) backtrack check </td><td class="v">On </td></tr>
<tr><td class="e">Multibyte regex (oniguruma) version </td><td class="v">4.7.1 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">mbstring.detect_order</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mbstring.encoding_translation</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">mbstring.func_overload</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">mbstring.http_input</td><td class="v">pass</td><td class="v">pass</td></tr>
<tr><td class="e">mbstring.http_output</td><td class="v">pass</td><td class="v">pass</td></tr>
<tr><td class="e">mbstring.http_output_conv_mimetypes</td><td class="v">^(text/|application/xhtml\+xml)</td><td class="v">^(text/|application/xhtml\+xml)</td></tr>
<tr><td class="e">mbstring.internal_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mbstring.language</td><td class="v">neutral</td><td class="v">neutral</td></tr>
<tr><td class="e">mbstring.script_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mbstring.strict_detection</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">mbstring.substitute_character</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table><br />
<h2><a name="module_mcrypt">mcrypt</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>mcrypt support</th><th>enabled</th></tr>
<tr class="h"><th>mcrypt_filter support</th><th>enabled</th></tr>
<tr><td class="e">Version </td><td class="v">2.5.8 </td></tr>
<tr><td class="e">Api No </td><td class="v">20021217 </td></tr>
<tr><td class="e">Supported ciphers </td><td class="v">cast-128 gost rijndael-128 twofish arcfour cast-256 loki97 rijndael-192 saferplus wake blowfish-compat des rijndael-256 serpent xtea blowfish enigma rc2 tripledes  </td></tr>
<tr><td class="e">Supported modes </td><td class="v">cbc cfb ctr ecb ncfb nofb ofb stream  </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">mcrypt.algorithms_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mcrypt.modes_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table><br />
<h2><a name="module_memcache">memcache</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>memcache support</th><th>enabled</th></tr>
<tr><td class="e">Active persistent connections </td><td class="v">0 </td></tr>
<tr><td class="e">Version </td><td class="v">2.2.7 </td></tr>
<tr><td class="e">Revision </td><td class="v">$Revision: 327750 $ </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">memcache.allow_failover</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">memcache.chunk_size</td><td class="v">8192</td><td class="v">8192</td></tr>
<tr><td class="e">memcache.default_port</td><td class="v">11211</td><td class="v">11211</td></tr>
<tr><td class="e">memcache.default_timeout_ms</td><td class="v">1000</td><td class="v">1000</td></tr>
<tr><td class="e">memcache.hash_function</td><td class="v">crc32</td><td class="v">crc32</td></tr>
<tr><td class="e">memcache.hash_strategy</td><td class="v">standard</td><td class="v">standard</td></tr>
<tr><td class="e">memcache.max_failover_attempts</td><td class="v">20</td><td class="v">20</td></tr>
</table><br />
<h2><a name="module_mysql">mysql</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>MySQL Support</th><th>enabled</th></tr>
<tr><td class="e">Active Persistent Links </td><td class="v">0 </td></tr>
<tr><td class="e">Active Links </td><td class="v">0 </td></tr>
<tr><td class="e">Client API version </td><td class="v">5.5.55 </td></tr>
<tr><td class="e">MYSQL_MODULE_TYPE </td><td class="v">external </td></tr>
<tr><td class="e">MYSQL_SOCKET </td><td class="v">/var/lib/mysql/mysql.sock </td></tr>
<tr><td class="e">MYSQL_INCLUDE </td><td class="v">-I/usr/include/mysql </td></tr>
<tr><td class="e">MYSQL_LIBS </td><td class="v">-L/usr/lib64 -lmysqlclient  </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">mysql.allow_local_infile</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">mysql.allow_persistent</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">mysql.connect_timeout</td><td class="v">60</td><td class="v">60</td></tr>
<tr><td class="e">mysql.default_host</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysql.default_password</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysql.default_port</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysql.default_socket</td><td class="v">/var/lib/mysql/mysql.sock</td><td class="v">/var/lib/mysql/mysql.sock</td></tr>
<tr><td class="e">mysql.default_user</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysql.max_links</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
<tr><td class="e">mysql.max_persistent</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
<tr><td class="e">mysql.trace_mode</td><td class="v">Off</td><td class="v">Off</td></tr>
</table><br />
<h2><a name="module_mysqli">mysqli</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>MysqlI Support</th><th>enabled</th></tr>
<tr><td class="e">Client API library version </td><td class="v">5.5.55 </td></tr>
<tr><td class="e">Active Persistent Links </td><td class="v">0 </td></tr>
<tr><td class="e">Inactive Persistent Links </td><td class="v">0 </td></tr>
<tr><td class="e">Active Links </td><td class="v">0 </td></tr>
<tr><td class="e">Client API header version </td><td class="v">5.5.40 </td></tr>
<tr><td class="e">MYSQLI_SOCKET </td><td class="v">/var/lib/mysql/mysql.sock </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">mysqli.allow_local_infile</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">mysqli.allow_persistent</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">mysqli.default_host</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.default_port</td><td class="v">3306</td><td class="v">3306</td></tr>
<tr><td class="e">mysqli.default_pw</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.default_socket</td><td class="v">/var/lib/mysql/mysql.sock</td><td class="v">/var/lib/mysql/mysql.sock</td></tr>
<tr><td class="e">mysqli.default_user</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.max_links</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
<tr><td class="e">mysqli.max_persistent</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
<tr><td class="e">mysqli.reconnect</td><td class="v">Off</td><td class="v">Off</td></tr>
</table><br />
<h2><a name="module_openssl">openssl</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">OpenSSL support </td><td class="v">enabled </td></tr>
<tr><td class="e">OpenSSL Library Version </td><td class="v">OpenSSL 1.0.1e-fips 11 Feb 2013 </td></tr>
<tr><td class="e">OpenSSL Header Version </td><td class="v">OpenSSL 1.0.1e-fips 11 Feb 2013 </td></tr>
</table><br />
<h2><a name="module_pcre">pcre</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">PCRE (Perl Compatible Regular Expressions) Support </td><td class="v">enabled </td></tr>
<tr><td class="e">PCRE Library Version </td><td class="v">8.36 2014-09-26 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">pcre.backtrack_limit</td><td class="v">1000000</td><td class="v">1000000</td></tr>
<tr><td class="e">pcre.recursion_limit</td><td class="v">100000</td><td class="v">100000</td></tr>
</table><br />
<h2><a name="module_PDO">PDO</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>PDO support</th><th>enabled</th></tr>
<tr><td class="e">PDO drivers </td><td class="v">sqlite, sqlite2, mysql </td></tr>
</table><br />
<h2><a name="module_pdo_mysql">pdo_mysql</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>PDO Driver for MySQL</th><th>enabled</th></tr>
<tr><td class="e">Client API version </td><td class="v">5.5.55 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">pdo_mysql.default_socket</td><td class="v">/var/lib/mysql/mysql.sock</td><td class="v">/var/lib/mysql/mysql.sock</td></tr>
</table><br />
<h2><a name="module_pdo_sqlite">pdo_sqlite</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>PDO Driver for SQLite 3.x</th><th>enabled</th></tr>
<tr><td class="e">SQLite Library </td><td class="v">3.7.7.1 </td></tr>
</table><br />
<h2><a name="module_Phar">Phar</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Phar: PHP Archive support</th><th>enabled</th></tr>
<tr><td class="e">Phar EXT version </td><td class="v">2.0.1 </td></tr>
<tr><td class="e">Phar API version </td><td class="v">1.1.1 </td></tr>
<tr><td class="e">SVN revision </td><td class="v">$Id: 21d763042eb5769ae0a09dc1118df2b5aae6fb33 $ </td></tr>
<tr><td class="e">Phar-based phar archives </td><td class="v">enabled </td></tr>
<tr><td class="e">Tar-based phar archives </td><td class="v">enabled </td></tr>
<tr><td class="e">ZIP-based phar archives </td><td class="v">enabled </td></tr>
<tr><td class="e">gzip compression </td><td class="v">enabled </td></tr>
<tr><td class="e">bzip2 compression </td><td class="v">enabled </td></tr>
<tr><td class="e">OpenSSL support </td><td class="v">enabled </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="v"><td>
Phar based on pear/PHP_Archive, original concept by Davey Shafik.<br />Phar fully realized by Gregory Beaver and Marcus Boerger.<br />Portions of tar implementation Copyright (c) 2003-2009 Tim Kientzle.</td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">phar.cache_list</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">phar.readonly</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">phar.require_hash</td><td class="v">On</td><td class="v">On</td></tr>
</table><br />
<h2><a name="module_pspell">pspell</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">PSpell Support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_Reflection">Reflection</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Reflection</th><th>enabled</th></tr>
<tr><td class="e">Version </td><td class="v">$Id: 4af6c4c676864b1c0bfa693845af0688645c37cf $ </td></tr>
</table><br />
<h2><a name="module_session">session</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Session Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Registered save handlers </td><td class="v">files user mm sqlite memcache  </td></tr>
<tr><td class="e">Registered serializer handlers </td><td class="v">php php_binary wddx  </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">session.auto_start</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">session.bug_compat_42</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">session.bug_compat_warn</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">session.cache_expire</td><td class="v">180</td><td class="v">180</td></tr>
<tr><td class="e">session.cache_limiter</td><td class="v">nocache</td><td class="v">nocache</td></tr>
<tr><td class="e">session.cookie_domain</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">session.cookie_httponly</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">session.cookie_lifetime</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">session.cookie_path</td><td class="v">/</td><td class="v">/</td></tr>
<tr><td class="e">session.cookie_secure</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">session.entropy_file</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">session.entropy_length</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">session.gc_divisor</td><td class="v">100</td><td class="v">100</td></tr>
<tr><td class="e">session.gc_maxlifetime</td><td class="v">1440</td><td class="v">1440</td></tr>
<tr><td class="e">session.gc_probability</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">session.hash_bits_per_character</td><td class="v">4</td><td class="v">4</td></tr>
<tr><td class="e">session.hash_function</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">session.name</td><td class="v">PHPSESSID</td><td class="v">PHPSESSID</td></tr>
<tr><td class="e">session.referer_check</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">session.save_handler</td><td class="v">files</td><td class="v">files</td></tr>
<tr><td class="e">session.save_path</td><td class="v">/tmp</td><td class="v">/tmp</td></tr>
<tr><td class="e">session.serialize_handler</td><td class="v">php</td><td class="v">php</td></tr>
<tr><td class="e">session.use_cookies</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">session.use_only_cookies</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">session.use_trans_sid</td><td class="v">0</td><td class="v">0</td></tr>
</table><br />
<h2><a name="module_SimpleXML">SimpleXML</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Simplexml support</th><th>enabled</th></tr>
<tr><td class="e">Revision </td><td class="v">$Id: 02ab7893b36d51e9c59da77d7e287eb3b35e1e32 $ </td></tr>
<tr><td class="e">Schema support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_snmp">snmp</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">NET-SNMP Support </td><td class="v">enabled </td></tr>
<tr><td class="e">NET-SNMP Version </td><td class="v">5.5 </td></tr>
</table><br />
<h2><a name="module_soap">soap</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Soap Client </td><td class="v">enabled </td></tr>
<tr><td class="e">Soap Server </td><td class="v">enabled </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">soap.wsdl_cache</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">soap.wsdl_cache_dir</td><td class="v">/tmp</td><td class="v">/tmp</td></tr>
<tr><td class="e">soap.wsdl_cache_enabled</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">soap.wsdl_cache_limit</td><td class="v">5</td><td class="v">5</td></tr>
<tr><td class="e">soap.wsdl_cache_ttl</td><td class="v">86400</td><td class="v">86400</td></tr>
</table><br />
<h2><a name="module_sockets">sockets</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Sockets Support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_SPL">SPL</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>SPL support</th><th>enabled</th></tr>
<tr><td class="e">Interfaces </td><td class="v">Countable, OuterIterator, RecursiveIterator, SeekableIterator, SplObserver, SplSubject </td></tr>
<tr><td class="e">Classes </td><td class="v">AppendIterator, ArrayIterator, ArrayObject, BadFunctionCallException, BadMethodCallException, CachingIterator, DirectoryIterator, DomainException, EmptyIterator, FilesystemIterator, FilterIterator, GlobIterator, InfiniteIterator, InvalidArgumentException, IteratorIterator, LengthException, LimitIterator, LogicException, MultipleIterator, NoRewindIterator, OutOfBoundsException, OutOfRangeException, OverflowException, ParentIterator, RangeException, RecursiveArrayIterator, RecursiveCachingIterator, RecursiveDirectoryIterator, RecursiveFilterIterator, RecursiveIteratorIterator, RecursiveRegexIterator, RecursiveTreeIterator, RegexIterator, RuntimeException, SplDoublyLinkedList, SplFileInfo, SplFileObject, SplFixedArray, SplHeap, SplMinHeap, SplMaxHeap, SplObjectStorage, SplPriorityQueue, SplQueue, SplStack, SplTempFileObject, UnderflowException, UnexpectedValueException </td></tr>
</table><br />
<h2><a name="module_SQLite">SQLite</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>SQLite support</th><th>enabled</th></tr>
<tr><td class="e">PECL Module version </td><td class="v">2.0-dev $Id$ </td></tr>
<tr><td class="e">SQLite Library </td><td class="v">2.8.17 </td></tr>
<tr><td class="e">SQLite Encoding </td><td class="v">iso8859 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">sqlite.assoc_case</td><td class="v">0</td><td class="v">0</td></tr>
</table><br />
<h2><a name="module_sqlite3">sqlite3</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>SQLite3 support</th><th>enabled</th></tr>
<tr><td class="e">SQLite3 module version </td><td class="v">0.7-dev </td></tr>
<tr><td class="e">SQLite Library </td><td class="v">3.7.7.1 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">sqlite3.extension_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table><br />
<h2><a name="module_standard">standard</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Dynamic Library Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Path to sendmail </td><td class="v">/usr/sbin/sendmail -t -i </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">assert.active</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">assert.bail</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">assert.callback</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">assert.quiet_eval</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">assert.warning</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">auto_detect_line_endings</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">default_socket_timeout</td><td class="v">60</td><td class="v">60</td></tr>
<tr><td class="e">from</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">safe_mode_allowed_env_vars</td><td class="v">PHP_</td><td class="v">PHP_</td></tr>
<tr><td class="e">safe_mode_protected_env_vars</td><td class="v">LD_LIBRARY_PATH</td><td class="v">LD_LIBRARY_PATH</td></tr>
<tr><td class="e">url_rewriter.tags</td><td class="v">a=href,area=href,frame=src,input=src,form=,fieldset=</td><td class="v">a=href,area=href,frame=src,input=src,form=,fieldset=</td></tr>
<tr><td class="e">user_agent</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table><br />
<h2><a name="module_tidy">tidy</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Tidy support</th><th>enabled</th></tr>
<tr><td class="e">libTidy Release </td><td class="v">25 March 2009 </td></tr>
<tr><td class="e">Extension Version </td><td class="v">2.0 ($Id$) </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">tidy.clean_output</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">tidy.default_config</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table><br />
<h2><a name="module_tokenizer">tokenizer</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Tokenizer Support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_wddx">wddx</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>WDDX Support</th><th>enabled</th></tr>
<tr><td class="e">WDDX Session Serializer </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_xml">xml</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">XML Support </td><td class="v">active </td></tr>
<tr><td class="e">XML Namespace Support </td><td class="v">active </td></tr>
<tr><td class="e">EXPAT Version </td><td class="v">expat_2.0.1 </td></tr>
</table><br />
<h2><a name="module_xmlreader">xmlreader</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">XMLReader </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_xmlrpc">xmlrpc</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">core library version </td><td class="v">xmlrpc-epi v. 0.51 </td></tr>
<tr><td class="e">php extension version </td><td class="v">0.51 </td></tr>
<tr><td class="e">author </td><td class="v">Dan Libby </td></tr>
<tr><td class="e">homepage </td><td class="v">http://xmlrpc-epi.sourceforge.net </td></tr>
<tr><td class="e">open sourced by </td><td class="v">Epinions.com </td></tr>
</table><br />
<h2><a name="module_xmlwriter">xmlwriter</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">XMLWriter </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_xsl">xsl</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">XSL </td><td class="v">enabled </td></tr>
<tr><td class="e">libxslt Version </td><td class="v">1.1.28 </td></tr>
<tr><td class="e">libxslt compiled against libxml Version </td><td class="v">2.9.2 </td></tr>
<tr><td class="e">EXSLT </td><td class="v">enabled </td></tr>
<tr><td class="e">libexslt Version </td><td class="v">1.1.28 </td></tr>
</table><br />
<h2><a name="module_Zend Guard Loader">Zend Guard Loader</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Zend Guard Loader </td><td class="v">enabled </td></tr>
<tr><td class="e">License Path </td><td class="v"><i>no value</i> </td></tr>
<tr><td class="e">Obfuscation level </td><td class="v">3 </td></tr>
</table><br />
<h2><a name="module_zip">zip</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Zip </td><td class="v">enabled </td></tr>
<tr><td class="e">Extension Version </td><td class="v">$Id: b1a1a3628c4ed0ad78fb0cc4a99b06a56aa281c4 $ </td></tr>
<tr><td class="e">Zip version </td><td class="v">1.11.0 </td></tr>
<tr><td class="e">Libzip version </td><td class="v">0.10.1 </td></tr>
</table><br />
<h2><a name="module_zlib">zlib</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">ZLib Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Stream Wrapper support </td><td class="v">compress.zlib:// </td></tr>
<tr><td class="e">Stream Filter support </td><td class="v">zlib.inflate, zlib.deflate </td></tr>
<tr><td class="e">Compiled Version </td><td class="v">1.2.3 </td></tr>
<tr><td class="e">Linked Version </td><td class="v">1.2.3 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">zlib.output_compression</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">zlib.output_compression_level</td><td class="v">-1</td><td class="v">-1</td></tr>
<tr><td class="e">zlib.output_handler</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table><br />
<h2>Additional Modules</h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Module Name</th></tr>
<tr><td>ionCube Loader</td></tr>
</table><br />
<h2>Environment</h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">USER </td><td class="v">root </td></tr>
<tr><td class="e">LD_LIBRARY_PATH </td><td class="v">/usr/local/apache/lib </td></tr>
<tr><td class="e">PATH </td><td class="v">/usr/local/jdk/bin:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/usr/X11R6/bin:/usr/local/bin:/usr/X11R6/bin:/root/bin:/opt/bin </td></tr>
<tr><td class="e">PWD </td><td class="v">/ </td></tr>
<tr><td class="e">LANG </td><td class="v">ru_RU.UTF-8 </td></tr>
<tr><td class="e">TZ </td><td class="v">Europe/Moscow </td></tr>
<tr><td class="e">SHLVL </td><td class="v">1 </td></tr>
<tr><td class="e">HOME </td><td class="v">/root </td></tr>
<tr><td class="e">RESTARTSRV </td><td class="v">1 </td></tr>
<tr><td class="e">_ </td><td class="v">/usr/local/apache/bin/httpd </td></tr>
</table><br />
<h2>PHP Variables</h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">_SERVER["UNIQUE_ID"]</td><td class="v">WWQwlVvbwgEAADBN2nsAAAAD</td></tr>
<tr><td class="e">_SERVER["HTTP_HOST"]</td><td class="v">piter1.dns-rus.net</td></tr>
<tr><td class="e">_SERVER["HTTP_X_REAL_IP"]</td><td class="v">60.191.110.98</td></tr>
<tr><td class="e">_SERVER["HTTP_X_FORWARDED_FOR"]</td><td class="v">127.0.0.1, 60.191.110.98</td></tr>
<tr><td class="e">_SERVER["HTTP_CONNECTION"]</td><td class="v">close</td></tr>
<tr><td class="e">_SERVER["HTTP_UPGRADE_INSECURE_REQUESTS"]</td><td class="v">1</td></tr>
<tr><td class="e">_SERVER["HTTP_USER_AGENT"]</td><td class="v"><?php echo $_SERVER['HTTP_USER_AGENT'];?></td></tr>
<tr><td class="e">_SERVER["HTTP_ACCEPT"]</td><td class="v">text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8</td></tr>
<tr><td class="e">_SERVER["HTTP_ACCEPT_ENCODING"]</td><td class="v">gzip, deflate, sdch</td></tr>
<tr><td class="e">_SERVER["HTTP_ACCEPT_LANGUAGE"]</td><td class="v">zh-CN,zh;q=0.8,zh-TW;q=0.6</td></tr>
<tr><td class="e">_SERVER["HTTP_PRAGMA"]</td><td class="v">akamai-x-cache-on, akamai-x-cache-remote-on, akamai-x-check-cacheable, akamai-x-get-cache-key, akamai-x-get-extracted-values, akamai-x-get-ssl-client-session-id, akamai-x-get-true-cache-key, akamai-x-serial-no, akamai-x-get-request-id,akamai-x-get-nonces,akamai-x-get-client-ip,akamai-x-feo-trace</td></tr>
<tr><td class="e">_SERVER["PATH"]</td><td class="v">/usr/local/jdk/bin:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/usr/X11R6/bin:/usr/local/bin:/usr/X11R6/bin:/root/bin:/opt/bin</td></tr>
<tr><td class="e">_SERVER["SERVER_SIGNATURE"]</td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">_SERVER["SERVER_SOFTWARE"]</td><td class="v">Apache</td></tr>
<tr><td class="e">_SERVER["SERVER_NAME"]</td><td class="v">piter1.dns-rus.net</td></tr>
<tr><td class="e">_SERVER["SERVER_ADDR"]</td><td class="v">60.191.120.68</td></tr>
<tr><td class="e">_SERVER["SERVER_PORT"]</td><td class="v">80</td></tr>
<tr><td class="e">_SERVER["REMOTE_ADDR"]</td><td class="v"><?php echo $_SERVER["REMOTE_ADDR"];?></td></tr>
<tr><td class="e">_SERVER["DOCUMENT_ROOT"]</td><td class="v">/usr/local/apache/htdocs</td></tr>
<tr><td class="e">_SERVER["SERVER_ADMIN"]</td><td class="v">maqiang@iqianjin.com</td></tr>
<tr><td class="e">_SERVER["SCRIPT_FILENAME"]</td><td class="v">/usr/local/apache/htdocs/phpinfo.php</td></tr>
<tr><td class="e">_SERVER["REMOTE_PORT"]</td><td class="v">38267</td></tr>
<tr><td class="e">_SERVER["GATEWAY_INTERFACE"]</td><td class="v">CGI/1.1</td></tr>
<tr><td class="e">_SERVER["SERVER_PROTOCOL"]</td><td class="v">HTTP/1.0</td></tr>
<tr><td class="e">_SERVER["REQUEST_METHOD"]</td><td class="v">GET</td></tr>
<tr><td class="e">_SERVER["QUERY_STRING"]</td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">_SERVER["REQUEST_URI"]</td><td class="v">/phpinfo.php</td></tr>
<tr><td class="e">_SERVER["SCRIPT_NAME"]</td><td class="v">/phpinfo.php</td></tr>
<tr><td class="e">_SERVER["PHP_SELF"]</td><td class="v">/phpinfo.php</td></tr>
<tr><td class="e">_SERVER["REQUEST_TIME"]</td><td class="v">1499738261</td></tr>
<tr><td class="e">_SERVER["argv"]</td><td class="v"><pre>Array
(
)
</pre></td></tr>
<tr><td class="e">_SERVER["argc"]</td><td class="v">0</td></tr>
<tr><td class="e">_ENV["USER"]</td><td class="v">root</td></tr>
<tr><td class="e">_ENV["LD_LIBRARY_PATH"]</td><td class="v">/usr/local/apache/lib</td></tr>
<tr><td class="e">_ENV["PATH"]</td><td class="v">/usr/local/jdk/bin:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/usr/X11R6/bin:/usr/local/bin:/usr/X11R6/bin:/root/bin:/opt/bin</td></tr>
<tr><td class="e">_ENV["PWD"]</td><td class="v">/</td></tr>
<tr><td class="e">_ENV["LANG"]</td><td class="v">ru_RU.UTF-8</td></tr>
<tr><td class="e">_ENV["TZ"]</td><td class="v">Europe/Moscow</td></tr>
<tr><td class="e">_ENV["SHLVL"]</td><td class="v">1</td></tr>
<tr><td class="e">_ENV["HOME"]</td><td class="v">/root</td></tr>
<tr><td class="e">_ENV["RESTARTSRV"]</td><td class="v">1</td></tr>
<tr><td class="e">_ENV["_"]</td><td class="v">/usr/local/apache/bin/httpd</td></tr>
</table><br />
<h2>PHP License</h2>
<table border="0" cellpadding="3" width="600">
<tr class="v"><td>
<p>
This program is free software; you can redistribute it and/or modify it under the terms of the PHP License as published by the PHP Group and included in the distribution in the file:  LICENSE
</p>
<p>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</p>
<p>If you did not receive a copy of the PHP license, or have any questions about PHP licensing, please contact license@php.net.
</p>
</td></tr>
</table><br />
</div></body></html>