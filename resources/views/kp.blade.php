<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/fontawesome-free/css/all.min.css">

    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/home.css">


    <title>SIKP | KP</title>
  </head>
  <body>

    <!-- Navigasi -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <div class="container-fluid">
            <a class="navbar-brand font-weight-bold text-white" href="/mhs">SIKP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link text-white font-weight-bold" href="/mhs">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Layanan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/mhs/suratketerangan">Pengajuan Surat Keterangan</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/mhs/prakp">Pengajuan Pra KP</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/mhs/kp">Pengajuan KP</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/mhs/ujiankp">Tanggal Ujian</a>
                </div>
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-auto">
                <a href="" class="btn font-weight-bold text-white">Mahasiswa</a>
                <a href="/mhs/usermhs" class="btn text-white"><i class="fas fa-user" data-toggle="tooltip" title="User Profile"></i></a> 
                <a href="/mhs/logout" class="btn text-white"><i class="fas fa-sign-out-alt" data-toggle="tooltip" title="Logout"></i></a> 
                
            </form>
            </div>
            </div>
        </nav>
    </header>

      <!-- Main Content -->
      <main>
        <div class="container-fluid mt-2">
            <h2><i class="fas fa-file mr-2"></i>Pengajuan Pengajuan KP</h2><hr>

            <!-- Form -->
            <div class="row container-fluid">
                <div class="col-md-6">
                    <h4>Data Pengajuan KP</h4>
                    <hr>
                    <form action="/mhs/simpankp">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tahun</label>
                            <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Masukkan Tahun">
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Semester</label>
                            <select class="form-control" name="semester" id="semester">
                                <option value="1">Gasal</option>
                                <option value="2">Genap</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM">
                        </div>

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Judul Kerja Praktik</label>
                            <textarea name="judul" id="" cols="30" rows="3" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul KP"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <div class="col-md-6">
                    <h4>Daftar Pengajuan KP</h4><hr>
                    @if(\Session::has('success'))
                            <div class="alert alert-success mt-3">
                                <p>{{ \Session::get('success') }}</p>
                            </div>
                        @endif
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul KP</th>
                            <th scope="col">Penguji</th>
                            <th scope="col">Tahun Akademik</th>
                            <th scope="col">Disetujui</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($kp as $key)
                              <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $key->judul }}</td>
                                <td>
                                    @if ($key->penguji == 0)
                                        -
                                    @else
                                        {{ $key->penguji }}
                                    @endif
                                </td>
                                <td>
                                    {{ $key->tahun.$key->semester }}
                                    (
                                        @if($key->semester == 1)
                                            {{ $key->tahun }} Ganjil
                                        @else
                                            {{ $key->tahun }} Genap
                                        @endif
                                    )
                                </td>
                                <td>
                                    @if ($key->status == 0)
                                        Belum Disetujui
                                    @else
                                        Sudah Disetujui
                                    @endif
                                </td>
                              </tr>                                
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
            <br>
    </main>

    <footer class="bg-success text-white text-center">
        <p class="font-weight-bold mt-3">Copyright &copy; 2019, RPL 2020</p>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>