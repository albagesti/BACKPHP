<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" type="text/css" href="../css/perfil.css">
</head>

<body>
<section class="seccion-perfil-usuario">
    <div class="perfil-usuario-header">

        <div class="perfil-usuario-portada">
            <nav>
                <ul>
                    <li><a href="alumno.php?schedule=day&day=0"> Dias</a></li>
                    <li><a href="alumno.php?schedule=week&week=0"> Semanas</a></li>
                    <li><a href="alumno.php?schedule=month&month=0"> Meses</a></li>
                    <li><a  href="{{ url('perfil') }}"> Perfil</a></li>
                    <li><a href={{ url('/logout') }}>Log Out</a></li>
                </ul>

            </nav>
        </div>
    </div>
    <div class="perfil-usuario-body">
        <div class="perfil-usuario-bio">
            <a  href="{{ url('/student') }}">Atrás</a>
            <h3 class="titulo"></h3>
            <p class="texto"><br>Registered on:</p>
        </div>


        <div class="perfil-usuario-footer">
            <ul class="lista-datos">
                    <li>Nombre:</li>
                    <li>Email:</li>
                    <li>Contraseña:</li>
            </ul>


        </div>

    </div>
</section>


</body>

</html>
