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
                    <a href="Cadlogin.html">
                        <button class="btn btn-terceiro">Entre / Cadastre-se</button>
                    </a>
                </div>
                <div class="carrinhocompras">
                    <a href="carrinhocompras.html">
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
                        <a href="Index.html">Home</a>
                    </li>
                    <li>
                        <a href="Institucional.html">Institucional</a>
                    </li>
                    <li>
                        <a href="diaadia.html">Dia a dia</a>
                    </li>
                    <li>
                        <a href="Soluçõescorporativas.html">Soluções Corporativas</a>
                    </li>
                    <li>
                        <a href="Gamersestreamers.html">Gamers e Streamers</a>
                    </li>
                    <li>
                        <a href="Contato.html">Contato</a>
                    </li>
                </ul>
                <div class="busca">
                    <input placeholder="Pesquisa" type="text" />
                </div>
            </div>
        </div>
    </main>
    <div class="col-100">
        <div class="slider-principal">
            <div><img src="./img/Ambientes Corporativos.png" /></div>
            <div><img src="./img/gamers e streamers.png" /></div>
            <div><img src="./img/Dia a dia.png" /></div>
            <div><img src="./img/forfunti.png" /></div>
        </div>
    </div>

    <div class="col-200">
        <div class="Formequip">
            <form class="equip" method="Post" action="./formequip-listar.php" onsubmit="">
                <label>Necessidade do equipamento</label>
                <select name="Uso" id="tipouso">
                    <option value="0">Dia a dia</option>
                    <option value="1">Soluções Corporativas</option>
                    <option value="2">Gamers e Streamers</option>
                </select>
                <label>Valor disponível</label>
                <input type="text" name="Budget" id="Budget">

                <button type="submit" class="btn btn-budget">Buscar</button>
            </form>
        </div>
    </div>


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
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>

</body>

</html>