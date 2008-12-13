<?php

/**
 * Actioncode form base class.
 *
 * @package    mustDo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseActioncodeForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'actioncode' => new sfWidgetFormInputHidden(),
      'actionname' => new sfWidgetFormInput(),
      'actiondesc' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'actioncode' => new sfValidatorPropelChoice(array('model' => 'Actioncode', 'column' => 'actioncode', 'required' => false)),
      'actionname' => new sfValidatorString(array('max_length' => 100)),
      'actiondesc' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('actioncode[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Actioncode';
  }


}
