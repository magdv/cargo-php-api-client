# MagDv\Cargomart\CompanyApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2CompanyBranchAcGet()**](CompanyApi.md#apiV2CompanyBranchAcGet) | **GET** /api/v2/company/branch/ac | Поиск дочерних компаний для автокомплита
[**apiV2CompanyBranchHighlightedGet()**](CompanyApi.md#apiV2CompanyBranchHighlightedGet) | **GET** /api/v2/company-branch-highlighted | Метод возвращает список рекламируемых филиалов компаний.
[**apiV2CompanyGet()**](CompanyApi.md#apiV2CompanyGet) | **GET** /api/v2/company | Метод возвращает все компании с учетом фильтров
[**apiV2CompanyHashBranchGet()**](CompanyApi.md#apiV2CompanyHashBranchGet) | **GET** /api/v2/company/{hash}/branch | Получение списка дочерних компаний.
[**apiV2CompanyHashCarParkGet()**](CompanyApi.md#apiV2CompanyHashCarParkGet) | **GET** /api/v2/company/{hash}/car-park | автопарк перевозчика.
[**apiV2CompanyHashCarParkPatch()**](CompanyApi.md#apiV2CompanyHashCarParkPatch) | **PATCH** /api/v2/company/{hash}/car-park | автопарк перевозчика.
[**apiV2CompanyHashCarriageDirectionGet()**](CompanyApi.md#apiV2CompanyHashCarriageDirectionGet) | **GET** /api/v2/company/{hash}/carriage-direction | Направления перевозок отправителя.
[**apiV2CompanyHashCarriageDirectionPatch()**](CompanyApi.md#apiV2CompanyHashCarriageDirectionPatch) | **PATCH** /api/v2/company/{hash}/carriage-direction | Направления перевозок отправителя.
[**apiV2CompanyHashCarriageRegionGet()**](CompanyApi.md#apiV2CompanyHashCarriageRegionGet) | **GET** /api/v2/company/{hash}/carriage-region | Области перевозок.
[**apiV2CompanyHashCarriageRegionPatch()**](CompanyApi.md#apiV2CompanyHashCarriageRegionPatch) | **PATCH** /api/v2/company/{hash}/carriage-region | Области перевозок.
[**apiV2CompanyHashCommunicationContactsGet()**](CompanyApi.md#apiV2CompanyHashCommunicationContactsGet) | **GET** /api/v2/company/{hash}/communication-contacts | Получение контактов для связи.
[**apiV2CompanyHashCommunicationContactsPut()**](CompanyApi.md#apiV2CompanyHashCommunicationContactsPut) | **PUT** /api/v2/company/{hash}/communication-contacts | Метод редактирует контакты для связи.
[**apiV2CompanyHashDisabledDelete()**](CompanyApi.md#apiV2CompanyHashDisabledDelete) | **DELETE** /api/v2/company/{hash}/disabled | Метод удаляет компанию из чёрного списка.
[**apiV2CompanyHashDisabledPost()**](CompanyApi.md#apiV2CompanyHashDisabledPost) | **POST** /api/v2/company/{hash}/disabled | Метод добавления компании в чёрный список.
[**apiV2CompanyHashDocumentGet()**](CompanyApi.md#apiV2CompanyHashDocumentGet) | **GET** /api/v2/company/{hash}/document | Метод возвращает список документов, загруженный компанией.
[**apiV2CompanyHashDocumentIdGet()**](CompanyApi.md#apiV2CompanyHashDocumentIdGet) | **GET** /api/v2/company/{hash}/document/{id} | Метод возвращает указанный документ, принадлежащий компании
[**apiV2CompanyHashGet()**](CompanyApi.md#apiV2CompanyHashGet) | **GET** /api/v2/company/{hash} | Метод возвращает реквизиты организации по хэшу.
[**apiV2CompanyHashKonturReportGet()**](CompanyApi.md#apiV2CompanyHashKonturReportGet) | **GET** /api/v2/company/{hash}/kontur-report | Получение ссылки на отчет контура по компании.
[**apiV2CompanyHashLogoDelete()**](CompanyApi.md#apiV2CompanyHashLogoDelete) | **DELETE** /api/v2/company/{hash}/logo | Метод удаляет логотип организации.
[**apiV2CompanyHashLogoGet()**](CompanyApi.md#apiV2CompanyHashLogoGet) | **GET** /api/v2/company/{hash}/logo | Получения логотипа оранизации.
[**apiV2CompanyHashLogoPost()**](CompanyApi.md#apiV2CompanyHashLogoPost) | **POST** /api/v2/company/{hash}/logo | Метод сохраняет логотип организации.
[**apiV2CompanyHashPartnerAcceptPut()**](CompanyApi.md#apiV2CompanyHashPartnerAcceptPut) | **PUT** /api/v2/company/{hash}/partner-accept | Метод принимет запрос от компании на партнёрство
[**apiV2CompanyHashPartnerConditionsGet()**](CompanyApi.md#apiV2CompanyHashPartnerConditionsGet) | **GET** /api/v2/company/{hash}/partner-conditions | Получение условий партнёрства.
[**apiV2CompanyHashPartnerConditionsPatch()**](CompanyApi.md#apiV2CompanyHashPartnerConditionsPatch) | **PATCH** /api/v2/company/{hash}/partner-conditions | Метод редактирует условия партнёрства.
[**apiV2CompanyHashPartnerContractPut()**](CompanyApi.md#apiV2CompanyHashPartnerContractPut) | **PUT** /api/v2/company/{hash}/partner-contract | Метод для редактирования данных о договоре партнёров.
[**apiV2CompanyHashPartnerDeletePut()**](CompanyApi.md#apiV2CompanyHashPartnerDeletePut) | **PUT** /api/v2/company/{hash}/partner-delete | Метод удаляет компанию из партнёров
[**apiV2CompanyHashPartnerInvitePut()**](CompanyApi.md#apiV2CompanyHashPartnerInvitePut) | **PUT** /api/v2/company/{hash}/partner-invite | Метод добавляет компанию в партнёры
[**apiV2CompanyHashPartnerMessageGet()**](CompanyApi.md#apiV2CompanyHashPartnerMessageGet) | **GET** /api/v2/company/{hash}/partner-message | Получение последнего партнёрского сообщения от компании.
[**apiV2CompanyHashPartnerRejectPut()**](CompanyApi.md#apiV2CompanyHashPartnerRejectPut) | **PUT** /api/v2/company/{hash}/partner-reject | Метод отказывает компании в запросе на партнёрство
[**apiV2CompanyHashPatch()**](CompanyApi.md#apiV2CompanyHashPatch) | **PATCH** /api/v2/company/{hash} | Метод редактирует данные компании.
[**apiV2CompanyHashPut()**](CompanyApi.md#apiV2CompanyHashPut) | **PUT** /api/v2/company/{hash} | Метод сохраняет реквизиты своей организации.
[**apiV2CompanyHashRequirementGet()**](CompanyApi.md#apiV2CompanyHashRequirementGet) | **GET** /api/v2/company/{hash}/requirement | Требования отправителя к перевозкам.
[**apiV2CompanyHashRequirementPatch()**](CompanyApi.md#apiV2CompanyHashRequirementPatch) | **PATCH** /api/v2/company/{hash}/requirement | Требования отправителя к перевозкам.
[**apiV2CompanyHashReviewGet()**](CompanyApi.md#apiV2CompanyHashReviewGet) | **GET** /api/v2/company/{hash}/review | Отзывы на компанию.
[**apiV2CompanyHashReviewIdCommentGet()**](CompanyApi.md#apiV2CompanyHashReviewIdCommentGet) | **GET** /api/v2/company/{hash}/review/{id}/comment | Комментарии к отзыву на компанию.
[**apiV2CompanyHashReviewIdCommentPost()**](CompanyApi.md#apiV2CompanyHashReviewIdCommentPost) | **POST** /api/v2/company/{hash}/review/{id}/comment | Комментарий к отзыву на компанию.
[**apiV2CompanyHashReviewPost()**](CompanyApi.md#apiV2CompanyHashReviewPost) | **POST** /api/v2/company/{hash}/review | Отзыв на компанию.
[**apiV2CompanyHashSettingsGet()**](CompanyApi.md#apiV2CompanyHashSettingsGet) | **GET** /api/v2/company/{hash}/settings | Получение настроек компании.
[**apiV2CompanyHashSettingsPatch()**](CompanyApi.md#apiV2CompanyHashSettingsPatch) | **PATCH** /api/v2/company/{hash}/settings | Сохранение настроек компании.
[**apiV2CompanyHashStoragePointGet()**](CompanyApi.md#apiV2CompanyHashStoragePointGet) | **GET** /api/v2/company/{hash}/storage-point | Метод возвращает список пунктов погрузки/выгрузки.
[**apiV2CompanyLocalityGet()**](CompanyApi.md#apiV2CompanyLocalityGet) | **GET** /api/v2/company/locality | регионы доступные для перевозок.
[**apiV2CompanySelfBranchGet()**](CompanyApi.md#apiV2CompanySelfBranchGet) | **GET** /api/v2/company/self/branch | Получение списка дочерних компаний.
[**apiV2CompanySelfCarParkGet()**](CompanyApi.md#apiV2CompanySelfCarParkGet) | **GET** /api/v2/company/self/car-park | Мой автопарк.
[**apiV2CompanySelfCarParkPatch()**](CompanyApi.md#apiV2CompanySelfCarParkPatch) | **PATCH** /api/v2/company/self/car-park | автопарк перевозчика.
[**apiV2CompanySelfCarriageDirectionGet()**](CompanyApi.md#apiV2CompanySelfCarriageDirectionGet) | **GET** /api/v2/company/self/carriage-direction | Направления своих перевозок.
[**apiV2CompanySelfCarriageDirectionPatch()**](CompanyApi.md#apiV2CompanySelfCarriageDirectionPatch) | **PATCH** /api/v2/company/self/carriage-direction | Направления перевозок отправителя.
[**apiV2CompanySelfCarriageRegionGet()**](CompanyApi.md#apiV2CompanySelfCarriageRegionGet) | **GET** /api/v2/company/self/carriage-region | Области своих перевозок.
[**apiV2CompanySelfCarriageRegionPatch()**](CompanyApi.md#apiV2CompanySelfCarriageRegionPatch) | **PATCH** /api/v2/company/self/carriage-region | Области перевозок.
[**apiV2CompanySelfCarrierCountGet()**](CompanyApi.md#apiV2CompanySelfCarrierCountGet) | **GET** /api/v2/company/self/carrier-count | Получение количества перевозчиков, которые могут участвовать в заказах
[**apiV2CompanySelfCommunicationContactsGet()**](CompanyApi.md#apiV2CompanySelfCommunicationContactsGet) | **GET** /api/v2/company/self/communication-contacts | Получение контактов для связи.
[**apiV2CompanySelfCommunicationContactsPut()**](CompanyApi.md#apiV2CompanySelfCommunicationContactsPut) | **PUT** /api/v2/company/self/communication-contacts | Метод редактирует контакты для связи.
[**apiV2CompanySelfExpeditorContractGet()**](CompanyApi.md#apiV2CompanySelfExpeditorContractGet) | **GET** /api/v2/company/self/expeditor-contract | Вывод списка экспедиторских договоров.
[**apiV2CompanySelfGet()**](CompanyApi.md#apiV2CompanySelfGet) | **GET** /api/v2/company/self | Метод возвращает реквизиты моей организации.
[**apiV2CompanySelfLogoDelete()**](CompanyApi.md#apiV2CompanySelfLogoDelete) | **DELETE** /api/v2/company/self/logo | Метод удаляет логотип моей организации.
[**apiV2CompanySelfLogoGet()**](CompanyApi.md#apiV2CompanySelfLogoGet) | **GET** /api/v2/company/self/logo | Получения логотипа моей оранизации.
[**apiV2CompanySelfLogoPost()**](CompanyApi.md#apiV2CompanySelfLogoPost) | **POST** /api/v2/company/self/logo | Метод сохраняет логотип моей организации.
[**apiV2CompanySelfPartnerConditionsGet()**](CompanyApi.md#apiV2CompanySelfPartnerConditionsGet) | **GET** /api/v2/company/self/partner-conditions | Получение условий партнёрства.
[**apiV2CompanySelfPartnerConditionsPatch()**](CompanyApi.md#apiV2CompanySelfPartnerConditionsPatch) | **PATCH** /api/v2/company/self/partner-conditions | Метод редактирует условия партнёрства.
[**apiV2CompanySelfPatch()**](CompanyApi.md#apiV2CompanySelfPatch) | **PATCH** /api/v2/company/self | Метод редактирует данные моей компании.
[**apiV2CompanySelfPut()**](CompanyApi.md#apiV2CompanySelfPut) | **PUT** /api/v2/company/self | Метод сохраняет реквизиты своей организации.
[**apiV2CompanySelfRequirementGet()**](CompanyApi.md#apiV2CompanySelfRequirementGet) | **GET** /api/v2/company/self/requirement | Мои требования к перевозкам.
[**apiV2CompanySelfRequirementPatch()**](CompanyApi.md#apiV2CompanySelfRequirementPatch) | **PATCH** /api/v2/company/self/requirement | Требования отправителя к перевозкам.
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

## `apiV2CompanyHashCarParkGet()`

```php
apiV2CompanyHashCarParkGet($hash): \MagDv\Cargomart\Dto\CarParkResponse
```

автопарк перевозчика.

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
    $result = $apiInstance->apiV2CompanyHashCarParkGet($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashCarParkGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |

### Return type

[**\MagDv\Cargomart\Dto\CarParkResponse**](../Model/CarParkResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashCarParkPatch()`

```php
apiV2CompanyHashCarParkPatch($hash, $car_park): \MagDv\Cargomart\Dto\CarParkResponse
```

автопарк перевозчика.

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
$car_park = new \MagDv\Cargomart\Dto\CarPark(); // \MagDv\Cargomart\Dto\CarPark

try {
    $result = $apiInstance->apiV2CompanyHashCarParkPatch($hash, $car_park);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashCarParkPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **car_park** | [**\MagDv\Cargomart\Dto\CarPark**](../Model/CarPark.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CarParkResponse**](../Model/CarParkResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashCarriageDirectionGet()`

```php
apiV2CompanyHashCarriageDirectionGet($hash): \MagDv\Cargomart\Dto\CompanyCarriageDirectionResponse
```

Направления перевозок отправителя.

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
    $result = $apiInstance->apiV2CompanyHashCarriageDirectionGet($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashCarriageDirectionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |

### Return type

[**\MagDv\Cargomart\Dto\CompanyCarriageDirectionResponse**](../Model/CompanyCarriageDirectionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashCarriageDirectionPatch()`

```php
apiV2CompanyHashCarriageDirectionPatch($hash, $carriage_direction): \MagDv\Cargomart\Dto\CompanyCarriageDirectionResponse
```

Направления перевозок отправителя.

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
$carriage_direction = new \MagDv\Cargomart\Dto\CarriageDirection(); // \MagDv\Cargomart\Dto\CarriageDirection

try {
    $result = $apiInstance->apiV2CompanyHashCarriageDirectionPatch($hash, $carriage_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashCarriageDirectionPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **carriage_direction** | [**\MagDv\Cargomart\Dto\CarriageDirection**](../Model/CarriageDirection.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanyCarriageDirectionResponse**](../Model/CompanyCarriageDirectionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashCarriageRegionGet()`

```php
apiV2CompanyHashCarriageRegionGet($hash): \MagDv\Cargomart\Dto\CompanyCarriageRegionResponse
```

Области перевозок.

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
    $result = $apiInstance->apiV2CompanyHashCarriageRegionGet($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashCarriageRegionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |

### Return type

[**\MagDv\Cargomart\Dto\CompanyCarriageRegionResponse**](../Model/CompanyCarriageRegionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashCarriageRegionPatch()`

```php
apiV2CompanyHashCarriageRegionPatch($hash, $carriage_region): \MagDv\Cargomart\Dto\CompanyCarriageRegionResponse
```

Области перевозок.

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
$carriage_region = new \MagDv\Cargomart\Dto\CarriageRegion(); // \MagDv\Cargomart\Dto\CarriageRegion

try {
    $result = $apiInstance->apiV2CompanyHashCarriageRegionPatch($hash, $carriage_region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashCarriageRegionPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **carriage_region** | [**\MagDv\Cargomart\Dto\CarriageRegion**](../Model/CarriageRegion.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanyCarriageRegionResponse**](../Model/CompanyCarriageRegionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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

## `apiV2CompanyHashDisabledDelete()`

```php
apiV2CompanyHashDisabledDelete($hash): \MagDv\Cargomart\Dto\CompanyInfoResponse
```

Метод удаляет компанию из чёрного списка.

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
    $result = $apiInstance->apiV2CompanyHashDisabledDelete($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashDisabledDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |

### Return type

[**\MagDv\Cargomart\Dto\CompanyInfoResponse**](../Model/CompanyInfoResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashDisabledPost()`

```php
apiV2CompanyHashDisabledPost($hash, $disabled_request): \MagDv\Cargomart\Dto\CompanyInfoResponse
```

Метод добавления компании в чёрный список.

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
$disabled_request = new \MagDv\Cargomart\Dto\DisabledRequest(); // \MagDv\Cargomart\Dto\DisabledRequest

try {
    $result = $apiInstance->apiV2CompanyHashDisabledPost($hash, $disabled_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashDisabledPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **disabled_request** | [**\MagDv\Cargomart\Dto\DisabledRequest**](../Model/DisabledRequest.md)|  |

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

## `apiV2CompanyHashDocumentGet()`

```php
apiV2CompanyHashDocumentGet($hash, $filter_search_text, $filter_type_id, $sort, $page, $per_page, $with): \MagDv\Cargomart\Dto\CompanyDocumentList
```

Метод возвращает список документов, загруженный компанией.

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
$filter_search_text = 'filter_search_text_example'; // string | Поиск по наименованию документа.
$filter_type_id = 56; // int | Точная фильтрация по типам документов.
$sort = array('sort_example'); // string[] | Сортировка списка документов пользователя. Поддерживается сортировка по полям title, createDate, documentType. При наличии префикса \"-\" сортировка будет произведена в обратном порядке.
$page = 56; // int | Пагинация списка документов.
$per_page = 56; // int | Количество элементов на странице.
$with = array('with_example'); // string[] | Список ключей для детализации связанных сущностей. Доступно: documentType

try {
    $result = $apiInstance->apiV2CompanyHashDocumentGet($hash, $filter_search_text, $filter_type_id, $sort, $page, $per_page, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **filter_search_text** | **string**| Поиск по наименованию документа. | [optional]
 **filter_type_id** | **int**| Точная фильтрация по типам документов. | [optional]
 **sort** | [**string[]**](../Model/string.md)| Сортировка списка документов пользователя. Поддерживается сортировка по полям title, createDate, documentType. При наличии префикса \&quot;-\&quot; сортировка будет произведена в обратном порядке. | [optional]
 **page** | **int**| Пагинация списка документов. | [optional]
 **per_page** | **int**| Количество элементов на странице. | [optional]
 **with** | [**string[]**](../Model/string.md)| Список ключей для детализации связанных сущностей. Доступно: documentType | [optional]

### Return type

[**\MagDv\Cargomart\Dto\CompanyDocumentList**](../Model/CompanyDocumentList.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashDocumentIdGet()`

```php
apiV2CompanyHashDocumentIdGet($hash, $id, $with): \MagDv\Cargomart\Dto\CompanyDocumentItem
```

Метод возвращает указанный документ, принадлежащий компании

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
$id = 'id_example'; // string | Идентификатор документа
$with = array('with_example'); // string[] | Список ключей для детализации связанных сущностей. Доступно: documentType

try {
    $result = $apiInstance->apiV2CompanyHashDocumentIdGet($hash, $id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashDocumentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **id** | **string**| Идентификатор документа |
 **with** | [**string[]**](../Model/string.md)| Список ключей для детализации связанных сущностей. Доступно: documentType | [optional]

### Return type

[**\MagDv\Cargomart\Dto\CompanyDocumentItem**](../Model/CompanyDocumentItem.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
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

## `apiV2CompanyHashKonturReportGet()`

```php
apiV2CompanyHashKonturReportGet($hash): \MagDv\Cargomart\Dto\CompanyKonturReportResponse
```

Получение ссылки на отчет контура по компании.

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
    $result = $apiInstance->apiV2CompanyHashKonturReportGet($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashKonturReportGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |

### Return type

[**\MagDv\Cargomart\Dto\CompanyKonturReportResponse**](../Model/CompanyKonturReportResponse.md)

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

## `apiV2CompanyHashPartnerAcceptPut()`

```php
apiV2CompanyHashPartnerAcceptPut($hash, $partner_contract_request): \MagDv\Cargomart\Dto\PartnerStatusResponse
```

Метод принимет запрос от компании на партнёрство

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
$partner_contract_request = new \MagDv\Cargomart\Dto\PartnerContractRequest(); // \MagDv\Cargomart\Dto\PartnerContractRequest

try {
    $result = $apiInstance->apiV2CompanyHashPartnerAcceptPut($hash, $partner_contract_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashPartnerAcceptPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **partner_contract_request** | [**\MagDv\Cargomart\Dto\PartnerContractRequest**](../Model/PartnerContractRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\PartnerStatusResponse**](../Model/PartnerStatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashPartnerConditionsGet()`

```php
apiV2CompanyHashPartnerConditionsGet($hash): \MagDv\Cargomart\Dto\PartnerConditionsResponse
```

Получение условий партнёрства.

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
    $result = $apiInstance->apiV2CompanyHashPartnerConditionsGet($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashPartnerConditionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |

### Return type

[**\MagDv\Cargomart\Dto\PartnerConditionsResponse**](../Model/PartnerConditionsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashPartnerConditionsPatch()`

```php
apiV2CompanyHashPartnerConditionsPatch($hash, $partner_conditions_request): \MagDv\Cargomart\Dto\PartnerConditionsResponse
```

Метод редактирует условия партнёрства.

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
$partner_conditions_request = new \MagDv\Cargomart\Dto\PartnerConditionsRequest(); // \MagDv\Cargomart\Dto\PartnerConditionsRequest

try {
    $result = $apiInstance->apiV2CompanyHashPartnerConditionsPatch($hash, $partner_conditions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashPartnerConditionsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **partner_conditions_request** | [**\MagDv\Cargomart\Dto\PartnerConditionsRequest**](../Model/PartnerConditionsRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\PartnerConditionsResponse**](../Model/PartnerConditionsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashPartnerContractPut()`

```php
apiV2CompanyHashPartnerContractPut($hash, $partner_contract_request): \MagDv\Cargomart\Dto\CompanyInfoResponse
```

Метод для редактирования данных о договоре партнёров.

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
$partner_contract_request = new \MagDv\Cargomart\Dto\PartnerContractRequest(); // \MagDv\Cargomart\Dto\PartnerContractRequest

try {
    $result = $apiInstance->apiV2CompanyHashPartnerContractPut($hash, $partner_contract_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashPartnerContractPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **partner_contract_request** | [**\MagDv\Cargomart\Dto\PartnerContractRequest**](../Model/PartnerContractRequest.md)|  |

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

## `apiV2CompanyHashPartnerDeletePut()`

```php
apiV2CompanyHashPartnerDeletePut($hash, $partner_short_form_request): \MagDv\Cargomart\Dto\PartnerStatusResponse
```

Метод удаляет компанию из партнёров

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
$partner_short_form_request = new \MagDv\Cargomart\Dto\PartnerShortFormRequest(); // \MagDv\Cargomart\Dto\PartnerShortFormRequest

try {
    $result = $apiInstance->apiV2CompanyHashPartnerDeletePut($hash, $partner_short_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashPartnerDeletePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **partner_short_form_request** | [**\MagDv\Cargomart\Dto\PartnerShortFormRequest**](../Model/PartnerShortFormRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\PartnerStatusResponse**](../Model/PartnerStatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashPartnerInvitePut()`

```php
apiV2CompanyHashPartnerInvitePut($hash, $partner_form_request): \MagDv\Cargomart\Dto\PartnerStatusResponse
```

Метод добавляет компанию в партнёры

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
$partner_form_request = new \MagDv\Cargomart\Dto\PartnerFormRequest(); // \MagDv\Cargomart\Dto\PartnerFormRequest

try {
    $result = $apiInstance->apiV2CompanyHashPartnerInvitePut($hash, $partner_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashPartnerInvitePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **partner_form_request** | [**\MagDv\Cargomart\Dto\PartnerFormRequest**](../Model/PartnerFormRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\PartnerStatusResponse**](../Model/PartnerStatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashPartnerMessageGet()`

```php
apiV2CompanyHashPartnerMessageGet($hash): \MagDv\Cargomart\Dto\PartnerMessageResponse
```

Получение последнего партнёрского сообщения от компании.

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
    $result = $apiInstance->apiV2CompanyHashPartnerMessageGet($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashPartnerMessageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |

### Return type

[**\MagDv\Cargomart\Dto\PartnerMessageResponse**](../Model/PartnerMessageResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashPartnerRejectPut()`

```php
apiV2CompanyHashPartnerRejectPut($hash, $partner_short_form_request): \MagDv\Cargomart\Dto\PartnerStatusResponse
```

Метод отказывает компании в запросе на партнёрство

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
$partner_short_form_request = new \MagDv\Cargomart\Dto\PartnerShortFormRequest(); // \MagDv\Cargomart\Dto\PartnerShortFormRequest

try {
    $result = $apiInstance->apiV2CompanyHashPartnerRejectPut($hash, $partner_short_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashPartnerRejectPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **partner_short_form_request** | [**\MagDv\Cargomart\Dto\PartnerShortFormRequest**](../Model/PartnerShortFormRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\PartnerStatusResponse**](../Model/PartnerStatusResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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

## `apiV2CompanyHashRequirementGet()`

```php
apiV2CompanyHashRequirementGet($hash): \MagDv\Cargomart\Dto\CompanyRequirementResponse
```

Требования отправителя к перевозкам.

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
    $result = $apiInstance->apiV2CompanyHashRequirementGet($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashRequirementGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |

### Return type

[**\MagDv\Cargomart\Dto\CompanyRequirementResponse**](../Model/CompanyRequirementResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashRequirementPatch()`

```php
apiV2CompanyHashRequirementPatch($hash, $requirement): \MagDv\Cargomart\Dto\CompanyRequirementResponse
```

Требования отправителя к перевозкам.

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
$requirement = new \MagDv\Cargomart\Dto\Requirement(); // \MagDv\Cargomart\Dto\Requirement

try {
    $result = $apiInstance->apiV2CompanyHashRequirementPatch($hash, $requirement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashRequirementPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **requirement** | [**\MagDv\Cargomart\Dto\Requirement**](../Model/Requirement.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanyRequirementResponse**](../Model/CompanyRequirementResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashReviewGet()`

```php
apiV2CompanyHashReviewGet($hash): \MagDv\Cargomart\Dto\CompanyReviewListResponse
```

Отзывы на компанию.

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
    $result = $apiInstance->apiV2CompanyHashReviewGet($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashReviewGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |

### Return type

[**\MagDv\Cargomart\Dto\CompanyReviewListResponse**](../Model/CompanyReviewListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashReviewIdCommentGet()`

```php
apiV2CompanyHashReviewIdCommentGet($hash, $id): \MagDv\Cargomart\Dto\CompanyReviewCommentListResponse
```

Комментарии к отзыву на компанию.

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
$id = 'id_example'; // string | Идентификатор отзыва

try {
    $result = $apiInstance->apiV2CompanyHashReviewIdCommentGet($hash, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashReviewIdCommentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **id** | **string**| Идентификатор отзыва |

### Return type

[**\MagDv\Cargomart\Dto\CompanyReviewCommentListResponse**](../Model/CompanyReviewCommentListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashReviewIdCommentPost()`

```php
apiV2CompanyHashReviewIdCommentPost($hash, $id, $company_review_comment_request): \MagDv\Cargomart\Dto\CompanyReviewCommentResponse
```

Комментарий к отзыву на компанию.

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
$id = 'id_example'; // string | Идентификатор отзыва
$company_review_comment_request = new \MagDv\Cargomart\Dto\CompanyReviewCommentRequest(); // \MagDv\Cargomart\Dto\CompanyReviewCommentRequest

try {
    $result = $apiInstance->apiV2CompanyHashReviewIdCommentPost($hash, $id, $company_review_comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashReviewIdCommentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **id** | **string**| Идентификатор отзыва |
 **company_review_comment_request** | [**\MagDv\Cargomart\Dto\CompanyReviewCommentRequest**](../Model/CompanyReviewCommentRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanyReviewCommentResponse**](../Model/CompanyReviewCommentResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanyHashReviewPost()`

```php
apiV2CompanyHashReviewPost($hash, $company_review_request): \MagDv\Cargomart\Dto\CompanyReviewListResponse
```

Отзыв на компанию.

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
$company_review_request = new \MagDv\Cargomart\Dto\CompanyReviewRequest(); // \MagDv\Cargomart\Dto\CompanyReviewRequest

try {
    $result = $apiInstance->apiV2CompanyHashReviewPost($hash, $company_review_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashReviewPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| идентификатор компании |
 **company_review_request** | [**\MagDv\Cargomart\Dto\CompanyReviewRequest**](../Model/CompanyReviewRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanyReviewListResponse**](../Model/CompanyReviewListResponse.md)

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

## `apiV2CompanyHashStoragePointGet()`

```php
apiV2CompanyHashStoragePointGet($hash, $filter_title, $filter_locality_name, $filter_external_id, $sort, $page, $per_page, $selected_ids): \MagDv\Cargomart\Dto\StoragePointList
```

Метод возвращает список пунктов погрузки/выгрузки.

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
$hash = 'hash_example'; // string | Идентификатор компании
$filter_title = 'filter_title_example'; // string | Название пункта погрузки/выгрузки
$filter_locality_name = 'filter_locality_name_example'; // string | Город
$filter_external_id = 'filter_external_id_example'; // string | Внешний идентификатор
$sort = array('sort_example'); // string[] | Список ключей для сортировки. Для сортировки доступны поля модели (title, localityName). Сортировка производитсяя по возрастанию. При наличии префикса \"-\" сортировка будет произведена в обратном порядке.
$page = 56; // int | Просматриваемая страница, по умолчанию 1
$per_page = 56; // int | Количество элементов на одну страницу, по умолчанию 20
$selected_ids = array(56); // int[] | Отсортировать пункты под идентификатору(на первое место)

try {
    $result = $apiInstance->apiV2CompanyHashStoragePointGet($hash, $filter_title, $filter_locality_name, $filter_external_id, $sort, $page, $per_page, $selected_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanyHashStoragePointGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Идентификатор компании |
 **filter_title** | **string**| Название пункта погрузки/выгрузки | [optional]
 **filter_locality_name** | **string**| Город | [optional]
 **filter_external_id** | **string**| Внешний идентификатор | [optional]
 **sort** | [**string[]**](../Model/string.md)| Список ключей для сортировки. Для сортировки доступны поля модели (title, localityName). Сортировка производитсяя по возрастанию. При наличии префикса \&quot;-\&quot; сортировка будет произведена в обратном порядке. | [optional]
 **page** | **int**| Просматриваемая страница, по умолчанию 1 | [optional]
 **per_page** | **int**| Количество элементов на одну страницу, по умолчанию 20 | [optional]
 **selected_ids** | [**int[]**](../Model/int.md)| Отсортировать пункты под идентификатору(на первое место) | [optional]

### Return type

[**\MagDv\Cargomart\Dto\StoragePointList**](../Model/StoragePointList.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
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

## `apiV2CompanySelfCarParkGet()`

```php
apiV2CompanySelfCarParkGet(): \MagDv\Cargomart\Dto\CarParkResponse
```

Мой автопарк.

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
    $result = $apiInstance->apiV2CompanySelfCarParkGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfCarParkGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\CarParkResponse**](../Model/CarParkResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfCarParkPatch()`

```php
apiV2CompanySelfCarParkPatch($car_park): \MagDv\Cargomart\Dto\CarParkResponse
```

автопарк перевозчика.

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
$car_park = new \MagDv\Cargomart\Dto\CarPark(); // \MagDv\Cargomart\Dto\CarPark

try {
    $result = $apiInstance->apiV2CompanySelfCarParkPatch($car_park);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfCarParkPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **car_park** | [**\MagDv\Cargomart\Dto\CarPark**](../Model/CarPark.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CarParkResponse**](../Model/CarParkResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfCarriageDirectionGet()`

```php
apiV2CompanySelfCarriageDirectionGet(): \MagDv\Cargomart\Dto\CompanyCarriageDirectionResponse
```

Направления своих перевозок.

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
    $result = $apiInstance->apiV2CompanySelfCarriageDirectionGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfCarriageDirectionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\CompanyCarriageDirectionResponse**](../Model/CompanyCarriageDirectionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfCarriageDirectionPatch()`

```php
apiV2CompanySelfCarriageDirectionPatch($carriage_direction): \MagDv\Cargomart\Dto\CompanyCarriageDirectionResponse
```

Направления перевозок отправителя.

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
$carriage_direction = new \MagDv\Cargomart\Dto\CarriageDirection(); // \MagDv\Cargomart\Dto\CarriageDirection

try {
    $result = $apiInstance->apiV2CompanySelfCarriageDirectionPatch($carriage_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfCarriageDirectionPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carriage_direction** | [**\MagDv\Cargomart\Dto\CarriageDirection**](../Model/CarriageDirection.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanyCarriageDirectionResponse**](../Model/CompanyCarriageDirectionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfCarriageRegionGet()`

```php
apiV2CompanySelfCarriageRegionGet(): \MagDv\Cargomart\Dto\CompanyCarriageRegionResponse
```

Области своих перевозок.

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
    $result = $apiInstance->apiV2CompanySelfCarriageRegionGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfCarriageRegionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\CompanyCarriageRegionResponse**](../Model/CompanyCarriageRegionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfCarriageRegionPatch()`

```php
apiV2CompanySelfCarriageRegionPatch($carriage_region): \MagDv\Cargomart\Dto\CompanyCarriageRegionResponse
```

Области перевозок.

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
$carriage_region = new \MagDv\Cargomart\Dto\CarriageRegion(); // \MagDv\Cargomart\Dto\CarriageRegion

try {
    $result = $apiInstance->apiV2CompanySelfCarriageRegionPatch($carriage_region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfCarriageRegionPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carriage_region** | [**\MagDv\Cargomart\Dto\CarriageRegion**](../Model/CarriageRegion.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanyCarriageRegionResponse**](../Model/CompanyCarriageRegionResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfCarrierCountGet()`

```php
apiV2CompanySelfCarrierCountGet($relate_type, $contract_type_id, $exclude_ids): \MagDv\Cargomart\Dto\CarrierCountResponse
```

Получение количества перевозчиков, которые могут участвовать в заказах

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
$relate_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\CarrierCountRelateTypeEnum(); // \MagDv\Cargomart\Dto\CarrierCountRelateTypeEnum | Из какого массива перевозчиков нужно выбирать (все, мои партнеры, партнеры с договорами)
$contract_type_id = 56; // int | При relateType = partner-with-contract, можно указать тип договора
$exclude_ids = array('exclude_ids_example'); // string[] | Список идентификаторов перевозчиков, которым ограничен доступ

try {
    $result = $apiInstance->apiV2CompanySelfCarrierCountGet($relate_type, $contract_type_id, $exclude_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfCarrierCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **relate_type** | [**\MagDv\Cargomart\Dto\CarrierCountRelateTypeEnum**](../Model/.md)| Из какого массива перевозчиков нужно выбирать (все, мои партнеры, партнеры с договорами) | [optional]
 **contract_type_id** | **int**| При relateType &#x3D; partner-with-contract, можно указать тип договора | [optional]
 **exclude_ids** | [**string[]**](../Model/string.md)| Список идентификаторов перевозчиков, которым ограничен доступ | [optional]

### Return type

[**\MagDv\Cargomart\Dto\CarrierCountResponse**](../Model/CarrierCountResponse.md)

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

## `apiV2CompanySelfExpeditorContractGet()`

```php
apiV2CompanySelfExpeditorContractGet($proxy_type): \MagDv\Cargomart\Dto\CompanyExpeditorContractResponse
```

Вывод списка экспедиторских договоров.

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
$proxy_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ContractRoleFilterEnum(); // \MagDv\Cargomart\Dto\ContractRoleFilterEnum | Все, админ ПЭП или пользователь ПЭП

try {
    $result = $apiInstance->apiV2CompanySelfExpeditorContractGet($proxy_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfExpeditorContractGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **proxy_type** | [**\MagDv\Cargomart\Dto\ContractRoleFilterEnum**](../Model/.md)| Все, админ ПЭП или пользователь ПЭП | [optional]

### Return type

[**\MagDv\Cargomart\Dto\CompanyExpeditorContractResponse**](../Model/CompanyExpeditorContractResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
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

## `apiV2CompanySelfLogoDelete()`

```php
apiV2CompanySelfLogoDelete(): \MagDv\Cargomart\Dto\CompanyResponse
```

Метод удаляет логотип моей организации.

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
    $result = $apiInstance->apiV2CompanySelfLogoDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfLogoDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2CompanySelfLogoGet()`

```php
apiV2CompanySelfLogoGet($size, $preview)
```

Получения логотипа моей оранизации.

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
$size = 'size_example'; // string | размер изображения - 90x50, 45x45, 80x80 60x40, 80x40, 80x20, 100x100, 170x170, 200x50, 160x160, 120x50
$preview = True; // bool | Для браузера скачать или отдать в просмотр.

try {
    $apiInstance->apiV2CompanySelfLogoGet($size, $preview);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfLogoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

## `apiV2CompanySelfLogoPost()`

```php
apiV2CompanySelfLogoPost($file): \MagDv\Cargomart\Dto\CompanyResponse
```

Метод сохраняет логотип моей организации.

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
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->apiV2CompanySelfLogoPost($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfLogoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

## `apiV2CompanySelfPartnerConditionsGet()`

```php
apiV2CompanySelfPartnerConditionsGet(): \MagDv\Cargomart\Dto\PartnerConditionsResponse
```

Получение условий партнёрства.

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
    $result = $apiInstance->apiV2CompanySelfPartnerConditionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfPartnerConditionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\PartnerConditionsResponse**](../Model/PartnerConditionsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfPartnerConditionsPatch()`

```php
apiV2CompanySelfPartnerConditionsPatch($partner_conditions_request): \MagDv\Cargomart\Dto\PartnerConditionsResponse
```

Метод редактирует условия партнёрства.

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
$partner_conditions_request = new \MagDv\Cargomart\Dto\PartnerConditionsRequest(); // \MagDv\Cargomart\Dto\PartnerConditionsRequest

try {
    $result = $apiInstance->apiV2CompanySelfPartnerConditionsPatch($partner_conditions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfPartnerConditionsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_conditions_request** | [**\MagDv\Cargomart\Dto\PartnerConditionsRequest**](../Model/PartnerConditionsRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\PartnerConditionsResponse**](../Model/PartnerConditionsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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

## `apiV2CompanySelfRequirementGet()`

```php
apiV2CompanySelfRequirementGet(): \MagDv\Cargomart\Dto\CompanyRequirementResponse
```

Мои требования к перевозкам.

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
    $result = $apiInstance->apiV2CompanySelfRequirementGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfRequirementGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\CompanyRequirementResponse**](../Model/CompanyRequirementResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2CompanySelfRequirementPatch()`

```php
apiV2CompanySelfRequirementPatch($requirement): \MagDv\Cargomart\Dto\CompanyRequirementResponse
```

Требования отправителя к перевозкам.

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
$requirement = new \MagDv\Cargomart\Dto\Requirement(); // \MagDv\Cargomart\Dto\Requirement

try {
    $result = $apiInstance->apiV2CompanySelfRequirementPatch($requirement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->apiV2CompanySelfRequirementPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requirement** | [**\MagDv\Cargomart\Dto\Requirement**](../Model/Requirement.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\CompanyRequirementResponse**](../Model/CompanyRequirementResponse.md)

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
