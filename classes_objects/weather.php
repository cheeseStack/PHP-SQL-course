<?php 

class Weather {

    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celciusToFahrenheit($c){
       $f = 1.8 * $c + 32;
        return "$c Celcius is $f in Fahrenheit";
    }

    public static function determineTempCondition($f){
        if($f < 40) {
            return self::$tempConditions[0];; // cold;
        } else if($f < 70) {
            return self::$tempConditions[1];; // mild;
        } else {
            return self::$tempConditions[2];; // warm
        }
    }
}

// creating a class e.g:
// $weatherInstance = new Weather();
// print_r($weatherInstance->tempConditions);

print_r(Weather::$tempConditions);
echo '<br>';
echo Weather::celciusToFahrenheit(40) . '<br>';
echo Weather::determineTempCondition(20) . '<br>';

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>