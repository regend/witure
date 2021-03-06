<?php

/**
 * BaseCompany
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property string $company_name
 * @property string $address
 * @property string $description
 * @property string $contactor
 * @property string $phone_number
 * @property string $email
 * @property boolean $is_activated
 * @property string $token
 * @property sfGuardUser $sfGuardUser
 * @property Doctrine_Collection $Node
 * 
 * @method integer             getUserId()       Returns the current record's "user_id" value
 * @method string              getCompanyName()  Returns the current record's "company_name" value
 * @method string              getAddress()      Returns the current record's "address" value
 * @method string              getDescription()  Returns the current record's "description" value
 * @method string              getContactor()    Returns the current record's "contactor" value
 * @method string              getPhoneNumber()  Returns the current record's "phone_number" value
 * @method string              getEmail()        Returns the current record's "email" value
 * @method boolean             getIsActivated()  Returns the current record's "is_activated" value
 * @method string              getToken()        Returns the current record's "token" value
 * @method sfGuardUser         getSfGuardUser()  Returns the current record's "sfGuardUser" value
 * @method Doctrine_Collection getNode()         Returns the current record's "Node" collection
 * @method Company             setUserId()       Sets the current record's "user_id" value
 * @method Company             setCompanyName()  Sets the current record's "company_name" value
 * @method Company             setAddress()      Sets the current record's "address" value
 * @method Company             setDescription()  Sets the current record's "description" value
 * @method Company             setContactor()    Sets the current record's "contactor" value
 * @method Company             setPhoneNumber()  Sets the current record's "phone_number" value
 * @method Company             setEmail()        Sets the current record's "email" value
 * @method Company             setIsActivated()  Sets the current record's "is_activated" value
 * @method Company             setToken()        Sets the current record's "token" value
 * @method Company             setSfGuardUser()  Sets the current record's "sfGuardUser" value
 * @method Company             setNode()         Sets the current record's "Node" collection
 * 
 * @package    devpuppy
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCompany extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('companies');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'unique' => true,
             ));
        $this->hasColumn('company_name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('address', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('contactor', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('phone_number', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('is_activated', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('token', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Node', array(
             'local' => 'id',
             'foreign' => 'company_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}