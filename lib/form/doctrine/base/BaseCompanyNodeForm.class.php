<?php

/**
 * CompanyNode form base class.
 *
 * @method CompanyNode getObject() Returns the current form's model object
 *
 * @package    devpuppy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCompanyNodeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'company_id' => new sfWidgetFormInputHidden(),
      'node_id'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'company_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('company_id')), 'empty_value' => $this->getObject()->get('company_id'), 'required' => false)),
      'node_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('node_id')), 'empty_value' => $this->getObject()->get('node_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('company_node[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CompanyNode';
  }

}
