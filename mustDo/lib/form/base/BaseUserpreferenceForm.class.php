<?php

/**
 * Userpreference form base class.
 *
 * @package    mustDo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseUserpreferenceForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'preferenceid'     => new sfWidgetFormInputHidden(),
      'userid'           => new sfWidgetFormInput(),
      'language'         => new sfWidgetFormInput(),
      'ourupdates'       => new sfWidgetFormInput(),
      'admincontact'     => new sfWidgetFormInput(),
      'agreementversion' => new sfWidgetFormInput(),
      'themeid'          => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'preferenceid'     => new sfValidatorPropelChoice(array('model' => 'Userpreference', 'column' => 'preferenceid', 'required' => false)),
      'userid'           => new sfValidatorInteger(),
      'language'         => new sfValidatorString(array('max_length' => 45)),
      'ourupdates'       => new sfValidatorInteger(),
      'admincontact'     => new sfValidatorInteger(),
      'agreementversion' => new sfValidatorString(array('max_length' => 45)),
      'themeid'          => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('userpreference[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Userpreference';
  }


}
