<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    
    <script> 
        $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    </script>
    
    <title>Marmoraria </title>

    <body>
    
    <header id="header"> 
        <section id="barra_header">
            <a href="index.php" id="link-header"><h1>Marmoraria</h1></a>
            <a href="produtos.php"><h2 class="h2_header">Produtos</h2></a>
            <a href="Parceiros.php"><h2 class="h2_header">Parceiros</h2 ></a>
            <a href="orcamentos.php"><h2 class="h2_header">Orçamentos</h2></a>
           
            <form action="resultados-index.php">
                <input type="text" id="pesquisa" name="pesquisa" placeholder="O que procura?">
                    <input type="submit" name="ENVIAR" value="Pesquisar"><br>
            </form>
    </header>

    <section class="bloco">  
        <br>
       
       <?php
       
       $resultadopesquisa = $_GET['pesquisa'];

        switch ($resultadopesquisa) {
            case 'reviver':
                echo "<div class='bloco'>
                  <img src='img/reviver-logo.png' alt='logomarca Concessionaria Reviver' width='201.6px' height='87.5px'>
                  <h1>Reviver</h1>
                  <p>Lorem ipsum dolor sit amet. Ut magni ratione eos inventore sunt id voluptatem 
                      rerum aut commodi deserunt rem saepe unde aut natus necessitatibus. 
                      Nam inventore distinctio sit adipisci rerum vel temporibus nemo. Non temporibus asperiores 
                      aut molestiae culpa in atque enim hic delectus debitis ut neque ratione! 
                      Et dicta excepturi quo natus dolores est sint autem aut voluptas debitis 
                      ab reprehenderit autem id eveniet explicabo id esse reiciendis.</p>
              </div>
              <br><br><br>";

                break;
            
            case 'riopax':
                echo " <div class='bloco'>
                <img src='img/riopax-logo.png' alt='logomarca Concessionaria Riopax' width='201.6px' height='87.5px'>    
                <h1>Rio Pax</h1>
                <p>Lorem ipsum dolor sit amet. Ut magni ratione eos inventore sunt id voluptatem 
                    rerum aut commodi deserunt rem saepe unde aut natus necessitatibus. 
                    Nam inventore distinctio sit adipisci rerum vel temporibus nemo. Non temporibus asperiores 
                    aut molestiae culpa in atque enim hic delectus debitis ut neque ratione! 
                    Et dicta excepturi quo natus dolores est sint autem aut voluptas debitis 
                    ab reprehenderit autem id eveniet explicabo id esse reiciendis.</p>
            </div>
            <br><br><br>";

                break;
            
            case 'cemiterio':
                echo "<h3>Você esta buscando nossos pacerios. por favor confira essa pagina: </h3> <br>
                <a href='Parceiros.php'><h2>Parceiros</h2></a>
                <br><br><br>";
               
                break;

            default:
                echo "

                <h2> infelizmente nao foi possivel encontrar a sua pesquisa</h2>
                <br> 
                <h3> Por favor, tente novamente com outro termo.</h3>
            
                ";
                break;
        }

        ?>

        <a href="index.php" id="link"><h2>Voltar para o Inicio</h2></a>
    <br>
    </section>

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


    </section>