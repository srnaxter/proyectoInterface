<!DOCTYPE html>
<html lang="en">
<head>
    <title>SongNow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
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
    <button class="trigger-custom bg-primary" data-izimodal-open="#modal-custom">Register</button>

</nav>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">NUEVO</a>

    </li>
    <li onclick="datos1()" class="nav-item">
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

    <div id="modal-custom" data-iziModal-group="grupo1">
        <button data-iziModal-close class="icon-close">x</button>
        <header>
            <a href="" id="signin">Sign in</a>
            <a href="" class="active">New Account</a>
        </header>
        <section class="hide">
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <footer>
                <button data-iziModal-close>Cancel</button>
                <button class="submit">Log in</button>
            </footer>
        </section>
        <section class="ui-widget">
            <input type="text" id="tags" placeholder="Username">
            <input type="text" placeholder="Email">
            <input type="password" placeholder="Password">
            <label for="check"><input type="checkbox" name="checkbox" id="check" value="1"> I agree to the <a
                        href="http://telegra.ph/Terminos-y-Condiciones-02-23">Terms</a>.</label>
            <footer>
                <button data-iziModal-close>Cancel</button>
                <button class="submit">Create Account</button>
            </footer>
        </section>
    </div>


</body>
</html>