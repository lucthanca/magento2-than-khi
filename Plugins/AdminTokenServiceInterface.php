<?php
/**
 *  DTech.
 *
 *  NOTICE OF LICENSE
 *
 *  This source file is subject to the EULA
 *  that is bundled with this package in the file LICENSE.txt.
 *  It is also available through the world-wide-web at this URL:
 *  http://dtech.com/Dtech-License.txt
 *
 * @category    VADU
 * @package     VADU_GoToAdminDashboard
 * @author      Vadu
 * @copyright   Copyright © 2020 DTech.
 */

namespace Vadu\ThanKhi\Plugins;

/**
 * Class AdminTokenServiceInterface
 *
 * @package Vadu\ThanKhi\Plugins
 */
class AdminTokenServiceInterface
{
    /**
     * Change type of response result
     *
     * @param \Magento\Integration\Api\AdminTokenServiceInterface $subject
     * @param string $result
     * @return array
     * @SuppressWarnings(PHPMD.UnusedFormalParamter)
     */
    public function afterCreateAdminAccessToken(
        \Magento\Integration\Api\AdminTokenServiceInterface $subject,
        $result
    ) {
        return ['token' => $result];
    }
}
