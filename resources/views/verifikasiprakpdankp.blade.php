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


    <title>SIKP | Verfifikasi Pra KP dan KP</title>
  </head>
  <body>

    <!-- Navigasi -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <div class="container-fluid">
            <a class="navbar-brand font-weight-bold text-white" href="/koor">SIKP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link text-white font-weight-bold" href="/koor">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Layanan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/koor/verifikasisuratket">Verifikasi Surat Keterangan KP</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/koor/verifikasiprakpdankp">Verifikasi Pra KP dan KP</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/koor/penjadwalanujian">Penjadwalan Ujian</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/koor/dafregiskp">Daftar Registrasi KP</a>
                </div>
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-auto">
                <a href="" class="btn font-weight-bold text-white">Dosen Koor</a>
                <a href="/koor/userkoor" class="btn text-white"><i class="fas fa-user" data-toggle="tooltip" title="User Profile"></i></a> 
                <a href="" class="btn text-white"><i class="fas fa-sign-out-alt" data-toggle="tooltip" title="Logout"></i></a> 
                
            </form>
            </div>
            </div>
        </nav>
    </header>

      <!-- Main Content -->
      <main>
        <div class="container-fluid mt-2">
            <h2><i class="fas fa-file mr-2"></i>Verifikasi Pra KP dan KP</h2>

            <div class="row container-fluid">
                <div class="col-md-6">

                    <!-- Daftar Pengajuan Pra KP -->
                    <h4>Daftar Pengajuan Pra KP</h4>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Lembaga</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>7218000</td>
                            <td>Mahasiswa</td>
                            <td>UKDW</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSetuju">Setuju</button><button type="button" class="btn btn-danger ml-3" data-toggle="modal" data-target="#ModalTolak">Tolak</button></td>

                            
                          </tr>           
                        
                        </tbody>
                      </table><hr>
                </div>

                <div class="col-md-6">
                    

                      <!-- Daftar Pengajuan KP -->
                    <h4>Daftar Pengajuan KP</h4>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Lembaga</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>7218000</td>
                            <td>Mahasiswa</td>
                            <td>UKDW</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSetuju">Setuju</button><button type="button" class="btn btn-danger ml-3" data-toggle="modal" data-target="#ModalTolak">Tolak</button></td>
                          </tr>
                        </tbody>
                      </table><hr>
                </div>

                <!-- Modal Tolak -->
                <div class="modal fade" id="ModalTolak" tabindex="-1" role="dialog" aria-labelledby="ModalTolakLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="ModalTolakLabel">Nama Mahasiswa - NIM</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p>Penolakan diterima!</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End Modal -->

                <!-- Modal Setuju -->
                <div class="modal fade" id="ModalSetuju" tabindex="-1" role="dialog" aria-labelledby="ModalSetujuLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="ModalSetujuLabel">Nama Mahasiswa - NIM</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p>Disetujui berhasil!</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End Modal -->

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