<?php

declare(strict_types=1);

namespace App\PlaceToPay;


class User
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $mobile;

    /**
     * User constructor.
     * @param string $name
     * @param string $email
     * @param string $mobile
     */
    public function __construct(string $name, string $email, string $mobile)
    {
        $this->name = $name;
        $this->email = $email;
        $this->mobile = $mobile;
    }


}
