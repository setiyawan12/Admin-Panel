<div class="content-wrapper">
    <section class="content-header">
        <h1>Control Panel
            <small>Pengguna</small>
        </h1>
        <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"><i Home</i> </a> </li> <li class="active">Data Pengguna</li>
        </ol> -->
    </section>
    <section class="content">
        <div class="container">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Pengguna</button>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Pengguna</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>NIK</th>
                        <th>Paket</th>
                        <th>Tagihan</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($user as $user) :
                    ?>
                        <tr class="table-secondary">
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $user->user ?></td>
                            <td><?php echo $user->email ?></td>
                            <td><?php echo $user->alamat ?></td>
                            <td><?php echo $user->nik ?></td>
                            <td><?php echo $user->paket ?></td>
                            <td><?php echo $user->tagihan ?></td>
                            <td class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></td>
                            <td class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">From Input Data Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() . 'Pengguna/tambah_aksi'; ?>">
                        <div class="form-group">
                            <label for="">Nama Pengguna</label>
                            <input for="text" name="user" class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label for="">email</label>
                            <input for="text" name="email" class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label for="">alamat</label>
                            <input for="text" name="alamat" class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label for="">nik</label>
                            <input for="text" name="nik" class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label for="">paket</label>
                            <input for="text" name="paket" class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label for="">tagihan</label>
                            <input for="text" name="tagihan" class="form-control"></input>
                        </div>
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>