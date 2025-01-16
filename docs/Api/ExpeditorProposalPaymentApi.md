# MagDv\Cargomart\ExpeditorProposalPaymentApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorProposalIdCarrierPaymentGet()**](ExpeditorProposalPaymentApi.md#apiV2ExpeditorProposalIdCarrierPaymentGet) | **GET** /api/v2/expeditor-proposal/{id}/carrier-payment | Получения списка оплат
[**apiV2ExpeditorProposalIdCarrierPaymentPut()**](ExpeditorProposalPaymentApi.md#apiV2ExpeditorProposalIdCarrierPaymentPut) | **PUT** /api/v2/expeditor-proposal/{id}/carrier-payment | Создание или обновление информации о платеже перевозчику.
[**apiV2ExpeditorProposalIdConsignorExpeditorPaymentPut()**](ExpeditorProposalPaymentApi.md#apiV2ExpeditorProposalIdConsignorExpeditorPaymentPut) | **PUT** /api/v2/expeditor-proposal/{id}/consignor-expeditor-payment | Создания или обновления информации об оплате заказчиком счёта экспедитора
[**apiV2ExpeditorProposalIdPaymentGet()**](ExpeditorProposalPaymentApi.md#apiV2ExpeditorProposalIdPaymentGet) | **GET** /api/v2/expeditor-proposal/{id}/payment | Список оплат по счёту


## `apiV2ExpeditorProposalIdCarrierPaymentGet()`

```php
apiV2ExpeditorProposalIdCarrierPaymentGet($id): \MagDv\Cargomart\Dto\ProposalPaymentResponse
```

Получения списка оплат

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalPaymentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdCarrierPaymentGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalPaymentApi->apiV2ExpeditorProposalIdCarrierPaymentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора |

### Return type

[**\MagDv\Cargomart\Dto\ProposalPaymentResponse**](../Model/ProposalPaymentResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdCarrierPaymentPut()`

```php
apiV2ExpeditorProposalIdCarrierPaymentPut($id, $proposal_payment_request): \MagDv\Cargomart\Dto\ProposalPaymentResponse
```

Создание или обновление информации о платеже перевозчику.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalPaymentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора
$proposal_payment_request = new \MagDv\Cargomart\Dto\ProposalPaymentRequest(); // \MagDv\Cargomart\Dto\ProposalPaymentRequest

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdCarrierPaymentPut($id, $proposal_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalPaymentApi->apiV2ExpeditorProposalIdCarrierPaymentPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора |
 **proposal_payment_request** | [**\MagDv\Cargomart\Dto\ProposalPaymentRequest**](../Model/ProposalPaymentRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ProposalPaymentResponse**](../Model/ProposalPaymentResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdConsignorExpeditorPaymentPut()`

```php
apiV2ExpeditorProposalIdConsignorExpeditorPaymentPut($id, $expeditor_proposal_consignor_expeditor_payment_request): \MagDv\Cargomart\Dto\ExpeditorProposalPaymentResponse
```

Создания или обновления информации об оплате заказчиком счёта экспедитора

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalPaymentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора
$expeditor_proposal_consignor_expeditor_payment_request = new \MagDv\Cargomart\Dto\ExpeditorProposalConsignorExpeditorPaymentRequest(); // \MagDv\Cargomart\Dto\ExpeditorProposalConsignorExpeditorPaymentRequest

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdConsignorExpeditorPaymentPut($id, $expeditor_proposal_consignor_expeditor_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalPaymentApi->apiV2ExpeditorProposalIdConsignorExpeditorPaymentPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора |
 **expeditor_proposal_consignor_expeditor_payment_request** | [**\MagDv\Cargomart\Dto\ExpeditorProposalConsignorExpeditorPaymentRequest**](../Model/ExpeditorProposalConsignorExpeditorPaymentRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorProposalPaymentResponse**](../Model/ExpeditorProposalPaymentResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdPaymentGet()`

```php
apiV2ExpeditorProposalIdPaymentGet($id): \MagDv\Cargomart\Dto\ExpeditorProposalPaymentResponse
```

Список оплат по счёту

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalPaymentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdPaymentGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalPaymentApi->apiV2ExpeditorProposalIdPaymentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorProposalPaymentResponse**](../Model/ExpeditorProposalPaymentResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
