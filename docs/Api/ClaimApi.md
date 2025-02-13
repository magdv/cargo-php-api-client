# MagDv\Cargomart\ClaimApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ClaimGet()**](ClaimApi.md#apiV2ClaimGet) | **GET** /api/v2/claim | Список требований на оплату


## `apiV2ClaimGet()`

```php
apiV2ClaimGet($filter_claim_number, $filter_serial_id, $filter_status, $filter_claimant, $filter_carrier, $filter_consignor, $filter_type, $sort, $per_page, $page): \MagDv\Cargomart\Dto\ClaimListResponse
```

Список требований на оплату

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


$apiInstance = new MagDv\Cargomart\Api\ClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_claim_number = 'filter_claim_number_example'; // string | Номер требования
$filter_serial_id = 'filter_serial_id_example'; // string | Номер заявки
$filter_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ClaimStatus()); // \MagDv\Cargomart\Dto\ClaimStatus[] | Статус требования
$filter_claimant = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ClaimantType(); // \MagDv\Cargomart\Dto\ClaimantType | Заявитель требования
$filter_carrier = 'filter_carrier_example'; // string | Хэш код компании перевозчика
$filter_consignor = 'filter_consignor_example'; // string | Хэш код компании заказчика
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ClaimFilterTypeEnum(); // \MagDv\Cargomart\Dto\ClaimFilterTypeEnum | Тип требования
$sort = array('sort_example'); // string[] | Сортировка списка требований. Поддерживается сортировка по полю date. При наличии префикса \"-\" сортировка будет произведена в обратном порядке.
$per_page = 20; // int | Количество элементов на страницу
$page = 1; // int | Номер страницы

try {
    $result = $apiInstance->apiV2ClaimGet($filter_claim_number, $filter_serial_id, $filter_status, $filter_claimant, $filter_carrier, $filter_consignor, $filter_type, $sort, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClaimApi->apiV2ClaimGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_claim_number** | **string**| Номер требования | [optional]
 **filter_serial_id** | **string**| Номер заявки | [optional]
 **filter_status** | [**\MagDv\Cargomart\Dto\ClaimStatus[]**](../Model/\MagDv\Cargomart\Dto\ClaimStatus.md)| Статус требования | [optional]
 **filter_claimant** | [**\MagDv\Cargomart\Dto\ClaimantType**](../Model/.md)| Заявитель требования | [optional]
 **filter_carrier** | **string**| Хэш код компании перевозчика | [optional]
 **filter_consignor** | **string**| Хэш код компании заказчика | [optional]
 **filter_type** | [**\MagDv\Cargomart\Dto\ClaimFilterTypeEnum**](../Model/.md)| Тип требования | [optional]
 **sort** | [**string[]**](../Model/string.md)| Сортировка списка требований. Поддерживается сортировка по полю date. При наличии префикса \&quot;-\&quot; сортировка будет произведена в обратном порядке. | [optional]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]
 **page** | **int**| Номер страницы | [optional] [default to 1]

### Return type

[**\MagDv\Cargomart\Dto\ClaimListResponse**](../Model/ClaimListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
