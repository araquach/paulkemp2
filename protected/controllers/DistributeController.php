<?php

class DistributeController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
		{
			return array(
				'accessControl', // perform access control for CRUD operations
				'postOnly + delete', // we only allow deletion via POST request
			);
		}
	
		/**
		 * Specifies the access control rules.
		 * This method is used by the 'accessControl' filter.
		 * @return array access control rules
		 */
		public function accessRules()
		{
			return array(
				array('allow',  // allow all users to perform 'index' and 'view' actions
					'actions'=>array('distribute'),
					'users'=>array('*'),
				),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
					'actions'=>array('update','index','view','admin','delete'),
					'users'=>array('@'),
				),
				array('allow', // allow admin user to perform 'admin' and 'delete' actions
					'actions'=>array('admin','delete'),
					'users'=>array('admin'),
				),
				array('deny',  // deny all users
					'users'=>array('*'),
				),
			);
		}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	
	
	public function actionCompanyEmail()
	{
		$this->render('//mail/company_email',array('model'=>$model));
	}
	
	public function actionDistribute()
		{
			$model=new Distribute;
	
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['Distribute']))
			{
				$model->attributes=$_POST['Distribute'];
				if($model->validate())
				{
					$message = new YiiMailMessage;
					$message->view = 'company_email';
					$message->setBody(array('model'=>$model), 'text/html');
					$message->subject = 'Paul Kemp Hairdressing Special Offer';
					$message->addTo($model->email);
					$message->from = ('info@paulkemphairdressing.com');
					
					Yii::app()->mail->send($message);
					
					Yii::app()->user->setFlash('application','Thanks for sending the emails');
				}
			}
			
			$this->render('distribute',array('model'=>$model));
		}
	

		/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='applicant-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
