<?php

/** 
 * Aliases for drush to reference
 * Fake data should be replaced
 */
$aliases['prod'] = array (
  'root' => '/path/to/drupal/root',
  'uri' => 'www.domain.com',
  'remote-host' => 'domain.com',
  'remote-user' => 'username',
  '#stage' => '@ncsulib.stage',
  'path-aliases' => array(
    '%files' => '/path/to/drupal/sites/default/files',
    '%dump-dir' => '/path/to/dump-dir',
    '%drush-script' => '/path/to/drush'
  ),
  'databases' =>
  array (
    'default' =>
    array (
      'default' =>
      array (
        'driver' => 'mysql',
        'database' => 'dbname',
        'username' => 'dbuser',
        'password' => 'dbpass',
        'host' => 'hostname or localhost',
        'port' => '',
      ),
    ),
  ),
);

/**
 * Create one for production, one for stage, one for dev, one for local
 */
