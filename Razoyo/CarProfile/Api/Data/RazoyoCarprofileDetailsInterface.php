<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Razoyo\CarProfile\Api\Data;

interface RazoyoCarprofileDetailsInterface
{

    const MODEL = 'model';
    const YEAR = 'year';
    const Entity_ID = 'entity_id';
    const MAKE = 'make';
    const CAR_ID = 'car_id';
    const IMAGE = 'image';
    const CREATED_AT = 'created_at';
    const CUSTOMER_EMAIL = 'customer_email';

    /**
     * Get entityId
     * @return string|null
     */
    public function getEntityId();

    /**
     * Set entityId
     * @param string $razoyoCarprofileDetailsId
     * @return \Razoyo\CarProfile\RazoyoCarprofileDetails\Api\Data\RazoyoCarprofileDetailsInterface
     */
    public function setEntityId($entityId);

    /**
     * Get customer_email
     * @return string|null
     */
    public function getCustomerEmail();

    /**
     * Set customer_email
     * @param string $customerEmail
     * @return \Razoyo\CarProfile\RazoyoCarprofileDetails\Api\Data\RazoyoCarprofileDetailsInterface
     */
    public function setCustomerEmail($customerEmail);

    /**
     * Get car_id
     * @return string|null
     */
    public function getCarId();

    /**
     * Set car_id
     * @param string $carId
     * @return \Razoyo\CarProfile\RazoyoCarprofileDetails\Api\Data\RazoyoCarprofileDetailsInterface
     */
    public function setCarId($carId);

    /**
     * Get year
     * @return string|null
     */
    public function getYear();

    /**
     * Set year
     * @param string $year
     * @return \Razoyo\CarProfile\RazoyoCarprofileDetails\Api\Data\RazoyoCarprofileDetailsInterface
     */
    public function setYear($year);

    /**
     * Get make
     * @return string|null
     */
    public function getMake();

    /**
     * Set make
     * @param string $make
     * @return \Razoyo\CarProfile\RazoyoCarprofileDetails\Api\Data\RazoyoCarprofileDetailsInterface
     */
    public function setMake($make);

    /**
     * Get model
     * @return string|null
     */
    public function getModel();

    /**
     * Set model
     * @param string $model
     * @return \Razoyo\CarProfile\RazoyoCarprofileDetails\Api\Data\RazoyoCarprofileDetailsInterface
     */
    public function setModel($model);

    /**
     * Get image
     * @return string|null
     */
    public function getImage();

    /**
     * Set image
     * @param string $image
     * @return \Razoyo\CarProfile\RazoyoCarprofileDetails\Api\Data\RazoyoCarprofileDetailsInterface
     */
    public function setImage($image);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Razoyo\CarProfile\RazoyoCarprofileDetails\Api\Data\RazoyoCarprofileDetailsInterface
     */
    public function setCreatedAt($createdAt);
}

