<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'data_portofolio');
if (!$koneksi)
    {
        die ('Error Koneksi' . mysqli_connect_errno());
    }

$d = mysqli_query($koneksi, "SELECT * FROM `portofolio` ORDER BY `tanggal` DESC LIMIT 5");

// $konten = file_get_contents('apikey');
 $result = json_decode($konten, true);
 
 $namayoutube = $result ['items'][0]['snippet']['title'];
 $fotoyoutube = $result ['items'][0]['snippet']['thumbnails']['medium']['url'];
 $jumlahsubs = $result ['items'][0]['statistics']['subscriberCount'];
//-------------------------------------------------------//
 //$vidio = file_get_contents('apikey');
 $result2 = json_decode($vidio, true);

 $playvid = $result2['items'][4]['id']['videoId'];
 //-------------------------------------------------------//
 $databio = file_get_contents('data.json');
 $bio = json_decode($databio, 1);
 
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> 
        Portofolio Website
    </title>
     <link rel="shortcut icon" href="g1.png" type="image/x-icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <!-- My CSS -->
    <style>
      
        .jumbotron {
            padding: 2rem 1 rem;
            background-color: #e2edff;
        }
        .sosmed{
            background-color: #e2edff;
        }

        #card  {
            background-color: #e2edff;
        
        }
    
        #footer {
            background-color: rgb(25, 168, 216);
        }

        /* section {
            padding-top: 5rem;
        } */

    </style>



  </head>
  <body id="home">
    <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-sm" style = "background-color: rgb(25, 168, 216);">
  <div class="container">
    <a class="navbar-brand fw-bolder" href="#">
        <img src="gambar/group.png" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sosialmedia">Sosial Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pengalaman">Skill & Pengalaman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#card">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- akhir Navbar -->

    <!-- jumbotron -->

<div class="jumbotron text-center "><br><br>
        <div class="container animate__animated animate__fadeInUp">
            <img src="<?=$bio['foto']?>" alt="rifqi" width ="200" height="200" class="img-thumbnail rounded-circle mt-5 ">
            <h3 class="display-4  mt-2"><?=$bio['nama'];?> <br><h4><?=$bio['gelar']?></h4></h3>
            <p class="lead mt-3"><?=$bio['deskripsi']?></p>
        </div>
