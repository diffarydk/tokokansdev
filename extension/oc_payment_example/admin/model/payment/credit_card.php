<?php
namespace Opencart\Admin\Model\Extension\OcPaymentExample\Payment;
class CreditCard extends \Opencart\System\Engine\Model {
	public function charge(int $customer_id, int $customer_payment_id, float $amount): int {
		$this->load->language('extension/oc_payment_example/payment/credit_card');

		$json = [];

		if (!$json) {

		}

		return $this->config->get('config_subscription_active_status_id');
	}
}
