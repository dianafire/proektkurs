<!DOCTYPE html>

<html>
<head>
    <meta charset='UTF-8' />
    <title>Employee</title>
</head>

<body>

    <?php

        require_once (dirname(__FILE__).'/Employee.php');
        require_once (dirname(__FILE__).'/Policeman.php');
        require_once (dirname(__FILE__).'/Doctor.php');

        $policeman = new Policeman(100,1000,"майор");

        $policeman->sayRank();
        $policeman->sayHoursSalary();
        $paid=$policeman->getPaid();
        $policeman->sayPaid($paid);

        $hours=100;
        $salary=1600;
        $rank="полковник";

        $policeman->setHours($hours);
        $policeman->setSalary($salary);
        $policeman->setRank($rank);
        $policeman->sayRank();
        $policeman->sayHoursSalary();
        $paid=$policeman->getPaid();
        $policeman->sayPaid($paid);

        $doctor = new Doctor(150,3000);

        $dayShiftMonth=5;
        $nightShiftMonth=4;
        $doctor->sayHi();
        $doctor->sayHoursSalary();
        $paid=$doctor->getPaid();
        $doctor->sayPaid($paid);
        $doctor->setDays($dayShiftMonth);
        $doctor->setNights($nightShiftMonth);
        $doctor->sayShifts();




    ?>

</body>
</html>