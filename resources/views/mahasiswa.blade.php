<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Laravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>

            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container">
        <h1>Ini Halaman Mahasiswa</h1>
        

        <table class="table table-dark table-sm table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th colspan="2">TTL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0702222054</td>
                    <td>Yayi Naulia Silalahi</td>
                    <td>Perempuan</td>
                    <td>23 Januari 2004</td>
                    <td rowspan="2">Kisaran</td>
                </tr>
                <tr>
                    <td>0702222053</td>
                    <td>Rosita Panjaitan</td>
                    <td>Perempuan</td>
                    <td>06 November 2004</td>
                </tr>
                <tr>
                    <td>0702221009</td>
                    <td>Najwa Fadiyah Nasution</td>
                    <td>Perempuan</td>
                    <td>31 Desember 2004</td>
                    <td>Medan</td>
                </tr>
            </tbody>
        </table>
      </div>

    {{-- BOOTSTRAP --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>