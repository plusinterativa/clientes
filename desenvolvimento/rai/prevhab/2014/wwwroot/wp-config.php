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
define('DB_NAME', 'plusonline24');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'plusonline24');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Coelho@99');

/** nome do host do MySQL */
define('DB_HOST', 'mysql22.plusonline.com.br');

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
define('AUTH_KEY',         'BWm~L~Z%g7$xy~0xJMpL{[,X6x+aO)9&J+6J3+LU|4vGNEu3OuuxlD7i>!0lN^B.');
define('SECURE_AUTH_KEY',  '8e--c!ow>A;%~l|{G(T(nd I078,GDQS^xT^Xx))P0f9WsyMsR.:RLFC-F^gL|}1');
define('LOGGED_IN_KEY',    '3W)7yo*8}$Y;z[i6PSfpo+YMN)nv0fW|vx%:I.RbYz+Trd>P(W*W>Ef#=~:be@z3');
define('NONCE_KEY',        '#J;?G+DG/1wja#%c&% rJ8`lgM3G-BLxAlFzvr|$n%FM>S]{]3Y*+EDQt1$n6AdC');
define('AUTH_SALT',        'Ggz>N#~mD*sRPn9ND!Q.5ggGaL_%_D87D6R45<rHh|kgr@/29)s(|d;vC+~a7|2O');
define('SECURE_AUTH_SALT', '8ne1O9g9*M;3+=AYesSz|-R&VI;Ey*&6_vN_&l 3(,PFNzd|IPG2%!~+Lsdo,WpJ');
define('LOGGED_IN_SALT',   ';o)c8bQX6I %{<Sgeu+QcS4TijTeNfbB}1brw-i6Gpm!^we0+U;s1Qp6cifXN8Mv');
define('NONCE_SALT',       '_jSZ*zW_&lDQ!RKnnCb.r`^#$/L=Op+D|+16/ <B ^Hqn9S>BA8|X-k-;<3mIVqr');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'coelho_99';


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
