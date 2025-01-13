# MagDv\Cargomart\WorkerApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2WorkerDelete()**](WorkerApi.md#apiV2WorkerDelete) | **DELETE** /api/v2/worker | Удаление списка сотрудников.
[**apiV2WorkerGet()**](WorkerApi.md#apiV2WorkerGet) | **GET** /api/v2/worker | Вывод списка сотрудников компании.
[**apiV2WorkerIdCertificateGet()**](WorkerApi.md#apiV2WorkerIdCertificateGet) | **GET** /api/v2/worker/{id}/certificate | Получить список сертификатов пользователя
[**apiV2WorkerIdCertificatePost()**](WorkerApi.md#apiV2WorkerIdCertificatePost) | **POST** /api/v2/worker/{id}/certificate | Выдача сертификата пользователю
[**apiV2WorkerIdChatGet()**](WorkerApi.md#apiV2WorkerIdChatGet) | **GET** /api/v2/worker/{id}/chat | Получение списка комнат сотрудника.
[**apiV2WorkerIdContactComplainPost()**](WorkerApi.md#apiV2WorkerIdContactComplainPost) | **POST** /api/v2/worker/{id}/contact-complain | Оставить жалобу на контакты сотрудника.
[**apiV2WorkerIdDelete()**](WorkerApi.md#apiV2WorkerIdDelete) | **DELETE** /api/v2/worker/{id} | Удаление выбранного сотрудника
[**apiV2WorkerIdGet()**](WorkerApi.md#apiV2WorkerIdGet) | **GET** /api/v2/worker/{id} | Получение информации по указанному сотруднику компании.
[**apiV2WorkerIdPut()**](WorkerApi.md#apiV2WorkerIdPut) | **PUT** /api/v2/worker/{id} | Обновить данные сотрудника.
[**apiV2WorkerIdResendInvitePost()**](WorkerApi.md#apiV2WorkerIdResendInvitePost) | **POST** /api/v2/worker/{id}/resend-invite | Повторно отправть письмо с приглашением в сотрудники.
[**apiV2WorkerPost()**](WorkerApi.md#apiV2WorkerPost) | **POST** /api/v2/worker | Создание нового сотрудника.


## `apiV2WorkerDelete()`

```php
apiV2WorkerDelete($api_v2_worker_delete_request)
```

Удаление списка сотрудников.

Удаление списка сотрудников по списку идентификаторов.

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
$api_v2_worker_delete_request = new \MagDv\Cargomart\Dto\ApiV2WorkerDeleteRequest(); // \MagDv\Cargomart\Dto\ApiV2WorkerDeleteRequest

try {
    $apiInstance->apiV2WorkerDelete($api_v2_worker_delete_request);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->apiV2WorkerDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_v2_worker_delete_request** | [**\MagDv\Cargomart\Dto\ApiV2WorkerDeleteRequest**](../Model/ApiV2WorkerDeleteRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `apiV2WorkerIdCertificatePost()`

```php
apiV2WorkerIdCertificatePost($id, $worker_certificate_create_request): \MagDv\Cargomart\Dto\UserCertificateResponse
```

Выдача сертификата пользователю

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
$worker_certificate_create_request = new \MagDv\Cargomart\Dto\WorkerCertificateCreateRequest(); // \MagDv\Cargomart\Dto\WorkerCertificateCreateRequest

try {
    $result = $apiInstance->apiV2WorkerIdCertificatePost($id, $worker_certificate_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->apiV2WorkerIdCertificatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор сотрудника в компании пользователя. |
 **worker_certificate_create_request** | [**\MagDv\Cargomart\Dto\WorkerCertificateCreateRequest**](../Model/WorkerCertificateCreateRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\UserCertificateResponse**](../Model/UserCertificateResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2WorkerIdChatGet()`

```php
apiV2WorkerIdChatGet($id): \MagDv\Cargomart\Dto\ChatListResponse
```

Получение списка комнат сотрудника.

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
    $result = $apiInstance->apiV2WorkerIdChatGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->apiV2WorkerIdChatGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор сотрудника в компании пользователя. |

### Return type

[**\MagDv\Cargomart\Dto\ChatListResponse**](../Model/ChatListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2WorkerIdContactComplainPost()`

```php
apiV2WorkerIdContactComplainPost($id, $contact_complain_request)
```

Оставить жалобу на контакты сотрудника.

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
$id = 56; // int | Идентификатор сотрудника.
$contact_complain_request = new \MagDv\Cargomart\Dto\ContactComplainRequest(); // \MagDv\Cargomart\Dto\ContactComplainRequest

try {
    $apiInstance->apiV2WorkerIdContactComplainPost($id, $contact_complain_request);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->apiV2WorkerIdContactComplainPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор сотрудника. |
 **contact_complain_request** | [**\MagDv\Cargomart\Dto\ContactComplainRequest**](../Model/ContactComplainRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2WorkerIdDelete()`

```php
apiV2WorkerIdDelete($id)
```

Удаление выбранного сотрудника

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
$id = 56; // int | Идентификатор сотрудника.

try {
    $apiInstance->apiV2WorkerIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->apiV2WorkerIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор сотрудника. |

### Return type

void (empty response body)

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

## `apiV2WorkerIdPut()`

```php
apiV2WorkerIdPut($id, $worker_change_request): \MagDv\Cargomart\Dto\WorkerResponse
```

Обновить данные сотрудника.

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
$id = 56; // int | Идентификатор сотрудника.
$worker_change_request = new \MagDv\Cargomart\Dto\WorkerChangeRequest(); // \MagDv\Cargomart\Dto\WorkerChangeRequest

try {
    $result = $apiInstance->apiV2WorkerIdPut($id, $worker_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->apiV2WorkerIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор сотрудника. |
 **worker_change_request** | [**\MagDv\Cargomart\Dto\WorkerChangeRequest**](../Model/WorkerChangeRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\WorkerResponse**](../Model/WorkerResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2WorkerIdResendInvitePost()`

```php
apiV2WorkerIdResendInvitePost($id): \MagDv\Cargomart\Dto\WorkerResponse
```

Повторно отправть письмо с приглашением в сотрудники.

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
$id = 56; // int | Идентификатор сотрудника.

try {
    $result = $apiInstance->apiV2WorkerIdResendInvitePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->apiV2WorkerIdResendInvitePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор сотрудника. |

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

## `apiV2WorkerPost()`

```php
apiV2WorkerPost($worker_change_request): \MagDv\Cargomart\Dto\WorkerResponse
```

Создание нового сотрудника.

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
$worker_change_request = new \MagDv\Cargomart\Dto\WorkerChangeRequest(); // \MagDv\Cargomart\Dto\WorkerChangeRequest

try {
    $result = $apiInstance->apiV2WorkerPost($worker_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->apiV2WorkerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **worker_change_request** | [**\MagDv\Cargomart\Dto\WorkerChangeRequest**](../Model/WorkerChangeRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\WorkerResponse**](../Model/WorkerResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
