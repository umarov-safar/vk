<?php

namespace Safar\VK;

use Safar\VK\Managers\DeliveryManger;
use Safar\VK\Managers\PaymentManger;
use Safar\VK\Models\Order;

class OrdersController
{
    private PaymentManger $paymentManger;
    private DeliveryManger $deliveryManager;

    public function create(): Order
    {
        $order = new Order();

        $paymentRequest = $this->paymentManger->requestPayment($order);

        if ($paymentRequest->isSuccessful()) {
           $this->deliveryManager->requestDelivery($order, $paymentRequest);
        }

        return $order;
    }
}