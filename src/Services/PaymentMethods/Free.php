<?php

declare(strict_types=1);

namespace Snow\Payments\Services\PaymentMethods;

use Snow\Payments\Contracts\PaymentMethodService;
use Snow\Payments\Traits\IsPaymentMethod;

class Free implements PaymentMethodService
{
    use IsPaymentMethod;

    /**
     * Charge desired amount
     * @return void
     */
    public function charge()
    {
        // Nothing is charged, no exception is raised
    }
}
