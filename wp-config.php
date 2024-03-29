<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7:,Pw3%IMWn]N~YbZ^ Cff,jfsk^jJIy+9V`H&.wZ^gvk&?ROkrx)N.f-jP{WK1N' );
define( 'SECURE_AUTH_KEY',  '$;&p5sJ3A!Dp~MgAwN^WD$.|j;[v@>/J(R;$wAkUO[.]m2t&g)3T Qo^cSkBf)bj' );
define( 'LOGGED_IN_KEY',    ']hKvM4,5c`hY3q!7Rn:c: ]TV@)%NxY;M,s, *tEG31VL.uV!fj}Qf3IEf=*h&l ' );
define( 'NONCE_KEY',        'Xc@U?[HKuMyoT?-$#u&`Y9Ib7AJf9nHY5T6 {PrQbFj$-NIE?5I/RhEM@H`?%izk' );
define( 'AUTH_SALT',        '!LzwK+d}`a D@;c`a=L~wj*N@2rall!&:X3tzMfC1 If`G2qRX/G^8J>-yMfi>i?' );
define( 'SECURE_AUTH_SALT', '(0e`~WWA?,5,rDCJi#)w/Qg@tgbjt9#0YT1d?d~DCW3^40%bewRCX@L-=:}FRCbN' );
define( 'LOGGED_IN_SALT',   'Gd,h*rch~I[=]OP7,soKZ,2men?{tbM/UzZJ~r(YA0)]+NG]di.2ZR-pSLnF<H(D' );
define( 'NONCE_SALT',       'A(7I P7is`/,BLIEOgA@^S~Y]9q~1CiJW>kLSfiXYL+&Bo3ev^vnf$%6JVAh5j;S' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
