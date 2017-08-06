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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'cometili_db');

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
define('AUTH_KEY',         'Bt~zO}-vp=Q4u)Z_QAxYC;2Nn +eK>Uro#fc?$?2D.`.D0PzAvSPAKw6aID4ilHK');
define('SECURE_AUTH_KEY',  'A4wh.3O_xGMW/{pgG~d@<yUZo[:M(H7h(X+(F gzm.Mx_,8{EnH.+j>w=Cf3/lnW');
define('LOGGED_IN_KEY',    '5bEau[49E]^^H=LNpq~4]>xHGwJ?Bd=~S*wL!J095[[m1T#.4aZ~QaV^mfl]:v+S');
define('NONCE_KEY',        'MSgX|B2]`m7f 0:QC)*R:w`0Qvy:($g*IPw#_Abjt(+PqexqwT!t?^A: 2Q/wsu{');
define('AUTH_SALT',        ':I4@yu+pvJVuzX=/#(U}m*@?WAa/_)l83Mg`JS3*lswiK<V#`[?<XnO1J%IZ&UpB');
define('SECURE_AUTH_SALT', 'wO@5h?3SnwTE!Tkgi<m6NPrrTc65;vN3M%U}byT[IF#FfL!C+g]ez-fLtNw=^G<u');
define('LOGGED_IN_SALT',   '(RjO^>>fNa(eV+RAJn&E#H6U`&)8JsrP}N-qc]VudqN/wU&#~ g1xMh4VEP~`:$I');
define('NONCE_SALT',       '=s){RqAw?/nga (KovkAy2kQprvH-2j 5O#P/h&o5Z,nfqCL1d4%OYmfSA6:V<k[');

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
