<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Funcionarios</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <style>
        /* Sticky footer styles -------------------------------------------------- */
        .mb-10 {
            margin-bottom: 1em;
        }

        html {
            position: relative;
            min-height: 100%;
        }

        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            line-height: 60px;
            /* Vertically center the text there */
            background-color: #f5f5f5;
        }


        /* Custom page CSS -------------------------------------------------- */
        /* Not required for template or sticky footer method. */

        body>.container {
            padding: 60px 15px 0;
        }

        .footer>.container {
            padding-right: 15px;
            padding-left: 15px;
        }

        code {
            font-size: 80%;
        }

    </style>
</head>

<body>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Funcionarios</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://127.0.0.1:8000/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/user/list">Funcionarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/folha-ponto">Folha de ponto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
        <h2 class="mt-5">Criar Funcionario</h2>
        <form action="http://127.0.0.1:8000/user/aaa" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" name="nome" id="exampleInputNome" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
    </main>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">Ticto</span>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>
