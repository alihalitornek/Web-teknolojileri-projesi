<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ali halit örnek</title>
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
      <div class="col-6 col-lg-3">
        <a class="navbar-brand" href="index.html">
          <img class="logo img-fluid" src="assets/pictures/yatay1logo.png" alt="logo">
        </a>
      </div>
      <div class="col-3 col-lg-5 mx-auto order-3 order-lg-2 d-flex justify-content-end">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link" href="index.html">Hakkında</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.google.com/">İlgi alanlarım</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="iletisim.html">İletişim</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-3 col-lg-2 order-2 order-lg-3 d-flex justify-content-center">
        <a href="giris.html" class="btn btn-primary">Giriş Yap</a>
      </div>
    </nav>
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
                            <?php echo $_POST['mail']; ?>
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
                            <?php echo $_POST['radio']; ?>
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
        <a href="https://github.com"><i class="fab fa-github"></i></a>
    </div>
    <p>&copy; 2024  | Tüm Hakları Saklıdır | Website designed by Ali Halit Örnek</p>
</footer>
</body>

</html>