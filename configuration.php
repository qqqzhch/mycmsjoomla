<?php
/**
 * @version		$Id: configuration.php-dist 18680 2010-08-27 05:44:28Z infograf768 $
 * @package		Joomla
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 *
 * -------------------------------------------------------------------------
 * THIS SHOULD ONLY BE USED AS A LAST RESORT WHEN THE WEB INSTALLER FAILS
 *
 * If you are installing Joomla! manually i.e. not using the web browser installer
 * then rename this file to configuration.php e.g.
 *
 * UNIX -> mv configuration.php-dist configuration.php
 * Windows -> rename configuration.php-dist configuration.php
 *
 * Now edit this file and configure the parameters for your site and
 * database.
 */
class JConfig {
	/* Site Settings */
	public $offline = '0';
	public $offline_message = 'This site is down for maintenance.<br /> Please check back again soon.';
	public $sitename = 'My XYZ Website';				// Name of Joomla site
	public $editor = 'tinymce';
	public $list_limit = '20';
	public $access = '1';

	/* Database Settings */
	public $dbtype = 'mysql';					// Normally mysql
	public $host = '846205e5-7f91-4121-84fd-a1d200d3da27.mysql.sequelizer.com';					// This is normally set to localhost
	public $user = 'mqhzfjgaqnvqjjyu';							// MySQL username
	public $password = '5pnS6c7AtiNk6ooTpmQECLCzzJx2U4wYNynhz2JAPYKdReeyrfxjNAssTUsuLfPx';						// MySQL password
	public $db = 'db846205e57f91412184fda1d200d3da27';							// MySQL database name
	public $dbprefix = 'jos_';					// Do not change unless you need to!

	/* Server Settings */
	public $secret = 'FBVtggIk5lAzEU9H'; 		// Change this to something more secure
	public $gzip = '0';
	public $error_reporting = '-1';
	public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';
	public $xmlrpc_server = '0';
	public $ftp_host = '';
	public $ftp_port = '';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $tmp_path = '/tmp';
	public $log_path = '/var/logs';
	public $live_site = ''; 					// Optional, Full url to Joomla install.
	public $force_ssl = 0;						// Force areas of the site to be SSL ONLY.  0 = None, 1 = Administrator, 2 = Both Site and Administrator

	/* Locale Settings */
	public $offset = 'UTC';
	public $offset_user = 'UTC';

	/* Session settings */
	public $lifetime = '15';					// Session time
	public $session_handler = 'database';

	/* Mail Settings */
	public $mailer = 'mail';
	public $mailfrom = '';
	public $fromname = 'My XYZ Website';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';

	/* Cache Settings */
	public $caching = '0';
	public $cachetime = '15';
	public $cache_handler = 'file';

	/* Debug Settings */
	public $debug = '0';
	public $debug_lang = '0';

	/* Meta Settings */
	public $MetaDesc = 'Joomla! - the dynamic portal engine and content management system';
	public $MetaKeys = 'joomla, Joomla';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';

	/* SEO Settings */
	public $sef = '1';
	public $sef_rewrite = '1';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';

	/* Feed Settings */
	public $feed_limit = 10;
	public $feed_email = 'author';
}
