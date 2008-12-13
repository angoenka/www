<?php

/**
 * Facilitycode form base class.
 *
 * @package    mustDo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseFacilitycodeForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'facilitycode' => new sfWidgetFormInputHidden(),
      'facilityname' => new sfWidgetFormInput(),
      'facilitydesc' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'facilitycode' => new sfValidatorPropelChoice(array('model' => 'Facilitycode', 'column' => 'facilitycode', 'required' => false)),
      'facilityname' => new sfValidatorString(array('max_length' => 100)),
      'facilitydesc' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('facilitycode[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Facilitycode';
  }


}
