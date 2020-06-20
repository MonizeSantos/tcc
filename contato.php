<?php
$msg=0;
@$msg= $_REQUEST['msg'];
?>
<html>

<head>
    <title>Contato</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
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

    <section class="content00">
        <div class="contatos">
            <h3>Formulário de contato</h3>

            <form class=formulario method="POST" action=./email.php>
                <input class="field" name="nome" placeholder="Nome">
                <input class="field" name="email" placeholder="E-mail">
                <input class="field" name="motivo" placeholder="Motivo">
                <textarea class="field" name="msg" placeholder="Digite sua mensagem aqui.">

                </textarea>
                <input type="submit" value="enviar">

            </form>

    <footer class="page-footer">
        <div class="footer1">
            <div class="adress-footer">
                <img class="logo-footer" src="">
                <div class="text-adress">
                    <strong>"O aplicativo BootKamp é uma marca registrada do grupo Pandora Desenvolvimento
                        LTDA."</strong>
                    <address>"Avenida dos Bolinhos Mesclados, 11955 - Galpão C5 - Bairro: Lavras - CEP:00000-000 -
                        Guarulhos/SP"</address>
                    <p>Os preços anunciados neste site ou via e-mail promocional podem ser alterados sem prévio
                        aviso. A Forfun Informática, não é responsável por erros descritivos. As fotos contidas
                        nesta página são meramente ilustrativas do produto e podem variar de acordo com o
                        fornecedor/lote do fabricante. Ofertas válidas até o término de nossos estoques. Vendas
                        sujeitas à análise e confirmação de dados.</p>
                </div>
            </div>
        </div>
    </footer>
    </body>
    </html>