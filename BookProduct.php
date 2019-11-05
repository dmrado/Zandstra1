<?php


class BookProduct extends ShopProduct
{
    public $numPages;

    public function __construct(
        $title,
        $firstName,
        $mainName,
        $price,
        $numPages
    ) {
        parent::__construct(
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->numPages = $numPages;
    }

    public function getNumberOfPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
//        $base = "($this->title) ( {$this->producerMainName}, ";
//        $base .="{$this->producerFirstName} )";
        //вместо этих двух строк вызываем метод родительского класса и дополняем его реализацией дочернего класса:
        $base = parent::getSummaryLine();
        $base .=": {$this->numPages} стр.";
        return $base;
    }
}