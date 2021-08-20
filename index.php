<!DOCTYPE html>
<html>
    <head>
      <meta charset='utf-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


      <title>Teste Marvel</title>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel='stylesheet' type='text/css' media='screen' href='style.css'>

      <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@500&display=swap" rel="stylesheet">

      <script src="https://use.fontawesome.com/cc1861bdc9.js"></script>
      
    </head>

    <body onload="character()">

        <header class="desafioHeader">
              <div class="container">
                      <div class=itensHeader>
                          <div class="logoHeader">
                                <img src="img/logoUalzem2.png">
                          </div>
                          <div class="titleHeader">
                                <h1>Desafio Single Page Application SG2 Sistemas<h1>
                          </div>
                      </div>
              </div>
        </header>

        <section class="jumbotron">
              <div class="container">
                    <h1 class="header-main-title">Digite o nome do personagem Marvel desejado</h1>
                    <form id="connectionForm">
                          <div class="form-group">
                                <input required type="text" name="name" id="name" class="form-control character-search-box"
                                placeholder="(Thor, Iron Man, Spider-Man, etc...)">
                          </div>
                          <input type="submit" value="Buscar" class="btn btn-danger mb-2 float-right search-character-button">
                    </form>
              </div>
        </section>

        <div class="container" id="contentContainer">
              <div class="d-flex align-items-center" id="characterSpinnerSection"></div>
              <div class="d-flex align-items-center" id="comicsSpinnerSection"></div>
              <section id="characterSection"></section>
              <section id="comicSection"></section>
        </div>

        <section class="video">
              <div class="banner">
                    <div class="content">
                          <img id="desktop" src="img/fundoCapa.png">
                          <img id="celular" src="img/fundoCapaCelular.png">
                          <h2>Shang-Chi e a Lenda dos Dez Anéis da Marvel Studios | trailer oficial</h2>
                          <p>
                          O filme Shang-Chi da Marvel Studios e A Lenda dos Dez Anéis na maior estréia do ano e no próximo capítulo do Universo Cinematográfico da Marvel!
                          Assista ao novo trailer de "Shang-Chi e a Lenda dos Dez Anéis" da Marvel Studios e experimente-o apenas nos cinemas em 3 de setembro.</p>

                          <div class="trailer">
                              <iframe width="727" height="409" src="https://www.youtube.com/embed/UQzDFF8xN3c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                    </div>
              </div>
        </section>

        <section class="contato">
              <div class="contatoTexto">
                    <h2>Cadastro Premiado</h2>
                    <p>Cadastre-se na nossa loja. Receba em primeira mão todas as novidadades
                    dos quadrinhos Marvel e concorra à vários prêmios todos os dias.
                    </p>
                    <p>Escreva uma mensagem dizendo porque você deve ganhar um prêmio da Marvel. As 100
                    mensagens mais criativas levam 1 par de ingressos para o novo filme da Marvel!
              </div>
              <form action="enviaremail.php" 
                      method="post" name="form" class="formphp contato-form">
                        <label for="nome">Nome</label>
                        <input id="nome" name="nome" type="text">
                        <label for="email">E-mail</label>
                        <input id="email" name="email" type="text">
                        <label for="telefone">Telefone</label>
                        <input id="telefone" name="telefone" type="text">

                        <!-- CÓDIGO ANTI ENVIO DE SPAM POR ROBÔS-->
                        <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
                        <input type="text" class="nao-aparece" name="leaveblank">
                        <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
                        <input type="text" class="nao-aparece" name="dontchange" value="http://">

                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem"></textarea>

                        <button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
              </form>
        </section>
        <footer class="footerMarvel">
            <div class="footerMarvel-content">
                  <div class="footerA">
                  <img src="img/logoUalzem2.png" al="logo footer">
                  <p>Teste com API Marvel para a empresa SG2 Sistemas</p>
                  <div class="footerMarvel-sociais">
                        <a href="https://www.linkedin.com/in/ualzem-campos/" alt="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/ualzem/" alt="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://github.com/Ualzem" alt="Github" target="_blank"><i class="fa fa-github"></i></a>
                        <a href="https://www.behance.net/mezlau00cf" alt="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                  </div>
            </div>
            <div class="footerB">
                  <div class="footerMarvelDireitos">
                        <h6 class="textoDireitos">
                              Ualzem Campos 2021 - Todos os Direitos Reservados
                        </h6>
                  </div>
            </div>
        </footer>


        <script src="main.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
              integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
              integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
              integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

    </body>

</html>