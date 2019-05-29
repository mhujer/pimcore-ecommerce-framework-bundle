<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\EcommerceFrameworkBundle\OrderManager\Order\Listing\Filter\Search;

use Pimcore\Bundle\EcommerceFrameworkBundle\OrderManager\OrderListInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\OrderManager\Order\Listing\Filter\AbstractSearch;

class PaymentReference extends AbstractSearch
{
    /**
     * @return string
     */
    protected function getConditionColumn()
    {
        return 'paymentInfo.paymentReference';
    }

    /**
     * @return string
     */
    protected function getConditionValue()
    {
        $value = parent::getConditionValue();
        $value = ',' . $value . ',';

        return $value;
    }

    /**
     * Join paymentInfo
     *
     * @param OrderListInterface $orderList
     */
    protected function prepareApply(OrderListInterface $orderList)
    {
        $orderList->joinPaymentInfo();
    }
}
