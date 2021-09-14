<?php

namespace HPSWeb\Asaas\Entity;

/**
 * Notification Entity
 *
 * @author Herbeth Santana <herbeth@hps.net.br>
 */
final class Notification extends \HPSWeb\Asaas\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $customer;

    /**
     * @var string
     */
    public $event;

    /**
     * @var int
     */
    public $scheduleOffset;

    /**
     * @var bool
     */
    public $emailEnabledForProvider;

    /**
     * @var bool
     */
    public $smsEnabledForProvider;

    /**
     * @var bool
     */
    public $emailEnabledForCustomer;

    /**
     * @var bool
     */
    public $smsEnabledForCustomer;

    /**
     * @var bool
     */
    public $enabled;
}
