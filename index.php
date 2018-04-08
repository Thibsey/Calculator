<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calulator</title>

    <script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Calculator</h1>
        <div id="container">
            <div id="result">    
                <div id="screen"></div>
            </div>
            <div id="shell">
                <div id="numbers">
                    <button class="button 1 btn btn-dark">1</button>
                    <button class="button 2 btn btn-dark">2</button>
                    <button class="button 3 btn btn-dark">3</button>
                    <button class="button 4 btn btn-dark">4</button>
                    <button class="button 5 btn btn-dark">5</button>
                    <button class="button 6 btn btn-dark">6</button>
                    <button class="button 7 btn btn-dark">7</button>
                    <button class="button 8 btn btn-dark">8</button>
                    <button class="button 9 btn btn-dark">9</button>
                    <button class="button zero btn btn-dark">0</button>
                    <button class="button dot btn btn-dark">.</button>
                </div>
                <div id="operators">
                    <button class="button equal btn btn-secondary">=</button>
                    <button class="button clear btn btn-danger">C</button>
                    <button class="button plus btn btn-warning">+</button>
                    <button class="button minus btn btn-warning">-</button>
                    <button class="button mul btn btn-warning">*</button>
                    <button class="button div btn btn-warning">/</button>
                </div>
            </div>
        </div>
    <br>
</body>
</html>