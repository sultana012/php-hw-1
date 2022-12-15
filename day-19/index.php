<!DOCTYPE html>
<html>
<body>

<?php

    class won {
    public $Name = "Sultana akter <br>";
    public $gender ="Female <br>";
    public $color = "Red <br>";
    public $food = "Biriyani <br>";
   

        public function getMyInformation(){
            return "Name : " . $this->Name . "Gender : " . $this->gender ." Favourite-color : ". $this->color . "Favourite-food : " . $this->food;
        }
    }
    $won1 = new won();
    echo $won1->getMyInformation();
?>

</body>
</html> 