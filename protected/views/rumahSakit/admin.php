<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title m-b-0">Kelola Rumah Sakit</h3>
        <?php
        if(Yii::app()->user->isAdmin()):?>
        <center>
        <?php echo CHtml::link('<i class="ti ti-plus"></i> Tambah Data',array('rumahsakit/create'),array('class'=>'btn btn-success')); ?>
        </center>
        <?php endif; ?>
        <div class="table-responsive">
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                    	<th>No</th>
                        <th>Rumah Sakit</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $rumkit; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>