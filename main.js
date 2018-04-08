$(document).ready(function(){
    var calculate = "";
    $('#screen').html(calculate);

    $('.1').click(function() {
        calculate += 1;
        $('#screen').html(calculate);
    });

    $('.2').click(function() {
        calculate += 2;
        $('#screen').html(calculate);
    });

    $('.3').click(function() {
        calculate += 3;
        $('#screen').html(calculate);
    });

    $('.4').click(function() {
        calculate += 4;
        $('#screen').html(calculate);
    });

    $('.5').click(function() {
        calculate += 5;
        $('#screen').html(calculate);
    });

    $('.6').click(function() {
        calculate += 6;
        $('#screen').html(calculate);
    });

    $('.7').click(function() {
        calculate += 7;
        $('#screen').html(calculate);
    });

    $('.8').click(function() {
        calculate += 8;
        $('#screen').html(calculate);
    });

    $('.9').click(function() {
        calculate += 9;
        $('#screen').html(calculate);
    });

    $('.zero').click(function() {
        calculate += 0;
        $('#screen').html(calculate);
    });

    $('.dot').click(function () {
        if (calculate[calculate.length - 1] == ".") {} else {
            calculate += ".";
            $('#screen').html(calculate);
        }
    });

    $('.plus').click(function () {
        if (calculate[calculate.length - 1] == "+" ||
            calculate[calculate.length - 1] == "-" ||
            calculate[calculate.length - 1] == "*" ||
            calculate[calculate.length - 1] == "/" ||
            calculate[calculate.length - 1] == ".") {} else {
            calculate += '+';
            $('#screen').html(calculate);
        }
    });

    $('.minus').click(function() {
        if (calculate[calculate.length - 1] == "+" ||
            calculate[calculate.length - 1] == "-" || 
            calculate[calculate.length - 1] == "*" || 
            calculate[calculate.length - 1] == "/" || 
            calculate[calculate.length - 1] == ".") {}
        else {
            calculate += '-';
            $('#screen').html(calculate);
        }
    });
    $('.mul').click(function() {
        if (calculate[calculate.length - 1] == "+" ||
            calculate[calculate.length - 1] == "-" || 
            calculate[calculate.length - 1] == "*" || 
            calculate[calculate.length - 1] == "/" || 
            calculate[calculate.length - 1] == ".") {}
        else {
            calculate += '*';
            $('#screen').html(calculate);
        }
    });
    $('.div').click(function() {
        if (calculate[calculate.length - 1] == "+" ||
            calculate[calculate.length - 1] == "-" || 
            calculate[calculate.length - 1] == "*" || 
            calculate[calculate.length - 1] == "/" || 
            calculate[calculate.length - 1] == ".") {}
        else {
            calculate += '/';
            $('#screen').html(calculate);
        }
    });

    $('.clear').click(function() {
        calculate = "";
        $('#screen').html(calculate);
    });

    $('.equal').click(function(){ 
        calculate = eval(calculate);
        $('#screen').html(calculate);
    });
});