<?php

namespace App\Solid;

class CodPaymentMethod implements PaymentMethodInterface
{

    public function makePayment()
    {
        return 'COD payment';
    }
}
