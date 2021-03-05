<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="teks/css" href="style.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
</head>

<body>
<div class="nav-scroller bg-white shadow-sm">
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
</div>

    <main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
        <img class="mr-3" src="assets/img/6.png" alt="" width="48" height="0">
        <div class="lh-100">
          <small>------------</small>
        </div>
      </div>

      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Notifikasi</h6>
        <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">No notifications</strong>
            showing 0 records out of 0 total, starting on record 0, ending on 0
          </p>
        </div>
    </div>
  



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	
</body>
</html>