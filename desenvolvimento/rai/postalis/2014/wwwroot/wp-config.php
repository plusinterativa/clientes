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
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'plusonline23');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'plusonline23');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Coelho@99');

/** nome do host do MySQL */
define('DB_HOST', 'mysql21.plusonline.com.br');

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
define('AUTH_KEY',         ')ATP!hwvoGGpLg-tdartjSqFz2a)<wT^fZld]&h`mJv0~=|aWSY#FbJNg%}FQE`T');
define('SECURE_AUTH_KEY',  'fLqPp~~mm^_Z,}I]zc6Xb#Z!_CBhv]N3&Myo}1v4ZD?;+b-3b&=RcP&dEm92v*e?');
define('LOGGED_IN_KEY',    'VkK9yDE5T#upkHN_nYeBV4J.i-k}teeB[#&J91bHKT5xJJPu-u-2pZY9 a~K>$o{');
define('NONCE_KEY',        ',{Tq-N9rdk3g0~w_9t5&]DQoIA?Z?dD<XN=UC0wCC&Cr;@u4>VEEz;&aa.XiNb,v');
define('AUTH_SALT',        '6L}_R)1cU:$6}.65 E {ZK=.HHq,My{[Z>^|wzl4O/F{K-IwrIvimi>lN80ew+S_');
define('SECURE_AUTH_SALT', ' o$@`K.wk-q{uhFUmEV`5a%&(aXIz4l*(Ni-z{_@J(9qoiJ#3]5<[[(kP$9T}XDe');
define('LOGGED_IN_SALT',   '3O2#:=mac(yBJR{ )k&n)~F+P3._TSJ7|*$U^K{w6K_OG&S<qZ<ZSCqIN[O(r#|X');
define('NONCE_SALT',       't`U4E=M!43)c/]Q?7orD)~A|:7`]h+pwm&? 8@/i1GDI`l8SN2hBIi&1,2XOEB_@');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'outracoisa_';


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
