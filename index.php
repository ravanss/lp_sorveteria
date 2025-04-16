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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
                                    <img src="assets/img/tudobom.png" alt="">
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
                            <img src="assets/img/copos.png" alt="Sorvete" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <img class="banner-icone left" src="assets/img/icone.png" alt="icone no topo na esquerda da pagina branco">
            <img class="banner-icone right" src="assets/img/icone.png" alt="icone no top na direita da pagina branco">
            <img class="banner-icone bottom" src="assets/img/icone.png" alt="icone no top na direita da pagina branco">
        </section>
        <section>
            <div class="conteiner-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">CONHEÇA NOSSAS LINHAS DE PRODUTOS</h2>
                        <p class="text-center">
                            Aqui na Tudo de Bom, fazemos tudo com muito carinho, pensando em cada detalhe para deixar sua experiência ainda mais deliciosa. Nossa linha de sorvetes é feita para encantar, com sabores incríveis e texturas perfeitas, porque acreditamos que o melhor da vida deve ser saboreado com prazer. 
                            Venha conhecer nossos produtos e se apaixonar! Tudo de bom, sempre pensando em você!
                        </p>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Sorveteria. Todos os direitos reservados.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>