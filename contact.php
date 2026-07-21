<?php
// 1. Tentukan judul halaman spesifik untuk Contact
$title = "Contact Us - Belajar Programming Dasar";

// 2. Mulai menangkap konten halaman
ob_start();
?>

<!-- CONTACT HEADER HERO -->
<section class="py-5 my-md-4 bg-body-tertiary border-bottom border-secondary-subtle">
    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <span class="badge text-bg-success mb-3 px-3 py-2 rounded-pill fw-semibold">Hubungi Tim Kami</span>
                <h1 class="display-4 fw-bold text-white mb-3">Ada Pertanyaan atau Kendala?</h1>
                <p class="lead text-body-secondary mb-0">Apakah kamu bingung dengan salah satu materi tutorial, menemukan *bug* pada cuplikan kode, atau ingin mengajak kerja sama? Kirimkan pesanmu di bawah.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT CONTENT SECTION -->
<section class="py-5">
    <div class="container py-4">
        <div class="row g-5 justify-content-center">
            
            <!-- INFORMASI TAMBAHAN (KIRI) -->
            <div class="col-lg-5 order-lg-2">
                <div class="card bg-body-tertiary border-secondary-subtle p-4 h-100 rounded-3">
                    <h3 class="text-white fw-bold mb-4 h4">Saluran Komunikasi</h3>
                    <p class="text-body-secondary mb-4">Selain melalui formulir di samping, kamu juga bisa terhubung dengan kami melalui saluran alternatif berikut untuk respons yang lebih interaktif:</p>
                    
                    <div class="d-flex gap-3 mb-4">
                        <div class="fs-3 text-success"><i class="bi bi-envelope-at"></i></div>
                        <div>
                            <h5 class="text-white mb-1 fw-semibold">Email Dukungan</h5>
                            <p class="text-body-secondary small mb-0">support@devtutorials.id</p>
                        </div>
                    </div>
                    
                    <div class="d-flex gap-3 mb-4">
                        <div class="fs-3 text-success"><i class="bi bi-discord"></i></div>
                        <div>
                            <h5 class="text-white mb-1 fw-semibold">Komunitas Discord</h5>
                            <p class="text-body-secondary small mb-0">Join Group #DevTutorials-ID untuk diskusi *real-time* sesama pemula.</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-4">
                        <div class="fs-3 text-success"><i class="bi bi-geo-alt"></i></div>
                        <div>
                            <h5 class="text-white mb-1 fw-semibold">Lokasi Operasional</h5>
                            <p class="text-body-secondary small mb-0">Surabaya, Jawa Timur, Indonesia</p>
                        </div>
                    </div>

                    <hr class="border-secondary my-4">

                    <div class="p-3 bg-dark rounded border border-secondary-subtle">
                        <h6 class="text-white fw-bold mb-1 small"><i class="bi bi-clock text-warning me-2"></i>Waktu Respons</h6>
                        <p class="text-body-secondary small mb-0">Kami membaca setiap pesan masuk dan biasanya membalas dalam waktu kurang dari 24 jam pada hari kerja.</p>
                    </div>
                </div>
            </div>

            <!-- FORMULIR KONTAK (KANAN) -->
            <div class="col-lg-7 order-lg-1">
                <div class="card bg-body-tertiary border-secondary-subtle p-4 p-md-5 shadow-sm rounded-3">
                    <h3 class="text-white fw-bold mb-3 h4">Kirim Pesan Langsung</h3>
                    <p class="text-body-secondary mb-4 small">Seluruh kolom di bawah ini wajib diisi dengan informasi yang valid.</p>
                    
                    <form action="#" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nama" class="form-label text-white small fw-semibold">Nama Lengkap</label>
                                    <input type="text" class="form-control bg-transparent border-secondary py-2" id="nama" name="nama" placeholder="Contoh: Andi Wijaya" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label text-white small fw-semibold">Alamat Email</label>
                                    <input type="email" class="form-control bg-transparent border-secondary py-2" id="email" name="email" placeholder="andi@domain.com" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="subjek" class="form-label text-white small fw-semibold">Subjek Pesan</label>
                            <select class="form-select bg-transparent border-secondary py-2" id="subjek" name="subjek" required>
                                <option value="" disabled selected class="bg-dark">Pilih kategori kendala...</option>
                                <option value="materi" class="bg-dark">Pertanyaan Materi Tutorial</option>
                                <option value="bug" class="bg-dark">Laporan Error / Bug Kode</option>
                                <option value="kerjasama" class="bg-dark">Penawaran Kerja Sama</option>
                                <option value="lainnya" class="bg-dark">Lainnya</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="pesan" class="form-label text-white small fw-semibold">Isi Pesan Anda</label>
                            <textarea class="form-control bg-transparent border-secondary" id="pesan" name="pesan" rows="5" placeholder="Tuliskan masukan atau pertanyaanmu secara detail..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-success px-4 py-2.5 rounded-3 mt-2 fw-semibold d-inline-flex align-items-center">
                            <i class="bi bi-send-fill me-2"></i> Kirim Pesan Sekarang
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
// 3. Ambil seluruh konten yang sudah ditangkap
$content = ob_get_clean();

// 4. Render ke dalam master layout
include __DIR__ . '/layouts/app.php';
?>