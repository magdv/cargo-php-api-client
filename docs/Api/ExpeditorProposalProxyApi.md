# MagDv\Cargomart\ExpeditorProposalProxyApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorProposalIdProxyProxyIdCancellationPost()**](ExpeditorProposalProxyApi.md#apiV2ExpeditorProposalIdProxyProxyIdCancellationPost) | **POST** /api/v2/expeditor-proposal/{id}/proxy/{proxyId}/cancellation | Аннулировать доверенность.
[**apiV2ExpeditorProposalIdProxyProxyIdFilePost()**](ExpeditorProposalProxyApi.md#apiV2ExpeditorProposalIdProxyProxyIdFilePost) | **POST** /api/v2/expeditor-proposal/{id}/proxy/{proxyId}/file | Генерация файла доверенности на водителя с данными пользователя из ЭЦП.
[**apiV2ExpeditorProposalIdProxyProxyIdSignCancellationPost()**](ExpeditorProposalProxyApi.md#apiV2ExpeditorProposalIdProxyProxyIdSignCancellationPost) | **POST** /api/v2/expeditor-proposal/{id}/proxy/{proxyId}/sign-cancellation | Подписать аннулирование.
[**apiV2ExpeditorProposalIdProxyProxyIdSignPost()**](ExpeditorProposalProxyApi.md#apiV2ExpeditorProposalIdProxyProxyIdSignPost) | **POST** /api/v2/expeditor-proposal/{id}/proxy/{proxyId}/sign | Подписать доверенность.


## `apiV2ExpeditorProposalIdProxyProxyIdCancellationPost()`

```php
apiV2ExpeditorProposalIdProxyProxyIdCancellationPost($id, $proxy_id, $proposal_proxy_request): \MagDv\Cargomart\Dto\ProposalCardResponse
```

Аннулировать доверенность.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalProxyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.
$proxy_id = 'proxy_id_example'; // string | Идентификатор доверенности.
$proposal_proxy_request = new \MagDv\Cargomart\Dto\ProposalProxyRequest(); // \MagDv\Cargomart\Dto\ProposalProxyRequest

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdProxyProxyIdCancellationPost($id, $proxy_id, $proposal_proxy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalProxyApi->apiV2ExpeditorProposalIdProxyProxyIdCancellationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |
 **proxy_id** | **string**| Идентификатор доверенности. |
 **proposal_proxy_request** | [**\MagDv\Cargomart\Dto\ProposalProxyRequest**](../Model/ProposalProxyRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ProposalCardResponse**](../Model/ProposalCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdProxyProxyIdFilePost()`

```php
apiV2ExpeditorProposalIdProxyProxyIdFilePost($id, $proxy_id, $proposal_proxy_request): \MagDv\Cargomart\Dto\ProposalCardResponse
```

Генерация файла доверенности на водителя с данными пользователя из ЭЦП.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalProxyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.
$proxy_id = 'proxy_id_example'; // string | Идентификатор доверенности.
$proposal_proxy_request = new \MagDv\Cargomart\Dto\ProposalProxyRequest(); // \MagDv\Cargomart\Dto\ProposalProxyRequest

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdProxyProxyIdFilePost($id, $proxy_id, $proposal_proxy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalProxyApi->apiV2ExpeditorProposalIdProxyProxyIdFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |
 **proxy_id** | **string**| Идентификатор доверенности. |
 **proposal_proxy_request** | [**\MagDv\Cargomart\Dto\ProposalProxyRequest**](../Model/ProposalProxyRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ProposalCardResponse**](../Model/ProposalCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdProxyProxyIdSignCancellationPost()`

```php
apiV2ExpeditorProposalIdProxyProxyIdSignCancellationPost($id, $proxy_id, $proposal_proxy_sign_request): \MagDv\Cargomart\Dto\ProposalCardResponse
```

Подписать аннулирование.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalProxyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.
$proxy_id = 'proxy_id_example'; // string | Идентификатор доверенности.
$proposal_proxy_sign_request = new \MagDv\Cargomart\Dto\ProposalProxySignRequest(); // \MagDv\Cargomart\Dto\ProposalProxySignRequest

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdProxyProxyIdSignCancellationPost($id, $proxy_id, $proposal_proxy_sign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalProxyApi->apiV2ExpeditorProposalIdProxyProxyIdSignCancellationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |
 **proxy_id** | **string**| Идентификатор доверенности. |
 **proposal_proxy_sign_request** | [**\MagDv\Cargomart\Dto\ProposalProxySignRequest**](../Model/ProposalProxySignRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ProposalCardResponse**](../Model/ProposalCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdProxyProxyIdSignPost()`

```php
apiV2ExpeditorProposalIdProxyProxyIdSignPost($id, $proxy_id, $proposal_proxy_sign_request): \MagDv\Cargomart\Dto\ProposalCardResponse
```

Подписать доверенность.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalProxyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.
$proxy_id = 'proxy_id_example'; // string | Идентификатор доверенности.
$proposal_proxy_sign_request = new \MagDv\Cargomart\Dto\ProposalProxySignRequest(); // \MagDv\Cargomart\Dto\ProposalProxySignRequest

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdProxyProxyIdSignPost($id, $proxy_id, $proposal_proxy_sign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalProxyApi->apiV2ExpeditorProposalIdProxyProxyIdSignPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |
 **proxy_id** | **string**| Идентификатор доверенности. |
 **proposal_proxy_sign_request** | [**\MagDv\Cargomart\Dto\ProposalProxySignRequest**](../Model/ProposalProxySignRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ProposalCardResponse**](../Model/ProposalCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
