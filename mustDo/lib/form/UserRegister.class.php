<?php
class UserRegister extends sfForm 
{
    public function configure()
    {
         $this->setWidgets(array(
            'user_name' => new sfWidgetFormInput(),
            'password' => new sfWidgetFormInputPassword(),
            'confirm_password' => new sfWidgetFormInputPassword(),
            'email' => new sfWidgetFormInput()
            ));
        $this->widgetSchema->setNameFormat('register[%s]');
        $this->setValidators(array(
            'user_name' => new sfValidatorString(array('required' => true)),
            'password' => new sfValidatorString(array('required' => true)),
            'confirm_password' => new sfValidatorString(array('required' => true)),
            'email' => new sfValidatorEmail(array('required' => true))
            ));            
        $this->validatorSchema->setPostValidator(new sfValidatorSchemaCompare('password','==','confirm_password'));
    }   
}