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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

 
// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'number_wp_asset' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'UIceEI+.G[)X1ykfV#ilvp9ZwrBe8ZNs]s3r,b9!=}B-00A!go<)7~y#uT.JK),e' );
define( 'SECURE_AUTH_KEY',  'c%nuWleQ7NbwXTd mU(?Z[Co)|b_hp{~ONKq <hYkc3jZ,}sZc@Lvzb)T$iL5d^,' );
define( 'LOGGED_IN_KEY',    '{67^:1i=>c2*=s/:,!LzufU?{#q?I}8zG(j<1Fu27M,wV{uw;P:Kdt0{)dD#PZ4q' );
define( 'NONCE_KEY',        'ja8_[Bvew22jh!4MVo},wxIDy3lzx^?$^GRHzLE->F+i2zD9`|/@6$}d:y-E<C/B' );
define( 'AUTH_SALT',        '.<DO.gS0 @{L|0/&$ed; hc!uSyBA(;.S79eJ.[sonJE21&AFkcx8Ld_bHZR:Z7b' );
define( 'SECURE_AUTH_SALT', 'eo. %Nsf9Ms*LYiaNV/?67!,^~er``Vc:{^Kir8`Q/z>iJbv(exckf3HQJ&I-cdt' );
define( 'LOGGED_IN_SALT',   '+LeJsR!<_EitvA#0yW>y;ND:LMeAL6r]+Ii&F>9,r5HTPI66SL)j>v+sX2u1?A%[' );
define( 'NONCE_SALT',       'b4Subsx[2KRa9vyNZ7e),WII8rvKRbzoW.2Y0S -K` /ah|294A LrtTmbKE:~V;' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'nb_as_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */
define('WPCF7_AUTOP', false );


/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
