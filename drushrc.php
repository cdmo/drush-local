<?php

/**
 * Shell aliases for syncing with staging or production and setting up a local dev instance in one command 
 * like `drush @yoursite.local pull-live-all`
 */
$options['shell-aliases']['pull-stage-files'] = 'rsync -v {{#stage}}:%files {{@target}}:%files';
$options['shell-aliases']['pull-stage-data'] = 'sql-sync -v --no-cache {{#stage}} {{@target}} && drush golocal';
$options['shell-aliases']['pull-stage-all'] = '!drush sql-sync -v --no-cache {{#stage}} {{@target}} && drush rsync -v {{#stage}}:%files {{@target}}:%files && drush golocal';
$options['shell-aliases']['pull-prod-files'] = 'rsync -v {{#prod}}:%files {{@target}}:%files';
$options['shell-aliases']['pull-prod-data'] = '!drush sql-sync -v --no-cache {{#prod}} {{@target}} --no-cache  && drush golocal';
$options['shell-aliases']['pull-prod-all'] = '!drush sql-sync -v --no-cache {{#prod}} {{@target}} --no-cache && drush rsync -v {{#prod}}:%files {{@target}}:%files && drush golocal';
