<?php
/**
 * Mirasvit
 *
 * This source file is subject to the Mirasvit Software License, which is available at http://mirasvit.com/license/.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to http://www.magentocommerce.com for more information.
 *
 * @category  Mirasvit
 * @package   Advanced SEO Suite
 * @version   1.1.1
 * @build     890
 * @copyright Copyright (C) 2015 Mirasvit (http://mirasvit.com/)
 */


$installer = $this;
$version = Mage::helper('mstcore/version')->getModuleVersionFromDb('seo');
if ($version == '0.2.2') {
    return;
} elseif ($version != '0.2.1') {
    die("Please, run migration 0.2.1");
}

$installer->startSetup();
$connection = $installer->getConnection();
$table = $installer->getTable('cms_page');
$connection->addColumn($table, 'alternate_group', 'varchar(255)');

$installer->endSetup();