<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class2</title>
</head>
<body>
    <?php
    class student
    {
        public $name;
        public $std;

        public function __construct($name,$std) 
        {
            $this->name=$name;
            $this->std=$std;
        }
        public function details()
        {
            echo "name of the student is : ".$this->name;
            echo "<br>";
            echo "class of the student is ".$this->std;

        }
    }
    $stu=new student("Aslam",10);
    

    $stu->details()
    ?>
</body>
</html>