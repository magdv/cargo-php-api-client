# MagDv\Cargomart\ExpeditorProposalDowntimeClaimApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProposalCarrierDowntimeClaimDirectToThirdParty()**](ExpeditorProposalDowntimeClaimApi.md#createProposalCarrierDowntimeClaimDirectToThirdParty) | **POST** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-direct-to-third-party | Перевыставление Экспедитором претензии о простое Заказчику
[**createProposalCarrierDowntimeClaimPayment()**](ExpeditorProposalDowntimeClaimApi.md#createProposalCarrierDowntimeClaimPayment) | **PUT** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-payment | Создания или обновления информации об оплате Экспедитором претензии о простое со стороны Перевозчика
[**createProposalCarrierDowntimeClaimReject()**](ExpeditorProposalDowntimeClaimApi.md#createProposalCarrierDowntimeClaimReject) | **POST** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-reject | Отказ Экспедитором претензии о простое
[**previewProposalCarrierDowntimeClaimPdf()**](ExpeditorProposalDowntimeClaimApi.md#previewProposalCarrierDowntimeClaimPdf) | **POST** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-pdf | Получить ссылку на превью документа претензии Перевозчика о простое по заявке
[**previewProposalExpeditorDowntimeClaimReject()**](ExpeditorProposalDowntimeClaimApi.md#previewProposalExpeditorDowntimeClaimReject) | **POST** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-reject-preview | Получить ссылку на превью документа отклонения Экспедитором претензии Перевозчика о простое по заявке
[**viewPdfProposalExpeditorDowntimeClaim()**](ExpeditorProposalDowntimeClaimApi.md#viewPdfProposalExpeditorDowntimeClaim) | **GET** /api/v2/expeditor-proposal/{id}/expeditor-downtime-claim-pdf | Превью документа претензии Экспедитора о простое по заявке
[**viewPdfProposalExpeditorDowntimeClaimReject()**](ExpeditorProposalDowntimeClaimApi.md#viewPdfProposalExpeditorDowntimeClaimReject) | **GET** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-reject-pdf | Превью документа отклонения Экспедитором претензии Перевозчика о простое по заявке
[**viewProposalCarrierDowntimeClaim()**](ExpeditorProposalDowntimeClaimApi.md#viewProposalCarrierDowntimeClaim) | **GET** /api/v2/expeditor-proposal/{id}/carrier-downtime-claim | Просмотр претензии о простое
[**viewProposalClaimList()**](ExpeditorProposalDowntimeClaimApi.md#viewProposalClaimList) | **GET** /api/v2/expeditor-proposal/{id}/claim | Просмотр списка претензий


## `createProposalCarrierDowntimeClaimDirectToThirdParty()`

```php
createProposalCarrierDowntimeClaimDirectToThirdParty($id, $body): \MagDv\Cargomart\Dto\ProposalDowntimeClaimResponse
```

Перевыставление Экспедитором претензии о простое Заказчику

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->createProposalCarrierDowntimeClaimDirectToThirdParty($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalDowntimeClaimApi->createProposalCarrierDowntimeClaimDirectToThirdParty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора |
 **body** | **object**|  |

### Return type

[**\MagDv\Cargomart\Dto\ProposalDowntimeClaimResponse**](../Model/ProposalDowntimeClaimResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProposalCarrierDowntimeClaimPayment()`

```php
createProposalCarrierDowntimeClaimPayment($id, $expeditor_proposal_consignor_expeditor_payment_request): \MagDv\Cargomart\Dto\ProposalPaymentResponse
```

Создания или обновления информации об оплате Экспедитором претензии о простое со стороны Перевозчика

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора
$expeditor_proposal_consignor_expeditor_payment_request = new \MagDv\Cargomart\Dto\ExpeditorProposalConsignorExpeditorPaymentRequest(); // \MagDv\Cargomart\Dto\ExpeditorProposalConsignorExpeditorPaymentRequest

try {
    $result = $apiInstance->createProposalCarrierDowntimeClaimPayment($id, $expeditor_proposal_consignor_expeditor_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalDowntimeClaimApi->createProposalCarrierDowntimeClaimPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора |
 **expeditor_proposal_consignor_expeditor_payment_request** | [**\MagDv\Cargomart\Dto\ExpeditorProposalConsignorExpeditorPaymentRequest**](../Model/ExpeditorProposalConsignorExpeditorPaymentRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ProposalPaymentResponse**](../Model/ProposalPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProposalCarrierDowntimeClaimReject()`

```php
createProposalCarrierDowntimeClaimReject($id, $proposal_carrier_downtime_claim_reject_request): \MagDv\Cargomart\Dto\ProposalDowntimeClaimResponse
```

Отказ Экспедитором претензии о простое

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора
$proposal_carrier_downtime_claim_reject_request = new \MagDv\Cargomart\Dto\ProposalCarrierDowntimeClaimRejectRequest(); // \MagDv\Cargomart\Dto\ProposalCarrierDowntimeClaimRejectRequest

try {
    $result = $apiInstance->createProposalCarrierDowntimeClaimReject($id, $proposal_carrier_downtime_claim_reject_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalDowntimeClaimApi->createProposalCarrierDowntimeClaimReject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора |
 **proposal_carrier_downtime_claim_reject_request** | [**\MagDv\Cargomart\Dto\ProposalCarrierDowntimeClaimRejectRequest**](../Model/ProposalCarrierDowntimeClaimRejectRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ProposalDowntimeClaimResponse**](../Model/ProposalDowntimeClaimResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewProposalCarrierDowntimeClaimPdf()`

```php
previewProposalCarrierDowntimeClaimPdf($id): \SplFileObject
```

Получить ссылку на превью документа претензии Перевозчика о простое по заявке

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора

try {
    $result = $apiInstance->previewProposalCarrierDowntimeClaimPdf($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalDowntimeClaimApi->previewProposalCarrierDowntimeClaimPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewProposalExpeditorDowntimeClaimReject()`

```php
previewProposalExpeditorDowntimeClaimReject($id, $proposal_carrier_downtime_claim_reject_request): \MagDv\Cargomart\Dto\FileV2Item
```

Получить ссылку на превью документа отклонения Экспедитором претензии Перевозчика о простое по заявке

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора
$proposal_carrier_downtime_claim_reject_request = new \MagDv\Cargomart\Dto\ProposalCarrierDowntimeClaimRejectRequest(); // \MagDv\Cargomart\Dto\ProposalCarrierDowntimeClaimRejectRequest

try {
    $result = $apiInstance->previewProposalExpeditorDowntimeClaimReject($id, $proposal_carrier_downtime_claim_reject_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalDowntimeClaimApi->previewProposalExpeditorDowntimeClaimReject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора |
 **proposal_carrier_downtime_claim_reject_request** | [**\MagDv\Cargomart\Dto\ProposalCarrierDowntimeClaimRejectRequest**](../Model/ProposalCarrierDowntimeClaimRejectRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\FileV2Item**](../Model/FileV2Item.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewPdfProposalExpeditorDowntimeClaim()`

```php
viewPdfProposalExpeditorDowntimeClaim($id): \SplFileObject
```

Превью документа претензии Экспедитора о простое по заявке

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора

try {
    $result = $apiInstance->viewPdfProposalExpeditorDowntimeClaim($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalDowntimeClaimApi->viewPdfProposalExpeditorDowntimeClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewPdfProposalExpeditorDowntimeClaimReject()`

```php
viewPdfProposalExpeditorDowntimeClaimReject($id, $reason): \SplFileObject
```

Превью документа отклонения Экспедитором претензии Перевозчика о простое по заявке

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора
$reason = 'reason_example'; // string | Причина.

try {
    $result = $apiInstance->viewPdfProposalExpeditorDowntimeClaimReject($id, $reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalDowntimeClaimApi->viewPdfProposalExpeditorDowntimeClaimReject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора |
 **reason** | **string**| Причина. |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewProposalCarrierDowntimeClaim()`

```php
viewProposalCarrierDowntimeClaim($id): \MagDv\Cargomart\Dto\ProposalDowntimeClaimResponse
```

Просмотр претензии о простое

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора

try {
    $result = $apiInstance->viewProposalCarrierDowntimeClaim($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalDowntimeClaimApi->viewProposalCarrierDowntimeClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора |

### Return type

[**\MagDv\Cargomart\Dto\ProposalDowntimeClaimResponse**](../Model/ProposalDowntimeClaimResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewProposalClaimList()`

```php
viewProposalClaimList($id): \MagDv\Cargomart\Dto\ProposalClaimListResponse
```

Просмотр списка претензий

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора

try {
    $result = $apiInstance->viewProposalClaimList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalDowntimeClaimApi->viewProposalClaimList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора |

### Return type

[**\MagDv\Cargomart\Dto\ProposalClaimListResponse**](../Model/ProposalClaimListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
