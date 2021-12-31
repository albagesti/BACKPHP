<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Cabecera fija</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
</head>

<body>
<header id="main-header">
    <a id="logo-header" href="#">
        <span class="site-name">BackPHP</span>
    </a>
    <nav>
        <ul>
            <li><a href="alumno.php?schedule=day&day=0"> Dias</a></li>
            <li><a href="alumno.php?schedule=week&week=0"> Semanas</a></li>
            <li><a href="alumno.php?schedule=month&month=0"> Meses</a></li>
            <li><a  href="{{ url('perfil') }}"> Perfil</a></li>
            <li><a href={{ url('/logout') }}>Log Out</a></li>
            </form></li>
        </ul>
    </nav>
</header>

<section id="main-content">

    <article>

        <div class="content">
            <h2>Clases de {{$cursos->name}}</h2>
            <div>
                @foreach($clases as $clase)
                    <div class="panel-curso-alumno panel-clase">
                        <div class="detalle-clase">
                            <h4>{{$clase->classname}}</h4>
                            <h5>{{$clase->teachername}} {{$clase->surname}}</h5>
                            <p>{{Carbon\Carbon::parse($clase->day)->format('d/m/Y')}}</p>
                            <p>{{$clase->start}}</p>
                            <p>{{$clase->end}}</p>
                            <div style="background-color: {{$clase->color}}; width: 50px; height: 50px;"></div>
                        </div>
                        <div class="detalle-clase">
                            <p>5</p>
                            <p>8</p>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </article> <!-- /article -->

</section> <!-- / #main-content -->

<footer id="main-footer">
    <p><a>&copy; 2021 BackPHP </a></p>
</footer> <!-- / #main-footer -->

</body>
</html>
