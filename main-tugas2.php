<?php

require 'functions.php'; // Sertakan file functions.php

// Ambil parameter action dari URL
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Panggil fungsi sesuai dengan parameter action
switch ($action) {
    case 'admin':
        // Tampilkan halaman admin
        admin();
        break;
    case 'dashboard':
        // Tampilkan dashboard
        dashboard();
        break;
    case 'customer-login':
        // Tampilkan form login pelanggan
        customer_login();
        break;
    case 'customer-login-save':
        // Proses login pelanggan
        customer_login_save();
        break;
    case 'customer-register':
        // Tampilkan form registrasi pelanggan
        customer_register();
        break;
    case 'customer-register-save':
        // Proses registrasi pelanggan
        customer_register_save();
        break;
    case 'customer-profile':
        // Tampilkan profil pelanggan
        customer_profile();
        break;
    case 'customer-profile-edited':
        // Proses edit profil pelanggan
        customer_profile_edited();
        break;
    case 'item':
        // Tampilkan detail produk
        if (isset($_GET['id'])) {
            item($_GET['id']);
        } else {
            display_error("Item not found.");
        }
        break;
    case 'cart':
        // Tampilkan keranjang belanja
        cart();
        break;
    case 'order':
        // Tampilkan detail pesanan
        if (isset($_GET['id'])) {
            order($_GET['id']);
        } else {
            display_error("Order not found.");
        }
        break;
    case 'contact':
        // Tampilkan halaman kontak
        contact();
        break;
    case 'logout':
        // Proses logout
        logout();
        break;
    default:
        // Tampilkan halaman beranda
        home();
        break;
}
