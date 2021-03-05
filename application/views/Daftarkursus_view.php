<!doctype html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="teks/css" href="style.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header>
    <nav style="background:white; padding:1rem 8rem; z-index: 1000;" class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a style="font-size: 1.4rem; font-weight: 700; color:blue;" class="navbar-brand" href="#">NORGEN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li style="padding: 0 0.8rem;" class="nav-item dropdown">
                <a style="color:white;" class="nav-link btn btn-primary btn-sm dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Explore
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <input type="search" class="form-control col-md-8" placeholder="Apa yang ingin dipelajari?" aria-label="Search" aria-describedby="button-addon2">
                <button type="button" class="btn btn-primary">
                <i class="fa fa-search" aria-hidden="true"></i>
                </button> 
            </ul>

            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle nav-link-lg nav-link-user" aria-expanded="false">
                    <img src="<?php echo base_url('assets/img/5.jpg'); ?>" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, User!</div></a>
                    <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdown3">
                    <div style="font-size:10px; text-align: center;" class="dropdown-title">Logged in 5 min ago</div>
                        <a href="<?php echo site_url('Daftarkursus') ?>" class="dropdown-item has-icon">
                            <i class="fa fa-book"></i> Kursus
                        </a>
                        <a href="<?php echo site_url('Profile') ?>" class="dropdown-item has-icon">
                            <i class="fa fa-user"></i> Profile
                        </a>
                        <a href="<?php echo site_url('Notifikasi') ?>" class="dropdown-item has-icon">
                            <i class="fa fa-bell"></i> Notifikasi
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo site_url('Welcome') ?>" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                        
                    </div>
                </li>
            </ul> 
        </div>    
    </nav>

        <div style="position:relative;" class="intro">
            <img class="img-responsive" width="100%" height="345" src="<?php echo base_url('assets/img/6.png'); ?>">
            <div style="position:absolute; top: 35%; left:50%;" class="head">
                <h1 style="color:#000">Hello</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="card-primary">
                            <h6>Ceritakan tentang dirimu</h6>
                            <h7>Saya adalah seorang
                                <div class="form-group mb-0">
                                    <label for=""></label>
                                    <input type="text" name="" id="" class="form-control" placeholder="" value="">
                                </div>
                            </h7>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </header>

    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-progress-tab" data-bs-toggle="pill" data-bs-target="#pills-progress" type="button" role="tab" aria-controls="pills-progress" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-complete-tab" data-bs-toggle="pill" data-bs-target="#pills-complete" type="button" role="tab" aria-controls="pills-complete" aria-selected="false">Complete</button>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="col mx-auto align-items-center my-5">
            <div class="heading text-center">
                <h2 class="font-weight-bold pb-5">Daftar Kursus</H2>
            </div>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                <div class="card-body">
                                    <h5>Pengenalan Python</h5>
                                    <hr>
                                    <p class="card-text">Mata Pelajaran 1</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a href="<?php echo site_url('Materi') ?>" class="btn btn-primary" role="button" aria-pressed="true">Mulai</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                <div class="card-body">
                                    <h5>Pengenalan Python</h5>
                                    <hr>
                                    <p class="card-text">Mata Pelajaran 1</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a href="<?php echo site_url('Materi') ?>" class="btn btn-primary" role="button" aria-pressed="true">Mulai</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                <div class="card-body">
                                    <h5>Pengenalan Python</h5>
                                    <hr>
                                    <p class="card-text">Mata Pelajaran 1</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a href="<?php echo site_url('Materi') ?>" class="btn btn-primary" role="button" aria-pressed="true">Mulai</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div style="padding:1rem 8rem; padding-top:3rem;" class="tab-pane fade" id="pills-progress" role="tabpanel" aria-labelledby="pills-progress-tab">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-7 push-bottom-sm">
                        <ul class="list-inline no-margin v-mid-row">
                            <i class="fa fa-edit fa-3x"></i>
                            <span> You will find your in-progress courses here. </span>
                        </ul>
                    </div>

                    <div class="card mb-3" style="max-width: 350px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">Norgen membantu anda</p>
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="padding:1rem 8rem; padding-top:3rem;" class="tab-pane fade" id="pills-complete" role="tabpanel" aria-labelledby="pills-complete-tab">
        <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-7 push-bottom-sm">
                        <ul class="list-inline no-margin v-mid-row">
                            <i class="fa fa-edit fa-3x"></i>
                            <span> You will find your finished courses here</span>
                        </ul>
                    </div>

                    <div class="card mb-3" style="max-width: 350px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">Norgen membantu anda</p>
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>