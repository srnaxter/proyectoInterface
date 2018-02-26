<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<nav class="navbar navbar-light bg-faded bg-primary">
    <a class="navbar-brand mx-auto" href="#">
        <img src="http://generourbano.com/wp-content/themes/app/static/img/logo.png" width="25" height="25" alt="">
    </a>
    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Registrar
    </button>

</nav>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">NUEVO</a>
    </li>
    <li onclick="datos1()" class="nav-item" >
        <a class="nav-link" data-toggle="tab" href="#resultado" role="tab">TOP</a>
    </li>
    <li onclick="datos2()" class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#resultado2" role="tab">ARTISTAS</a>
    </li>
    <li onclick="datos3()" class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#resultado3" role="tab">ÁLBUMES</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active text-secundary" id="home" role="tabpanel"></div>
    <div class="tab-pane" id="resultado" role="tabpanel"></div>

    <div class="tab-pane" id="resultado2" role="tabpanel"></div>
    <div class="tab-pane" id="resultado3" role="tabpanel"></div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Formulario de registro</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox">
                                        <a href="http://telegra.ph/Terminos-y-Condiciones-02-23">Terminos y Condiciones</a>

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

</body>
</html>