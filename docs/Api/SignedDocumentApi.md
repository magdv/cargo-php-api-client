# MagDv\Cargomart\SignedDocumentApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderOrderIdSignedDocumentGet()**](SignedDocumentApi.md#apiV2OrderOrderIdSignedDocumentGet) | **GET** /api/v2/order/{orderId}/signed-document | Получение документов заказа со списком титулов


## `apiV2OrderOrderIdSignedDocumentGet()`

```php
apiV2OrderOrderIdSignedDocumentGet($order_id): \MagDv\Cargomart\Dto\OrderSignedDocumentListResponse
```

Получение документов заказа со списком титулов

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\SignedDocumentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdSignedDocumentGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignedDocumentApi->apiV2OrderOrderIdSignedDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderSignedDocumentListResponse**](../Model/OrderSignedDocumentListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)