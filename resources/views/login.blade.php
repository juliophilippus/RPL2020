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
    <link rel="stylesheet" href="/css/login.css">


    <title>SIKP | Login</title>
  </head>
  <body>
    <div class="container">
        <h2 class="font-weight-bold text-center">SIKP</h2><hr>
        <form method="POST" action="/login">
        {{ csrf_field() }} 
            <div class="form-group">
 <!--               <label>Email</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-user"></i></div>
                  </div>           
                <input type="text" name="email" id="password" class="form-control" placeholder="Masukkan Email">
              </div> 
            <small>Masukkan dengan email domain UKDW</small>  --> 
            </div>

           <div class="form-group">
<!--                <label>Password</label> 
                <div class="input-group">
                  <div class="input-group-prepend">
                     <div class="input-group-text"><i class="fas fa-unlock"></i></div> 
                  </div>           
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Masukkan Password">
              </div> -->
            </div> 

 <!--           <button type="submit" class="btn btn-primary">Login</button> -->
        </form>
        <br>
 <!--       <p class="text-muted text-center">Atau</p>   -->
        <a href="/login/google"><button class="btn btn-danger"><i class="fab fa-google-plus-g mr-2"></i>Login dengan google</button></a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>