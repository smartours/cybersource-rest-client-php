<?php
/**
 * KeyGenerationApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;

/**
 * KeyGenerationApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KeyGenerationApi
{
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return KeyGenerationApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation generatePublicKey
     *
     * Generate Key
     *
     * @param \CyberSource\Model\GeneratePublicKeyRequest $generatePublicKeyRequest  (required)
     * @param string $format Indicator to enable the receipt of the Keys response in Flex 11+ format (JWT) or legacy (parameter not required) (optional, default to legacy)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\FlexV1KeysPost200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function generatePublicKey($generatePublicKeyRequest, $format = 'legacy')
    {
        list($response, $statusCode, $httpHeader) = $this->generatePublicKeyWithHttpInfo($generatePublicKeyRequest, $format);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation generatePublicKeyWithHttpInfo
     *
     * Generate Key
     *
     * @param \CyberSource\Model\GeneratePublicKeyRequest $generatePublicKeyRequest  (required)
     * @param string $format Indicator to enable the receipt of the Keys response in Flex 11+ format (JWT) or legacy (parameter not required) (optional, default to legacy)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\FlexV1KeysPost200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function generatePublicKeyWithHttpInfo($generatePublicKeyRequest, $format = 'legacy')
    {
        // verify the required parameter 'generatePublicKeyRequest' is set
        if ($generatePublicKeyRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $generatePublicKeyRequest when calling generatePublicKey');
        }
        // parse inputs
        $resourcePath = "/flex/v1/keys";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($format !== null) {
            $queryParams['format'] = $this->apiClient->getSerializer()->toQueryValue($format);
        }
        // body params
        $_tempBody = null;
        if (isset($generatePublicKeyRequest)) {
            $_tempBody = $generatePublicKeyRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\FlexV1KeysPost200Response',
                '/flex/v1/keys'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\FlexV1KeysPost200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\FlexV1KeysPost200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponseDefault', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
