	<div class="col-4">
		<ul class="list-group">
			<li class="list-group-item">
				<a href="#ayah" class="btn-kelengkapan">Data Ayah</a>
			</li>
			<li class="list-group-item">
				<a href="#ibu" class="btn-kelengkapan">Data Ibu</a>
			</li>
			<li class="list-group-item">
				<a href="#istri" class="btn-kelengkapan">Data Calon Istri</a>
			</li>
			<li class="list-group-item">
				<a href="#ayah-istri" class="btn-kelengkapan">Ayah Calon Istri</a>
			</li>
			<li class="list-group-item">
				<a href="#ibu-istri" class="btn-kelengkapan">Ibu Calon Istri</a>
			</li>
		</ul>
	</div>
	
	<div class="col-8">
		<form action="<?= site_url('pendaftar/tambahKelengkapan')?>" method="post" class="form form-row bg-dov p-4">
			<input type="text" value="<?= $pendaftar['pendaftar_id']?>" name="id-pendaftar" hidden>
			<div id="ayah" class="row form-kelengkapan form-active">
				<h3 class="text-white font-weight-light mb-4" style="text-decoration: underline">Kelengkapan Data Ayah</h3>
				
				<div class="form-group col-12">
					<label for="nama" class="text-white">Nama Lengkap Ayah</label>
					<input type="text" class="form-control"  placeholder="nama" name="nama-ayah">
				</div>
				<div class="form-group col-6">
					<label for="tempat-lahir" class="text-white">Tempat Lahir</label>
					<input type="text" class="form-control"  placeholder="tempat lahir" name="tempat-lahir-ayah">
				</div>
				<div class="form-group col-6">
					<label for="tgl-lahir" class="text-white">Tanggal Lahir</label>
					<input type="date" class="form-control"  placeholder="tanggal lahir" name="tgl-lahir-ayah">
				</div>
				<div class="form-group col-6">
					<label for="nik" class="text-white">Nomor Induk Kependudukan (NIK)</label>
					<input type="number" class="form-control bg-secondary"  placeholder="nik" name="nik-ayah" min="9">
				</div>
				<div class="form-group col-6">
					<label for="kewarganegaraan" class="text-white">Kewarganegaraan</label>
					<input type="text" class="form-control"  placeholder="kewarganegaraan" name="kewarganegaraan-ayah">
				</div>
				<div class="form-group col-12">
					<label for="agama" class="text-white">Agama</label>
					<select class="form-control border-primary" name="agama-ayah">
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
					<input type="text" class="form-control"  placeholder="pekerjaan" name="pekerjaan-ayah">
				</div>
				<div class="form-group col-12">
					<label for="pendidikan" class="text-white">Pendidikan Terakhir</label>
					<input type="text" class="form-control"  placeholder="pendidikan" name="pendidikan-ayah">
				</div>
				<div class="form-group col-12">
					<label for="alamat" class="text-white">Alamat</label>
					<textarea class="form-control"  rows="2" name="alamat-ayah"></textarea>
				</div>
			</div>
			<div id="ibu" class="row form-kelengkapan">
				<h3 class="text-white font-weight-light mb-4" style="text-decoration: underline">Kelengkapan Data Ibu</h3>
				
				<div class="form-group col-12">
					<label for="nama" class="text-white">Nama Lengkap Ibu</label>
					<input type="text" class="form-control"  placeholder="nama" name="nama-ibu">
				</div>
				<div class="form-group col-6">
					<label for="tempat-lahir" class="text-white">Tempat Lahir</label>
					<input type="text" class="form-control"  placeholder="tempat lahir" name="tempat-lahir-ibu">
				</div>
				<div class="form-group col-6">
					<label for="tgl-lahir" class="text-white">Tanggal Lahir</label>
					<input type="date" class="form-control"  placeholder="tanggal lahir" name="tgl-lahir-ibu">
				</div>
				<div class="form-group col-6">
					<label for="nik" class="text-white">Nomor Induk Kependudukan (NIK)</label>
					<input type="number" class="form-control bg-secondary"  placeholder="nik" name="nik-ibu" min="9">
				</div>
				<div class="form-group col-6">
					<label for="kewarganegaraan" class="text-white">Kewarganegaraan</label>
					<input type="text" class="form-control"  placeholder="kewarganegaraan" name="kewarganegaraan-ibu">
				</div>
				<div class="form-group col-12">
					<label for="agama" class="text-white">Agama</label>
					<select class="form-control border-primary" name="agama-ibu">
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
					<input type="text" class="form-control"  placeholder="pekerjaan" name="pekerjaan-ibu">
				</div>
				<div class="form-group col-12">
					<label for="pendidikan" class="text-white">Pendidikan Terakhir</label>
					<input type="text" class="form-control"  placeholder="pendidikan" name="pendidikan-ibu">
				</div>
				<div class="form-group col-12">
					<label for="alamat" class="text-white">Alamat</label>
					<textarea class="form-control"  rows="2" name="alamat-ibu"></textarea>
				</div>
			</div>
			<div id="istri" class="row form-kelengkapan">
				<h3 class="text-white font-weight-light mb-4" style="text-decoration: underline">Kelengkapan Data Calon Istri</h3>
				
				<div class="form-group col-12">
					<label for="nama" class="text-white">Nama Lengkap Calon Istri</label>
					<input type="text" class="form-control"  placeholder="nama" name="nama-istri">
				</div>
				<div class="form-group col-6">
					<label for="tempat-lahir" class="text-white">Tempat Lahir Calon Istri</label>
					<input type="text" class="form-control"  placeholder="tempat lahir" name="tempat-lahir-istri">
				</div>
				<div class="form-group col-6">
					<label for="tgl-lahir" class="text-white">Tanggal Lahir Calon Istri</label>
					<input type="date" class="form-control"  placeholder="tanggal lahir" name="tgl-lahir-istri">
				</div>
				<div class="form-group col-6">
					<label for="nik" class="text-white">Nomor Induk Kependudukan (NIK)</label>
					<input type="number" class="form-control bg-secondary"  placeholder="nik" name="nik-istri" min="9">
				</div>
				<div class="form-group col-6">
					<label for="kewarganegaraan" class="text-white">Kewarganegaraan Calon Istri</label>
					<input type="text" class="form-control"  placeholder="kewarganegaraan" name="kewarganegaraan-istri">
				</div>
				<div class="form-group col-12">
					<label for="agama" class="text-white">Agama Calon Istri</label>
					<select class="form-control border-primary" name="agama-istri">
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
					<label for="pekerjaan" class="text-white">Pekerjaan Calon Istri</label>
					<input type="text" class="form-control"  placeholder="pekerjaan" name="pekerjaan-istri">
				</div>
				<div class="form-group col-12">
					<label for="pendidikan" class="text-white">Pendidikan Terakhir Calon Istri</label>
					<input type="text" class="form-control"  placeholder="pendidikan" name="pendidikan-istri">
				</div>
				<div class="form-group col-12">
					<label for="alamat" class="text-white">Alamat Lengkap Calon Istri</label>
					<textarea class="form-control"  rows="2" name="alamat-istri"></textarea>
				</div>
			</div>
			<div id="ayah-istri" class="row form-kelengkapan">
				<h3 class="text-white font-weight-light mb-4" style="text-decoration: underline">Kelengkapan Data Ayah Calon Istri</h3>
				
				<div class="form-group col-12">
					<label for="nama" class="text-white">Nama Lengkap</label>
					<input type="text" class="form-control"  placeholder="nama" name="nama-ayah-istri">
				</div>
				<div class="form-group col-6">
					<label for="tempat-lahir" class="text-white">Tempat Lahir </label>
					<input type="text" class="form-control"  placeholder="tempat lahir" name="tempat-lahir-ayah-istri">
				</div>
				<div class="form-group col-6">
					<label for="tgl-lahir" class="text-white">Tanggal Lahir </label>
					<input type="date" class="form-control"  placeholder="tanggal lahir" name="tgl-lahir-ayah-istri">
				</div>
				<div class="form-group col-6">
					<label for="nik" class="text-white">Nomor Induk Kependudukan (NIK)</label>
					<input type="number" class="form-control bg-secondary"  placeholder="nik" name="nik-ayah-istri" min="9">
				</div>
				<div class="form-group col-6">
					<label for="kewarganegaraan" class="text-white">Kewarganegaraan </label>
					<input type="text" class="form-control"  placeholder="kewarganegaraan" name="kewarganegaraan-ayah-istri">
				</div>
				<div class="form-group col-12">
					<label for="agama" class="text-white">Agama </label>
					<select class="form-control border-primary" name="agama-ayah-istri">
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
					<label for="pekerjaan" class="text-white">Pekerjaan </label>
					<input type="text" class="form-control"  placeholder="pekerjaan" name="pekerjaan-ayah-istri">
				</div>
				<div class="form-group col-12">
					<label for="pendidikan" class="text-white">Pendidikan Terakhir </label>
					<input type="text" class="form-control"  placeholder="pendidikan" name="pendidikan-ayah-istri">
				</div>
				<div class="form-group col-12">
					<label for="alamat" class="text-white">Alamat Lengkap </label>
					<textarea class="form-control"  rows="2" name="alamat-ayah-istri"></textarea>
				</div>
			</div>
			<div id="ibu-istri" class="row form-kelengkapan">
				<h3 class="text-white font-weight-light mb-4" style="text-decoration: underline">Kelengkapan Data Ibu Calon Istri</h3>
				
				<div class="form-group col-12">
					<label for="nama" class="text-white">Nama Lengkap </label>
					<input type="text" class="form-control"  placeholder="nama" name="nama-ibu-istri">
				</div>
				<div class="form-group col-6">
					<label for="tempat-lahir" class="text-white">Tempat Lahir</label>
					<input type="text" class="form-control"  placeholder="tempat lahir" name="tempat-lahir-ibu-istri">
				</div>
				<div class="form-group col-6">
					<label for="tgl-lahir" class="text-white">Tanggal Lahir </label>
					<input type="date" class="form-control"  placeholder="tanggal lahir" name="tgl-lahir-ibu-istri">
				</div>
				<div class="form-group col-6">
					<label for="nik" class="text-white">Nomor Induk Kependudukan (NIK)</label>
					<input type="number" class="form-control bg-secondary"  placeholder="nik" name="nik-ibu-istri" min="9">
				</div>
				<div class="form-group col-6">
					<label for="kewarganegaraan" class="text-white">Kewarganegaraan Calon Istri</label>
					<input type="text" class="form-control"  placeholder="kewarganegaraan" name="kewarganegaraan-ibu-istri">
				</div>
				<div class="form-group col-12">
					<label for="agama" class="text-white">Agama </label>
					<select class="form-control border-primary" name="agama-ibu-istri">
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
					<label for="pekerjaan" class="text-white">Pekerjaan </label>
					<input type="text" class="form-control"  placeholder="pekerjaan" name="pekerjaan-ibu-istri">
				</div>
				<div class="form-group col-12">
					<label for="pendidikan" class="text-white">Pendidikan Terakhir </label>
					<input type="text" class="form-control"  placeholder="pendidikan" name="pendidikan-ibu-istri">
				</div>
				<div class="form-group col-12">
					<label for="alamat" class="text-white">Alamat Lengkap </label>
					<textarea class="form-control"  rows="2" name="alamat-ibu-istri"></textarea>
				</div>
			</div>
			
			
			<button type="submit" class="btn btn-success mr-2" name="lengkapi">lengkapi</button>
			<a href="<?= site_url('pendaftar/detail/'.$pendaftar['pendaftar_id'])?>" class="btn btn-light">batalkan</a>
		</form>
	</div>