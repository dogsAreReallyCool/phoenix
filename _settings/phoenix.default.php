<?php

////	DO NOT MODIFY `phoenix.default.php`
// Copy to `phoenix.custom.php` and modify there.

////	General Tracker Options
$settings['open_tracker']        = true;         /* track anything announced to it */
$settings['announce_interval']   = 1800;         /* how often client will send requests */
$settings['min_interval']        = 600;          /* how often client can force requests */
$settings['default_peers']       = 50;           /* default # of peers to announce */
$settings['max_peers']           = 100;          /* max # of peers to announce */

////	Advanced Tracker Options
$settings['external_ip']         = true;         /* allow client to specify ip address */
$settings['default_compact']     = true;         /* force compact announces only */
$settings['full_scrape']         = true;         /* allow scrapes without info_hash */
$settings['random_limit']        = 500;          /* if peers > #, use alternate SQL RAND() */
$settings['clean_with_requests'] = 10;           /* tweaks % of time tracker attempts idle peer removal */
                                                 /* if you have a busy tracker, you may adjust this */
                                                 /* example: 1 = 1%, 10 = 10%, 50 = 50%, 100 = every time */
$settings['clean_with_cron']     = false;        /* should your tracker clean with cron */
                                                 /* means clean_with_requests can be disabled for faster responses */
$settings['honor_xff']           = false;        /* If this server is behind a frontend proxy, the client IP */
                                                 /* will come in the form of a X-Forwarded-For. This option */
                                                 /* should only be set if your frontend proxy properly handles */
                                                 /* and filters XFF, else it allows for trivial IP spoofing */

////	General Database Options
// Can be better overridden with a settings.custom.php file.
$settings['db_host']             = 'localhost';  /* ip or hostname to mysql server */
$settings['db_user']             = 'phoenix';    /* username used to connect to mysql */
$settings['db_pass']             = 'Password1';  /* password used to connect to mysql */
$settings['db_name']             = 'phoenix';    /* name of the Phoenix database */
$settings['db_reset']            = true;         /* allow database to be reset in admin */

////	Advanced Database Options
$settings['db_prefix']           = '';           /* name prefixes for the Phoenix tables */
$settings['db_persist']          = true;         /* use persistent connections if available. */
