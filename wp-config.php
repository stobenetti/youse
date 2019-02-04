<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'baldavira_youse');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`J|z rN#,:(;{Lf)^:PyK~NAfACMT]&V5wbhCs7i>p[[QTH~JU#-zBDBTS/fOu}3');
define('SECURE_AUTH_KEY',  'd.3lRRq)!`vhYd=8n,$.PHNv$82lGMGa!q$b<L[##ep`t)/cwt(b9T4^5R4RrL{z');
define('LOGGED_IN_KEY',    'q8-tS0.^Ak<eO{kLNAmDnyPhzP1KOl-7/7xXx3*s_s[uK?=Y#<%Oj6m0)Q?I5#Z7');
define('NONCE_KEY',        'zAzO[&i;ys@@bCazuha$*g~oC5<X9]i vxF-BPvc/ToSLSv?WB&1Vjs^&;ncv2x:');
define('AUTH_SALT',        '0!yU]^-An`|`*eXnh{8[w7e2B6Q1)8;b&qWx+[Rf<cv](fvgc,9],vxhWiPU]%aw');
define('SECURE_AUTH_SALT', 'kFM6r`bqQ]`>?6:R.g3i_$u1 ~PcCE|2+I/S=<fF${>c<QWXNBVukj3PQ{9MlYEg');
define('LOGGED_IN_SALT',   'dK*jiNB<`2C!zrZfyxS%O]EFKldwHSU58B-d=3*;+a|@$osmI,YJkD2rKdFWaclX');
define('NONCE_SALT',       'a6Z:w#Z7SaiAl>HQt1nurR]ZysQ>Zk>w@:OG|$U,:zXVWzF(NhON;~8!7Go^}A(&');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'by_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
