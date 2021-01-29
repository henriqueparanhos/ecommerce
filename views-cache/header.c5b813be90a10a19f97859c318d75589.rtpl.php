<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
    Hcode Store by hcode.com.br
-->
<html lang="pt-br">
  <head>
    <link rel="shortcut icon" href="/res/site/img/favicon.ico" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Retrato da Arte</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/res/site/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/res/site/css/owl.carousel.css">
    <link rel="stylesheet" href="/res/site/css/style.css">
    <link rel="stylesheet" href="/res/site/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-left">
                        <ul style="display: flex; margin-top: 10px;" class="list-unstyled list-inline">
                            <li><a href="https://www.instagram.com"><i style="color: #C43B87; width: 50px;" class="fa fa-instagram fa-2x"></i></a></li>
                            <li><a href="https://facebook..com"><i style="color: #3A5794; width: 50px;"  class="fa fa-facebook fa-2x"></i></a></li>
                            <li><a href="https://whatsapp.com"><i style="color:#48C857; width: 50px;" class="fa fa-whatsapp fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="header-right">
                        <ul style="margin-top: 5px;" class="list-unstyled list-inline">
                            <li><a href="/profile"><i class="fa fa-user"></i> Minha Conta</a></li>
                            <li><a href="/cart"><i class="fa fa-shopping-cart"></i> Meu Carrinho</a></li>
                            <?php if( checkLogin(false) ){ ?>

                            <li><a href="/profile"><i class="fa fa-user"></i> <?php echo getUserName(); ?></a></li>
                            <li><a href="/logout"><i class="fa fa-close"></i> Sair</a></li>
                            <?php }else{ ?>

                            <li><a href="/login"><i class="fa fa-lock"></i> Login</a></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="/"><img style="width: 15%;" src="/res/site/img/logo.jpeg"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <form action="/products">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="search" class="form-control pull-right"  placeholder="Procurar">
                            <div class="input-group-btn">
                                <button button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-sm-3">
                    <div class="shopping-item">
                        <a href="/cart">Carrinho - <span class="cart-amunt">R$<?php echo getCartVlSubTotal(); ?></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo getCartNrQtd(); ?></span></a>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <?php require $this->checkTemplate("categories-menu");?>

                        <li><a href="/cart">Carrinho</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
