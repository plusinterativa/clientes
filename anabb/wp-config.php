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
define('DB_NAME', 'anabb');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'P|FyhKo[~,7@,9*!Etetuv/U4o1u*ItIVNl#X3ss,*1s^#!Y.u$7|W;@b]IL@f<?');
define('SECURE_AUTH_KEY',  '|AQmLX2e|I<jAlKG=Jj abY-($*UdX jY{7n:JHYs1Z~/AoBAR)<^]fzk3|b><Ww');
define('LOGGED_IN_KEY',    '2`F39E+mlNk) ])8oxTC1n !c0;8Aj[6ETqy1e:$9]YfAIey,Dxi.}~C|)Sit(bm');
define('NONCE_KEY',        'IvRe8|C >.Te|-wkfPFsQ23{0bX2y-=+z[ol-{22<6U..DC&[_rL+lkW(u1[pjhM');
define('AUTH_SALT',        'jdA-~XB&4{#%I+MmTJ,8=n>RPuY,5c|1wZB[`~bqNjK3 /tY|A[Q>AXaL??;wQk9');
define('SECURE_AUTH_SALT', ',vUvozj< ~Rc]V=vmJ:?-~QLq5-/(o^7X;#QQ7OUrB+)n{mgMIL2^$&XI$b-`sZ<');
define('LOGGED_IN_SALT',   'hh}y-pY);84#CiQ>8C-+6o:O{K1GqvSS$g}%,8SZ=rH=|vic 2U3VF7Apqa,|cX{');
define('NONCE_SALT',       '#S>VE:t#(5|IkJ/Mu)9S@MdA= ndHv]Qr$W1jF#z;>U>>n4Z/}.e1LM]g^=Z9J~4');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'coelho99_';


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
