<?php 
class TasksForm extends sfForm
{
  protected static $taskPriority = array('1', '2', '3', '4', '5');
  
  public function configure()
  {
    $this->setWidgets(array(
      'taskString'    => new sfWidgetFormInput(),
      'taskPriority' => new sfWidgetFormSelect(array('choices' => self::$taskPriority)),
      'taskDescription' => new sfWidgetFormTextarea(),
      'active' => new sfWidgetFormInputCheckbox()
    ));
    
    $this->widgetSchema->setLabels(array(
 		'taskString'    => 'Task name',
  		'taskPriority'   => 'Task Priority',
  		'taskDescription' => 'Task Description',
  		'active' => "Active"
	));
	
	$this->setDefault('taskPriority', '2');
	$this->setDefault('active', 'checked');
	
	$this->widgetSchema->setNameFormat('task[%s]');
	
	
	$this->setValidators(array(
      'taskString'    => new sfValidatorString(array('required' => true, 'max_length' => 400)),
      'taskPriority' => new sfValidatorChoice(array('choices' => array_keys(self::$taskPriority))),
      'taskDescription' => new sfValidatorString(array('max_length' => 1000)),
	  'active' => new sfValidatorString(array('required' => false))
    ));   
  }
}
