<?php

namespace HPSWeb\Asaas\Entity;

/**
 * Payment Entity
 *
 * @author Herbeth Santana <herbeth@hps.net.br>
 */
final class Payment extends \HPSWeb\Asaas\Entity\AbstractEntity
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
    public $dateCreated;

    /**
     * @var string
     */
    public $billingType;

    /**
     * @var float
     */
    public $value;

    /**
     * @var float
     */
    public $netValue;

    /**
     * @var float
     */
    public $originalValue;

    /**
     * @var float
     */
    public $interestValue;

    /**
     * @var float
     */
    public $paymentLink;

    /**
     * @var string
     */
    public $dueDate;

    /**
     * @var string
     */
    public $originalDueDate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $paymentDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $invoiceNumber;

    /**
     * @var string
     */
    public $invoiceUrl;

    /**
     * @var string
     */
    public $clientPaymentDate;

    /**
     * @var int
     */
    public $installmentCount;

    /**
     * @var float
     */
    public $installmentValue;

    /**
     * @var array
     */
    public $creditCard = [];

    /**
     * @var string
     */
    public $externalReference;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var bool
     */
    public $anticipated;

    /**
     * @var string
     */
    public $creditDate;

    /**
     * @var string
     */
    public $estimatedCreditDate;

    /**
     * @var string
     */
    public $bankSlipUrl;

    /**
     * @var string
     */
    public $lastInvoiceViewedDate;

    /**
     * @var string
     */
    public $lastBankSlipViewedDate;

    /**
     * @var array
     */
    public $split = [];

    /**
     * @var string
     */
    public $postalService;

    /**
     * @var string
     */
    public $confirmedDate;

    /**
     * @param  string  $dueDate
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = static::convertDateTime($dueDate);
    }
}
