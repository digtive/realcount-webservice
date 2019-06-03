<div class="row">
                            <div class="col-sm-12">
                                <h4 class="header-title m-t-0 m-b-20">Welcome !</h4>
                            </div>
                      </div>
<div class="row">
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
</div>
<div class="row">
	<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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