<?php

/**
 * Logdb form base class.
 *
 * @package    mustDo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseLogdbForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'logid'             => new sfWidgetFormInputHidden(),
      'entrydate'         => new sfWidgetFormDateTime(),
      'actioncode'        => new sfWidgetFormInput(),
      'actiondescription' => new sfWidgetFormInput(),
      'userid'            => new sfWidgetFormInput(),
      'logtype'           => new sfWidgetFormInput(),
      'deleted'           => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'logid'             => new sfValidatorPropelChoice(array('model' => 'Logdb', 'column' => 'logid', 'required' => false)),
      'entrydate'         => new sfValidatorDateTime(),
      'actioncode'        => new sfValidatorInteger(),
      'actiondescription' => new sfValidatorString(array('max_length' => 45)),
      'userid'            => new sfValidatorInteger(),
      'logtype'           => new sfValidatorInteger(),
      'deleted'           => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('logdb[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Logdb';
  }


}
