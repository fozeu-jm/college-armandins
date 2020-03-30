<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'armandins' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*_,1NacpYD5^etDt,xIa-nl})UNqk~<Xn3G)#z1}_LsThxm=E<=z!JO/N/MA5j7b' );
define( 'SECURE_AUTH_KEY',  '3H#HhteV_*#ReEHWO]PuUTWhUqWG>2&Vg`I&-4G|VORC0yUK.A1wVC,[,0D:~/c4' );
define( 'LOGGED_IN_KEY',    'vB|KZ;~bF:)9dTabT}Abf;*_*G13L2rl5/ k$s9q,KV,ix84G-OPND%ouSkYN2ft' );
define( 'NONCE_KEY',        '/6D=gkjv-!6&:4mE@&(#(G$lj$R>oZ]RHe%q>m ^xM2YDZl$FJ4>ki+GD0W>ExUt' );
define( 'AUTH_SALT',        'rH;4RhXzoo:M1#9hbpQS*F.@$/UY;vSEy)*#3s}5~=0`FSw|PPm4h6e&bZLKy-,i' );
define( 'SECURE_AUTH_SALT', '82&!^-$qdYU lS,FnhL(*Gkk$nULZ)s,=@vl@yuNZ)@%.&YA=Ga2-Q.Qsvtu~vW<' );
define( 'LOGGED_IN_SALT',   'J/3j]Uvu+D2#h?;h`7OgCj}f54 C_-O)dk5Slp0)%iI,a{tAzsW7)WU(6a1,h9c(' );
define( 'NONCE_SALT',       'aiSJEJL[&WWb+48:E>-#Su2:+#LJ6>QR2CX{GV[ TUUa6uf-Yh9y^G6 XsHp3,-9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
