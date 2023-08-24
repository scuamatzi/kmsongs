<?php
    $uri=json_decode(file_get_contents("uri.json"), true);
    $response=json_decode(file_get_contents($uri["uri"]), true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <meta name="robots" content="nofollow">
    <title>Temas kusimarka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container ">
        <h1 class="text-center">Lista de canciones KM</h1>
        <div class="accordion" id="accordionkm">

            <?php
                $th_col1="#";
                $th_col2="Canción";
                $th_col3="País de Origen";
                $th_col4="Autor";
                $th_col5="Ritmo";
                $andino_count=1;
                $mexicano_count=1;
                $fiesta_count=1;
            ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                        <b>Temas Peruanos</b>
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionkm">
                    <div class="accordion-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col"> <? echo $th_col1; ?> </th>
                                <th scope="col"><? echo $th_col2; ?></th>
                                <th scope="col"><? echo $th_col3; ?></th>
                                <th scope="col"><? echo $th_col4; ?></th>
                                <th scope="col"><? echo $th_col5; ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $peruano_count=1;
                            foreach($response as $song){
                                if($song["section"]=="peruano"){
                            ?>
                            <tr>
                                <th scope="row"> <? echo $peruano_count; ?> </th>
                                <td> <? echo $song["song_name"]; ?> </td>
                                <td> <? echo $song["country"]; ?> </td>
                                <td> <? echo $song["author"]; ?> </td>
                                <td> <? echo $song["rhythm"]; ?></td>
                            </tr>
                            <?php
                                    $peruano_count++;
                                } //ends if
                            }  //foreach ends
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        <b> Temas Andinos</b>
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionkm">
                    <div class="accordion-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Canción</th>
                                <th scope="col">Pais origen</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Ritmo</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Charanguito</td>
                                <td>Bolivia</td>
                                <td>-</td>
                                <td>Huayno</td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        <b>Temas Mexicanos</b>
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionkm">
                    <div class="accordion-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Canción</th>
                                <th scope="col">Pais origen</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Ritmo</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>El final de nuestra historia</td>
                                <td>México</td>
                                <td>-</td>
                                <td>Cumbia sonidera</td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        <b>Temas para fiestas</b>
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionkm">
                    <div class="accordion-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Canción</th>
                                <th scope="col">Pais origen</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Ritmo</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>El final de nuestra historia</td>
                                <td>México</td>
                                <td>-</td>
                                <td>Cumbia sonidera</td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <?php
            ?>
        </div>

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>