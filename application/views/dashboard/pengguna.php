<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table user-table no-wrap" id="example">
                                <h3 class="page-title mb-4 p-0" page-title>Pengguna</h3>
                                <button type="button" class="btn mb-3 ml-3 btntambah" data-bs-toggle="modal" data-bs-target="#tambahPengguna"><i class="fas fa-plus"></i>&nbsp Tambah Pengguna</button>
                                <thead>
                                    <tr>
                                        <th class="border-top-0">ID</th>
                                        <th class="border-top-0">Nama</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Tanggal Daftar</th>
                                        <th class="border-top-0">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($pengguna as $p) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $p['name']; ?></td>
                                            <td><?= $p['email']; ?></td>
                                            <td><?= $p['role_id']; ?></td>
                                            <td><?= date('d F Y', $p['date_created']); ?></td>
                                            <td>
                                                <button type="button" class="badge badge-success ml-3 btn-edit" data-bs-toggle="modal" data-bs-target="#editPengguna<?= $p['id']; ?>"><i class="fas fa-pencil-alt"></i></button>
                                                <a href="<?= base_url('');?>crud/delete_user/<?= $p['id']; ?>" class="badge badge-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Pengguna -->
    <div class="modal fade" id="tambahPengguna" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('crud/create_user'); ?>
                    <div class="form-group mb-3">
                        <label for="namaPengguna" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="namaPengguna" name="namaPengguna">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" class="form-control" id="status" name="status">
                    </div>
                    <!-- </form> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal -->

    <!-- Modal Edit Pengguna -->
    <?php
    $no = 0;
    foreach ($pengguna as $p) : $no++; ?>
        <div class="modal fade" id="editPengguna<?= $p['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Pengguna</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= form_open_multipart('crud/edit_user'); ?>
                        <div class="form-group mb-3">
                            <label for="namaPengguna" class="form-label">Nama</label>
                            <input type="hidden" name="id" value="<?= $p['id']; ?>">
                            <input type="text" class="form-control" id="namaPengguna" name="namaPengguna" value="<?=  $p['name']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?=  $p['email']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?=  $p['password']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" class="form-control" id="status" name="status" value="<?=  $p['role_id']; ?>">
                        </div>
                        <!-- </form> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- Akhir Modal -->