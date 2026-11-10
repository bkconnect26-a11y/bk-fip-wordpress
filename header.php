<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <!-- BK_THEME_VER: 2.1.2_20261028_URLFIX -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
        <style>
    /* CSS VARIABLES: NAVBAR EDGE ALIGNMENT, TOP CLEARANCE & ADMIN BAR INTEGRATION */
    :root {
        --bk-edge-pad: 1rem;
        --bk-navbar-height: 56px;
        --bk-admin-bar-offset: 0px;
        --bk-top-clearance: 16px;
    }
    @media (min-width: 640px) {
        :root {
            --bk-edge-pad: 2rem;
            --bk-navbar-height: 64px;
            --bk-top-clearance: 20px;
        }
    }
    @media (min-width: 1024px) {
        :root {
            --bk-edge-pad: 3rem;
        }
    }
    body.admin-bar {
        --bk-admin-bar-offset: 32px;
    }
    @media screen and (max-width: 782px) {
        body.admin-bar {
            --bk-admin-bar-offset: 46px;
        }
    }

    /* WordPress Top Admin Bar Protection (Never distorts or shifts page layout) */
    #wpadminbar {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        width: 100% !important;
        height: 32px !important;
        min-height: 32px !important;
        max-height: 32px !important;
        background: #1d2327 !important;
        color: #c3c4c7 !important;
        z-index: 999999 !important;
        margin: 0 !important;
        padding: 0 !important;
        box-sizing: border-box !important;
    }
    @media screen and (max-width: 782px) {
        #wpadminbar {
            height: 46px !important;
            min-height: 46px !important;
            max-height: 46px !important;
        }
    }

    /* Fixed Navbar & Spacer Positioning (Immune to Tailwind CDN late injection) */
    #bk-main-navbar,
    nav.fixed {
        position: fixed !important;
        top: 0px !important;
        left: 0 !important;
        right: 0 !important;
        width: 100% !important;
        z-index: 99990 !important;
    }
    body.admin-bar #bk-main-navbar,
    body.admin-bar nav.fixed {
        top: 32px !important;
    }
    @media screen and (max-width: 782px) {
        body.admin-bar #bk-main-navbar,
        body.admin-bar nav.fixed {
            top: 46px !important;
        }
    }

    /* Dedicated Flow Spacer Below Fixed Navbar (100% prevents navbar overlap on all pages) */
    #bk-navbar-spacer {
        width: 100% !important;
        height: 64px !important;
        background-color: #0D3B22 !important;
        display: block !important;
        margin: 0 !important;
        padding: 0 !important;
        flex-shrink: 0 !important;
    }
    body.admin-bar #bk-navbar-spacer {
        height: 112px !important;
    }
    @media (min-width: 640px) {
        #bk-navbar-spacer {
            height: 88px !important;
        }
        body.admin-bar #bk-navbar-spacer {
            height: 120px !important;
        }
    }
    @media screen and (min-width: 640px) and (max-width: 782px) {
        body.admin-bar #bk-navbar-spacer {
            height: 134px !important;
        }
    }
    @media screen and (max-width: 639px) {
        body.admin-bar #bk-navbar-spacer {
            height: 126px !important;
        }
    }

    /* UNIFIED CONTAINER GRID: Exact Left & Right Alignment with Navbar (px-4 sm:px-8 lg:px-12) */
    
    /* Prevent nested container double padding */
    .bk-container .bk-container {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .bk-container,
    .bk-content-wrap {
        width: 100% !important;
        max-width: 100% !important;
        margin-left: auto !important;
        margin-right: auto !important;
        padding-left: var(--bk-edge-pad, 1rem) !important;
        padding-right: var(--bk-edge-pad, 1rem) !important;
        box-sizing: border-box !important;
    }

    /* Subpage Sticky Sub-Navigation Bar Alignment */
    .bk-subnav-sticky-wrap {
        width: 100% !important;
        max-width: 100% !important;
        padding-left: var(--bk-edge-pad, 1rem) !important;
        padding-right: var(--bk-edge-pad, 1rem) !important;
        box-sizing: border-box !important;
    }
    .bk-subnav-sticky-wrap > div {
        width: 100% !important;
        max-width: 100% !important;
        margin-left: auto !important;
        margin-right: auto !important;
        box-sizing: border-box !important;
    }

    /* Subpage Section & Main Body Alignment */
    .bk-page-wrapper > main,
    main.bk-subpage-main {
        width: 100% !important;
        max-width: 100% !important;
        margin-left: auto !important;
        margin-right: auto !important;
        padding-left: var(--bk-edge-pad, 1rem) !important;
        padding-right: var(--bk-edge-pad, 1rem) !important;
        padding-bottom: 80px !important;
        box-sizing: border-box !important;
    }
    .bk-page-wrapper > section:first-of-type {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }
    .bk-page-wrapper > section:first-of-type > div:not([style*="position:absolute"]):not([style*="position: absolute"]):not(.orb-1):not(.orb-2):not(.dot-grid) {
        width: 100% !important;
        max-width: 100% !important;
        margin-left: auto !important;
        margin-right: auto !important;
        padding-left: var(--bk-edge-pad, 1rem) !important;
        padding-right: var(--bk-edge-pad, 1rem) !important;
        box-sizing: border-box !important;
    }
    .bk-page-wrapper > section:not(:first-of-type) {
        width: 100% !important;
        max-width: 100% !important;
        padding-left: var(--bk-edge-pad, 1rem) !important;
        padding-right: var(--bk-edge-pad, 1rem) !important;
        box-sizing: border-box !important;
    }
    .bk-page-wrapper > section:not(:first-of-type) > div {
        width: 100% !important;
        max-width: 100% !important;
        margin-left: auto !important;
        margin-right: auto !important;
        box-sizing: border-box !important;
    }

    /* Shortcode Wrapper Alignment (Avoid double padding when inside bk-content-wrap) */
    .bk-content-wrap .ppb-jadwal-wrapper,
    .bk-content-wrap .ppb-prestasi-wrapper,
    .bk-content-wrap .ppb-karya-wrapper,
    .bk-content-wrap .ppb-tracer-wrapper {
        width: 100% !important;
        max-width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    /* UNIVERSAL TOP CLEARANCE BELOW NAVBAR SPACER */
    .bk-hero-kemahasiswaan,
    .bk-section-hero_section,
    .bk-page-wrapper > section:first-of-type,
    .bk-subpage-container,
    main > section:first-of-type,
    main.content-area > section:first-of-type {
        padding-top: var(--bk-top-clearance, 36px) !important;
    }

    /* CRITICAL DROPDOWN & FULL-WIDTH PROTECTION */
    html, body {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        overflow-x: hidden !important;
    }
    main:not(.bk-container):not(.bk-subpage-main), .site-main, .content-area, #primary, #content, .bk-page-wrapper {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        box-sizing: border-box !important;
    }
    .bk-page-wrapper > section {
        width: 100% !important;
        max-width: 100% !important;
        box-sizing: border-box !important;
    }
    
    /* Navbar Button Styles & Smooth Hover Effects */
    .bk-nav-btn {
        transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
        text-decoration: none !important;
        display: inline-flex !important;
        align-items: center !important;
        border-radius: 9999px !important;
        padding: 6px 14px !important;
        font-weight: 500 !important;
        color: rgba(255, 255, 255, 0.88) !important;
        border: 1px solid transparent !important;
        background: transparent !important;
        cursor: pointer !important;
    }
    .bk-nav-btn:hover {
        background: rgba(255, 255, 255, 0.15) !important;
        color: #F5B82E !important;
        border-color: rgba(245, 184, 46, 0.4) !important;
        transform: translateY(-1px);
    }
    .bk-nav-btn.is-active-btn {
        background: #F5B82E !important;
        color: #0D3B22 !important;
        font-weight: 700 !important;
        border: 1px solid #F5B82E !important;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2) !important;
    }
    .bk-nav-btn.is-active-btn:hover {
        background: #fcd34d !important;
        color: #0D3B22 !important;
        box-shadow: 0 4px 12px rgba(245, 184, 46, 0.35) !important;
    }
    .bk-nav-btn.is-active-dropdown {
        background: rgba(255, 255, 255, 0.14) !important;
        color: #F5B82E !important;
        border: 1px solid rgba(245, 184, 46, 0.45) !important;
        font-weight: 700 !important;
    }
    .bk-nav-btn.is-active-dropdown:hover {
        background: rgba(255, 255, 255, 0.22) !important;
        color: #F5B82E !important;
        border-color: rgba(245, 184, 46, 0.6) !important;
    }

    /* Dropdown Menu Container */
    .dropdown-menu {
        background-color: #ffffff !important;
        border-radius: 16px !important;
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(0, 0, 0, 0.05) !important;
        padding: 6px !important;
        min-width: 240px !important;
    }
    .dropdown-menu a.bk-dropdown-link {
        display: flex !important;
        align-items: center !important;
        padding: 8px 12px !important;
        border-radius: 10px !important;
        font-size: 13px !important;
        font-weight: 500 !important;
        color: #374151 !important;
        background-color: transparent !important;
        text-decoration: none !important;
        line-height: 1.25 !important;
        position: relative !important;
        transition: all 0.15s ease !important;
    }
    .dropdown-menu a.bk-dropdown-link:hover {
        background-color: #FAF8F5 !important;
        color: #0D3B22 !important;
    }
    .dropdown-menu a.bk-dropdown-link.is-active {
        background-color: #E8F0EA !important;
        color: #0D3B22 !important;
        font-weight: 700 !important;
    }
    .dropdown-menu a.bk-dropdown-link .bk-dropdown-indicator {
        width: 4px !important;
        height: 12px !important;
        border-radius: 2px !important;
        margin-right: 8px !important;
        display: inline-block !important;
        flex-shrink: 0 !important;
        background-color: transparent !important;
    }
    .dropdown-menu a.bk-dropdown-link.is-active .bk-dropdown-indicator {
        background-color: #0D3B22 !important;
    }
    .dropdown-menu a::before,
    .dropdown-menu a::after {
        content: none !important;
        display: none !important;
    }
    
    /* BULLETPROOF NAVBAR & DROPDOWN DISPLAY RULES (Immune to CDN delays or offline states) */
    /* =========================================================================
       BULLETPROOF RESPONSIVE NAVIGATION DISPLAY & HOVER RULES
       ========================================================================= */

    /* 1. Desktop Navigation Bar */
    @media (max-width: 767px) {
        #bk-desktop-nav,
        .bk-desktop-nav {
            display: none !important;
        }
        #mobile-nav-toggle {
            display: inline-flex !important;
        }
        #mobile-nav-menu {
            width: 100% !important;
            background-color: #0D3B22 !important;
            border-bottom: 2px solid rgba(245, 184, 46, 0.4) !important;
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.45) !important;
            max-height: calc(100vh - 80px) !important;
            overflow-y: auto !important;
            -webkit-overflow-scrolling: touch;
            box-sizing: border-box !important;
            z-index: 99995 !important;
        }
        #mobile-nav-menu.is-open {
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
        }
        #mobile-nav-menu:not(.is-open) {
            display: none !important;
        }
    }

    @media (min-width: 768px) {
        #bk-desktop-nav,
        .bk-desktop-nav {
            display: flex !important;
        }
        #mobile-nav-toggle {
            display: none !important;
        }
        #mobile-nav-menu {
            display: none !important;
        }
        .md\:hidden {
            display: none !important;
        }
        .md\:flex {
            display: flex !important;
        }
    }

    /* 2. Desktop Dropdown Menus (Bulletproof Pure CSS Hover) */
    .dropdown-container {
        position: relative;
    }
    .dropdown-menu {
        display: none !important;
        position: absolute !important;
        top: 100% !important;
        left: 0 !important;
        z-index: 99999 !important;
    }
    .dropdown-container:hover > .dropdown-menu,
    .group:hover > .dropdown-menu,
    .dropdown-menu:hover {
        display: block !important;
    }
    /* Invisible hover bridge to prevent losing hover when cursor travels between button and dropdown */
    .dropdown-menu::before {
        content: "" !important;
        display: block !important;
        position: absolute !important;
        top: -12px !important;
        left: 0 !important;
        right: 0 !important;
        height: 14px !important;
        background: transparent !important;
    }

    /* 3. Mobile Hamburger Toggle Button */
    #mobile-nav-toggle {
        display: none;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        min-width: 44px;
        min-height: 44px;
        padding: 0;
        background: transparent;
        border: none;
        cursor: pointer;
        color: #ffffff;
        border-radius: 10px;
        touch-action: manipulation;
        -webkit-tap-highlight-color: transparent;
        z-index: 99999;
    }
    #mobile-nav-toggle:hover,
    #mobile-nav-toggle:focus {
        background-color: rgba(255, 255, 255, 0.12);
    }

    /* 4. Mobile Submenu Accordions */
    .mobile-acc-content {
        display: none !important;
    }
    .mobile-acc-content.is-open {
        display: block !important;
    }
    .mobile-acc-btn svg {
        transition: transform 0.25s ease !important;
    }
    .mobile-acc-btn.is-open svg {
        transform: rotate(180deg) !important;
    }
    </style>
