<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'moscacekaW');

/** Nome utente del database MySQL */
define('DB_USER', 'moscacekawW');

/** Password del database MySQL */
define('DB_PASSWORD', 'dfTw53$3kdGfpF');

/** Hostname MySQL  */
define('DB_HOST', 'mydb.xcon.it');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wwy}8&wg}s-c>/nzeQGK(P`0g]lMq|VH30wxSd!{z)B@M1]L7l}k30TV2XFH}3]2');
define('SECURE_AUTH_KEY',  'x#*0b@~WFmaaLdOhTeQ?e=jD/YT/Eyd y:rV 29cg]7>(*OZ8.qWw)K,1]WU75Z(');
define('LOGGED_IN_KEY',    '|bFj|:=@O2x{c}J+hw(#{f4@2T`]l`Zh*#n<,[O.u0fi~%N1Te2s:4ZB8&yN8Gi+');
define('NONCE_KEY',        'U:bQw`<.-tP7lFBI}=&?#C{<C5^0^ }*LAa7I!Y2XRLSrzg>;a[>5(](1#OAR+0j');
define('AUTH_SALT',        'pd[:06~qj;j$r~71+.~e|G~U9S, {_0AW$1xt}*e(7Q?=f9BF1Xy=d:cd-TuqQZ}');
define('SECURE_AUTH_SALT', '9R?J;d_~ }Qc9$<qJEw%g2P;ZpMxSBz,<kkKSS1wU<)c@x8YX=NILhcu(+% 9AVr');
define('LOGGED_IN_SALT',   '^Y8]OjHsW4Akq {W68vPhQ4SPIMe`.t`TEczI5/iBa}h*;RU=n8Nxoff%-f[[sxr');
define('NONCE_SALT',       't4e^a`![.6@7Jd11/7t.({>)Q`v>2r~8Yw3Ca8WYsP8H<H-i]n%L<,_^O3n2CFpc');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', true);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');