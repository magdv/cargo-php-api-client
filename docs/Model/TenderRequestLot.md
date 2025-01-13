# # TenderRequestLot

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор  лота в статусе &#39;Сбор предложений&#39; |
**tender_id** | **string** | Идентификатор тендера  в статусе &#39;Сбор предложений&#39; |
**route** | [**\MagDv\Cargomart\Dto\TenderLotPoint[]**](TenderLotPoint.md) | Точки маршрута | [optional]
**lot_offer** | [**\MagDv\Cargomart\Dto\TenderRequestLotOffer**](TenderRequestLotOffer.md) | Данные отклика | [optional]
**cargo** | [**\MagDv\Cargomart\Dto\TenderLotCargo**](TenderLotCargo.md) | Описание и требования груза | [optional]
**carriage** | [**\MagDv\Cargomart\Dto\TenderLotCarriage**](TenderLotCarriage.md) | Информация о требованиях к перевозке | [optional]
**payment** | [**\MagDv\Cargomart\Dto\TenderLotPayment**](TenderLotPayment.md) | Информация о цене | [optional]
**comment** | **string** | Общий комментарий по лоту | [optional]
**stats** | [**\MagDv\Cargomart\Dto\TenderRequestLotStats**](TenderRequestLotStats.md) | Статистика по лоту тендера | [optional]
**offer_restrictions** | [**\MagDv\Cargomart\Dto\TenderLotOfferRestrictionEnum[]**](TenderLotOfferRestrictionEnum.md) | Список ограничений для доступа к установке предложения |
**access** | [**\MagDv\Cargomart\Dto\TenderRequestLotAccess**](TenderRequestLotAccess.md) | Объект доступа к лоту |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
