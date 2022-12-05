<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link href="cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">

    <title>Marmoraria </title>

    <body>
    
    <header  id="header"> 
        <section id="barra_header">
            <a href="index.php" id="link-header"><h1>Marmoraria</h1></a>
            <a href="produtos.php"><h2 class="h2_header">Produtos</h2></a>
            <a href="Parceiros.php"><h2 class="h2_header">Parceiros</h2 ></a>
            <a href="orcamentos.php"><h2 class="h2_header">Orçamentos</h2></a>
           
            <form action="resultados-index.php">
                <input type="text" id="pesquisa" name="pesquisa" placeholder="O que procura?">
                    <input type="submit" name="ENVIAR" value="Pesquisar"><br>
            </form>
        </section>
    </header>

<!-----------------------carrossel comeco-------------------------------------->
    <section style="background-color:rgba(141, 158, 252, 0.21);">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <a href="https://thenexus.one/diretor-de-vingadores-ultimato-explica-por-que-tony-stark-morreu-em-vez-do-capitao-america/"><img src="https://townsquare.media/site/442/files/2012/06/im3-post.jpg?w=980&q=75" style="padding:10px;" class="d-block w-100 img-fluid"  alt="Luto pela morte do CEO"></a>
                <div class="carousel-caption d-none d-md-block">
                
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="https://media.istockphoto.com/photos/the-arc-reactor-for-iron-man-picture-id1297128942?k=20&m=1297128942&s=612x612&w=0&h=LkryO7LGDHCmxAnTkVfzLfdQNIOG3YxsE47k-Ua0Sto=" class="d-block w-100" style="padding:10px;" alt="Reator Arc">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://www.looper.com/img/gallery/why-pepper-potts-will-be-more-important-than-you-think-in-endgame/intro-1552915184.jpg" class="d-block w-100" style="padding:10px;" alt="Pepper Pots assume a presicencia da empresa.">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>


<!---------------------empresas parceiras----------------------------->
        <section>
            <div class="bloco" style="font-size: 1.2rem;">
            <h1>Nosso Negócio</h1>
            <p>Nossa atividade de maior recorrência é a prestação de serviços para Concessionárias Administradores de Cemitérios. 
              Também realizamos serviços individuais, como <b>cubas</b> e <b>bancadas</b>.</p>
            </div>

            <div class="bloco">
              <h2>Confira abaixo as Concessionárias que prestamos serviços:</h2><br>
                <img src="img/reviver-logo.png" alt="logomarca Concessionaria Reviver" width="201.6px" height="87.5px">
                <h1>Reviver</h1>
                <p>Lorem ipsum dolor sit amet. Ut magni ratione eos inventore sunt id voluptatem 
                    rerum aut commodi deserunt rem saepe unde aut natus necessitatibus. 
                    Nam inventore distinctio sit adipisci rerum vel temporibus nemo. Non temporibus asperiores 
                    aut molestiae culpa in atque enim hic delectus debitis ut neque ratione! 
                    Et dicta excepturi quo natus dolores est sint autem aut voluptas debitis 
                    ab reprehenderit autem id eveniet explicabo id esse reiciendis.</p>
            </div>
            <div class="bloco">
                <img src="img/riopax-logo.png" alt="logomarca Concessionaria Riopax" width="201.6px" height="87.5px">    
                <h1>Rio Pax</h1>
                <p>Lorem ipsum dolor sit amet. Ut magni ratione eos inventore sunt id voluptatem 
                    rerum aut commodi deserunt rem saepe unde aut natus necessitatibus. 
                    Nam inventore distinctio sit adipisci rerum vel temporibus nemo. Non temporibus asperiores 
                    aut molestiae culpa in atque enim hic delectus debitis ut neque ratione! 
                    Et dicta excepturi quo natus dolores est sint autem aut voluptas debitis 
                    ab reprehenderit autem id eveniet explicabo id esse reiciendis.</p>
            </div>

            <div>
                
            </div>
            
        </section>



 <!---------------------footer----------------------------->
        <footer>
            <h3> Marmoraria Comercio LTDA.</h3>
            <p id="footer"> 
                <b>E-mail:</b> marmopf@emailficticio.com <br> 
                <b>Telefone:</b>  555-2424 <br>
                <b>Endereço:</b> Rua dos marmoristas 1352. Cruzeiro do Sul, Acre. Brazil
            </p>
            <p>"Ornando o exterior com excelência interior".</p>
        </footer>

    </body>