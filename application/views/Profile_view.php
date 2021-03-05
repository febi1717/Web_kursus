<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="teks/css" href="style.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
    	                        
.content{
    background-image: url('assets/img/10.jpg');
}
.list-inline .option{
  width: 80px; height: 30px;  
}
.major {
    font-weight: 600;
}
.base-header {
    margin-top: 0;
    margin-bottom: 0;
    line-height: inherit;
}
.em-background-box .em-background-box-actions {
    margin-top: 15px;
    min-height: 50px;
}
.semi-well-dk {
    background: rgba(0,0,0,0.3);
    color: #fff;
}
.semi-well-dk, .semi-well-lt {
    border-radius: 6px;
    padding: 20px;
}
.img-em-border {
    border: 8px solid rgba(255,255,255,0.3);
}
.img-circle {
    border-radius: 50%;
}
img {
    vertical-align: middle;
}
.line-icon-circle {
    border: 1px solid rgba(242,244,248,0.7);
    border-radius: 50%;
    display: inline-block;
    width: 32px;
    height: 32px;
    line-height: 32px;
    color: #fff;
    -webkit-transition: border-color 0.3s;
    -moz-transition: border-color 0.3s;
    -o-transition: border-color 0.3s;
    transition: border-color 0.3s;
}

.thin {
    font-weight: 300;
}
h1, .h1 {
    font-size: 33px;
}
.list-inline {
    margin-left: -5px;
}
.list-unstyled, .list-inline {
    padding-left: 0;
    list-style: none;
}
ul, ol {
    margin-top: 0;
    margin-bottom: 10px;
}
.em-background-box .em-background-box-content {
    position: relative;
    z-index: 2;
}
.container-fluid {
    margin-right: auto;
    margin-left: auto;
    padding-left: 10px;
    padding-right: 10px;
}
.navbar+.em-background-box {
    margin-top: -15px;
    margin-bottom: 15px;
}
.em-background-box {
    border-bottom: 4px solid #5bc0de;
}
.em-background-box {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    position: relative;
    padding-top: 50px;
    padding-bottom: 50px;
}
.text-white {
    color: white;
}                    
    </style>

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
    </header>

    <div class="em-background-box text-white content">
    <div class="container">
        <div style="width:100%; height:100vh; overflow:hidden; display:flex; flex-direction:column; justify-content: center; align-content:center; text-align:center;" class="text-center em-background-box-content">
        <ul class="list-inline">
            <li>
            <img class="img-circle img-em-border" src="https://bootdey.com/img/Content/user_1.jpg">
            </li>
        </ul>

        <h1 style="padding-top:2rem;" class="thin">NI KOMANG INTAN TRI PUJIANI</h1>
        <h4>
            <i class="fa fa-map-marker"></i>
            <span class="thin">Bandung, Indonesia</span>
        </h4>

        <div class="row">
            <div style="padding-top:5rem;" class="col-md-16 col-md-offset-1">
            <div class="semi-well-dk em-background-box-actions">
                <div class="row">
                <div class="col-md-7 push-bottom-sm">
                    <ul class="list-inline no-margin v-mid-row">
                        <i class="fa fa-edit fa-3x"></i>
                        <span> Ceritakan pengalaman diri anda </span>
                    </ul>
                </div>

                <div class="col-md-5">
                    <ul style="padding-top:0.5rem;" class="d-grid gap-2 col-6 mx-auto">
                        <a href="<?php echo site_url('Editprofil') ?>" style="border-radius:10px;" class="btn btn-light btn-lg" role="button" aria-pressed="true">Edit</a>
                    </ul>
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