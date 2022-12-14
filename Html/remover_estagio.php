<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Botstrap css -->
    <link
      rel="stylesheet"
      href="../node_modules/bootstrap/dist/css/bootstrap.css"
    />
    <!--Css Local-->
    <link rel="stylesheet" href="../css/style.css" />
    <!--Normalize Css-->
    <link rel="stylesheet" href="../css/normalize.css" />
    <title>Remover Estágio</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand fontTextLeftHeader ms-1" href="criar_estagio.html"
        >MyFreq</a
      >
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="position-absolute top-1 end-0">
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active text-white"
                aria-current="page"
                href="criar_estagio.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="perfil_usuario.php"
                >Perfil</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="container">
      <div class="row">
        <div class="col">
          <h1>Meus estágios</h1>
        </div>
      </div>
      <div class="row my-2 mx-1 py-2 border rounded">
        <div class="col-12">
          <form action="">
            <div class="row">
              <div>
                <ul class="nav nav-pills nav-fill">
                  <li class="nav-item">
                    <a class="nav-link" href="criar_estagio.php"
                      >Criar Estágio</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="atualizar_estagio.php"
                      >Atualizar Estágio</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pesquisar_estagio.php"
                      >Pesquisar Estágio</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="remover_estagio.php">Remover Estágio</a>
                  </li>
                </ul>
              </div>
              <div class="col-12 mt-3">
                <h2>Remover Estágio</h2>
              </div>
            </div>
            <p class="text-center text-primary pt-3 pb-3">
              Por favor, caso você necessite de informações para encontrar o estágio que deseja remover, acesse a aba "Pesquisar Estágio" e clique na opção "Visualizar todos os estágios" a fim de encontrar o estágio que você deseja remover.
            </p>
            <div class="row g-3">
              <div class="col-12">
                <label for="nomeDoAluno" class="form-label"
                  >Nome do Aluno(a)</label
                >
                <input
                  type="text"
                  name="nomeDoAluno"
                  id="nomeDoAluno"
                  class="form-control"
                />
                <label for="numeroDaMatricula" class="form-label"
                  >Número da Matrícula</label
                >
                <input
                  type="text"
                  name="numeroDaMatricula"
                  id="numeroDaMatricula"
                  class="form-control"
                />
                <label for="localEstagio" class="form-label"
                  >Local do Estágio</label
                >
                <input
                  type="text"
                  name="localEstagio"
                  id="localEstagio"
                  class="form-control"
                />
              </div>
              <div class="col-12">
                <label for="dataEstagio" class="form-label"
                  >Data e Hora do Estágio</label
                >
                <input
                  type="datetime-local"
                  name="dataEstágio"
                  id="dataEstágio"
                  class="form-control"
                />
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-danger w-100 text-white">
                  <a href="" class="text-white">Remover Estágio</a>
                </button>
              </div>
              
            </div>
          </form>
        </div>
      </div>
    </section>
    <!--Adicionando Bootstrap Js-->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!--Script Local-->
    <script src="../myScript/meuScript.js"></script>
  </body>
</html>
