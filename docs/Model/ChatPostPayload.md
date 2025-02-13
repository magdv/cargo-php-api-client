# # ChatPostPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\MagDv\Cargomart\Dto\ChatPostTypeEnum**](ChatPostTypeEnum.md) | Тип сообщения чата |
**carrier** | [**\MagDv\Cargomart\Dto\ChatPostPayloadBookingCarrier**](ChatPostPayloadBookingCarrier.md) |  |
**comment** | **string** | Комментарий |
**id** | **string** | Идентификатор запроса на сертификат |
**short_name** | **string** | Название компании |
**logo** | **string** | Url логотипа компании |
**create** | [**\MagDv\Cargomart\Dto\ChatPostPayloadContactChangeCreate**](ChatPostPayloadContactChangeCreate.md) |  | [optional]
**delete** | [**\MagDv\Cargomart\Dto\ChatPostPayloadContactChangeCreate**](ChatPostPayloadContactChangeCreate.md) |  | [optional]
**history_id** | **int** | ID истории контрагента |
**operation** | [**\MagDv\Cargomart\Dto\ChatPostOperationEnum**](ChatPostOperationEnum.md) | Тип операции |
**document_id** | **int** | Идентификатор документа | [optional]
**url** | **string** | ссылка | [optional]
**files** | [**\MagDv\Cargomart\Dto\FileV1[]**](FileV1.md) | Список файлов | [optional]
**driver** | [**\MagDv\Cargomart\Dto\ChatPostPayloadDriverChangeDriver**](ChatPostPayloadDriverChangeDriver.md) |  | [optional]
**emails** | **string[]** | Электронные ящики |
**signer_fio** | **string** | ФИО инициатора действия | [optional]
**sign_date** | **string** | Дата подписания | [optional]
**file_url** | **string** | Файл доверенности | [optional]
**sign_file_url** | **string** | Файл подписи | [optional]
**proxy_pack_url** | **string** | Ссылка на архив | [optional]
**number** | **string** | Номер счета |
**date** | **\DateTime** | Дата оплаты |
**value** | **string** | Сумма оплаты |
**currency_code** | **string** | Валюта |
**payments** | [**\MagDv\Cargomart\Dto\ChatPostPayloadOrderExpeditorPaymentCarrierUpdatePaymentsInner[]**](ChatPostPayloadOrderExpeditorPaymentCarrierUpdatePaymentsInner.md) |  | [optional]
**cert_id** | **string** | Идентификатор сертификата |
**serial_id** | **int** | Порядковый номер заказа | [optional]
**message** | **string** | Сообщение об изменении |
**changes** | [**\MagDv\Cargomart\Dto\ChatPostPayloadModelFieldChangeChangesInner[]**](ChatPostPayloadModelFieldChangeChangesInner.md) | Список изменений |
**point** | [**\MagDv\Cargomart\Dto\ChatPostPayloadOrderPointInner[]**](ChatPostPayloadOrderPointInner.md) | Данные пунктов погрузки | [optional]
**order_id** | **string** | Идентификатор заказа |
**correction_id** | **int** | Идентификатор запроса на изменение водителя и машины |
**comment_for_consignor** | **string** | Комментарий для отправителя | [optional]
**comment_for_carrier** | **string** | Комментарий для перевозчика | [optional]
**package_id** | **string** | Идентификатор пакета документов | [optional]
**reason** | **string** | Причина отклонения | [optional]
**file_ids** | **string[]** | Идентификаторы файлов на модерации | [optional]
**file_urls** | **string[]** | Ссылки на файлы на модерации | [optional]
**creator_fio** | **string** | ФИО автора |
**event_date** | **\DateTime** | Дата события | [optional]
**ecn_type** | [**\MagDv\Cargomart\Dto\EcnType**](EcnType.md) |  |
**ecn_date** | **string** | Дата ТРН. Формат: DD.MM.YYYY. | [optional]
**old_ecn_type** | [**\MagDv\Cargomart\Dto\EcnType**](EcnType.md) |  |
**old_ecn_number** | **string** | Номер отмененной ТРН |
**operator** | [**\MagDv\Cargomart\Dto\EcnOperatorEnum**](EcnOperatorEnum.md) |  | [optional]
**old_ecn_date** | **string** | Дата отмененной ТРН. Формат: DD.MM.YYYY. | [optional]
**old_pdf_version_file** | [**\MagDv\Cargomart\Dto\FileUrl**](FileUrl.md) | Ссылка на скачивание предыдущей версии ТРН |
**order_hash** | **string** | Хеш заказа |
**order_patch_id** | **string** | Идентификатор запрос на изменение заказа |
**new_values** | [**\MagDv\Cargomart\Dto\ChatPostPayloadOrderPatchNewValues**](ChatPostPayloadOrderPatchNewValues.md) |  | [optional]
**code** | **string** | Идентификатор причины |
**tracking_number** | **string** | Трек номер отправления | [optional]
**post_service_name** | **string** | Почтовая служба | [optional]
**transactions** | [**\MagDv\Cargomart\Dto\ChatPostPayloadPaymentConsignorToExpeditorTransactionsInner[]**](ChatPostPayloadPaymentConsignorToExpeditorTransactionsInner.md) |  | [optional]
**truck** | [**\MagDv\Cargomart\Dto\ChatPostPayloadTruckChangeV2Truck**](ChatPostPayloadTruckChangeV2Truck.md) |  | [optional]
**name** | **string** | ФИО пользователя, на которого выдается сертификат |
**status** | [**\MagDv\Cargomart\Dto\UserCertificateStatusEnum**](UserCertificateStatusEnum.md) | Статус выдачи сертификата |
**phone** | **string** | Телефон подтверждения выдачи сертификата |
**driver_name** | **string** | ФИО водителя |
**point_name** | **string** | Название пункта маршрута |
**driver_app_order_point_status** | [**\MagDv\Cargomart\Dto\ChatPostDriverAppOrderPointStatusEnum**](ChatPostDriverAppOrderPointStatusEnum.md) |  | [optional]
**resolution** | [**\MagDv\Cargomart\Dto\ExpeditorTaskResolutionEnum**](ExpeditorTaskResolutionEnum.md) | Резолюция |
**task_type** | [**\MagDv\Cargomart\Dto\ExpeditorTaskTypeEnum**](ExpeditorTaskTypeEnum.md) | Тип задачи |
**first_storage_point_title** | **string** | Название пункта погрузки |
**title** | **string** | Название события | [optional]
**step_bid** | **string** | Шаг ставки | [optional]
**end_date** | **string** | Дата окончания торгов | [optional]
**text_price** | **string** | Стоимость | [optional]
**loading_date_time** | **string** | Время погрузки | [optional]
**consignor_pay_value** | [**\MagDv\Cargomart\Dto\PayValue**](.md) | Цена заказчика | [optional]
**carrier_pay_value** | [**\MagDv\Cargomart\Dto\PayValue**](.md) | Цена перевозчика | [optional]
**file** | [**\MagDv\Cargomart\Dto\FileV2**](FileV2.md) | Файл акта о неподачи машины | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
