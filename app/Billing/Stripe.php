<?php
/**
 * Created by PhpStorm.
 * User: OpenUser
 * Date: 12.07.2018
 * Time: 18:26
 */

namespace App\Billing;


class Stripe
{
    private $key;

    /**
     * Stripe constructor.
     */
    public function __construct($key)
    {

        $this->key = $key;
    }
}
