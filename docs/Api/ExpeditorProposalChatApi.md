# MagDv\Cargomart\ExpeditorProposalChatApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorProposalIdChatGet()**](ExpeditorProposalChatApi.md#apiV2ExpeditorProposalIdChatGet) | **GET** /api/v2/expeditor-proposal/{id}/chat | Получение списка комнат по заказу Экспедитора.


## `apiV2ExpeditorProposalIdChatGet()`

```php
apiV2ExpeditorProposalIdChatGet($id): \MagDv\Cargomart\Dto\ChatListResponse
```

Получение списка комнат по заказу Экспедитора.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalChatApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdChatGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalChatApi->apiV2ExpeditorProposalIdChatGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |

### Return type

[**\MagDv\Cargomart\Dto\ChatListResponse**](../Model/ChatListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
