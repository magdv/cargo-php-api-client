# # OrderCardResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order** | [**\MagDv\Cargomart\Dto\OrderCardFull**](OrderCardFull.md) |  |
**truck_type** | [**\MagDv\Cargomart\Dto\TruckType[]**](TruckType.md) | Список типов кузовов | [optional]
**storage_point** | [**\MagDv\Cargomart\Dto\StoragePointExport[]**](StoragePointExport.md) | Список складов | [optional]
**storage_point_contact** | [**\MagDv\Cargomart\Dto\ContactItem[]**](ContactItem.md) | Список контактов складов | [optional]
**company** | [**\MagDv\Cargomart\Dto\CompanyShort[]**](CompanyShort.md) | Список клиентов | [optional]
**company_branch** | [**\MagDv\Cargomart\Dto\CompanyBranch[]**](CompanyBranch.md) | Список дочерних компаний | [optional]
**contact** | [**\MagDv\Cargomart\Dto\UserContactShort[]**](UserContactShort.md) | Список контактов | [optional]
**device** | [**\MagDv\Cargomart\Dto\TruckDevice[]**](TruckDevice.md) | Список доп оборудования заказа | [optional]
**condition** | [**\MagDv\Cargomart\Dto\OrderCondition[]**](OrderCondition.md) | Список условий заказа | [optional]
**loading_type** | [**\MagDv\Cargomart\Dto\LoadingType[]**](LoadingType.md) | Список типов погрузки | [optional]
**locality** | [**\MagDv\Cargomart\Dto\Locality[]**](Locality.md) | Список локаций заказа | [optional]
**status** | [**\MagDv\Cargomart\Dto\OrderStatus[]**](OrderStatus.md) |  | [optional]
**currency** | [**\MagDv\Cargomart\Dto\Currency[]**](Currency.md) |  | [optional]
**is_multi_currency** | **bool** | Флаг мультивалютности | [optional] [default to false]
**server_time** | **string** | Время сервера | [optional]
**proxy** | [**\MagDv\Cargomart\Dto\Document[]**](Document.md) | Доверенности заказов | [optional]
**document** | [**\MagDv\Cargomart\Dto\Document[]**](Document.md) | Документы заказа | [optional]
**driver** | [**\MagDv\Cargomart\Dto\DriverOld[]**](DriverOld.md) | Водитель | [optional]
**truck** | [**\MagDv\Cargomart\Dto\TruckOld[]**](TruckOld.md) | Транспортные средства, назначеные на заказ | [optional]
**truck_mode** | [**\MagDv\Cargomart\Dto\TruckMode[]**](TruckMode.md) | Список типов транспортных средств | [optional]
**general_partner_contract** | [**\MagDv\Cargomart\Dto\GeneralPartnerContract[]**](GeneralPartnerContract.md) | Список условий договора с ГП | [optional]
**monitoring** | [**\MagDv\Cargomart\Dto\MonitoringItem[]**](MonitoringItem.md) | Список ссылок на GPS/Глонасс мониторинг | [optional]
**refuse_reason** | [**\MagDv\Cargomart\Dto\OrderRefuseReasonItem**](OrderRefuseReasonItem.md) | @deprecated в пользу order.refuses[]. Сейчас тут выводится элемент словаря по коду отказа (из всего несколько вариантов) вместо действительной причины отказа | [optional]
**contract_type** | [**\MagDv\Cargomart\Dto\ContractType**](.md) | Тип договора | [optional]
**file** | [**\MagDv\Cargomart\Dto\FileV1[]**](FileV1.md) | Список файлов | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
