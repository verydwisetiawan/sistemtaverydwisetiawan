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
                        <?= tanggal($isi['tanggal']) ?>
                        <table>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td><?= $isi['nama'] ?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td><?= jk($isi['jk']) ?></td>
                            </tr>
                            <tr>
                                <th>Usia</th>
                                <td>:</td>
                                <td><?= $isi['usia'] ?> Tahun</td>
                            </tr>
                            <tr>
                                <th>pendidikan</th>
                                <td>:</td>
                                <td><?= $isi['pendidikan'] ?></td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <td>:</td>
                                <td><?= $isi['pekerjaan'] ?></td>
                            </tr>
                            <tr>
                                <th>Layanan</th>
                                <td>:</td>
                                <td><?= layanan($isi['layanan']) ?></td>
                            </tr>
                        </table>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px; text-align: center;">No</th>
                                    <th>Kinerja</th>
                                    <th>Kepentingan</th>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;

                                foreach ($isi_tbl_jawaban as $key => $tbl_jawaban) :
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $tbl_jawaban->jwb_kinerja ?></td>
                                        <td><?= $tbl_jawaban->jwb_kepentingan ?></td>
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