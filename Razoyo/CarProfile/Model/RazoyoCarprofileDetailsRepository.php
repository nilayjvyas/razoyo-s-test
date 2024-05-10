<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Razoyo\CarProfile\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Razoyo\CarProfile\Api\Data\RazoyoCarprofileDetailsInterface;
use Razoyo\CarProfile\Api\Data\RazoyoCarprofileDetailsInterfaceFactory;
use Razoyo\CarProfile\Api\Data\RazoyoCarprofileDetailsSearchResultsInterfaceFactory;
use Razoyo\CarProfile\Api\RazoyoCarprofileDetailsRepositoryInterface;
use Razoyo\CarProfile\Model\ResourceModel\RazoyoCarprofileDetails as ResourceRazoyoCarprofileDetails;
use Razoyo\CarProfile\Model\ResourceModel\RazoyoCarprofileDetails\CollectionFactory as RazoyoCarprofileDetailsCollectionFactory;

class RazoyoCarprofileDetailsRepository implements RazoyoCarprofileDetailsRepositoryInterface
{

    /**
     * @var RazoyoCarprofileDetailsCollectionFactory
     */
    protected $razoyoCarprofileDetailsCollectionFactory;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var ResourceRazoyoCarprofileDetails
     */
    protected $resource;

    /**
     * @var RazoyoCarprofileDetails
     */
    protected $searchResultsFactory;

    /**
     * @var RazoyoCarprofileDetailsInterfaceFactory
     */
    protected $razoyoCarprofileDetailsFactory;


    /**
     * @param ResourceRazoyoCarprofileDetails $resource
     * @param RazoyoCarprofileDetailsInterfaceFactory $razoyoCarprofileDetailsFactory
     * @param RazoyoCarprofileDetailsCollectionFactory $razoyoCarprofileDetailsCollectionFactory
     * @param RazoyoCarprofileDetailsSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceRazoyoCarprofileDetails $resource,
        RazoyoCarprofileDetailsInterfaceFactory $razoyoCarprofileDetailsFactory,
        RazoyoCarprofileDetailsCollectionFactory $razoyoCarprofileDetailsCollectionFactory,
        RazoyoCarprofileDetailsSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->razoyoCarprofileDetailsFactory = $razoyoCarprofileDetailsFactory;
        $this->razoyoCarprofileDetailsCollectionFactory = $razoyoCarprofileDetailsCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(
        RazoyoCarprofileDetailsInterface $razoyoCarprofileDetails
    ) {
        try {
            $this->resource->save($razoyoCarprofileDetails);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the razoyoCarprofileDetails: %1',
                $exception->getMessage()
            ));
        }
        return $razoyoCarprofileDetails;
    }

    /**
     * @inheritDoc
     */
    public function get($razoyoCarprofileDetailsId)
    {
        $razoyoCarprofileDetails = $this->razoyoCarprofileDetailsFactory->create();
        $this->resource->load($razoyoCarprofileDetails, $razoyoCarprofileDetailsId);
        if (!$razoyoCarprofileDetails->getId()) {
            throw new NoSuchEntityException(__('razoyo_carprofile_details with id "%1" does not exist.', $razoyoCarprofileDetailsId));
        }
        return $razoyoCarprofileDetails;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->razoyoCarprofileDetailsCollectionFactory->create();
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(
        RazoyoCarprofileDetailsInterface $razoyoCarprofileDetails
    ) {
        try {
            $razoyoCarprofileDetailsModel = $this->razoyoCarprofileDetailsFactory->create();
            $this->resource->load($razoyoCarprofileDetailsModel, $razoyoCarprofileDetails->getRazoyoCarprofileDetailsId());
            $this->resource->delete($razoyoCarprofileDetailsModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the razoyo_carprofile_details: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($razoyoCarprofileDetailsId)
    {
        return $this->delete($this->get($razoyoCarprofileDetailsId));
    }
}

