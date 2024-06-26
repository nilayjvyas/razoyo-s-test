<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Razoyo\CarProfile\Model\ResourceModel\RazoyoCarprofileDetails;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'entity_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Razoyo\CarProfile\Model\RazoyoCarprofileDetails::class,
            \Razoyo\CarProfile\Model\ResourceModel\RazoyoCarprofileDetails::class
        );
    }
}

