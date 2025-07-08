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
    echo "My favorite car is a " . $car . "<br>" . "<br>";



    ## // variables declear and var_dump check 
    
    // $age = 20.5;
    // $name = 'rased';
    // $age1 = 30;
    // $name = 'bulbul';
    // ## // class define
    // $xiaomi = new Phone;
    // // $xiaomi->mobileDevice(" redmi note 10 lite");
    // $Realmi = new Phone;
    // $Realmi->mobileDevice(" c 5 i");
    // $akhi = 8;
    // $badol = 9;
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

    // echo (phones[2]);
    // var_dump(phones);
    // echo $x + $y . '<br>';
    


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
    

    ## switch in php
    
    // switch ("red") {
    //     case 'green':
    //         echo 'my favorite color is red';
    //         break;
    //     case 'blue':
    //         echo 'my favorite color is also red' . '<br >';
    //         break;
    //     default:
    //         echo 'I have not favorite color' . '<br >';
    //         break;
    // }
    

    ###// Loop in php
    
    // while Loop
    // $i = 0;
    // while ($i <= 10) {
    //     // echo "The number is: $i <br>";
    //     $i++;
    // }
    
    // for Loop
    // for ($i = 1; $i <= 50; $i++) {
    //     echo  $i. ":- Sumaiya I am Sorry Tumi Sobtheke Valo Student"."<br>";
    // }
    

    ### // Function in php
    function greetUser($name, $age)
    {
        echo "hello $name, you are $age years old.<br>";
    }

    // greetUser('Roknuzzaman', 25);
    

    // Function with return value
    function addNumbers($a, $b)
    {
        return $a + $b;
    }

    $result = addNumbers(5, 10);
    // echo "The sum is: $result<br>";
    
    ## Array in php
    
    // index array
    $fruits = array("apple", "banana", "orange");
    echo "My favorite fruit is: " . $fruits[0] . "<br>";

    // Associative array
    $user = [
        "name" => "Roknuzzaman",
        "age" => 25,
        "email" => "rokon@gmail.com"
    ];
    // echo $user["name"];
    
    foreach ($user as $key => $value) {
        echo "$key: $value" . "<br>";
    }

    // Multidimensional array
    $students = [
        [
            "name" => "Roknuzzaman",
            "age" => 25,
            "email" => "rokon@gmail.com"
        ],
        [
            "name" => "sajib",
            "age" => 25,
            "email" => "sajib@gmail.com"
        ]
    ];
    foreach ($students as $student) {
        echo "Name: " . $student["name"] . ", Marks: " . $student["email"] . "<br>";
    }

    ?>
</body>

</html>