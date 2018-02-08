<?php

class RumahSakitController extends Controller
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
				'actions'=>array('index','view','rumahSakit'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'expression'=>'$user->isAdmin() || $user->isAdminRumkit()',
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'expression'=>'$user->isAdmin() || $user->isAdminRumkit()',
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
		$this->layout = 'layout-admin';
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionRumahSakit($idrumkit)
	{
		$this->layout = 'profil-rumahsakit';
		$idrumkit = $idrumkit;
		$this->render('profil-rumahsakit',array('idrumkit'=>$idrumkit));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->layout = 'layout-admin';
		$model=new RumahSakit;
		$model2=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RumahSakit'], $_POST['User']))
		{
			$model->attributes=$_POST['RumahSakit'];
			$image = CUploadedFile::getInstance($model,'image');
			if($image == null){
				echo "-";
			}else{
				$nm_file = md5($model->id).'rumkit-.'.$image->getExtensionName();
				$model->image = $nm_file;
			}
			

			$model2->attributes=$_POST['User'];
			$model2->level = 2;

			if($model2->save())
			{
				$model->id_user = $model2->id;
				$model->save(false);
				$image->saveAs(Yii::app()->basePath. '/../images/rumah-sakit/' . $nm_file);
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'model2'=>$model2,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$this->layout = 'layout-admin';
		$model=$this->loadModel($id);
		$model2=User::model()->findByPk($model->id_user);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		// $model=new RumahSakit;
		// $model2=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RumahSakit'], $_POST['User']))
		{
			$model->attributes=$_POST['RumahSakit'];
			$image = CUploadedFile::getInstance($model,'image');
			if($image == null){
				echo "-";
			}else{
				$nm_file = md5($model->id).'rumkit-.'.$image->getExtensionName();
				$model->image = $nm_file;
			}
			

			$model2->attributes=$_POST['User'];
			$model2->level = 2;

			if($model2->save())
			{
				$model->id_user = $model2->id;
				$model->save(false);
				$image->saveAs(Yii::app()->basePath. '/../images/rumah-sakit/' . $nm_file);
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		$this->render('update',array(
			'model'=>$model,
			'model2'=>$model2,
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
		$dataProvider=new CActiveDataProvider('RumahSakit');
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
		$rumkit = "";
		$iduser = Yii::app()->user->getId();
		$query = "SELECT rumah_sakit.*, user.id as iduser FROM rumah_sakit JOIN user ON user.id = rumah_sakit.id_user WHERE rumah_sakit.id_user = '$iduser'";
		$model = Yii::app()->db->createCommand($query)->queryAll();
		//$model = RumahSakit::model()->findAll();
		foreach ($model as $key => $value) {
			$no = $key+1;
			$rumkit .= " <tr>
							<td>$no</td>
                            <td>".$value['nama_rumah_sakit']."</td>
                            <td>".$value['alamat']."</td>
                            <td>".$value['no_tlp']."</td>
                            <td>
                            ".CHtml::image(Yii::app()->request->baseUrl. '/images/rumah-sakit/'.$value['image'],$value['nama_rumah_sakit'], array('width'=>50,'height'=>50))."
                            </td>

                            <td>
	                            <div class='pul-right'>
		                            ".CHtml::link('<i class="fa fa-eye"></i>',array('rumahSakit/view','id'=>$value['id']),array('class'=>'btn btn-xs btn-info margin-inline','title'=>'Lihat'))."
		                            ".CHtml::link('<i class="fa fa-trash"></i>',array('rumahSakit/delete','id'=>$value['id']),array('class'=>'btn btn-xs btn-danger margin-inline','title'=>'Hapus'))."
		                            ".CHtml::link('<i class="fa fa-pencil"></i>',array('rumahSakit/update','id'=>$value['id']),array('class'=>'btn btn-xs btn-success margin-inline','title'=>'Edit'))."
	                            </div>
                            </td>
                            
                        </tr>";
		}
		$this->render('admin',array(
			'rumkit'=>$rumkit,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return RumahSakit the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=RumahSakit::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param RumahSakit $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='rumah-sakit-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
