<?php

namespace HPSWeb\Asaas\Entity;

/**
 * Customer Entity
 *
 * @author Herbeth Santana <herbeth@hps.net.br>
 */
final class Customer extends \HPSWeb\Asaas\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $email;

    /**
     * @var date
     */
    public $dateCreated;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $mobilePhone;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $addressNumber;

    /**
     * @var string
     */
    public $complement;

    /**
     * @var string
     */
    public $province;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var bool
     */
    public $notificationDisabled;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var string
     */
    public $cpfCnpj;

    /**
     * @var string
     */
    public $personType;

    /**
     * @var string
     */
    public $additionalEmails;

    /**
     * @var string
     */
    public $externalReference;

    /**
     * @var string
     */
    public $observations;
}
