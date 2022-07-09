<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <h3 class="page-title mb-4 p-0 profile" page-title>Profile</h3>
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body profile-card">
                        <center class="mt-4"> <img src="<?= base_url('assets/admin/img/users/') . $user['image']; ?>" alt="user" class="rounded-circle" width="150" />
                            <h4 class="card-title mt-2"><?= $user['name']; ?></h4>
                            <h6 class="card-subtitle">Founder Lazymart</h6>
                        </center>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material mx-2">
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Nama</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="<?= $user['name']; ?>" class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="<?= $user['email']; ?>" class="form-control ps-0 form-control-line" name="example-email" id="example-email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Password</label>
                                <div class="col-md-12">
                                    <input type="password" value="<?= $user['password']; ?>" class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btnEditProfile" data-bs-toggle="modal" data-bs-target="#editProfile<?= $user['id']; ?>"><i class="far fa-edit"></i>&nbsp Edit Profile</button>
        </div>
    </div>
</div>

<!-- Modal Edit Pengguna -->
<?php
$no = 0;
foreach ($pengguna as $p) : $no++; ?>
    <div class="modal fade" id="editProfile<?= $p['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('crud/edit_profile'); ?>
                    <div class="form-group mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="text" class="form-control" id="image" name="image" value="<?=  $p['image']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="namaProfile" class="form-label">Nama</label>
                        <input type="hidden" name="id" value="<?= $p['id']; ?>">
                        <input type="text" class="form-control" id="namaProfile" name="namaProfile" value="<?=  $p['name']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="emailProfile" class="form-label">Email</label>
                        <input type="text" class="form-control" id="emailProfile" name="emailProfile" value="<?=  $p['email']; ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="passwordProfile" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordProfile" name="passwordProfile">
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