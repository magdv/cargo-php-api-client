# # Locality

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Код по КЛАДРу |
**name** | **string** | Название элемента |
**type** | **string** | Тип элемента | [optional]
**type_short** | **string** | Тип элемента в сокращённой форме | [optional]
**level** | **int** | Административный уровень элемента |
**is_settlement** | **bool** | Флаг, является ли элемент населенным пунктом | [default to false]
**full_name** | **string** | Полное название элемента со всеми родительскими уровнями | [optional]
**short_name** | **string** | Сокращенное название элемента со всеми родительскими уровнями | [optional]
**country** | **string** | Название страны | [optional]
**country_code** | **string** | alpha3-код страны. | [optional]
**region** | **string** | Название региона | [optional]
**is_disabled** | **bool** | Флаг, true &#x3D; не доступно для выбора | [optional] [default to false]
**section_id** | **string** | Принадлежность к макро-региону. | [optional]
**coordinates** | [**\MagDv\Cargomart\Dto\LocalityCoordinates**](LocalityCoordinates.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
