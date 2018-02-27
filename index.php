<!DOCTYPE html>
<html lang="en">
<head>
    <title>SongNow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/rikmms/progress-bar-4-axios/0a3acf92/dist/index.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>



</head>
<body>

<nav class="navbar navbar-light bg-faded bg-primary">
    <span id="draggable" class="oi oi-magnifying-glass" type="button" data-toggle="collapse"
          data-target="#collapseBusqueda" aria-expanded="false" aria-controls="collapseBusqueda" ></span>
    <div class="collapse" id="collapseBusqueda">
        <form class="form-inline my-2 my-lg-0">
            <input id="tags" class="collapse form-group" type="search" placeholder="Buscar" aria-label="Search">
        </form>
    </div>

    <a class="navbar-brand mx-auto" href="index.php">
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
    <div class="tab-pane active text-secundary" id="home" role="tabpanel">
        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/402893568&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/402158658&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/396615804&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/382286732&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/392732244&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/371785694&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/329863202&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/373131704&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/341546259&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
    </div>
    <div class="tab-pane" id="resultado" role="tabpanel"></div>
    <div class="tab-pane" id="resultado2" role="tabpanel"></div>
    <div class="tab-pane" id="resultado3" role="tabpanel"></div>


<!-- The Modal -->

    <div id="modal-custom" data-iziModal-group="grupo1">
        <button data-iziModal-close class="icon-close"><span class="oi oi-power-standby"></span></button>
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