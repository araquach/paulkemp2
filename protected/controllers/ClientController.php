<?php

class ClientController extends Controller
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
				'actions'=>array('redeem','details','winner_top','winner_mid','winner_ru','winner_ru2','winner_man'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('staff_view','client_find','find'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index','view','admin','delete','create','update'),
				'users'=>array('manager'),
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
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionStaff_view($id)
	{
		$model=$this->loadModel($id);
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Client']))
		{
			$model->attributes=$_POST['Client'];
			if($model->save())
						
			Yii::app()->user->setFlash('staff_view','<p>The prize has been redeemed</p>');	
		}
		
		$this->render('staff_view',array(
			'model'=>$model,
		));
	}
	
	
	
	
	public function actionWinner_man($id)
	
	{
		$model=$this->loadModel($id);
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Client']))
		{
			$model->attributes=$_POST['Client'];
			if($model->save())
			
				if($model->opt_in_out == 1)
				{
					$message = new YiiMailMessage;
					$message->view = 'voucher_man';
					$message->setBody(array('model'=>$model), 'text');
					$message->subject = 'PaulKemp';
					$message->addTo($model->phone.'@smsid.textapp.net');
					$message->from = ('enquiries@jakatasalon.co.uk');
					
					Yii::app()->mail->send($message);
					
					Yii::app()->user->setFlash('winner_man','<p>Thank you for entering '.ucfirst($model->first_name).'!<br>You will receive your voucher via text message shortly.<br>We look forward to seeing you in the salon soon.</p>');
				}
				else 
				{
				Yii::app()->user->setFlash('winner_man','<p>Thank\'s for your interest '.$model->first_name.'.<br>We hope to see you in the salon soon.');
				}
			
		}
		
		$this->render('winner_man',array(
			'model'=>$model,
		));
	}
	
	public function actionWinner_top($id)
	
	{
		$model=$this->loadModel($id);
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Client']))
		{
			$model->attributes=$_POST['Client'];
			if($model->save())
			
				if($model->opt_in_out == 1)
				{
					$message = new YiiMailMessage;
					$message->view = 'voucher_top';
					$message->setBody(array('model'=>$model), 'text');
					$message->subject = 'PaulKemp';
					$message->addTo($model->phone.'@smsid.textapp.net');
					$message->from = ('enquiries@jakatasalon.co.uk');
					
					Yii::app()->mail->send($message);
					
					Yii::app()->user->setFlash('winner_top','<p>Thank you for entering '.ucfirst($model->first_name).'!<br>You will receive your voucher via text message shortly.<br>We look forward to seeing you in the salon soon.</p>');
				}
				else 
				{
				Yii::app()->user->setFlash('winner_top','<p>Thank\'s for your interest '.$model->first_name.'.<br>We hope to see you in the salon soon.');
				}
			
		}
		
		$this->render('winner_top',array(
			'model'=>$model,
		));
	}
	
	public function actionWinner_mid($id)
	
	{
		$model=$this->loadModel($id);
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Client']))
		{
			$model->attributes=$_POST['Client'];
			if($model->save())
			
				if($model->opt_in_out == 1)
				{
					$message = new YiiMailMessage;
					$message->view = 'voucher_mid';
					$message->setBody(array('model'=>$model), 'text');
					$message->subject = 'PaulKemp';
					$message->addTo($model->phone.'@smsid.textapp.net');
					$message->from = ('enquiries@jakatasalon.co.uk');
					
					Yii::app()->mail->send($message);
					
					Yii::app()->user->setFlash('winner_mid','<p>Thank you for entering '.ucfirst($model->first_name).'!<br>You will receive your voucher via text message shortly.<br>We look forward to seeing you in the salon soon.</p>');
				}
				else 
				{
				Yii::app()->user->setFlash('winner_mid','<p>Thank\'s for your interest '.$model->first_name.'.<br>We hope to see you in the salon soon.');
				}
			
		}
		
		$this->render('winner_mid',array(
			'model'=>$model,
		));
	}
	
	public function actionWinner_ru($id)
	{
		$model=$this->loadModel($id);
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Client']))
		{
			$model->attributes=$_POST['Client'];
			if($model->save())
			
				if($model->opt_in_out == 1)
				{
					$message = new YiiMailMessage;
					$message->view = 'voucher_ru';
					$message->setBody(array('model'=>$model), 'text');
					$message->subject = 'PaulKemp';
					$message->addTo($model->phone.'@smsid.textapp.net');
					$message->from = ('enquiries@jakatasalon.co.uk');
					
					Yii::app()->mail->send($message);
					
					Yii::app()->user->setFlash('winner_ru','<p>Thank you for entering '.ucfirst($model->first_name).'!<br>You will receive your voucher via text message shortly.<br>We look forward to seeing you in the salon soon.</p>');
				}
				else 
				{
				Yii::app()->user->setFlash('winner_ru','<p>Thank\'s for your interest '.$model->first_name.'.<br>We hope to see you in the salon soon.');
				}
		}
		
		$this->render('winner_ru',array(
			'model'=>$model,
		));	}
	
	public function actionWinner_ru2($id)
	{
		$model=$this->loadModel($id);
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Client']))
		{
			$model->attributes=$_POST['Client'];
			if($model->save())
			
				if($model->opt_in_out == 1)
				{
					$message = new YiiMailMessage;
					$message->view = 'voucher_ru2';
					$message->setBody(array('model'=>$model), 'text');
					$message->subject = 'PaulKemp';
					$message->addTo($model->phone.'@smsid.textapp.net');
					$message->from = ('enquiries@jakatasalon.co.uk');
					
					Yii::app()->mail->send($message);
					
					Yii::app()->user->setFlash('winner_ru2','<p>Thank you for entering '.ucfirst($model->first_name).'!<br>You will receive your voucher via text message shortly.<br>We look forward to seeing you in the salon soon.</p>');
				}
				else 
				{
				Yii::app()->user->setFlash('winner_ru2','<p>Thank\'s for your interest '.$model->first_name.'.<br>We hope to see you in the salon soon.');
				}
			
		}
		
		$this->render('winner_ru2',array(
			'model'=>$model,
		));
	}
	
	public function actionRedeem()
	{
			$model=new Client;
			
	
			// collect user input data
			if(isset($_POST['Client']))
			{
				$model->attributes=$_POST['Client'];
				if($model->id > 50000)
				$this->redirect(array('winner_ru2','id'=>$model->id));
				if($model->id > 40000)
				$this->redirect(array('winner_man','id'=>$model->id));
				elseif($model->id>30000)
				$this->redirect(array('winner_ru','id'=>$model->id));
				elseif($model->id>20000)
				$this->redirect(array('winner_mid','id'=>$model->id));
				elseif($model->id>10000)
				$this->redirect(array('winner_top','id'=>$model->id));
			}
			// display the login form
			$this->render('redeem',array('model'=>$model));
	}
	
	public function actionDetails($id)
	
	{
		$this->render('details',array(
			'model'=>$this->loadModel($id),
		));
	}
	/**
	 * Searches for entrant by id
	 * allows staff to see details and keep track of offer.
	 * @param integer $id the ID of the model to be viewed
	 */
	public function actionFind()
	{
			$model=new Client;
			// collect user input data
			if(isset($_POST['Client']))
			{
				$model->attributes=$_POST['Client'];
				// validate user input and redirect to the previous page if valid
				$this->redirect(array('staff_view','id'=>$model->id));
			}
			// display the login form
			$this->render('find',array('model'=>$model));
	}

	
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Client']))
		{
			$model->attributes=$_POST['Client'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Client');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Client('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Client']))
			$model->attributes=$_GET['Client'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Client::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'Sorry - The code you entered is incorrect');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='client-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
