<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Angket</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/angket/dist/css/bootstrap.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/angket/pricing.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">RSUD Arifin Achmad</h5>
        <a class="btn btn-outline-primary" href="<?= base_url('login') ?>"><i class="fa fa-user"></i> Login</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Formulir Kuesioner Survei</h1>
        <p class="lead">RSUD Arifin Achmad Provinsi Riau</p>
    </div>

    <div class="container">
        <div class="row box">
            <div class="col-md-12">
                <?php echo form_open($this->uri->segment(1) . 'Angket/insert') ?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nama</label>
                        <input type="text" name="nama" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Jenis Kelamin</label>
                        <div class="form-check">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" value="l" id="inlineRadio1" required>
                                <label class="form-check-label" for="inlineRadio1">Laki_laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" value="p" id="inlineRadio2" required>
                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Usia</label>
                        <input type="number" name="usia" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Pendidikan</label>
                        <select id="inputState" class="form-control" name="pendidikan" required>
                            <option selected value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sma">SMA</option>
                            <option value="s1">S1</option>
                            <option value="s2">S2</option>
                            <option value="s3">S3</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Pekerjaan</label>
                        <select id="inputState" class="form-control" name="pekerjaan" required>
                            <option selected value="pns">PNS</option>
                            <option value="wiraswasta">Wiraswasta</option>
                            <option value="tni">TNI</option>
                            <option value="polri">POLRI</option>
                            <option value="petani">Petani</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Layanan</label>
                        <select id="inputState" class="form-control" name="layanan" required>
                            <option selected value="r_inap">Rawat Inap</option>
                            <option value="r_jalan">Rawat Jalan</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row box mb-4 mt-3">
            <div class="col-md-12">

                <b><u>Keterangan Cara Pakai:</u></b>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolor at fuga error consequatur pariatur quam ab sunt! Enim, voluptatem.</p>
                <div class="row">
                    <div class="col-md-6">
                        <b><u>Kinerja</u></b>
                        <table>
                            <tr>
                                <td>1</td>
                                <td>:</td>
                                <td>Sangat Tidak Puas</td>
                                <td style="width: 15px;"></td>
                                <td>2</td>
                                <td>:</td>
                                <td>Tidak Puas</td>
                                <td style="width: 15px;"></td>
                                <td>3</td>
                                <td>:</td>
                                <td>Cukup Puas</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>:</td>
                                <td>Puas</td>
                                <td style="width: 15px;"></td>
                                <td>5</td>
                                <td>:</td>
                                <td>Sangat Puas</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6 mb-2">
                        <b><u>Kepentingan</u></b>
                        <table>
                            <tr>
                                <td>1</td>
                                <td>:</td>
                                <td>Sangat Tidak Penting</td>
                                <td style="width: 15px;"></td>
                                <td>2</td>
                                <td>:</td>
                                <td>Tidak Penting</td>
                                <td style="width: 15px;"></td>
                                <td>3</td>
                                <td>:</td>
                                <td>Cukup Penting</d>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>:</td>
                                <td>Penting</td>
                                <td style="width: 15px;"></td>
                                <td>5</td>
                                <td>:</td>
                                <td>Sangat Penting</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="row box">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pertanyaan</th>
                            <th scope="col" style="width: 270px;">Kinerja</th>
                            <th scope="col" style="width: 270px;">Kepentingan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($kuesioner as $key => $kuesioner) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <div class="card">
                                        <div class="card-body">
                                            <?= $kuesioner->isi_kuesioner ?>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-check form-check-inline">
                                                <input type="hidden" name="id_kuesioner[]" value="<?= $kuesioner->id ?>">
                                                <input class="form-check-input" type="radio" name="kinerja<?= $kuesioner->id ?>" id="inlineRadio1" value="1" required>
                                                <label class="form-check-label small" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kinerja<?= $kuesioner->id ?>" id="inlineRadio2" value="2" required>
                                                <label class="form-check-label small" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kinerja<?= $kuesioner->id ?>" id="inlineRadio1" value="3" required>
                                                <label class="form-check-label small" for="inlineRadio1">3</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kinerja<?= $kuesioner->id ?>" id="inlineRadio2" value="4" required>
                                                <label class="form-check-label small" for="inlineRadio2">4</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kinerja<?= $kuesioner->id ?>" id="inlineRadio2" value="5" required>
                                                <label class="form-check-label small" for="inlineRadio2">5</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kepentingan<?= $kuesioner->id ?>" id="inlineRadio1" value="1" required>
                                                <label class="form-check-label small" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kepentingan<?= $kuesioner->id ?>" id="inlineRadio2" value="2" required>
                                                <label class="form-check-label small" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kepentingan<?= $kuesioner->id ?>" id="inlineRadio1" value="3" required>
                                                <label class="form-check-label small" for="inlineRadio1">3</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kepentingan<?= $kuesioner->id ?>" id="inlineRadio2" value="4" required>
                                                <label class="form-check-label small" for="inlineRadio2">4</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kepentingan<?= $kuesioner->id ?>" id="inlineRadio2" value="5" required>
                                                <label class="form-check-label small" for="inlineRadio2">5</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>

                <input type="submit" class="btn btn-primary mb-2 btn-lg btn-block" value="Simpan" onclick="return confirm('Apakah Data Yang Anda Masukan Sudah Benar?')">

                
            </div>
            <?php form_close(); ?>
        </div>


        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-copyright text-center py-3">© 2020 Copyright:
                        <a href="#"> UIN SUSKA Riau</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>