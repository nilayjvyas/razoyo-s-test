<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Razoyo\CarProfile\Api\Data;

interface RazoyoCarprofileDetailsSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get razoyo_carprofile_details list.
     * @return \Razoyo\CarProfile\Api\Data\RazoyoCarprofileDetailsInterface[]
     */
    public function getItems();

    /**
     * Set customer_email list.
     * @param \Razoyo\CarProfile\Api\Data\RazoyoCarprofileDetailsInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

