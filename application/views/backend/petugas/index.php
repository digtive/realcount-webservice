<div class="row">
	<div class="col-sm-12">
		<h4 class="header-title m-t-0 m-b-20">Generate Petugas</h4>
	</div>
</div>

<div class="row">
    <div class="col-sm-4">
        <div class="card-box">
            <form method="post" action="<?php echo base_url() ?>generate/prov">
            <button  class="btn btn-sm btn-primary pull-right" type="submit">Generate</button>
            <h6 class="text-muted font-13 m-t-0 text-uppercase">Total Provinsi</h6>
            <h3 class="m-b-20 mt-3"><span><?php echo count($prov) ?></span></h3>
            <div class="progress progress-sm m-0">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                    <span class="sr-only">0% Complete</span>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card-box">
            <form method="post" action="<?php echo base_url() ?>generate/kab">
            <button  class="btn btn-sm btn-primary pull-right" type="submit">Generate</button>
            <h6 class="text-muted font-13 m-t-0 text-uppercase">Total Kabupaten</h6>
            <h3 class="m-b-20 mt-3"><span><?php echo count($kab) ?></span></h3>
            <div class="progress progress-sm m-0">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                    <span class="sr-only">0% Complete</span>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card-box">
            <form method="post" action="<?php echo base_url() ?>generate/kec">
            <button  class="btn btn-sm btn-primary pull-right" type="submit">Generate</button>
            <h6 class="text-muted font-13 m-t-0 text-uppercase">Total Kecamatan</h6>
            <h3 class="m-b-20 mt-3"><span><?php echo count($kec) ?></span></h3>
            <div class="progress progress-sm m-0">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                    <span class="sr-only">0% Complete</span>
                </div>
            </div>
            </form>
        </div>
    </div>
    
    
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="card-box">
			
					<div class="table-responsive">
		    <p class="text-muted font-13 m-b-30">
		        <!-- <button class="btn btn-info" data-toggle="modal" data-target="#modal">Tambah Petugas</button> -->
		       <h4 class="header-title">List Petugas</h4>
		        
		    </p>
		    <table id="datatable" class="table table-bordered">
		        <thead>
		            <tr>
		                <th>No</th>
		                <th>Petugas ID</th>
		                <th>Petugas username</th>
		                <th>Kategori</th>
		                <th class="text-center">Action</th>
		            </tr>
		        </thead>
		        <tbody>
		            
		            <?php
		            $no = 1;
		            foreach ($petugas as $key => $r):
		            ?>
		            <tr>
		                <td><?php echo $no ?></td>
		                <td><?php echo $r['petugas_id'] ?></td>
		                <td><?php echo $r['petugas_username'] ?></td>
		                <td><?php echo $r['petugas_kategori'] ?></td>
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
            <form method="POST" action="<?php echo base_url() ?>petugas/create">
				
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="mdi mdi-clipboard-account-outline"></i></span>
					</div>
					<input type="text" id="example-input1-group1" name="username" class="form-control" placeholder="Username" required>
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="mdi mdi-textbox-password"></i></span>
					</div>
					<input type="text" id="example-input1-group1" name="password" class="form-control" placeholder="Password" required>
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="mdi mdi-account"></i></span>
					</div>
					<input type="text" id="example-input1-group1" name="nama" class="form-control" placeholder="Nama" required>
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="mdi mdi-account-star-outline"></i></span>
					</div>
					<select  id="example-input1-group1" name="kategori" class="form-control" placeholder="kategori" required>
						<option>Kecamatan</option>
						<option>Kabupaten</option>
						<option>Provinsi</option>
					</select>
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="mdi mdi-cellphone-android"></i></span>
					</div>
					<input type="text" id="example-input1-group1" name="telepon" class="form-control" placeholder="Nomor HP" required>
				</div>

				<div class="input-group mb-3">
					
					<textarea class="form-control" placeholder="Alamat" rows="2" name="alamat" required></textarea>
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="mdi mdi-gender-male-female"></i></span>
					</div>
					<select type="text" id="example-input1-group1" name="jenis_kelamin" class="form-control" placeholder="Username" required>
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