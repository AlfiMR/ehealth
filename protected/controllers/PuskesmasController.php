<?php

class PuskesmasController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'expression'=>'$user->isAdmin()',
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'expression'=>'$user->isAdmin()',
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Puskesmas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Puskesmas']))
		{
			$model->attributes=$_POST['Puskesmas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['Puskesmas']))
		{
			$model->attributes=$_POST['Puskesmas'];
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
		$dataProvider=new CActiveDataProvider('Puskesmas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->layout = 'layout-admin';
		$puskesmas = "";
		$model = Puskesmas::model()->findAll();
		foreach ($model as $key => $value) {
			$no = $key+1;
			$puskesmas .= " <tr>
							<td>$no</td>
                            <td>$value->nama_puskesmas</td>
                            <td>$value->alamat</td>
                            <td>$value->no_tlp</td>
                            <td>
                            ".CHtml::image(Yii::app()->request->baseUrl. '/images/puskesmas/'.$value->image,"$value->nama_puskesmas", array('width'=>50,'height'=>50))."
                            </td>

                            <td>
	                            <div class='pul-right'>
		                            ".CHtml::link('<i class="fa fa-eye"></i>',array('puskesmas/view','id'=>$value->id),array('class'=>'btn btn-xs btn-info margin-inline','title'=>'Lihat'))."
		                            ".CHtml::link('<i class="fa fa-trash"></i>',array('puskesmas/delete','id'=>$value->id),array('class'=>'btn btn-xs btn-danger margin-inline','title'=>'Hapus'))."
		                            ".CHtml::link('<i class="fa fa-pencil"></i>',array('puskesmas/update','id'=>$value->id),array('class'=>'btn btn-xs btn-success margin-inline','title'=>'Edit'))."
	                            </div>
                            </td>
                            
                        </tr>";
		}
		$this->render('admin',array(
			'puskesmas'=>$puskesmas,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Puskesmas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Puskesmas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Puskesmas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='puskesmas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
