<?php
/**
 * Template Name: E-Library & Repositori Modul
 * Description: Template halaman Perpustakaan Digital Prodi BK FIP UNM (Modul Pembelajaran, Buku Ajar, Panduan Praktikum, & Artikel Ilmiah).
 */

if (!defined('ABSPATH')) exit;

get_header();

// Sample Data Koleksi Modul & Artikel Ilmiah Prodi BK FIP UNM
$elibrary_items = array(
    array(
        'id'          => 1,
        'title'       => 'Modul Praktikum Konseling Individual Berbasis Kognitif-Perilaku (CBT)',
        'category'    => 'modul',
        'cat_label'   => 'Modul Praktikum',
        'authors'     => 'Tim Dosen Laboratorium BK FIP UNM',
        'year'        => '2025',
        'pages'       => '64 Hlm',
        'format'      => 'PDF',
        'size'        => '3.2 MB',
        'desc'        => 'Panduan terstruktur pelaksanaan praktikum konseling mikro (micro counseling) dan penerapan teknik cognitive restructuring untuk mahasiswa sarjana.',
        'file_url'    => '#',
        'badge_color' => '#185333',
    ),
    array(
        'id'          => 2,
        'title'       => 'Buku Pedoman Praktik Pengalaman Lapangan (PPL) Bimbingan & Konseling Sekolah',
        'category'    => 'buku',
        'cat_label'   => 'Pedoman Akademik',
        'authors'     => 'Program Studi BK FIP UNM',
        'year'        => '2025',
        'pages'       => '88 Hlm',
        'format'      => 'PDF',
        'size'        => '4.1 MB',
        'desc'        => 'Ketentuan teknis, format laporan, instrumen penilaian, dan tata tertib mahasiswa dalam pelaksanaan PPL BK di satuan pendidikan mitra (SMP/SMA/SMK).',
        'file_url'    => '#',
        'badge_color' => '#0D3B22',
    ),
    array(
        'id'          => 3,
        'title'       => 'Modul Asesmen Psikologis Non-Tes: Angket, Sosiometri, & AUM',
        'category'    => 'asesmen',
        'cat_label'   => 'Instrumen Asesmen',
        'authors'     => 'Laboratorium BK & Konseling FIP UNM',
        'year'        => '2024',
        'pages'       => '76 Hlm',
        'format'      => 'PDF',
        'size'        => '2.8 MB',
        'desc'        => 'Petunjuk operasional administrasi, skoring, tabulasi, dan interpretasi profil kebutuhan konseli menggunakan Alat Ungkap Masalah (AUM) dan Sosiometri.',
        'file_url'    => '#',
        'badge_color' => '#854D0E',
    ),
    array(
        'id'          => 4,
        'title'       => 'Pengembangan Model Bimbingan Karir Berorientasi Industri 4.0 bagi Siswa Menengah',
        'category'    => 'artikel',
        'cat_label'   => 'Artikel Ilmiah',
        'authors'     => 'Sivitas Akademika BK FIP UNM',
        'year'        => '2024',
        'pages'       => '14 Hlm',
        'format'      => 'PDF',
        'size'        => '850 KB',
        'desc'        => 'Kajian empiris efektivitas model bimbingan karir kontekstual dalam meningkatkan kesiapan kerja (career readiness) dan pemahaman diri peserta didik.',
        'file_url'    => '#',
        'badge_color' => '#1E3A8A',
    ),
    array(
        'id'          => 5,
        'title'       => 'Diktat Pembelajaran: Dinamika Konseling Kelompok & Manajemen Konflik Remaja',
        'category'    => 'modul',
        'cat_label'   => 'Modul Pembelajaran',
        'authors'     => 'Pengampu Mata Kuliah Konseling Kelompok',
        'year'        => '2024',
        'pages'       => '92 Hlm',
        'format'      => 'PDF',
        'size'        => '3.6 MB',
        'desc'        => 'Konsep dasar tahap pembentukan, peralihan, kegiatan, dan pengakhiran dalam dinamika kelompok serta simulasi penanganan resistensi anggota kelompok.',
        'file_url'    => '#',
        'badge_color' => '#185333',
    ),
    array(
        'id'          => 6,
        'title'       => 'Panduan Penulisan Skripsi & Tugas Akhir Bidang Bimbingan dan Konseling',
        'category'    => 'buku',
        'cat_label'   => 'Pedoman Akademik',
        'authors'     => 'Tim Penjaminan Mutu Prodi BK UNM',
        'year'        => '2025',
        'pages'       => '110 Hlm',
        'format'      => 'PDF',
        'size'        => '5.2 MB',
        'desc'        => 'Standar format penulisan proposal, laporan hasil, artikel jurnal syarat yudisium, kode etik sitasi, dan prosedur uji kesamaan (similarity check Turnitin).',
        'file_url'    => '#',
        'badge_color' => '#0D3B22',
    ),
);
?>

