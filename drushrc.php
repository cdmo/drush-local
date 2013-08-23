<?php

/**
 * Shell aliases for syncing with staging or production and setting up a local dev instance in one command 
 * like `drush @ncsulib.local pull-live-all`
 */
$options['shell-aliases']['pull-stage-files'] = 'rsync -v {{#stage}}:%files {{@target}}:%files';
$options['shell-aliases']['pull-stage-data'] = 'sql-sync -v {{#stage}} {{@target}} && drush golocal';
$options['shell-aliases']['pull-stage-all'] = '!drush sql-sync -v {{#stage}} {{@target}} && drush rsync -v {{#stage}}:%files {{@target}}:%files && drush golocal';
$options['shell-aliases']['pull-live-files'] = 'rsync -v {{#prod}}:%files {{@target}}:%files';
$options['shell-aliases']['pull-live-data'] = '!drush sql-sync -v {{#prod}} {{@target}} --no-cache  && drush golocal';
$options['shell-aliases']['pull-live-all'] = '!drush sql-sync -v {{#prod}} {{@target}} --no-cache && drush rsync -v {{#prod}}:%files {{@target}}:%files && drush golocal';
