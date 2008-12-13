<?php

/**
 * Vocablog form base class.
 *
 * @package    mustDo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseVocablogForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'userid'  => new sfWidgetFormInputHidden(),
      'wordids' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'userid'  => new sfValidatorPropelChoice(array('model' => 'Vocablog', 'column' => 'userid', 'required' => false)),
      'wordids' => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('vocablog[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vocablog';
  }


}
