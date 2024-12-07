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

        <div class="row">
          <div class="col-sm-6">
            <h4>Tabel Mahasiswa</h4>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="/mahasiswa/create" class="btn btn-info btn-sm">Tambah Mahasiswa</a>
          </div>

        </div>
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-dark table-sm table-striped table-bordered text-center mt-2">
              <thead>
                  <tr>
                      <th>NIM</th>
                      <th>Nama Mahasiswa</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                  </tr>
              </thead>
              <tbody>
                {{-- While --}}
                {{-- <?php $nilai_awal = 0; ?>
                @while ($nilai_awal < $jumlah)
                <tr>
                    <td>{{$npm[$nilai_awal]}}</td>
                    <td>{{$nama[$nilai_awal]}}</td>
                    <td>Perempuan</td>
                    <td>Medan</td>
                </tr>
                <?php $nilai_awal++ ?>
                @endwhile --}}
  
                {{-- FOR --}}
                {{-- <?php $nilai_awal = 0; ?>
                @for ($i = 0; $i < $jumlah; $i++)
                <tr>
                  <td>{{$npm[$i]}}</td>
                  <td>{{$nama[$i]}}</td>
                  <td>Perempuan</td>
                  <td>Medan</td>
                </tr> 
                <?php $nilai_awal++ ?>
                @endfor --}}
              </tbody>
          </table>
          </div>
        </div>
        
      </div>

    {{-- BOOTSTRAP --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>