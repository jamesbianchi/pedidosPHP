<html>
<head>
    <meta charset="UTF-8">
    <title>Sweeties&Things</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Oswald', sans-serif;
            background-color: lightgray;
            
        }
        
        .cabecalho {
            
            background: #333;
            color: #fff;
            border-bottom: solid 5px #4faddb;
            height: 80px;
        }
        
        .logo img {
            height: 50px;
        }
        
        .menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display:flex;
        }
        
        .cabecalho a {
            text-decoration: none;
            color: #eee;
            font-size: 1.3em;
            padding: 10px 15px;
        }
        
        .menu a:hover {
            background-color: #4faddb;
            color: #000;
        }
        
        .cabecalho .botao {
            border-radius: 30px;
            padding: 10px 25px;
            margin-right: 10px;
        }
        
        .destaque {
            background: #f50a31;
            color: #fff;
        }

        /* ==================== */
        /* Solução com Flex Box */
        /* ==================== */
       
        .cabecalho {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .menu {
            flex-grow: 10;
        }

        ul {
            display: flexs;
        }

        footer{
            margin-left:20px;
            color: #333;
            font-weight: bold;
        }

    </style>
</head>

<body>
    <header class="cabecalho">
        <div class="logo">
            <a href="<?=$base?>">
                <img src="assets/images/Logo.jpeg" alt="logo"/>
            </a>
        </div>
        <nav class="menu">
            <ul>
                <li>
                    <a href="<?=$base?>/clientes">Clientes</a>
                </li>
                <li>
                    <a href="#produtos">Produtos</a>
                </li>
                <li>
                    <a href="#pedidos">Pedidos</a>
                </li>
                <li>
                    <a href="#contato">Contato</a>
                </li>
            </ul>
        </nav>
        <aside class="autenticacao">
            <a href="#login">Login</a>
            <a href="#registar" class="botao destaque">Registrar</a>
        </aside>
    </header>
