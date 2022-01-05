<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Cabecera fija</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
</head>

<body>
<header id="main-header">
    <a id="logo-header" href="{{url()->previous()}}">
        <span class="site-name">BackPHP</span>
    </a>
    <nav>
        <ul>
            <li><a href="alumno.php?schedule=day&day=0"> Dias</a></li>
            <li><a href="alumno.php?schedule=week&week=0"> Semanas</a></li>
            <li><a href="alumno.php?schedule=month&month=0"> Meses</a></li>
            <li><a  href="{{ url('perfil') }}"> Perfil</a></li>
            <li><a href="{{ url('/logout') }}">Log Out</a></li>
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
                    <h3>{{$clase->classname}}</h4>
                        <div class="detalle-clase">
                            <h5>{{$clase->teachername}} {{$clase->surname}}</h5>
                            <p>{{Carbon\Carbon::parse($clase->day)->format('d/m/Y')}}</p>
                            <p>{{$clase->start}}</p>
                            <p>{{$clase->end}}</p>
                            <div style="background-color: {{$clase->color}}; width: 50px; height: 50px;"></div>
                        </div>
                        <div class="detalle-clase">
                            <h4>Notas:</h4>
                            <div class="detalle-notas">
                                <div class="nota">
                                    <h6>AA1</h6>
                                    <p>7</p>
                                </div>
                                <div class="nota">
                                    <h6>AA2</h6>
                                    <p>9.2</p>
                                </div>
                            </div>
                            <div class="detalle-notas notas-finales">
                                <div class="nota">
                                    <h6>EC</h6>
                                    <p>7.6</p>
                                </div>
                                <div class="nota">
                                    <h6>Final</h6>
                                    <p>8.5</p>
                                </div>
                            </div>
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
