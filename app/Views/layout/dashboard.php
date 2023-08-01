<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1 class="h3 mb-4 text-gray-800"><i class="fa fa-home"></i> Halaman Utama</h1>
<div class="row">

    <!-- Jumlah Data Siswa -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2" style="border-radius: 16px !important;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col ml-2">
                        <div class="h1 mb-3 font-weight-bold text-gray-800"><?= $dataSiswa; ?></div>
                        <div class="text-lg font-weight-bold text-uppercase mb-1">Dalam Pengiriman</div>
                        <div class="text-xs mb-1" style="color: #8B909A;">Diperbarui 1 jam yang lalu</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jumlah Data Kelas -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2" style="border-radius: 16px !important;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col ml-2">
                        <div class="h1 mb-3 font-weight-bold text-gray-800"><?= $dataKelas; ?></div>
                        <div class="text-lg font-weight-bold text-uppercase mb-1">Siap Diambil</div>
                        <div class="text-xs mb-1" style="color: #8B909A;">Diperbarui 1 hari yang lalu</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jumlah Data Petugas -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2" style="border-radius: 16px !important;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col ml-2">
                        <div class="h1 mb-3 font-weight-bold text-gray-800"><?= $dataPetugas; ?></div>
                        <div class="text-lg font-weight-bold text-uppercase mb-1">Belum Dibayar</div>
                        <div class="text-xs mb-1" style="color: #8B909A;">Diperbarui 1 jam yang lalu</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>