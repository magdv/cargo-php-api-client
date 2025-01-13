# MagDv\Cargomart\ExpeditorOfferApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorProposalIdExpeditorOfferGet()**](ExpeditorOfferApi.md#apiV2ExpeditorProposalIdExpeditorOfferGet) | **GET** /api/v2/expeditor-proposal/{id}/expeditor-offer | Список предложений от перевозчиков для экспедитора.
[**apiV2OrderOrderIdExpeditorOfferGet()**](ExpeditorOfferApi.md#apiV2OrderOrderIdExpeditorOfferGet) | **GET** /api/v2/order/{orderId}/expeditor-offer | Список предложений от перевозчиков для отправителя.
[**apiV2OrderOrderIdExpeditorOfferPost()**](ExpeditorOfferApi.md#apiV2OrderOrderIdExpeditorOfferPost) | **POST** /api/v2/order/{orderId}/expeditor-offer | Создание или замена предложения перевозчика по заказу
[**apiV2OrderOrderIdNegotiatePost()**](ExpeditorOfferApi.md#apiV2OrderOrderIdNegotiatePost) | **POST** /api/v2/order/{orderId}/negotiate | Изменение заказчиком условий заказа, чтобы ближе соответствовать поступившим предложениям от перевозчиков


## `apiV2ExpeditorProposalIdExpeditorOfferGet()`

```php
apiV2ExpeditorProposalIdExpeditorOfferGet($id): \MagDv\Cargomart\Dto\ProposalOffersListResponse
```

Список предложений от перевозчиков для экспедитора.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorOfferApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdExpeditorOfferGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorOfferApi->apiV2ExpeditorProposalIdExpeditorOfferGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |

### Return type

[**\MagDv\Cargomart\Dto\ProposalOffersListResponse**](../Model/ProposalOffersListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdExpeditorOfferGet()`

```php
apiV2OrderOrderIdExpeditorOfferGet($order_id): \MagDv\Cargomart\Dto\ExpeditorOffersResponse
```

Список предложений от перевозчиков для отправителя.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorOfferApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заказа отправителя

try {
    $result = $apiInstance->apiV2OrderOrderIdExpeditorOfferGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorOfferApi->apiV2OrderOrderIdExpeditorOfferGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа отправителя |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorOffersResponse**](../Model/ExpeditorOffersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdExpeditorOfferPost()`

```php
apiV2OrderOrderIdExpeditorOfferPost($order_id, $expeditor_offer_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Создание или замена предложения перевозчика по заказу

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorOfferApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заказа
$expeditor_offer_request = new \MagDv\Cargomart\Dto\ExpeditorOfferRequest(); // \MagDv\Cargomart\Dto\ExpeditorOfferRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdExpeditorOfferPost($order_id, $expeditor_offer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorOfferApi->apiV2OrderOrderIdExpeditorOfferPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |
 **expeditor_offer_request** | [**\MagDv\Cargomart\Dto\ExpeditorOfferRequest**](../Model/ExpeditorOfferRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdNegotiatePost()`

```php
apiV2OrderOrderIdNegotiatePost($order_id, $order_negotiate_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Изменение заказчиком условий заказа, чтобы ближе соответствовать поступившим предложениям от перевозчиков

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorOfferApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заказа
$order_negotiate_request = new \MagDv\Cargomart\Dto\OrderNegotiateRequest(); // \MagDv\Cargomart\Dto\OrderNegotiateRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdNegotiatePost($order_id, $order_negotiate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorOfferApi->apiV2OrderOrderIdNegotiatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |
 **order_negotiate_request** | [**\MagDv\Cargomart\Dto\OrderNegotiateRequest**](../Model/OrderNegotiateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
