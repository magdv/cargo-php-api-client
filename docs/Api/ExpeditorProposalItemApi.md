# MagDv\Cargomart\ExpeditorProposalItemApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorEcnGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorEcnGet) | **GET** /api/v2/expeditor-ecn | Получение списка ЭТрН
[**apiV2ExpeditorEcnIdGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorEcnIdGet) | **GET** /api/v2/expeditor-ecn/{id} | Получение ЭТрН по ID
[**apiV2ExpeditorEcnIdHistoryGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorEcnIdHistoryGet) | **GET** /api/v2/expeditor-ecn/{id}/history | История ЭТрН
[**apiV2ExpeditorEcnIdSignPost()**](ExpeditorProposalItemApi.md#apiV2ExpeditorEcnIdSignPost) | **POST** /api/v2/expeditor-ecn/{id}/sign | Подписать ЭТрН
[**apiV2ExpeditorProposalIdBidGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdBidGet) | **GET** /api/v2/expeditor-proposal/{id}/bid | Список ставок от перевозчиков.
[**apiV2ExpeditorProposalIdDenyBankingDetailsPost()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdDenyBankingDetailsPost) | **POST** /api/v2/expeditor-proposal/{id}/deny-banking-details | Пометить банковские реквизиты ошибочными.
[**apiV2ExpeditorProposalIdEcnGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdEcnGet) | **GET** /api/v2/expeditor-proposal/{id}/ecn | Получение списка ЭТрН у заказа
[**apiV2ExpeditorProposalIdEcnPost()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdEcnPost) | **POST** /api/v2/expeditor-proposal/{id}/ecn | Создание ЭТрН для заказа.
[**apiV2ExpeditorProposalIdExpeditorOfferGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdExpeditorOfferGet) | **GET** /api/v2/expeditor-proposal/{id}/expeditor-offer | Список предложений от перевозчиков для экспедитора.
[**apiV2ExpeditorProposalIdGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdGet) | **GET** /api/v2/expeditor-proposal/{id} | Получение информации для карточки заказа Экспедитора.
[**apiV2ExpeditorProposalIdPatchPost()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdPatchPost) | **POST** /api/v2/expeditor-proposal/{id}/patch | Создание запроса на изменение заказа экспедитором.
[**apiV2ExpeditorProposalIdPinGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdPinGet) | **GET** /api/v2/expeditor-proposal/{id}/pin | Список пользователей, пометивших флагом заказ перевозчика.
[**apiV2ExpeditorProposalIdRoadmapGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdRoadmapGet) | **GET** /api/v2/expeditor-proposal/{id}/roadmap | Получение роадмап
[**apiV2ExpeditorProposalIdRoutePathGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdRoutePathGet) | **GET** /api/v2/expeditor-proposal/{id}/route-path | Получение данных по точкам маршрута.
[**apiV2ExpeditorProposalIdSignedDocumentGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdSignedDocumentGet) | **GET** /api/v2/expeditor-proposal/{id}/signed-document | Получение списка документов заявки со списком титулов
[**apiV2ExpeditorProposalIdSimpleDocumentsGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdSimpleDocumentsGet) | **GET** /api/v2/expeditor-proposal/{id}/simple-documents | Получение списка документов заявки со списком титулов
[**apiV2ExpeditorProposalIdVisitorGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdVisitorGet) | **GET** /api/v2/expeditor-proposal/{id}/visitor | Список пользователей, просмотревших заказ перевозчика.
[**getProposalActNonDeliveryCar()**](ExpeditorProposalItemApi.md#getProposalActNonDeliveryCar) | **GET** /api/v2/expeditor-proposal/{uuid}/digital-act-non-delivery-car | Получить данные электронного акта о неподаче машины на погрузку
[**updateExpeditorProposalCarrierTrackingNumber()**](ExpeditorProposalItemApi.md#updateExpeditorProposalCarrierTrackingNumber) | **POST** /api/v2/expeditor-proposal/{id}/original-docs-tracking-number | Редактирование трек-номера перевозчика


## `apiV2ExpeditorEcnGet()`

```php
apiV2ExpeditorEcnGet($filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_status, $page, $per_page): \MagDv\Cargomart\Dto\OrderEcnListResponse
```

Получение списка ЭТрН

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$filter_index_from = 56; // int | Индекс пункта откуда.
$filter_index_to = 56; // int | Индекс пункта куда.
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnType(); // \MagDv\Cargomart\Dto\EcnType | Тип ТРН.
$filter_status_group = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnStatusGroup(); // \MagDv\Cargomart\Dto\EcnStatusGroup | Обобщенный статус ТРН.
$filter_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnStatus(); // \MagDv\Cargomart\Dto\EcnStatus | Статус ТРН.
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2ExpeditorEcnGet($filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_status, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorEcnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_index_from** | **int**| Индекс пункта откуда. | [optional]
 **filter_index_to** | **int**| Индекс пункта куда. | [optional]
 **filter_type** | [**\MagDv\Cargomart\Dto\EcnType**](../Model/.md)| Тип ТРН. | [optional]
 **filter_status_group** | [**\MagDv\Cargomart\Dto\EcnStatusGroup**](../Model/.md)| Обобщенный статус ТРН. | [optional]
 **filter_status** | [**\MagDv\Cargomart\Dto\EcnStatus**](../Model/.md)| Статус ТРН. | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnListResponse**](../Model/OrderEcnListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorEcnIdGet()`

```php
apiV2ExpeditorEcnIdGet($id): \MagDv\Cargomart\Dto\OrderEcnResponse
```

Получение ЭТрН по ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор ЭТРН.

try {
    $result = $apiInstance->apiV2ExpeditorEcnIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorEcnIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор ЭТРН. |

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnResponse**](../Model/OrderEcnResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorEcnIdHistoryGet()`

```php
apiV2ExpeditorEcnIdHistoryGet($id): \MagDv\Cargomart\Dto\OrderEcnHistoryResponse
```

История ЭТрН

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор Этрн.

try {
    $result = $apiInstance->apiV2ExpeditorEcnIdHistoryGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorEcnIdHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор Этрн. |

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnHistoryResponse**](../Model/OrderEcnHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorEcnIdSignPost()`

```php
apiV2ExpeditorEcnIdSignPost($id, $expeditor_ecn_sign_request): \MagDv\Cargomart\Dto\OrderEcnResponse
```

Подписать ЭТрН

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор Этрн.
$expeditor_ecn_sign_request = new \MagDv\Cargomart\Dto\ExpeditorEcnSignRequest(); // \MagDv\Cargomart\Dto\ExpeditorEcnSignRequest

try {
    $result = $apiInstance->apiV2ExpeditorEcnIdSignPost($id, $expeditor_ecn_sign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorEcnIdSignPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор Этрн. |
 **expeditor_ecn_sign_request** | [**\MagDv\Cargomart\Dto\ExpeditorEcnSignRequest**](../Model/ExpeditorEcnSignRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnResponse**](../Model/OrderEcnResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdBidGet()`

```php
apiV2ExpeditorProposalIdBidGet($id): \MagDv\Cargomart\Dto\BidListResponse
```

Список ставок от перевозчиков.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdBidGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdBidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |

### Return type

[**\MagDv\Cargomart\Dto\BidListResponse**](../Model/BidListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdDenyBankingDetailsPost()`

```php
apiV2ExpeditorProposalIdDenyBankingDetailsPost($id, $deny_banking_details_request)
```

Пометить банковские реквизиты ошибочными.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.
$deny_banking_details_request = new \MagDv\Cargomart\Dto\DenyBankingDetailsRequest(); // \MagDv\Cargomart\Dto\DenyBankingDetailsRequest

try {
    $apiInstance->apiV2ExpeditorProposalIdDenyBankingDetailsPost($id, $deny_banking_details_request);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdDenyBankingDetailsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |
 **deny_banking_details_request** | [**\MagDv\Cargomart\Dto\DenyBankingDetailsRequest**](../Model/DenyBankingDetailsRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdEcnGet()`

```php
apiV2ExpeditorProposalIdEcnGet($id, $filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_is_active, $page, $per_page): \MagDv\Cargomart\Dto\OrderEcnListResponse
```

Получение списка ЭТрН у заказа

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа.
$filter_index_from = 56; // int | Индекс пункта откуда.
$filter_index_to = 56; // int | Индекс пункта куда.
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnType(); // \MagDv\Cargomart\Dto\EcnType | Тип ТРН.
$filter_status_group = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnStatusGroup(); // \MagDv\Cargomart\Dto\EcnStatusGroup | Обобщенный статус ТРН.
$filter_is_active = True; // bool | Выбрать только активные.
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdEcnGet($id, $filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_is_active, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdEcnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа. |
 **filter_index_from** | **int**| Индекс пункта откуда. | [optional]
 **filter_index_to** | **int**| Индекс пункта куда. | [optional]
 **filter_type** | [**\MagDv\Cargomart\Dto\EcnType**](../Model/.md)| Тип ТРН. | [optional]
 **filter_status_group** | [**\MagDv\Cargomart\Dto\EcnStatusGroup**](../Model/.md)| Обобщенный статус ТРН. | [optional]
 **filter_is_active** | **bool**| Выбрать только активные. | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnListResponse**](../Model/OrderEcnListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdEcnPost()`

```php
apiV2ExpeditorProposalIdEcnPost($id, $ecn_additional_data): \MagDv\Cargomart\Dto\OrderEcnResponse
```

Создание ЭТрН для заказа.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.
$ecn_additional_data = new \MagDv\Cargomart\Dto\EcnAdditionalData(); // \MagDv\Cargomart\Dto\EcnAdditionalData

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdEcnPost($id, $ecn_additional_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdEcnPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |
 **ecn_additional_data** | [**\MagDv\Cargomart\Dto\EcnAdditionalData**](../Model/EcnAdditionalData.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnResponse**](../Model/OrderEcnResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdExpeditorOfferGet()`

```php
apiV2ExpeditorProposalIdExpeditorOfferGet($id): \MagDv\Cargomart\Dto\ProposalOffersListResponse
```

Список предложений от перевозчиков для экспедитора.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdExpeditorOfferGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdExpeditorOfferGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ExpeditorProposalIdGet()`

```php
apiV2ExpeditorProposalIdGet($id): \MagDv\Cargomart\Dto\ProposalCardResponse
```

Получение информации для карточки заказа Экспедитора.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |

### Return type

[**\MagDv\Cargomart\Dto\ProposalCardResponse**](../Model/ProposalCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdPatchPost()`

```php
apiV2ExpeditorProposalIdPatchPost($id, $order_patch_request): \MagDv\Cargomart\Dto\OrderPatchResponse
```

Создание запроса на изменение заказа экспедитором.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.
$order_patch_request = new \MagDv\Cargomart\Dto\OrderPatchRequest(); // \MagDv\Cargomart\Dto\OrderPatchRequest

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdPatchPost($id, $order_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdPatchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |
 **order_patch_request** | [**\MagDv\Cargomart\Dto\OrderPatchRequest**](../Model/OrderPatchRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderPatchResponse**](../Model/OrderPatchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdPinGet()`

```php
apiV2ExpeditorProposalIdPinGet($id): \MagDv\Cargomart\Dto\ProposalUsersListResponse
```

Список пользователей, пометивших флагом заказ перевозчика.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdPinGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdPinGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |

### Return type

[**\MagDv\Cargomart\Dto\ProposalUsersListResponse**](../Model/ProposalUsersListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdRoadmapGet()`

```php
apiV2ExpeditorProposalIdRoadmapGet($id): \MagDv\Cargomart\Dto\OrderRoadmapListResponse
```

Получение роадмап

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdRoadmapGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdRoadmapGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderRoadmapListResponse**](../Model/OrderRoadmapListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdRoutePathGet()`

```php
apiV2ExpeditorProposalIdRoutePathGet($id): \MagDv\Cargomart\Dto\ItineraryListResponse
```

Получение данных по точкам маршрута.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdRoutePathGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdRoutePathGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |

### Return type

[**\MagDv\Cargomart\Dto\ItineraryListResponse**](../Model/ItineraryListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdSignedDocumentGet()`

```php
apiV2ExpeditorProposalIdSignedDocumentGet($id): \MagDv\Cargomart\Dto\ExpeditorProposalSignedDocumentListResponse
```

Получение списка документов заявки со списком титулов

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заявки Экспедитора.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdSignedDocumentGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdSignedDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заявки Экспедитора. |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorProposalSignedDocumentListResponse**](../Model/ExpeditorProposalSignedDocumentListResponse.md)

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



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заявки Экспедитора.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdSimpleDocumentsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdSimpleDocumentsGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ExpeditorProposalIdVisitorGet()`

```php
apiV2ExpeditorProposalIdVisitorGet($id): \MagDv\Cargomart\Dto\ProposalUsersListResponse
```

Список пользователей, просмотревших заказ перевозчика.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdVisitorGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdVisitorGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |

### Return type

[**\MagDv\Cargomart\Dto\ProposalUsersListResponse**](../Model/ProposalUsersListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProposalActNonDeliveryCar()`

```php
getProposalActNonDeliveryCar($uuid): \MagDv\Cargomart\Dto\OrderActNonDeliveryCarResponse
```

Получить данные электронного акта о неподаче машины на погрузку

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID объекта

try {
    $result = $apiInstance->getProposalActNonDeliveryCar($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->getProposalActNonDeliveryCar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID объекта |

### Return type

[**\MagDv\Cargomart\Dto\OrderActNonDeliveryCarResponse**](../Model/OrderActNonDeliveryCarResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExpeditorProposalCarrierTrackingNumber()`

```php
updateExpeditorProposalCarrierTrackingNumber($id, $tracking_number_request): \MagDv\Cargomart\Dto\ProposalCardResponse
```

Редактирование трек-номера перевозчика

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.
$tracking_number_request = new \MagDv\Cargomart\Dto\TrackingNumberRequest(); // \MagDv\Cargomart\Dto\TrackingNumberRequest

try {
    $result = $apiInstance->updateExpeditorProposalCarrierTrackingNumber($id, $tracking_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->updateExpeditorProposalCarrierTrackingNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |
 **tracking_number_request** | [**\MagDv\Cargomart\Dto\TrackingNumberRequest**](../Model/TrackingNumberRequest.md)|  |

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
