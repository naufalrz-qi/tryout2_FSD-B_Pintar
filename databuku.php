<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
        <h1 class="mt-5">Data Buku</h1>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Nama Buku</th>
                    <th>Jumlah Buku</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Buku Dummy 1</td>
                    <td>10</td>
                    <td>Fiksi</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Buku Dummy 2</td>
                    <td>5</td>
                    <td>Non-Fiksi</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Buku Dummy 3</td>
                    <td>15</td>
                    <td>Referensi</td>
                </tr>
      
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>