<?php

namespace Safar\VK\Managers;

use Safar\VK\Models\Order;
use Safar\VK\Models\PaymentRequest;

class PaymentManger
{
    private ExternalPaymentServiceInterface $externalPaymentService;

    public function requestPayment(Order $order): PaymentRequest
    {
        $this->externalPaymentService->send();
        return new PaymentRequest();
    }
}