<?php
namespace Zero1\VaultWebApi\Model;

use Zero1\VaultWebApi\Api\PaymentTokenRepositoryInterface;

class PaymentTokenRepository implements PaymentTokenRepositoryInterface
{
    protected $vaultTokenRepository;

    public function __construct(
        \Magento\Vault\Api\PaymentTokenRepositoryInterface $paymentTokenRepository
    ){
        $this->vaultTokenRepository = $paymentTokenRepository;
    }

    /**
     * Deletes a specified payment token.
     *
     * @param int $entityId The payment token entity ID.
     * @return bool
     */
    public function deleteById($entityId)
    {
        return $this->vaultTokenRepository->delete(
            $this->vaultTokenRepository->getById($entityId)
        );
    }

    /**
     * @param int $entityId The payment token entity ID.
     * @param \Magento\Vault\Api\Data\PaymentTokenInterface $paymentToken The payment token.
     * @return \Magento\Vault\Api\Data\PaymentTokenInterface Saved payment token data.
     */
    public function updateById(
        $entityId,
        \Magento\Vault\Api\Data\PaymentTokenInterface $paymentToken
    ){
        $paymentToken->setEntityId($entityId);
        return $this->vaultTokenRepository->save(
            $paymentToken
        );
    }

    /**
     *  Creates a new payment token
     *
     * @param \Magento\Vault\Api\Data\PaymentTokenInterface $paymentToken The payment token.
     * @return \Magento\Vault\Api\Data\PaymentTokenInterface Saved payment token data.
     */
    public function create(\Magento\Vault\Api\Data\PaymentTokenInterface $paymentToken)
    {
        $paymentToken->setEntityId(null);
        return $this->vaultTokenRepository->save(
            $paymentToken
        );
    }
}