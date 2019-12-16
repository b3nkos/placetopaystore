<?php

namespace Tests\Unit;

use App\PlaceToPay\Product;
use App\PlaceToPay\User;
use App\PlaceToPay\Order;
use App\PlaceToPay\CreateNewOrderUseCase;
use Tests\TestCase;
use App\PlaceToPay\PlaceToPayOrderRepository;
use Faker\Factory as FakerFactory;

class OrderTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function shouldReturnAnewOrderCreated()
    {
        $faker = FakerFactory::create();
        $user = new User($faker->name, $faker->email, $faker->phoneNumber);
        $products = [
            new Product($faker->slug, $faker->company)
        ];

        $orderRepository = new PlaceToPayOrderRepository();
        $service = new CreateNewOrderUseCase($orderRepository);
        $orderCreated = $service->execute(Order::createNewOrderWithoutId($user, $products));

        $this->assertIsNumeric($orderCreated->id);
    }
}
