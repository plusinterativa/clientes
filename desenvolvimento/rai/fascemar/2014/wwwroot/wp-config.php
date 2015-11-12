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
define('DB_NAME', 'plusonline15');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'plusonline15');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Coelho@99');

/** nome do host do MySQL */
define('DB_HOST', 'mysql15.plusonline.com.br');

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
define('AUTH_KEY',         'C42@JJLZ:+tX4p|-F`m`5y9#Z%~@;|e<+2l60 Ng+5n2]qiY5Nh]$uQvQPVONO~?');
define('SECURE_AUTH_KEY',  'aDLM&4YF4h5,h3y:N/=1!*0#ZJpNln/X6y%?+x#b)S`-Bhl=vh-6u+7V=&$.Z;1B');
define('LOGGED_IN_KEY',    'g:ePxLfO<B9(c(WV+*V7BsI5|;V1VWe^_m6dc=6ly;w$ZN*/5|&LN}/3B?]K,?Gg');
define('NONCE_KEY',        '#~nDP8eC`f%b-&yu)m|VX(hE(!FF?u3D8iJ`vus(d*AT^qN,|jnn@gNc7_NCeYS.');
define('AUTH_SALT',        'pF540(lRfSQ?~HuE83mm $!F|6&G>>DZ[(+AO<?-_)F1=<Dj[4Ft6#bQeI-eeAM4');
define('SECURE_AUTH_SALT', 'P&4/Hz=aZbwvp/+yj-;`t+OW(y({vQ!?g+u5wLcA!Kq^vn&uuZ(<r246FXdO0pE|');
define('LOGGED_IN_SALT',   'EQOPy(YlD*OI1/!Nig~Lk%ka_KS-!!Ntm`92^+0NlkK69+p-I|H19=ncR|pg9B|y');
define('NONCE_SALT',       'pYbo)hz/<A+xHs) &FnRz!d8Ia 9/rFrb8<]C5tf`.xYPv-$y];9-r/@31&o3pK,');

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
