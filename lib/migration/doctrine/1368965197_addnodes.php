<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addnodes extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('nodes', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 150,
             ),
             'gw_id' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'unique' => true,
              'length' => 50,
             ),
             'description' => 
             array(
              'type' => 'string',
              'length' => 1000,
             ),
             'civic_number' => 
             array(
              'type' => 'string',
              'length' => 20,
             ),
             'street_name' => 
             array(
              'type' => 'string',
              'length' => 150,
             ),
             'city' => 
             array(
              'type' => 'string',
              'length' => 150,
             ),
             'province' => 
             array(
              'type' => 'string',
              'length' => 150,
             ),
             'country' => 
             array(
              'type' => 'string',
              'length' => 150,
             ),
             'postal_code' => 
             array(
              'type' => 'string',
              'length' => 15,
             ),
             'public_phone_number' => 
             array(
              'type' => 'string',
              'length' => 50,
             ),
             'public_email' => 
             array(
              'type' => 'string',
              'length' => 150,
             ),
             'mass_transit_info' => 
             array(
              'type' => 'string',
              'length' => 500,
             ),
             'deployment_status' => 
             array(
              'type' => 'string',
              'length' => 20,
             ),
             'last_heartbeat_at' => 
             array(
              'type' => 'timestamp',
              'length' => 25,
             ),
             'last_heartbeat_ip' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'last_heartbeat_sys_uptime' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'last_heartbeat_sys_memfree' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'last_heartbeat_sys_load' => 
             array(
              'type' => 'float',
              'length' => NULL,
             ),
             'last_heartbeat_wifidog_uptime' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'company_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
        	 'com_image' =>
        	 array(
              'type' => 'string',
              'length' => 150,
        	 ),
        	 'announcement' =>
        	 array(
              'type' => 'string',
              'length' => 1000,
        	 ),
        	 'redirect_to' =>
        	 array(
             'type' => 'string',
             'length' => 255,
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
        $this->dropTable('nodes');
    }
}