# # OrderEditResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order** | [**\MagDv\Cargomart\Dto\OrderEditItem**](OrderEditItem.md) |  |
**company** | [**\MagDv\Cargomart\Dto\CompanyShort[]**](CompanyShort.md) | Список клиентов | [optional]
**company_branch** | [**\MagDv\Cargomart\Dto\CompanyBranch[]**](CompanyBranch.md) | Список дочерних компаний | [optional]
**condition** | [**\MagDv\Cargomart\Dto\OrderCondition[]**](OrderCondition.md) | Список условий заказа | [optional]
**contact** | [**\MagDv\Cargomart\Dto\UserContactShort[]**](UserContactShort.md) | Список контактов | [optional]
**currency** | [**\MagDv\Cargomart\Dto\Currency[]**](Currency.md) |  | [optional]
**device** | [**\MagDv\Cargomart\Dto\TruckDevice[]**](TruckDevice.md) | Список доп оборудования заказа | [optional]
**general_partner_contract** | [**\MagDv\Cargomart\Dto\GeneralPartnerContract[]**](GeneralPartnerContract.md) | Список условий договора с ГП | [optional]
**loading_type** | [**\MagDv\Cargomart\Dto\LoadingType[]**](LoadingType.md) | Список типов погрузки | [optional]
**locality** | [**\MagDv\Cargomart\Dto\Locality[]**](Locality.md) | Список локаций заказа | [optional]
**progress** | [**\MagDv\Cargomart\Dto\ProgressItem[]**](ProgressItem.md) | Элемент прогресса | [optional]
**server_time** | **string** | Время сервера | [optional]
**status** | [**\MagDv\Cargomart\Dto\OrderStatus[]**](OrderStatus.md) |  | [optional]
**storage_point** | [**\MagDv\Cargomart\Dto\PointItem[]**](PointItem.md) | Список складов | [optional]
**storage_point_contact** | [**\MagDv\Cargomart\Dto\ContactItem[]**](ContactItem.md) | Список контактов складов | [optional]
**truck_mode** | [**\MagDv\Cargomart\Dto\TruckMode[]**](TruckMode.md) | Список типов транспортных средств | [optional]
**truck_type** | [**\MagDv\Cargomart\Dto\TruckType[]**](TruckType.md) | Список типов кузовов | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