<svg xmlns="http://www.w3.org/100/svg" viewBox="0 0 1440 300"><path fill="#ffffff" fill-opacity="1" d="M0,64L60,74.7C100,85,240,107,360,144C480,181,600,235,720,256C840,277,960,267,1080,240C1200,213,1320,171,1380,149.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
</div>
    <!-- akhir jumbotron -->

    <!-- About -->
        <section id = 'about'>
            <div class="container">
                <h2  class="text-center pb-5"> Education</h2>
                 <div class="row">
                    <div class="col-md-4 justify-content-center animate__animated animate__fadeInLeft">
                        <img src="https://www.pngkey.com/png/full/131-1311026_school-icon-png.png" class="rounded-circle img-fluid " width="400" height="400">
                 </div>
                 <div class="col-md-8 justify-content-center mt-3 animate__animated animate__fadeInRight">
                    <?php foreach ($bio['pendidikan'] as $x) : ?>
                   <div class="ms-5">
                     <h4 class="ps-5 text-primary fw-bold"><?=$x['jenjang']?> <span> (<?=$x['periode']?>)</span></h4>
                     <p class="ps-5"><?=$x['deskripsi']?></p>
                   </div>
                    <?php endforeach; ?>
                </div>
                 </div>  
            </div>
           
            
        </section>
    <!-- akhir About -->

    <section id="sosialmedia" class="mt=2" >
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
       <div class="sosmed pb-5">
            <div class="container justify-content-center" >
                <div class="text-center">
                    <h3  class=" pb-3 mb-5 "> Sosial Media</h3>
                </div>
                <div class="row mt-2 mb-5" >
                    <div class="col-md-6">
                        <div class="row mb-5">
                            <div class="col-md-4">
                                <img src="<?=$fotoyoutube?>" height="200px" class="rounded-circle img-fluid"  >
                            </div>
                            <div class="col-md-6 mt-3">
                                <h2><?= $namayoutube?></h2>
                                <p><?=$jumlahsubs?> Subscribers</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/<?=$playvid?>" title="My Praktikum Sensor & Aquator" allowfullscreen ></iframe>    
                        </div>
                    </div>
                </div>
                <div class="container text-center  mt-5">
                    <div class="row row-cols-3 justify-content-center mt-5 mb-1 ">
                    <?php foreach ($bio['sosialmedia'] as $c) : ?>
                    <div class=" justify-content-center d-flex-center mb-1" style="width: 15rem;">
                        <img src="<?=$c['foto']?>" class="card-img-top" alt="...">
                        <div class="card-body mb-1">
                            <h5 class="text-center card-title mt-3"><?=$c['media']?></h5>
                            <p class="card-text text-bold text-center"><?=$c['link']?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                   
                </div>
                </div>

                
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,58.7C384,64,480,96,576,96C672,96,768,64,864,42.7C960,21,1056,11,1152,26.7C1248,43,1344,85,1392,106.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </section>
    <!-- gvghbhb -->
    <section id = 'pengalaman'>
            <div class="container">
                <h2  class="text-center pb-3">Experience</h2>
                 <div class="row">
                    <div class="col-md-8 justify-content-center mt-3">
                    <?php foreach ($bio['pengalaman'] as $y) : ?>
                   <div class="ms-5">
                     <h4 class="ps-5 text-primary fw-bold"><?=$y['title']?></h4>
                     <p class="ps-5"><?=$y['deskripsi']?></p>
                   </div>
                    <?php endforeach; ?>
                    </div>
                    <div class="col-md-4 justify-content-center">
                        <img src="https://cdni.iconscout.com/illustration/free/thumb/teamwork-2112512-1785594.png" class="img-fluid animate__animated animate__pulse infinite " width="700" height="600">
                    </div>
                 </div>  
            </div>
           
            
        </section>
    <!-- end experience -->
        <section id="kemampuan">
            <div class="container mt-5 pt-5">
                <div class="row">
                    <h2 class="text-center text-bolder mb-5">Skill and Ability</h2>
                    <div class="col-md-4 mt-3  animate__animated animate__backInLeft animate__delay-1s">
                        <h4 class="fw-bolder text-primary text-center">Bahasa Pemrograman</h4>
                        <div class="row mt-4 justify-content-center">
                            <?php foreach ( $bio["kemampuan"][0]['program'] as $k) : ?>
                            <div class="col-4 mb-2">
                                <img src="<?=$k['foto'] ?>" class="img-fluid" width="100" height="100" >
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <div class="col-4 mt-3 animate__animated animate__backInUp animate__delay-1.5s">
                        <h4 class="fw-bolder text-primary text-center">Bahasa</h4>
                         <div class="row mt-3 justify-content-center">
                            <?php foreach ( $bio["kemampuan"][2]['bahasa'] as $l): ?>
                            <h5 class="text-dark text-center"><?=$l['language']?></h5>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3  animate__animated animate__backInRight animate__delay-2s">
                        <h4 class="fw-bolder text-primary text-center">Aplikasi</h4>
                        <div class="row mt-3 justify-content-center">
                            <?php foreach ( $bio["kemampuan"][1]['skill'] as $j) : ?>
                            <div class="col-4 mb-2">
                                <img src="<?=$j['foto'] ?>" class="img-fluid" width="100" height="100" >
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    <!-- card -->
        <section id = card >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,154.7C96,149,192,139,288,133.3C384,128,480,128,576,112C672,96,768,64,864,69.3C960,75,1056,117,1152,138.7C1248,160,1344,160,1392,160L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <div class="container">
                <div class="row mb-5 ">
                    <div class="col text-center">
                        <h2 class="">Portofolio</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
    <?php while($sata = mysqli_fetch_assoc($d)) : ?>
                    <div class="col-md-4 mb-3">
                        <a href="http://<?=$sata['link']?>" class="text-decoration-none text-dark" target="_blank">
                            <div class="card mb-3" style = >
                                <img src="gambar/<?=$sata['foto']?>" class="card-img-top" alt="...">
                                <div class="card-body " style="background-color: #C2C4F3 ;">
                                    <h5 class="card-title"><?=$sata['nama_projek']?></h5>
                                    <p class="card-text "><small class=" text-dark">Last updated <?=$sata['tanggal']?></small></p>
                                </div>
                            </div>
                        </a>
                    </div>
    <?php endwhile ?>
                    

                </div>
                
                        
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L60,240C120,256,240,288,360,256C480,224,600,128,720,117.3C840,107,960,181,1080,208C1200,235,1320,213,1380,202.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        </section>

    <!-- akhir card -->
    <!-- contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center">
                <div class="col mb-3">
                    <h3 class="ctc">Contact Me</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8 ">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInput1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="exampleInputName">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Respons</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <center><button type="submit" class="btn btn-primary justify-content-center">Submit</button></center>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,224L60,240C120,256,240,288,360,256C480,224,600,128,720,117.3C840,107,960,181,1080,208C1200,235,1320,213,1380,202.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </section>

    <!-- akhir contact -->

    <!-- footer -->

    <footer  class=" justify-content-center fw-bolder" style = "background-color: rgb(25, 168, 216); height : 50px;"  >
        <p class ="text-md-center text-white">Created by <a href="https://www.instagram.com/rifqii.akml/" class="text-danger " style="text-decoration: none; "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg> Rifqi Alfian</a></p>
    </footer>

    <!-- end foter -->







    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
     <script
      src="https://code.jquery.com/jquery-3.6.3.js"
      integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
      crossorigin="anonymous"
    ></script>
    <script>
        $('.nav-link').on('click', function () {
              $('.nav-link').removeClass('active');
              $(this).addClass('active');
        })
    </script>
  </body>
</html
