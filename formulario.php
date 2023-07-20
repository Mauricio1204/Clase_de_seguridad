<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>formulario</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 my- mx-auto">
                <form action="hack.php" method="POST">
                    <div class="from-group mb-3">
                        <input  type="email" class="from-control" placeholder="correo electronico"  name="email">
                    </div>
                    <div class="from-group mb-3" >
                        <input  type="password" class="from-control" placeholder="contraseña
                        " name="password" >
                    </div>
        <button clas="btn btn-primary form-control"> Iinisiar  secion</button>
                </form>




            </div>
        </div>
    </div>
    
</body>
</html>