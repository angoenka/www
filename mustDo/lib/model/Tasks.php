<?php

class Tasks extends BaseTasks
{
    public function getTasks($sort, $way)
    {
        $user = sfContext::getInstance()->getUser();  
        $userId = $user->getAttribute('userId');
        $c = new Criteria();
        if($sort == "active"){
            if($way == 1){
                $c->addDescendingOrderByColumn(TasksPeer::ACTIVE);
            }
            else{
                $c->addAscendingOrderByColumn(TasksPeer::ACTIVE);
            }
        }
        else if($sort == "taskpriority"){
            if($way == 1){
                $c->addDescendingOrderByColumn(TasksPeer::TASKPRIORITY);
            }
            else{
                $c->addAscendingOrderByColumn(TasksPeer::TASKPRIORITY);
            }
        }
        else if($sort == "taskString"){
            if($way == 1){
                $c->addDescendingOrderByColumn(TasksPeer::TASKSTRING);
            }
            else{
                $c->addAscendingOrderByColumn(TasksPeer::TASKSTRING);
            }
        }
        else if($sort == "creationDate"){
            if($way == 1){
                $c->addDescendingOrderByColumn(TasksPeer::CREATIONDATE);
            }
            else{
                $c->addAscendingOrderByColumn(TasksPeer::CREATIONDATE);
            }
        }
        else if($sort == "updateDate"){
            if($way == 1){
                $c->addDescendingOrderByColumn(TasksPeer::UPDATEDATE);
            }
            else{
                $c->addAscendingOrderByColumn(TasksPeer::UPDATEDATE);
            }
        }
        $c->add(TasksPeer::USERID, $userId);
        $c->add(TasksPeer::DELETED, 0);
        $result = TasksPeer::doSelect($c);
        return $result;
    }
    
    public function changeState($taskId, $stateNum)
    {
        $user = sfContext::getInstance()->getUser();  
        $userId = $user->getAttribute('userId');
        $c = new Criteria();
        $c->add(TasksPeer::USERID, $userId);
        $c->add(TasksPeer::TASKID, $taskId);
        $result = TasksPeer::doSelectOne($c);
        if($result != null && $result->getActive() == 0 && $stateNum == 0)
            $result->setActive(1);
        if($result != null && $result->getActive() == 1 && $stateNum == 1)
            $result->setActive(0);
        $result->save();
    }
    
    public function deleteTask($taskId)
    {
        $user = sfContext::getInstance()->getUser();  
        $userId = $user->getAttribute('userId');
        $c = new Criteria();
        $c->add(TasksPeer::USERID, $userId);
        $c->add(TasksPeer::TASKID, $taskId);
        $result = TasksPeer::doSelectOne($c);
        $result->setDeleted(1);
        $result->save();
    }
}
