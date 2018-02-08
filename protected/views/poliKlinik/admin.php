<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title m-b-0">Kelola Poli/Klinik</h3>
        <center>
        <?php echo CHtml::link('<i class="ti ti-plus"></i> Tambah Data',array('poliklinik/create'),array('class'=>'btn btn-success')); ?>
        </center>
        
        <div class="table-responsive">
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                    	<th>No</th>
                        <th>Nama Poli/Klinik</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $poli; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>