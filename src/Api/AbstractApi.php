<?php

namespace HPSWeb\Asaas\Api;

use HPSWeb\Asaas\Adapter\AdapterInterface;
use HPSWeb\Asaas\Entity\Meta;

/**
 * Abstract API
 *
 * @author Herbeth Santana <herbeth@hps.net.br>
 */
abstract class AbstractApi
{
    /**
     * Endpoint Produção
     *
     * @var string
     */
    const ENDPOINT_PRODUCAO = 'https://asaas.com/api/v3/';

    /**
     * Endpoint Sandbox
     *
     * @var string
     */
    const ENDPOINT_SANDBOX = 'https://sandbox.asaas.com/api/v3/';

    /**
     * Http Adapter Instance
     *
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * Api Endpoint
     *
     * @var string
     */
    protected $endpoint;

    /**
     * @var Meta
     */
    protected $meta;

    /**
     * Constructor
     *
     * @param  AdapterInterface  $adapter   Adapter Instance
     * @param  string            $ambiente  (optional) Ambiente da API
     */
    public function __construct(AdapterInterface $adapter, $ambiente = 'producao')
    {
        $this->adapter = $adapter;

        $this->endpoint = $ambiente == 'sandbox' ? static::ENDPOINT_SANDBOX : static::ENDPOINT_PRODUCAO;
    }

    /**
     * Extract results meta
     *
     * @param   \stdClass  $data  Meta data
     * @return  Meta
     */
    protected function extractMeta(\StdClass $data)
    {
        $this->meta = new Meta($data);

        return $this->meta;
    }

    /**
     * Return results meta
     *
     * @return  Meta
     */
    public function getMeta()
    {
        return $this->meta;
    }
}
