<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'oc3teexs17v9',
  'passwordsalt' => 'XXX',
  'secret' => 'XXX',
  'trusted_domains' => 
  array (
    0 => 'add.your.domain.here.com',
  ),
  'trusted_proxies' =>
  array (
    0 => '172.18.0.0/16', # ur Docker-network
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '23.0.0.10',
  'overwrite.cli.url' => 'https://add.your.domain.here.com',
  'overwritehost' => 'add.your.domain.here.com',
  'overwriteprotocol' => 'https',
  'dbname' => 'nextcloud',
  'dbhost' => 'postgressql',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'oc_alexander',
  'dbpassword' => 'XXX',
  'installed' => true,
);
