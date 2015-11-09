<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //


/*ONLINE*/
//if ($_SERVER['REMOTE_ADDR'] == '177.133.255.58') { 

	define('DB_NAME', 'nucleos15');
	define('DB_USER', 'nucleos15');
	define('DB_PASSWORD', 'Coelho@99');
	define('DB_HOST', '179.188.16.70');
//} 
//else { 
//	define('DB_NAME', 'nucleos13');
//	define('DB_USER', 'nucleos13');
//	define('DB_PASSWORD', 'Coelho@99');
//	define('DB_HOST', '179.188.16.44');
//} 
/*LOCAL*/
/*
define('DB_NAME', 'data_nucleos');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
*/

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_6&)B2|7 Yb)={c9L4XQ19vf.U{;3HO|sqcJy3tDzahUy(X3KZOx~aUlhM(3sAY-');
define('SECURE_AUTH_KEY',  '!}`:l SGf^rE nb>BpUd-`]wit_vJBKTv#u2b^3-[Oz(13lc62 UBxNr9<ORX1&8');
define('LOGGED_IN_KEY',    'BC2#|-,us^xpKcky8>Rb jj/|u<2{K`?49kJ[HC+B;-la|x?}_c%Z-1U&|L@t71Y');
define('NONCE_KEY',        'N0Fx&2D+2%$B|{)+ (;P1vosmE.x+{vWjyzI_G3T$E+*$*^_M#m)deOeehl{]W;3');
define('AUTH_SALT',        '+sGDy__Fq_6Z;SK_Ah>p7|VpdBn<3l6KW8weac^^K<Lr+6Xe-7FW,*CfyBhRQ2wK');
define('SECURE_AUTH_SALT', '0(OILQFu+bLed6]Z6]lEV7[%914XeHsGo7tGs|a^Z=Iz{q&]k*[Leh/]^t]rmAik');
define('LOGGED_IN_SALT',   'UeiyAj,!:+Z^l/*= 7_/9xuSd<v RHZL=iJh_GhD0Z%6n_x%b&i[v?VK8t+T,f [');
define('NONCE_SALT',       '@oFke=FBph1s59pFh|M|x.f{ZKf|e#ifJp-JD=b+IfOp~?1=74YhAw+;q|nt39E:');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
