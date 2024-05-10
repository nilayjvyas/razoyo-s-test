<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Razoyo\CarProfile\Model;

use Magento\Framework\Model\AbstractModel;
use Razoyo\CarProfile\Api\Data\RazoyoCarprofileDetailsInterface;

class RazoyoCarprofileDetails extends AbstractModel implements RazoyoCarprofileDetailsInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Razoyo\CarProfile\Model\ResourceModel\RazoyoCarprofileDetails::class);
    }

    /**
     * @inheritDoc
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * @inheritDoc
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * @inheritDoc
     */
    public function getCustomerEmail()
    {
        return $this->getData(self::CUSTOMER_EMAIL);
    }

    /**
     * @inheritDoc
     */
    public function setCustomerEmail($customerEmail)
    {
        return $this->setData(self::CUSTOMER_EMAIL, $customerEmail);
    }

    /**
     * @inheritDoc
     */
    public function getCarId()
    {
        return $this->getData(self::CAR_ID);
    }

    /**
     * @inheritDoc
     */
    public function setCarId($carId)
    {
        return $this->setData(self::CAR_ID, $carId);
    }

    /**
     * @inheritDoc
     */
    public function getYear()
    {
        return $this->getData(self::YEAR);
    }

    /**
     * @inheritDoc
     */
    public function setYear($year)
    {
        return $this->setData(self::YEAR, $year);
    }

    /**
     * @inheritDoc
     */
    public function getMake()
    {
        return $this->getData(self::MAKE);
    }

    /**
     * @inheritDoc
     */
    public function setMake($make)
    {
        return $this->setData(self::MAKE, $make);
    }

    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return $this->getData(self::MODEL);
    }

    /**
     * @inheritDoc
     */
    public function setModel($model)
    {
        return $this->setData(self::MODEL, $model);
    }

    /**
     * @inheritDoc
     */
    public function getImage()
    {
        return $this->getData(self::IMAGE);
    }

    /**
     * @inheritDoc
     */
    public function setImage($image)
    {
        return $this->setData(self::IMAGE, $image);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
}

