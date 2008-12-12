<?php

/**
 * login actions.
 *
 * @package    mustDo
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class loginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->login = new Login();
  }
  public function executeSubmit(sfWebRequest $request)
  {
    $user = new User();
    $c = new Criteria();
    $c->add(UserPeer::USERNAME,$request->getParameter('user_name'));
    $c->add(UserPeer::PASSWORD, $request->getParameter('password'));
    $user_array = UserPeer::doSelect($c);
    $user = $this->getUser();
    if(sizeof($user_array) <= 0)
    {
        $user->setAuthenticated(false);
        return sfView::ERROR;
    }
    $user_class = new User();
    $user_class = $user_array[0];
    $user->setAttribute('userId', $user_class->getUserid());
    $user->setAuthenticated(true);
  }
}