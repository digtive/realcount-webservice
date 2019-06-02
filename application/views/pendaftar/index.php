<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="data-table">
                    <a href="<?= site_url('pendaftar/tambah')?>" class="btn btn-sm btn-primary float-right ml-4">
                        <i class="icon-plus"></i> tambah
                    </a>
                    <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Nama Pendaftar
                        </th>
                        <th>
                            NIK
                        </th>
                        <th>
                            Agama
                        </th>
<!--                        <th>-->
<!--                            Kelengkapan Dokumen-->
<!--                        </th>-->
                        <th>
                            Status
                        </th>
                        <th>
                            Tanggal Daftar
                        </th>
                        <th class="text-center text-primary">
                            <i class="icon-settings "></i>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $number = 1;
                        foreach ($pendaftar as $table => $r):
                    ?>
                        <tr>
                            <td>
                                <?= $number;?>
                            </td>
                            <td>
                                <?= $r['pendaftar_nama']?>
                            </td>
                            <td>
		                        <?= $r['pendaftar_nik']?>
                            </td>
                            <td>
		                        <?= $r['pendaftar_agama']?>
                            </td>
                            <!-- jnmnj-->
                            <td>
                                <label class="badge badge-info">menunggu</label>
                            </td>
                            <td>
                                <?php
                                    $tgl = new DateTime($r['pendaftar_tgl_buat']);
                                    echo $tgl->format('m/d/Y');
                                ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= site_url('pendaftar/ubah/'.$r['pendaftar_id'])?>" class="text-warning font-weight-bold"><i class="icon-pencil"></i></a>
                                <a href="#" class="text-danger ml-4 font-weight-bold"
                                   data-toggle="modal" data-target="#hapus<?= $r['pendaftar_id']?>"><i class="icon-trash"></i></a> <br>
                                <a href="<?= site_url('pendaftar/detail/'.$r['pendaftar_id'])?>" class="btn btn-sm btn-outline-primary mt-2">detail</a>
                            </td>
                        </tr>

                            <!-- Modal edit -->
                            <div class="modal fade" id="hapus<?= $r['pendaftar_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Menghapus data tidak dapat mengembalikan ke SIMRP
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                            <a href="<?= site_url('pendaftar/hapus/'.$r['pendaftar_id'])?>"  class="btn btn-primary">lanjutkan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        $number++;
                        endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


