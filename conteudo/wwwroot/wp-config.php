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
define('DB_NAME', 'plusonline22');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'plusonline22');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Coelho@99');

/** nome do host do MySQL */
define('DB_HOST', 'mysql20.plusonline.com.br');

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
define('AUTH_KEY',         'p1g>&PUOA>+paS=D28|!7@,2(t.j4OxIobCU2:+2xis}O[,Q*6&:.VZ=|z+lV]*/');
define('SECURE_AUTH_KEY',  'uFT2(N|N*dxI*>+L|^Zs>O>&3L7Og-lfjh:/Swg;D_o{WrCHmBf&_rm-?.R(MH3$');
define('LOGGED_IN_KEY',    '*dOcAtl^yNC=n0CG-yeoZ1y/VOVy,y`u6Y1/ZKUfhJ7w8m-%}YM}saD_O1ed#A]l');
define('NONCE_KEY',        'wrg$D7&=k|)MBl:UQ?WavS+0|#aNz7@Ot}O/-J9e$YA9 -)[u1|Nf{#M|vY=9xXg');
define('AUTH_SALT',        'jR@3tei$CsG14FetvidAE34Q+8;;G={^(}Ie)+iR4lU,#?V+Xy+JDtG 3K4r$H/Q');
define('SECURE_AUTH_SALT', 'f$A~gF<j9Ee-YWaJl$:R<ABvN*n7W1txacE-@_7K@@}cf?Ww&&?;+8ipbP0:m6aW');
define('LOGGED_IN_SALT',   'RE|f_)xCEVF[;__AmA$@1l#TfT9%% rW{W-v7_ncRQF~u9sutcdv+@75^-lx}:RZ');
define('NONCE_SALT',       '|!isAC#lIE8RZS|z,>GZXB}D(_Z> GYjr|%+c*/R[p@{x<Yt`J4Cb2C|+>KP91C,');

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
