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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title float-right">DataTable with default features</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px; text-align: center;">No</th>
                                    <th>Tanggal</th>
                                    <th style="text-align: center;">Nama</th>
                                    <th style="text-align: center; width: 20px;">JK</th>
                                    <th style="text-align: center; width: 50px;">Usia</th>
                                    <th style="text-align: center; width: 30px;">Pendidikan</th>
                                    <th style="text-align: center; width: 30px;">Pekerjaan</th>
                                    <th style="text-align: center;">Layanan</th>
                                    <th style="text-align: center;"></th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($isi as $key => $responden) :
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= tanggal($responden->tanggal)  ?></td>
                                        <td><?= $responden->nama ?></td>
                                        <td><?= jk($responden->jk) ?></td>
                                        <td><?= $responden->usia ?> Tahun</td>
                                        <td><?= $responden->pendidikan ?></td>
                                        <td><?= $responden->pekerjaan ?></td>
                                        <td><?= layanan($responden->layanan) ?></td>
                                        <td>
                                            <center>
                                                <a href="<?= base_url('responden/detail/') . $responden->id ?>"><i class="fa fa-eye"></i></a>
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