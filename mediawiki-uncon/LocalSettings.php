<?php

# This file was automatically generated by the MediaWiki installer.
# If you make manual changes, please keep track in case you need to
# recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.

# If you customize your file layout, set $IP to the directory that contains
# the other MediaWiki files. It will be used as a base to locate files.
if( defined( 'MW_INSTALL_PATH' ) ) {
	$IP = MW_INSTALL_PATH;
} else {
	$IP = dirname( __FILE__ );
}

$path = array( $IP, "$IP/includes", "$IP/languages" );
set_include_path( implode( PATH_SEPARATOR, $path ) . PATH_SEPARATOR . get_include_path() );

require_once( "includes/DefaultSettings.php" );

# If PHP's memory limit is very low, some operations may fail.
# ini_set( 'memory_limit', '20M' );

if ( $wgCommandLineMode ) {
	if ( isset( $_SERVER ) && array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		die( "This script must be run from the command line\n" );
	}
}
## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename         = "Uncon";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
$wgScriptPath = "";
$wgScriptExtension = ".php";
$wgArticlePath = "$wgScriptPath/$1";
$wgUsePathInfo = true;

## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL

$wgEnableEmail      = true;
$wgEnableUserEmail  = true;

$wgEmergencyContact = "webmaster@uncon.onehitninja.com";
$wgPasswordSender = "webmaster@uncon.onehitninja.com";
#$wgPasswordReminderResendTime = 0.5;

## For a detailed description of the following switches see
## http://meta.wikimedia.org/Enotif and http://meta.wikimedia.org/Eauthent
## There are many more options for fine tuning available see
## /includes/DefaultSettings.php
## UPO means: this is also a user preference option
$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

$wgDBtype           = "mysql";
$wgDBserver         = "mysql";
$wgDBname           = "wiki_uncon";
$wgDBuser           = "root";
$wgDBpassword       = getenv("MEDIAWIKI_DB_PASSWORD"); 
$wgDBprefix         = "wiki_";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "TYPE=InnoDB";

# Schemas for Postgres
$wgDBmwschema       = "mediawiki";
$wgDBts2schema      = "public";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_NONE; #CACHE_ACCEL;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;
$wgGenerateThumbnailOnParse = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
$wgMaxShellMemory = 204800;

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
$wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = false;

$wgLocalInterwiki   = $wgSitename;

$wgLanguageCode = "en";

$wgProxyKey = "52f8059febf857d812ee303230e80ef9f805121931c3de303908c5d3ea18751c";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook':
wfLoadSkin( 'Vector' );

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
# $wgEnableCreativeCommonsRdf = true;
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";
# $wgRightsCode = ""; # Not yet used

$wgDiff3 = "/usr/bin/diff3";

# When you make changes to this configuration file, this will make
# sure that cached pages are cleared.
$configdate = gmdate( 'YmdHis', @filemtime( __FILE__ ) );
$wgCacheEpoch = max( $wgCacheEpoch, $configdate );
	
$wgLogo = "/images/ys-logo.png";

$wgFavicon = "$wgScriptPath/favicon.ico";

$wgAllowExternalImages = true;

###
# PERMISSIONS
###
# Disable reading by anonymous users
$wgGroupPermissions['*']['read'] = false;
 
# Disable anonymous editing
$wgGroupPermissions['*']['edit'] = false;
 
# Prevent new user registrations except by sysops
$wgGroupPermissions['*']['createaccount'] = false;

# Enable Gadgets
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'ParserFunctions' );
#require_once("$IP/extensions/LastModifiedLink/LastModifiedLink.php");


$wgDefaultUserOptions['useeditwarning'] = 1;
$wgVectorFeatures['editwarning']['global'] = true;
$wgVectorFeatures['collapsibletabs']['user'] = true;
$wgVectorFeatures['collapsiblenav']['user'] = true;
$wgVectorFeatures['expandablesearch']['global'] = true;
$wgVectorUseSimpleSearch = true;

$wgShowExceptionDetails = true;
