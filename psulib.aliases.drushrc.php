<?php

/**
 * Aliases for drush to reference
 *
 */

// Note that produciton doesn't exist yet
$aliases['live'] = array (
  'root' => '/path/to/drupal/root',
  'uri' => 'www.domain.com',
  'remote-host' => 'domain.com',
  'remote-user' => 'username',
  '#stage' => '@ncsulib.stage',
  'path-aliases' => array(
    '%files' => '/path/to/drupal/sites/default/files',
    '%dump-dir' => '/etc/drush/dumps',
    '%drush-script' => '/path/to/drush'
  ),
  'databases' =>
  array (
    'default' =>
    array (
      'default' =>
      array (
        'driver' => 'mysql',
        'database' => '************',
        'username' => '************',
        'password' => '************',
        'host' => '************',
        'port' => '************',
      ),
    ),
  ),
);
$aliases['dev'] = array (
  'root' => '/data/websites/hellodrupal',
  'uri' => 'hellodrupal.libraries.psu.edu',
  '#live' => '@live',
  'path-aliases' => array(
    '%files' => '/path/to/drupal/sites/default/files', // needs to be set
    '%dump-dir' => '/etc/drush/dumps',
    '%drush-script' => '/path/to/drush', // needs to be set
    '%root' => '/path/to/drupal/root' // needs to be set
  ),
  'databases' =>
  array (
    'default' =>
    array (
      'default' =>
      array (
        'driver' => 'mysql',
        'database' => 'hellodrupal',
        'username' => 'hellodrupaldb',
        'password' => 'CharlieDB',
        'host' => 'localhost',
        'port' => '',
      ),
    ),
  ),
);
