<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php document</title>
</head>

<body>
    <?php
    $car = "bmw";
    echo "My favorite car is a " . $car;
    /*
    roknuzzaman
     roknuZzaman
     roknu_zzaman
     */
    ## // variables declear and var_dump check 
    $age = 20.5;
    $name = 'rased';
    $age1 = 30;
    $name = 'bulbul';
    var_dump($age1);
    var_dump($age);
    var_dump($name);

    // class of php
    class Phone
    {
        var $device;
        function mobileDevice($number)
        {
            global $device;
            $device = $number;
            echo "this is a $device <br>";
        }
    }
    ## // class define
    $xiaomi = new Phone;
    $xiaomi->mobileDevice(" redmi note 10 lite");
    $Realmi = new Phone;
    $Realmi->mobileDevice(" c 5 i");
    $akhi = 8;
    $badol = 9;
    // echo $akhi + $badol;
    
    $set = str_replace('badol', 'akhi', 'he is siter in badol');
    // var_dump($set);
    
    $x = 6;
    $y = 9;
    ## // const variable decaliter
    define('phones', [
        'xiaomi',
        'nokia',
        'oneplus'
    ]);
    echo (phones[2]);
    // var_dump(phones);
    ## // php function on const variable
    function test()
    {
        echo (phones[1]);
    }
    ;
    test();
    echo $x + $y . '<br>';

    ##// php comparison operator
    // $xx = 50;
    // $yy = 50;
    // var_dump($xx = $yy); // true;
    // var_dump($xx = $yy); // false;
    // var_dump($xx != $yy); // false;
    // var_dump($xx !== $yy); // true;
    // var_dump($xx < $yy); // false; 
    // var_dump($xx > $yy); // true;
    // $xx = 500;
    // $yy = 50;
    // echo($xx > $yy);    
    
    ## // Php if else statements
    
    $date = date('H');
    // if ($date == 20) {
    //     echo "It's twenty";
    // }else{
    //     echo "It's not twenty"; // true;
    // }
    // if ($date != 20) {
    //     echo "It's twenty"; // true;
    // } else {
    //     echo "It's not twenty";
    // }
    // if ($date < 20) {
    //     echo "It's twenty"; // true;
    // } else {
    //     echo "It's not twenty";
    // }
    // if ($date > 20) {
    //     echo "It's twenty"; 
    // } else {
    //     echo "It's not twenty"; // false;
    // }

    ?>
</body>


</html>