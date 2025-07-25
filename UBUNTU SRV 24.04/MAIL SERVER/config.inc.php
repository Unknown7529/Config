<?php

/*
 +-----------------------------------------------------------------------+
 | Local configuration for the Roundcube Webmail installation.           |
 |                                                                       |
 | This is a sample configuration file only containing the minimum       |
 | setup required for a functional installation. Copy more options       |
 | from defaults.inc.php to this file to override the defaults.          |
 |                                                                       |
 | This file is part of the Roundcube Webmail client                     |
 | Copyright (C) The Roundcube Dev Team                                  |
 |                                                                       |
 | Licensed under the GNU General Public License version 3 or            |
 | any later version with exceptions for skins & plugins.                |
 | See the README file for a full license statement.                     |
 +-----------------------------------------------------------------------+
*/

$config = [];

// Do not set db_dsnw here, use dpkg-reconfigure roundcube-core to configure database!
include("/etc/roundcube/debian-db-roundcube.php");

// IMAP host chosen to perform the log-in.
// See defaults.inc.php for the option description.
$config['default_host'] = '10.10.10.1';
$config['imap_host'] = ["localhost:143"];

// SMTP server host (for sending mails).
// See defaults.inc.php for the option description.
$config['smtp_server'] = 'mail.slay.net';
$config['smtp_port'] = 25;

// SMTP username (if required) if you use %u as the username Roundcube
// will use the current username for login
$config['smtp_user'] = '%u';

// SMTP password (if required) if you use %p as the password Roundcube
// will use the current user's password for login
$config['smtp_pass'] = '%p';

// provide an URL where a user can get support for this Roundcube installation
// PLEASE DO NOT LINK TO THE ROUNDCUBE.NET WEBSITE HERE!
$config['support_url'] = 'http://mail.slay.net';
$config['mail_domain'] = 'slay.net';
$config['smtp_auth_type'] = 'LOGIN';

// Name your service. This is displayed on the login screen and in the window title
$config['product_name'] = 'Slay Webmail';
$config['username_domain'] = '';

// This key is used to encrypt the users imap password which is stored
// in the session record. For the default cipher method it must be
// exactly 24 characters long.
// YOUR KEY MUST BE DIFFERENT THAN THE SAMPLE VALUE FOR SECURITY REASONS
$config['des_key'] = 'n//f1AiUW1TPZ6reR5hKA+Ga';

// List of active plugins (in plugins/ directory)
// Debian: install roundcube-plugins first to have any
$config['plugins'] = [
    // 'archive',
    // 'zipdownload',
];

// skin name: folder from skins/
$config['skin'] = 'elastic';

// Disable spellchecking
// Debian: spellchecking needs additional packages to be installed, or calling external APIs
//         see defaults.inc.php for additional informations
$config['enable_spellcheck'] = false;
