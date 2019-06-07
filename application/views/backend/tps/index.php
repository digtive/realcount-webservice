<div class="row">
	<div class="col-sm-12">
		<h4 class="header-title m-t-0 m-b-20">Pendaftaran TPS</h4>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<h6 class="text-primary">Silahkan pilih wilayah terlebih dahulu !</h6>
	</div>
</div>
<div class="row mb-4">
	
	<div class="col-sm-3">
		<select class="form-control">
			<option>Pilih Provinsi</option>
		</select>
	</div>
	<div class="col-sm-3">
		<select class="form-control">
			<option>Pilih Kabupaten</option>
		</select>
	</div>
	<div class="col-sm-3">
		<select class="form-control">
			<option>Pilih Kecamatan</option>
		</select >
	</div>
	<div class="col-sm-3">
		<select class="form-control">
			<option>Pilih Kelurahan</option>
		</select>
	</div>
</div>

<div class="row">

	<div class="col-sm-12">
		<div class="card-box">
				<div class="input-group m-t-10">
					<input type="number" min="1" id="jml" name="example-input2-group2" class="form-control" placeholder="Masukkan jumlah TPS">
					<span class="input-group-append">
						<button type="button" id="btn-ok" class="btn btn-primary">Submit</button>
					</span>
				</div>
				<hr>

			<form method="post" action="<?php echo base_url() ?>tps/daftar">
			<input type="hidden" name="jml_tps" id="jml_tps">
			<div id="form-pendaftaran">
				
			</div>
			<button class="btn btn-primary mt-3" type="submit" id="btn-simpan" style="display: none;">Simpan</button>
			</form>
		</div>

		
	</div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var root = window.location.origin+'/realcount-webservice/';
        
        $('#btn-ok').click(function(){
        var jml = $('#jml').val();
        var html = '';
        $.ajax({
            type : 'ajax',
            success : function(response){
                console.log(response);
                
                for (var i = 1; i <= jml; i++) {
                    html+= 
                    '<label>NoHP TPS '+i+'</label>'+
                    '<input type="text" class="form-control" name="no_hp'+i+'" placeholder="Masukkan NO HP" required>';
                }
                // html+='</tbody></table>';
                $('#jml_tps').val(jml);
                $('#btn-simpan').show();
                $('#form-pendaftaran').html(html);


            },
            error: function(response){
                console.log(response.status);
            }
        });

    });
});


</script>



