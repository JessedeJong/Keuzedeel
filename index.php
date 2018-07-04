<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include 'components/core/head.php'; ?>
</head>
<body>
    <header>
        <img class="logo left" src="https://www.ma-web.nl/static/vector/Logo_blok.svg" title="Mediacollege" alt="MA Logo">
    </header>
<div class="spacer"></div>
<div class="col-md-12">
<br>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="overview.php" title="Beheerpagina">Beheerpagina</a>
        </li>
    </ul>
    <form method="post" action="overview.php">
        <h1 class="purple">Intake formulier Mediacollege Amsterdam</h1>
        <p class="purple">
            Dit is het online intake formulier van het Mediacollege Amsterdam. Dit formulier behoord te worden
            ingevuld door de bevoegde decaan of mentor van de middelbare school/instelling.
        </p>
        <div>
            <div class="jumbotron">
                <div class="col-md-12">
                    <h4>Algemene informatie leerling</h4>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Naam</span>
                        </div>
                        <input type="text" class="form-control custom-border" name="firstname" title="Voornaam">
                        <input type="text" class="form-control custom-border" name="lastname" title="Achternaam">
                    </div>

                    <div class="input-group spacer">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Geboortedatum</span>
                        </div>
                        <input type="text" class="form-control custom-border" name="birthdate" title="Geboortedatum">
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <br>
        <div class="col-md-12">
            <h4>Welke opleiding volgt de leerling?</h4>
            <div class="accordion" id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link purple" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                VMBO
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <?php include 'components/vmbo-content.php'?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link purple" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                HAVO / VWO
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <?php include 'components/havo-vwo-content.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link purple collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                MBO
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <?php include 'components/mbo-content.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <br>
        <h4>Wat is uw indruk over de leerling op school</h4>
        <h6>(Goed, voldoende, zwak, onvoldoende)</h6>
        <div class="spacer"></div>
            <?php include 'components/werkhouding.php'; ?>
        <div class="spacer"></div>
            <?php include 'components/instelling.php'; ?>
        <div class="spacer"></div>
            <?php include 'components/vaardigheden.php'; ?>
        <div class="spacer"></div>
            <?php include 'components/extra-notes.php' ?>
        <div class="spacer"></div>
        <br>
        <h4>Bijzonderheden</h4>
        <h6>(i.v.m. de mogelijkheden tot extra begeleiding)</h6>
        <div class="spacer"></div>
            <?php include 'components/extra-guidance.php'; ?>
        <div class="spacer"></div>
        <br>
        <h4>Gegevens mentor/decaan</h4>
            <?php include 'components/mentor-info.php'; ?>
        <div class="spacer"></div>
        <div class="col-md-6">
            <input type="submit" class="btn btn-purple form-submit" value="Versturen">
        </div>
    </form>
</div>
<footer>
    <?php include 'components/core/footer.php'; ?>
</footer>
</body>
</html>
