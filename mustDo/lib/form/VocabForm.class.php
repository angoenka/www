<?php

/**
 * Vocab form.
 *
 * @package    mustDo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class VocabForm extends BaseVocabForm
{
	public function configure()
	{
		/*
		 * unset Fields which are going to be filled automatically
		 */
		{
			unset($this->widgetSchema['vocabid']);
			unset($this->validatorSchema['vocabid']);
			
		}


		{
			/*
			 * set new validators for the fields
			 */
			$this->validatorSchema['scdid'] = new sfValidatorAnd(array(
			$this->validatorSchema['scdid'],
			new sfValidatorString(array('required' => true)),
			));
				
			$this->validatorSchema['noofwords'] = new sfValidatorAnd(array(
			$this->validatorSchema['noofwords'],
			new sfValidatorString(array('required' => true)),
			));

			
			$this->validatorSchema['typeofwords'] = new sfValidatorAnd(array(
			$this->validatorSchema['typeofwords'],
			new sfValidatorString(array('required' => true)),
			));
				
			/*
			 * change the widget where ever required
			 */
			{
			/*
			 * create array for number of words dropdown
			 */
			$noOfWords = array();
			for($i=0; $i<intval( sfConfig::get('app_max_vocab_words')); $i++){
				array_push($noOfWords, $i + 1);
			}

			
			
			$this->widgetSchema['noofwords'] = new sfWidgetFormChoice(array('choices' => $noOfWords)) ;
			$this->widgetSchema['language'] = new sfWidgetFormInputHidden();
			}

			/*
			 * set default values for the input fields
			 */
			$this->setDefault('noofwords', intval( sfConfig::get('app_max_vocab_words')) );
			$this->setDefault('language', '0');
				

			/*
			 * provide new lables to the fields
			 */

			$this->widgetSchema->setLabels(array(
 		 'scdid'       => "Schedule id",
      'noofwords'   => "Number of words",
      'typeofwords' => "Type of Words",
		));

		}
	}
}
