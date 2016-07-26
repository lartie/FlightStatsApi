<?php

namespace LArtie\FlightStatsApi\Core\Methods;

use Exception;
use GuzzleHttp\Client;
use LArtie\FlightStatsApi\Core\Exceptions\FlightStatsException;

/**
 * Class BaseMethod
 */
abstract class BaseMethod
{
    /**
     * @var string
     */
    protected $baseUri = 'https://api.flightstats.com/flex/';

    /**
     * @var string
     */
    protected $appId;

    /**
     * @var string
     */
    protected $appKey;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $version = 'v1';

    /**
     * @var string
     */
    protected $responseType = 'json';

    /**
     * @var string
     */
    protected $baseMethod;

    /**
     * @var
     */
    protected $objectClassName;

    /**
     * @var
     */
    protected $objectKey;

    /**
     * BaseMethod constructor.
     * @param null $appId
     * @param null $appKey
     */
    final public function __construct($appId = null, $appKey = null)
    {
        if (is_null($appId)) {
            $appId = env('FLIGHTSTATS_APP_ID', null);
        }

        if (is_null($appKey)) {
            $appKey = env('FLIGHTSTATS_APP_KEY', null);
        }

        $this->appId = $appId;
        $this->appKey = $appKey;

        $this->client = new Client([
            'base_uri' => $this->baseUri
        ]);
    }

    /**
     * @param $url
     * @return string
     */
    final protected function execute($url)
    {
        $res = $this->client->get($url);

        return $res->getBody()->getContents();
    }

    /**
     * @param $baseMethod
     * @param $subMethods
     * @param $version
     * @param $responseType
     * @param array $data
     * @return string
     */
    final protected function buildUri($baseMethod, $subMethods, $version, $responseType, $data = [])
    {
        $baseMethod = trim($baseMethod, '/');
        $subMethods = trim($subMethods, '/');

        $parameters = $this->buildQuery($data);

        return $baseMethod . '/rest/' . $version . '/' . $responseType . '/' . $subMethods . $parameters;
    }

    /**
     * @param $data
     * @return string
     */
    final private function buildQuery($data)
    {
        $data['appId'] = $this->appId;
        $data['appKey'] = $this->appKey;

        return $parameters = '?' . http_build_query($data);
    }

    /**
     * @param $method
     * @param $year
     * @param $month
     * @param $day
     * @return string
     * @throws Exception
     */
    final protected function buildMethodViaDate($method, $year, $month, $day)
    {
        if (!is_null($year) or !is_null($month) or !is_null($day)) {

            if (!isset($year, $month, $day)) {
                throw new Exception('Поля year, month, day должны быть заполнены полностью или отсутствовать вообще.');
            }

            $method .= "/{$year}/{$month}/{$day}";
        }

        return $method;
    }

    /**
     * @param $method
     * @param array $data
     * @return mixed|string
     * @throws FlightStatsException
     */
    final protected function get($method, $data = [])
    {
        $uri = $this->buildUri($this->baseMethod, $method, $this->version, $this->responseType, $data);

        $response = $this->execute($uri);
        $json = $this->prepareToJson($response);

        return $this->jsonToObject($json);
    }

    /**
     * @param $response
     * @return mixed
     * @throws FlightStatsException
     */
    final protected function prepareToJson($response)
    {
        $content = json_decode($response);

        if (isset($content->error)) {
            throw new FlightStatsException($content->error->errorCode . ': ' . $content->error->errorMessage, $content->error->httpStatusCode);
        }

        return $content;
    }

    /**
     * @param $content
     * @return array
     */
    protected function jsonToObject($content)
    {
        $data = [];

        if (isset($content->{$this->objectKey})) {
            foreach ($content->{$this->objectKey} as $key => $value) {
                $data[] = new $this->objectClassName($value);
            }
        }

        return $data;
    }

    /**
     * @return string
     */
    final public function getBaseMethod()
    {
        return $this->baseMethod;
    }

    /**
     * @param string $baseMethod
     */
    final public function setBaseMethod($baseMethod)
    {
        $this->baseMethod = $baseMethod;
    }

    /**
     * @return string
     */
    final public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * @param string $responseType
     */
    final public function setResponseType($responseType)
    {
        $this->responseType = $responseType;
    }

    /**
     * @return string
     */
    final public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    final public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    final public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     */
    final public function setAppId($appId)
    {
        $this->appId = $appId;
    }

    /**
     * @return string
     */
    final public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * @param string $appKey
     */
    final public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
    }

    /**
     * @return string
     */
    final public function getBaseUri()
    {
        return $this->baseUri;
    }

    /**
     * @param string $baseUri
     */
    final public function setBaseUri($baseUri)
    {
        $this->baseUri = $baseUri;
    }

    /**
     * @return Client
     */
    final public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    final public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    final public function getObjectName()
    {
        return $this->objectClassName;
    }

    /**
     * @param mixed $objectClassName
     */
    final public function setObjectName($objectClassName)
    {
        $this->objectClassName = $objectClassName;
    }

    /**
     * @return mixed
     */
    final public function getObjectClassName()
    {
        return $this->objectClassName;
    }

    /**
     * @param mixed $objectClassName
     */
    final public function setObjectClassName($objectClassName)
    {
        $this->objectClassName = $objectClassName;
    }

    /**
     * @return mixed
     */
    final public function getObjectKey()
    {
        return $this->objectKey;
    }

    /**
     * @param mixed $objectKey
     */
    final public function setObjectKey($objectKey)
    {
        $this->objectKey = $objectKey;
    }
}