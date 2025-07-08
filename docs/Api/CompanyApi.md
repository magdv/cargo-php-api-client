# MagDv\Cargomart\CompanyApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2CompanyBranchAcGet()**](CompanyApi.md#apiV2CompanyBranchAcGet) | **GET** /api/v2/company/branch/ac | Поиск дочерних компаний для автокомплита
[**apiV2CompanyBranchHighlightedGet()**](CompanyApi.md#apiV2CompanyBranchHighlightedGet) | **GET** /api/v2/company-branch-highlighted | Метод возвращает список рекламируемых филиалов компаний.
[**apiV2CompanyGet()**](CompanyApi.md#apiV2CompanyGet) | **GET** /api/v2/company | Метод возвращает все компании с учетом фильтров
[**apiV2CompanyHashBranchGet()**](CompanyApi.md#apiV2CompanyHashBranchGet) | **GET** /api/v2/company/{hash}/branch | Получение списка дочерних компаний.
[**apiV2CompanyHashCommunicationContactsGet()**](CompanyApi.md#apiV2CompanyHashCommunicationContactsGet) | **GET** /api/v2/company/{hash}/communication-contacts | Получение контактов для связи.
[**apiV2CompanyHashCommunicationContactsPut()**](CompanyApi.md#apiV2CompanyHashCommunicationContactsPut) | **PUT** /api/v2/company/{hash}/communication-contacts | Метод редактирует контакты для связи.
[**apiV2CompanyHashGet()**](CompanyApi.md#apiV2CompanyHashGet) | **GET** /api/v2/company/{hash} | Метод возвращает реквизиты организации по хэшу.
[**apiV2CompanyHashLogoDelete()**](CompanyApi.md#apiV2CompanyHashLogoDelete) | **DELETE** /api/v2/company/{hash}/logo | Метод удаляет логотип организации.
[**apiV2CompanyHashLogoGet()**](CompanyApi.md#apiV2CompanyHashLogoGet) | **GET** /api/v2/company/{hash}/logo | Получения логотипа оранизации.
[**apiV2CompanyHashLogoPost()**](CompanyApi.md#apiV2CompanyHashLogoPost) | **POST** /api/v2/company/{hash}/logo | Метод сохраняет логотип организации.
[**apiV2CompanyHashPatch()**](CompanyApi.md#apiV2CompanyHashPatch) | **PATCH** /api/v2/company/{hash} | Метод редактирует данные компании.
[**apiV2CompanyHashPut()**](CompanyApi.md#apiV2CompanyHashPut) | **PUT** /api/v2/company/{hash} | Метод сохраняет реквизиты своей организации.
[**apiV2CompanyHashSettingsGet()**](CompanyApi.md#apiV2CompanyHashSettingsGet) | **GET** /api/v2/company/{hash}/settings | Получение настроек компании.
[**apiV2CompanyHashSettingsPatch()**](CompanyApi.md#apiV2CompanyHashSettingsPatch) | **PATCH** /api/v2/company/{hash}/settings | Сохранение настроек компании.
[**apiV2CompanyLocalityGet()**](CompanyApi.md#apiV2CompanyLocalityGet) | **GET** /api/v2/company/locality | регионы доступные для перевозок.
[**apiV2CompanySelfBranchGet()**](CompanyApi.md#apiV2CompanySelfBranchGet) | **GET** /api/v2/company/self/branch | Получение списка дочерних компаний.
[**apiV2CompanySelfCommunicationContactsGet()**](CompanyApi.md#apiV2CompanySelfCommunicationContactsGet) | **GET** /api/v2/company/self/communication-contacts | Получение контактов для связи.
[**apiV2CompanySelfCommunicationContactsPut()**](CompanyApi.md#apiV2CompanySelfCommunicationContactsPut) | **PUT** /api/v2/company/self/communication-contacts | Метод редактирует контакты для связи.
[**apiV2CompanySelfGet()**](CompanyApi.md#apiV2CompanySelfGet) | **GET** /api/v2/company/self | Метод возвращает реквизиты моей организации.
[**apiV2CompanySelfPatch()**](CompanyApi.md#apiV2CompanySelfPatch) | **PATCH** /api/v2/company/self | Метод редактирует данные моей компании.
[**apiV2CompanySelfPut()**](CompanyApi.md#apiV2CompanySelfPut) | **PUT** /api/v2/company/self | Метод сохраняет реквизиты своей организации.
[**apiV2CompanySelfSettingsGet()**](CompanyApi.md#apiV2CompanySelfSettingsGet) | **GET** /api/v2/company/self/settings | Получение настроек своей компании.
[**apiV2CompanySelfSettingsPatch()**](CompanyApi.md#apiV2CompanySelfSettingsPatch) | **PATCH** /api/v2/company/self/settings | Сохранение настроек компании.


## `apiV2CompanyBranchAcGet()`

```php
apiV2CompanyBranchAcGet($filter_search, $filter_type, $selected_ids, $page, $per_page): \MagDv\Cargomart\Dto\CompanyBranchListAcResponse
```

Поиск дочерних компаний для автокомплита

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_search = 'filter_search_example'; // string | Поисковая строка
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\AcClientTypeEnum(); // \MagDv\Cargomart\Dto\AcClientTypeEnum | carrier, consignor
$selected_ids = array('selected_ids_example'); // string[] | Отсортировать компании по id (На первое место)
$page = 56; // int | Страница выдачи.
$per_page = 56; // int | лимит выдачи.

try {
    $result = $apiInstance->apiV2CompanyBranchAcGet($filter_search, $filter_type, $selected_ids, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyBranchAcGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Поисковая строка |
 **filter_type** | [**\MagDv\Cargomart\Dto\AcClientTypeEnum**](../Model/.md)| carrier, consignor |
 **selected_ids** | [**string[]**](../Model/string.md)| Отсортировать компании по id (На первое место) | [optional]
 **page** | **int**| Страница выдачи. | [optional]
 **per_page** | **int**| лимит выдачи. | [optional]

### Return type

[**\MagDv\Cargomart\Dto\CompanyBranchListAcResponse**](../Model/CompanyBranchListAcResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyBranchHighlightedGet()`

```php
apiV2CompanyBranchHighlightedGet(): \MagDv\Cargomart\Dto\CompanyBranchHighlightedResponse
```

Метод возвращает список рекламируемых филиалов компаний.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2CompanyBranchHighlightedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyBranchHighlightedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\CompanyBranchHighlightedResponse**](../Model/CompanyBranchHighlightedResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyGet()`

```php
apiV2CompanyGet($filter_type, $filter_partner_status, $filter_short_name, $filter_activity_type, $filter_contract_type_id, $filter_show_blocked, $filter_is_major, $filter_major_company_id, $filter_disabled, $filter_from, $filter_to, $filter_is_car_owner, $filter_truck_type_id, $with, $sort, $page, $per_page): \MagDv\Cargomart\Dto\CompanyListResponse
```

Метод возвращает все компании с учетом фильтров

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_type = 'filter_type_example'; // string | Фильтр по типу компании (carrier, consignor) При with=partner перевозчикам автоматически применяется type = consignor, а отправителям type = carrier.
$filter_partner_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\CompanyPartnerStatusFilterEnum()); // \MagDv\Cargomart\Dto\CompanyPartnerStatusFilterEnum[] | Фильтр по статусам взаимодействия с компаниями (not - нет отношений, sent - отправлено предложение, offered - получено предложение, accepted - партнёры)
$filter_short_name = 'filter_short_name_example'; // string | Поиск по краткому названию компании
$filter_activity_type = 'filter_activity_type_example'; // string | Фильтр по виду деятельности (идентификатор вида деятельности)
$filter_contract_type_id = 56; // int | Фильтр по типу договора о партнёрстве (идентификатор)
$filter_show_blocked = True; // bool | Показывать заблокированных клиентов (1 - да. По умолчанию - не показывать)
$filter_is_major = True; // bool | Фильтр по ключевым клиентам системы
$filter_major_company_id = 'filter_major_company_id_example'; // string | Хэш компании, чьих партнёров надо получить
$filter_disabled = True; // bool | true - компании из чёрного списка. false - компании нет в черном списке. значение не передано - ограничение не накладывается.
$filter_from = 'filter_from_example'; // string | Откуда (город, максимум область)
$filter_to = 'filter_to_example'; // string | Куда (город, максимум область)
$filter_is_car_owner = True; // bool | Тип автопарка. собственный / не важно (булево значение, если важно. Если ничего не указано - ищем по всем машинам)
$filter_truck_type_id = array(56); // int[] | Идентификаторы типов кузовов
$with = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\CompanyAdditionalRelationsEnum()); // \MagDv\Cargomart\Dto\CompanyAdditionalRelationsEnum[] | Список ключей для раскрытия связей. Доступно: partner - ключевые партнёры (только для грузоперевозчиков). metrics - получение метрик компании. carInfo - получение информации о количестве машин в автопарке.
$sort = array('sort_example'); // string[] | Список ключей для сортировки. Доступно: orderCount, companyName. По умолчанию сортировка производитсяя по убыванию. При наличии префикса \"+\" сортировка будет произведена по возрастанию, \"-\" по убыванию.
$page = 56; // int | Номер страницы
$per_page = 56; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2CompanyGet($filter_type, $filter_partner_status, $filter_short_name, $filter_activity_type, $filter_contract_type_id, $filter_show_blocked, $filter_is_major, $filter_major_company_id, $filter_disabled, $filter_from, $filter_to, $filter_is_car_owner, $filter_truck_type_id, $with, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_type** | **string**| Фильтр по типу компании (carrier, consignor) При with&#x3D;partner перевозчикам автоматически применяется type &#x3D; consignor, а отправителям type &#x3D; carrier. | [optional]
 **filter_partner_status** | [**\MagDv\Cargomart\Dto\CompanyPartnerStatusFilterEnum[]**](../Model/\MagDv\Cargomart\Dto\CompanyPartnerStatusFilterEnum.md)| Фильтр по статусам взаимодействия с компаниями (not - нет отношений, sent - отправлено предложение, offered - получено предложение, accepted - партнёры) | [optional]
 **filter_short_name** | **string**| Поиск по краткому названию компании | [optional]
 **filter_activity_type** | **string**| Фильтр по виду деятельности (идентификатор вида деятельности) | [optional]
 **filter_contract_type_id** | **int**| Фильтр по типу договора о партнёрстве (идентификатор) | [optional]
 **filter_show_blocked** | **bool**| Показывать заблокированных клиентов (1 - да. По умолчанию - не показывать) | [optional]
 **filter_is_major** | **bool**| Фильтр по ключевым клиентам системы | [optional]
 **filter_major_company_id** | **string**| Хэш компании, чьих партнёров надо получить | [optional]
 **filter_disabled** | **bool**| true - компании из чёрного списка. false - компании нет в черном списке. значение не передано - ограничение не накладывается. | [optional]
 **filter_from** | **string**| Откуда (город, максимум область) | [optional]
 **filter_to** | **string**| Куда (город, максимум область) | [optional]
 **filter_is_car_owner** | **bool**| Тип автопарка. собственный / не важно (булево значение, если важно. Если ничего не указано - ищем по всем машинам) | [optional]
 **filter_truck_type_id** | [**int[]**](../Model/int.md)| Идентификаторы типов кузовов | [optional]
 **with** | [**\MagDv\Cargomart\Dto\CompanyAdditionalRelationsEnum[]**](../Model/\MagDv\Cargomart\Dto\CompanyAdditionalRelationsEnum.md)| Список ключей для раскрытия связей. Доступно: partner - ключевые партнёры (только для грузоперевозчиков). metrics - получение метрик компании. carInfo - получение информации о количестве машин в автопарке. | [optional]
 **sort** | [**string[]**](../Model/string.md)| Список ключей для сортировки. Доступно: orderCount, companyName. По умолчанию сортировка производитсяя по убыванию. При наличии префикса \&quot;+\&quot; сортировка будет произведена по возрастанию, \&quot;-\&quot; по убыванию. | [optional]
 **page** | **int**| Номер страницы | [optional]
 **per_page** | **int**| Количество элементов на страницу | [optional]

### Return type

[**\MagDv\Cargomart\Dto\CompanyListResponse**](../Model/CompanyListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashBranchGet()`

```php
apiV2CompanyHashBranchGet($hash, $filter_has_active_gp_contract, $filter_is_main): \MagDv\Cargomart\Dto\CompanyBranchResponse
```

Получение списка дочерних компаний.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$hash = 'hash_example'; // string | идентификатор компании
$filter_has_active_gp_contract = True; // bool | Фильтр по наличию активного договора с ГП.
$filter_is_main = True; // bool | Является ли компания головной

try {
    $result = $apiInstance->apiV2CompanyHashBranchGet($hash, $filter_has_active_gp_contract, $filter_is_main);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashBranchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **filter_has_active_gp_contract** | **bool**| Фильтр по наличию активного договора с ГП. | [optional]
 **filter_is_main** | **bool**| Является ли компания головной | [optional]

### Return type

[**\MagDv\Cargomart\Dto\CompanyBranchResponse**](../Model/CompanyBranchResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashCommunicationContactsGet()`

```php
apiV2CompanyHashCommunicationContactsGet($hash): \MagDv\Cargomart\Dto\CommunicationContactsResponse
```

Получение контактов для связи.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$hash = 'hash_example'; // string | идентификатор компании

try {
    $result = $apiInstance->apiV2CompanyHashCommunicationContactsGet($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashCommunicationContactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |

### Return type

[**\MagDv\Cargomart\Dto\CommunicationContactsResponse**](../Model/CommunicationContactsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashCommunicationContactsPut()`

```php
apiV2CompanyHashCommunicationContactsPut($hash, $communication_contacts_request): \MagDv\Cargomart\Dto\CommunicationContactsResponse
```

Метод редактирует контакты для связи.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$hash = 'hash_example'; // string | идентификатор компании
$communication_contacts_request = new \MagDv\Cargomart\Dto\CommunicationContactsRequest(); // \MagDv\Cargomart\Dto\CommunicationContactsRequest

try {
    $result = $apiInstance->apiV2CompanyHashCommunicationContactsPut($hash, $communication_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashCommunicationContactsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **communication_contacts_request** | [**\MagDv\Cargomart\Dto\CommunicationContactsRequest**](../Model/CommunicationContactsRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CommunicationContactsResponse**](../Model/CommunicationContactsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashGet()`

```php
apiV2CompanyHashGet($hash, $with): \MagDv\Cargomart\Dto\CompanyResponse
```

Метод возвращает реквизиты организации по хэшу.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$hash = 'hash_example'; // string | идентификатор компании
$with = array('with_example'); // string[] | Список ключей для детализации связанных сущностей. Доступно: partner

try {
    $result = $apiInstance->apiV2CompanyHashGet($hash, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **with** | [**string[]**](../Model/string.md)| Список ключей для детализации связанных сущностей. Доступно: partner | [optional]

### Return type

[**\MagDv\Cargomart\Dto\CompanyResponse**](../Model/CompanyResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashLogoDelete()`

```php
apiV2CompanyHashLogoDelete($hash): \MagDv\Cargomart\Dto\CompanyResponse
```

Метод удаляет логотип организации.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$hash = 'hash_example'; // string | идентификатор компании

try {
    $result = $apiInstance->apiV2CompanyHashLogoDelete($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashLogoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |

### Return type

[**\MagDv\Cargomart\Dto\CompanyResponse**](../Model/CompanyResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashLogoGet()`

```php
apiV2CompanyHashLogoGet($hash, $size, $preview)
```

Получения логотипа оранизации.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$hash = 'hash_example'; // string | идентификатор компании
$size = 'size_example'; // string | размер изображения - 90x50, 45x45, 80x80 60x40, 80x40, 80x20, 100x100, 170x170, 200x50, 160x160, 120x50
$preview = True; // bool | Для браузера скачать или отдать в просмотр.

try {
    $apiInstance->apiV2CompanyHashLogoGet($hash, $size, $preview);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashLogoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **size** | **string**| размер изображения - 90x50, 45x45, 80x80 60x40, 80x40, 80x20, 100x100, 170x170, 200x50, 160x160, 120x50 | [optional]
 **preview** | **bool**| Для браузера скачать или отдать в просмотр. | [optional]

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

## `apiV2CompanyHashLogoPost()`

```php
apiV2CompanyHashLogoPost($hash, $file): \MagDv\Cargomart\Dto\CompanyResponse
```

Метод сохраняет логотип организации.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$hash = 'hash_example'; // string | идентификатор компании
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->apiV2CompanyHashLogoPost($hash, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashLogoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **file** | **\SplFileObject****\SplFileObject**|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanyResponse**](../Model/CompanyResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashPatch()`

```php
apiV2CompanyHashPatch($hash, $company_patch_request): \MagDv\Cargomart\Dto\CompanyInfoResponse
```

Метод редактирует данные компании.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$hash = 'hash_example'; // string | идентификатор компании
$company_patch_request = new \MagDv\Cargomart\Dto\CompanyPatchRequest(); // \MagDv\Cargomart\Dto\CompanyPatchRequest

try {
    $result = $apiInstance->apiV2CompanyHashPatch($hash, $company_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **company_patch_request** | [**\MagDv\Cargomart\Dto\CompanyPatchRequest**](../Model/CompanyPatchRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanyInfoResponse**](../Model/CompanyInfoResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashPut()`

```php
apiV2CompanyHashPut($hash, $company_put_request): \MagDv\Cargomart\Dto\CompanyInfoResponse
```

Метод сохраняет реквизиты своей организации.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$hash = 'hash_example'; // string | идентификатор компании
$company_put_request = new \MagDv\Cargomart\Dto\CompanyPutRequest(); // \MagDv\Cargomart\Dto\CompanyPutRequest

try {
    $result = $apiInstance->apiV2CompanyHashPut($hash, $company_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **company_put_request** | [**\MagDv\Cargomart\Dto\CompanyPutRequest**](../Model/CompanyPutRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanyInfoResponse**](../Model/CompanyInfoResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashSettingsGet()`

```php
apiV2CompanyHashSettingsGet($hash): \MagDv\Cargomart\Dto\CompanySettingsResponse
```

Получение настроек компании.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$hash = 'hash_example'; // string | идентификатор компании

try {
    $result = $apiInstance->apiV2CompanyHashSettingsGet($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashSettingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |

### Return type

[**\MagDv\Cargomart\Dto\CompanySettingsResponse**](../Model/CompanySettingsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashSettingsPatch()`

```php
apiV2CompanyHashSettingsPatch($hash, $settings_data_request): \MagDv\Cargomart\Dto\CompanySettingsResponse
```

Сохранение настроек компании.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$hash = 'hash_example'; // string | идентификатор компании
$settings_data_request = new \MagDv\Cargomart\Dto\SettingsDataRequest(); // \MagDv\Cargomart\Dto\SettingsDataRequest

try {
    $result = $apiInstance->apiV2CompanyHashSettingsPatch($hash, $settings_data_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashSettingsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **settings_data_request** | [**\MagDv\Cargomart\Dto\SettingsDataRequest**](../Model/SettingsDataRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanySettingsResponse**](../Model/CompanySettingsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyLocalityGet()`

```php
apiV2CompanyLocalityGet(): \MagDv\Cargomart\Dto\CompanyLocalityResponse
```

регионы доступные для перевозок.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiV2CompanyLocalityGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyLocalityGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\CompanyLocalityResponse**](../Model/CompanyLocalityResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfBranchGet()`

```php
apiV2CompanySelfBranchGet($filter_has_active_gp_contract, $filter_is_main): \MagDv\Cargomart\Dto\CompanyBranchResponse
```

Получение списка дочерних компаний.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_has_active_gp_contract = True; // bool | Фильтр по наличию активного договора с ГП.
$filter_is_main = True; // bool | Является ли компания головной

try {
    $result = $apiInstance->apiV2CompanySelfBranchGet($filter_has_active_gp_contract, $filter_is_main);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfBranchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_has_active_gp_contract** | **bool**| Фильтр по наличию активного договора с ГП. | [optional]
 **filter_is_main** | **bool**| Является ли компания головной | [optional]

### Return type

[**\MagDv\Cargomart\Dto\CompanyBranchResponse**](../Model/CompanyBranchResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfCommunicationContactsGet()`

```php
apiV2CompanySelfCommunicationContactsGet(): \MagDv\Cargomart\Dto\CommunicationContactsResponse
```

Получение контактов для связи.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2CompanySelfCommunicationContactsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfCommunicationContactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\CommunicationContactsResponse**](../Model/CommunicationContactsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfCommunicationContactsPut()`

```php
apiV2CompanySelfCommunicationContactsPut($communication_contacts_request): \MagDv\Cargomart\Dto\CommunicationContactsResponse
```

Метод редактирует контакты для связи.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$communication_contacts_request = new \MagDv\Cargomart\Dto\CommunicationContactsRequest(); // \MagDv\Cargomart\Dto\CommunicationContactsRequest

try {
    $result = $apiInstance->apiV2CompanySelfCommunicationContactsPut($communication_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfCommunicationContactsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_contacts_request** | [**\MagDv\Cargomart\Dto\CommunicationContactsRequest**](../Model/CommunicationContactsRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CommunicationContactsResponse**](../Model/CommunicationContactsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfGet()`

```php
apiV2CompanySelfGet(): \MagDv\Cargomart\Dto\CompanyResponse
```

Метод возвращает реквизиты моей организации.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2CompanySelfGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\CompanyResponse**](../Model/CompanyResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfPatch()`

```php
apiV2CompanySelfPatch($company_patch_request): \MagDv\Cargomart\Dto\CompanyInfoResponse
```

Метод редактирует данные моей компании.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$company_patch_request = new \MagDv\Cargomart\Dto\CompanyPatchRequest(); // \MagDv\Cargomart\Dto\CompanyPatchRequest

try {
    $result = $apiInstance->apiV2CompanySelfPatch($company_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_patch_request** | [**\MagDv\Cargomart\Dto\CompanyPatchRequest**](../Model/CompanyPatchRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanyInfoResponse**](../Model/CompanyInfoResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfPut()`

```php
apiV2CompanySelfPut($company_put_request): \MagDv\Cargomart\Dto\CompanyInfoResponse
```

Метод сохраняет реквизиты своей организации.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$company_put_request = new \MagDv\Cargomart\Dto\CompanyPutRequest(); // \MagDv\Cargomart\Dto\CompanyPutRequest

try {
    $result = $apiInstance->apiV2CompanySelfPut($company_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_put_request** | [**\MagDv\Cargomart\Dto\CompanyPutRequest**](../Model/CompanyPutRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanyInfoResponse**](../Model/CompanyInfoResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfSettingsGet()`

```php
apiV2CompanySelfSettingsGet(): \MagDv\Cargomart\Dto\CompanySettingsResponse
```

Получение настроек своей компании.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2CompanySelfSettingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfSettingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\CompanySettingsResponse**](../Model/CompanySettingsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfSettingsPatch()`

```php
apiV2CompanySelfSettingsPatch($settings_data_request): \MagDv\Cargomart\Dto\CompanySettingsResponse
```

Сохранение настроек компании.

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


$apiInstance = new MagDv\Cargomart\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$settings_data_request = new \MagDv\Cargomart\Dto\SettingsDataRequest(); // \MagDv\Cargomart\Dto\SettingsDataRequest

try {
    $result = $apiInstance->apiV2CompanySelfSettingsPatch($settings_data_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfSettingsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settings_data_request** | [**\MagDv\Cargomart\Dto\SettingsDataRequest**](../Model/SettingsDataRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanySettingsResponse**](../Model/CompanySettingsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
