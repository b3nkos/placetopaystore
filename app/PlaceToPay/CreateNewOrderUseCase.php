<?php

declare(strict_types=1);

namespace App\PlaceToPay;


class CreateNewOrderUseCase
{
    /**
     * @var OrderRepository
     */
    private $orderRepository;

    /**
     * CreateNewOrderUseCase constructor.
     * @param OrderRepository $orderRepository
     */
    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * @param Order $order
     * @return Order
     */
    public function execute(Order $order): Order
    {
        $orderCreated = $this->orderRepository->createNewOrder($order);
        return $orderCreated;
    }


}
