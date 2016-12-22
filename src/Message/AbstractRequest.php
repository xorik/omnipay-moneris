<?php

namespace Omnipay\Moneris\Message;

/**
 * Moneris Abstract Request
 */
abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{

    protected $liveEndpoint = 'https://esplus.moneris.com/DPHPP/index.php';
    protected $testEndpoint = 'https://esplusqa.moneris.com/DPHPP/index.php';

    public function getHppId()
    {
        return $this->getParameter('hpp_id');
    }

    public function setHppId($value)
    {
        return $this->setParameter('hpp_id', $value);
    }

    public function getHppKey()
    {
        return $this->getParameter('hpp_key');
    }

    public function setHppKey($value)
    {
        return $this->setParameter('hpp_key', $value);
    }

    public function getEndpoint()
    {
        return $this->getTestMode() ? $this->testEndpoint : $this->liveEndpoint;
    }
}
