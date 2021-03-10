<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profil</h1>
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


                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th style="text-align: center;">Nama</th>
                                    <th style="text-align: center;">Username</th>
                                    <th style="text-align: center;">Password</th>
                                    <th style="text-align: center;"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <td><?= $this->session->userdata('nama') ?></td>
                                <td><?= $this->session->userdata('username') ?></td>
                                <td><?= $this->session->userdata('password') ?></td>
                                <td>
                                    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button>
                                </td>
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