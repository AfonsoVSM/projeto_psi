<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit-no" name="viewport">
    @yield('titulo')
    <title>Exemplo de Bootsrap</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @yield('nav')
    <!--barra de navegação-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="welcome">AfonsoVSM</a>
        <button class="navbar-toggler"type="button"data-toogle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"aria-expanded="false" aria-label="Toogle navigation">
        <span class="navbar-tooggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse"id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            
            <li class="nav-item active">
            <a class="nav-link" href="noticias">noticias<span class="sr-only">(atual)</span>
                </a>

                <li class="nav-item active">
            <a class="nav-link" href="contactos">contactos<span class="sr-only">(atual)</span>
                </a>

                <li class="nav-item active">
            <a class="nav-link" href="empresa">empresa<span class="sr-only">(atual)</span>
                </a>

                <li class="nav-item active">
            <a class="nav-link" href="ondeestamos">ondeestamos<span class="sr-only">(atual)</span>
                </a>
            
            
            <li class="nav-item dropdown">
                
            
                </div>
            </li>
            </ul>
    
        </div>
    </nav>
    @yield('menu')
    <main role="main">
        
    <div class="jumbotron">
        <div class="container">
             <div class="text-center">
        <h1 class="display-3">Especialista na criação de sites</h1>
            
        <p>Lojas online & Marketing digital</p>
             </p>
              <br>
                 <br>
        </div>
        </div>
        </div>
        
        @yield('conteudo')
        

    
       @yield('rodapé')
      <br>
        </main>
     <div class="text-center">
        <footer class="container">
        <p>&copy;Companhia GPSI 2020-2021</p>
        </footer>
    </div>
    
    
    <script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.js"></script>
    </body>
</html>