</head>
<body <?php body_class('min-h-screen bg-[#FAF8F5] text-gray-900 selection:bg-[#F5B82E] selection:text-[#0D3B22]'); ?>>
<?php wp_body_open(); ?>

<?php
// =============================================================================
// Active Page & Navigation Detection (Bulletproof Path Matching)
// =============================================================================
$req_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$req_path = parse_url($req_uri, PHP_URL_PATH) ?? '';
$home_path = parse_url(home_url(), PHP_URL_PATH) ?? '';
if (!empty($home_path) && strpos($req_path, $home_path) === 0) {
    $req_path = substr($req_path, strlen($home_path));
}
$current_path = trim($req_path, '/');

// Is Front Page
$is_home = is_front_page() || is_home() || empty($current_path) || $current_path === 'beranda';

// Helper function to check if a navigation URL matches the current path
if (!function_exists('ppb_nav_is_active')) {
    function ppb_nav_is_active($url, $current_path, $is_home) {
        if (empty($url)) return false;
        
        $clean_url = trim($url);
        // An item with '#' or empty as URL is a placeholder parent item, NEVER directly active
        if ($clean_url === '#' || strpos($clean_url, '#') === 0) {
            return false;
        }

        $m_path = parse_url($clean_url, PHP_URL_PATH) ?? '';
        $home_path = parse_url(home_url(), PHP_URL_PATH) ?? '';
        if (!empty($home_path) && strpos($m_path, $home_path) === 0) {
            $m_path = substr($m_path, strlen($home_path));
        }
        $m_path = trim($m_path, '/');

        if ($is_home) {
            $clean_item_url = rtrim(preg_replace('/^https?:/', '', $clean_url), '/');
            $clean_home_url = rtrim(preg_replace('/^https?:/', '', home_url()), '/');
            return ($clean_item_url === $clean_home_url || $m_path === 'beranda');
        }

        // On non-homepage:
        if (empty($m_path) || $m_path === 'beranda') {
            return false;
        }

        return ($m_path === $current_path || strpos($current_path, $m_path . '/') === 0 || strpos($m_path, $current_path . '/') === 0);
    }
}

