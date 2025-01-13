# MagDv\Cargomart\SimpleDocumentApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorProposalIdSimpleDocumentGet()**](SimpleDocumentApi.md#apiV2ExpeditorProposalIdSimpleDocumentGet) | **GET** /api/v2/expeditor-proposal/{id}/simple-document | Получение иформации для карточки заказа Экспедитора.
[**apiV2ExpeditorProposalIdSimpleDocumentsGet()**](SimpleDocumentApi.md#apiV2ExpeditorProposalIdSimpleDocumentsGet) | **GET** /api/v2/expeditor-proposal/{id}/simple-documents | Получение списка документов заявки со списком титулов
[**apiV2OrderOrderIdSimpleDocumentGet()**](SimpleDocumentApi.md#apiV2OrderOrderIdSimpleDocumentGet) | **GET** /api/v2/order/{orderId}/simple-document | Получение документов заказа со списком титулов


## `apiV2ExpeditorProposalIdSimpleDocumentGet()`

```php
apiV2ExpeditorProposalIdSimpleDocumentGet($id): \MagDv\Cargomart\Dto\OrderSimpleDocumentResponse
```

Получение иформации для карточки заказа Экспедитора.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\SimpleDocumentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Получение документа заказа со списком титулов

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdSimpleDocumentGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimpleDocumentApi->apiV2ExpeditorProposalIdSimpleDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Получение документа заказа со списком титулов |

### Return type

[**\MagDv\Cargomart\Dto\OrderSimpleDocumentResponse**](../Model/OrderSimpleDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdSimpleDocumentsGet()`

```php
apiV2ExpeditorProposalIdSimpleDocumentsGet($id): \MagDv\Cargomart\Dto\ProposalSimpleDocumentsResponse
```

Получение списка документов заявки со списком титулов

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\SimpleDocumentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заявки Экспедитора.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdSimpleDocumentsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimpleDocumentApi->apiV2ExpeditorProposalIdSimpleDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заявки Экспедитора. |

### Return type

[**\MagDv\Cargomart\Dto\ProposalSimpleDocumentsResponse**](../Model/ProposalSimpleDocumentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdSimpleDocumentGet()`

```php
apiV2OrderOrderIdSimpleDocumentGet($order_id): \MagDv\Cargomart\Dto\OrderSimpleDocumentResponse
```

Получение документов заказа со списком титулов

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\SimpleDocumentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdSimpleDocumentGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimpleDocumentApi->apiV2OrderOrderIdSimpleDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderSimpleDocumentResponse**](../Model/OrderSimpleDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
