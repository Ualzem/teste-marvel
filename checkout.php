<?php
// Template Name: Checkout
?>

<?php get_header(); ?>

<<<<<<< HEAD
<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="200" height="90">
                <h2>Checkout Marvel Ualzem</h2>
                <p class="lead">Favor preencher todos os dados e conferir antes de finalizar.</p>
            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Carrinho</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Nome Produto</h6>
                                <small class="text-muted">Descrição curta</small>
                            </div>
                            <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Segundo Produto</h6>
                                <small class="text-muted">Descrição curta</small>
                            </div>
                            <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Terceiro Produto</h6>
                                <small class="text-muted">Descrição curta</small>
                            </div>
                            <span class="text-muted">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Código Desconto</h6>
                                <small>CUPOM-RARO</small>
                            </div>
                            <span class="text-success">−50%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Código Desconto">
                            <button type="submit" class="btn btn-secondary">Calcular</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Endereço Cobrança</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Nome é obrigatório.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Sobrenome é obrigatório.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="username" class="form-label">Usuário</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" placeholder="Usuário" required>
                                    <div class="invalid-feedback">
                                        Usuário é obrigatório.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Por favor entre com um e-mail válido.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="address" placeholder="(exemplo) Rua das Flores, 24" required>
                                <div class="invalid-feedback">
                                    Por favor entre com seu endereço.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address2" class="form-label">Endereço 2 <span class="text-muted">(Opcional)</span></label>
                                <input type="text" class="form-control" id="address2" placeholder="Complemento (se possuir)">
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">País</label>
                                <select class="form-select" id="country" required>
                <option value="">Escolha...</option>
                <option>Brazil</option>
              </select>
                                <div class="invalid-feedback">
                                    Selecione seu país.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="state" class="form-label">Estado</label>
                                <select class="form-select" id="state" required>
                <option value="">Escolha...</option>
                <option>Minas Gerais</option>
                <option>São Paulo</option>
                <option>Rio de Janeiro</option>
                <option>Paraná</option>
              </select>
                                <div class="invalid-feedback">
                                    Escolha seu estado.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label">CEP</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    O CEP é obrigatório.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-address">
                            <label class="form-check-label" for="same-address">O endereço de entrega é igual ao meu endereço de cobrança.</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-info">
                            <label class="form-check-label" for="save-info">Salvar estas informações para as próximas compras.</label>
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Pagamento</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">Cartão de crédito</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Cartão de débito</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Nome no cartão</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Nome completo escrito no cartão.</small>
                                <div class="invalid-feedback">
                                    Nome no cartão é obrigatório.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Número do cartão</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Favor colocar um número válido.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Validade</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Validade do cartão é obrigatória.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Código de segurança é obrigatório.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue para finalizar</button>
                    </form>
                </div>
            </div>
        </main>

        <?php get_footer(); ?>
=======
<!-- Início do loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <body class="bg-light">

        <div class="container">
            <main>
                <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" src="<?php echo get_template_directory_uri(); ?>/./bootstrap-5.0.2-examples/assets/brand/bootstrap-logo.svg" alt="" width="200" height="90">
                    <h2>Checkout Marvel Ualzem</h2>
                    <p class="lead">Favor preencher todos os dados e conferir antes de finalizar.</p>
                </div>

                <div class="row g-5">
                    <div class="col-md-5 col-lg-4 order-md-last">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-primary">Carrinho</span>
                            <span class="badge bg-primary rounded-pill">3</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Nome Produto</h6>
                                    <small class="text-muted">Descrição curta</small>
                                </div>
                                <span class="text-muted">$12</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Segundo Produto</h6>
                                    <small class="text-muted">Descrição curta</small>
                                </div>
                                <span class="text-muted">$8</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Terceiro Produto</h6>
                                    <small class="text-muted">Descrição curta</small>
                                </div>
                                <span class="text-muted">$5</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <div class="text-success">
                                    <h6 class="my-0">Código Desconto</h6>
                                    <small>CUPOM-RARO</small>
                                </div>
                                <span class="text-success">−50%</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (USD)</span>
                                <strong>$20</strong>
                            </li>
                        </ul>

                        <form class="card p-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Código Desconto">
                                <button type="submit" class="btn btn-secondary">Calcular</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">Endereço Cobrança</h4>
                        <form class="needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Nome é obrigatório.
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Sobrenome</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Sobrenome é obrigatório.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="username" class="form-label">Usuário</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text">@</span>
                                        <input type="text" class="form-control" id="username" placeholder="Usuário" required>
                                        <div class="invalid-feedback">
                                            Usuário é obrigatório.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                        Por favor entre com um e-mail válido.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Endereço</label>
                                    <input type="text" class="form-control" id="address" placeholder="(exemplo) Rua das Flores, 24" required>
                                    <div class="invalid-feedback">
                                        Por favor entre com seu endereço.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="address2" class="form-label">Endereço 2 <span class="text-muted">(Opcional)</span></label>
                                    <input type="text" class="form-control" id="address2" placeholder="Complemento (se possuir)">
                                </div>

                                <div class="col-md-5">
                                    <label for="country" class="form-label">País</label>
                                    <select class="form-select" id="country" required>
                    <option value="">Escolha...</option>
                    <option>Brazil</option>
                </select>
                                    <div class="invalid-feedback">
                                        Selecione seu país.
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="state" class="form-label">Estado</label>
                                    <select class="form-select" id="state" required>
                    <option value="">Escolha...</option>
                    <option>Minas Gerais</option>
                    <option>São Paulo</option>
                    <option>Rio de Janeiro</option>
                    <option>Paraná</option>
                </select>
                                    <div class="invalid-feedback">
                                        Escolha seu estado.
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="zip" class="form-label">CEP</label>
                                    <input type="text" class="form-control" id="zip" placeholder="" required>
                                    <div class="invalid-feedback">
                                        O CEP é obrigatório.
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="same-address">
                                <label class="form-check-label" for="same-address">O endereço de entrega é igual ao meu endereço de cobrança.</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="save-info">
                                <label class="form-check-label" for="save-info">Salvar estas informações para as próximas compras.</label>
                            </div>

                            <hr class="my-4">

                            <h4 class="mb-3">Pagamento</h4>

                            <div class="my-3">
                                <div class="form-check">
                                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                    <label class="form-check-label" for="credit">Cartão de crédito</label>
                                </div>
                                <div class="form-check">
                                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                    <label class="form-check-label" for="debit">Cartão de débito</label>
                                </div>
                                <div class="form-check">
                                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                    <label class="form-check-label" for="paypal">PayPal</label>
                                </div>
                            </div>

                            <div class="row gy-3">
                                <div class="col-md-6">
                                    <label for="cc-name" class="form-label">Nome no cartão</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                    <small class="text-muted">Nome completo escrito no cartão.</small>
                                    <div class="invalid-feedback">
                                        Nome no cartão é obrigatório.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="cc-number" class="form-label">Número do cartão</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Favor colocar um número válido.
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="cc-expiration" class="form-label">Validade</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Validade do cartão é obrigatória.
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="cc-cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Código de segurança é obrigatório.
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue para finalizar</button>
                        </form>
                    </div>
                </div>
            </main>
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">&copy; Marvel Uazem - 2021</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Privacidade</a></li>
                    <li class="list-inline-item"><a href="#">Termos</a></li>
                    <li class="list-inline-item"><a href="#">Suporte</a></li>
                </ul>
            </footer>
        </div>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="form-validation.js"></script>
    </body>

    </html>

<?php endwhile; else: endif; ?>     
>>>>>>> 02259df237143b0ca0b3c0ea44de9e9cb37fbdad

       