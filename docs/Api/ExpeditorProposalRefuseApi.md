# MagDv\Cargomart\ExpeditorProposalRefuseApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorProposalIdRefuseCarrierPost()**](ExpeditorProposalRefuseApi.md#apiV2ExpeditorProposalIdRefuseCarrierPost) | **POST** /api/v2/expeditor-proposal/{id}/refuse-carrier | Оформить отказ Экспедитора от Перевозчика.
[**apiV2ExpeditorProposalIdRefusePost()**](ExpeditorProposalRefuseApi.md#apiV2ExpeditorProposalIdRefusePost) | **POST** /api/v2/expeditor-proposal/{id}/refuse | Оформить отказ Экспедитора от заказа.


## `apiV2ExpeditorProposalIdRefuseCarrierPost()`

```php
apiV2ExpeditorProposalIdRefuseCarrierPost($id, $proposal_refuse_carrier_request): \MagDv\Cargomart\Dto\ProposalCardResponse
```

Оформить отказ Экспедитора от Перевозчика.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalRefuseApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.
$proposal_refuse_carrier_request = new \MagDv\Cargomart\Dto\ProposalRefuseCarrierRequest(); // \MagDv\Cargomart\Dto\ProposalRefuseCarrierRequest

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdRefuseCarrierPost($id, $proposal_refuse_carrier_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalRefuseApi->apiV2ExpeditorProposalIdRefuseCarrierPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |
 **proposal_refuse_carrier_request** | [**\MagDv\Cargomart\Dto\ProposalRefuseCarrierRequest**](../Model/ProposalRefuseCarrierRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ProposalCardResponse**](../Model/ProposalCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdRefusePost()`

```php
apiV2ExpeditorProposalIdRefusePost($id, $proposal_refuse_request): \MagDv\Cargomart\Dto\ProposalCardResponse
```

Оформить отказ Экспедитора от заказа.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalRefuseApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.
$proposal_refuse_request = new \MagDv\Cargomart\Dto\ProposalRefuseRequest(); // \MagDv\Cargomart\Dto\ProposalRefuseRequest

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdRefusePost($id, $proposal_refuse_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalRefuseApi->apiV2ExpeditorProposalIdRefusePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |
 **proposal_refuse_request** | [**\MagDv\Cargomart\Dto\ProposalRefuseRequest**](../Model/ProposalRefuseRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ProposalCardResponse**](../Model/ProposalCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
