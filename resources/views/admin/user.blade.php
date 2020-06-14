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


    <title>SIKP | Data User</title>
  </head>
  <body>

    <!-- Navigasi -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <div class="container-fluid">
            <a class="navbar-brand font-weight-bold text-white" href="/admin">SIKP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link text-white font-weight-bold" href="/admin/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Master
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/admin/datausers">Data user</a>
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-auto">
                <a href="" class="btn font-weight-bold text-white">Admin</a>
                <a href="/admin/logout" class="btn text-white"><i class="fas fa-power-off" data-toggle="tooltip" title="Profile Admin"></i></a> 
            </form>
            </div>
            </div>
        </nav>
    </header>

      <!-- Main Content -->
      <main>
        <div class="container-fluid mt-2">
            <h2><i class="fas fa-user mr-2"></i>Data User</h2>
            <!-- Form -->
            <div class="container-fluid">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Hak Akses</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $key)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    {{ $key->nama }}
                                </td>
                                <td>{{ $key->email }}</td>
                                <td>
                                    @if($key->status == 0)
                                        <a href="/admin/ubahmhs/{{ $key->id }}" class="btn btn-primary">Mahasiswa</a>
                                        <a href="/admin/ubahdosen/{{ $key->id }}" class="btn btn-warning">Dosen</a>
                                        <a href="/admin/ubahkoor/{{ $key->id }}" class="btn btn-success">Koordinator</a>
                                    @elseif($key->status == 1)
                                        Mahasiswa
                                    @elseif($key->status == 2)
                                        Dosen
                                    @elseif($key->status == 3)
                                        Koordinator
                                    @endif
                                </td>
                            </tr>                                
                        @endforeach
                    </tbody>
                  </table>
            </div>
                
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