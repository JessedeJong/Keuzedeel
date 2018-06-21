<!DOCTYPE html>
<html lang="en">
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
    <form>
        <div data-spy="scroll" data-target="#navbar" data-offset="0">
            <h4>Algemene informatie leerling</h4>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Voor en achternaam</span>
                </div>
                <input type="text" class="form-control custom-border" name="firstname">
                <input type="text" class="form-control custom-border" name="lastname">
            </div>

            <div class="input-group spacer">
                <div class="input-group-prepend">
                    <span class="input-group-text">Geboortedatum</span>
                </div>
                <input type="text" class="form-control custom-border" name="birthdate">
            </div>
            <h4></h4>
        </div>
        <div class="spacer"></div>
        <br>
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
        <div class="spacer"></div>
        <br>
        <h4>Wat is uw indruk over de leerling op school</h4>
        <h6>(Goed, voldoende, zwak, onvoldoende)</h6>
        <div class="spacer"></div>
        <?php include 'components/werkhouding.php'; ?>
        <div class="spacer"></div>
        <?php include 'components/instelling.php'; ?>
        <div class="spacer"></div>
    </form>
</div>
<footer>
    <?php include 'components/core/footer.php'; ?>
</footer>
</body>
</html>
