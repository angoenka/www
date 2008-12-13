<?php

/**
 * Tasks form base class.
 *
 * @package    mustDo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseTasksForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'taskid'         => new sfWidgetFormInputHidden(),
      'scdids'         => new sfWidgetFormInput(),
      'userid'         => new sfWidgetFormInput(),
      'taskpriority'   => new sfWidgetFormInput(),
      'taskstring'     => new sfWidgetFormInput(),
      'taskdesciption' => new sfWidgetFormTextarea(),
      'deleted'        => new sfWidgetFormInput(),
      'active'         => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'taskid'         => new sfValidatorPropelChoice(array('model' => 'Tasks', 'column' => 'taskid', 'required' => false)),
      'scdids'         => new sfValidatorString(array('max_length' => 200)),
      'userid'         => new sfValidatorInteger(),
      'taskpriority'   => new sfValidatorInteger(),
      'taskstring'     => new sfValidatorString(array('max_length' => 200)),
      'taskdesciption' => new sfValidatorString(array('required' => false)),
      'deleted'        => new sfValidatorInteger(array('required' => false)),
      'active'         => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('tasks[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tasks';
  }


}
