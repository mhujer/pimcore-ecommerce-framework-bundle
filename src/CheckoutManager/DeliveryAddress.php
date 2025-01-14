<?php
declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager;

/**
 * Sample implementation for delivery address
 */
class DeliveryAddress extends AbstractStep implements CheckoutStepInterface
{
    /**
     * Namespace key
     */
    const PRIVATE_NAMESPACE = 'delivery_address';

    public function getName(): string
    {
        return 'deliveryaddress';
    }

    public function commit(mixed $data): bool
    {
        $this->cart->setCheckoutData(self::PRIVATE_NAMESPACE, json_encode($data));

        return true;
    }

    public function getData(): mixed
    {
        $data = json_decode((string) $this->cart->getCheckoutData(self::PRIVATE_NAMESPACE));

        return $data;
    }
}
