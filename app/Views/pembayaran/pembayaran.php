<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1 class="h3 mb-4 text-gray-800"><i class="fa fa-money-bill-alt mr-2"></i> Pembayaran Barang</h1>
<div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
<div class="card shadow mb-4">
<?php if (session()->get('level') == 'admin') : ?>
    <div class="card-header py-3">
        <a href="/siswa/tambah" class="btn btn-default"><i class="fa fa-plus mr-1"></i>Tambah</a>
    </div>
    <?php endif; ?>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID Pembayaran</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Total</th>
                        <th scope="col">Metode</th>
                        <th scope="col">Status</th>
                        <th scope="col">Bukti Pembayaran</th>
                        <?php if (session()->get('level') == 'admin') : ?>
                        <th scope="col" class="text-center">Opsi</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pembayaran as $s) : ?>
                        <tr>
                            <td><?= $s['id_pembayaran']; ?></td>
                            <td><?= $s['pelanggan']; ?></td>
                            <td><?= $s['tgl_bayar']; ?></td>
                            <td><?= $s['total']; ?></td>
                            <td><?= $s['metode']; ?></td>
                            <td class="badge-status <?= $s['status'] ?>"><?= $s['status']; ?></td>
                            <td><a href="#">Detail Pembayaran</a></td>
                            <?php if (session()->get('level') == 'admin') : ?>
                            <td class="text-center td">
                                <a href="" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-edit"></i></a> |
                                <a href="" class="btn btn-danger btn-hapus btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="far fa-trash-alt"></i></a>
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