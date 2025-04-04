# MagDv\Cargomart\FileApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2FileDelete()**](FileApi.md#apiV2FileDelete) | **DELETE** /api/v2/file | Удаление списка файлов.
[**apiV2FileGet()**](FileApi.md#apiV2FileGet) | **GET** /api/v2/file | Получение списка не привязанных к документам временных файлов
[**apiV2FilePost()**](FileApi.md#apiV2FilePost) | **POST** /api/v2/file | Загрузка не привязанного к документам файла


## `apiV2FileDelete()`

```php
apiV2FileDelete($file_ids)
```

Удаление списка файлов.

Производится физическое удаление указанного списка файлов.

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


$apiInstance = new MagDv\Cargomart\Api\FileApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$file_ids = new \MagDv\Cargomart\Dto\FileIds(); // \MagDv\Cargomart\Dto\FileIds

try {
    $apiInstance->apiV2FileDelete($file_ids);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->apiV2FileDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_ids** | [**\MagDv\Cargomart\Dto\FileIds**](../Model/FileIds.md)|  | [optional]

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

## `apiV2FileGet()`

```php
apiV2FileGet($filter_file_type): \MagDv\Cargomart\Dto\FileList
```

Получение списка не привязанных к документам временных файлов

По идентификатору пользователя ищутся все временные файлы.

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


$apiInstance = new MagDv\Cargomart\Api\FileApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_file_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\FileType(); // \MagDv\Cargomart\Dto\FileType | Тип файла

try {
    $result = $apiInstance->apiV2FileGet($filter_file_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->apiV2FileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_file_type** | [**\MagDv\Cargomart\Dto\FileType**](../Model/.md)| Тип файла | [optional]

### Return type

[**\MagDv\Cargomart\Dto\FileList**](../Model/FileList.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2FilePost()`

```php
apiV2FilePost($file_type, $file): \MagDv\Cargomart\Dto\FileItem
```

Загрузка не привязанного к документам файла

Файл помечается как временный и привязывается к тому, кто его загрузил. При успешной загрузке возвращает доступное имя для документа.

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


$apiInstance = new MagDv\Cargomart\Api\FileApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$file_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\FileType(); // \MagDv\Cargomart\Dto\FileType | Тип загружаемого временного файла
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->apiV2FilePost($file_type, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->apiV2FilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_type** | [**\MagDv\Cargomart\Dto\FileType**](../Model/.md)| Тип загружаемого временного файла |
 **file** | **\SplFileObject****\SplFileObject**|  |

### Return type

[**\MagDv\Cargomart\Dto\FileItem**](../Model/FileItem.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
