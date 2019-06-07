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