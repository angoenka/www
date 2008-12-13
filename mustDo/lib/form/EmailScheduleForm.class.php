<?php
class EmailScheduleForm extends BaseEmailscheduleForm
{

	public function configure()
	{
		/*
		 * unset Fields which are going to be filled automatically
		 */
		{
			unset($this->widgetSchema['deleted']);
			unset($this->widgetSchema['userid']);
			unset($this->widgetSchema['scdid']);
			unset($this->widgetSchema['creationdate']);
			unset($this->widgetSchema['lastrundate']);

			unset($this->validatorSchema['deleted']);
			unset($this->validatorSchema['userid']);
			unset($this->validatorSchema['scdid']);
			unset($this->validatorSchema['creationdate']);
			unset($this->validatorSchema['lastrundate']);
		}
		
		
		{
			/*
			 * set new validators for the fields
			 */
			$this->validatorSchema['email'] = new sfValidatorAnd(array(
			$this->validatorSchema['email'],
			new sfValidatorEmail(),
			));
			
			$this->validatorSchema['active'] = new sfValidatorString(array('required' => false));

			$this->validatorSchema['schedule'] = new sfValidatorAnd(array(
			$this->validatorSchema['schedule'],
			new sfValidatorString(array('required' => true)),
			));
			
			/*
			 * change the widget where ever required
			 */

			$this->widgetSchema['active'] = new sfWidgetFormInputCheckbox();

			/*
			 * set default values for the input fields
			 */
			$this->setDefault('active', 'checked');
			

			/*
			 * provide new lables to the fields
			 */

			$this->widgetSchema->setLabels(array(
 		'email'    => 'Email',
  		'schedule'   => 'Schedule Date and Time',
  		'templateid' => 'Template ID',
  		'sortstring' => 'Sort String',
		'subject' => 'Subject'
		));

		}
	}
}
