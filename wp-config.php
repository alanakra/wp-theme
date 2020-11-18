<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'book' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '?=6b1^h=8Jk ph_d^7W{5W*2MKg;nzkicYsdc]Lpg;qyg1Ik(G/B/:61,c=[IA#X' );
define( 'SECURE_AUTH_KEY',  'z`OwSonmnQRg<aXW)otHTes+;UB$<>4}Wpu&x<t/ZvktBBBQ6X6FUey$Y>XWliy`' );
define( 'LOGGED_IN_KEY',    '?NRCifT|xOH_R7gjS$MUMD+jhmW3tGnS~xo+3y&jA GA[4R=vq|w+(mnV(s9$?rs' );
define( 'NONCE_KEY',        '->n@vSNQ @d=.W| 7j|P&@;X;jU1,1;7I9aAAhly3Wt1?1#4M-UH1D!>yz(`a?]K' );
define( 'AUTH_SALT',        '(4a!yoOU;tX1{CK-3OA}JFe)91i7 Td/E^^Y=Xl+1,0xw1dF3v*PHQ|/wWF>m`(N' );
define( 'SECURE_AUTH_SALT', 'v]QQ q--!jh1vI,t(+TMvYY.2S]q4*$`#y(/Ldf=R]_.@o+_%.:j=473inTH!4ot' );
define( 'LOGGED_IN_SALT',   '=8NznD=w8l.ei+xzXQ7wO;C3z,[*Ik,Dq:UNw4[lOg9#]/}d77w4YsnZULqQ=70J' );
define( 'NONCE_SALT',       '&Ku3i`}oX);E=CM+~[YP3cp]Z)0y|5Da}I4.ly=}xDS}al!cCa/{$e7M%Of@}&^9' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
