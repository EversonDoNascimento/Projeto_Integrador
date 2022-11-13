
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recuperação de Senha</title>
    <!--Normalize Css-->
    <link rel="stylesheet" href="../css/normalize.css" />
    <!--Adicionando Bootstrap-->
    <link
      rel="stylesheet"
      href="../node_modules/bootstrap/dist/css/bootstrap.css"
    />
    <!--Adicionando Css-->
    <link rel="stylesheet" href="../css/style.css" />
    <!--Adicionando Favicon-->
  </head>
  <body class="bgImage">
    <section class="container-fluid text-center alinhamento">
      <div class="row tamcontainer">
        <div
          class="col-lg-5 bg-primary align-items-center controlScreenLogin paddingPagesUp"
        >
          <p class="fontTextLeftHeader fontSizeHeader paddingItens">
            Faça Login
          </p>
          <p class="fontTextLeftBody fontSizeBody paddingItens">
            Por favor, nos informe o seu email de acesso ao MyFreq, logo em
            seguida lhe enviaremos algumas instruções para que você recupere sua
            senha.
          </p>
          <a
            class="btn btnInf btn-outline-light btnSize paddingPagesDown"
            href="pag_login.php"
          >
            Voltar para o login
          </a>
        </div>
        <div class="col-lg bg-white Login paddingPagesUp">
          <p class="colorParag fontSizeBody paddingItens">Informe seu email:</p>
          <form
            style="width: 22rem"
            class="input-group input-group-sm mb-4 m-auto"
          >
            <span
              class="input-group-text bg-primary text-white"
              id="basic-addon1"
              >Email:</span
            >
            <input
              type="text"
              class="form-control"
              placeholder="Digite seu email!"
              aria-label="UserEmail"
              aria-describedby="basic-addon1"
            />
          </form>
          <form>
          <button
            class="btn btnLogin btn-outline-primary btnSize mt-4 paddingPagesDown"
            href=""
            >Enviar</button
          >
          </form>
        </div>
      </div>
    </section>
    <!--Adicionando script Bootstrap-->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!--Script Local-->
    <script src="../myScript/script.js"></script>
  </body>
</html>


