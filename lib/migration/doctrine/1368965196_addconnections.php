<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addconnections extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('connections', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'node_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'token' => 
             array(
              'type' => 'string',
              'unique' => true,
              'notnull' => true,
              'length' => 255,
             ),
             'status' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'mac' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'ip' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'auth_type' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'auth_sub_type' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'identity' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'incoming' => 
             array(
              'type' => 'float',
              'default' => 0,
              'length' => NULL,
             ),
             'outgoing' => 
             array(
              'type' => 'float',
              'default' => 0,
              'length' => NULL,
             ),
             'user_agent' => 
             array(
              'type' => 'string',
              'length' => 500,
             ),
             'disconnect_reason' => 
             array(
              'type' => 'string',
              'length' => 1000,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('connections');
    }
}