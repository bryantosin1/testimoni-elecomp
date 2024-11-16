<?= $this->extend('Layout/user_layout') ?>

<?= $this->section('title') ?>
Detail Pencapaian Ekspor
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
<style>
.form-container {
    background-color: #FFF7D4;
}

.form-container .form input {
    background-color: #FFF7D4;
}

.form-container .btn-primary {
    background-color: #4C3D3D;
}
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container px-md-0 px-4">
    <div class="form-container mt-5 px-5 py-5">
        <h1 class="text-center">Detail Pencapaian Ekspor</h1>
        <form class="form row px-md-5 mt-5" action="/progress/tambah">
            <div class="col-md px-5">
                <div class="input-form mb-3">
                    <label class="form-label" for="tanggal_ekspor">Tanggal Ekspor</label>
                    <input readonly class="form-control border border-dark border-2" type="text"
                        value="<?= date('d-m-Y', strtotime($progress['tanggal_ekspor'])) ?>" id="tanggal_ekspor"
                        name="tanggal">
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="negara_ekspor">Negara Ekspor</label>
                    <input readonly class="form-control border border-dark border-2" type="text" id="negara_ekspor"
                        name="negara" value="<?= $progress['negara_ekspor'] ?>" readonly>
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="jenis_ekspor">Jenis Ekspor</label>
                    <input readonly class="form-control border border-dark border-2" type="text" id="jenis_ekspor"
                        name="jenis" value="<?= $progress['jenis_ekspor'] ?>" readonly>
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="produk_ekspor">Produk Ekspor</label>
                    <input readonly class="form-control border border-dark border-2" type="text" id="produk_ekspor"
                        name="produk" value="<?= $progress['produk_ekspor'] ?>" readonly>
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="nama_importir">Nama Importir</label>
                    <input readonly class="form-control border border-dark border-2" type="text" id="nama_importir"
                        name="nama_importir" value="<?= $progress['nama_importir'] ?>" readonly>
                </div>
            </div>
            <div class="col-md px-5">
                <div class="input-form mb-3">
                    <label class="form-label" for="nilai_ekspor_rp">Nilai Ekspor (Rp)</label>
                    <input readonly class="form-control border border-dark border-2" type="number" id="nilai_ekspor_rp"
                        name="nilai_ekspor_rp" value="<?= $progress['nilai_ekspor_rp'] ?>" readonly>
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="nilai_ekspor_usd">Nilai Ekspor (USD)</label>
                    <input readonly class="form-control border border-dark border-2" type="number" id="nilai_ekspor_usd"
                        name="nilai_ekspor_usd" value="<?= $progress['nilai_ekspor_usd'] ?>" readonly>
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="kuantitas_ekspor">Kuantitas Ekspor</label>
                    <input readonly class="form-control border border-dark border-2" type="text" id="kuantitas_ekspor"
                        name="kuantitas" value="<?= $progress['kuantitas_ekspor'] ?>" readonly>
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="bukti_ekspor">Bukti Ekspor</label>
                    <input readonly class="form-control border border-dark border-2" type="text" id="bukti_ekspor"
                        name="bukti">
                </div>
            </div>
            <div class="input-form mb-3-button d-flex justify-content-center mt-5 mb-3">
                <a class="btn btn-primary w-25" href="/progress">Kembali</a>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>