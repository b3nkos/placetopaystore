<?php

declare(strict_types=1);

namespace App\PlaceToPay;


use phpDocumentor\Reflection\Types\Integer;

class Order
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var User
     */
    public $user;

    /**
     * @var Product[]
     */
    public $products;

    /**
     * Order constructor.
     * @param User $user
     * @param Product[] $products
     * @param int|null $id
     */
    private function __construct(User $user, array $products, ?int $id)
    {
        $this->user = $user;
        $this->products = $products;
        $this->id = $id;
    }

    /**
     * @param User $user
     * @param array $products
     * @return Order
     */
    public static function createNewOrderWithoutId(User $user, array $products): Order
    {
        return new self($user, $products, null);
    }

    public static function createNewOrderWithId(int $id, User $user, array $products): Order
    {
        return new self($user, $products, $id);
    }

}
