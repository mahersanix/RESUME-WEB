<?php
class Animal
{
    private $family;
    private $food;
    public function __construct($family, $food)
    {
        $this->family = $family;
        $this->food   = $food;
    }
    public function get_family()
    {
        return $this->family;
    }
    public function set_family($family)
    {
        $this->family = $family;
    }
    public function get_food()
    {
        return $this->food;
    }
    public function set_food($food)
    {
        $this->food = $food;
    }
}
?> 

<?php
class Cow extends Animal
{
    private $owner;
    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }
    public function set_owner($owner)
    {
        $this->owner = $owner;
    }
    public function get_owner()
    {
        return $this->owner;
    }
}
?>

<?php
class Lion extends Animal
{
    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }
}
?>