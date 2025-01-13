# MagDv\Cargomart\CompanyConfirmationApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2CompanyConfirmationCompanyConfirmDelete()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationCompanyConfirmDelete) | **DELETE** /api/v2/company-confirmation/company/confirm | Отказ от данных компании.
[**apiV2CompanyConfirmationCompanyConfirmPost()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationCompanyConfirmPost) | **POST** /api/v2/company-confirmation/company/confirm | Подтверждение данных компании.
[**apiV2CompanyConfirmationCompanyDelete()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationCompanyDelete) | **DELETE** /api/v2/company-confirmation/company | Откат к шагу ввода ИНН.
[**apiV2CompanyConfirmationCompanyPost()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationCompanyPost) | **POST** /api/v2/company-confirmation/company | Установка начальных данных компании.
[**apiV2CompanyConfirmationCompanyProfileSendPost()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationCompanyProfileSendPost) | **POST** /api/v2/company-confirmation/company-profile-send | Отправить анкету, перейти к следующему шагу
[**apiV2CompanyConfirmationCompanyPut()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationCompanyPut) | **PUT** /api/v2/company-confirmation/company | Доработка данных компании (СНО, флаг декларации).
[**apiV2CompanyConfirmationDocumentIdDelete()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationDocumentIdDelete) | **DELETE** /api/v2/company-confirmation/document/{id} | Удаление документа.
[**apiV2CompanyConfirmationDocumentPost()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationDocumentPost) | **POST** /api/v2/company-confirmation/document | Загрузка нового документа
[**apiV2CompanyConfirmationDocumentSendPost()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationDocumentSendPost) | **POST** /api/v2/company-confirmation/document/send | Отправка документа на проверку.
[**apiV2CompanyConfirmationGet()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationGet) | **GET** /api/v2/company-confirmation | Получение текущего статуса валидации.
[**apiV2CompanyConfirmationIncomeRequestPost()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationIncomeRequestPost) | **POST** /api/v2/company-confirmation/income-request | Отправка запроса на добавление в сотрудники в компанию дубликат.
[**apiV2CompanyConfirmationRoleDelete()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationRoleDelete) | **DELETE** /api/v2/company-confirmation/role | Возврат к выбору роли компании.
[**apiV2CompanyConfirmationRolePut()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationRolePut) | **PUT** /api/v2/company-confirmation/role | Установка роли клиента.
[**apiV2CompanyConfirmationValidationGet()**](CompanyConfirmationApi.md#apiV2CompanyConfirmationValidationGet) | **GET** /api/v2/company-confirmation/validation | Получение текущего статуса валидации.


## `apiV2CompanyConfirmationCompanyConfirmDelete()`

```php
apiV2CompanyConfirmationCompanyConfirmDelete(): \MagDv\Cargomart\Dto\StatusResponse
```

Отказ от данных компании.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2CompanyConfirmationCompanyConfirmDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationCompanyConfirmDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyConfirmationCompanyConfirmPost()`

```php
apiV2CompanyConfirmationCompanyConfirmPost(): \MagDv\Cargomart\Dto\StatusResponse
```

Подтверждение данных компании.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2CompanyConfirmationCompanyConfirmPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationCompanyConfirmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyConfirmationCompanyDelete()`

```php
apiV2CompanyConfirmationCompanyDelete(): \MagDv\Cargomart\Dto\StatusResponse
```

Откат к шагу ввода ИНН.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2CompanyConfirmationCompanyDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationCompanyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyConfirmationCompanyPost()`

```php
apiV2CompanyConfirmationCompanyPost($company_create_request): \MagDv\Cargomart\Dto\StatusResponse
```

Установка начальных данных компании.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$company_create_request = new \MagDv\Cargomart\Dto\CompanyCreateRequest(); // \MagDv\Cargomart\Dto\CompanyCreateRequest

try {
    $result = $apiInstance->apiV2CompanyConfirmationCompanyPost($company_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationCompanyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_create_request** | [**\MagDv\Cargomart\Dto\CompanyCreateRequest**](../Model/CompanyCreateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyConfirmationCompanyProfileSendPost()`

```php
apiV2CompanyConfirmationCompanyProfileSendPost($company_profile): \MagDv\Cargomart\Dto\StatusResponse
```

Отправить анкету, перейти к следующему шагу

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$company_profile = new \MagDv\Cargomart\Dto\CompanyProfile(); // \MagDv\Cargomart\Dto\CompanyProfile

try {
    $result = $apiInstance->apiV2CompanyConfirmationCompanyProfileSendPost($company_profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationCompanyProfileSendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_profile** | [**\MagDv\Cargomart\Dto\CompanyProfile**](../Model/CompanyProfile.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyConfirmationCompanyPut()`

```php
apiV2CompanyConfirmationCompanyPut($company_update_request): \MagDv\Cargomart\Dto\StatusResponse
```

Доработка данных компании (СНО, флаг декларации).

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$company_update_request = new \MagDv\Cargomart\Dto\CompanyUpdateRequest(); // \MagDv\Cargomart\Dto\CompanyUpdateRequest

try {
    $result = $apiInstance->apiV2CompanyConfirmationCompanyPut($company_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationCompanyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_update_request** | [**\MagDv\Cargomart\Dto\CompanyUpdateRequest**](../Model/CompanyUpdateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyConfirmationDocumentIdDelete()`

```php
apiV2CompanyConfirmationDocumentIdDelete($id): \MagDv\Cargomart\Dto\StatusResponse
```

Удаление документа.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор документа.

try {
    $result = $apiInstance->apiV2CompanyConfirmationDocumentIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор документа. |

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyConfirmationDocumentPost()`

```php
apiV2CompanyConfirmationDocumentPost($type, $file): \MagDv\Cargomart\Dto\StatusResponse
```

Загрузка нового документа

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Тип загружаемого документа.
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->apiV2CompanyConfirmationDocumentPost($type, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Тип загружаемого документа. |
 **file** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyConfirmationDocumentSendPost()`

```php
apiV2CompanyConfirmationDocumentSendPost(): \MagDv\Cargomart\Dto\StatusResponse
```

Отправка документа на проверку.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2CompanyConfirmationDocumentSendPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationDocumentSendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyConfirmationGet()`

```php
apiV2CompanyConfirmationGet(): \MagDv\Cargomart\Dto\StatusResponse
```

Получение текущего статуса валидации.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2CompanyConfirmationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyConfirmationIncomeRequestPost()`

```php
apiV2CompanyConfirmationIncomeRequestPost($income_request): \MagDv\Cargomart\Dto\StatusResponse
```

Отправка запроса на добавление в сотрудники в компанию дубликат.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$income_request = new \MagDv\Cargomart\Dto\IncomeRequest(); // \MagDv\Cargomart\Dto\IncomeRequest

try {
    $result = $apiInstance->apiV2CompanyConfirmationIncomeRequestPost($income_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationIncomeRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **income_request** | [**\MagDv\Cargomart\Dto\IncomeRequest**](../Model/IncomeRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyConfirmationRoleDelete()`

```php
apiV2CompanyConfirmationRoleDelete(): \MagDv\Cargomart\Dto\StatusResponse
```

Возврат к выбору роли компании.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2CompanyConfirmationRoleDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationRoleDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyConfirmationRolePut()`

```php
apiV2CompanyConfirmationRolePut($role_set_request): \MagDv\Cargomart\Dto\StatusResponse
```

Установка роли клиента.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$role_set_request = new \MagDv\Cargomart\Dto\RoleSetRequest(); // \MagDv\Cargomart\Dto\RoleSetRequest

try {
    $result = $apiInstance->apiV2CompanyConfirmationRolePut($role_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationRolePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_set_request** | [**\MagDv\Cargomart\Dto\RoleSetRequest**](../Model/RoleSetRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyConfirmationValidationGet()`

```php
apiV2CompanyConfirmationValidationGet(): \MagDv\Cargomart\Dto\StatusResponse
```

Получение текущего статуса валидации.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyConfirmationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2CompanyConfirmationValidationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyConfirmationApi->apiV2CompanyConfirmationValidationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\StatusResponse**](../Model/StatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