<div class="bk-page-wrapper" style="width:100%;min-height:100vh;background-color:#FAF8F5;font-family:'Poppins',sans-serif;color:#111827;">

    <!-- =================================================================== -->
    <!-- 1. HERO HEADER: E-LIBRARY & REPOSITORI                             -->
    <!-- =================================================================== -->
    <section style="position:relative;overflow:hidden;background:#0D3B22;border-bottom:1px solid rgba(255,255,255,0.1);color:#ffffff;padding:var(--bk-top-clearance, 125px) 0 45px;">
        <!-- Ambient Radial Glow -->
        <div style="position:absolute;top:-100px;right:-10%;width:500px;height:500px;border-radius:50%;background:rgba(24,83,51,0.4);filter:blur(80px);pointer-events:none;"></div>
        <div style="position:absolute;bottom:-120px;left:-10%;width:420px;height:420px;border-radius:50%;background:rgba(245,184,46,0.15);filter:blur(80px);pointer-events:none;"></div>
        <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px);background-size:24px 24px;pointer-events:none;"></div>

        <div class="bk-container" style="position:relative;width:100%;box-sizing:border-box;">
            <!-- Breadcrumb Navigation -->
            <a href="<?php echo esc_url(home_url('/')); ?>" style="display:inline-flex;align-items:center;gap:6px;font-size:12px;font-weight:600;color:rgba(255,255,255,0.7);text-decoration:none;margin-bottom:16px;transition:color 0.2s;" onmouseover="this.style.color='#F5B82E'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">
                <span>&larr; Kembali ke Beranda</span>
            </a>

            <!-- Badge -->
            <div style="display:inline-flex;align-items:center;gap:7px;padding:4px 14px;border-radius:9999px;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.18);color:#F5B82E;font-size:11px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;margin-bottom:14px;">
                <span style="display:inline-block;width:6px;height:6px;border-radius:50%;background:#F5B82E;"></span>
                <span>Perpustakaan Digital &amp; Repositori Belajar</span>
            </div>

            <!-- Title & Subtitle -->
            <h1 style="font-family:'Fraunces',Georgia,serif;font-size:clamp(28px, 4.2vw, 46px);font-weight:600;color:#ffffff;line-height:1.2;margin:0 0 12px 0;">
                E-Library &amp; Repositori Modul <span style="font-style:italic;color:#F5B82E;">Prodi BK</span>
            </h1>

            <p style="font-size:clamp(14px, 1.4vw, 15.5px);line-height:1.7;color:rgba(255,255,255,0.85);margin:0 0 24px 0;max-width:780px;">
                Akses terbuka modul pembelajaran, panduan praktikum laboratorium, buku rujukan mata kuliah, dan karya artikel ilmiah sivitas akademika Jurusan PPB / Prodi BK FIP Universitas Negeri Makassar.
            </p>

            <!-- Live Search Bar -->
            <div style="max-width:640px;position:relative;margin-bottom:28px;">
                <input type="text" id="elib-search-input" placeholder="Cari judul modul, buku panduan, atau nama dosen pengampu..." style="width:100%;box-sizing:border-box;padding:14px 20px 14px 48px;border-radius:12px;background:#ffffff;border:2px solid #D4E3D8;font-size:14.5px;color:#111827;font-family:'Poppins',sans-serif;outline:none;box-shadow:0 8px 24px rgba(0,0,0,0.12);transition:border-color 0.2s, box-shadow 0.2s;" onfocus="this.style.borderColor='#F5B82E';this.style.boxShadow='0 8px 28px rgba(245,184,46,0.25)';" onblur="this.style.borderColor='#D4E3D8';this.style.boxShadow='0 8px 24px rgba(0,0,0,0.12)';">
                <!-- Search Icon -->
                <svg style="position:absolute;left:16px;top:50%;transform:translateY(-50%);width:20px;height:20px;color:#6B7280;pointer-events:none;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>

            <!-- Stats Bar -->
            <div style="display:flex;align-items:center;gap:12px;flex-wrap:wrap;">
                <div style="border-radius:8px;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);padding:10px 18px;">
                    <span style="font-family:'Poppins',sans-serif;font-size:20px;font-weight:700;color:#ffffff;display:block;line-height:1;" id="elib-count-display"><?php echo count($elibrary_items); ?></span>
                    <span style="font-size:11px;font-weight:500;color:rgba(255,255,255,0.7);text-transform:uppercase;letter-spacing:0.05em;">Total Modul &amp; Buku</span>
                </div>
                <div style="border-radius:8px;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);padding:10px 18px;">
                    <span style="font-family:'Poppins',sans-serif;font-size:20px;font-weight:700;color:#F5B82E;display:block;line-height:1;">100%</span>
                    <span style="font-size:11px;font-weight:500;color:rgba(255,255,255,0.7);text-transform:uppercase;letter-spacing:0.05em;">Akses Terbuka Sivitas</span>
                </div>
                <div style="border-radius:8px;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);padding:10px 18px;">
                    <span style="font-family:'Poppins',sans-serif;font-size:20px;font-weight:700;color:#34D399;display:block;line-height:1;">Digital PDF</span>
                    <span style="font-size:11px;font-weight:500;color:rgba(255,255,255,0.7);text-transform:uppercase;letter-spacing:0.05em;">Format Siap Unduh</span>
                </div>
            </div>
        </div>
    </section>

    <!-- =================================================================== -->
    <!-- 2. FILTER PILLS & GRID KOLEKSI                                      -->
    <!-- =================================================================== -->
    <main style="padding:36px 0 70px;width:100%;box-sizing:border-box;">
        <div class="bk-container" style="width:100%;box-sizing:border-box;">

            <!-- Category Filter Buttons -->
            <div style="display:flex;align-items:center;gap:10px;flex-wrap:wrap;margin-bottom:32px;" id="elib-filter-pills">
                <button type="button" class="elib-filter-btn active" data-filter="all" style="padding:9px 18px;border-radius:9999px;font-size:13px;font-weight:600;font-family:'Poppins',sans-serif;cursor:pointer;border:1px solid #185333;background:#185333;color:#ffffff;transition:all 0.2s;">
                    Semua Koleksi
                </button>
                <button type="button" class="elib-filter-btn" data-filter="modul" style="padding:9px 18px;border-radius:9999px;font-size:13px;font-weight:600;font-family:'Poppins',sans-serif;cursor:pointer;border:1px solid #D4E3D8;background:#ffffff;color:#374151;transition:all 0.2s;">
                    📘 Modul Pembelajaran
                </button>
                <button type="button" class="elib-filter-btn" data-filter="buku" style="padding:9px 18px;border-radius:9999px;font-size:13px;font-weight:600;font-family:'Poppins',sans-serif;cursor:pointer;border:1px solid #D4E3D8;background:#ffffff;color:#374151;transition:all 0.2s;">
                    📕 Buku &amp; Panduan PPL/Skripsi
                </button>
                <button type="button" class="elib-filter-btn" data-filter="asesmen" style="padding:9px 18px;border-radius:9999px;font-size:13px;font-weight:600;font-family:'Poppins',sans-serif;cursor:pointer;border:1px solid #D4E3D8;background:#ffffff;color:#374151;transition:all 0.2s;">
                    📋 Instrumen &amp; Asesmen BK
                </button>
                <button type="button" class="elib-filter-btn" data-filter="artikel" style="padding:9px 18px;border-radius:9999px;font-size:13px;font-weight:600;font-family:'Poppins',sans-serif;cursor:pointer;border:1px solid #D4E3D8;background:#ffffff;color:#374151;transition:all 0.2s;">
                    📑 Artikel Ilmiah
                </button>
            </div>

            <!-- Grid Items Container -->
            <div id="elib-grid" style="display:grid;grid-template-columns:repeat(auto-fill, minmax(330px, 1fr));gap:24px;">
                <?php foreach ($elibrary_items as $item) : ?>
                    <article class="elib-card" data-category="<?php echo esc_attr($item['category']); ?>" data-title="<?php echo esc_attr(strtolower($item['title'])); ?>" data-author="<?php echo esc_attr(strtolower($item['authors'])); ?>" style="background:#ffffff;border:1px solid #D4E3D8;border-radius:20px;padding:26px;display:flex;flex-direction:column;justify-content:space-between;box-shadow:0 4px 16px rgba(0,0,0,0.03);transition:transform 0.25s cubic-bezier(0.16,1,0.3,1), box-shadow 0.25s, border-color 0.25s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 30px rgba(13,59,34,0.1)';this.style.borderColor='#185333';" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 16px rgba(0,0,0,0.03)';this.style.borderColor='#D4E3D8';">
                        <div>
                            <!-- Header Card Meta -->
                            <div style="display:flex;align-items:center;justify-content:space-between;gap:8px;margin-bottom:14px;">
                                <span style="background:<?php echo esc_attr($item['badge_color']); ?>;color:#ffffff;font-size:11px;font-weight:700;padding:4px 10px;border-radius:6px;text-transform:uppercase;letter-spacing:0.04em;">
                                    <?php echo esc_html($item['cat_label']); ?>
                                </span>
                                <span style="font-size:11px;font-weight:600;color:#6B7280;background:#F3F4F6;padding:3px 8px;border-radius:4px;border:1px solid #E5E7EB;">
                                    <?php echo esc_html($item['format']); ?> &bull; <?php echo esc_html($item['size']); ?>
                                </span>
                            </div>

                            <!-- Title -->
                            <h2 style="font-family:'Fraunces',Georgia,serif;font-size:19px;font-weight:600;color:#0D3B22;line-height:1.35;margin:0 0 10px 0;">
                                <?php echo esc_html($item['title']); ?>
                            </h2>

                            <!-- Author & Year Meta -->
                            <div style="display:flex;align-items:center;gap:6px;font-size:12.5px;color:#4B5563;margin-bottom:12px;font-weight:500;">
                                <svg style="width:15px;height:15px;color:#185333;flex-shrink:0;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                <span><?php echo esc_html($item['authors']); ?> (<?php echo esc_html($item['year']); ?>)</span>
                            </div>

                            <!-- Description -->
                            <p style="font-size:13.5px;line-height:1.65;color:#4B5563;margin:0 0 20px 0;">
                                <?php echo esc_html($item['desc']); ?>
                            </p>
                        </div>

                        <!-- Card Footer / Action Buttons -->
                        <div style="border-top:1px solid #E5E7EB;padding-top:16px;display:flex;align-items:center;justify-content:space-between;gap:10px;">
                            <span style="font-size:12px;color:#9CA3AF;font-weight:500;">
                                <?php echo esc_html($item['pages']); ?>
                            </span>
                            <div style="display:flex;gap:8px;">
                                <a href="<?php echo esc_url($item['file_url']); ?>" style="display:inline-flex;align-items:center;gap:6px;background:#0D3B22;color:#ffffff;text-decoration:none;padding:8px 14px;border-radius:8px;font-size:12.5px;font-weight:600;transition:background 0.2s;" onmouseover="this.style.background='#F5B82E';this.style.color='#0D3B22';" onmouseout="this.style.background='#0D3B22';this.style.color='#ffffff';">
                                    <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    <span>Unduh Dokumen</span>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <!-- Empty State if no search matches -->
            <div id="elib-empty-state" style="display:none;background:#ffffff;border:1px dashed #D4E3D8;border-radius:18px;padding:48px 24px;text-align:center;margin-top:20px;">
                <div style="font-size:42px;margin-bottom:12px;">🔍</div>
                <h3 style="font-family:'Fraunces',Georgia,serif;font-size:20px;color:#0D3B22;margin:0 0 8px 0;">Modul atau Dokumen Tidak Ditemukan</h3>
                <p style="font-size:14px;color:#6B7280;margin:0 0 16px 0;max-width:500px;margin-left:auto;margin-right:auto;">
                    Tidak ada modul pembelajaran atau artikel yang cocok dengan kata kunci pencarian Anda. Silakan coba kata kunci lain.
                </p>
                <button type="button" onclick="document.getElementById('elib-search-input').value='';document.querySelector('[data-filter=\'all\']').click();" style="background:#185333;color:#ffffff;border:none;padding:8px 18px;border-radius:8px;font-size:13px;font-weight:600;cursor:pointer;">
                    Reset Pencarian
                </button>
            </div>

            <!-- =============================================================== -->
            <!-- 3. BANNER KONTRIBUSI KARYA & MODUL                              -->
            <!-- =============================================================== -->
            <div style="margin-top:60px;background:linear-gradient(135deg, #0D3B22 0%, #185333 100%);color:#ffffff;border-radius:24px;padding:clamp(28px, 4vw, 44px);display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:24px;box-shadow:0 10px 30px rgba(13,59,34,0.15);position:relative;overflow:hidden;">
                <div style="max-width:680px;position:relative;z-index:2;">
                    <span style="background:rgba(245,184,46,0.2);color:#F5B82E;font-size:11px;font-weight:700;padding:4px 12px;border-radius:9999px;text-transform:uppercase;letter-spacing:0.06em;display:inline-block;margin-bottom:12px;border:1px solid rgba(245,184,46,0.3);">
                        Sumbang Karya Ilmiah &amp; Modul Ajar
                    </span>
                    <h3 style="font-family:'Fraunces',Georgia,serif;font-size:clamp(22px, 3vw, 28px);font-weight:600;margin:0 0 10px 0;color:#ffffff;line-height:1.3;">
                        Ingin Mengunggah Modul Praktikum atau Artikel Anda?
                    </h3>
                    <p style="font-size:14px;line-height:1.65;color:rgba(255,255,255,0.85);margin:0;">
                        Dosen, peneliti, dan mahasiswa Jurusan PPB FIP UNM dapat mendistribusikan modul ajar, instrumen konseling, atau hasil karya ilmiah ke repositori e-library resmi untuk menunjang tridharma perguruan tinggi.
                    </p>
                </div>
                <div style="position:relative;z-index:2;">
                    <a href="<?php echo esc_url(home_url('/layanan/')); ?>" style="display:inline-flex;align-items:center;gap:8px;background:#F5B82E;color:#0D3B22;text-decoration:none;font-weight:700;font-size:13.5px;padding:12px 24px;border-radius:10px;box-shadow:0 4px 15px rgba(245,184,46,0.3);transition:all 0.2s;" onmouseover="this.style.background='#ffffff';this.style.color='#0D3B22';" onmouseout="this.style.background='#F5B82E';this.style.color='#0D3B22';">
                        <span>Ajukan Modul / Naskah &rarr;</span>
                    </a>
                </div>
            </div>

        </div>
    </main>

