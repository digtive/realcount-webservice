	<div class="col-8 ">
		<div class="card bg-dov">
			<div class="card-body">
				<form class="forms-sample form-row" method="post" action="<?= site_url('pendaftar/add')?>">
					<div class="form-group col-12">
						<label for="nama" class="text-white">Nama Lengkap</label>
						<input type="text" class="form-control"  placeholder="nama" name="nama">
					</div>
                    <div class="form-group col-6">
                        <label for="tempat-lahir" class="text-white">Tempat Lahir</label>
                        <input type="text" class="form-control"  placeholder="tempat lahir" name="tempat-lahir">
                    </div>
                    <div class="form-group col-6">
                        <label for="tgl-lahir" class="text-white">Tanggal Lahir</label>
                        <input type="date" class="form-control"  placeholder="tanggal lahir" name="tgl-lahir">
                    </div>
					<div class="form-group col-6">
						<label for="nik" class="text-white">Nomor Induk Kependudukan (NIK)</label>
						<input type="number" class="form-control bg-secondary"  placeholder="nik" name="nik" min="9">
					</div>
					<div class="form-group col-6">
						<label for="kewarganegaraan" class="text-white">Kewarganegaraan</label>
						<input type="text" class="form-control"  placeholder="kewarganegaraan" name="kewarganegaraan">
					</div>
					<div class="form-group col-12">
						<label for="agama" class="text-white">Agama</label>
						<select class="form-control border-primary" name="agama">
							<option value="" selected>Pilih Agama</option>
							<option value="islam">Islam</option>
							<option value="kristen">Kristen</option>
							<option value="katholik">Katholik</option>
							<option value="budha">Budha</option>
							<option value="hindu">Hindu</option>
							<option value="konghucu">konghucu</option>
						</select>
					</div>
					<div class="form-group col-12">
						<label for="pekerjaan" class="text-white">Pekerjaan</label>
						<input type="text" class="form-control"  placeholder="pekerjaan" name="pekerjaan">
					</div>
					<div class="form-group col-12">
						<label for="pendidikan" class="text-white">Pendidikan Terakhir</label>
						<input type="text" class="form-control"  placeholder="pendidikan" name="pendidikan">
					</div>
					<div class="form-group col-12">
						<label for="alamat" class="text-white">Alamat</label>
						<textarea class="form-control"  rows="2" name="alamat"></textarea>
					</div>
					
					<button type="submit" class="btn btn-success mr-2" name="tambah">tambah</button>
					<a href="<?= site_url('pendaftar')?>" class="btn btn-light">batalkan</a>
				</form>
			</div>
		</div>
	</div>