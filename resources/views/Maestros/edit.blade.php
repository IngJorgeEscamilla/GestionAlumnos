<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maestros</title>
</head>
<body>
    <header>
        <h1>Maestros</h1>
    </header>
    <div class="TableroMaestros">
        <h2>Nuevo Maestro</h2>
        <form action="">
            @csrf
                <!--Campo nombre del maestro-->
            <div>
                <label for=""></label>
                <input type="text" name="nombre" id="nombre">
            </div>
                <!--Campo matricula del maestro-->
            <div>
                <label for=""></label>
                <input type="text" name="matricula" id="matricula">
            </div>
                <!--Campo email del maestro-->
            <div>
                <label for=""></label>
                <input type="text" name="email" id="email">
            </div>
                <!--Campo telefono del maestro-->
            <div>
                <label for=""></label>
                <input type="text" name="telefono" id="telefono">
            </div>
        </form>
    </div>
</body>
</html>