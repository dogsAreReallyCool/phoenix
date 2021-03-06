# Phoenix v.3.0

[![Codacy Badge](https://api.codacy.com/project/badge/10f5af9881b4412093e91d68086fd468)](https://www.codacy.com/app/lewisgoddard/phoenix)
[![Code Climate](https://codeclimate.com/github/eustasy/phoenix/badges/gpa.svg)](https://codeclimate.com/github/eustasy/phoenix)
[![Travis CI](https://travis-ci.org/eustasy/phoenix.svg)](https://travis-ci.org/eustasy/phoenix)

A lightweight BitTorrent Tracker written in PHP, with an SQL backend, for people that just want to host a tracker, not the torrent listing site.

## Installation

### What Do You Need?

#### Required
* PHP >= 5.3
* A MySQLI supported database, such as MySQL >= 4.1

#### Recommended
* Nginx >= 1.8.0, Apache, OR lighttpd.
* [A supported version of PHP](http://php.net/supported-versions.php)
* MySQL >= 5.5 OR MariaDB >= 5.5

#### _Really_ Recommended
* Nginx >= 1.8.0
* [The latest version of PHP](http://php.net/supported-versions.php)
* MariaDB >= 10

### Install Guide
1. Copy `_settings/phoenix.default.php` to `_settings/phoenix.custom.php`
2. Edit the variables in `_settings/phoenix.custom.php`
2. Upload all the `.php` and `.sh` files to your server.
4. Load `admin.php` in your browser and run the `Setup` option.
5. Change `$settings['db_reset'] = false;` OR delete `admin.php` from your server.

## Configuration
Configuration should take place in `_settings/phoenix.custom.php`, NOT `_settings/phoenix.default.php`. Phoenix _will_ attempt to use the default configuration if yours is missing.
