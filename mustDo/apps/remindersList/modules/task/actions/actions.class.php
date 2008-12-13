<?php

/**
 * tasks actions.
 *
 * @package    mustDo
 * @subpackage tasks
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class taskActions extends sfActions
{
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex(sfWebRequest $request)
	{
		$this->form = new TasksForm();
		$userSession = $this->getUser();
		//TODO remove this userid insertion this is just for test
		if($userSession->getAttribute('userId') == null){
			$userSession->setAttribute('userId', 1);
		}
		
		if($request->isMethod('post')){
			$this->form->bind($request->getParameter('task'));
			if ($this->form->isValid())
			{


				$taskString = $request->getParameter('taskString');
				$taskPriority = $this->form->getValue('taskPriority');
				$taskDescription = $request->getParameter('taskDescription');
				$active = $request->getParameter('active');

				$task = new Tasks();
				$task->setUserid($userSession->getAttribute('userId'));
				if($this->form->getValue('active') == "on"){
					$task->setActive(1);
				}else{
					$task->setActive(0);
				}
				
				$task->setDeleted(0);
				$task->setTaskdescription($this->form->getValue('taskDescription'));
				$task->setTaskstring($this->form->getValue('taskString'));
				$task->setTaskpriority(intval($taskPriority));
				$task->save();
				
				//$task=>get

				$params = array(
    				'taskString'    => $request->getParameter('taskString'),
    				'taskPriority'   => $request->getParameter('taskPriority'),
    				'taskDescription' => $request->getParameter('taskDescription'),
  					'active' => $request->getParameter('active')
				);

				$this->redirect('task/thankyou?'.http_build_query($this->form->getValues()));
			}
		}
	}

	public function executeThankyou($request)
	{
	}


}