// Section Active Checks (for Fallback Menus)
$is_profil = (!$is_home && (strpos($current_path, 'profil') === 0 || in_array($current_path, array('sejarah', 'visi-misi', 'struktur', 'dosen', 'roadmap', 'dokumen'))));
$is_akademik = (!$is_home && (strpos($current_path, 'akademik') === 0 || in_array($current_path, array('kurikulum', 'panduan', 'jadwal-ujian', 'statistik', 'mis-pnbp', 'jurnal-bk'))));
$is_kemahasiswaan = (!$is_home && (strpos($current_path, 'kemahasiswaan') === 0 || in_array($current_path, array('prestasi', 'karya', 'alumni'))));
$is_layanan = (!$is_home && (strpos($current_path, 'layanan') === 0 || strpos($current_path, 'lab-bk') === 0 || strpos($current_path, 'survei') === 0 || strpos($current_path, 'perlindungan-mahasiswa') !== false || strpos($current_path, 'inventaris') !== false || strpos($current_path, 'e-library') !== false || strpos($current_path, 'elibrary') !== false));
$is_berita = (!$is_home && (strpos($current_path, 'berita') === 0 || is_singular('post') || is_category()));

// Dropdown Menu Datasets (Fallback Bawaan)
$profil_menu = array(
    array('url' => home_url('/profil/'), 'path' => 'profil', 'label' => 'Ringkasan'),
    array('url' => home_url('/profil/sejarah/'), 'path' => 'profil/sejarah', 'label' => 'Sejarah Program Studi'),
    array('url' => home_url('/profil/visi-misi/'), 'path' => 'profil/visi-misi', 'label' => 'Visi, Misi & Sasaran'),
    array('url' => home_url('/profil/struktur/'), 'path' => 'profil/struktur', 'label' => 'Struktur Organisasi'),
    array('url' => home_url('/profil/dosen/'), 'path' => 'profil/dosen', 'label' => 'Dosen & Staf Pengajar'),
    array('url' => home_url('/profil/roadmap/'), 'path' => 'profil/roadmap', 'label' => 'Roadmap Riset & PKM'),
    array('url' => home_url('/profil/dokumen/'), 'path' => 'profil/dokumen', 'label' => 'Dokumen Mutu & Regulasi'),
);

$akademik_menu = array(
    array('url' => home_url('/akademik/'), 'path' => 'akademik', 'label' => 'Ringkasan Akademik'),
    array('url' => home_url('/akademik/kurikulum/'), 'path' => 'akademik/kurikulum', 'label' => 'Kurikulum OBE 2025'),
    array('url' => home_url('/akademik/panduan/'), 'path' => 'akademik/panduan', 'label' => 'Pedoman Akademik & Penilaian'),
    array('url' => home_url('/akademik/jadwal-ujian/'), 'path' => 'akademik/jadwal-ujian', 'label' => 'Jadwal Perkuliahan & Ujian'),
    array('url' => home_url('/akademik/statistik/'), 'path' => 'akademik/statistik', 'label' => 'Data & Statistik Akademik'),
    array('url' => home_url('/mis-pnbp/'), 'path' => 'mis-pnbp', 'label' => 'MIS PNBP (Riset & PkM)'),
    array('url' => home_url('/jurnal-bk/'), 'path' => 'jurnal-bk', 'label' => 'Jurnal Ilmiah Prodi BK'),
);

$kemahasiswaan_menu = array(
    array('url' => home_url('/kemahasiswaan/'), 'path' => 'kemahasiswaan', 'label' => 'Ringkasan Kemahasiswaan'),
    array('url' => home_url('/kemahasiswaan/prestasi/'), 'path' => 'kemahasiswaan/prestasi', 'label' => 'Prestasi Mahasiswa'),
    array('url' => home_url('/kemahasiswaan/karya/'), 'path' => 'kemahasiswaan/karya', 'label' => 'Karya & Inovasi Mahasiswa'),
    array('url' => home_url('/kemahasiswaan/alumni/'), 'path' => 'kemahasiswaan/alumni', 'label' => 'Direktori Alumni & Tracer Study'),
    array('url' => home_url('/kemahasiswaan/statistik/'), 'path' => 'kemahasiswaan/statistik', 'label' => 'Data & Statistik Mahasiswa'),
);

