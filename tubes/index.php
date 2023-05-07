<?php
$pengajar = [
    [
        "nama"      => "Dadi",
        "keahlian"   => "Bahasa Inggris dan Bahasa Indonesia",
        "profile"   => "pengajar1.jpg"
    ],
    [
        "nama"      => "Tise",
        "keahlian"   => "Kimia dan Biologi",
        "profile"   => "pengajar2.jpg"
    ],
    [
        "nama"      => "Dani",
        "keahlian"   => "Matematika dan Fisika",
        "profile"   => "pengajar3.jpg"
    ]
]
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <title>SOKUNI</title>
</head>
<body>
<nav id="navbar" class="navbar navbar-expand-lg bg-info">
    <div id="ham" class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="nav-menu" class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">SOKUNI</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="Home" class="nav-item">
                    <a class="nav-link active text-md-center" aria-current="page" href="index.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                        </svg>
                        <br>
                        Home
                    </a>
                </li>
                <li id="About" class="nav-item">
                    <a class="nav-link text-md-center" href="#about">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                        </svg>
                        <br>
                        About
                    </a>
                </li>
                <li id="Teacher" class="nav-item text-md-center">
                    <a class="nav-link" href="#pengajar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                            <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                            <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z"/>
                        </svg>
                        <br>
                        Pengajar
                    </a>
                </li>
                <li class="nav-item text-md-center">
                    <a class="nav-link" href="#contact">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                        <br>
                        Contact
                    </a>
                </li>
                <li class="nav-item text-md-center">
                    <a class="nav-link" href="pages/login.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                        </svg>
                        <br>
                        Log-in
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- About -->

<div id="Header" class="container">
    <div id="about" class="About">
        <h2 style="text-align: center; margin: 5rem 0 3rem ;">ABOUT US</h2>
        <div class="section">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/cardimg/private-study.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-text">
                        Kami hadir dengan bertujuan untuk membantu anda dalam masalah pembelajaran dengan dibantu oleh
                        para pengajar profesional dan dengan cara penyampaian yang mudah dipahami.
                    </p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

<!-- Pengajar -->

<div class="container">
    <div id="pengajar" class="pengajar">
        <h2 style="text-align: center; margin: 5rem 0 3rem ;">PENGAJAR</h2>
        <div class="section">
            <di class="row">
                <?php foreach ($pengajar as $pgr) : ?>
                <div class="card" style="width: 18rem; margin-bottom: 2rem; margin-left: 4.5rem;">
                    <img src="img/Pengajarimg/<?= $pgr["profile"];?>" class="card-img-top" alt="<?= $pgr["nama"]?>">
                    <div class="card-body">
                    <h5 class="card-title"><?= $pgr["nama"]; ?></h5>
                    <p class="card-text"><?= $pgr["keahlian"]; ?></p>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<!-- Conctact -->
<div class="container">
    <div id="contact" class="section">
        <h2 style="text-align: center; margin: 5rem 0 3rem;">CONTACT</h2>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Masukan Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" style="width: 25rem;" placeholder="contoh123@gmail.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Masukan pesan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width: 35rem;"></textarea>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Kirim</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>