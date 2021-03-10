<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->

<section class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('pesan');
        ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="#" class="btn btn-block btn-sm btn-outline-primary" data-toggle="modal" data-target="#modal-tambah">
                                <i class="fas fa-plus"></i>
                                Tambah
                            </a>
                        </h3>
                        <h3 class="card-title float-right">DataTable with default features</h3>
                        <?php echo form_open($this->uri->segment(1) . '/insert') ?>
                        <div class="modal fade" id="modal-tambah">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Data Kuesioner</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                            <div class="form-group">
                                                <label>Textarea</label>
                                                <textarea class="form-control" name="kuesioner" rows="3" placeholder="Enter ..."></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <?= form_close() ?>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px; text-align: center;">No</th>
                                    <th style="text-align: center;">Pertanyaan</th>
                                    <th style="width: 150px; text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($isi as $key => $kuesioner) :
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $kuesioner->isi_kuesioner ?></td>
                                        <td>
                                            <center>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-update<?= $kuesioner->id ?>"><i class="fa fa-edit"></i> Edit</button>
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-hapus<?= $kuesioner->id ?>"><i class="fa fa-trash"></i> Hapus</button>
                                                </div>
                                            </center>
                                        </td>

                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

<?php
foreach ($isi as $key => $data) {
?>

    <div class="modal fade" id="modal-update<?= $data->id ?>">
        <div class="modal-dialog">
            <?php echo form_open($this->uri->segment(1) . '/update') ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Kuesioner</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="form-control" name="kuesioner" rows="3" placeholder="Enter ..."><?= $data->isi_kuesioner ?></textarea>
                            <input type="hidden" name="id" value="<?php echo $data->id ?>">
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <?= form_close() ?>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-hapus<?= $data->id ?>">
        <div class="modal-dialog">
            <?php echo form_open($this->uri->segment(1) . '/hapus') ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Yakin?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input type="hidden" name="id" value="<?php echo $data->id ?>">
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">tidak</button>
                    <button type="submit" class="btn btn-primary">Iya</button>
                </div>
            </div>
            <?= form_close() ?>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

<?php } ?>