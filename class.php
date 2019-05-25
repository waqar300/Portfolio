
<?php

class radio{
    public $volume;
    public $tune;

    public function volumeUp(){
        $this->volume++;
    }
    public function volumeDown(){
        $this->volume--;
    }
    public function __construct($v, $t){
        $this->volume = $v;
        $this->tune = $t;
        // $this->getTune();
    }
    public function getTune(){
        switch ($t) {
            case '101':
            Echo "BBC London";
                break;
                case '104':
                Echo "NBC UK";
                    break;
                    case '99':
                    Echo "PTV Pakistan";
                        break;
            
            default:
                echo "National Radio";
                break;
        }
    }

}

$radio = new radio(5, 99);
// $radio->volume;
echo $radio->getTune();



?>