
<?php 

// Namespace ভারচুয়াল ফোল্ডার বা হায়রার কী এর মতো করে কাজ করে 

require_once '.PaymentGateway/Stripe/Transaction.php';
require_once '.PaymentGateway/Paypal/Transaction.php';

use PaymentGateway\Paypal\Transaction as PaypalTransaction; // import
use App\Stripe\Transaction as StripeTransaction; // import


class PaymentService {
    public function createTransction($transctionMetod) {
        if($transctionMetod == 'paypal') {
            $transction = new PaypalTransaction();
        } else {
            $transction = new StripeTransaction();
        }
    }
}

