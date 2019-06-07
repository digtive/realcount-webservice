<div class="row">
	<div class="col-sm-12">
		<h4 class="header-title m-t-0 m-b-20">List Petugas</h4>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="card-box">
			
					<div class="table-responsive">
		    
		    <table id="datatable" class="table table-bordered">
		        <thead>
		            <tr>
		                <th>No</th>
		                <th>TPS ID</th>
		                <th>No HP</th>
		                <th>Total DPT</th>
		                <th>Total Sah</th>
		                <th>Total Tidah Sah</th>
		                <th>Total Calon</th>
		                <th>Pengguna Hak Pilih</th>
		                <th>Status Validasi</th>
		                <th>Wilayah</th>
		                <th>Date Created</th>
		                <th class="text-center">Action</th>
		            </tr>
		        </thead>
		        <tbody>
		            
		            <?php
		            $no = 1;
		            foreach ($suara as $key => $r):
		            ?>
		            <tr>
		                <td><?php echo $no ?></td>
		                <td><?php echo $r['tps_id'] ?></td>
		                <td><?php echo $r['tps_nohp'] ?></td>
		                <td><?php echo $r['tps_total_dpt'] ?></td>
		                <td><?php echo $r['tps_suara_sah'] ?></td>
		                <td><?php echo $r['tps_suara_tidaksah'] ?></td>
		                <td><?php echo $r['tps_suara_calon'] ?></td>
		                <td><?php echo $r['tps_pengguna_hakpilih'] ?></td>
		                <td><?php echo $r['tps_status_validasi'] ?></td>
		                <td><?php echo $r['wilayah_id'] ?></td>
		                <td><?php echo $r['tps_date_created'] ?></td>
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


