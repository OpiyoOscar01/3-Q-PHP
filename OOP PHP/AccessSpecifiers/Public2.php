<?php
class main {
    public $x;
    public $y;

    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    function add($x, $y) {
        return $x + $y;
    }
}

class sub extends main {
    public $z;

    function __construct($x, $y, $z) {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    function add2($x, $y) {
        return $x + $y + $this->z;
    }
}

$obj = new main(1, 2);
echo $obj->add(1, 2);

$obj1 = new sub(1, 2, 3);
echo $obj1->add2(1, 2, 3);
?>
