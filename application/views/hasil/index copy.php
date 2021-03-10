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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <h5>Jumlah Responden : <?= $jml_responden ?></h5>
                            </div>
                            <div class="col-8">
                                <?php echo form_open($this->uri->segment(1)) ?>

                                <div class=" form-row align-items-center">
                                    <div class="col-auto">

                                        <input type="date" name="tgl_awal" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                    </div>
                                    <div class="col-auto">

                                        <input type="date" name="tgl_akhir" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-secondary mb-2">Filter</button>
                                    </div>
                                </div>

                                <?php form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
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
                                    <th style="text-align: center;">Kinerja (P)</th>
                                    <th style="width: 150px; text-align: center;">Kepentingan (l)</th>
                                    <th style="width: 150px; text-align: center;">SKOR (S = P * L)</th>
                                    <th style="width: 150px; text-align: center;">IPA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                $count = $this->db->get('tbl_responden')->num_rows();
                                $sum_mis = 0;
                                $sum_mss = 0;
                                $sum_skor = 0;
                                foreach ($tbl_kuesioner as $key => $kuesioner) :
                                    $mis = $this->db->select_sum('jwb_kepentingan')->from('tbl_jawaban')->where('id_kuesioner', $kuesioner->id)->where('tanggal >=', $tgl_awal)->where('tanggal <=', $tgl_akhir)->get()->row('jwb_kepentingan');
                                    // $tes = $this->db->last_query();
                                    $mss = $this->db->select_sum('jwb_kinerja')->from('tbl_jawaban')->where('id_kuesioner', $kuesioner->id)->where('tanggal >=', $tgl_akhir)->where('tanggal <=', $tgl_akhir)->get()->row('jwb_kinerja');
                                    $jml = $mis / $count;
                                    $jml1 = $mss / $count;
                                    $jml2 = ($mss / $count) * ($mis / $count);
                                    $sum_mis += $jml;
                                    $sum_mss += $jml1;
                                    $sum_skor += $jml2;


                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= number_format($mss / $count, 2) ?></td>
                                        <td><?= number_format($mis / $count, 2) ?></td>
                                        <td><?= number_format(($mss / $count) * ($mis / $count), 2) ?></td>
                                        <td></td>
                                    </tr>

                                <?php endforeach ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td><?= number_format($sum_mss, 2) ?></td>
                                    <td><?= number_format($sum_mis, 2) ?></td>
                                    <td><?= number_format($sum_skor, 2) ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <?php $count1 = $this->db->get('tb_kuesioner')->num_rows();
                                    $x = $sum_mss / $count1;
                                    $y = $sum_mis / $count1;
                                    ?>
                                    <td></td>
                                    <td><?= number_format($sum_mss / $count1, 2) ?> (<i>X</i>)</td>
                                    <td><?= number_format($sum_mis / $count1, 2) ?> (<i>Y</i>)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <?php $csi = $sum_skor / (5 * $sum_mis) * 100; ?>
                        <h2><?= number_format($csi, 2) ?></h2>
                        <h3>PUAS</h3>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px; text-align: center;">No</th>
                                    <th style="text-align: center;">IPA</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                $no1 = 1;
                                foreach ($tbl_kuesioner as $key => $kuesioner1) :
                                ?>
                                    <tr>
                                        <td><?= $no1++ ?></td>
                                        <td><?php
                                            if ($x < $jml1 && $y >= $jml) {
                                                echo "Kuadran A";
                                            } else if ($x >= $jml1 && $y >= $jml) {
                                                echo "Kuadran B";
                                            } else if ($x < $jml1 && $y < $jml) {
                                                echo "Kuadran C";
                                            } else if ($x >= $jml1 && $y < $jml) {
                                                echo "Kuadran D";
                                            }
                                            ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>