# MagDv\Cargomart\WorkerApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2WorkerGet()**](WorkerApi.md#apiV2WorkerGet) | **GET** /api/v2/worker | Вывод списка сотрудников компании.
[**apiV2WorkerIdCertificateGet()**](WorkerApi.md#apiV2WorkerIdCertificateGet) | **GET** /api/v2/worker/{id}/certificate | Получить список сертификатов пользователя
[**apiV2WorkerIdGet()**](WorkerApi.md#apiV2WorkerIdGet) | **GET** /api/v2/worker/{id} | Получение информации по указанному сотруднику компании.


## `apiV2WorkerGet()`

```php
apiV2WorkerGet($filter_search_text, $filter_blocked_status, $filter_simple_signature_role, $page, $per_page, $sort, $selected_ids): \MagDv\Cargomart\Dto\WorkerListResponse
```

Вывод списка сотрудников компании.

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


$apiInstance = new MagDv\Cargomart\Api\WorkerApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_search_text = 'filter_search_text_example'; // string | Поиск по полям фамилия, имя, отчество и должность, email, контактный телефон, должность
$filter_blocked_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\WorkerBlockedStatusEnum(); // \MagDv\Cargomart\Dto\WorkerBlockedStatusEnum | Все или заблокированные или активные
$filter_simple_signature_role = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\SimpleSignatureRoleEnum(); // \MagDv\Cargomart\Dto\SimpleSignatureRoleEnum | Присвоенная роль для работы с простой подписью
$page = 1; // int | Просматриваемая страница, по умолчанию 1
$per_page = 20; // int | Количество элементов на одну страницу, по умолчанию 20
$sort = array('sort_example'); // string[] | Список ключей для сортировки. Доступно: lastName, firstName, secondName, email, contactPhone, position, roleId. Сортировка производитсяя по возрастанию. При наличии префикса \"-\" сортировка будет произведена в обратном порядке.
$selected_ids = array(56); // int[] | Отсортировать сотрудников по идентификатору(на первое место)

try {
    $result = $apiInstance->apiV2WorkerGet($filter_search_text, $filter_blocked_status, $filter_simple_signature_role, $page, $per_page, $sort, $selected_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->apiV2WorkerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search_text** | **string**| Поиск по полям фамилия, имя, отчество и должность, email, контактный телефон, должность | [optional]
 **filter_blocked_status** | [**\MagDv\Cargomart\Dto\WorkerBlockedStatusEnum**](../Model/.md)| Все или заблокированные или активные | [optional]
 **filter_simple_signature_role** | [**\MagDv\Cargomart\Dto\SimpleSignatureRoleEnum**](../Model/.md)| Присвоенная роль для работы с простой подписью | [optional]
 **page** | **int**| Просматриваемая страница, по умолчанию 1 | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на одну страницу, по умолчанию 20 | [optional] [default to 20]
 **sort** | [**string[]**](../Model/string.md)| Список ключей для сортировки. Доступно: lastName, firstName, secondName, email, contactPhone, position, roleId. Сортировка производитсяя по возрастанию. При наличии префикса \&quot;-\&quot; сортировка будет произведена в обратном порядке. | [optional]
 **selected_ids** | [**int[]**](../Model/int.md)| Отсортировать сотрудников по идентификатору(на первое место) | [optional]

### Return type

[**\MagDv\Cargomart\Dto\WorkerListResponse**](../Model/WorkerListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2WorkerIdCertificateGet()`

```php
apiV2WorkerIdCertificateGet($id): \MagDv\Cargomart\Dto\UserCertificateListResponse
```

Получить список сертификатов пользователя

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


$apiInstance = new MagDv\Cargomart\Api\WorkerApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор сотрудника в компании пользователя.

try {
    $result = $apiInstance->apiV2WorkerIdCertificateGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->apiV2WorkerIdCertificateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор сотрудника в компании пользователя. |

### Return type

[**\MagDv\Cargomart\Dto\UserCertificateListResponse**](../Model/UserCertificateListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2WorkerIdGet()`

```php
apiV2WorkerIdGet($id): \MagDv\Cargomart\Dto\WorkerResponse
```

Получение информации по указанному сотруднику компании.

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


$apiInstance = new MagDv\Cargomart\Api\WorkerApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор сотрудника

try {
    $result = $apiInstance->apiV2WorkerIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->apiV2WorkerIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор сотрудника |

### Return type

[**\MagDv\Cargomart\Dto\WorkerResponse**](../Model/WorkerResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
