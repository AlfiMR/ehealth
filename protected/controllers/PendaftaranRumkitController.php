<?php

class PendaftaranRumkitController extends Controller
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
				'users'=>array('*'),
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
	public function actionView($id)
	{
		$this->layout = 'layout-form-pasien';
		$model = PendaftaranRumkit::model()->findByPk($id);
		$model2 = Pasien::model()->find("id = $model->id_pasien");
		$rumkit = RumahSakit::model()->find("id = $model->id_rumah_sakit");
		$poli = PoliKlinik::model()->find("id = $model->id_poli_klinik");
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'model2'=>$model2,
			'rumkit' => $rumkit,
			'poli' => $poli,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($idpoli,$idrumkit)
	{
		$this->layout = 'layout-form-pasien';
		$model=new PendaftaranRumkit;
		$model2=new Pasien;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PendaftaranRumkit'], $_POST['Pasien']))
		{
			$model->attributes=$_POST['PendaftaranRumkit'];
			$model2->attributes=$_POST['Pasien'];

			$image = CUploadedFile::getInstance($model2,'image');
			if($image == null){
				echo "-";
			}else{
				$nm_file = md5($model->id).'rumkit-.'.$image->getExtensionName();
				$model2->image = $nm_file;
			}

			$model->id_poli_klinik = $idpoli;
			$model->id_rumah_sakit = $idrumkit;

			//untuk generate nomor antrian
			$hariini = $model->tgl_pendaftaran;
			$antrian = PendaftaranRumkit::model()->find("tgl_pendaftaran = '$hariini' && id_poli_klinik = '$idpoli' && id_rumah_sakit = '$idrumkit' order by id desc");
				if(empty($antrian))
				{
					$model->no_antrian = 1;
				}else{
					$model->no_antrian = $antrian->no_antrian + 1;
				}


			if($model2->save(false))
			{
				$model->id_pasien = $model2->id;
				$model2->type_pasien = 'penduduk';
				$image->saveAs(Yii::app()->basePath. '/../images/pasien/' . $nm_file);
				$model->save();
				$this->redirect(array('view','id'=>$model->id));
			}

		}

		$this->render('create',array(
			'model'=>$model,
			'model2'=>$model2,
			'idrumkit' => $idrumkit,
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

		if(isset($_POST['PendaftaranRumkit']))
		{
			$model->attributes=$_POST['PendaftaranRumkit'];
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
		$dataProvider=new CActiveDataProvider('PendaftaranRumkit');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PendaftaranRumkit('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PendaftaranRumkit']))
			$model->attributes=$_GET['PendaftaranRumkit'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PendaftaranRumkit the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PendaftaranRumkit::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PendaftaranRumkit $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pendaftaran-rumkit-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
