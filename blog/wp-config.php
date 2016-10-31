<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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
define('DB_NAME', 'idealblog');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V`:Llr&k<x4r9~L(6]kZU}u$f2_hE sSJLH!3LU3tLKS:P>Kneh2Tz[P[v8blr8n');
define('SECURE_AUTH_KEY',  'I{i,M{M::v7G(1C_f.vbCF9dE|@tZd}]Z*R`DWvgYb<wfyzl)STcYNS%EV53EzVr');
define('LOGGED_IN_KEY',    'U/uT*L4%!y5:vF1El&3Cq`w<(e15.b3g6FxQoUNiB%qS`L3H3q@nRC6v]3=U5^v$');
define('NONCE_KEY',        'Ru#<rp9K>&L-e*5`/,38L@9;ZaBPw&M ZY:-2Q`%nM^r8V<]R!vP3 jVJ*~ 1&lL');
define('AUTH_SALT',        'dv#=}5%oSai@5!v9|0~8Zq`RgVotoRZ2;7(]O0RHB6vFr9.FN{fFD0iF_AN0~6}0');
define('SECURE_AUTH_SALT', '1mB%[O*6VrXr4z$XE*Exbi8$Nd<RHIF O`]chkLPU@z83!f_[s;Z|0g15J$U<g3B');
define('LOGGED_IN_SALT',   '.#JOvWEw/!AM5| AmsZ.C*E{1u,c#L/jhWc/3V%p%VD]/ry|r%H9Ta*XQHwn`BwV');
define('NONCE_SALT',       '`,^z`3VBJia)@bVd.Sub%q1`nbujnvm7!()b2)~k4xWTE5I/*<X^fQ%sFUQe.>pY');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
