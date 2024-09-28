<?php
class Pontos
{
    private $x;
    private $y;
    private static $count = 0;


    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        self::$count++;
    }

    public function setPontoX($x): void
    {
        $this->x = $x;
    }

    public function getPontoX()
    {
        return $this->x;
    }

    public function setPontoY($x): void
    {
        $this->x = $x;
    }

    public function getPontoXPontoY()
    {
        return $this->x;
    }

    public function getcount(): int
    {
        return self::$count;
    }

    public function distaciaDoisPontos(Pontos $pontoAvulso)
    {
        $dx = $this->x - $pontoAvulso->x;
        $dy = $this->y - $pontoAvulso->y;
        return sqrt(pow($dx, 2) + (pow($dy, 2)));
    }

    public static function distanciaPontos($x1, $x2, $x3)
    {
        $dy = $x3;
        $dx = $x1 - $x2;
        return sqrt(pow($dx, 2) + (pow($dy, 2)));
    }
}


$p1 = new pontos(1, 10);
$p2 = new pontos(15, 5);
$p3 = new pontos(7, 27);
