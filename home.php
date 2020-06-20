<?php
    //Conexão
    require_once 'dbconnect.php';

    //Início de Sessão
    session_start();

//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

//verificação
if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;
?>

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
                <h3>Seja bem vindo!<?php echo $dados['nome'];?></h3>
                <a href = "logout.php">Sair</a>
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
    <div class="col-100">
        <div class="slider-principal">
            <div><img src="./img/Ambientes Corporativos.png" /></div>
            <div><img src="./img/gamers e streamers.png" /></div>
            <div><img src="./img/Dia a dia.png" /></div>
            <div><img src="./img/forfunti.png" /></div>
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
                        sujeitas à análise e confirmação de dados</p>
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