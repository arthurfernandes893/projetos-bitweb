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
        <section  class="container" id="barra_header">
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