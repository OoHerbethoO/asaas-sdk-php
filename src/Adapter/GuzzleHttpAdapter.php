<?php

namespace HPSWeb\Asaas\Adapter;


// Asaas
use HPSWeb\Asaas\Exception\HttpException;

// GuzzleHttp
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;



/**
 * Guzzle Http Adapter
 *
 * @author Herbeth Santana <herbeth@hps.net.br>
 */
class GuzzleHttpAdapter implements AdapterInterface
{
    /**
     * Client Instance
     *
     * @var ClientInterface
     */
    protected $client;

    /**
     * Command Response
     *
     * @var Response|GuzzleHttp\Message\ResponseInterface
     */
    protected $response;

    /**
     * Constructor
     *
     * @param  string                $token   Access Token
     * @param  ClientInterface|null  $client  Client Instance
     */
    public function __construct($token, ClientInterface $client = null)
    {
        if (version_compare(ClientInterface::VERSION, '6') === 1) {
            $this->client = $client ?: new Client(['headers' => ['access_token' => $token, 'Content-Type' => "application/json", 'Accept' => "application/json"]]);
        } else {
            $this->client = $client ?: new Client();

            $this->client->setDefaultOption('headers/access_token', $token);
            $this->client->setDefaultOption('headers/Accept', "application/json");
            $this->client->setDefaultOption('headers/Content-Type', "application/json");
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get($url)
    {
        try {
            $this->response = $this->client->get($url);
        } catch (RequestException $e) {
            $this->response = $e->getResponse();

            $this->handleError();
        }

        return $this->response->getBody();
    }

    /**
     * {@inheritdoc}
     */
    public function delete($url)
    {
        try {
            $this->response = $this->client->delete($url);
        } catch (RequestException $e) {
            $this->response = $e->getResponse();

            $this->handleError();
        }

        return $this->response->getBody();
    }

    /**
     * {@inheritdoc}
     */
    public function put($url, $content = '')
    {
        $options = [];
        $options['json'] = $content;

        try {
            $this->response = $this->client->put($url, $options);
        } catch (RequestException $e) {
            $this->response = $e->getResponse();

            $this->handleError();
        }

        return $this->response->getBody();
    }

    /**
     * {@inheritdoc}
     */
    public function post($url, $content = '')
    {
        $options = [];
        $options['json'] = $content;

        try {
            $this->response = $this->client->post($url, $options);
        } catch (RequestException $e) {
            $this->response = $e->getResponse();

            $this->handleError();
        }

        return $this->response->getBody();
    }

    /**
     * {@inheritdoc}
     */
    public function getLatestResponseHeaders()
    {
        if (null === $this->response) {
            return;
        }

        return [
            'reset'     => (int) (string) $this->response->getHeader('RateLimit-Reset'),
            'remaining' => (int) (string) $this->response->getHeader('RateLimit-Remaining'),
            'limit'     => (int) (string) $this->response->getHeader('RateLimit-Limit'),
        ];
    }

    /**
     * @throws HttpException
     */
    protected function handleError()
    {
        $body = (string) $this->response->getBody();
        $code = (int) $this->response->getStatusCode();

        $content = json_decode($body);

        throw new HttpException(isset($content->errors) ? $content->errors[0]->description : 'Request not processed.', $code);
    }
}
