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
      <section id="barra-header">  
        <nav class="navbar navbar-expand-sm bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">Marmoraria</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="produtos.php">Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Parceiros.php">Serviços</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="orcamentos.php">Orçamentos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#footer">Quem Somos</a>
                  </li>              
                  <li class="nav-item">
                    <form action="resultados-index.php">
                      <input type="text" id="pesquisa" name="pesquisa" placeholder="O que procura?">
                          <input type="submit" name="ENVIAR" value="Pesquisar"><br>
                    </form>
                  </li>              
                </ul>            
              </div>
            </div>
          </nav>
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
                <a href=""><img src="https://blog.zlionbrasil.com.br/wp-content/uploads/2021/07/reducao-marmoraria.png" style="padding:10px;" class="d-block w-100 img-fluid"  alt="Luto pela morte do CEO"></a>
                <div class="carousel-caption d-none d-md-block">
                
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="https://media.gazetadopovo.com.br/2021/07/13190812/Banheiro_MacchiaOro_Execu%C3%A7%C3%A3o-Revest-Pedras_fotosRafaelLima-1920x1080-960x540.jpg" class="d-block w-100" style="padding:10px;" alt="Reator Arc">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://blog.imobiliarianovolar.net/wp-content/uploads/2022/03/marmore-granito-ou-quatzo.png" class="d-block w-100" style="padding:10px;" alt="Pepper Pots assume a presicencia da empresa.">
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