<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2020 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

declare(strict_types=1);

namespace CoreShop\Component\Pimcore\BCLayer;

if (class_exists(\Pimcore\Model\DataObject\ClassDefinition\Data\Href::class)) {
    class Href extends \Pimcore\Model\DataObject\ClassDefinition\Data\Href
    {
    }
} elseif (class_exists(\Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::class)) {
    class Href extends \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation
    {
    }
} else {
    abstract class Href extends \Pimcore\Model\DataObject\ClassDefinition\Data
    {
    }

    throw new \RuntimeException(sprintf('This Exception should never be called, if it does get called, the class %s or %s is missing.', '\Pimcore\Model\DataObject\ClassDefinition\Data\Href', 'Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation'));
}
