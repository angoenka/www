<?php

/**
 * Emailschedule form base class.
 *
 * @package    mustDo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseEmailscheduleForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'scdid'        => new sfWidgetFormInputHidden(),
      'userid'       => new sfWidgetFormInput(),
      'email'        => new sfWidgetFormInput(),
      'schedule'     => new sfWidgetFormInput(),
      'deleted'      => new sfWidgetFormInput(),
      'active'       => new sfWidgetFormInput(),
      'creationdate' => new sfWidgetFormDateTime(),
      'lastrundate'  => new sfWidgetFormDateTime(),
      'templateid'   => new sfWidgetFormInput(),
      'sortstring'   => new sfWidgetFormInput(),
      'subject'      => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'scdid'        => new sfValidatorPropelChoice(array('model' => 'Emailschedule', 'column' => 'scdid', 'required' => false)),
      'userid'       => new sfValidatorInteger(),
      'email'        => new sfValidatorString(array('max_length' => 100)),
      'schedule'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'deleted'      => new sfValidatorInteger(array('required' => false)),
      'active'       => new sfValidatorInteger(),
      'creationdate' => new sfValidatorDateTime(),
      'lastrundate'  => new sfValidatorDateTime(array('required' => false)),
      'templateid'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'sortstring'   => new sfValidatorString(array('max_length' => 100)),
      'subject'      => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('emailschedule[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Emailschedule';
  }


}
