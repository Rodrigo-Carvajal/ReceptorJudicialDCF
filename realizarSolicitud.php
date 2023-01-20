<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Receptor judicial - David Carvajal Ferrel</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div>
            <a class="navbar-brand" href="./index.php">Receptor judicial</a>
            <br/>
            <small class="form-text text-muted ">David Carvajal Ferrel</small>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link" href="./realizarSolicitud.php">Realizar solicitud</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="./consultarSolicitud.php">Consultar estado de solicitud</a>
            </li>
            <li class="nav-item" style="justify-content: flex-end;">
            <a class="nav-link" href="./contacto.php">Contacto</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <form>
        <fieldset>
            <legend>Ingrese los datos de su solicitud</legend>
            <div class="form-group">
                <label class="col-form-label mt-4" for="inputDefault">Nombre demandante:</label>
                <input type="text" class="form-control" placeholder="Nombre demandante" id="inputDefault">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="inputDefault">Nombre abogado demandante:</label>
                <input type="text" class="form-control" placeholder="Nombre abogado demandante" id="inputDefault">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="inputDefault">Nombre demandado:</label>
                <input type="text" class="form-control" placeholder="Nombre demandado" id="inputDefault">
            </div>
            <div class="form-group">
                <label class="col-form-label mt-4" for="inputDefault">Nombre abogado demandado:</label>
                <input type="text" class="form-control" placeholder="Nombre abogado demandado" id="inputDefault">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label mt-4">Correo electrónico:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com">
            </div>
            <div class="form-group">
                <label for="exampleInputTelefono" class="form-label mt-4">Teléfono:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+569912345678">
            </div>
            <div class="form-group">
                <label for="exampleSelect1" class="form-label mt-4">Tipo de notificación</label>
                <select class="form-select" id="exampleSelect1">
                    <option>Rut</option>
                    <option>Certificada</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleTextarea" class="form-label mt-4">Descripción de solicitud</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br/>
            <small id="emailHelp" class="form-text text-muted">Ninguno de los siguientes datos será compartido.</small>
        </fieldset>
</form>

</body>
</html>