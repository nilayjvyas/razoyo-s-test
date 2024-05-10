<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Razoyo\CarProfile\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface RazoyoCarprofileDetailsRepositoryInterface
{

    /**
     * Save razoyo_carprofile_details
     * @param \Razoyo\CarProfile\Api\Data\RazoyoCarprofileDetailsInterface $razoyoCarprofileDetails
     * @return \Razoyo\CarProfile\Api\Data\RazoyoCarprofileDetailsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Razoyo\CarProfile\Api\Data\RazoyoCarprofileDetailsInterface $razoyoCarprofileDetails
    );

    /**
     * Retrieve razoyo_carprofile_details
     * @param string $razoyoCarprofileDetailsId
     * @return \Razoyo\CarProfile\Api\Data\RazoyoCarprofileDetailsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($razoyoCarprofileDetailsId);

    /**
     * Retrieve razoyo_carprofile_details matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Razoyo\CarProfile\Api\Data\RazoyoCarprofileDetailsSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete razoyo_carprofile_details
     * @param \Razoyo\CarProfile\Api\Data\RazoyoCarprofileDetailsInterface $razoyoCarprofileDetails
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Razoyo\CarProfile\Api\Data\RazoyoCarprofileDetailsInterface $razoyoCarprofileDetails
    );

    /**
     * Delete razoyo_carprofile_details by ID
     * @param string $razoyoCarprofileDetailsId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($razoyoCarprofileDetailsId);
}