</div>

<!-- Interactive Client-side Search & Filter Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('elib-search-input');
    const filterButtons = document.querySelectorAll('.elib-filter-btn');
    const cards = document.querySelectorAll('.elib-card');
    const emptyState = document.getElementById('elib-empty-state');
    const countDisplay = document.getElementById('elib-count-display');

    let currentFilter = 'all';

    function filterCards() {
        const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
        let visibleCount = 0;

        cards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            const cardTitle = card.getAttribute('data-title');
            const cardAuthor = card.getAttribute('data-author');

            const matchesCategory = (currentFilter === 'all' || cardCategory === currentFilter);
            const matchesQuery = (!query || cardTitle.includes(query) || cardAuthor.includes(query));

            if (matchesCategory && matchesQuery) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        if (emptyState) {
            emptyState.style.display = (visibleCount === 0) ? 'block' : 'none';
        }
        if (countDisplay) {
            countDisplay.textContent = visibleCount;
        }
    }

    if (searchInput) {
        searchInput.addEventListener('input', filterCards);
    }

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            filterButtons.forEach(b => {
                b.style.background = '#ffffff';
                b.style.color = '#374151';
                b.style.borderColor = '#D4E3D8';
                b.classList.remove('active');
            });
            this.style.background = '#185333';
            this.style.color = '#ffffff';
            this.style.borderColor = '#185333';
            this.classList.add('active');

            currentFilter = this.getAttribute('data-filter');
            filterCards();
        });
    });
});
</script>

<?php get_footer(); ?>
