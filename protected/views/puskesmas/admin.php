<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title m-b-0">Kelola Puskesmas</h3>
        <center>
        <?php echo CHtml::link('<i class="ti ti-plus"></i> Tambah Data',array('kecamatan/create'),array('class'=>'btn btn-success')); ?>
        </center>
        
        <div class="table-responsive">
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                    	<th>No</th>
                        <th>Puskesmas</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $puskesmas; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>