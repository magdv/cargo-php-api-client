# MagDv\Cargomart\ExpeditorContractConclusionApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorContractConclusionContractInfoPost()**](ExpeditorContractConclusionApi.md#apiV2ExpeditorContractConclusionContractInfoPost) | **POST** /api/v2/expeditor-contract-conclusion/contract-info | Добавление данных компании (СНО, адреса, телефоны).
[**apiV2ExpeditorContractConclusionDelete()**](ExpeditorContractConclusionApi.md#apiV2ExpeditorContractConclusionDelete) | **DELETE** /api/v2/expeditor-contract-conclusion | Удаление текущего процесса заключения договора
[**apiV2ExpeditorContractConclusionGet()**](ExpeditorContractConclusionApi.md#apiV2ExpeditorContractConclusionGet) | **GET** /api/v2/expeditor-contract-conclusion | Получение текущего процесса заключения договора.
[**apiV2ExpeditorContractConclusionIssueCertificatePhoneConfirmPost()**](ExpeditorContractConclusionApi.md#apiV2ExpeditorContractConclusionIssueCertificatePhoneConfirmPost) | **POST** /api/v2/expeditor-contract-conclusion/issue-certificate-phone-confirm | Подтверждение телефона для выдачи ПЭП.
[**apiV2ExpeditorContractConclusionIssueCertificatePhonePost()**](ExpeditorContractConclusionApi.md#apiV2ExpeditorContractConclusionIssueCertificatePhonePost) | **POST** /api/v2/expeditor-contract-conclusion/issue-certificate-phone | Отправка телефона для получения роли ПЭП-админ на подтверждение.
[**apiV2ExpeditorContractConclusionIssueCertificatePost()**](ExpeditorContractConclusionApi.md#apiV2ExpeditorContractConclusionIssueCertificatePost) | **POST** /api/v2/expeditor-contract-conclusion/issue-certificate | Добавление данных для выдачи ПЭП.
[**apiV2ExpeditorContractConclusionKonturDataApprovePost()**](ExpeditorContractConclusionApi.md#apiV2ExpeditorContractConclusionKonturDataApprovePost) | **POST** /api/v2/expeditor-contract-conclusion/kontur-data-approve | Подтверждение данных полученных из контура.
[**apiV2ExpeditorContractConclusionPost()**](ExpeditorContractConclusionApi.md#apiV2ExpeditorContractConclusionPost) | **POST** /api/v2/expeditor-contract-conclusion | Создание нового процесса заключения договора.
[**apiV2ExpeditorContractConclusionSignerPost()**](ExpeditorContractConclusionApi.md#apiV2ExpeditorContractConclusionSignerPost) | **POST** /api/v2/expeditor-contract-conclusion/signer | Выбор подписываещего лица.
[**apiV2ExpeditorContractConclusionSigningMethodPost()**](ExpeditorContractConclusionApi.md#apiV2ExpeditorContractConclusionSigningMethodPost) | **POST** /api/v2/expeditor-contract-conclusion/signing-method | Выбор способа подписания.
[**apiV2ExpeditorContractConclusionStatusPost()**](ExpeditorContractConclusionApi.md#apiV2ExpeditorContractConclusionStatusPost) | **POST** /api/v2/expeditor-contract-conclusion/status | Переход к указанному статусу.


## `apiV2ExpeditorContractConclusionContractInfoPost()`

```php
apiV2ExpeditorContractConclusionContractInfoPost($expeditor_contract_conclusion_contract_info_request): \MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse
```

Добавление данных компании (СНО, адреса, телефоны).

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorContractConclusionApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$expeditor_contract_conclusion_contract_info_request = new \MagDv\Cargomart\Dto\ExpeditorContractConclusionContractInfoRequest(); // \MagDv\Cargomart\Dto\ExpeditorContractConclusionContractInfoRequest

try {
    $result = $apiInstance->apiV2ExpeditorContractConclusionContractInfoPost($expeditor_contract_conclusion_contract_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorContractConclusionApi->apiV2ExpeditorContractConclusionContractInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expeditor_contract_conclusion_contract_info_request** | [**\MagDv\Cargomart\Dto\ExpeditorContractConclusionContractInfoRequest**](../Model/ExpeditorContractConclusionContractInfoRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse**](../Model/ExpeditorContractConclusionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorContractConclusionDelete()`

```php
apiV2ExpeditorContractConclusionDelete(): \MagDv\Cargomart\Dto\EmptyDataResponse
```

Удаление текущего процесса заключения договора

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorContractConclusionApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2ExpeditorContractConclusionDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorContractConclusionApi->apiV2ExpeditorContractConclusionDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorContractConclusionGet()`

```php
apiV2ExpeditorContractConclusionGet(): \MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse
```

Получение текущего процесса заключения договора.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorContractConclusionApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2ExpeditorContractConclusionGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorContractConclusionApi->apiV2ExpeditorContractConclusionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse**](../Model/ExpeditorContractConclusionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorContractConclusionIssueCertificatePhoneConfirmPost()`

```php
apiV2ExpeditorContractConclusionIssueCertificatePhoneConfirmPost($expeditor_contract_conclusion_issue_certificate_confirm_request): \MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse
```

Подтверждение телефона для выдачи ПЭП.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorContractConclusionApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$expeditor_contract_conclusion_issue_certificate_confirm_request = new \MagDv\Cargomart\Dto\ExpeditorContractConclusionIssueCertificateConfirmRequest(); // \MagDv\Cargomart\Dto\ExpeditorContractConclusionIssueCertificateConfirmRequest

try {
    $result = $apiInstance->apiV2ExpeditorContractConclusionIssueCertificatePhoneConfirmPost($expeditor_contract_conclusion_issue_certificate_confirm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorContractConclusionApi->apiV2ExpeditorContractConclusionIssueCertificatePhoneConfirmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expeditor_contract_conclusion_issue_certificate_confirm_request** | [**\MagDv\Cargomart\Dto\ExpeditorContractConclusionIssueCertificateConfirmRequest**](../Model/ExpeditorContractConclusionIssueCertificateConfirmRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse**](../Model/ExpeditorContractConclusionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorContractConclusionIssueCertificatePhonePost()`

```php
apiV2ExpeditorContractConclusionIssueCertificatePhonePost($expeditor_contract_conclusion_issue_certificate_phone_request): \MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse
```

Отправка телефона для получения роли ПЭП-админ на подтверждение.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorContractConclusionApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$expeditor_contract_conclusion_issue_certificate_phone_request = new \MagDv\Cargomart\Dto\ExpeditorContractConclusionIssueCertificatePhoneRequest(); // \MagDv\Cargomart\Dto\ExpeditorContractConclusionIssueCertificatePhoneRequest

try {
    $result = $apiInstance->apiV2ExpeditorContractConclusionIssueCertificatePhonePost($expeditor_contract_conclusion_issue_certificate_phone_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorContractConclusionApi->apiV2ExpeditorContractConclusionIssueCertificatePhonePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expeditor_contract_conclusion_issue_certificate_phone_request** | [**\MagDv\Cargomart\Dto\ExpeditorContractConclusionIssueCertificatePhoneRequest**](../Model/ExpeditorContractConclusionIssueCertificatePhoneRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse**](../Model/ExpeditorContractConclusionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorContractConclusionIssueCertificatePost()`

```php
apiV2ExpeditorContractConclusionIssueCertificatePost($expeditor_contract_conclusion_issue_certificate_request): \MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse
```

Добавление данных для выдачи ПЭП.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorContractConclusionApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$expeditor_contract_conclusion_issue_certificate_request = new \MagDv\Cargomart\Dto\ExpeditorContractConclusionIssueCertificateRequest(); // \MagDv\Cargomart\Dto\ExpeditorContractConclusionIssueCertificateRequest

try {
    $result = $apiInstance->apiV2ExpeditorContractConclusionIssueCertificatePost($expeditor_contract_conclusion_issue_certificate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorContractConclusionApi->apiV2ExpeditorContractConclusionIssueCertificatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expeditor_contract_conclusion_issue_certificate_request** | [**\MagDv\Cargomart\Dto\ExpeditorContractConclusionIssueCertificateRequest**](../Model/ExpeditorContractConclusionIssueCertificateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse**](../Model/ExpeditorContractConclusionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorContractConclusionKonturDataApprovePost()`

```php
apiV2ExpeditorContractConclusionKonturDataApprovePost(): \MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse
```

Подтверждение данных полученных из контура.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorContractConclusionApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2ExpeditorContractConclusionKonturDataApprovePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorContractConclusionApi->apiV2ExpeditorContractConclusionKonturDataApprovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse**](../Model/ExpeditorContractConclusionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorContractConclusionPost()`

```php
apiV2ExpeditorContractConclusionPost(): \MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse
```

Создание нового процесса заключения договора.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorContractConclusionApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2ExpeditorContractConclusionPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorContractConclusionApi->apiV2ExpeditorContractConclusionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse**](../Model/ExpeditorContractConclusionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorContractConclusionSignerPost()`

```php
apiV2ExpeditorContractConclusionSignerPost($expeditor_contract_conclusion_signer_request): \MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse
```

Выбор подписываещего лица.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorContractConclusionApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$expeditor_contract_conclusion_signer_request = new \MagDv\Cargomart\Dto\ExpeditorContractConclusionSignerRequest(); // \MagDv\Cargomart\Dto\ExpeditorContractConclusionSignerRequest

try {
    $result = $apiInstance->apiV2ExpeditorContractConclusionSignerPost($expeditor_contract_conclusion_signer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorContractConclusionApi->apiV2ExpeditorContractConclusionSignerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expeditor_contract_conclusion_signer_request** | [**\MagDv\Cargomart\Dto\ExpeditorContractConclusionSignerRequest**](../Model/ExpeditorContractConclusionSignerRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse**](../Model/ExpeditorContractConclusionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorContractConclusionSigningMethodPost()`

```php
apiV2ExpeditorContractConclusionSigningMethodPost($expeditor_contract_conclusion_signing_method_request): \MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse
```

Выбор способа подписания.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorContractConclusionApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$expeditor_contract_conclusion_signing_method_request = new \MagDv\Cargomart\Dto\ExpeditorContractConclusionSigningMethodRequest(); // \MagDv\Cargomart\Dto\ExpeditorContractConclusionSigningMethodRequest

try {
    $result = $apiInstance->apiV2ExpeditorContractConclusionSigningMethodPost($expeditor_contract_conclusion_signing_method_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorContractConclusionApi->apiV2ExpeditorContractConclusionSigningMethodPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expeditor_contract_conclusion_signing_method_request** | [**\MagDv\Cargomart\Dto\ExpeditorContractConclusionSigningMethodRequest**](../Model/ExpeditorContractConclusionSigningMethodRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse**](../Model/ExpeditorContractConclusionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorContractConclusionStatusPost()`

```php
apiV2ExpeditorContractConclusionStatusPost($expeditor_contract_conclusion_status_request): \MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse
```

Переход к указанному статусу.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorContractConclusionApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$expeditor_contract_conclusion_status_request = new \MagDv\Cargomart\Dto\ExpeditorContractConclusionStatusRequest(); // \MagDv\Cargomart\Dto\ExpeditorContractConclusionStatusRequest

try {
    $result = $apiInstance->apiV2ExpeditorContractConclusionStatusPost($expeditor_contract_conclusion_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorContractConclusionApi->apiV2ExpeditorContractConclusionStatusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expeditor_contract_conclusion_status_request** | [**\MagDv\Cargomart\Dto\ExpeditorContractConclusionStatusRequest**](../Model/ExpeditorContractConclusionStatusRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractConclusionResponse**](../Model/ExpeditorContractConclusionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
