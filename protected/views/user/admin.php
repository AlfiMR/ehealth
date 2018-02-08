<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title m-b-0">Kelola User</h3>
        <center>
        <?php echo CHtml::link('<i class="ti ti-plus"></i> Tambah Data',array('user/create'),array('class'=>'btn btn-success')); ?>
        </center>
        
        <div class="table-responsive">
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                    	<th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $user; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>