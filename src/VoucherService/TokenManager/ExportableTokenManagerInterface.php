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

namespace Pimcore\Bundle\EcommerceFrameworkBundle\VoucherService\TokenManager;

interface ExportableTokenManagerInterface
{
    const FORMAT_CSV = 'csv';

    const FORMAT_PLAIN = 'plain';

    /**
     * Export tokens to CSV
     *
     *
     */
    public function exportCsv(array $params): string;

    /**
     * Export tokens to plain text list
     *
     *
     */
    public function exportPlain(array $params): string;
}