$layanan_menu = array(
    array('url' => home_url('/layanan/'), 'path' => 'layanan', 'label' => 'Ringkasan Layanan'),
    array('url' => home_url('/e-library/'), 'path' => 'e-library', 'label' => 'E-Library & Modul'),
    array('url' => home_url('/layanan/akademik/'), 'path' => 'layanan/akademik', 'label' => 'Panduan Prosedur & Template'),
    array('url' => home_url('/layanan/perlindungan-mahasiswa/'), 'path' => 'layanan/perlindungan-mahasiswa', 'label' => 'Perlindungan Mahasiswa (No. 13)'),
    array('url' => home_url('/lab-bk/inventaris/'), 'path' => 'lab-bk/inventaris', 'label' => 'Inventaris Laboratorium BK'),
    array('url' => home_url('/lab-bk/'), 'path' => 'lab-bk', 'label' => 'Website Lab BK'),
    array('url' => home_url('/survei/'), 'path' => 'survei', 'label' => 'Survei Kepuasan'),
);

// DUKUNGAN MENU DINAMIS WORDPRESS (Appearance > Menus)
$has_custom_primary_menu = false;
$custom_nav_tree = [];

if (has_nav_menu('primary-menu')) {
    $theme_locations = get_nav_menu_locations();
    if (!empty($theme_locations['primary-menu'])) {
        $menu_items = wp_get_nav_menu_items($theme_locations['primary-menu']);
        if (!empty($menu_items) && is_array($menu_items)) {
            $has_custom_primary_menu = true;
            $children_map = [];

            foreach ($menu_items as $m) {
                $is_active_item = ppb_nav_is_active($m->url, $current_path, $is_home);

                if (empty($m->menu_item_parent)) {
                    $custom_nav_tree[$m->ID] = [
                        'id'        => $m->ID,
                        'title'     => $m->title,
                        'url'       => $m->url,
                        'is_active' => $is_active_item,
                        'children'  => []
                    ];
                } else {
                    $children_map[$m->menu_item_parent][] = [
                        'id'        => $m->ID,
                        'title'     => $m->title,
                        'url'       => $m->url,
                        'is_active' => $is_active_item,
                    ];
                }
            }

            // Only mark parent active if NOT on homepage and a child is active
            if (!$is_home) {
                foreach ($children_map as $parentId => $cList) {
                    if (isset($custom_nav_tree[$parentId])) {
                        $custom_nav_tree[$parentId]['children'] = $cList;
                        foreach ($cList as $c) {
                            if (!empty($c['is_active'])) {
                                $custom_nav_tree[$parentId]['is_active'] = true;
                            }
                        }
                    }
                }
            } else {
                foreach ($children_map as $parentId => $cList) {
                    if (isset($custom_nav_tree[$parentId])) {
                        $custom_nav_tree[$parentId]['children'] = $cList;
                    }
                }
            }

            // Ensure MIS PNBP & Jurnal BK seamlessly appear in dynamic menu under Akademik
            foreach ($custom_nav_tree as &$parentItem) {
                if (stripos($parentItem['title'], 'Akademik') !== false || strpos($parentItem['url'], 'akademik') !== false) {
                    $has_pnbp = false;
                    $has_jurnal = false;
                    foreach ($parentItem['children'] as $child) {
                        if (strpos($child['url'], 'mis-pnbp') !== false) $has_pnbp = true;
                        if (strpos($child['url'], 'jurnal-bk') !== false) $has_jurnal = true;
                    }
                    if (!$has_pnbp) {
                        $parentItem['children'][] = [
                            'id' => 9991,
                            'title' => 'MIS PNBP (Riset & PkM)',
                            'url' => home_url('/mis-pnbp/'),
                            'is_active' => ppb_nav_is_active(home_url('/mis-pnbp/'), $current_path, $is_home),
                        ];
                    }
                    if (!$has_jurnal) {
                        $parentItem['children'][] = [
                            'id' => 9992,
                            'title' => 'Jurnal Ilmiah Prodi BK',
                            'url' => home_url('/jurnal-bk/'),
                            'is_active' => ppb_nav_is_active(home_url('/jurnal-bk/'), $current_path, $is_home),
                        ];
                    }
                }

                // Ensure E-Library seamlessly appears in dynamic menu under Layanan
                if (stripos($parentItem['title'], 'Layanan') !== false || strpos($parentItem['url'], 'layanan') !== false) {
                    $has_elib = false;
                    foreach ($parentItem['children'] as $child) {
                        if (strpos($child['url'], 'e-library') !== false || strpos($child['url'], 'elibrary') !== false) $has_elib = true;
                    }
                    if (!$has_elib) {
                        $parentItem['children'][] = [
                            'id' => 9993,
                            'title' => 'E-Library & Modul',
                            'url' => home_url('/e-library/'),
                            'is_active' => ppb_nav_is_active(home_url('/e-library/'), $current_path, $is_home),
                        ];
                    }
                }
            }
            unset($parentItem);
        }
    }
}
if (empty($custom_nav_tree)) {
    $has_custom_primary_menu = false;
}
?>

