<?php

// Fungsi untuk melakukan redirect ke URL tertentu
// Fungsi untuk melakukan redirect ke URL tertentu
function redirect($url)
{
    header("Location: $url");
}

// Fungsi untuk menampilkan pesan error
function display_error($message)
{
    echo '<div class="error-message">' . $message . '</div>';
}

// Fungsi untuk menampilkan pesan sukses
function display_success($message)
{
    echo '<div class="success-message">' . $message . '</div>';
}

// Fungsi untuk mengambil data dari database (contoh)
function get_data_from_database($table, $id)
{
    global $database;
    return $database->get_data($table, $id);
}

// Fungsi untuk menyimpan data ke database (contoh)
function save_data_to_database($table, $data)
{
    global $database;
    return $database->save_data($table, $data);
}

// Fungsi untuk validasi input (contoh)
function validate_input($input)
{
    // Implementasi validasi input, misalnya, cek apakah input adalah email yang valid
    // Return true jika valid, false jika tidak valid
    return true;
}

// Fungsi untuk mengambil data customer (contoh)
function get_customer_data($customer_id)
{
    global $database;
    return $database->get_customer_data($customer_id);
}

// Fungsi untuk mengambil data item (contoh)
function get_item_data($item_id)
{
    global $database;
    return $database->get_item_data($item_id);
}

// Fungsi untuk halaman admin
function admin()
{
    require_once('../view/admin-panel/admin-login.php');
}

// Fungsi untuk halaman dashboard admin
function dashboard()
{
    require_once('../view/admin-panel/admin-dashboard.php');
}

// Fungsi untuk halaman login customer
function customer_login()
{
    require_once('../view/forms/customer-login.php');
}

// Fungsi untuk proses login customer
function customer_login_save()
{
    // Implementasi proses login customer di sini
    echo "Proses Login Customer";
}

// Fungsi untuk halaman registrasi customer
function customer_register()
{
    require_once('../view/forms/customer-register.php');
}

// Fungsi untuk proses registrasi customer
function customer_register_save()
{
    // Implementasi proses registrasi customer di sini
    echo "Proses Register Customer";
}

// Fungsi untuk halaman profil customer
function customer_profile()
{
    require_once('../view/forms/customer-profile.php');
}

// Fungsi untuk proses edit profil customer
function customer_profile_edited()
{
    // Implementasi proses edit profil customer di sini
    echo "Proses Edit Profil Customer";
}

// Fungsi untuk halaman detail item
function item($id)
{
    require_once('../view/shop/item.php');
}

// Fungsi untuk halaman keranjang belanja
function cart()
{
    require_once('../view/shop/cart.php');
}

// Fungsi untuk halaman detail pesanan
function order($id)
{
    require_once('../view/shop/order.php');
}

// Fungsi untuk halaman kontak
function contact()
{
    require_once('../view/shop/contact.php');
}

// Fungsi untuk proses logout
function logout()
{
    // Implementasi proses logout di sini
    echo "Proses Logout";
}
