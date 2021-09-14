<?php

namespace HPSWeb\Asaas\Entity;

/**
 * City Entity
 *
 * @author Herbeth Santana <herbeth@hps.net.br>
 */
final class City extends \HPSWeb\Asaas\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $ibgeCode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $districtCode;

    /**
     * @var string
     */
    public $district;

    /**
     * @var string
     */
    public $state;
}
