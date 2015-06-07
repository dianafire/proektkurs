<!DOCTYPE html>

<html>
<head>
    <meta charset='UTF-8' />
    <title>Person</title>
</head>

<body>

    <?php

        require_once (dirname(__FILE__).'/Person.php');

        $gender="мъж";

        $ivan = new Person("Иван",26,"ivan@abv.bg");
        $valid=$ivan->getValid();

        $ivan->sayHi($valid);
        $ivan->livingPlace($valid);
        $ivan->sayGender($gender,$valid);
        $ivan->getLifeRemain($valid);
        $ivan->sayLifeRemain($valid);



        $mile = new Person("Миле",35,"mile@gmail.com");
        $valid=$mile->getValid();

        $mile->sayHi($valid);
        $mile->livingPlace($valid);
        $mile->sayGender($gender,$valid);
        $mile->getLifeRemain($valid);
        $mile->sayLifeRemain($valid);




        $gender="жена";
        $lili = new Person("Лили",20,"lili@abv.bg");
        $valid=$lili->getValid();

        $lili->sayHi($valid);
        $lili->livingPlace($valid);
        $lili->sayGender($gender,$valid);
        $lili->getLifeRemain($valid);
        $lili->sayLifeRemain($valid);


        $lili->setName("Лиляна");
        $lili->setEmail("liliqna@abv.bg");
        $lili->setAge(28);
        $valid=$lili->getValid();
        $lili->sayHi($valid);


?>

</body>
</html>