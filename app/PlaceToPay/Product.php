<?php

declare(strict_types=1);

namespace App\PlaceToPay;


class Product
{
    /**
     * @var string
     */
    public $sku;

    /**
     * @var string
     */
    public $name;

    /**
     * @param string $sku
     * @param string $name
     */
    public function __construct(string $sku, string $name)
    {
        $this->sku = $sku;
        $this->name = $name;
    }
}
