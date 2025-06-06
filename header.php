<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/animated.min.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <header id="header" class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-sm bg-body-tertiary">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span><i class="fa-solid fa-bars-staggered"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#linhas">Sobre Nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/tudobom.png" alt="Icone da tudo de bom">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#qualidade">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#links">Contatos</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>