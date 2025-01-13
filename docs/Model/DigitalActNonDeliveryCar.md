# # DigitalActNonDeliveryCar

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор сущности акта |
**status** | [**\MagDv\Cargomart\Dto\OrderActNonDeliveryCarStatusEnum**](OrderActNonDeliveryCarStatusEnum.md) |  |
**signed_document** | [**\MagDv\Cargomart\Dto\SignedDocument**](SignedDocument.md) |  | [optional]
**create_date** | **\DateTime** | Дата и время создания акта |
**order_id** | **string** | Идентификатор заказа |
**settlement_name** | **string** | Наименование населённого пункта составления акта |
**shipment_failure_type** | [**\MagDv\Cargomart\Dto\OrderActNonDeliveryCarTypeEnum**](OrderActNonDeliveryCarTypeEnum.md) |  |
**reason** | **string** | Сведения о несоответствии машины/водителя | [optional]
**shipper** | [**\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany**](DigitalActNonDeliveryCarCompany.md) |  |
**consignee** | [**\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany**](DigitalActNonDeliveryCarCompany.md) |  |
**expeditor** | [**\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany**](DigitalActNonDeliveryCarCompany.md) |  |
**carrier** | [**\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany**](DigitalActNonDeliveryCarCompany.md) |  |
**order** | [**\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarOrder**](DigitalActNonDeliveryCarOrder.md) |  |
**vehicle** | [**\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarMixinVehicle**](DigitalActNonDeliveryCarMixinVehicle.md) |  | [optional]
**driver** | [**\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarMixinDriver**](DigitalActNonDeliveryCarMixinDriver.md) |  | [optional]
**date** | **\DateTime** | Дата документа |
**number** | **string** | Номер документа |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
