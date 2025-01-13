# # ExpeditorOfferCarrierCurrent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор предложения |
**client_id** | **int** | Идентификатор компании перевозчика предложившего цену |
**creator_id** | **int** | Идентификатор профиля перевозчика предложения цены |
**price** | [**\MagDv\Cargomart\Dto\PayValue**](.md) | Предложенный объект цены |
**is_carrier_with_vat** | **bool** | Платит ли перевозчик НДС | [optional] [default to false]
**load_date_time** | [**\MagDv\Cargomart\Dto\DateTimeSeparate**](DateTimeSeparate.md) | Дата и время погрузки, предложенная перевозчиком | [optional]
**update_date** | **\DateTime** | Дата последнего изменения |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
