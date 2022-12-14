
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!--Adicionando Fontes-->
    <link href="fontes/Almarai/Almarai-Bold.ttf" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&family=Antic+Didone&display=swap"
      rel="stylesheet"
    />
    <!--Normalize Css-->
    <link rel="stylesheet" href="css/normalize.css" />

    <!--Adicionando Bootstrap Css-->
    <link
      rel="stylesheet"
      href="node_modules/bootstrap/dist/css/bootstrap.css"
    />
    <!--Adicionando o Css-->
    <link rel="stylesheet" href="css/style.css" />
    <!--Adicionando o Favicon-->
    <title>MyFreq</title>
  </head>
  <body class="bgImage">
    <div class="alert"></div>
    <section class="container-fluid text-center alinhamento">
      <div class="row tamcontainer">
        <div class="col-lg-5 bg-primary align-items-center controlScreenIndex">
          <p
            class="fontTextLeftHeader fontSizeHeader paddingItens paddingPagesUp"
          >
            Bem-vindo(a) ao MyFreq
          </p>
          <p class="fontTextLeftBody fontSizeBody paddingItens">
            Por favor, precisamos que você <br />selecione uma das opções ao
            lado.<br />
            Qualquer dúvida clique em saiba mais.
          </p>
          <button class="btn btnInf btn-outline-light btnSize paddingPagesDown">
            Saiba mais
          </button>
        </div>
        <div class="col-lg bg-white controlScreenIndex">
          <p class="colorParag fontSizeBody paddingItens paddingPagesUp">
            Por favor, nos informe se você é DOCENTE (professor) ou<br />
            DISCENTE (aluno):
          </p>
          <a
            class="btn btnLogin btn-outline-primary btnSize"
            href="Html/pag_login.php"
            >DOCENTE</a
          >
          <br /><br />
          <a class="btn btnLogin btn-outline-primary btnSize" href="Html/pag_login.php"
            >DISCENTE</a
          >
        </div>
      </div>
    </section>
    <!--Adicionando Bootstrap Js-->
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!--Script Local-->
    <script src="myScript/meuScript.js"></script>
  </body>
</html>
