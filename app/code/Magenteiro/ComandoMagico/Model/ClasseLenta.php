<?php
declare(strict_types=1);

namespace Magenteiro\ComandoMagico\Model;
class ClasseLenta
{
    
    public function __construct()
    {
        echo "sou uma classe lenta\n";
    }

    public function soma(int $a, int $b)
    {
        return $a + $b;
    }

}