<?php
/**
 * @file
 * Custom Drush integration.
 * Heavy borrowing from http://grovestreetstudios.com/blog/2013/08/custom-drush-command.html
 */

/**
 * Implements hook_drush_command().
 *
 * Single command used to configure local development environment
 */
function localdev_drush_command() {
  return array(
    'golocal' => array(
      'description' => dt('Puts your site in local development mode.'),
    ),
  );
}

/**
 * Put the site in local development mode.
 */
function drush_localdev_golocal() {
  // Enable dev friendly modules.
  module_enable(array('devel', 'coder', 'diff'), TRUE);

  // Disable any production modules that you don't want to run locally
  $disable = array('securelogin', 'linkchecker');
  module_disable($disable);
  drush_log(dt('Modules disabled: @modules', array('@modules' => implode(', ', $disable))), 'ok');

  // Allow everyone to see devel messages like kpr()
  if(module_exists('devel')) {
    user_role_grant_permissions(1, array('access devel information'));
    user_role_grant_permissions(2, array('access devel information'));
  }

  // Set some dev-friendly settings
  variable_set('cache', "0");
  variable_set('block_cache', "0");
  variable_set('error_level', "2");
  variable_set('preprocess_js', "0");
  variable_set('preprocess_css', "0");
  variable_set('page_compression', "0");
  drush_log('Page cache, page compression, JS optimization, and CSS optimization disabled.  Errors and messages display turned on.', 'ok');

  drupal_flush_all_caches();
  drush_log('All caches cleared.', 'ok');
  drush_log('Site ready for development!', 'ok');
}