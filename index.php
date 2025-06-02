<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorveteria</title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/animated.min.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/style.css">
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
    <main id="content">
        <section class="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="banner-content">
                            <h1>Já pediu seu</h1>
                            <h2>Açai?</h2>
                            <a href="https://www.ifood.com.br/delivery/guarulhos-sp/tudo-de-bom-acai-e-sorvetes-centro/4b1daaf2-c3dc-4645-9f30-de8750291e34?utm_medium=share" class="btn btn-banner">Conheça nossos produtos</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
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
                    <div class="col-md-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <h2 class="text-center">Açaí Puro e Cremoso – Sabor de Verdade, Só Aqui! </h2>
                        <p class="text-center linha-subtitle">
                            A liberdade de escolha que você merece! Com mais de 10 combinações de toppings, você monta o seu açaí do jeitinho que você gosta. Seja com frutas frescas, granola crocante, leite em pó, leite condensado, paçoca, ovomaltine ou outras opções deliciosas, a escolha é sua!
                            Leve para Casa ou Consuma Aqui: Disponível em potes de 2L e 5L, nosso açaí é perfeito para dividir com a galera, curtir aquele evento especial ou simplesmente saborear no conforto de casa.
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
                            <h3 class="lilita-one-regular">Sorvetes de Fabricação Própria – O Sabor da Alegria!</h3>
                            <p class="acai-subtitle">
                                Na Tudo de Bom, nossos sorvetes são feitos com ingredientes selecionados e um toque especial para trazer muita alegria em cada colherada. Se você quiser curtir sozinho ou compartilhar com os amigos na festa, evento ou no trabalho, temos o sabor perfeito para todo mundo!
                                Pote de 2L: Ideal para dividir com a turma ou levar para aquele evento que vai ser ainda mais gostoso com nosso sorvete!
                            </p>
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
                    <h2 class="historia-title">Monte Seu Sabor no Nosso Self-Service!</h2>
                    <p class="historia-subtitle">Na Tudo de Bom, você tem a liberdade de escolher entre nosso açaí cremoso e nossos sorvetes deliciosos, e montar a sobremesa do jeitinho que mais gosta. Com mais de 10 opções de toppings, como frutas frescas, granola crocante, paçoca, leite condensado, chocolate e muito mais, cada visita se torna uma experiência única de sabor. Tudo isso no nosso self-service, onde você tem total controle para criar a combinação perfeita para o seu paladar. E se bateu a vontade de levar para casa, temos potes de 2L, ideais para compartilhar com a galera ou curtir sozinho. A escolha é sua, e o sabor é sempre incrível!</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 d-flex">
                    <div class="footer-content">
                        <h2 class="footer-title">Faça o seu pedido por:</h2>
                        <a href="#">(11) 99892-8323</a>
                        <p>Av. Salgado Filho, 4064 - Vila Rio de Janeiro, Guarulhos - SP, 07115-000</p>
                        <p>Segunda a Sexta: 10h às 22h</p>
                        <p>Sábado e Domingo: 10h às 23h</p>
                    </div>
                    <div class="footer-social-media">
                        <h3>FIQUE POR DENTRO DE TUDO NaS SIGA NAS REDES SOCIAIS</h2>
                        <ul class="social-media">
                            <li>
                                <a href="https://www.instagram.com/tudodebomgru/?hl=pt" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer-image">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/ifood.png" alt="Sorvete" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-final">
                        <p>&copy; <?php echo date("Y"); ?> #TUDOdeBOM. Todos os direitos reservados.</p>
                        <a href="#" target="_blank">Politicas de privacidade</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section id="links">
        <div class="links-content">
            <div class="modal-item">
                <a href="https://wa.link/hmpd27" target="_blank">
                    <span><i class="fa-brands fa-whatsapp"></i></span>
                </a>
            </div>
            <div class="modal-item">
                <a href="https://www.ifood.com.br/delivery/guarulhos-sp/tudo-de-bom-acai-e-sorvetes-centro/4b1daaf2-c3dc-4645-9f30-de8750291e34?utm_medium=share" target="_blank">
                    <span>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icone-ifood.png" alt="icone do ifood">
                    </span>
                </a>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/main.js"></script>
</body>
</html>