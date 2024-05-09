<?php

namespace Safar\VK\Managers;

use Safar\VK\Models\DeliveryRequest;
use Safar\VK\Models\Order;
use Safar\VK\Models\PaymentRequest;

// DeliveryManger communicate with external delivery service api
class DeliveryManger
{
    private ExternalDeliveryServiceInterface $externalDeliveryService; //

    public function requestDelivery(Order $order, PaymentRequest $paymentRequest): DeliveryRequest
    {
        $this->externalDeliveryService->send(); // Send request external service
        return new DeliveryRequest();
    }
}