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
//define('DB_NAME', 'plusonline27');
define('DB_NAME', 'plusonline20');

/** Usuário do banco de dados MySQL */
//define('DB_USER', 'plusonline27');
define('DB_USER', 'plusonline20');

/** Senha do banco de dados MySQL */
//define('DB_PASSWORD', 'Cookie@4plus');
define('DB_PASSWORD', 'Coelho@99');

/** nome do host do MySQL */
//define('DB_HOST', '179.188.16.47');
define('DB_HOST', '179.188.16.14');

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
define('AUTH_KEY',         'u^84O.G@L=A|*8x*xn7?-}ELSAE>$w?/b,#MrzN^Pm5dqd]WF<ST$rx:a}INCWj*');
define('SECURE_AUTH_KEY',  '4r<*w1pt*%72%Us?z,r%cxx|8`xuF3(5)S*9va+B_37hgZK|[mh.!_@VHJ`|BA3T');
define('LOGGED_IN_KEY',    'XnKo:Bh&l9K4;C4{zmxcX[X18Jn#eT?%PIl*B{pHrxQOB{AC`lae)3d^;Y@vm?U+');
define('NONCE_KEY',        'M65+psD?e4:Oo&Mfv2-BHe^cV4clGa|3+Q+x)-?p*G+G5|GE*Ju6sv`pm7g-,Oy5');
define('AUTH_SALT',        '#=0TN1Zt2EFm$h>|92!J]f]r&{}^Y4{rO7O#~X#_Ktfz`eY;+7`5:[d/hbJwSR(:');
define('SECURE_AUTH_SALT', ':BR|ESv]dqHQBIVo5 vpvYzYp?6j-4$b%lmi#CuEEoY|`2(ldzQ;=f|#R+MYhe*_');
define('LOGGED_IN_SALT',   '^|h>v*g6d^%RP@y8Q2/K dMy&JKcS?@Zg+hQ`o,]E]`g%F}F>{;+IukkcTvR<H_/');
define('NONCE_SALT',       'u^y{HxxS8A-mTA=glsb5_ukDzRW6-9~}+>QJDE1E59L:lH?2xF`-2r7S?u/HELc7');

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
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
