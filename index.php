<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
            background-color: #f2f2f2; /* Warna latar belakang judul */
            padding: 10px;
            border-radius: 6px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-transaksi {
            border: 1px solid #ccc;
            padding: 15px;
            width: 100%;
            border-radius: 6px;
            box-sizing: border-box;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        input[type='text'],
        input[type='number'],
        input[type='submit'] {
            margin-bottom: 15px;
            width: calc(100% - 30px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type='submit'] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type='submit']:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff; /* Warna latar belakang tabel */
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<?php
$transaksi = [];

function tambahTransaksi($keterangan, $jumlah) {
    global $transaksi;
    $transaksi[] = ['keterangan' => $keterangan, 'jumlah' => $jumlah];
}

function lihatTransaksi() {
    global $transaksi;
    echo "<ul>";
    foreach ($transaksi as $t) {
        echo "<li>Keterangan: " . $t['keterangan'] . ", Jumlah: " . $t['jumlah'] . "</li>";
    }
    echo "</ul>";
}

// Fungsi untuk menampilkan form tambah transaksi
function tampilkanFormTambahTransaksi() {
    echo "
        <h2>Tambah Transaksi</h2>
        <form method='post' class='form-transaksi'>
            <label for='keterangan'>Keterangan:</label>
            <input type='text' name='keterangan' id='keterangan' required><br>
            <label for='jumlah'>Jumlah:</label>
            <input type='number' name='jumlah' id='jumlah' required><br>
            <input type='submit' name='tambah' value='Tambah Transaksi'>
        </form>
    ";
}

// Contoh penggunaan
if (isset($_POST['tambah'])) {
    tambahTransaksi($_POST['keterangan'], $_POST['jumlah']);
}
echo "<h2>Daftar Transaksi Pribadi</h2>";
lihatTransaksi();

// Tampilkan form tambah transaksi
tampilkanFormTambahTransaksi();
?>

</body>
</html>