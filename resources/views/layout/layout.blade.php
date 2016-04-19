<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <title>Controle de estoque</title>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/produtos">Listagem</a></li>
                <li><a href="/produtos/novo">Adicionar Produto</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <p>Controle de Estoque Laravel</p>
    </footer>

</div>
</body>
</html>





