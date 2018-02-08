<div class="col-md-12">
    <div class="white-box">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                    </ul>
                    <h3 class="block-title">Form Input User</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal push-10-t" action="" method="post">

					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'user-form',
						// Please note: When you enable ajax validation, make sure the corresponding
						// controller action is handling ajax validation correctly.
						// There is a call to performAjaxValidation() commented in generated controller code.
						// See class documentation of CActiveForm for details on this.
						'enableAjaxValidation'=>false,
					)); ?>

					<div class="form-group">
                            <div class="col-sm-12">
                                <div class="form-material">
                                    <?php echo $form->textField($model,'username',array('class'=>'form-control','placeholder'=>'Username')); ?>
                                    <?php echo $form->error($model,'username'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="form-material">
                                    <?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'Password')); ?>
                                    <?php echo $form->error($model,'password'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="form-material">
                                    <?php echo $form->dropdownList($model,'level',array('1'=>'Admin','2'=>'Admin Rumah Sakit','3'=>'Admin Puskesmas'),array('class'=>'form-control','placeholder'=>'Masukkan Wakil Datul')); ?>
									<?php echo $form->error($model,'level'); ?>
                                </div>
                            </div>
                        </div>
                        
                        <button class="btn btn-sm btn-danger" type="submit">Submit</button>
                        <br><br>
                        </form>
                        <?php $this->endWidget(); ?>
                        </div>
                        </div>
                        </div>
        </div>