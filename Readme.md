Клиент API для Cargomart.ru
---------------------------

Клиент API Cargomart.ru.

## Пример

```php

use Cargomart\ApiClient\Authentication\LoginPasswordAuthentication;
use Cargomart\ApiClient\Authentication\PsrCacheSessionStorage;
use Cargomart\ApiClient\Authentication\StorageWrapperAuthentication;
use Cargomart\ApiClient\Client;
use Cargomart\ApiClient\Entity\Order\Requests\OrderCreateRequest;
use GuzzleHttp\Client as GuzzleClient;

$guzzle = new GuzzleClient(['base_uri' => 'https://cargomart.ru']);
$client = new Client(
    $guzzle, 
    new StorageWrapperAuthentication(
        new LoginPasswordAuthentication('login', 'password'),
        new PsrCacheSessionStorage($cache)
    )
);

$listReq = $client->apiV2()->order()->get(); // подготовка GET api/v2/order

$rsp = $listReq
    ->qFilterBelong('all')
    ->qFilterStatus([3,4])
    ->do()
; 
// исполнение GET api/v2/order?filter[belong]=all&filter[status][]=3&filter[status][]=4
var_export($rsp->data->order);


$rsp = $listReq
    // Установка заголовка.
    ->xModifyFromEventHeader((int)$rsp->headers['X-Last-Event-Num'] - 10)
    ->do()
;
var_export($rsp->data->order);

$data = new OrderCreateRequest();
$data->isGeneralPartner = true;
$data->kind = 'ftl';
// Пост запрос с телом-объектом.
$rsp = $client->apiV2()->order()->post()->do($data);
var_export($rsp->status);
var_export($rsp->message[0]->title);
```

## TODO

- [ ] Запросы multipart/form-data для отправки файлов
- [ ] Deprecated параметры, тэги и прочие пометки по схеме 
- [ ] Проверка формата параметра по схеме
- [ ] Отладочный режим
- [ ] Убрать Guzzle в рекомендации, завязаться на PSR