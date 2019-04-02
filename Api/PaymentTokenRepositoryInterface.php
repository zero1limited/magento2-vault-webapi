<?php
namespace Zero1\VaultWebApi\Api;

/**
 * Additional Gateway vault payment token repository interface methods.
 *
 * @api
 */
interface PaymentTokenRepositoryInterface
{
    /**
     * Deletes a specified payment token.
     *
     * @param int $entityId The payment token entity ID.
     * @return bool
     */
    public function deleteById($entityId);

    /**
     *  Updates a specified payment token this should of been a PATCH method, but m2 doesnt appear to support.
     *
     * @param int $entityId The payment token entity ID.
     * @param \Magento\Vault\Api\Data\PaymentTokenInterface $paymentToken The payment token.
     * @return \Magento\Vault\Api\Data\PaymentTokenInterface Saved payment token data.
     */
    public function updateById(
        $entityId,
        \Magento\Vault\Api\Data\PaymentTokenInterface $paymentToken
    );

    /**
     *  Creates a new payment token
     *
     * @param \Magento\Vault\Api\Data\PaymentTokenInterface $paymentToken The payment token.
     * @return \Magento\Vault\Api\Data\PaymentTokenInterface Saved payment token data.
     */
    public function create(
        \Magento\Vault\Api\Data\PaymentTokenInterface $paymentToken
    );
}