<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="data-table">
                    <a href="<?= site_url('jadwal/tambah')?>" class="btn btn-sm btn-primary float-right ml-4">
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
                            Calon Istri
                        </th>
                        <th>
                            Tanggal Pernikahan
                        </th>
                        <th>
                            Penghulu
                        </th>
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
                        <tr>
                            <td>
								1
                            </td>
                            <td>
								Ryan
                            </td>
                            <td>
								dedeh
                            </td>
                            <td>
								09/04/2019
                            </td>
                            <td>
                                Rahmad Nirwandi,ST
                            </td>
                            <td>
                                <label class="badge badge-info">menunggu</label>
                            </td>
                            <td>
								07/02/2019
                            </td>
                            <td class="text-center">
                                <a href="#" class="text-warning font-weight-bold"><i class="icon-pencil"></i></a>
                                <a href="#" class="text-danger ml-4 font-weight-bold"
                                   data-toggle="modal" data-target=""><i class="icon-trash"></i></a> <br>
                                <a href="" class="btn btn-sm btn-outline-primary mt-2">detail</a>
                            </td>
                        </tr>

                        <!-- Modal edit -->
                        <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <a href=""  class="btn btn-primary">lanjutkan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


