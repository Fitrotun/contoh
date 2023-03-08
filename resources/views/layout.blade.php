<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"></meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"></meta>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"></link>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"></link>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    
    <title>UNSIQ</title>

</head>
<body>
    <nav class="navbar navbar-expand-lg">
     <div class="container-fluid">
     <a class="navbar-brand" ><img src="/gb2.jpg" alt="" width="40" style="border-radius: 60%;"></a>
     <a class="navbar-brand" >UNIVERSITAS SAINS AL-QUR'AN</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home" style="color:white;">Home</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link active" aria-current="page" href="/tentang" style="color:white;">Tentang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/fakultas" style="color:white;">Fakultas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mahasiswa" style="color:white;">Mahasiswa</a>
            </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                Auth
                </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/login">Login</a></li>
            <li><a class="dropdown-item" href="/login">Logout</a></li>
          </ul>
            </li>
         </ul>
        </div>
    </div>
    </nav>

    <div class="container mt-6">
            @yield('konten')
      </div>
      <footer class="py-2 bg-transparant mt-auto"> 
                    <div class="container-fluid px-2">
                        <div class="d-flex align-items-center justify-content-between small">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <br><br><br><br><br><br><br>
                        </div>
                    </div>
                </footer>

</body>
</html>