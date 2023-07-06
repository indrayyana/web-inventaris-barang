<?php
require_once('Barang.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Deklarasi objek baru dari class Barang
    $barang = new Barang();

    // Memasukkan nilai2 formulir ke property2 object
    $barang->id = $_POST['id'];
    $barang->jumlah = $_POST['fjumlah'];
    $barang->kategori = $_POST['fkategori'];
    $barang->tipe = $_POST['ftipe'];
    $barang->harga_beli = str_replace('.', '', $_POST['fharga']);
    $barang->tahun_beli = $_POST['ftahun'];

    $result = $barang->ubah_barang();

    if ($result) {
        ?>
        <script type="text/javascript">
            alert("Simpan Data Berhasil");
            window.location.href = "index.html";
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Terjadi kesalahan saat menyimpan data.");
            window.location.href = "edit_barang.php?id=<?php echo $id_barang; ?>";
        </script>
        <?php
    }
}
?>