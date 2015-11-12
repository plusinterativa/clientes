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
define('DB_NAME', 'plusonline21');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'plusonline21');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Coelho@99');

/** nome do host do MySQL */
define('DB_HOST', 'mysql19.plusonline.com.br');

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
define('AUTH_KEY',         '9xrl]]cRa9aA54hN?}377*6^k48b[@%~M]@(0-vR&P]IsS)`3hpXP25.p;0R*x?y');
define('SECURE_AUTH_KEY',  'UnAqef>c&kXKnmCk,6QwxD@8kI+RTKPb-o(kY9|6%x.,5P`a[I>hFXK(b8{kX.Z2');
define('LOGGED_IN_KEY',    'y&R3H+{WA[|qia|jF1}^#%m[V/sW!rEnEb}=m9jhfU(4~@7Au #C/xGb+E95H +S');
define('NONCE_KEY',        'JE{A$V0,-0vQS|{hFe,h[,P*AElmVj^j8|$yW37} 1[<14;0qt}x[54h4:qx_3qN');
define('AUTH_SALT',        '?En?n=4QCC+]C>48i,I(&C>s{SP!>gJMwPO;Po 4_Wlp>|DRmL{ M<v<e`e**1/M');
define('SECURE_AUTH_SALT', '+QPw.k`|lww`whS2HlIJ*AGuIxQ>|4_Q[{S~x>+INH_(:=|V|L+vw6v^Y=+M*B7Z');
define('LOGGED_IN_SALT',   'p3n4W%c^bU:#YTxi2u3BX..8mX|O|Z=jGI Pk.0>;K_u.Z-Xq6]2D+&)|[L*.yyN');
define('NONCE_SALT',       '|`+t#Sxi}y)~=H6Tdr.|S-@[z1^0DWmiV+b.fb/k`ra9kOHAt&6-OgNRlMiEp(/o');

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
