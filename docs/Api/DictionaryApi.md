# MagDv\Cargomart\DictionaryApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2DictionaryAcContainerTypeGet()**](DictionaryApi.md#apiV2DictionaryAcContainerTypeGet) | **GET** /api/v2/dictionary/ac/container-type | Список видов тары.
[**apiV2DictionaryAcCountryGet()**](DictionaryApi.md#apiV2DictionaryAcCountryGet) | **GET** /api/v2/dictionary/ac/country | Список стран
[**apiV2DictionaryGet()**](DictionaryApi.md#apiV2DictionaryGet) | **GET** /api/v2/dictionary | Метод возвращает список словарей


## `apiV2DictionaryAcContainerTypeGet()`

```php
apiV2DictionaryAcContainerTypeGet($filter_search, $selected_ids, $page, $per_page): \MagDv\Cargomart\Dto\ContainerTypeList
```

Список видов тары.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$filter_search = 'filter_search_example'; // string | Поисковая строка
$selected_ids = array('selected_ids_example'); // string[] | Дополнительные id для поиска (на первое место)
$page = 56; // int | Страница выдачи
$per_page = 56; // int | Количество объектов на странице

try {
    $result = $apiInstance->apiV2DictionaryAcContainerTypeGet($filter_search, $selected_ids, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->apiV2DictionaryAcContainerTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Поисковая строка | [optional]
 **selected_ids** | [**string[]**](../Model/string.md)| Дополнительные id для поиска (на первое место) | [optional]
 **page** | **int**| Страница выдачи | [optional]
 **per_page** | **int**| Количество объектов на странице | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ContainerTypeList**](../Model/ContainerTypeList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DictionaryAcCountryGet()`

```php
apiV2DictionaryAcCountryGet($filter_search, $selected_ids, $page, $per_page): \MagDv\Cargomart\Dto\CountryListResponse
```

Список стран

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$filter_search = 'filter_search_example'; // string | Поисковая строка
$selected_ids = array('selected_ids_example'); // string[] | Дополнительные id для поиска (на первое место)
$page = 56; // int | Страница выдачи
$per_page = 56; // int | Количество объектов на странице

try {
    $result = $apiInstance->apiV2DictionaryAcCountryGet($filter_search, $selected_ids, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->apiV2DictionaryAcCountryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Поисковая строка | [optional]
 **selected_ids** | [**string[]**](../Model/string.md)| Дополнительные id для поиска (на первое место) | [optional]
 **page** | **int**| Страница выдачи | [optional]
 **per_page** | **int**| Количество объектов на странице | [optional]

### Return type

[**\MagDv\Cargomart\Dto\CountryListResponse**](../Model/CountryListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DictionaryGet()`

```php
apiV2DictionaryGet($with): \MagDv\Cargomart\Dto\DictionaryList
```

Метод возвращает список словарей

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$with = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\DictionaryTypeEnum()); // \MagDv\Cargomart\Dto\DictionaryTypeEnum[] | Идентификатор справочника

try {
    $result = $apiInstance->apiV2DictionaryGet($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->apiV2DictionaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | [**\MagDv\Cargomart\Dto\DictionaryTypeEnum[]**](../Model/\MagDv\Cargomart\Dto\DictionaryTypeEnum.md)| Идентификатор справочника | [optional]

### Return type

[**\MagDv\Cargomart\Dto\DictionaryList**](../Model/DictionaryList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
