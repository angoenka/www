<?php

/**
 * User form base class.
 *
 * @package    mustDo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseUserForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'userid'                => new sfWidgetFormInputHidden(),
      'username'              => new sfWidgetFormInput(),
      'mainemail'             => new sfWidgetFormInput(),
      'deleted'               => new sfWidgetFormInput(),
      'active'                => new sfWidgetFormInput(),
      'password'              => new sfWidgetFormInput(),
      'joindate'              => new sfWidgetFormDateTime(),
      'activationcode'        => new sfWidgetFormInput(),
      'activationrequestdate' => new sfWidgetFormDateTime(),
      'activedate'            => new sfWidgetFormDateTime(),
      'deletedate'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'userid'                => new sfValidatorPropelChoice(array('model' => 'User', 'column' => 'userid', 'required' => false)),
      'username'              => new sfValidatorString(array('max_length' => 100)),
      'mainemail'             => new sfValidatorString(array('max_length' => 100)),
      'deleted'               => new sfValidatorInteger(array('required' => false)),
      'active'                => new sfValidatorInteger(),
      'password'              => new sfValidatorString(array('max_length' => 200)),
      'joindate'              => new sfValidatorDateTime(),
      'activationcode'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'activationrequestdate' => new sfValidatorDateTime(array('required' => false)),
      'activedate'            => new sfValidatorDateTime(array('required' => false)),
      'deletedate'            => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'User', 'column' => array('username'))),
        new sfValidatorPropelUnique(array('model' => 'User', 'column' => array('mainemail'))),
      ))
    );

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }


}
