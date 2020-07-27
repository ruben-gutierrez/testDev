<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <style>
        .active{
            text-decoration: none;
            color: green;
        }
    </style> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PageWork</title>
</head>
<body>
    <?php
        function activeMenu( $url)
        {
            return request()->is($url) ? 'active' : '';
        }
    ?>
    {{-- <header>
            

        <a class="{{ activeMenu( '/') }}" href="{{ route('home') }}">Inicio</a>
        <a class="{{ activeMenu('contactanos')}}" href="{{ route('contact') }}">Contacto</a>
        <a class="{{ activeMenu('pqrs/*')}}" href="{{ route('pqrs', 'ruben') }}">pqrs</a>
    </header>  --}}

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" class="{{ activeMenu( '/') }}" href="{{ route('home') }}">Trabajo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ activeMenu( '/') }}" >
                  <a class="nav-link"  href="{{ route('home') }}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ activeMenu('trabajo')}}">
                  <a class="nav-link" href="{{ route('work') }}">Actividades</a>
                </li>
                <li class="nav-item dropdown {{ activeMenu('informe/*')}} {{ activeMenu('informe')}}">
                
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Informe
                  </a>
                  <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item " href="{{ route('inform', 'pedro') }}">Pedro</a>
                    <a class="dropdown-item" href="{{ route('inform','felipe') }}">Felipe</a>
                    <a class="dropdown-item" href="{{ route('inform', 'ana') }}">Ana</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('inform' ) }}">General</a>
                  </div>
                </li>
              </ul>
            


            </div>
          </nav>
    </header>
    @yield('content')

<footer>
    Copyring {{date('Y')}}
</footer>

    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   
</body>
</html>

