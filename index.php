<?php

    $letter_lower = [ 'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z' ];

    $letter_upper = [ 'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z' ];

    $number = [ '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' ];

    $symbol = [ '!', '?', '&', '%', '$', '<', '>', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '=' ];

    $for_generator = array_merge($letter_lower, $letter_upper, $number, $symbol);

    generatorPsw($_GET['lunghezza']);
    
    function generatorPsw($lunghezza){
        for ($i = 0; $i <= $lunghezza; $i++) {
            var_dump('test');
    };
};

    //var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>PHP Strong Password Generator</title>

    <style>
        body{
            background-color: #39f;
            height: 100vh;
            width: 100%;
            color: #000;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center flex-column">

    <div class="container">

        <div class="row mb-5">

            <div class="col text-center">
                <h1 class="fs-1 fw-bold text-secondary">Strong Password Generator</h1>
                <h2 class="fs-2 fw-semibold text-light">Genera una password sicura</h2>
            </div>
        </div>

        <div class="row">

        <div class="col">

        <div class="alert alert-info  fw-bold" role="alert">
                    Scegliere una password con un minimo di 8 ed un massimo di 32 caratteri
                </div>

                <div class="alert alert-danger  fw-bold" role="alert">
                    A simple danger alert—check it out!
                </div>

            </div>
        </div>

        <form action="./index.php" method="get">
            <div class="container-fluid bg-white rounded px-3 py-4">
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-7">
                                <h5 class="fw-bolder">Lunghezza password:</h5>
                            </div>
                            <div class="col-5">
                            <div class="">
                                    <input type="number" class="form-control w-50" name="lunghezza" id="exampleFormControlInput1" min="8" max="32">
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-start mb-5">
                            <div class="col-7">
                                <h5 class=" fw-bolder">Consenti ripetizioni di uno o pi&ugrave; caratteri:</h5>
                            </div>
                            <div class="col-5 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reapet" id="flexRadioDefault1" checked>
                                    <label class="form-check-label fw-bolder" for="flexRadioDefault1">
                                        S&igrave;
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reapet" id="flexRadioDefault2">
                                    <label class="form-check-label fw-bolder" for="flexRadioDefault2">
                                        No
                                    </label>
                                </div>
                            </div>

                            <div class="offset-7 col-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""            id="flexCheckDefault">
                                    <label class="form-check-label fw-bolder" for="flexCheckDefault">
                                        Lettere
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""            id="flexCheckChecked">
                                    <label class="form-check-label fw-bolder" for="flexCheckChecked">
                                        Numeri
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""            id="flexCheckChecked">
                                    <label class="form-check-label fw-bolder" for="flexCheckChecked">
                                        Simboli
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary ms-3 me-2">Invia</button>
                                <button type="reset" class="btn btn-secondary">Anulla</button>

                            </div>
                        </div>

    </div>
        </form>
    </div>
</body>
</html>