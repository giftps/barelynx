<?php

/**
 * config
 * 
 * @package Sngine
 * @author Zamblek
 */

// ** MySQL settings ** //
/** The name of the database */
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** MySQL port */
define('DB_PORT', '3306');


// ** System URL ** //
define('SYS_URL', ''); // e.g (http://example.com)


// ** i18n settings ** //
define('DEFAULT_LOCALE', 'en_us');


/**
 * For developers: Debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use debug
 * in their development environments.
 */
define('DEBUGGING', false);


// ** LICENCE ** //
/**
 * A unique key for your licence.
 */
define('LICENCE_KEY', '');




mysqli_query("INSERT INTO users (user_group, user_email, user_name, user_firstname, user_password, user_gender, 
                user_email_verified, user_activated, user_verified, user_started)
            VALUES ('1', 'admin@gmail.com', 'admin', 'gift', 'kaunda', 'password_hash("mmmmmm", PASSWORD_DEFAULT)',
            '1', '1', '1', '1')");




            -- VALUES ('1', 'admin@localhost', 'admin', 'admin', '".md5('admin')."', '1', '1', '1', '1', '".time()."', '".time()."')") or die(mysqli_error());

