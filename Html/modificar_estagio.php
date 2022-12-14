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
    <title>Criar Estágio</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand fontTextLeftHeader ms-1" href="criar_estagio.php"
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

    <section class="container mt-5">
      <div class="row my-2 mx-1 py-2 border rounded">
        <div class="col-12">
          <form action="">
            <div class="row">
              <div class="col-12 mt-3">
                <h2>Atualizar Estágio</h2>
              </div>
              <p class="text-center text-primary pt-5">
                Por favor, apenas atualize os campos que você deseja alterar,
                sendo assim não será necessário modificar todos eles. Obs.: Não
                esqueça de clicar no botão “Atualizar” para confirmar a
                alteração.
              </p>
            </div>
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
                  value=""
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
                  value=""
                />
                <label for="nomeEvento" class="form-label"
                  >Descrição do Estágio</label
                >
                <textarea
                  type="text"
                  name="DescricaoDoEstagio"
                  id="nomeEvento"
                  class="form-control"
                ></textarea>
                <p class="text-center text-primary mt-3">
                  A opção de frequência do aluno(a) fica logo abaixo.
                </p>
                <span>Formulário</span>
               
                <div class="ms-3">
                <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="FreqCheck"
                      id="FreqCheck3"
                      checked
                    />
                    <label class="form-check-label" for="FreqCheck3">
                      Não Alterar
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="FreqCheck"
                      id="FreqCheck1"
                    />
                    <label class="form-check-label" for="FreqCheck1">
                      Faltou
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="FreqCheck"
                      id="FreqCheck2"
                      
                    />
                    <label class="form-check-label" for="FreqCheck2">
                      Presente
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="FreqCheck"
                      id="FreqCheck3"
                    />
                    <label class="form-check-label" for="FreqCheck3">
                      Falta Justificada
                    </label>
                  </div>
                 
                </div>
              </div>

              <div class="col-6">
                <a
                  href="atualizar_estagio.php"
                  class="btn btn-danger w-100 text-white"
                  >Cancelar</a
                >
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100 text-white">
                  Atualizar
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
