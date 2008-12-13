<?php

/**
 * email actions.
 *
 * @package    mustDo
 * @subpackage email
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class vocabActions extends sfActions
{
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex(sfWebRequest $request)
	{
		$userSession = $this->getUser();
		$this->form = new VocabForm();
		if($request->isMethod('post')){
			if($request->getParameter("add"))
			{

				$this->form->bind($request->getParameter('vocab'));
				if ($this->form->isValid()){

					if(EmailschedulePeer::retrieveByScheduleIdAndUserId($userSession->getAttribute('userId'), $this->form->getValue('scdid')) == null)
						$this->forwardIf(EmailschedulePeer::retrieveByScheduleIdAndUserId($userSession->getAttribute('userId'), $this->form->getValue('scdid')) == null, 'vocab', 'index' );;

					$vocab = new Vocab();

					$vocab->setScdid($this->form->getValue('scdid'));
					$vocab->setNoofwords($this->form->getValue('noofwords'));

					$vocab->setTypeofwords($this->form->getValue('typeofwords'));
					$vocab->setLanguage($this->form->getValue('language'));

					$vocab->save();


					$this->getUser()->setFlash('vocabID', $vocab->getVocabid());

					$this->redirect('vocab/added');

				}

			}
		}
	}
	public function executeAdded(sfWebRequest $request)
	{
		if($this->getUser()->getFlash('vocabID') != null ){
			$this->scheduleId = $this->getUser()->getFlash('vocabID');
		}else{
			$this->redirect('vocab/index');
		}
	}
}
