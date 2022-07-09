<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table user-table no-wrap" id="example">
                                <h3 class="page-title mb-4 p-0" page-title>Produk Populer</h3>
                                <button type="button" class="btn mb-3 ml-3 btntambah" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"></i>&nbspTambah Produk</button>
                                <thead>
                                    <tr>
                                        <th class="border-top-0">ID</th>
                                        <th class="border-top-0">Nama Produk</th>
                                        <th class="border-top-0">Foto</th>
                                        <th class="border-top-0">Harga</th>
                                        <th class="border-top-0">Diskon</th>
                                        <th class="border-top-0">Harga Diskon</th>
                                        <th class="border-top-0">Terjual</th>
                                        <th class="border-top-0">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($produk as $pd) : ?>
                                        <tr class="tr-produk">
                                            <td class="produk"><?= $i; ?></td>
                                            <td class="produk"><?= $pd['name']; ?></td>
                                            <td><img class="image-produk" src="<?= base_url('assets/img/item/' . $pd['image']); ?>" alt=""></td>
                                            <td class="produk"><?= $pd['disc2']; ?></td>
                                            <td class="produk"><?= $pd['disc']; ?></td>
                                            <td class="produk"><?= $pd['price']; ?></td>
                                            <td class="produk"><?= $pd['rating']; ?></td>
                                            <td class="produk">
                                                <button type="button" class="badge badge-success ml-3 btn-edit" data-bs-toggle="modal" data-bs-target="#editModal<?= $pd['id']; ?>"><i class="fas fa-pencil-alt"></i></button>
                                                <a href="<?= base_url(''); ?>crud/delete/<?= $pd['id']; ?>" class="badge badge-danger btn-delete"><i class="fas fa-trash"></i></a>
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

    <!-- Modal Tambah Produk -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <form action="admin/tambah_produk" method="post"> -->
                    <?= form_open_multipart('crud'); ?>
                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="text" class="form-control" id="image" name="image">
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                    <div class="form-group mb-3">
                        <label for="diskon" class="form-label">Diskon</label>
                        <input type="text" class="form-control" id="diskon" name="diskon">
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga_diskon" class="form-label">Harga Diskon</label>
                        <input type="text" class="form-control" id="harga_diskon" name="harga_diskon">
                    </div>
                    <div class="form-group mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="text" class="form-control" id="rating" name="rating">
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

    <!-- Modal Edit Produk -->
    <?php
    $no = 0;
    foreach ($produk as $pd) : $no++; ?>
        <div class="modal fade" id="editModal<?= $pd['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= form_open_multipart('crud/edit'); ?>
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="hidden" name="id" value="<?= $pd['id']; ?>">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $pd['name']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="text" class="form-control" id="image" name="image" value="<?= $pd['image']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $pd['price']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="diskon" class="form-label">Diskon</label>
                            <input type="text" class="form-control" id="diskon" name="diskon" value="<?= $pd['disc']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="harga_diskon" class="form-label">Harga Diskon</label>
                            <input type="text" class="form-control" id="harga_diskon" name="harga_diskon" value="<?= $pd['disc2']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <input type="text" class="form-control" id="rating" name="rating" value="<?= $pd['rating']; ?>">
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