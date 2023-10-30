<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
      <div class="fixed-top bg-white shadow w-100">
            <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/tryout/" class="nav-link active" aria-current="page">Dashboard</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="databuku.php" class="nav-link">Data Buku</a></li>
                <li class="nav-item"><a href="pinjambuku.php" class="nav-link">Peminjaman</a></li>
            </ul>
            </header>
        </div>

        <div class="container" style="margin-top:100px;">
        <h1 class="mt-5">Form Peminjaman Buku</h1>

        <?php
        $anggotaId = $tglPeminjaman = $bukuId = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $anggotaId = $_POST["anggotaId"];
            $tglPeminjaman = $_POST["tglPeminjaman"];
            $bukuId = $_POST["bukuId"];

      
            $peminjaman = [
                "anggotaId" => $anggotaId,
                "tglPeminjaman" => $tglPeminjaman,
                "bukuId" => $bukuId,
            ];

    
            session_start();
            if (!isset($_SESSION["daftarPeminjaman"])) {
                $_SESSION["daftarPeminjaman"] = [];
            }
            array_push($_SESSION["daftarPeminjaman"], $peminjaman);
        }
        ?>

        <form method="post" class="mt-4">
            <div class="form-group">  
                <label for="anggotaId">Pilih ID Anggota:</label>
                <select class="form-control" id="anggotaId" name="anggotaId" required>
                    <option value="1">Anggota 1</option>
                    <option value="2">Anggota 2</option>
                    <option value="3">Anggota 3</option>
                 
                </select>
            </div>
            <div class="form-group">
                <label for="tglPeminjaman">Tanggal Peminjaman:</label>
                <input type="text" class="form-control" id="tglPeminjaman" name="tglPeminjaman" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="bukuId">Pilih Buku:</label>
                <select class="form-control" id="bukuId" name="bukuId" required>
                    <option value="1">Buku Dummy 1</option>
                    <option value="2">Buku Dummy 2</option>
                    <option value="3">Buku Dummy 3</option>
         
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Pinjam Buku</button>
        </form>

        <h2 class="mt-5">Daftar Peminjaman</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Anggota</th>
                    <th>Tanggal Peminjaman</th>
                    <th>ID Buku</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION["daftarPeminjaman"])) {
                    foreach ($_SESSION["daftarPeminjaman"] as $peminjaman) {
                        echo "<tr>";
                        echo "<td>" . $peminjaman["anggotaId"] . "</td>";
                        echo "<td>" . $peminjaman["tglPeminjaman"] . "</td>";
                        echo "<td>" . $peminjaman["bukuId"] . "</td>";
                        echo '<td><a href="hapus_peminjaman.php">Hapus</a></td>';
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>