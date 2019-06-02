
<div class="col-12">
    <form action="<?= site_url('pendaftar/berkas')?>" class="form form-row" method="get">
        <div class="form-group col-11">
            <input list="pendaftar" class="form-control" name="pendaftar" placeholder="cari nama pendaftar" >
            <datalist id="pendaftar">
                <?php foreach ($pendaftars as $table => $row):?>
                    <option value="<?= $row['pendaftar_id']?>"><?= $row['pendaftar_nama']?></option>
                <?php endforeach;?>
            </datalist>
        </div>
        
        <div class="form-group col-1">
            <button type="submit" class="btn btn-primary" name="cariPendaftar">
                <i class="icon-magnifier"></i>
            </button>
        </div>
    </form>
</div>

<?php
    if (empty($pendaftar)):
?>
<div class="col-12 mt-4">
    <div class="alert alert-warning " role="alert">
        <h3 class="font-weight-light"> <i class="icon-info"></i> Ketikkan nama pendaftar untuk mencari Kelengkapan Syarat </h3>
    </div>
</div>
<?php
    else:
?>
<div class="col-12 mt-4">
	<div class="card bg-white d-print-block">
		<div class="card-header bg-white">
			<h4 class="text-center font-weight-light">DAFTAR KELENGKAPAN SYARAT NIKAH</h4>
			<div class="row">
				<div class="col-6">
					Nama Catin :  <?= $pendaftar['pendaftar_nama']?><br>
					Nomor HP : ......  <br>
					Jadwal Pemeriksaan :......
				</div>
				<div class="col-6 text-right">
					Tgl. Nikah : 09 - 09 - 2019 <br>
					Jam        : ................................ <br>
					Tempat : .................................
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				
				<div class="col-md-6">
					<div class="form-group">
						
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" checked  disabled>
								1. Surat Keterangan Untuk Nikah, N1
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								2. Surat Keterangan Asal Usul, N2
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								3. Surat Persetujuan Mempelai, N3
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								4. Surat Keterangan Orang Tua, N4
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								5. Surat Izin Orang Tua, N5
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								6. Surat Kematian Suami/Isteri, N6
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" disabled>
								7. Photo Copy KTP dan KK Catin
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" disabled>
								8. Akta Cerai
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								9. Pas Photo 2x3  = 4 Lbr dan 4x6 = 1 Lbr
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" disabled>
								10. Surat Izin Komandan bagi anggota TNI/POLRI
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								11. Photo Copy KTP Wali Nikah
								<i class="input-helper"></i>
							</label>
						</div>
					
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"   disabled>
								12. Izin Pengadilan Bagi Catin Dibawah Umur
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"   disabled>
								13. Izin Poligami dari PA
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"   disabled>
								14. Surat Rekomendasi Pindah Nikah
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								15. Dispensasi Camat bagi yang kurang 10 hari kerja
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								16. Photo Copy Khusu Surat Pra Nikah
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								17. Slip Asli Setoran biaya Nikah (PNBP) dan di Copy 2 lembar
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								18. Photo Copy KTP Saksi Nikah
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								19. Photo Copy Ijazah SLTA/Akte Kelahiran
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								20. Photo Copy Buku Nikah Orang Tua catin pr (jika anak pertama)
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								21. Photo Copy Buku Nikah Orangtua jika wali nikah anak pertama
								<i class="input-helper"></i>
							</label>
						</div>
						<div class="form-check form-check-flat">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"  disabled>
								22. Map Hijau (Nikah di LBN) Map Kuning (Nikah di BN) 2 Lembar
								<i class="input-helper"></i>
							</label>
						</div>
					
					</div>
				</div>
				
				<div class="col-12 mt-5">
					<div class="row">
						<div class="col-3">
							Catatan : <br>
							1. <br>
							2.
						</div>
						<div class="col-8 text-right">
							Penerima Berkas Nikah <br> <br> <br>
							(..........................)
						</div>
					</div>
				</div>
			
			</div>
		</div>
		
		<div class="card-footer d-print-none">
			<button class="btn btn-sm btn-success" onclick="cetak()">
				cetak <i class="icon-printer"></i>
			</button>
			<a href="#" class="btn btn-sm btn-primary float-right">
				lengkapi persyaratan <i class="icon-arrow-right"></i>
			</a>
		</div>
	</div>
</div>
<?php
    endif;
?>
<script type="text/javascript">
    function cetak() {
        window.print();
    }
</script>

