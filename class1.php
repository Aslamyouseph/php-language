<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class_objects</title>
</head>
<body>
    <?php
    class employee
    {
        public $name;
        public $salary;
        public $age;

        public function details()
        {
            echo "name of the employee is : ".$this->name;
            echo "<br>";
            echo "Age of the employee is : ".$this->age;
            echo "<br>";
            echo "Salary of the employee is : ".$this->salary;
            echo "<br>";

        }
    }

    $emp=new employee();
    $emp -> name ="aslam";
    $emp ->age ="20";
    $emp -> salary=10000;

    $emp ->details();
    
    ?>
</body>
</html>