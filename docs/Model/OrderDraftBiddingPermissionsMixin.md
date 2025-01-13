# # OrderDraftBiddingPermissionsMixin

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_type_id** | [**\MagDv\Cargomart\Dto\OrderAccessType**](OrderAccessType.md) | Тип доступа к заказу (доступные значения - any_exclude, prt_exclude, prt_contract_exclude) | [optional]
**access_client** | **string[]** | Список ID компаний попадающих в ограничения | [optional]
**contract_type_id** | **int** | Идентификатор типа договора партнерства, учитывается при accessTypeId &#x3D; prt_contract_exclude | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
