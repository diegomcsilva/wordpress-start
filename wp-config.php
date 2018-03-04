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
define('DB_NAME', 'noticias_wordpress');

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
define('AUTH_KEY',         'GGnYWXS.z<cyr_|qYU_</SL=E#v|T-YL.B@k-nB;6A|hX!>=[S.@.g[1{>n5ryKF');
define('SECURE_AUTH_KEY',  'a,k6]_|>8)FvZ7$ElHXFYaoZv2<h~s@O+<c/.!h5Mz](E<,U|vRlF45B<Wl3Z;P=');
define('LOGGED_IN_KEY',    '4yyJl>S]}:*)C{4i4Lgbxt8>i$*o+@1<zOaFt8CvC,{bPY9K^t+-??FB!Li@z1zy');
define('NONCE_KEY',        'cnWNE/PKp@J3NmPS`((Mggdw~)DU>oQ-ZVX<CSK$MC<5Wf& <M@=E>$dZ*]rg`d>');
define('AUTH_SALT',        'sV 2(r?NSIo)Mp:kNLa;,}dm/R4<q: zC^&`b}vY/Buq,vW[`Q+T|LDq&FqKBqH;');
define('SECURE_AUTH_SALT', 'b-;D|`(#A0bBe A;gijWX_GD&p7@Yf{i(O%G*Sl@nVFf%P] F%Q+DHHUS!GBJIh&');
define('LOGGED_IN_SALT',   'gCVBadd;0>~x:!RO9Ux_;?vl@U>NMLRfV_Im}%+gv:c6q_ m}Kg4+d8af6jA|#kL');
define('NONCE_SALT',       'nsojfI.s88[T8L7@K`_mou?=}G5fPEkUc%KH7E@F9W}a!64N8F0](S|zK_l+cr(|');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
