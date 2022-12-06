<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
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

        <section>
         <!--adicionar planilha com produtos e adicionar o DATATABLES nessa e na outra.-->
         <a href="index.php"><h2>Voltar para o Inicio</h2></a>
        </section>


        <footer>
            <h3> Marmoraria PF Comercio LTDA.</h3>
            <p id="footer"> 
                <b>E-mail:</b> marmopf@emailficticio.com <br> 
                <b>Telefone:</b>  555-2424 <br>
                <b>Endereço:</b> Rua dos marmoristas 1352. Cruzeiro do Sul, Acre. Brazil
            </p>
            <p>"Ornando o exterior com excelência interior".</p>
        </footer>

    </body>