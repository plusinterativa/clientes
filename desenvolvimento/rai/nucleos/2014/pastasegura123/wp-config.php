<?php
//disable updates and install plugins
//define('DISALLOW_FILE_MODS',true);

//disable editing theme and plugins
//define('DISALLOW_FILE_EDIT',true);

//Forcing use of FTP for all uploads, upgrades and plugin installation
//define('FS_METHOD', 'ftpext');

//change content name
define ('WP_CONTENT_FOLDERNAME', 'assets');  
define ('WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME);
//define('WP_SITEURL', 'http://localhost/nucleos_relatorios/wwwroot/');  
define('WP_SITEURL', 'http://plusinterativa.com/desenvolvimento/rai/nucleos/2014/wwwroot');  
define('WP_CONTENT_URL', WP_SITEURL . WP_CONTENT_FOLDERNAME); 

//memory
define('WP_MEMORY_LIMIT', '64M');

//connect
/*
define('DB_NAME', 'data_relatorio_nucleos_2014');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
*/
define('DB_NAME', 'plusonline14');
define('DB_USER', 'plusonline14');
define('DB_PASSWORD', 'Coelho@99');
define('DB_HOST', 'mysql19.plusonline.com.br');



define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

//key
define('AUTH_KEY',         'iut¨$7658896G*&%#$*FUUHY/5/5%Huguf///&%*___ 7768645s ¨#*#¨%#YT6RT&////EUFHGFYFU(YF754.,;~1');
define('SECURE_AUTH_KEY',  'iut¨$7658896G*&%#$*FUUHY/5/5%Huguf///&%*___ 7768645s ¨#*#¨%#YT6RT&////EUFHGFYFU(YF754.,;~1');
define('LOGGED_IN_KEY',    'iut¨$7658896G*&%#$*FUUHY/5/5%Huguf///&%*___ 7768645s ¨#*#¨%#YT6RT&////EUFHGFYFU(YF754.,;~1');
define('NONCE_KEY',        'iut¨$7658896G*&%#$*FUUHY/5/5%Huguf///&%*___ 7768645s ¨#*#¨%#YT6RT&////EUFHGFYFU(YF754.,;~1');
define('AUTH_SALT',        'iut¨$7658896G*&%#$*FUUHY/5/5%Huguf///&%*___ 7768645s ¨#*#¨%#YT6RT&////EUFHGFYFU(YF754.,;~1');
define('SECURE_AUTH_SALT', 'iut¨$7658896G*&%#$*FUUHY/5/5%Huguf///&%*___ 7768645s ¨#*#¨%#YT6RT&////EUFHGFYFU(YF754.,;~1');
define('LOGGED_IN_SALT',   'iut¨$7658896G*&%#$*FUUHY/5/5%Huguf///&%*___ 7768645s ¨#*#¨%#YT6RT&////EUFHGFYFU(YF754.,;~1');
define('NONCE_SALT',       'iut¨$7658896G*&%#$*FUUHY/5/5%Huguf///&%*___ 7768645s ¨#*#¨%#YT6RT&////EUFHGFYFU(YF754.,;~1');

$table_prefix  = 'coelho99_';

define('WP_DEBUG', false);
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
