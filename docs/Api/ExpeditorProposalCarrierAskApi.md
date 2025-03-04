# MagDv\Cargomart\ExpeditorProposalCarrierAskApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorProposalIdCarrierAskGet()**](ExpeditorProposalCarrierAskApi.md#apiV2ExpeditorProposalIdCarrierAskGet) | **GET** /api/v2/expeditor-proposal/{id}/carrier-ask | Список ставок от перевозчиков для Экспедитора.


## `apiV2ExpeditorProposalIdCarrierAskGet()`

```php
apiV2ExpeditorProposalIdCarrierAskGet($id): \MagDv\Cargomart\Dto\ProposalCarrierAsksResponse
```

Список ставок от перевозчиков для Экспедитора.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalCarrierAskApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор заявки Экспедитора.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdCarrierAskGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalCarrierAskApi->apiV2ExpeditorProposalIdCarrierAskGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заявки Экспедитора. |

### Return type

[**\MagDv\Cargomart\Dto\ProposalCarrierAsksResponse**](../Model/ProposalCarrierAsksResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
