<div class="row">
                            <div class="col-sm-12">
                                <h4 class="header-title m-t-0 m-b-20">Perolehan Suara Sementara</h4>
                            </div>
                      </div>
<!-- <div class="row">
	<div class="col-md-4">
		<div class="card-box pb-0">
                                    <a href="javascript:;" class="mx-auto text-center text-dark" style="display: block;">
                                        <img src="assets/images/users/avatar-4.jpg" class="thumb-xl center-page img-thumbnail rounded-circle" alt="">
                                        <div class="h5 m-b-0"><strong>Arashas Smith</strong></div>
                                    </a>
                                    <div class="bg-custom pull-in-card p-20 widget-box-two mb-0 m-t-30 list-inline text-center row">
                                        <div class="col-4">
                                            <h5 class="text-white m-0 font-600">782</h5>
                                            <p class="text-white mb-0">Total Suara</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-white m-0 font-600">834</h5>
                                            <p class="text-white mb-0">Total Masuk</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-white m-0 font-600">2907</h5>
                                            <p class="text-white mb-0">Total Belum</p>
                                        </div>
                                    </div>
                                </div>

	</div>
	<div class="col-md-4">
		<div class="card-box pb-0">
                                    <a href="javascript:;" class="mx-auto text-center text-dark" style="display: block;">
                                        <img src="assets/images/users/avatar-4.jpg" class="thumb-xl center-page img-thumbnail rounded-circle" alt="">
                                        <div class="h5 m-b-0"><strong>Arashas Smith</strong></div>
                                    </a>
                                    <div class="bg-custom pull-in-card p-20 widget-box-two mb-0 m-t-30 list-inline text-center row">
                                        <div class="col-4">
                                            <h5 class="text-white m-0 font-600">782</h5>
                                            <p class="text-white mb-0">Total Suara</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-white m-0 font-600">834</h5>
                                            <p class="text-white mb-0">Total Masuk</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-white m-0 font-600">2907</h5>
                                            <p class="text-white mb-0">Total Belum</p>
                                        </div>
                                    </div>
                                </div>
           
	</div>
	<div class="col-md-4">
		<div class="card-box pb-0">
                                    <a href="javascript:;" class="mx-auto text-center text-dark" style="display: block;">
                                        <img src="assets/images/users/avatar-4.jpg" class="thumb-xl center-page img-thumbnail rounded-circle" alt="">
                                        <div class="h5 m-b-0"><strong>Arashas Smith</strong></div>
                                    </a>
                                    <div class="bg-custom pull-in-card p-20 widget-box-two mb-0 m-t-30 list-inline text-center row">
                                        <div class="col-4">
                                            <h5 class="text-white m-0 font-600">782</h5>
                                            <p class="text-white mb-0">Total Suara</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-white m-0 font-600">834</h5>
                                            <p class="text-white mb-0">Total Masuk</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-white m-0 font-600">2907</h5>
                                            <p class="text-white mb-0">Total Belum</p>
                                        </div>
                                    </div>
                                </div>
           
	</div>	
</div> -->
<div class="row">
	<div class="col-sm-8">
    <div id="chartContainer" style="height: 400px; width: 100%;"></div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label class="col-sm-5 col-form-label">Provinsi</label>
            <div class="col-sm-10">
                <select class="form-control">
                    <option disabled selected>Pilih Provinsi</option>
                    <option>Riau</option>
                </select>
                
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-5 col-form-label">Kabupaten</label>
            <div class="col-sm-10">
                <select class="form-control">
                    <option disabled selected>Pilih Kabupaten</option>
                    <option>Bengkalis</option>
                </select>
                
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-5 col-form-label">Kecamatan</label>
            <div class="col-sm-10">
                <select class="form-control">
                    <option disabled selected>Pilih Kecamatan</option>
                    <option>Mandau</option>
                </select>
                
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 col-form-label">Kelurahan</label>
            <div class="col-sm-10">
                <select class="form-control">
                    <option disabled selected>Pilih Kelurahan</option>
                    <option>Titian Antui</option>
                </select>
                
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-5 col-form-label">TPS</label>
            <div class="col-sm-10">
                <select class="form-control">
                    <option disabled selected>Pilih TPS</option>
                    <option>1</option>
                </select>
                
            </div>
        </div>
        
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12 text-center">
    <span style="color: green;"><b>Suara Masuk :  40% (40000000)</b></span>
    </div>
</div>





<script>
window.onload = function() {

CanvasJS.addColorSet("Color",
                [//colorSet Array

                "#23b195",
                "#03a9f4",
                "#9c27b0"              
                ]);


var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	colorSet :"Color",
	title: {
		text: "Grafik Suara Pilpres - 2019"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.0\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 70, label: "Prabowo - Sandi"},
			{y: 20, label: "Jokowi - Ma'ruf"},
			{y: 10, label: "Nurhadi - Aldo"}
		]
	}]
});
chart.render();

}
</script>