<div class="col-12">
	<form action="<?= site_url('pendaftar/syarat')?>" class="form form-row" method="get">
		<div class="form-group col-11">
			<input list="pendaftar" name="syarat" class="form-control bg-dov text-white rounded" placeholder="cari pendaftar">
			<datalist id="pendaftar">
				<?php foreach ($pendaftars as $table => $row):?>
					<option value="<?= $row['pendaftar_id']?>"><?= $row['pendaftar_nama']?></option>
				<?php endforeach;?>
			</datalist>
		</div>
		<div class="form-group col-1">
			<button type="submit" class="btn btn-primary" >
				<i class="icon-magnifier"></i>
			</button>
		</div>
		
	</form>
</div>

<?php if (empty($pendaftar)):?>
    <div class="col-12 mt-4">
        <div class="alert alert-warning " role="alert">
            <h3 class="font-weight-light"> <i class="icon-info"></i> Ketikkan nama pendaftar untuk mencari Kelengkapan Syarat </h3>
        </div>
    </div>
<?php else: ?>
    <?php if (empty($dokumen)):?>
        <div class="col-12 mt-4">
            <div class="alert alert-warning " role="alert">
                <h3 class="font-weight-light">
                    <i class="icon-info"></i>
                    dokumen <?= $pendaftar['pendaftar_nama']?> belum di ada,
                    <a href="<?= site_url('berkas/unggah/'.$pendaftar['pendaftar_id'])?>">tambahkan sekarang</a>
                </h3>
            </div>
        </div>
    <?php else:?>
        <div class="col-8">
            <div class="bg-white  card">
                <div class="card-body">
                    <table class="table table-bordered " id="data-table">
                        <a href="<?= site_url('pendaftar/detail/'.$pendaftar['pendaftar_id'])?>" class="btn btn-warning float-right ">
                            <i class="icon-pencil"></i> ubah
                        </a>
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Berkas</td>
                                <td>Keterangan</td>
                            </tr>
                        </thead>
                        <tbody>
		                <?php
                            $number = 1;
                            foreach ($dokumen as $table => $r):
                        ?>
                            <tr>
                                <td>
                                    <label class="badge badge-danger"><?= $number;?></label>
                                </td>
                                <td>
                                    <a href="<?= site_url('assets/docs/berkas/'.$r['file_name'].'.jpg')?>" target="_blank">
                                        <img src="<?= site_url('assets/docs/berkas/'.$r['file_name'].'.jpg')?>" alt="" class="img-berkas-td">
                                    </a>
                                </td>
                                <td>
                                    Berkas Persyaratan <?= str_replace("-"," ",ucfirst($r['form']))?>
                                </td>
                            </tr>
                        <?php
                            $number++;
                            endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
        <div class="col-md-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row align-items-top">
                        <i class="mdi mdi-archive  icon-md text-success"></i>
                        <div class="ml-3">
                            <h4 class="text-facebook">
                                <a href="<?= site_url('pendaftar/detail/'.$pendaftar['pendaftar_id'])?>"><?= $pendaftar['pendaftar_nama']?></a>
                            </h4>
                            <p class="mt-2 text-muted card-text"><span class="badge badge-success badge-fw">berkas <?= ucfirst($berkas['status_dokumen'])?></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php endif;?>
<?php endif; ?>