<!-- FOOTER (EXACT 1:1 TO BK-CONNECT NEXT.JS) -->
<footer class="bg-[#092615] text-white pt-16 pb-8 border-t border-white/10 w-full">
    <div class="w-full px-6 sm:px-10 lg:px-16 xl:px-20 grid md:grid-cols-12 gap-10 border-b border-white/10 pb-12 mb-8">
        
        <!-- Kolom 1: Brand & Alamat -->
        <div class="md:col-span-5">
            <div class="flex items-center gap-3.5 mb-6">
                <div class="w-14 h-14 bg-white/10 border border-white/15 rounded-2xl p-2 flex items-center justify-center shadow-lg shadow-black/40 overflow-hidden shrink-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png" alt="Logo UNM" class="w-full h-full object-contain">
                </div>
                <div>
                    <h4 class="font-display font-semibold text-lg text-white leading-tight">
                        Bimbingan dan Konseling
                    </h4>
                    <p class="text-xs text-[#F5B82E] font-medium tracking-wide mt-0.5">
                        Jurusan PPB · Fakultas Ilmu Pendidikan · Universitas Negeri Makassar
                    </p>
                </div>
            </div>
            <p class="text-sm text-white/70 leading-relaxed font-normal pr-6">
                Kampus FIP UNM, Jl. Tamalate I, Tidung, Kec. Rappocini, Kota Makassar, Sulawesi Selatan 90222.
            </p>
            <div class="mt-4 flex items-center gap-2 text-xs text-white/80">
                <i data-lucide="award" class="w-4 h-4 text-[#F5B82E]"></i>
                <span>Peringkat Akreditasi: <strong class="text-[#F5B82E]">Unggul (LAMDIK)</strong></span>
            </div>
        </div>

        <!-- Kolom 2: Navigasi Profil -->
        <div class="md:col-span-3">
            <h4 class="font-display font-semibold text-sm text-white uppercase tracking-wider mb-4 border-b border-white/10 pb-2">
                Navigasi Profil
            </h4>
            <ul class="space-y-2.5 text-sm text-white/70">
                <li>
                    <a href="<?php echo esc_url(home_url('/profil/sejarah/')); ?>" class="hover:text-[#F5B82E] transition-colors flex items-center gap-1.5">
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-[#F5B82E]"></i> Sejarah Program Studi
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/profil/visi-misi/')); ?>" class="hover:text-[#F5B82E] transition-colors flex items-center gap-1.5">
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-[#F5B82E]"></i> Visi, Misi &amp; Tujuan
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/profil/struktur/')); ?>" class="hover:text-[#F5B82E] transition-colors flex items-center gap-1.5">
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-[#F5B82E]"></i> Struktur Organisasi
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/profil/dosen/')); ?>" class="hover:text-[#F5B82E] transition-colors flex items-center gap-1.5">
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-[#F5B82E]"></i> Direktori Dosen &amp; Staf
                    </a>
                </li>
            </ul>
        </div>

        <!-- Kolom 3: Layanan & Integrasi -->
        <div class="md:col-span-4">
            <h4 class="font-display font-semibold text-sm text-white uppercase tracking-wider mb-4 border-b border-white/10 pb-2">
                Layanan &amp; Integrasi
            </h4>
            <ul class="space-y-2.5 text-sm text-white/70">
                <li>
                    <a href="<?php echo esc_url(home_url('/akademik/jadwal-ujian/')); ?>" class="hover:text-[#F5B82E] transition-colors flex items-center gap-1.5">
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-[#F5B82E]"></i> Jadwal Seminar &amp; Ujian
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/kemahasiswaan/statistik/')); ?>" class="hover:text-[#F5B82E] transition-colors flex items-center gap-1.5">
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-[#F5B82E]"></i> Data &amp; Statistik Mahasiswa
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/kemahasiswaan/karya/')); ?>" class="hover:text-[#F5B82E] transition-colors flex items-center gap-1.5">
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-[#F5B82E]"></i> Karya &amp; Inovasi Mahasiswa
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/layanan/akademik/')); ?>" class="hover:text-[#F5B82E] transition-colors flex items-center gap-1.5">
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-[#F5B82E]"></i> Panduan Prosedur &amp; Template
                    </a>
                </li>
                <li>
                    <a href="https://bk-connect-fipunm.vercel.app/sipadu" target="_blank" rel="noopener" class="hover:text-[#F5B82E] transition-colors flex items-center gap-1.5">
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-[#F5B82E]"></i> SI-PADU-BK (Portal Mahasiswa)
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/lab-bk/')); ?>" class="hover:text-[#F5B82E] transition-colors flex items-center gap-1.5">
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-[#F5B82E]"></i> Website Laboratorium BK
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Bottom Copyright -->
    <div class="w-full px-6 sm:px-10 lg:px-16 xl:px-20 flex flex-col sm:flex-row justify-between items-center text-xs text-white/50 font-normal">
        <p>© <?php echo date('Y'); ?> Program Studi Bimbingan dan Konseling, Universitas Negeri Makassar.</p>
        <p class="mt-2 sm:mt-0">Hak Cipta Dilindungi Undang-Undang.</p>
    </div>
</footer>

<!-- FLOATING BACK TO TOP BUTTON (UNIVERSAL ON ALL PAGES) -->
<button 
    type="button" 
    id="bk-back-to-top" 
    class="bk-back-to-top" 
    aria-label="Kembali ke atas" 
    title="Kembali ke atas"
    onclick="window.scrollTo({top: 0, behavior: 'smooth'});"
>
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M18 15l-6-6-6 6"/>
    </svg>
</button>

<style>
/* Floating Back to Top Button Styling */
.bk-back-to-top {
    position: fixed !important;
    bottom: 28px !important;
    right: 28px !important;
    width: 44px !important;
    height: 44px !important;
    border-radius: 50% !important;
    background: #0D3B22 !important;
    color: #F5B82E !important;
    border: 1.5px solid rgba(245, 184, 46, 0.45) !important;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.28), 0 2px 6px rgba(0, 0, 0, 0.12) !important;
    cursor: pointer !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    z-index: 99990 !important;
    opacity: 0 !important;
    pointer-events: none !important;
    transform: translateY(16px) scale(0.9) !important;
    transition: opacity 0.3s cubic-bezier(0.16, 1, 0.3, 1), transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease !important;
    outline: none !important;
    -webkit-tap-highlight-color: transparent !important;
}

.bk-back-to-top.is-visible {
    opacity: 1 !important;
    pointer-events: auto !important;
    transform: translateY(0) scale(1) !important;
}

.bk-back-to-top:hover {
    background: #F5B82E !important;
    color: #0D3B22 !important;
    border-color: #F5B82E !important;
    box-shadow: 0 8px 24px rgba(245, 184, 46, 0.45), 0 3px 8px rgba(0, 0, 0, 0.2) !important;
    transform: translateY(-3px) scale(1.05) !important;
}

.bk-back-to-top:active {
    transform: translateY(-1px) scale(0.98) !important;
}

@media (max-width: 640px) {
    .bk-back-to-top {
        bottom: 20px !important;
        right: 20px !important;
        width: 40px !important;
        height: 40px !important;
    }
}
</style>

<script>
(function() {
    var btn = document.getElementById('bk-back-to-top');
    if (!btn) return;

    var ticking = false;
    function toggleBackToTop() {
        var scrollY = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        if (scrollY > 300) {
            btn.classList.add('is-visible');
        } else {
            btn.classList.remove('is-visible');
        }
        ticking = false;
    }

    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(toggleBackToTop);
            ticking = true;
        }
    }, { passive: true });

    toggleBackToTop();
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
