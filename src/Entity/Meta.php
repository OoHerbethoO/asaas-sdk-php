<?php

namespace HPSWeb\Asaas\Entity;

/**
 * Base Meta Entity
 *
 * @author Herbeth Santana <herbeth@hps.net.br>
 */
final class Meta extends \HPSWeb\Asaas\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var boolean
     */
    public $hasMore;
}
