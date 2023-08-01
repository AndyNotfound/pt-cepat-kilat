<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1 class="h3 mb-4 text-gray-800"><i class="fa fa-box mr-2"></i> Pengiriman Barang</h1>
<div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
<div class="card shadow mb-4">
<?php if (session()->get('level') == 'pelanggan') : ?>
    <div class="card-header py-3">
        <a href="/siswa/tambah" class="btn btn-default"><i class="fa fa-plus mr-1"></i>Tambah</a>
    </div>
    <?php endif; ?>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID Pengiriman</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Kurir</th>
                        <th scope="col">Penerima</th>
                        <th scope="col">Status</th>
                        <?php if (session()->get('level') == 'pelanggan') : ?>
                        <th scope="col" class="text-center">Opsi</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($siswa as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $s['nisn']; ?></td>
                            <td><?= $s['nis']; ?></td>
                            <td><?= $s['nama']; ?></td>
                            <td><?= $s['alamat']; ?></td>
                            <td><?= $s['no_telp']; ?></td>
                            <?php if (session()->get('level') == 'pelanggan') : ?>
                            <td class="text-center td">
                                <a href="/siswa/ubah/<?= $s['nis']; ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-edit"></i></a> |
                                <a href="/siswa/hapus/<?= $s['nis']; ?>" class="btn btn-danger btn-hapus btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="far fa-trash-alt"></i></a>
                            </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>