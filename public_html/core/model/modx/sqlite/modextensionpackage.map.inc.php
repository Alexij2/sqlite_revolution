<?php
/**
 * @package modx
 * @subpackage sqlite
 */
$xpdo_meta_map['modExtensionPackage']= array (
  'package' => 'modx',
  'version' => '1.1',
  'table' => 'extension_packages',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'namespace' => 'core',
    'name' => 'core',
    'path' => NULL,
    'table_prefix' => '',
    'service_class' => '',
    'service_name' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  'fieldMeta' => 
  array (
    'namespace' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => '40',
      'phptype' => 'string',
      'null' => false,
      'default' => 'core',
      'index' => 'index',
    ),
    'name' =>
    array (
      'dbtype' => 'nvarchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => 'core',
      'index' => 'index',
    ),
    'path' =>
    array (
      'dbtype' => 'nvarchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'table_prefix' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'service_class' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'service_name' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'created_at' =>
    array (
      'dbtype' => 'text',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'updated_at' =>
    array (
      'dbtype' => 'text',
      'phptype' => 'datetime',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'namespace' => 
    array (
      'alias' => 'namespace',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'namespace' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'name' =>
    array (
      'alias' => 'name',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' =>
      array (
        'name' =>
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'aggregates' => 
  array (
    'Namespace' => 
    array (
      'class' => 'modNamespace',
      'local' => 'namespace',
      'foreign' => 'name',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
