<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');


        body {
            background-color: #eaf4ff;
        }

        .form-box {
            margin: 0 auto;
            width: 455px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            font-family: 'Space Mono', monospace;

        }

        p.result {
            font-size: 43px;
            margin: 0px 0px 15px 0px;
            padding: 7px;
            font-weight: bold;
            max-width: 333px !important;
            overflow-x: auto;
            white-space: nowrap;
            background-color: #eaf4ff;
            color: black;
            border: 2px solid #022247;
        }


        .form-body {
            border: 2px solid #022247;
            background-color: #032F62;
            padding: 50px;
            display: flex;
            min-width: 333px;
            flex-direction: column;
        }

        .selector {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .operador {
            margin-top: 10px;
            margin-bottom: 10px;
            border: 0px solid transparent;
            width: 50px;
            -webkit-appearance: none;
            -moz-appearance: none;
            text-indent: 1px;
            height: 50px;
            cursor: pointer;
            font-size: 30px !important;
            text-align: center;
            border-radius: 50%;
            font-family: 'Roboto Slab', serif !important;
        }

        .operador:hover {
            outline: 2px solid #8ec3ff !important;
        }

        .operador:focus {
            outline: none;
        }

        label {
            font-size: 31px;
        }

        form>h1 {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }

        #calc-icon {
            margin-left: 10px;
            fill: white;
        }

        input {
            border: 0px solid transparent;
            font-size: 18px;
            padding: 10px 7px 10px 7px;
            font-family: 'Roboto Slab', serif !important;
        }

        input:focus {
            outline: none;
        }

        input:hover {
            outline: 2px solid #8ec3ff !important;
        }

        .input-bottom {
            margin-bottom: 20px;
        }

        button {
            padding: 10px;
            font-size: 18px;
            font-family: 'Roboto Slab', serif !important;
            cursor: pointer;
            background-color: #8ec3ff;
            border: none;
        }

        .links-box {
            display: flex;
            align-items: center;
            justify-content: right;
            min-width: 433px;
            margin-bottom: 5px;
        }

        .links-box>a {
            color: #022247;
            text-transform: uppercase;
        }
    </style>

    <div class="form-box">

        <div class="links-box">
            <a target="_blank" style="margin-right: 10px;" href="https://googlee.com">Documentação</a>
            <a target="_blank" href="https://github.com/carloscdf">Github</a>
        </div>


        <form class="form-body" method="post">

            <h1>CALCULADORA <svg id="calc-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                    viewBox="0 0 24 24">
                    <path
                        d="M19 0h-14c-2.762 0-5 2.239-5 5v14c0 2.761 2.238 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm3 7h-3v2h3v6h-6v2h6v2c0 1.654-1.346 3-3 3h-14c-1.654 0-3-1.346-3-3v-2h2v-2h-2v-6h8v-2h-8v-2c0-1.654 1.346-3 3-3h14c1.654 0 3 1.346 3 3v2zm-8 3c0 .552-.447 1-1 1s-1-.448-1-1v-4c0-.552.447-1 1-1s1 .448 1 1v4zm3 0c0 .552-.447 1-1 1s-1-.448-1-1v-4c0-.552.447-1 1-1s1 .448 1 1v4zm-9 8c0 .552-.447 1-1 1s-1-.448-1-1v-4c0-.552.447-1 1-1s1 .448 1 1v4zm3 0c0 .552-.447 1-1 1s-1-.448-1-1v-4c0-.552.447-1 1-1s1 .448 1 1v4zm3 0c0 .552-.447 1-1 1s-1-.448-1-1v-4c0-.552.447-1 1-1s1 .448 1 1v4z" />
                </svg></h1>


            <div class="result-box">
                <?php

                if (isset($_POST["enviar"])) {

                    /*Variáveis*/

                    $n1 = $_POST["n1"];
                    $n2 = $_POST["n2"];
                    $operador = $_POST["operador"];
                    $resultado = 0;
                    $null = 0;
                    $zero = "Erro";

                    /*Essa sequência de códigos substitui a vírgula pelo ponto nos números*/

                    $n1 = str_replace(",", ".", $n1);
                    $n2 = str_replace(",", ".", $n2);

                    /*Realização do primeiro operador, adição*/

                    if ($operador == "+") {
                        if ($n1 == false && $n2 == false) {
                            echo "<p class='result'>" . $null . "</p>";
                        } else if ($n2 == false) {
                            $resultado = $n1 + 0;
                            echo "<p class='result'>" . $resultado . "</p>";
                        } else if ($n1 == false) {
                            $resultado = 0 + $n2;
                            echo "<p class='result'>" . $resultado . "</p>";
                        } else {
                            $resultado = $n1 + $n2;
                            echo "<p class='result'>" . $resultado . "</p>";
                        }

                        /*Realização do segundo operador, subtração*/

                    } else if ($operador == "-") {
                        if ($n1 == false && $n2 == false) {
                            echo "<p class='result'>" . $null . "</p>";
                        } else if ($n2 == false) {
                            $resultado = $n1 - 0;
                            echo "<p class='result'>" . $resultado . "</p>";
                        } else if ($n1 == false) {
                            $resultado = 0 - $n2;
                            echo "<p class='result'>" . $resultado . "</p>";
                        } else {
                            $resultado = $n1 - $n2;
                            echo "<p class='result'>" . $resultado . "</p>";
                        }
                    }

                    /*Realização do terceiro operador, divisão*/else if ($operador == "/") {
                        if ($n2 == 0) {
                            echo "<p class='result'>" . $zero . "</p>";
                        } else if ($n1 == false && $n2 == false) {
                            echo "<p class='result'>" . $null . "</p>";
                        } else if ($n2 == false) {
                            $resultado = $n1 / 0;
                            echo "<p class='result'>" . $zero . "</p>";
                        } else if ($n1 == false) {
                            $resultado = 0 / $n2;
                            echo "<p class='result'>" . $resultado . "</p>";
                        } else {
                            $resultado = $n1 / $n2;
                            echo "<p class='result'>" . $resultado . "</p>";
                        }

                        /*Realização do quarto operador, multiplicação*/

                    } else if ($operador == "*") {
                        if ($n1 == false && $n2 == false) {
                            echo "<p class='result'>" . $null . "</p>";
                        } else if ($n2 == false) {
                            $resultado = $n1 * 0;
                            echo "<p class='result'>" . $resultado . "</p>";
                        } else if ($n1 == false) {
                            $resultado = 0 * $n2;
                            echo "<p class='result'>" . $resultado . "</p>";
                        } else {
                            $resultado = $n1 * $n2;

                            echo "<p class='result'>" . $resultado . "</p>";
                        }

                    }

                } ?>

            </div>

            <div class="form" style="display: flex !important;
            flex-direction: column;">
                <input placeholder="Digite o valor 1:" type="text" name="n1" required />
                <div class="selector">
                    <select class="operador" name="operador">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="/">/</option>
                        <option value="*">x</option>
                    </select>
                </div>
                <input placeholder="Digite o valor 2:" class="input-bottom" type="text" name="n2" required />
                <button type="submit" name="enviar">Calcular</button>

            </div>

            <div class="result-box">


            </div>
        </form>

    </div>




    </div>


</body>

</html>