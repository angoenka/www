<?php

/**
 * Vocab form base class.
 *
 * @package    mustDo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseVocabForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'vocabid'     => new sfWidgetFormInputHidden(),
      'scdid'       => new sfWidgetFormInput(),
      'noofwords'   => new sfWidgetFormInput(),
      'typeofwords' => new sfWidgetFormInput(),
      'language'    => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'vocabid'     => new sfValidatorPropelChoice(array('model' => 'Vocab', 'column' => 'vocabid', 'required' => false)),
      'scdid'       => new sfValidatorInteger(),
      'noofwords'   => new sfValidatorInteger(),
      'typeofwords' => new sfValidatorInteger(),
      'language'    => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('vocab[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vocab';
  }


}
