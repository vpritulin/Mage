<?php

namespace Mage\AddressValidator\Plugin\Magento\Quote\Model;

use Magento\Quote\Api\Data\AddressInterface;
use Magento\Quote\Api\Data\CartInterface;
use Magento\Quote\Model\QuoteAddressValidator;

class QuoteAddressValidatorPlugin
{
    public function afterValidateForCart($subject, $result,CartInterface $cart, AddressInterface $address)
    {
        $result = $cart->getCustomerIsGuest() ? $cart->getCustomer()->getId() : null;
        return $result;
    }

}
