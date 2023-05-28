<?php

// ------------------------------- 1 -----------------------------
    include_once('./CMS/Permission.php');
    include_once('./CMS/Role.php');
    include_once('./CMS/Departments/Department.php');
    include_once('./CMS/Employees/Employee.php');
    include_once('./CMS/AccessController.php');

    $departmentIntelligence = new Department('Разведка');

    $permission1  = new Permission(1, 'Секретики');
    $permission2  = new Permission(2, 'Каптерка');
    $permissionToCheck  = new Permission(3, 'Центр управления швабрами');  

    $cleaner = new Role('Уборщик',  [$permission1, $permission2]); 

    $employee1 = new Employee('Индржих', 'przemyslov@bogema.cz', '12345678', $departmentIntelligence, $cleaner);

    $accessController = new AccessControl([$cleaner],[$permissionToCheck]); 


    $accessController->showResults($employee1, $permission1);

    // ------------------------------- 2 -----------------------------
    // require_once('./Vechicles/Childs/Car.php');
    
    //  $car = new Car('da','ra', 'not full', 1, 3, ['apples','tools','medkit']);
    //  $car->setFuel(35.32);
    //  $car->startTheEngine();
    //  echo $car->showInfoOnPannelByType('ENGINE');
    //  echo $car->showInfoOnPannelByType('FUEL');

?> 



