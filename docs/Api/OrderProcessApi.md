# MagDv\Cargomart\OrderProcessApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderOrderIdCarrierContactPatch()**](OrderProcessApi.md#apiV2OrderOrderIdCarrierContactPatch) | **PATCH** /api/v2/order/{orderId}/carrier-contact | Отправить список кураторов перевозчика для добавления.
[**apiV2OrderOrderIdCarrierRefusePost()**](OrderProcessApi.md#apiV2OrderOrderIdCarrierRefusePost) | **POST** /api/v2/order/{orderId}/carrier-refuse | Оформить отказ перевозчика.
[**apiV2OrderOrderIdConsignorContactPut()**](OrderProcessApi.md#apiV2OrderOrderIdConsignorContactPut) | **PUT** /api/v2/order/{orderId}/consignor-contact | Заменить список кураторов заказчика.
[**apiV2OrderOrderIdConsignorDocumentPost()**](OrderProcessApi.md#apiV2OrderOrderIdConsignorDocumentPost) | **POST** /api/v2/order/{orderId}/consignor-document | Загрузить документы отправителя.
[**apiV2OrderOrderIdConsignorRefusePost()**](OrderProcessApi.md#apiV2OrderOrderIdConsignorRefusePost) | **POST** /api/v2/order/{orderId}/consignor-refuse | Оформить отказ отправителя.
[**apiV2OrderOrderIdDocumentPost()**](OrderProcessApi.md#apiV2OrderOrderIdDocumentPost) | **POST** /api/v2/order/{orderId}/document | Загрузить документы перевозчика.
[**apiV2OrderOrderIdExpeditorAssignmentGet()**](OrderProcessApi.md#apiV2OrderOrderIdExpeditorAssignmentGet) | **GET** /api/v2/order/{orderId}/expeditor-assignment | Скачать поручение экспедитору.
[**apiV2OrderOrderIdFinishPost()**](OrderProcessApi.md#apiV2OrderOrderIdFinishPost) | **POST** /api/v2/order/{orderId}/finish | Ручное завершение заказа
[**apiV2OrderOrderIdGeneralPartnerDocumentPost()**](OrderProcessApi.md#apiV2OrderOrderIdGeneralPartnerDocumentPost) | **POST** /api/v2/order/{orderId}/general-partner-document | Генеральный партнер прикрепляет документы.
[**apiV2OrderOrderIdGeneralPartnerProposalTemplateGet()**](OrderProcessApi.md#apiV2OrderOrderIdGeneralPartnerProposalTemplateGet) | **GET** /api/v2/order/{orderId}/general-partner-proposal-template | Генеральный партнер. Скачать заяку на заказ для ГП.
[**apiV2OrderOrderIdGeneralPartnerProxyTemplateGet()**](OrderProcessApi.md#apiV2OrderOrderIdGeneralPartnerProxyTemplateGet) | **GET** /api/v2/order/{orderId}/general-partner-proxy-template | Генеральный партнер. Скачать доверенность на заказ для ГП.
[**apiV2OrderOrderIdGeneralPartnerTemplateApprovePost()**](OrderProcessApi.md#apiV2OrderOrderIdGeneralPartnerTemplateApprovePost) | **POST** /api/v2/order/{orderId}/general-partner-template-approve | Генеральный партнер создает документы из шаблонов.
[**apiV2OrderOrderIdInvoiceGpCarrierGet()**](OrderProcessApi.md#apiV2OrderOrderIdInvoiceGpCarrierGet) | **GET** /api/v2/order/{orderId}/invoice-gp-carrier | Получение данных о платежах генерального партнера для перевозчика
[**apiV2OrderOrderIdInvoiceGpCarrierPut()**](OrderProcessApi.md#apiV2OrderOrderIdInvoiceGpCarrierPut) | **PUT** /api/v2/order/{orderId}/invoice-gp-carrier | Добавление данных о платежах генерального партнера для перевозчика
[**apiV2OrderOrderIdMonitoringPost()**](OrderProcessApi.md#apiV2OrderOrderIdMonitoringPost) | **POST** /api/v2/order/{orderId}/monitoring | Добавить ссылку на отслеживание.
[**apiV2OrderOrderIdProposalGet()**](OrderProcessApi.md#apiV2OrderOrderIdProposalGet) | **GET** /api/v2/order/{orderId}/proposal | Скачать заявку на заказ.
[**apiV2OrderOrderIdProxyConsignorAdditionalInfoGet()**](OrderProcessApi.md#apiV2OrderOrderIdProxyConsignorAdditionalInfoGet) | **GET** /api/v2/order/{orderId}/proxy-consignor-additional-info | Получить добавочные данные, или проверить их наличие.
[**apiV2OrderOrderIdProxyConsignorAdditionalInfoPost()**](OrderProcessApi.md#apiV2OrderOrderIdProxyConsignorAdditionalInfoPost) | **POST** /api/v2/order/{orderId}/proxy-consignor-additional-info | Заполнить или изменить добавочные данные в будущую довереность на самовывоз c\\без факсимиле.
[**apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoGet()**](OrderProcessApi.md#apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoGet) | **GET** /api/v2/order/{orderId}/proxy-consignor-carrier-additional-info | Получить добавочные данные, или проверить их наличие.
[**apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoPatch()**](OrderProcessApi.md#apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoPatch) | **PATCH** /api/v2/order/{orderId}/proxy-consignor-carrier-additional-info | Заполнить или изменить добавочные данные в будущую довереность на самовывоз c\\без факсимиле.
[**apiV2OrderOrderIdProxyConsignorCarrierGet()**](OrderProcessApi.md#apiV2OrderOrderIdProxyConsignorCarrierGet) | **GET** /api/v2/order/{orderId}/proxy-consignor-carrier | Скачать доверенность на заказ для заказчика.
[**apiV2OrderOrderIdProxyConsignorCarrierSendPost()**](OrderProcessApi.md#apiV2OrderOrderIdProxyConsignorCarrierSendPost) | **POST** /api/v2/order/{orderId}/proxy-consignor-carrier-send | Отправить ссылку доверенности на самовывоз по email.
[**apiV2OrderOrderIdProxyConsignorCarrierWithFacsimileGet()**](OrderProcessApi.md#apiV2OrderOrderIdProxyConsignorCarrierWithFacsimileGet) | **GET** /api/v2/order/{orderId}/proxy-consignor-carrier-with-facsimile | Скачать доверенность на заказ для заказчика с факсимиле.
[**apiV2OrderOrderIdProxyConsignorEmailGet()**](OrderProcessApi.md#apiV2OrderOrderIdProxyConsignorEmailGet) | **GET** /api/v2/order/{orderId}/proxy-consignor-email | Получить список email для точки погрузки, для плеча.
[**apiV2OrderOrderIdProxyConsignorEmailPost()**](OrderProcessApi.md#apiV2OrderOrderIdProxyConsignorEmailPost) | **POST** /api/v2/order/{orderId}/proxy-consignor-email | Отправка доверенности на список email
[**apiV2OrderOrderIdProxyPost()**](OrderProcessApi.md#apiV2OrderOrderIdProxyPost) | **POST** /api/v2/order/{orderId}/proxy | Загрузить доверенность.
[**apiV2OrderOrderIdProxyTemplateGet()**](OrderProcessApi.md#apiV2OrderOrderIdProxyTemplateGet) | **GET** /api/v2/order/{orderId}/proxy-template | Скачать шаблон доверенности.
[**apiV2OrderOrderIdRefreshDriverPatch()**](OrderProcessApi.md#apiV2OrderOrderIdRefreshDriverPatch) | **PATCH** /api/v2/order/{orderId}/refresh-driver | Обновить данные водителя в заказе
[**apiV2OrderOrderIdRefreshTruckPatch()**](OrderProcessApi.md#apiV2OrderOrderIdRefreshTruckPatch) | **PATCH** /api/v2/order/{orderId}/refresh-truck | Обновить данные транспортного средства в заказе
[**apiV2OrderOrderIdRefuseAppealPost()**](OrderProcessApi.md#apiV2OrderOrderIdRefuseAppealPost) | **POST** /api/v2/order/{orderId}/refuse-appeal | Жалоба на отказ.
[**apiV2OrderOrderIdRefuseCancelPost()**](OrderProcessApi.md#apiV2OrderOrderIdRefuseCancelPost) | **POST** /api/v2/order/{orderId}/refuse-cancel | Отменить отказ от заказа.
[**apiV2OrderOrderIdRefusePost()**](OrderProcessApi.md#apiV2OrderOrderIdRefusePost) | **POST** /api/v2/order/{orderId}/refuse | Оформить отказ заказа Экспедитора.
[**apiV2OrderOrderIdRepeatPost()**](OrderProcessApi.md#apiV2OrderOrderIdRepeatPost) | **POST** /api/v2/order/{orderId}/repeat | Переразместить заказ.
[**apiV2OrderOrderIdReusePost()**](OrderProcessApi.md#apiV2OrderOrderIdReusePost) | **POST** /api/v2/order/{orderId}/reuse | Переразместить экспедиторский заказ.
[**apiV2OrderOrderIdTruckDriverPatch()**](OrderProcessApi.md#apiV2OrderOrderIdTruckDriverPatch) | **PATCH** /api/v2/order/{orderId}/truck-driver | Прикрепить к заказу водителя и машину.


## `apiV2OrderOrderIdCarrierContactPatch()`

```php
apiV2OrderOrderIdCarrierContactPatch($order_id, $carrier_contact_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Отправить список кураторов перевозчика для добавления.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.
$carrier_contact_request = new \MagDv\Cargomart\Dto\CarrierContactRequest(); // \MagDv\Cargomart\Dto\CarrierContactRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdCarrierContactPatch($order_id, $carrier_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdCarrierContactPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |
 **carrier_contact_request** | [**\MagDv\Cargomart\Dto\CarrierContactRequest**](../Model/CarrierContactRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdCarrierRefusePost()`

```php
apiV2OrderOrderIdCarrierRefusePost($order_id, $reason_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Оформить отказ перевозчика.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$reason_request = new \MagDv\Cargomart\Dto\ReasonRequest(); // \MagDv\Cargomart\Dto\ReasonRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdCarrierRefusePost($order_id, $reason_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdCarrierRefusePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **reason_request** | [**\MagDv\Cargomart\Dto\ReasonRequest**](../Model/ReasonRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdConsignorContactPut()`

```php
apiV2OrderOrderIdConsignorContactPut($order_id, $consignor_contact_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Заменить список кураторов заказчика.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.
$consignor_contact_request = new \MagDv\Cargomart\Dto\ConsignorContactRequest(); // \MagDv\Cargomart\Dto\ConsignorContactRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdConsignorContactPut($order_id, $consignor_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdConsignorContactPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |
 **consignor_contact_request** | [**\MagDv\Cargomart\Dto\ConsignorContactRequest**](../Model/ConsignorContactRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdConsignorDocumentPost()`

```php
apiV2OrderOrderIdConsignorDocumentPost($order_id, $order_document_file_id_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Загрузить документы отправителя.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$order_document_file_id_request = new \MagDv\Cargomart\Dto\OrderDocumentFileIdRequest(); // \MagDv\Cargomart\Dto\OrderDocumentFileIdRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdConsignorDocumentPost($order_id, $order_document_file_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdConsignorDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **order_document_file_id_request** | [**\MagDv\Cargomart\Dto\OrderDocumentFileIdRequest**](../Model/OrderDocumentFileIdRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdConsignorRefusePost()`

```php
apiV2OrderOrderIdConsignorRefusePost($order_id, $reason_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Оформить отказ отправителя.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$reason_request = new \MagDv\Cargomart\Dto\ReasonRequest(); // \MagDv\Cargomart\Dto\ReasonRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdConsignorRefusePost($order_id, $reason_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdConsignorRefusePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **reason_request** | [**\MagDv\Cargomart\Dto\ReasonRequest**](../Model/ReasonRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdDocumentPost()`

```php
apiV2OrderOrderIdDocumentPost($order_id, $order_document_file_id_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Загрузить документы перевозчика.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$order_document_file_id_request = new \MagDv\Cargomart\Dto\OrderDocumentFileIdRequest(); // \MagDv\Cargomart\Dto\OrderDocumentFileIdRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdDocumentPost($order_id, $order_document_file_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **order_document_file_id_request** | [**\MagDv\Cargomart\Dto\OrderDocumentFileIdRequest**](../Model/OrderDocumentFileIdRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdExpeditorAssignmentGet()`

```php
apiV2OrderOrderIdExpeditorAssignmentGet($order_id): \MagDv\Cargomart\Dto\FileLinkResponse
```

Скачать поручение экспедитору.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdExpeditorAssignmentGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdExpeditorAssignmentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\FileLinkResponse**](../Model/FileLinkResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdFinishPost()`

```php
apiV2OrderOrderIdFinishPost($order_id): \MagDv\Cargomart\Dto\OrderCardResponse
```

Ручное завершение заказа

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdFinishPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdFinishPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdGeneralPartnerDocumentPost()`

```php
apiV2OrderOrderIdGeneralPartnerDocumentPost($order_id, $order_document_file_id_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Генеральный партнер прикрепляет документы.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$order_document_file_id_request = new \MagDv\Cargomart\Dto\OrderDocumentFileIdRequest(); // \MagDv\Cargomart\Dto\OrderDocumentFileIdRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdGeneralPartnerDocumentPost($order_id, $order_document_file_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdGeneralPartnerDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **order_document_file_id_request** | [**\MagDv\Cargomart\Dto\OrderDocumentFileIdRequest**](../Model/OrderDocumentFileIdRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdGeneralPartnerProposalTemplateGet()`

```php
apiV2OrderOrderIdGeneralPartnerProposalTemplateGet($order_id, $remove_facsimile): \MagDv\Cargomart\Dto\FileLinkResponse
```

Генеральный партнер. Скачать заяку на заказ для ГП.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$remove_facsimile = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\FilterStringBooleanEnum(); // \MagDv\Cargomart\Dto\FilterStringBooleanEnum | Убрать печать из заявки

try {
    $result = $apiInstance->apiV2OrderOrderIdGeneralPartnerProposalTemplateGet($order_id, $remove_facsimile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdGeneralPartnerProposalTemplateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **remove_facsimile** | [**\MagDv\Cargomart\Dto\FilterStringBooleanEnum**](../Model/.md)| Убрать печать из заявки | [optional]

### Return type

[**\MagDv\Cargomart\Dto\FileLinkResponse**](../Model/FileLinkResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdGeneralPartnerProxyTemplateGet()`

```php
apiV2OrderOrderIdGeneralPartnerProxyTemplateGet($order_id, $remove_facsimile): \MagDv\Cargomart\Dto\FileLinkResponse
```

Генеральный партнер. Скачать доверенность на заказ для ГП.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$remove_facsimile = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\FilterStringBooleanEnum(); // \MagDv\Cargomart\Dto\FilterStringBooleanEnum | Убрать печать из заявки

try {
    $result = $apiInstance->apiV2OrderOrderIdGeneralPartnerProxyTemplateGet($order_id, $remove_facsimile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdGeneralPartnerProxyTemplateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **remove_facsimile** | [**\MagDv\Cargomart\Dto\FilterStringBooleanEnum**](../Model/.md)| Убрать печать из заявки | [optional]

### Return type

[**\MagDv\Cargomart\Dto\FileLinkResponse**](../Model/FileLinkResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdGeneralPartnerTemplateApprovePost()`

```php
apiV2OrderOrderIdGeneralPartnerTemplateApprovePost($order_id): \MagDv\Cargomart\Dto\OrderCardResponse
```

Генеральный партнер создает документы из шаблонов.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdGeneralPartnerTemplateApprovePost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdGeneralPartnerTemplateApprovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdInvoiceGpCarrierGet()`

```php
apiV2OrderOrderIdInvoiceGpCarrierGet($order_id): \MagDv\Cargomart\Dto\OrderInvoiceResponse
```

Получение данных о платежах генерального партнера для перевозчика

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа

try {
    $result = $apiInstance->apiV2OrderOrderIdInvoiceGpCarrierGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdInvoiceGpCarrierGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |

### Return type

[**\MagDv\Cargomart\Dto\OrderInvoiceResponse**](../Model/OrderInvoiceResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdInvoiceGpCarrierPut()`

```php
apiV2OrderOrderIdInvoiceGpCarrierPut($order_id, $order_invoice_request): \MagDv\Cargomart\Dto\OrderInvoiceResponse
```

Добавление данных о платежах генерального партнера для перевозчика

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа
$order_invoice_request = new \MagDv\Cargomart\Dto\OrderInvoiceRequest(); // \MagDv\Cargomart\Dto\OrderInvoiceRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdInvoiceGpCarrierPut($order_id, $order_invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdInvoiceGpCarrierPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |
 **order_invoice_request** | [**\MagDv\Cargomart\Dto\OrderInvoiceRequest**](../Model/OrderInvoiceRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderInvoiceResponse**](../Model/OrderInvoiceResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdMonitoringPost()`

```php
apiV2OrderOrderIdMonitoringPost($order_id, $monitoring_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Добавить ссылку на отслеживание.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$monitoring_request = new \MagDv\Cargomart\Dto\MonitoringRequest(); // \MagDv\Cargomart\Dto\MonitoringRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdMonitoringPost($order_id, $monitoring_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdMonitoringPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **monitoring_request** | [**\MagDv\Cargomart\Dto\MonitoringRequest**](../Model/MonitoringRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdProposalGet()`

```php
apiV2OrderOrderIdProposalGet($order_id): \MagDv\Cargomart\Dto\FileLinkResponse
```

Скачать заявку на заказ.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdProposalGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProposalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\FileLinkResponse**](../Model/FileLinkResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdProxyConsignorAdditionalInfoGet()`

```php
apiV2OrderOrderIdProxyConsignorAdditionalInfoGet($order_id): \MagDv\Cargomart\Dto\OrderProxyInfoResponse
```

Получить добавочные данные, или проверить их наличие.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdProxyConsignorAdditionalInfoGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProxyConsignorAdditionalInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderProxyInfoResponse**](../Model/OrderProxyInfoResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdProxyConsignorAdditionalInfoPost()`

```php
apiV2OrderOrderIdProxyConsignorAdditionalInfoPost($order_id, $order_proxy_info_request): \MagDv\Cargomart\Dto\OrderProxyInfoResponse
```

Заполнить или изменить добавочные данные в будущую довереность на самовывоз c\\без факсимиле.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$order_proxy_info_request = new \MagDv\Cargomart\Dto\OrderProxyInfoRequest(); // \MagDv\Cargomart\Dto\OrderProxyInfoRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdProxyConsignorAdditionalInfoPost($order_id, $order_proxy_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProxyConsignorAdditionalInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **order_proxy_info_request** | [**\MagDv\Cargomart\Dto\OrderProxyInfoRequest**](../Model/OrderProxyInfoRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderProxyInfoResponse**](../Model/OrderProxyInfoResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoGet()`

```php
apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoGet($order_id): \MagDv\Cargomart\Dto\OrderAdditionalInfoResponse
```

Получить добавочные данные, или проверить их наличие.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderAdditionalInfoResponse**](../Model/OrderAdditionalInfoResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoPatch()`

```php
apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoPatch($order_id, $order_additional_info_request): \MagDv\Cargomart\Dto\OrderAdditionalInfoResponse
```

Заполнить или изменить добавочные данные в будущую довереность на самовывоз c\\без факсимиле.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$order_additional_info_request = new \MagDv\Cargomart\Dto\OrderAdditionalInfoRequest(); // \MagDv\Cargomart\Dto\OrderAdditionalInfoRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoPatch($order_id, $order_additional_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProxyConsignorCarrierAdditionalInfoPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **order_additional_info_request** | [**\MagDv\Cargomart\Dto\OrderAdditionalInfoRequest**](../Model/OrderAdditionalInfoRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderAdditionalInfoResponse**](../Model/OrderAdditionalInfoResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdProxyConsignorCarrierGet()`

```php
apiV2OrderOrderIdProxyConsignorCarrierGet($order_id, $with_additional): \MagDv\Cargomart\Dto\FileLinkResponse
```

Скачать доверенность на заказ для заказчика.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$with_additional = 56; // int | Cформировать доверенности на самовывоз с заполненными добавочными данными

try {
    $result = $apiInstance->apiV2OrderOrderIdProxyConsignorCarrierGet($order_id, $with_additional);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProxyConsignorCarrierGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **with_additional** | **int**| Cформировать доверенности на самовывоз с заполненными добавочными данными | [optional]

### Return type

[**\MagDv\Cargomart\Dto\FileLinkResponse**](../Model/FileLinkResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdProxyConsignorCarrierSendPost()`

```php
apiV2OrderOrderIdProxyConsignorCarrierSendPost($order_id, $proxy_public_link_data_request)
```

Отправить ссылку доверенности на самовывоз по email.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$proxy_public_link_data_request = new \MagDv\Cargomart\Dto\ProxyPublicLinkDataRequest(); // \MagDv\Cargomart\Dto\ProxyPublicLinkDataRequest

try {
    $apiInstance->apiV2OrderOrderIdProxyConsignorCarrierSendPost($order_id, $proxy_public_link_data_request);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProxyConsignorCarrierSendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **proxy_public_link_data_request** | [**\MagDv\Cargomart\Dto\ProxyPublicLinkDataRequest**](../Model/ProxyPublicLinkDataRequest.md)|  |

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

## `apiV2OrderOrderIdProxyConsignorCarrierWithFacsimileGet()`

```php
apiV2OrderOrderIdProxyConsignorCarrierWithFacsimileGet($order_id, $with_additional): \MagDv\Cargomart\Dto\FileLinkResponse
```

Скачать доверенность на заказ для заказчика с факсимиле.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$with_additional = 56; // int | Cформировать доверенность на самовывоз с факсимиле с заполненными добавочными данными

try {
    $result = $apiInstance->apiV2OrderOrderIdProxyConsignorCarrierWithFacsimileGet($order_id, $with_additional);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProxyConsignorCarrierWithFacsimileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **with_additional** | **int**| Cформировать доверенность на самовывоз с факсимиле с заполненными добавочными данными | [optional]

### Return type

[**\MagDv\Cargomart\Dto\FileLinkResponse**](../Model/FileLinkResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdProxyConsignorEmailGet()`

```php
apiV2OrderOrderIdProxyConsignorEmailGet($order_id): \MagDv\Cargomart\Dto\OrderProxyEmailResponse
```

Получить список email для точки погрузки, для плеча.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор базового заказа, который служит шаблоном.

try {
    $result = $apiInstance->apiV2OrderOrderIdProxyConsignorEmailGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProxyConsignorEmailGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор базового заказа, который служит шаблоном. |

### Return type

[**\MagDv\Cargomart\Dto\OrderProxyEmailResponse**](../Model/OrderProxyEmailResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdProxyConsignorEmailPost()`

```php
apiV2OrderOrderIdProxyConsignorEmailPost($order_id, $order_proxy_email_request): \MagDv\Cargomart\Dto\OrderProxyEmailResponse
```

Отправка доверенности на список email

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор базового заказа, который служит шаблоном.
$order_proxy_email_request = new \MagDv\Cargomart\Dto\OrderProxyEmailRequest(); // \MagDv\Cargomart\Dto\OrderProxyEmailRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdProxyConsignorEmailPost($order_id, $order_proxy_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProxyConsignorEmailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор базового заказа, который служит шаблоном. |
 **order_proxy_email_request** | [**\MagDv\Cargomart\Dto\OrderProxyEmailRequest**](../Model/OrderProxyEmailRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderProxyEmailResponse**](../Model/OrderProxyEmailResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdProxyPost()`

```php
apiV2OrderOrderIdProxyPost($order_id, $order_document_id_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Загрузить доверенность.

Использовать /order/{orderId}/document

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$order_document_id_request = new \MagDv\Cargomart\Dto\OrderDocumentIdRequest(); // \MagDv\Cargomart\Dto\OrderDocumentIdRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdProxyPost($order_id, $order_document_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProxyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **order_document_id_request** | [**\MagDv\Cargomart\Dto\OrderDocumentIdRequest**](../Model/OrderDocumentIdRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdProxyTemplateGet()`

```php
apiV2OrderOrderIdProxyTemplateGet($order_id): \MagDv\Cargomart\Dto\FileLinkResponse
```

Скачать шаблон доверенности.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdProxyTemplateGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdProxyTemplateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\FileLinkResponse**](../Model/FileLinkResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdRefreshDriverPatch()`

```php
apiV2OrderOrderIdRefreshDriverPatch($order_id): \MagDv\Cargomart\Dto\OrderDriverResponse
```

Обновить данные водителя в заказе

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа

try {
    $result = $apiInstance->apiV2OrderOrderIdRefreshDriverPatch($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdRefreshDriverPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |

### Return type

[**\MagDv\Cargomart\Dto\OrderDriverResponse**](../Model/OrderDriverResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdRefreshTruckPatch()`

```php
apiV2OrderOrderIdRefreshTruckPatch($order_id): \MagDv\Cargomart\Dto\OrderTruckResponse
```

Обновить данные транспортного средства в заказе

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа

try {
    $result = $apiInstance->apiV2OrderOrderIdRefreshTruckPatch($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdRefreshTruckPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |

### Return type

[**\MagDv\Cargomart\Dto\OrderTruckResponse**](../Model/OrderTruckResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdRefuseAppealPost()`

```php
apiV2OrderOrderIdRefuseAppealPost($order_id, $message_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Жалоба на отказ.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$message_request = new \MagDv\Cargomart\Dto\MessageRequest(); // \MagDv\Cargomart\Dto\MessageRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdRefuseAppealPost($order_id, $message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdRefuseAppealPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **message_request** | [**\MagDv\Cargomart\Dto\MessageRequest**](../Model/MessageRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdRefuseCancelPost()`

```php
apiV2OrderOrderIdRefuseCancelPost($order_id): \MagDv\Cargomart\Dto\OrderCardResponse
```

Отменить отказ от заказа.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdRefuseCancelPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdRefuseCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdRefusePost()`

```php
apiV2OrderOrderIdRefusePost($order_id, $reason_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Оформить отказ заказа Экспедитора.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа Экспедитора.
$reason_request = new \MagDv\Cargomart\Dto\ReasonRequest(); // \MagDv\Cargomart\Dto\ReasonRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdRefusePost($order_id, $reason_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdRefusePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа Экспедитора. |
 **reason_request** | [**\MagDv\Cargomart\Dto\ReasonRequest**](../Model/ReasonRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdRepeatPost()`

```php
apiV2OrderOrderIdRepeatPost($order_id): \MagDv\Cargomart\Dto\OrderEditResponse
```

Переразместить заказ.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.

try {
    $result = $apiInstance->apiV2OrderOrderIdRepeatPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdRepeatPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |

### Return type

[**\MagDv\Cargomart\Dto\OrderEditResponse**](../Model/OrderEditResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdReusePost()`

```php
apiV2OrderOrderIdReusePost($order_id, $order_reuse_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Переразместить экспедиторский заказ.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа отправителя.
$order_reuse_request = new \MagDv\Cargomart\Dto\OrderReuseRequest(); // \MagDv\Cargomart\Dto\OrderReuseRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdReusePost($order_id, $order_reuse_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdReusePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа отправителя. |
 **order_reuse_request** | [**\MagDv\Cargomart\Dto\OrderReuseRequest**](../Model/OrderReuseRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdTruckDriverPatch()`

```php
apiV2OrderOrderIdTruckDriverPatch($order_id, $truck_driver)
```

Прикрепить к заказу водителя и машину.

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


$apiInstance = new MagDv\Cargomart\Api\OrderProcessApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$truck_driver = new \MagDv\Cargomart\Dto\TruckDriver(); // \MagDv\Cargomart\Dto\TruckDriver

try {
    $apiInstance->apiV2OrderOrderIdTruckDriverPatch($order_id, $truck_driver);
} catch (Exception $e) {
    echo 'Exception when calling OrderProcessApi->apiV2OrderOrderIdTruckDriverPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **truck_driver** | [**\MagDv\Cargomart\Dto\TruckDriver**](../Model/TruckDriver.md)|  |

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
