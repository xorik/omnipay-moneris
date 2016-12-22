<?php

namespace Omnipay\Moneris\Message;

/**
 * Moneris Purchase Request
 */
class PurchaseRequest extends AbstractRequest
{

    public function getData()
    {
        $this->validate('amount', 'returnUrl');

        $data = array();
        $data['hpp_id'] = $this->getHppId();
        $data['hpp_key'] = $this->getHppKey();
        $data['return_url'] = $this->getReturnUrl();
        $data['amount'] = $this->getAmount();
        $data['order_no'] = $this->getTransactionId();

        return $data;
    }

    public function sendData($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }
}