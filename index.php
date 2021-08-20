<?php get_header(); ?>

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

<?php get_footer(); ?>
        