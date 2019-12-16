<?php

declare(strict_types=1);

namespace App\PlaceToPay;

use DomainException;

class PlaceToPayOrderRepository implements OrderRepository
{

    /**
     * @inheritDoc
     */
    public function createNewOrder(Order $order): Order
    {
        return Order::createNewOrderWithId(888, $order->user, $order->products);
    }
}
