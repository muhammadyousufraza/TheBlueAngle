<?php
# Database Configuration
define( 'DB_NAME', 'wp_blueangle' );
define( 'DB_USER', 'blueangle' );
define( 'DB_PASSWORD', 'CB4gyYkT4CjgShJO_B-U' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '}A-!J;RTjUwh;tU%xN4gkV4 |>/p85,Zr>NL:rNDXW^nCDv)1v%kPhNSp<2CMjF<');
define('SECURE_AUTH_KEY',  '}.f-){9~i(*hN<wVgHGwBU|nw+*Om#eO3ly1m?#OD@Ygw~zKr!}DE(.~*e/hY?(v');
define('LOGGED_IN_KEY',    'e-(8,EzmMQbXSt-Yacc!97Rc</+IGC|)S{O]$G=R5 /Pe4D5!wOg{K6ItHnT_3P&');
define('NONCE_KEY',        'AvsrR }A2?+nm)K2 ;UcW;bfK]CI;#ttQEOvV`]JFaxNEw%~3_*YV%ekhw$}}_#d');
define('AUTH_SALT',        'RiU(k>SA9{(,tDQ`vO5P%KpGywcL.hw?Z|-,fosg+l5|u>;+-Px;+zQBD3OU`_$W');
define('SECURE_AUTH_SALT', '7fq~D6@ZaW3]Qcm/^1(Pt++t_?QB[Y-U#0~A>XUI}01NJ-ewz-e=bO^&G4mpO|s<');
define('LOGGED_IN_SALT',   ';1p|TC$ 493=hL{Y;kAs9WN eeM8:&8){pNu$+W`r=9fuN!Rn|o.v=ph7X2[l-i@');
define('NONCE_SALT',       '_}TBv#=V,A2$_w#H@gT<?k7RR]b-nu=rS{,Tu^tv!.~|t:a%lc-:IOme4&itt0L$');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'blueangle' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', '347c7ebc1d59c740dc0f4de6cdf02f1987f30f85' );

define( 'WPE_CLUSTER_ID', '141553' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'blueangle.wpengine.com', 1 => 'blueangle.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-141553', );

$wpe_special_ips=array ( 0 => '34.168.243.120', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