<!-- FIXED NAVBAR (Original Left/Right Layout: w-full px-4 sm:px-8 lg:px-12) -->
<nav id="bk-main-navbar" class="fixed w-full z-50 transition-all duration-300 bg-[#0D3B22] border-b border-white/10 text-white shadow-lg">
    <!-- Top Portal Notification Strip -->
    <div style="background:#061d11;border-bottom:1px solid rgba(255,255,255,0.06);min-height:22px;">
        <div class="w-full px-4 sm:px-8 lg:px-12 flex items-center justify-center font-sans" style="padding-top:3px;padding-bottom:3px;font-size:9.5px;color:rgba(255,255,255,0.78);line-height:1.2;padding-left:var(--bk-edge-pad, 1rem);padding-right:var(--bk-edge-pad, 1rem);box-sizing:border-box;">
            <span style="background:rgba(245,184,46,0.15);color:#F5B82E;font-size:7.5px;font-weight:700;padding:1px 5px;border-radius:3px;letter-spacing:0.04em;text-transform:uppercase;border:1px solid rgba(245,184,46,0.25);margin-right:6px;">Portal</span>
            <span>Sistem Akademik &amp; Asesmen: </span>
            <a href="https://bk-connect-fipunm.vercel.app/auth" target="_blank" rel="noopener" style="color:#F5B82E;font-weight:700;text-decoration:none;margin-left:4px;display:inline-flex;align-items:center;gap:2px;">Masuk Portal &rarr;</a>
        </div>
    </div>

    <div id="bk-main-navbar-bar" class="w-full px-4 sm:px-8 lg:px-12 h-14 sm:h-16 flex items-center justify-between" style="padding-left:var(--bk-edge-pad, 1rem);padding-right:var(--bk-edge-pad, 1rem);box-sizing:border-box;">
        
        <!-- Logo & Brand Title -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 group" style="text-decoration:none;">
            <div class="h-9 sm:h-10 flex items-center justify-center shrink-0">
                <img 
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png" 
                    alt="Logo UNM" 
                    class="h-8 sm:h-9 w-auto object-contain drop-shadow-sm"
                />
            </div>
            <div class="flex flex-col justify-center leading-none">
                <strong class="font-bold text-sm sm:text-base tracking-tight text-white font-display" style="font-family:'Fraunces',Georgia,serif;">
                    Jurusan PPB FIP UNM
                </strong>
                <span class="text-[8px] sm:text-[9px] text-[#F5B82E] font-semibold tracking-wider uppercase mt-0.5" style="font-family:'Poppins',sans-serif;">
                    BIMBINGAN DAN KONSELING
                </span>
            </div>
        </a>

        <!-- Desktop Navigation -->
        <div id="bk-desktop-nav" class="bk-desktop-nav items-center gap-1.5 lg:gap-2 text-xs sm:text-sm font-semibold">
            
            <?php if ($has_custom_primary_menu) : ?>
                <!-- Render Menu Dinamis dari WP Admin (Tampilan > Menu) -->
                <?php foreach ($custom_nav_tree as $item) : ?>
                    <?php if (!empty($item['children'])) : ?>
                        <!-- Dropdown Menu -->
                        <div class="relative group dropdown-container">
                            <button type="button" class="bk-nav-btn dropdown-trigger flex items-center gap-1 rounded-full <?php echo $item['is_active'] ? 'is-active-dropdown' : ''; ?>">
                                <span><?php echo esc_html($item['title']); ?></span>
                                <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" style="<?php echo $item['is_active'] ? 'color:#F5B82E;' : 'color:inherit;'; ?>"></i>
                            </button>
                            <div class="dropdown-menu absolute left-0 mt-0 w-64 bg-white rounded-2xl shadow-xl shadow-black/20 p-2 border border-gray-100 z-50 text-gray-800 animate-fadeIn" style="background:#ffffff !important;">
                                <?php foreach ($item['children'] as $child) : 
                                    $is_c_active = !empty($child['is_active']);
                                ?>
                                    <a href="<?php echo esc_url($child['url']); ?>" class="bk-dropdown-link <?php echo $is_c_active ? 'is-active' : ''; ?>" style="<?php echo $is_c_active ? 'display:flex;align-items:center;padding:8px 12px;border-radius:10px;font-size:13px;font-weight:700;color:#0D3B22 !important;background-color:#E8F0EA !important;text-decoration:none;line-height:1.25;position:relative;' : 'display:flex;align-items:center;padding:8px 12px;border-radius:10px;font-size:13px;font-weight:500;color:#374151 !important;background-color:transparent;text-decoration:none;line-height:1.25;position:relative;'; ?>">
                                        <span class="bk-dropdown-indicator" style="<?php echo $is_c_active ? 'width:4px;height:12px;border-radius:2px;margin-right:8px;display:inline-block;flex-shrink:0;background-color:#0D3B22 !important;' : 'width:4px;height:12px;border-radius:2px;margin-right:8px;display:inline-block;flex-shrink:0;background-color:transparent;'; ?>"></span>
                                        <span class="bk-dropdown-label" style="color:inherit;"><?php echo esc_html($child['title']); ?></span>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <!-- Link Tunggal -->
                        <a href="<?php echo esc_url($item['url']); ?>" class="bk-nav-btn <?php echo $item['is_active'] ? 'is-active-btn' : ''; ?>">
                            <?php echo esc_html($item['title']); ?>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>

            <?php else : ?>
                <!-- Fallback ke Menu Bawaan Asli Tema Scholaro -->
                
                <!-- Beranda -->
                <a href="<?php echo esc_url(home_url('/')); ?>" class="bk-nav-btn <?php echo $is_home ? 'is-active-btn' : ''; ?>">
                    Beranda
                </a>

                <!-- Dropdown: Profil -->
                <div class="relative group dropdown-container">
                    <button type="button" class="bk-nav-btn dropdown-trigger flex items-center gap-1 rounded-full <?php echo $is_profil ? 'is-active-dropdown' : ''; ?>">
                        <span>Profil</span>
                        <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" style="<?php echo $is_profil ? 'color:#F5B82E;' : 'color:inherit;'; ?>"></i>
                    </button>
                    <div class="dropdown-menu absolute left-0 mt-0 w-64 bg-white rounded-2xl shadow-xl shadow-black/20 p-2 border border-gray-100 z-50 text-gray-800 animate-fadeIn" style="background:#ffffff !important;">
                        <?php foreach ($profil_menu as $item) : 
                            $is_item_active = ($current_path === $item['path'] || (empty($current_path) && $item['path'] === 'profil'));
                        ?>
                            <a href="<?php echo esc_url($item['url']); ?>" class="bk-dropdown-link <?php echo $is_item_active ? 'is-active' : ''; ?>" style="<?php echo $is_item_active ? 'display:flex;align-items:center;padding:8px 12px;border-radius:10px;font-size:13px;font-weight:700;color:#0D3B22 !important;background-color:#E8F0EA !important;text-decoration:none;line-height:1.25;position:relative;' : 'display:flex;align-items:center;padding:8px 12px;border-radius:10px;font-size:13px;font-weight:500;color:#374151 !important;background-color:transparent;text-decoration:none;line-height:1.25;position:relative;'; ?>">
                                <span class="bk-dropdown-indicator" style="<?php echo $is_item_active ? 'width:4px;height:12px;border-radius:2px;margin-right:8px;display:inline-block;flex-shrink:0;background-color:#0D3B22 !important;' : 'width:4px;height:12px;border-radius:2px;margin-right:8px;display:inline-block;flex-shrink:0;background-color:transparent;'; ?>"></span>
                                <span class="bk-dropdown-label" style="color:inherit;"><?php echo esc_html($item['label']); ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Dropdown: Akademik -->
                <div class="relative group dropdown-container">
                    <button type="button" class="bk-nav-btn dropdown-trigger flex items-center gap-1 rounded-full <?php echo $is_akademik ? 'is-active-dropdown' : ''; ?>">
                        <span>Akademik</span>
                        <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" style="<?php echo $is_akademik ? 'color:#F5B82E;' : 'color:inherit;'; ?>"></i>
                    </button>
                    <div class="dropdown-menu absolute left-0 mt-0 w-64 bg-white rounded-2xl shadow-xl shadow-black/20 p-2 border border-gray-100 z-50 text-gray-800 animate-fadeIn" style="background:#ffffff !important;">
                        <?php foreach ($akademik_menu as $item) : 
                            $is_item_active = ($current_path === $item['path']);
                        ?>
                            <a href="<?php echo esc_url($item['url']); ?>" class="bk-dropdown-link <?php echo $is_item_active ? 'is-active' : ''; ?>" style="<?php echo $is_item_active ? 'display:flex;align-items:center;padding:8px 12px;border-radius:10px;font-size:13px;font-weight:700;color:#0D3B22 !important;background-color:#E8F0EA !important;text-decoration:none;line-height:1.25;position:relative;' : 'display:flex;align-items:center;padding:8px 12px;border-radius:10px;font-size:13px;font-weight:500;color:#374151 !important;background-color:transparent;text-decoration:none;line-height:1.25;position:relative;'; ?>">
                                <span class="bk-dropdown-indicator" style="<?php echo $is_item_active ? 'width:4px;height:12px;border-radius:2px;margin-right:8px;display:inline-block;flex-shrink:0;background-color:#0D3B22 !important;' : 'width:4px;height:12px;border-radius:2px;margin-right:8px;display:inline-block;flex-shrink:0;background-color:transparent;'; ?>"></span>
                                <span class="bk-dropdown-label" style="color:inherit;"><?php echo esc_html($item['label']); ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Dropdown: Kemahasiswaan -->
                <div class="relative group dropdown-container">
                    <button type="button" class="bk-nav-btn dropdown-trigger flex items-center gap-1 rounded-full <?php echo $is_kemahasiswaan ? 'is-active-dropdown' : ''; ?>">
                        <span>Kemahasiswaan</span>
                        <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" style="<?php echo $is_kemahasiswaan ? 'color:#F5B82E;' : 'color:inherit;'; ?>"></i>
                    </button>
                    <div class="dropdown-menu absolute left-0 mt-0 w-64 bg-white rounded-2xl shadow-xl shadow-black/20 p-2 border border-gray-100 z-50 text-gray-800 animate-fadeIn" style="background:#ffffff !important;">
                        <?php foreach ($kemahasiswaan_menu as $item) : 
                            $is_item_active = ($current_path === $item['path']);
                        ?>
                            <a href="<?php echo esc_url($item['url']); ?>" class="bk-dropdown-link <?php echo $is_item_active ? 'is-active' : ''; ?>" style="<?php echo $is_item_active ? 'display:flex;align-items:center;padding:8px 12px;border-radius:10px;font-size:13px;font-weight:700;color:#0D3B22 !important;background-color:#E8F0EA !important;text-decoration:none;line-height:1.25;position:relative;' : 'display:flex;align-items:center;padding:8px 12px;border-radius:10px;font-size:13px;font-weight:500;color:#374151 !important;background-color:transparent;text-decoration:none;line-height:1.25;position:relative;'; ?>">
                                <span class="bk-dropdown-indicator" style="<?php echo $is_item_active ? 'width:4px;height:12px;border-radius:2px;margin-right:8px;display:inline-block;flex-shrink:0;background-color:#0D3B22 !important;' : 'width:4px;height:12px;border-radius:2px;margin-right:8px;display:inline-block;flex-shrink:0;background-color:transparent;'; ?>"></span>
                                <span class="bk-dropdown-label" style="color:inherit;"><?php echo esc_html($item['label']); ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Dropdown: Layanan -->
                <div class="relative group dropdown-container">
                    <button type="button" class="bk-nav-btn dropdown-trigger flex items-center gap-1 rounded-full <?php echo $is_layanan ? 'is-active-dropdown' : ''; ?>">
                        <span>Layanan</span>
                        <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180" style="<?php echo $is_layanan ? 'color:#F5B82E;' : 'color:inherit;'; ?>"></i>
                    </button>
                    <div class="dropdown-menu absolute left-0 mt-0 w-64 bg-white rounded-2xl shadow-xl shadow-black/20 p-2 border border-gray-100 z-50 text-gray-800 animate-fadeIn" style="background:#ffffff !important;">
                        <?php foreach ($layanan_menu as $item) : 
                            $is_item_active = ($current_path === $item['path']);
                        ?>
                            <a href="<?php echo esc_url($item['url']); ?>" class="bk-dropdown-link <?php echo $is_item_active ? 'is-active' : ''; ?>" style="<?php echo $is_item_active ? 'display:flex;align-items:center;padding:8px 12px;border-radius:10px;font-size:13px;font-weight:700;color:#0D3B22 !important;background-color:#E8F0EA !important;text-decoration:none;line-height:1.25;position:relative;' : 'display:flex;align-items:center;padding:8px 12px;border-radius:10px;font-size:13px;font-weight:500;color:#374151 !important;background-color:transparent;text-decoration:none;line-height:1.25;position:relative;'; ?>">
                                <span class="bk-dropdown-indicator" style="<?php echo $is_item_active ? 'width:4px;height:12px;border-radius:2px;margin-right:8px;display:inline-block;flex-shrink:0;background-color:#0D3B22 !important;' : 'width:4px;height:12px;border-radius:2px;margin-right:8px;display:inline-block;flex-shrink:0;background-color:transparent;'; ?>"></span>
                                <span class="bk-dropdown-label" style="color:inherit;"><?php echo esc_html($item['label']); ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Berita & Pengumuman -->
                <a href="<?php echo esc_url(home_url('/berita/')); ?>" class="bk-nav-btn <?php echo $is_berita ? 'is-active-btn' : ''; ?>">
                    Berita &amp; Pengumuman
                </a>

            <?php endif; ?>

        </div>

        <!-- Mobile Menu Toggle Button (Bulletproof Native SVG & OnClick) -->
        <button 
            type="button" 
            id="mobile-nav-toggle" 
            class="rounded-xl text-white hover:bg-white/10 active:bg-white/20 transition-colors"
            aria-label="Buka Menu Navigasi"
            aria-expanded="false"
        >
            <!-- Hamburger Icon (Open) -->
            <svg id="menu-icon-open" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="display:block;pointer-events:none;">
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
            <!-- Close Icon (X) -->
            <svg id="menu-icon-close" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="display:none;pointer-events:none;">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>

    </div>

    <!-- Mobile Dropdown Navigation Menu -->
    <div id="mobile-nav-menu" class="bg-[#0D3B22] border-b border-white/10 px-6 py-4 space-y-3 transition-all duration-300 max-h-[85vh] overflow-y-auto">
        <div class="space-y-1">
            
            <?php if ($has_custom_primary_menu) : ?>
                <!-- Render Mobile Menu Dinamis dari WP Admin -->
                <?php foreach ($custom_nav_tree as $item) : ?>
                    <?php if (!empty($item['children'])) : ?>
                        <div class="py-2 border-b border-white/10">
                            <button type="button" onclick="bkToggleAccordion(this)" class="mobile-acc-btn w-full flex items-center justify-between text-sm font-semibold py-2 px-1 rounded-lg <?php echo $item['is_active'] ? 'text-[#F5B82E]' : 'text-white/90 hover:text-[#F5B82E]'; ?>" style="cursor:pointer;background:transparent;border:none;">
                                <span><?php echo esc_html($item['title']); ?></span>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="pointer-events:none;color:#F5B82E;"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </button>
                            <div class="mobile-acc-content pl-4 pt-2 space-y-2 border-l-2 border-white/20 ml-2 mt-2">
                                <?php foreach ($item['children'] as $child) : ?>
                                    <a href="<?php echo esc_url($child['url']); ?>" class="block text-sm py-1 <?php echo !empty($child['is_active']) ? 'text-[#F5B82E] font-bold' : 'text-white/70 hover:text-[#F5B82E]'; ?>" style="<?php echo !empty($child['is_active']) ? 'color:#F5B82E !important; font-weight:700;' : 'color:rgba(255,255,255,0.8) !important;'; ?>">
                                        <?php echo esc_html($child['title']); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <a href="<?php echo esc_url($item['url']); ?>" class="block text-sm font-bold py-2 <?php echo $item['is_active'] ? 'text-[#F5B82E]' : 'text-white/90 hover:text-[#F5B82E]'; ?>" style="<?php echo $item['is_active'] ? 'color:#F5B82E !important;' : 'color:rgba(255,255,255,0.9) !important;'; ?>">
                            <?php echo esc_html($item['title']); ?>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>

            <?php else : ?>
                <!-- Fallback Mobile Menu Bawaan -->
                <a href="<?php echo esc_url(home_url('/')); ?>" class="block text-sm font-bold py-2 <?php echo $is_home ? 'text-[#F5B82E]' : 'text-white/90 hover:text-[#F5B82E]'; ?>" style="<?php echo $is_home ? 'color:#F5B82E !important;' : 'color:rgba(255,255,255,0.9) !important;'; ?>">Beranda</a>
                
                <!-- Mobile Accordion: Profil -->
                <div class="py-2 border-b border-white/10">
                    <button type="button" onclick="bkToggleAccordion(this)" class="mobile-acc-btn w-full flex items-center justify-between text-sm font-semibold py-2 px-1 rounded-lg <?php echo $is_profil ? 'text-[#F5B82E]' : 'text-white/90 hover:text-[#F5B82E]'; ?>" style="cursor:pointer;background:transparent;border:none;">
                        <span>Profil</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="pointer-events:none;color:#F5B82E;"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="mobile-acc-content pl-4 pt-2 space-y-2 border-l-2 border-white/20 ml-2 mt-2">
                        <?php foreach ($profil_menu as $item) : 
                            $is_item_active = ($current_path === $item['path'] || (empty($current_path) && $item['path'] === 'profil'));
                        ?>
                            <a href="<?php echo esc_url($item['url']); ?>" class="block text-sm py-1 <?php echo $is_item_active ? 'text-[#F5B82E] font-bold' : 'text-white/70 hover:text-[#F5B82E]'; ?>" style="<?php echo $is_item_active ? 'color:#F5B82E !important; font-weight:700;' : 'color:rgba(255,255,255,0.8) !important;'; ?>">
                                <?php echo esc_html($item['label']); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Mobile Accordion: Akademik -->
                <div class="py-2 border-b border-white/10">
                    <button type="button" onclick="bkToggleAccordion(this)" class="mobile-acc-btn w-full flex items-center justify-between text-sm font-semibold py-2 px-1 rounded-lg <?php echo $is_akademik ? 'text-[#F5B82E]' : 'text-white/90 hover:text-[#F5B82E]'; ?>" style="cursor:pointer;background:transparent;border:none;">
                        <span>Akademik</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="pointer-events:none;color:#F5B82E;"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="mobile-acc-content pl-4 pt-2 space-y-2 border-l-2 border-white/20 ml-2 mt-2">
                        <?php foreach ($akademik_menu as $item) : 
                            $is_item_active = ($current_path === $item['path']);
                        ?>
                            <a href="<?php echo esc_url($item['url']); ?>" class="block text-sm py-1 <?php echo $is_item_active ? 'text-[#F5B82E] font-bold' : 'text-white/70 hover:text-[#F5B82E]'; ?>" style="<?php echo $is_item_active ? 'color:#F5B82E !important; font-weight:700;' : 'color:rgba(255,255,255,0.8) !important;'; ?>">
                                <?php echo esc_html($item['label']); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Mobile Accordion: Kemahasiswaan -->
                <div class="py-2 border-b border-white/10">
                    <button type="button" onclick="bkToggleAccordion(this)" class="mobile-acc-btn w-full flex items-center justify-between text-sm font-semibold py-2 px-1 rounded-lg <?php echo $is_kemahasiswaan ? 'text-[#F5B82E]' : 'text-white/90 hover:text-[#F5B82E]'; ?>" style="cursor:pointer;background:transparent;border:none;">
                        <span>Kemahasiswaan</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="pointer-events:none;color:#F5B82E;"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="mobile-acc-content pl-4 pt-2 space-y-2 border-l-2 border-white/20 ml-2 mt-2">
                        <?php foreach ($kemahasiswaan_menu as $item) : 
                            $is_item_active = ($current_path === $item['path']);
                        ?>
                            <a href="<?php echo esc_url($item['url']); ?>" class="block text-sm py-1 <?php echo $is_item_active ? 'text-[#F5B82E] font-bold' : 'text-white/70 hover:text-[#F5B82E]'; ?>" style="<?php echo $is_item_active ? 'color:#F5B82E !important; font-weight:700;' : 'color:rgba(255,255,255,0.8) !important;'; ?>">
                                <?php echo esc_html($item['label']); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Mobile Accordion: Layanan -->
                <div class="py-2 border-b border-white/10">
                    <button type="button" onclick="bkToggleAccordion(this)" class="mobile-acc-btn w-full flex items-center justify-between text-sm font-semibold py-2 px-1 rounded-lg <?php echo $is_layanan ? 'text-[#F5B82E]' : 'text-white/90 hover:text-[#F5B82E]'; ?>" style="cursor:pointer;background:transparent;border:none;">
                        <span>Layanan</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="pointer-events:none;color:#F5B82E;"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="mobile-acc-content pl-4 pt-2 space-y-2 border-l-2 border-white/20 ml-2 mt-2">
                        <?php foreach ($layanan_menu as $item) : 
                            $is_item_active = ($current_path === $item['path']);
                        ?>
                            <a href="<?php echo esc_url($item['url']); ?>" class="block text-sm py-1 <?php echo $is_item_active ? 'text-[#F5B82E] font-bold' : 'text-white/70 hover:text-[#F5B82E]'; ?>" style="<?php echo $is_item_active ? 'color:#F5B82E !important; font-weight:700;' : 'color:rgba(255,255,255,0.8) !important;'; ?>">
                                <?php echo esc_html($item['label']); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/berita/')); ?>" class="block text-sm font-semibold py-2 <?php echo $is_berita ? 'text-[#F5B82E]' : 'text-white/90 hover:text-[#F5B82E]'; ?>" style="<?php echo $is_berita ? 'color:#F5B82E !important;' : 'color:rgba(255,255,255,0.9) !important;'; ?>">Berita &amp; Pengumuman</a>

            <?php endif; ?>

        </div>
    </div>
</nav>
<!-- Flow Spacer to guarantee Fixed Navbar & Admin Bar never cover top page content -->
<div id="bk-navbar-spacer" aria-hidden="true"></div>

<script>
(function() {
    function syncBkNavbarSpacer() {
        var nav = document.getElementById("bk-main-navbar");
        var spacer = document.getElementById("bk-navbar-spacer");
        if (!nav || !spacer) return;
        var adminBar = document.getElementById("wpadminbar");
        var isBarVisible = document.body.classList.contains("admin-bar");
        var adminH = 0;
        if (isBarVisible) {
            adminH = (adminBar && adminBar.offsetHeight > 0) ? adminBar.offsetHeight : (window.innerWidth <= 782 ? 46 : 32);
            nav.style.setProperty("top", adminH + "px", "important");
        } else {
            nav.style.setProperty("top", "0px", "important");
        }
        var bar = document.getElementById("bk-main-navbar-bar");
        var navH = nav.offsetHeight;
        if (bar && bar.offsetHeight > 0) {
            navH = bar.offsetTop + bar.offsetHeight;
        }
        spacer.style.setProperty("height", (adminH + navH) + "px", "important");
        document.documentElement.style.setProperty("--bk-navbar-height", navH + "px");
        document.documentElement.style.setProperty("--bk-admin-bar-offset", adminH + "px");
    }
    syncBkNavbarSpacer();
    document.addEventListener("DOMContentLoaded", syncBkNavbarSpacer);
    window.addEventListener("load", syncBkNavbarSpacer);
    window.addEventListener("resize", syncBkNavbarSpacer);
})();
</script>

<script>
(function() {
    // 1. Mobile Menu Toggle Controller (Bulletproof Global Scope)
    window.bkToggleMobileNav = function(forceState) {
        var menu = document.getElementById("mobile-nav-menu");
        var btn = document.getElementById("mobile-nav-toggle");
        var iconOpen = document.getElementById("menu-icon-open");
        var iconClose = document.getElementById("menu-icon-close");
        if (!menu) return;

        var isOpen = menu.classList.contains("is-open");
        var shouldOpen = (typeof forceState === "boolean") ? forceState : !isOpen;
        
        if (shouldOpen) {
            menu.classList.add("is-open");
            if (btn) btn.setAttribute("aria-expanded", "true");
            if (iconOpen) iconOpen.style.setProperty("display", "none", "important");
            if (iconClose) iconClose.style.setProperty("display", "block", "important");
        } else {
            menu.classList.remove("is-open");
            if (btn) btn.setAttribute("aria-expanded", "false");
            if (iconOpen) iconOpen.style.setProperty("display", "block", "important");
            if (iconClose) iconClose.style.setProperty("display", "none", "important");
        }
    };

    // 2. Submenu Accordion Controller
    window.bkToggleAccordion = function(btn) {
        var content = btn.nextElementSibling;
        if (!content) return;
        var isOpen = content.classList.contains("is-open");
        if (isOpen) {
            content.classList.remove("is-open");
            btn.classList.remove("is-open");
        } else {
            content.classList.add("is-open");
            btn.classList.add("is-open");
        }
    };

    // 3. Bind Single Event Listener to Toggle Button
    function bindMobileNav() {
        var btn = document.getElementById("mobile-nav-toggle");
        if (btn) {
            btn.onclick = function(e) {
                if (e) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                window.bkToggleMobileNav();
            };
        }
    }
    bindMobileNav();
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", bindMobileNav);
    }

    // 4. Close mobile menu on desktop resize
    window.addEventListener("resize", function() {
        if (window.innerWidth >= 768) {
            window.bkToggleMobileNav(false);
        }
    });

    // 5. Close mobile menu when clicking page links
    document.addEventListener("click", function(e) {
        var link = e.target.closest("#mobile-nav-menu a");
        if (link) {
            var href = link.getAttribute("href");
            if (href && href !== "#") {
                window.bkToggleMobileNav(false);
            }
        }
    });

    // 6. Lucide icons initialization safeguard
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
})();
</script>
