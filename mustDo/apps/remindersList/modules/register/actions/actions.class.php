<?php

/**
 * register actions.
 *
 * @package    mustDo
 * @subpackage register
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class registerActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->register = new UserRegister();
    if($request->isMethod('post')){
        $this->register->bind($request->getParameter('register')); 
        if ($this->register->isValid())
        {
          $user = new User();
          $user->setUsername($this->register->getValue('user_name'));
          $user->setPassword($this->register->getValue('password'));
          $user->setMainemail($this->register->getValue('email'));
          $today = getdate();
          $user->setJoindate($today['mday'].'-'.$today['mon'].'-'.$today['year'].' '.$today['hours'].':'.$today['minutes'].':'.$today['seconds']);
          $user->save(); 
          $this->redirect('register/submit');
        } 
    }
  }
  public function executeSubmit(sfWebRequest $request)
  {      
  }

}
