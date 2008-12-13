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
        
        $this->max = sfConfig::get('app_max_task');
        
		if($userSession->getAttribute('userId') == null){
			$userSession->setAttribute('userId', 1);
		}
		
		if($request->isMethod('post')){
			$this->form->bind($request->getParameter('task'));
			if ($this->form->isValid())
			{


				$taskString = $this->form->getValue('taskString');
				$taskPriority = $this->form->getValue('taskPriority');
				$taskDescription = $this->form->getValue('taskDescription');
				$active = $this->form->getValue('active');
                
				$task = new Tasks();
				$task->setUserid($userSession->getAttribute('userId'));
				if($this->form->getValue('active') == "on"){
					$task->setActive(1);
				}else{
					$task->setActive(0);
				}
				
				$task->setDeleted(0);
				$task->setTaskdesciption($this->form->getValue('taskDescription'));
				$task->setTaskstring($this->form->getValue('taskString'));
				$task->setTaskpriority(intval($taskPriority)+1);
				$task->save();
		
				$this->redirect('task/thankyou?'.http_build_query($this->form->getValues()));
			}
		}
	}
    
    public function executeEdit(sfWebRequest $request)
    {
        $this->form = new TasksForm();
        $userSession = $this->getUser();
        
        if($request->hasParameter('edittask') === false)
            $this->redirect('task/index');
        
        $taskId = $request->getParameter('edittask');
        
        $result = TasksPeer::retrieveByPK($taskId);
        
        if($result == null)
            $this->redirect('task/index'); 
            
        if($result->getUserid() != $userSession->getAttribute('userId'))
            $this->redirect('task/index'); 
            
        if($request->isMethod('post')){
            $this->form->bind($request->getParameter('task'));
            $taskPriority = $this->form->getValue('taskPriority'); 
            if($this->form->getValue('active') == "on"){
                $result->setActive(1);
            }else{
                $result->setActive(0);
            }
            $result->setTaskdesciption($this->form->getValue('taskDescription'));
            $result->setTaskstring($this->form->getValue('taskString'));
            $result->setTaskpriority(intval($taskPriority)+1);
            $result->save();
            $this->redirect('task/thankyou');
        }
        else{$this->form->setDefaults(array(
            'taskString'    => $result->getTaskstring(),
            'taskPriority' => $result->getTaskpriority() -1,
            'taskDescription' => $result->getTaskdesciption(),
            'active' => $result->getActive()
        ));
        }
    } 

	public function executeThankyou($request)
	{
	}

    public function executeShow($request)
    {
        $t = new Tasks();
        $order = $request->getParameter('order');
        $sort =  $request->getParameter('sort');
        $start = $request->getParameter('startNum');
        $this->final = array();
        $this->result = $t->getTasks($sort, $order); 
        if($request->hasParameter('startNum') === false || is_numeric($start) === false || $start < 0 || $start > sizeof($this->result))
                    $start = 0;
        if($request->hasParameter('order') === false)$order = 0;
        if($request->hasParameter('sort') === false)$sort = 'creationDate';
        
        $this->query_str = array('order' => $order, 'sort' => $sort, 'startNum' => $start); 
        
        for($i = $start, $k = 0; $k < sfConfig::get('app_max_task_table_size') && $i < sizeof($this->result); $i++, $k++)
        {
            array_push($this->final,$this->result["$i"]); 
        }
    }
    public function executeStatechange($request)
    {
        $t = new Tasks();
        $order = $request->getParameter('order');
        $sort =  $request->getParameter('sort');
        $start = $request->getParameter('startNum');
        $this->result = $t->getTasks($sort, $order); 
        
        if($request->hasParameter('startNum') === false || is_numeric($start) === false || $start < 0 || $start > sizeof($this->result))
        if($request->hasParameter('order') == false)$order = 0;
        if($request->hasParameter('sort') == false)$sort = 'creationDate';
        
        $this->query_str = array('order' => $order, 'sort' => $sort, 'startNum' => $start); 
        
        if($request->hasParameter('activate'))
            $this->result = $t->changeState($request->getParameter('activate'), 0);
        else if($request->hasParameter('deactivate'))
            $this->result = $t->changeState($request->getParameter('deactivate'), 1);
        $this->redirect('task/show?'.http_build_query($this->query_str));
    }
    
    public function executeDelete($request)
    {    
        $t = new Tasks();
        $order = $request->getParameter('order');
        $sort =  $request->getParameter('sort');
        $start = $request->getParameter('startNum');
        $this->result = $t->getTasks($sort, $order); 
        
        if($request->hasParameter('startNum') === false || is_numeric($start) === false || $start < 0 || $start > sizeof($this->result))
        if($request->hasParameter('order') == false)$order = 0;
        if($request->hasParameter('sort') == false)$sort = 'creationDate';
        
        $this->query_str = array('order' => $order, 'sort' => $sort, 'startNum' => $start); 
        
        if($request->hasParameter('delete'))
            $this->result = $t->deleteTask($request->getParameter('delete'));
        $this->redirect('task/show?'.http_build_query($this->query_str));
    }
}
