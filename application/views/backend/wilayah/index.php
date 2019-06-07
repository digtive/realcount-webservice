<div class="row">
	<div class="col-sm-12">
		<h4 class="header-title m-t-0 m-b-20">List Petugas</h4>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="card-box">
			
					<div class="table-responsive">
		    <p class="text-muted font-13 m-b-30">
		        <button class="btn btn-info" data-toggle="modal" data-target="#modal">Tambah Akun</button>
		    </p>
		    <table id="datatable" class="table table-bordered">
		        <thead>
		            <tr>
		                <th>No</th>
		                <th>Kode</th>
		                <th>Nama</th>
		                <th>Kecamatan ID</th>
		                <th>Kabupaten ID</th>
		                <th>Provinsi ID</th>
		                <th class="text-center">Action</th>
		            </tr>
		        </thead>
		        <tbody>
		            
		            <?php
		            $no = 1;
		            foreach ($wilayah as $key => $r):
		            ?>
		            <tr>
		                <td><?php echo $no ?></td>
		                <td><?php echo $r['wilayah_kode'] ?></td>
		                <td><?php echo $r['wilayah_nama'] ?></td>
		                <td><?php echo $r['kecamatan_id'] ?></td>
		                <td><?php echo $r['kabupaten_id'] ?></td>
		                <td><?php echo $r['provinsi_id'] ?></td>
		                <td class="text-center">
		                	
		                	<a href="#" title="edit"><i class="mdi mdi-circle-edit-outline"></i></a> |
		                	<a href="#" title="delete"><i class="mdi mdi-delete"></i></a>
		                </td>
		                
		            </tr>
		            <?php
		            $no++;
		            endforeach;
		            ?>
		        </tbody>
		    </table>
		</div>


			
		</div>
	</div>
</div>



<!--Modal: modalSocial-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="title"><i class="mdi mdi-account-network"></i> Silahkan isi data petugas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>

      <!--Body-->
      <div class="modal-body mb-0 text-center">
            <form method="POST" action="<?php echo base_url() ?>loket/create">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-user"></i></span>
					</div>
					<input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Username">
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="mdi mdi-cellphone-android"></i></span>
					</div>
					<input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Nomor HP">
				</div>

				<div class="input-group mb-3">
					
					<textarea class="form-control" placeholder="Alamat" rows="2"></textarea>
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="mdi mdi-gender-male-female"></i></span>
					</div>
					<select type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Username">
						<option>laki-laki</option>
						<option>perempuan</option>
					</select>
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="mdi mdi-gender-male-female"></i>  pegguna ID</span>
					</div>
					<select type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Username">
						<option>laki-laki</option>
						<option>perempuan</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        

      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: modalSocial-->