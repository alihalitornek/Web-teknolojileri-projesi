<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>İletişim Sonrası</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/132fa15d14.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</head>

<body class="container-fluid bg-info">
<header class="sticky-top row">
    <nav class="navbar navbar-expand-lg bg-success">
      <div class="container">
      <a class="navbar-brand col-6 col-sm-6 col-md-4 col-lg-3" href="index.html">
              <img class="logo img-fluid" src="assets/pictures/logo.png" alt="logo">
          </a>
          <button class="navbar-toggler bg-primary" id="navbuton" type="button" data-bs-toggle="collapse" data-bs-target="#menu" onclick="xgorun()">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse bg-success" id="menu">
              <ul class="navbar-nav mx-auto my-2">
                <div id="carp"><button class="btn btn-success rounded-circle carpi" id="xbuton" display="none" style="color: #198754;" onclick="navgizle(),xgizle()">X</button></div>
                  <li class="nav-item navrenk">
                      <a class="nav-link" href="index.html">Hakkında</a>
                  </li>
                  <li class="nav-item active navrenk">
                      <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                  </li>
                  <li class="nav-item navrenk">
                      <a class="nav-link" href="sehrim.html">Şehrim</a>
                  </li>
                  <li class="nav-item navrenk">
                      <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                  </li>
                  <li class="nav-item navrenk">
                      <a class="nav-link" href="ilgi-alanlarim.html">İlgi alanlarım</a>
                  </li>
                  <li class="nav-item navrenk">
                      <a class="nav-link" href="iletisim.html">İletişim</a>
                  </li>
              </ul>
              <a href="giris.html" class="btn btn-primary ms-auto">Giriş Yap <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>
          </div>
      </div>
  </nav>
  
    <script type="text/javascript">
        window.onload = function(){ xgizle(); };
        window.onresize = function(){ xgizle2(); };
        function xgorun(){
          var buton = document.getElementById("xbuton");
          buton.style.display = "block";
          buton.style.background = "#f00";
          buton.style.color = "#fff";
          document.getElementById("carp").classList.add("carpi");
        }
        function xgizle(){
          var buton = document.getElementById("xbuton");
          buton.style.display = "none";
          document.getElementById("carp").classList.remove("carpi");
        }
        function xgizle2(){
          var buton = document.getElementById("xbuton");
          if (window.innerWidth > 992){
            buton.style.display = "none";
            document.getElementById("carp").classList.remove("carpi");
          }
          else{
            buton.style.display = "block";
            document.getElementById("carp").classList.add("carpi");
          }
          
        }
        function navgizle(){
          document.getElementById("menu").classList.remove("show");
        }
    </script>
  
  
  </header>
  <main class="arkaplan6">
  <div class="container">
    <div class="row">
        <div class="col">
            <table class="table mb-3 table-striped">
                <thead>
                    <tr class="table-success border-2 border-success">
                        <th colspan="2" class="text-center">
                            <h3>Form Bilgileri</h3>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-2 border-success">İsminiz</td>
                        <td class="border-2 border-success">
                            <?php echo $_POST['isim']; ?>
                        </td>
                    </tr>
                    <tr class="table-success border-2 border-success">
                        <td class="border-2 border-success">Soyisminiz</td>
                        <td class="border-2 border-success">
                            <?php echo $_POST['soyisim']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-2 border-success">E-Mail</td>
                        <td class="border-2 border-success">
                            <?php echo $_POST['email']; ?>
                        </td>
                    </tr>
                    <tr class="table-success border-2 border-success">
                        <td class="border-2 border-success">İstek Tipi</td>
                        <td class="border-2 border-success">
                            <?php echo $_POST['istek']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-2 border-success">Cinsiyet</td>
                        <td class="border-2 border-success">
                            <?php echo $_POST['cinsiyet']; ?>
                        </td>
                    </tr>
                    <tr class="table-success border-2 border-success">
                        <td class="border-2 border-success">Mesajınız</td>
                        <td class="border-2 border-success">
                            <?php echo $_POST['mesaj']; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
  </main>
  <footer class="mt-5 py-4">
    <div class="sosyalmedya">
        <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
        <a href="https://github.com/alihalitornek"><i class="fab fa-github"></i></a>
    </div>
    <p>&copy; 2024  | Tüm Hakları Saklıdır | Website designed by Ali Halit Örnek</p>
</footer>
</body>

</html>