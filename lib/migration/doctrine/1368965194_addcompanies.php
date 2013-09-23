<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addcompanies extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('companies', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'user_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'unique' => true,
              'length' => 8,
             ),
             'company_name' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'address' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'description' => 
             array(
              'type' => 'string',
              'length' => 4000,
             ),
             'contactor' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'phone_number' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 50,
             ),
             'email' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'is_activated' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 0,
              'length' => 25,
             ),
             'token' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'unique' => true,
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
        $this->dropTable('companies');
    }
}