# MagDv\Cargomart\LocalityApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2LocalityGet()**](LocalityApi.md#apiV2LocalityGet) | **GET** /api/v2/locality | Поиск по кладру.


## `apiV2LocalityGet()`

```php
apiV2LocalityGet($selected_ids, $is_settlement, $query, $level, $filter, $hierarchy, $sort, $per_page, $page): \MagDv\Cargomart\Dto\LocalityResponse
```

Поиск по кладру.

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


$apiInstance = new MagDv\Cargomart\Api\LocalityApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$selected_ids = array('selected_ids_example'); // string[] | Отсортировать населенные пункты по их коду
$is_settlement = True; // bool | возвращать только конечные населеные пункты
$query = 'query_example'; // string | Поисковая строка.
$level = array(56); // int[] | Массив значений фильтра по административным уровням, страна= 10; город федерального значения= 20; областные центры= 30; области= 40; населенные пункты областного значения= 50; районные центры= 60; районы= 70; прочие= 80;
$filter = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\LocalityFilterEnum(); // \MagDv\Cargomart\Dto\LocalityFilterEnum | Фильтр по административным уровням
$hierarchy = 'hierarchy_example'; // string | Код объекта иерархии для ограничения поиска только по вхождению в этот объект
$sort = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\LocalitySortTypeEnum(); // \MagDv\Cargomart\Dto\LocalitySortTypeEnum | Дополнительная сортировка - тип поиска.
$per_page = 56; // int | Количество элементов на страницу
$page = 56; // int | Номер текущей выбираемой страницы

try {
    $result = $apiInstance->apiV2LocalityGet($selected_ids, $is_settlement, $query, $level, $filter, $hierarchy, $sort, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocalityApi->apiV2LocalityGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **selected_ids** | [**string[]**](../Model/string.md)| Отсортировать населенные пункты по их коду | [optional]
 **is_settlement** | **bool**| возвращать только конечные населеные пункты | [optional]
 **query** | **string**| Поисковая строка. | [optional]
 **level** | [**int[]**](../Model/int.md)| Массив значений фильтра по административным уровням, страна&#x3D; 10; город федерального значения&#x3D; 20; областные центры&#x3D; 30; области&#x3D; 40; населенные пункты областного значения&#x3D; 50; районные центры&#x3D; 60; районы&#x3D; 70; прочие&#x3D; 80; | [optional]
 **filter** | [**\MagDv\Cargomart\Dto\LocalityFilterEnum**](../Model/.md)| Фильтр по административным уровням | [optional]
 **hierarchy** | **string**| Код объекта иерархии для ограничения поиска только по вхождению в этот объект | [optional]
 **sort** | [**\MagDv\Cargomart\Dto\LocalitySortTypeEnum**](../Model/.md)| Дополнительная сортировка - тип поиска. | [optional]
 **per_page** | **int**| Количество элементов на страницу | [optional]
 **page** | **int**| Номер текущей выбираемой страницы | [optional]

### Return type

[**\MagDv\Cargomart\Dto\LocalityResponse**](../Model/LocalityResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
