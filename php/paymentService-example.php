<?php

interface PaymentService {
    public function processPayment($amount);
}


class PayPalPaymentService implements PaymentService {
    public function processPayment($amount) {
        echo "Processing PayPal payment of $amount";
    }
}

class StripePaymentService implements PaymentService {
    public function processPayment($amount) {
        echo "Processing Stripe payment of $amount";
    }
}

class PaymentProcessor {
    private $paymentService;

    public function __construct(PaymentService $paymentService) {
        $this->paymentService = $paymentService;
    }

    public function process($amount) {
        $this->paymentService->processPayment($amount);
    }
}

$paypalService = new PayPalPaymentService();
$stripeService = new StripePaymentService();    

$paypalProcessor = new PaymentProcessor($paypalService);
$stripeProcessor = new PaymentProcessor($stripeService);
$paypalProcessor->process(100);
$stripeProcessor->process(200); 