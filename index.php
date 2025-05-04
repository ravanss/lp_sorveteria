<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorveteria</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/style.css">
</head>
<body>
    <header id="header" class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/tudobom.png" alt="Icone da tudo de bom">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main id="content">
        <section class="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner-content">
                            <h1>Já pediu seu</h1>
                            <h2>Açai?</h2>
                            <a href="#" class="btn btn-banner">Conheça nossos produtos</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/copos.png" alt="Sorvete" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <img class="banner-icone left" src="<?php echo get_template_directory_uri()?>/assets/img/icone.png" alt="icone no topo na esquerda da pagina branco">
            <img class="banner-icone right" src="<?php echo get_template_directory_uri()?>/assets/img/icone.png" alt="icone no top na direita da pagina branco">
            <img class="banner-icone bottom" src="<?php echo get_template_directory_uri()?>/assets/img/icone.png" alt="icone no top na direita da pagina branco">
        </section>
        <section class="linhas">
            <div class="conteiner-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">CONHEÇA NOSSAS LINHAS DE PRODUTOS</h2>
                        <p class="text-center linha-subtitle">
                            Aqui na Tudo de Bom, fazemos tudo com muito carinho, pensando em cada detalhe para deixar sua experiência ainda mais deliciosa. Nossa linha de sorvetes é feita para encantar, com sabores incríveis e texturas perfeitas, porque acreditamos que o melhor da vida deve ser saboreado com prazer. 
                            Venha conhecer nossos produtos e se apaixonar! Tudo de bom, sempre pensando em você!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="qualidade">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="qualidade-content">
                            <h2 class="lilita-one-regular">quali</br>dade+</h2>
                            <h3 class="lilita-one-regular">Sabor</h3>
                            <p class="qualidade-subtitle">Mais de 10 OPÇÕES DE SABORES</p>
                            <p class="qualidade-subtitle">Na Tudo de Bom, temos uma variedade deliciosa de sabores em tamanho único de 2 litros, além de um buffet a quilo para você se servir à vontade! Venha aproveitar qualidade e sabor em cada escolha.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="qualidade-image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/sorvetes.png" alt="Sorvete" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="acai">
            <img class="bolas1" src="<?php echo get_template_directory_uri()?>/assets/img/bolas.png" alt="Sorvete" class="img-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="acai-content">
                            <h2 class="style-script-regular">açai</h2>
                            <h3 class="lilita-one-regular">Tudo de Bom</h3>
                            <p class="acai-subtitle">Aqui na nossa loja, a linha de Açaí Tudo de Bom, feita com os melhores ingredientes, é perfeita para você que ama um açaí de qualidade. Oferecemos potes nos tamanhos de 2 e 5 litros, além de permitir que você crie a combinação perfeita do seu jeito!</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="acai-image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/acai.png" alt="Sorvete" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <img class="bolas2" src="<?php echo get_template_directory_uri()?>/assets/img/bolas2.png" alt="Sorvete" class="img-fluid">
        </section>
    </main>
    <section class="historia">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="historia-image">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/tudobom.png" alt="Sorvete" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <h2 class="historia-title">Conheça nossa historia</h2>
                    <p class="historia-subtitle">A Tudo de Bom é uma sorveteria que nasceu do sonho de oferecer aos nossos clientes uma experiência única e deliciosa. Desde o início, nossa missão sempre foi criar sorvetes e açaí de alta qualidade, feitos com ingredientes frescos e selecionados. Com o tempo, conquistamos a confiança e o carinho dos nossos clientes, tornando-nos uma referência em sabor e qualidade na região.</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ">
                    <div class="footer-content">
                        <h2 class="footer-title">Faça o seu pedido por:</h2>
                        <a href="#">(11)99999-9999</a>
                        <p>Rua dos Sorvetes, 123 - São Paulo - SP</p>
                        <p>Segunda a Sexta: 10h às 22h</p>
                        <p>Sábado e Domingo: 10h às 23h</p>
                        <h3>FIQUE POR DENTRO DE TUDO NaS SIGA NAS REDES SOCIAIS</h2>
                        <ul class="social-media">
                            <li>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="footer-image">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/ifood.png" alt="Sorvete" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-final">
                        <p>&copy; <?php echo date("Y"); ?> #TUDOdeBOM. Todos os direitos reservados.</p>
                        <a href="#">Politicas de privacidade</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section id="links">
        <div class="links-content">
            <div class="modal-item">
                <a href="#">
                    <span><i class="fa-brands fa-whatsapp"></i></span>
                </a>
            </div>
            <div class="modal-item">
                <a href="#">
                    <span><i class="fa-solid fa-bowl-food"></i></span>
                </a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
</body>
</html>