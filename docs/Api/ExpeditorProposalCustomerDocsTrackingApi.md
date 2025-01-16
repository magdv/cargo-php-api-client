# MagDv\Cargomart\ExpeditorProposalCustomerDocsTrackingApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorProposalIdCustomerDocsTrackingPost()**](ExpeditorProposalCustomerDocsTrackingApi.md#apiV2ExpeditorProposalIdCustomerDocsTrackingPost) | **POST** /api/v2/expeditor-proposal/{id}/customer-docs-tracking | Добавление трек-номера отслеживания отправления с документами для заказчика


## `apiV2ExpeditorProposalIdCustomerDocsTrackingPost()`

```php
apiV2ExpeditorProposalIdCustomerDocsTrackingPost($id, $proposal_customer_docs_tracking_request)
```

Добавление трек-номера отслеживания отправления с документами для заказчика

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalCustomerDocsTrackingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор заявки Экспедитора.
$proposal_customer_docs_tracking_request = new \MagDv\Cargomart\Dto\ProposalCustomerDocsTrackingRequest(); // \MagDv\Cargomart\Dto\ProposalCustomerDocsTrackingRequest

try {
    $apiInstance->apiV2ExpeditorProposalIdCustomerDocsTrackingPost($id, $proposal_customer_docs_tracking_request);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalCustomerDocsTrackingApi->apiV2ExpeditorProposalIdCustomerDocsTrackingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заявки Экспедитора. |
 **proposal_customer_docs_tracking_request** | [**\MagDv\Cargomart\Dto\ProposalCustomerDocsTrackingRequest**](../Model/ProposalCustomerDocsTrackingRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
