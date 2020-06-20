<html>

<head>
    <title>Forfun Informatica</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <meta charset="UTF-8">
</head>

<body>

    <header class="menu-principal">
        <main>

            <div class="headerum">

                <div class="logotipo">
                    <img src="./img/ff4.png" />
                </div>
                <div class="cadlogin">
                    <a href="./cadlogin.php">
                        <button class="btn btn-terceiro">Login/Cadastro</button>
                    </a>
                </div>

                <div class="carrinhocompras">
                    <a href="./carrinhocompras.php">
                        <img src="/img/carrinho2.jpg">
                    </a>
                </div>
            </div>
        </main>
    </header>

    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                <li>
                        <a href="./index.php">Home</a>
                    </li>
                    <li>
                        <a href="./institucional.php">Institucional</a>
                    </li>
                    <li>
                        <a href="./diaadia.php">Dia a dia</a>
                    </li>
                    <li>
                        <a href="./solucoescorporativas.php">Soluções Corporativas</a>
                    </li>
                    <li>
                        <a href="./gamersestreamers.php">Gamers e Streamers</a>
                    </li>
                    <li>
                        <a href="./contato.php">Contato</a>
                    </li>
                </ul>
                <div class="busca">
                    <input placeholder="Pesquisa" type="text" />
                </div>
            </div>
        </div>
    </main>




    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro - Bootkamp</h3>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="data" class="input is-large" type="date"
                                        placeholder="Data de nascimento">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="CPF" type="text" class="input is-large" placeholder="CPF" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="Telefone/whatsapp" type="tel" class="input is-large"
                                        placeholder="Telefone">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="E-mail" class="input is-large" type="text" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="Endereço" class="input is-large" type="text" placeholder="Endereço">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="CEP" type="text" class="input is-large" placeholder="CEP" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="Cidade" type="text" class="input is-large" placeholder="Cidade">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <Select name="estado" id="estado">
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AM">AM</option>
                                        <option value="AP">AP</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MG">MG</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="PR">PR</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="RS">RS</option>
                                        <option value="SC">SC</option>
                                        <option value="SE">SE</option>
                                        <option value="SP">SP</option>
                                        <option value="TO">TO</option>
                                    </Select>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input name="Senha" class="input is-large" type="password" placeholder="Senha">
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <input name="Confirme a Senha" class="input is-large" type="password"
                                                placeholder="Confirme a Senha">
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>