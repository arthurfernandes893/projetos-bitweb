<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-3.6.1.min.js"></script> <!--o arquivo do jquery tem que estar na PASTA do projeto-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    
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

        <section class="bloco">
        <div id="parceiros-table">
            <table  id="parceiros" class="cell-border" cellpadding="5" cellspacing="1">
                <thead>
                    <tr>
                        <td>Cemitérios</td>
                        <td>Localização</td>
                        <td>Concessionária</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Cemitério São Joao Batista</td>
                        <td>R. Gen. Polidoro, 245 - Botafogo, Rio de Janeiro - RJ, 22281-033</td>
                        <td>Riopax</td>
                    </tr>

                    <tr>
                        <td>Cemitério de Inhaúma</td>
                        <td>Av. Pastor Martin Luther King Júnior, 1335 - Inhauma, Rio de Janeiro - RJ, 20765-630</td>
                        <td>Riopax</td>
                    </tr>

                    <tr>
                        <td>Cemitério do Pechincha</td>
                        <td>R. Retiro dos Artistas, 307 - Pechincha, Rio de Janeiro - RJ, 22770-105</td>
                        <td>Riopax</td>
                    </tr>

                    <tr>
                        <td>Cemitério de Irajá</td>
                        <td>Praça Nossa Sra. da Apresentação, 198 - Irajá, Rio de Janeiro - RJ, 21231-220</td>
                        <td>Riopax</td>
                    </tr>

                    <tr>
                        <td>Cemitério de Campo Grande</td>
                        <td>Av. Cesário de Melo, 4351 - Campo Grande, Rio de Janeiro - RJ, 23055-002</td>
                        <td>Riopax</td>
                    </tr>

                    <tr>
                        <td>Cemitério São Franscisco Xavier</td>
                        <td>R. Monsenhor Manuel Gomes, 311 - Caju, Rio de Janeiro - RJ, 20931-670</td>
                        <td>Reviver</td>
                    </tr>

                    <tr>
                        <td>Cemitério de Ricardo de Albuquerque</td>
                        <td>Estr. Mal. Alencastro, 1743 - Ricardo de Albuquerque, Rio de Janeiro - RJ, 21625-000</td>
                        <td>Reviver</td>
                    </tr>

                    <tr>
                        <td>Cemitério do Cacuia</td>
                        <td>Estr. da Cacuia, 460 - Cacuia, Rio de Janeiro - RJ, 21921-000</td>
                        <td>Reviver</td>
                    </tr>

                    <tr>
                        <td>Cemitério de Santa Cruz</td>
                        <td>R. da Verdade, s/n - Santa Cruz, Rio de Janeiro - RJ, 23555-135</td>
                        <td>Reviver</td>
                    </tr>
                </tbody>
                </table>
        </div>

       <script> 
        $(document).ready( function () {
        $('#parceiros').DataTable(
            {
                paging: false
                
            }
        );
        } );
        </script>

    



        <br><br>
        <a href="index.php" id="link"><h2>Voltar para o Inicio</h2></a>
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