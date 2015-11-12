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
define('DB_NAME', 'plusonline16');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'plusonline16');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Coelho@99');

/** nome do host do MySQL */
define('DB_HOST', 'mysql16.plusonline.com.br');

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
define('AUTH_KEY',         'yQ{6]ga) bSdCe*|G#AGh3xrgPArz8.;7Mf*(yml4ZXL%#BpLBY%1?+jX-1|0Vcg');
define('SECURE_AUTH_KEY',  'XE#,Pw/-T)>GYp:%oJ,M1Y#2C!Vv}dmyX}u`I(&J{PG,<md$X@#c~ai{UHc?]cX&');
define('LOGGED_IN_KEY',    '|vb_R}4B-yg7w{SZUWAqz@8-+J|d~PvKR-|hCPi>#!A91V6vRSiyp?/FMG-+NBIn');
define('NONCE_KEY',        'lqk#eERZ+E-CvGd+l-Rsi;f8}?65,xbqD_2xLe!W|(+rK7f<6+*~:|*5Q:MEzKie');
define('AUTH_SALT',        '$h}KT7,5~^TW$:RB?l*.|<fZ;8@>cWDer}kR&>|B i(zI+SMJeUd3BIjg$=Q=$cN');
define('SECURE_AUTH_SALT', 'z4rM3(AyDK!/?3toEqy}i4aw|vz_&SKv9rUN1=kb9)Xya-C>&nFN+2zZA}:7w&tT');
define('LOGGED_IN_SALT',   ':viE)W9;DZ0V7?o8>ui7i|c&S@&r>ROT)z/rKGFj6|;l=49Cjq>bn;&fpzJ7%=|2');
define('NONCE_SALT',       'V=(GRp[FvH!Y+X#RBTCj-D6,`i-](zMvNJ[x~A:79#DQk~%Ln07z2E:;q?XGONl1');

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
