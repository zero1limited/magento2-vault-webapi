<?php
namespace Zero1\VaultWebApi\Api\Data;

use Magento\Payment\Api\Data\PaymentMethodInterface;

interface VaultPaymentInterface extends PaymentMethodInterface
{
    /**
     * @return string|null
     * @since 100.1.0
     */
    public function getProviderCode();
}