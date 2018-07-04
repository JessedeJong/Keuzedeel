<!DOCTYPE html>
<html lang="nl">
    <head>
        <?php include 'components/core/head.php'; ?>
    </head>
<body>
    <header>
        <img class="logo left" src="https://www.ma-web.nl/static/vector/Logo_blok.svg" title="Mediacollege" alt="MA">
    </header>
    <div class="spacer"></div>
    <div class="container">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="index.php" title="Formulier">Formulier</a>
            </li>
        </ul>
        <div class="col-md-12">
            <select class="custom-select filter-dropdown" id="filter-dropdown" title="Filter">
                    <option selected>Filter opleiding</option>
                    <option value="1">Mediadevelopment</option>
                    <option value="1">Gamedevelopment</option>
                    <option value="1">Mediavormgeving</option>
                    <option value="1">Grafisch vormgever</option>
            </select>
            <br>
            <br>
            <br>
            <table class="table table-scroll">
                <thead class="bckgrnd-purple">
                    <tr>
                        <th scope="col"><strong>ID</strong></th>
                        <th scope="col"><strong>Naam</strong></th>
                        <th scope="col"><strong>Geboortedatum</strong></th>
                        <th scope="col"><strong>Zorgcoördinator</strong></th>
                        <th scope="col"><strong>Decaan</strong></th>
                        <th scope="col"><strong>Mentor</strong></th>
                        <th scope="col"><strong>Extra informatie</strong></th>
                        <th scope="col"><strong>Goedgekeurd door student</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Jesse de Jong</td>
                        <td>02-04-1999</td>
                        <td>Naam zorgcoördinator</td>
                        <td>Naam decaan</td>
                        <td>
                            <select class="custom-select mentor-dropdown custom-border" id="mentor-dropdown" title="Mentor">
                                <option selected>Mentor</option>
                                <option value="1">Ed Schenk</option>
                                <option value="2">Theo den Blanken</option>
                                <option value="3">Joey Schmitz</option>
                                <option value="4">Rosmerta Goei</option>
                                <option value="5">Simon Hitipeuw</option>
                                <option value="6">Erwin Henraat</option>
                            </select>
                        </td>
                        <td><button type="button" class="btn btn-purple" data-toggle="modal" data-target=".student-info-modal">Informatie</button></td>
                        <td><button type="button" class="btn btn-success" disabled>JA</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php include('components/core/modal.php') ?>
</body>
</html>