# # CompanyInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор (хэш) клиента |
**short_name** | **string** | Краткое название организации |
**type** | [**\MagDv\Cargomart\Dto\CompanyTypeEnum**](CompanyTypeEnum.md) | Тип компании (carrier, consignor) |
**logo** | **string** |  | [optional]
**actual_address** | **string** | Фактический адрес компании | [optional]
**phone** | **string** | Телефон (только цифры) |
**country_code** | **string** | Код страны | [optional]
**head_name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**activity_type** | **string** |  | [optional]
**activity_type_name** | **string** |  | [optional]
**activity_type_id** | **int** |  | [optional]
**disabled** | [**\MagDv\Cargomart\Dto\DisabledFull**](.md) | Информация о блокировке перевозчика | [optional]
**orders_by_month** | **int** | Заказов в месяц | [optional]
**is_blocked** | **bool** | Заблокирован клиент | [optional] [default to false]
**partner_status** | [**\MagDv\Cargomart\Dto\PartnerStatusEnum**](PartnerStatusEnum.md) | Статус взаимодействия с компанией | [optional]
**partners** | [**\MagDv\Cargomart\Dto\PartnerShortItem[]**](PartnerShortItem.md) | Список партнёров | [optional]
**client_id** | **int** | Числовой идентификатор клиента | [optional]
**email** | **string** |  | [optional]
**activity_type_alias** | **string** |  | [optional]
**operating_account** | **string** | Расчетный счет | [optional]
**bank_name** | **string** | Название банка | [optional]
**corresponding_account** | **string** | Корреспондентский счет | [optional]
**bic** | **string** | БИК | [optional]
**count_create_order** | **int** | @deprecated Количество созданных заказов (только для грузоотправителя). Вместо данного поля использовать metrics.ordersCreated | [optional]
**count_winner_order** | **int** | @deprecated Количество выполненных заказов (только для грузоперевозчика). Вместо данного поля использовать metrics.ordersWon | [optional]
**is_cooperating_general_partner** | **bool** | Есть договор с Генеральным партнёром | [optional] [default to false]
**is_with_vat** | **bool** | Флаг того что компания работает с НДС | [optional] [default to false]
**is_partnership_allowed** | **bool** | Компания разрешает другим компаниям присылать себе приглашения в партнёры | [optional] [default to false]
**is_with_branch** | **bool** | У компании есть дочернии компании | [optional] [default to false]
**inn** | **string** | ИНН | [optional]
**create_date** | **string** | Дата регистрации на Каргомрат | [optional]
**register_date** | **\DateTime** | Дата регистрации организации | [optional]
**car_count** | **int** | Количество машин | [optional]
**metrics** | [**\MagDv\Cargomart\Dto\CompanyMetrics**](.md) | Показатели работы | [optional]
**is_direct_sender** | **bool** | Является прямым отправителем | [optional] [default to false]
**status** | [**\MagDv\Cargomart\Dto\CompanyStatusEnum**](CompanyStatusEnum.md) | Статус клиентской валидации: 0 - на валидации, 1- валидный, 2- ожидает доступа к компании, 3-блок. вал. 4- блокирован 5- удалён | [optional]
**contract** | [**\MagDv\Cargomart\Dto\PartnerContract**](PartnerContract.md) | Объект договора | [optional]
**partner_contract** | [**\MagDv\Cargomart\Dto\PartnerContractWithType[]**](PartnerContractWithType.md) | Список договоров с информацией о типе | [optional]
**is_validated** | **bool** | Валидирована ли компания | [optional] [default to false]
**legal_address** | **string** | Юридический адрес компании | [optional]
**legal_status_id** | [**\MagDv\Cargomart\Dto\LegalFormEnum**](LegalFormEnum.md) | Юридический статус: 1- Физическое лицо, 2- Индивидуальный предприниматель, 3- Юридическое лицо | [optional]
**legal_name** | **string** |  | [optional]
**ogrn** | **string** |  | [optional]
**okpo** | **string** |  | [optional]
**kpp** | **string** |  | [optional]
**url** | **string** |  | [optional]
**has_company_contact_groups** | **bool** | Наличие контактов компании. | [optional] [default to false]
**access** | [**\MagDv\Cargomart\Dto\CompanyAccess**](.md) | Права доступа | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
