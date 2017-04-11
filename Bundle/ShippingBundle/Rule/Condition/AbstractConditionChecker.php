<?php

namespace CoreShop\Bundle\ShippingBundle\Rule\Condition;

use CoreShop\Component\Order\Manager\CartManagerInterface;
use CoreShop\Component\Order\Model\CartItemInterface;
use CoreShop\Component\Product\Model\ProductInterface;
use CoreShop\Component\Rule\Condition\ConditionCheckerInterface;
use Webmozart\Assert\Assert;

abstract class AbstractConditionChecker implements ShippingConditionCheckerInterface
{
    /**
     * {@inheritdoc}
     */
    public function isValid($subject, array $configuration)
    {
        if (!is_array($subject)) {
            throw new \InvalidArgumentException('Shipping Rule Condition $subject needs to be an array with values cart, address and carrier');
        }

        if (!array_key_exists('carrier', $subject) || !array_key_exists('cart', $subject) || !array_key_exists('address', $subject)) {
            throw new \InvalidArgumentException('Shipping Rule Condition $subject needs to be an array with values cart, address and carrier');
        }

        return $this->isShippingRuleValid($subject['carrier'], $subject['cart'], $subject['address'], $configuration);
    }

}
