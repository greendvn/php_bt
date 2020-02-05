<?php


class QuadraticEquatiion
{
    private $a;
    private $b;
    private $c;

    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }
    public function getDiscriminant(){
        return $this->b*$this->b - 4*$this->a*$this->c;
    }
    public function getRoot1(){
        return (-$this->b + sqrt($this->getDiscriminant()))/(2*$this->a);
    }
    public function getRoot2(){
        return (-$this->b - sqrt($this->getDiscriminant()))/(2*$this->a);
    }
    public function result()
    {
        if ($this->getDiscriminant() < 0) {
            return "Phương Trình Vô Nghiệm";
        } elseif ($this->getDiscriminant() == 0) {
            return "Phương Trình Có Một Nghiệm Duy Nhất Là: " . $this->getRoot1();
        } else {
            return "Nghiệm 1 là: " . $this->getRoot1() . " Nghiệm 2 là: " . $this->getRoot2();
        }
    }

}