<?php
return array (
  'backend' => 
  array (
    'frontName' => 'admin',
  ),
  'install' => 
  array (
    'date' => 'Fri, 20 Nov 2015 08:11:26 +0000',
  ),
  'crypt' => 
  array (
    'key' => '1a2f574b9fa432a37246d0d9ee363c1b',
  ),
  'session' => 
  array (
    'save' => 'redis',
    'redis' => 
    array (
      'host' => 'redis',
      'port' => '6379',
      'password' => '',
      'timeout' => '2.5',
      'persistent_identifier' => '',
      'database' => '2',
      'compression_threshold' => '2048',
      'compression_library' => 'gzip',
      'log_level' => '4',
      'max_concurrency' => '6',
      'break_after_frontend' => '5',
      'break_after_adminhtml' => '30',
      'first_lifetime' => '600',
      'bot_first_lifetime' => '60',
      'bot_lifetime' => '7200',
      'disable_locking' => '0',
      'min_lifetime' => '60',
      'max_lifetime' => '2592000',
    ),
  ),
  'db' => 
  array (
    'table_prefix' => '',
    'connection' => 
    array (
      'default' => 
      array (
        'host' => 'db',
        'dbname' => 'magento',
        'username' => 'magento',
        'password' => 'magento',
        'active' => '1',
        'model' => 'mysql4',
        'engine' => 'innodb',
        'initStatements' => 'SET NAMES utf8;',
      ),
    ),
  ),
  'resource' => 
  array (
    'default_setup' => 
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'cache_types' => 
  array (
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'full_page' => 0,
    'translate' => 1,
    'config_webservice' => 1,
    'compiled_config' => 1,
    'customer_notification' => 1,
  ),
  'system' => 
  array (
    'default' => 
    array (
      'dev' => 
      array (
        'debug' => 
        array (
          'debug_logging' => '0',
        ),
      ),
    ),
  ),
  'MAGE_MODE' => 'default',
  'cache' => 
  array (
    'frontend' => 
    array (
      'default' => 
      array (
        'backend' => 'Cm_Cache_Backend_Redis',
        'backend_options' => 
        array (
          'server' => 'redis',
          'database' => '0',
          'port' => '6379',
        ),
      ),
      'page_cache' => 
      array (
        'backend' => 'Cm_Cache_Backend_Redis',
        'backend_options' => 
        array (
          'server' => 'redis',
          'database' => '1',
          'port' => '6379',
          'compress_data' => '1',
        ),
      ),
    ),
  ),
);
