<?php
    interface PaymentMethod {
        public function processPayment(float $amount);
    }
    
    // Triển khai lớp "CreditCardPayment" sử dụng interface "PaymentMethod"
    class CreditCardPayment implements PaymentMethod {
        public function processPayment(float $amount) {
            echo "Processing credit card payment of $amount dollars...<br>";
            // Xử lý thanh toán qua thẻ tín dụng
        }
    }
    
    // Triển khai lớp "PayPalPayment" sử dụng interface "PaymentMethod"
    class PayPalPayment implements PaymentMethod {
        public function processPayment(float $amount) {
            echo "Processing PayPal payment of $amount dollars...<br>";
            // Xử lý thanh toán qua PayPal
        }
    }
    
    // Sử dụng interface "PaymentMethod" để xử lý thanh toán trong ứng dụng
    class ShoppingCart {
        private $paymentMethod;
        private $items;
        private $total;
    
        public function __construct(PaymentMethod $paymentMethod) {
            $this->paymentMethod = $paymentMethod;
            $this->items = array();
            $this->total = 0;
        }
    
        public function addItem($name, $price) {
            $this->items[] = array('name' => $name, 'price' => $price);
            $this->total += $price;
        }
    
        public function checkout() {
            $this->paymentMethod->processPayment($this->total);
            echo "Checkout completed. Thank you for your purchase!";
        }
    }
    
    // Tạo đối tượng "ShoppingCart" sử dụng lớp "CreditCardPayment" để xử lý thanh toán
    $cart1 = new ShoppingCart(new CreditCardPayment());
    $cart1->addItem("Product A", 100);
    $cart1->addItem("Product B", 200);
    $cart1->checkout();
    
    // Tạo đối tượng "ShoppingCart" sử dụng lớp "PayPalPayment" để xử lý thanh toán
    $cart2 = new ShoppingCart(new PayPalPayment());
    $cart2->addItem("Product C", 50);
    $cart2->addItem("Product D", 150);
    $cart2->checkout();

?>