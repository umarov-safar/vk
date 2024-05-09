<?php

namespace Safar\VK\Managers;

use Safar\VK\Models\Order;
use Safar\VK\Models\PaymentRequest;

// PaymentManger communicate with external payment service api
class PaymentManger
{
    private ExternalPaymentServiceInterface $externalPaymentService;

    public function requestPayment(Order $order): PaymentRequest
    {
        $this->externalPaymentService->send();
        return new PaymentRequest();
    }
}