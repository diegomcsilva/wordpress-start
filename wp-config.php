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
define('DB_NAME', 'diegomarcelo');

/** Usuáro do banco de dados MySQL */
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
define('AUTH_KEY',         'q$fsRNz0+=W.=MHNQBQt;8acSv8k)u {=_)g~_Hh2>HA 27xn LA?f2-q.S&trjj');
define('SECURE_AUTH_KEY',  '~pvcy.%qUR{RUvYhXmRbrBubYH%]FU&}7;DXm(kwrnq%}n}wHZY4l<hQN7r:9+vz');
define('LOGGED_IN_KEY',    'oR;1K5)Tut>:yl@/{>L293gHNm%VjF**h}!Hpiqt_mS[.Kj5/i&Bp17(0XXr_18M');
define('NONCE_KEY',        '8Eh(Q%?%yR8TTBJ7g0nzME%HHeVpyBWqHb!y>MA&:lG%K>ae~;J/l]3zO<;=X)eZ');
define('AUTH_SALT',        'ZWTmK rDM3/$7G3kj5{S^WT7VVx>BL4|,42CV`6K,+)s}Z`OvM!qnu^^|S%g*7QE');
define('SECURE_AUTH_SALT', '7w|ur60Ke8x,,e`6qt)#UChUlqYZUx2&K~WM[dp+*!{kopmfxzM-/QB)YXz:0M=V');
define('LOGGED_IN_SALT',   'Z&1340~)qK/jG]ZOU?Zq| T(V] 4%SN:u),^XP/:Pa7z4cqPyI3[/aI6<?sLb`rD');
define('NONCE_SALT',       '^^Z.%nZrR&(.SZFJu{ZU PV3hGkAQQ~=pV,@QxHA,V5U6TF:(#b,;z2w#Z5^X[8o');

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
