<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
  'active' => 'boyakitter',

  // database as existance
  'boyakitter' => array(
    'type' => 'mysqli',
    'connection' => array(
      'hostname' => '192.168.1.15',
      'database' => 'boyakitter',
      'username' => 'toshiki',
      'password' => 'hogehoge',
      'persistent' => FALSE,
    ),
    'table_prefix' => '',
    'charset' => 'utf8',
    'caching' => false,
    'profiling' => true,
  ),
);
