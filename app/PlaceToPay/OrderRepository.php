<?php

declare(strict_types=1);

namespace App\PlaceToPay;


use DomainException;

interface OrderRepository
{
    /**
     * @param Order $order
     * @return Order
     * @throws DomainException
     */
    public function createNewOrder(Order $order): Order;

}
