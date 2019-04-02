<?php
namespace Zero1\VaultWebApi\Api;

/**
 * Contains methods to retrieve vault payment methods
 * This interface is consistent with \Magento\Payment\Api\PaymentMethodListInterface
 * @api
 */
interface PaymentMethodListInterface
{
    /**
     * Get list of available vault payments
     * @param int $storeId
     * @return \Zero1\VaultWebApi\Api\Data\VaultPaymentInterface[]
     */
    public function getList($storeId);

    /**
     * Get list of enabled in the configuration vault payments
     * @param int $storeId
     * @return \Zero1\VaultWebApi\Api\Data\VaultPaymentInterface[]
     */
    public function getActiveList($storeId);
}
