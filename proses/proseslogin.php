proses/proseslogin.php:

<?php
// ==================================================
// PROSES LOGIN ADMIN
// ==================================================
// 1. Pastikan form dikirim menggunakan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php?halaman=loginuser');
    exit;
}
// ==================================================
// 2. AMBIL DATA DARI FORM
// ==================================================
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');
// ==================================================
// 3. VALIDASI INPUT
// ==================================================
if ($email === '' || $password === '') {
    echo "<script>
        alert('Email dan password wajib diisi.');
        window.location.href = '../index.php?halaman=loginuser';
    </script>";
    exit;
}
// ========================================
// 4. LOKASI FILE DATA ADMIN
// ========================================
$file = '../data/dataadmin.json';
// ==================================================
// 5. CEK FILE JSON
// ==================================================
if (!file_exists($file)) {
    echo "<script>
        alert('File dataadmin.json tidak ditemukan.');
        window.location.href = '../index.php?halaman=loginuser';
    </script>";
    exit;
}
// ==================================================
// 6. BACA FILE JSON
// ==================================================
$json = file_get_contents($file);
// ==================================================
// 7. UBAH JSON MENJADI ARRAY PHP
// ==================================================
$dataadmin = json_decode($json, true);
// ==================================================
// 8. CEK FORMAT JSON
// ==================================================
if (!is_array($dataadmin)) {
    echo "<script>
        alert('Format dataadmin.json tidak valid.');
        window.location.href = '../index.php?halaman=loginuser';
    </script>";
    exit;
}
// ==================================================
// 9. CEK EMAIL DAN PASSWORD
// ==================================================
$loginberhasil = false;
foreach ($dataadmin as $data) {
    if (
        isset($data['email'], $data['password']) &&
        strtolower($email) === strtolower($data['email']) &&
        $password === $data['password']
    ) {
        $loginberhasil = true;
        break;
    }
}
// ==================================================
// 10. JIKA LOGIN BERHASIL
// ==================================================
if ($loginberhasil === true) {
    header('Location: ../index.php?halaman=dashboard');
    exit;
}
// ==================================================
// 11. JIKA LOGIN GAGAL
// ==================================================
echo "<script>
    alert('Email atau password salah.');
    window.location.href = '../index.php?halaman=loginuser';
</script>";
exit;