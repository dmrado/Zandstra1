<?php


class CdProduct extends ShopProduct
{
    public $playLength;

    public function __construct(
        $title,
        $firstName,
        $mainName,
        $price,
        $playLength)
    {
        parent::__construct(
            $title,
            $firstName,
            $mainName,
            $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        $base = "($this->title) ( {$this->producerMainName}, ";
        $base .="{$this->producerFirstName} )";
        $base .=": Время звучания - {$this->playLength}";
        return $base;
    }
}

$product2 = new CDProduct(
    "Классическая музыка. Лучшее",
    "Антонио",
    "Вивальди",
    10.99,
    0,
    60.33
);

//метод из родительского класса вызывается для объекта текущего класса
print "Исполнитель: {$product2->getProducer()}\n";