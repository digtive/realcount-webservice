	<div class="col-7">
		<div class="card bg-white">
			<div class="card-header">
				<?= $pendaftar['pendaftar_nama'];?>
				<?php if (!empty($berkas)):?>
                    <a href="<?= site_url('pendaftar/syarat?syarat='.$pendaftar['pendaftar_id'])?>"
                       class="btn btn-sm btn-primary float-right" title="detail berkas">
                        <i class="icon-book-open"></i>
                    </a>
                <?php else:?>
                    <a href="<?= site_url('berkas/unggah/'.$pendaftar['pendaftar_id'])?>" class="btn btn-sm btn-primary float-right" title="unggah berkas">
                        <i class="icon-arrow-up-circle"></i>
                    </a>
                <?php endif;?>
                    <a href="<?= site_url('pendaftar/ubah/'.$pendaftar['pendaftar_id'])?>" class="btn btn-sm mr-2 btn-warning float-right" title="ubah data pendaftar">
                        <i class="icon-pencil"></i>
                    </a>
			</div>
			<div class="card-body">
				<form class="form-row">
					<div class="form-group row col-6">
						<label class="col-sm-4 col-form-label">Nama Lengkap</label>
						<div class="col-sm-8">
							<input type="tex" class="form-control bg-dov text-white rounded"  value="<?= $pendaftar['pendaftar_nama'];?>" disabled>
						</div>
					</div>
                    <div class="form-group row col-6">
                        <label class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input type="tex" class="form-control bg-dov text-white rounded"  value="<?php
                                $tgl = new DateTime($pendaftar['pendaftar_tgl_lahir']);
                                echo $pendaftar['pendaftar_tempat_lahir'].' ,'.$tgl->format('d/m/Y');
                            ?>" disabled>
                        </div>
                    </div>
					<div class="form-group row col-6">
						<label class="col-sm-4 col-form-label">NIK</label>
						<div class="col-sm-8">
							<input type="tex" class="form-control bg-dov text-white rounded"  value="<?= $pendaftar['pendaftar_nik'];?>" disabled>
						</div>
					</div>
					<div class="form-group row col-6">
						<label class="col-sm-4 col-form-label">Kewarganegaraan</label>
						<div class="col-sm-8">
							<input type="tex" class="form-control bg-dov text-white rounded"  value="<?= $pendaftar['pendaftar_kewarganegaraan'];?>" disabled>
						</div>
					</div>
					<div class="form-group row col-6">
						<label class="col-sm-4 col-form-label">Agama</label>
						<div class="col-sm-6">
							<input type="tex" class="form-control bg-dov text-white rounded"  value="<?= $pendaftar['pendaftar_agama'];?>" disabled>
						</div>
					</div>
					<div class="form-group row col-6">
						<label class="col-sm-4 col-form-label">Pekerjaan</label>
						<div class="col-sm-8">
							<input type="tex" class="form-control bg-dov text-white rounded"  value="<?= $pendaftar['pendaftar_pekerjaan'];?>" disabled>
						</div>
					</div>
					<div class="form-group row col-6">
						<label class="col-sm-4 col-form-label">Pendidikan</label>
						<div class="col-sm-8">
							<input type="tex" class="form-control bg-dov text-white rounded"  value="<?= $pendaftar['pendaftar_pendidikan'];?>" disabled>
						</div>
					</div>
                    <div class="form-group row col-6">
                        <label class="col-sm-4 col-form-label">Tanggal Mendaftar/Data di Perbarui</label>
                        <div class="col-sm-8">
                            <input type="tex" class="form-control bg-dov text-white rounded text-left"  value="<?php
							$tgl = new DateTime($pendaftar['pendaftar_tgl_buat']);
							echo $tgl->format('d/m/Y');
							?>" disabled>
                        </div>
                    </div>

                    <div class="form-group row col-12 ">
						<label class="col-sm-2 col-form-label">Alamat</label>
						<div class="col-sm-10">
							<textarea class="form-control bg-dov text-white rounded"  rows="2" disabled><?= $pendaftar['pendaftar_alamat']?></textarea>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
	<div class="col-5 ">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Data Pendaftar </h4>
                <div class="vertical-tab tab-minimal tab-minimal-success">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="tab-4-1" data-toggle="tab"
                               href="#home-4-1" role="tab" aria-controls="home-4-1" aria-selected="false">
                                <i class="icon-book-open"></i> Ayah
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-4-2" data-toggle="tab"
                               href="#profile-4-2" role="tab" aria-controls="profile-4-2" aria-selected="false">
                                <i class="icon-book-open"></i>Ibu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-4-3" data-toggle="tab"
                               href="#contact-4-3" role="tab" aria-controls="contact-4-3" aria-selected="true">
                                <i class="icon-book-open"></i>Calon Istri
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-4-4" data-toggle="tab"
                               href="#ayah-istri" role="tab" aria-controls="ayah-istri" aria-selected="true">
                                <i class="icon-book-open"></i>Ayah Calon Istri
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-4-5" data-toggle="tab"
                               href="#ibu-istri" role="tab" aria-controls="ibu-istri" aria-selected="true">
                                <i class="icon-book-open"></i>Ibu Calon Istri
                            </a>
                        </li>
                    </ul>
                    <?php if (!empty($detail)):?>
                        <div class="tab-content row" style="padding: 16px !important;">
                            
                            <div class="tab-pane fade active show" id="home-4-1" role="tabpanel" aria-labelledby="tab-4-1">
    
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ayah['nama']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Tempat Tanggal Lahir</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?php
                                                        $tgl = new DateTime($ayah['tgl_lahir']);
                                                        echo $ayah['tempat_lahir'].' , '.$tgl->format('d/m/Y');
                                                        ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Nomor Induk Kependudukan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ayah['nik']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Kewarganegaraan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ayah['kewarganegaraan']?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="name">Agama</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ayah['agama']?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="name">Pekerjaan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ayah['pekerjaan']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Pendidikan Terakhir</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ayah['pendidikan']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Alamat</label>
                                        <textarea class="form-control bg-dov text-white rounded"  rows="2" disabled><?= $ayah['alamat']?>
                                        </textarea>
                                    </div>
                                </div>
    
                            </div>
                            <div class="tab-pane fade" id="profile-4-2" role="tabpanel" aria-labelledby="tab-4-2">
    
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ibu['nama']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Tempat Tanggal Lahir</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?php
                                               $tgl = new DateTime($ibu['tgl_lahir']);
                                               echo $ibu['tempat_lahir'].' , '.$tgl->format('d/m/Y');
                                               ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Nomor Induk Kependudukan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ibu['nik']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Kewarganegaraan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ibu['kewarganegaraan']?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="name">Agama</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ibu['agama']?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="name">Pekerjaan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ibu['pekerjaan']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Pendidikan Terakhir</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ibu['pendidikan']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Alamat</label>
                                        <textarea class="form-control bg-dov text-white rounded"  rows="2" disabled><?= $ibu['alamat']?>
                                        </textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="tab-pane fade " id="contact-4-3" role="tabpanel" aria-labelledby="tab-4-3">
    
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $istri['nama']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Tempat Tanggal Lahir</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?php
                                               $tgl = new DateTime($istri['tgl_lahir']);
                                               echo $istri['tempat_lahir'].' , '.$tgl->format('d/m/Y');
                                               ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Nomor Induk Kependudukan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $istri['nik']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Kewarganegaraan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $istri['kewarganegaraan']?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="name">Agama</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $istri['agama']?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="name">Pekerjaan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $istri['pekerjaan']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Pendidikan Terakhir</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $istri['pendidikan']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Alamat</label>
                                        <textarea class="form-control bg-dov text-white rounded"  rows="2" disabled><?= $istri['alamat']?>
                                        </textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="tab-pane fade " id="ayah-istri" role="tabpanel" aria-labelledby="tab-4-4">
    
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ayahIstri['nama']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Tempat Tanggal Lahir</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?php
                                               $tgl = new DateTime($ayahIstri['tgl_lahir']);
                                               echo $ayahIstri['tempat_lahir'].' , '.$tgl->format('d/m/Y');
                                               ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Nomor Induk Kependudukan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ayahIstri['nik']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Kewarganegaraan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ayahIstri['kewarganegaraan']?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="name">Agama</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ayahIstri['agama']?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="name">Pekerjaan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ayahIstri['pekerjaan']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Pendidikan Terakhir</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ayahIstri['pendidikan']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Alamat</label>
                                        <textarea class="form-control bg-dov text-white rounded"  rows="2" disabled><?= $ayahIstri['alamat']?>
                                        </textarea>
                                    </div>
                                </div>
    
                            </div>
                            <div class="tab-pane fade " id="ibu-istri" role="tabpanel" aria-labelledby="tab-4-4">
    
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ibuIstri['nama']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Tempat Tanggal Lahir</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?php
                                               $tgl = new DateTime($ibuIstri['tgl_lahir']);
                                               echo $ibuIstri['tempat_lahir'].' , '.$tgl->format('d/m/Y');
                                               ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Nomor Induk Kependudukan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ibuIstri['nik']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Kewarganegaraan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ibuIstri['kewarganegaraan']?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="name">Agama</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ibuIstri['agama']?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="name">Pekerjaan</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ibuIstri['pekerjaan']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Pendidikan Terakhir</label>
                                        <input type="text" class="form-control bg-dov text-white rounded" disabled
                                               value="<?= $ibuIstri['pendidikan']?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="name">Alamat</label>
                                        <textarea class="form-control bg-dov text-white rounded"  rows="2" disabled><?= $ibuIstri['alamat']?>
                                        </textarea>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    <?php else:?>
                        <div class="tab-content row" style="padding: 16px !important;">
                            <div class="tab-pane fade active show text-center" id="home-4-1" role="tabpanel" aria-labelledby="tab-4-1">

                                <h4 class="font-weight-light">Belum ada detail ditambahkan</h4>
                                <h1 class="mt-4">
                                    <a href="<?= site_url('pendaftar/kelengkapan/'.$pendaftar['pendaftar_id'])?>" title="tambahkan detail">
                                        <i class="icon-plus"></i>
                                    </a>
                                </h1>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
	</div>
 