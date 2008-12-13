<?php

/**
 * email actions.
 *
 * @package    mustDo
 * @subpackage email
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class emailActions extends sfActions
{
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex(sfWebRequest $request)
	{
		$this->form = new EmailScheduleForm();
		if($request->isMethod('post')){
			if($request->getParameter("add"))
			{
				$this->form->bind($request->getParameter('emailschedule'));
				if ($this->form->isValid()){

					$emailSchedule = new Emailschedule();

					$emailSchedule->setEmail($this->form->getValue('email'));
					$emailSchedule->setSchedule($this->form->getValue('schedule'));
					if($this->form->getValue('active') == "on"){
						$emailSchedule->setActive(1);
					}else{
						$emailSchedule->setActive(0);
					}
					$emailSchedule->setTemplateid($this->form->getValue('templateid'));
					$emailSchedule->setSortstring($this->form->getValue('sortstring'));
					$emailSchedule->setSubject($this->form->getValue('subject'));
					$emailSchedule->setUserid($this->getUser()->getAttribute('userId'));

					$today = getdate();
					$emailSchedule->setCreationdate($today['mday'].'-'.$today['mon'].'-'.$today['year'].' '.$today['hours'].':'.$today['minutes'].':'.$today['seconds']);
					$emailSchedule->save();
					
					
					$this->getUser()->setFlash('scheduleId', $emailSchedule->getScdid());
					
					$this->redirect('email/added');

				}
				
			}
		}
	}
	public function executeAdded(sfWebRequest $request)
	{
		if($this->getUser()->getFlash('scheduleId') != null ){
			$this->scheduleId = $this->getUser()->getFlash('scheduleId');
		}else{
			$this->redirect('email/index');
		}
	}
}
