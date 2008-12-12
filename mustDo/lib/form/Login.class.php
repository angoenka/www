<?php 
class Login extends sfForm
{
    public function configure()
    {
        $this->setWidgets(array(
        //TODO: add validators etc in next change.
            'user_name' => new sfWidgetFormInput(),
            'password' => new sfWidgetFormInputPassword()
            ));
    }
}