# VK Task

## Описание прототипа

Все классы находятся в папке `src` и используют пространство имен (`namespace`) `Safar\VK`. 
В этом пространстве имен определены следующие классы:

#### Application
Класс `Application` основной класс, который запускает программу.

### Controllers
**OrdersController**

Управляет процессом создания заказов.

### Managers
**DeliveryManager**

Манеджер, отвечающий за отправку запросов на внешний сервис для доставки заказов. Он обеспечивает интеграцию с внешними системами доставки, обрабатывая все необходимые шаги для успешной доставки. 

**PaymentManager**

Менеджер, отвечающий за обработку платежей. Он обрабатывает запросы на оплату, взаимодействуя с платежными шлюзами и обеспечивая безопасность транзакций.

**ExternalDeliveryServiceInterface**

Определяет стандартные методы для взаимодействия с внешним сервисом доставки.

**ExternalPaymentServiceInterface** 

Определяет стандартные методы для взаимодействия с внешним сервисом оплата.

### Models
**Order**
Модель, отвечающая за операции CRUD

### Routing

**Router**

Класс Router отвечает за управление маршрутами приложения.
Он содержит все маршруты с их контроллерами и вызывает соответствующий контроллер
с нужным методом в зависимости от маршрута.

## Ссылки на схемы
БД: https://drawsql.app/teams/safar-team/diagrams/internet-magazin

Диаграмм компонентов: https://app.diagrams.net/#G1OFsS-Qp9BZZOJDjwrFcVcH4gezAbRIdl#%7B%22pageId%22%3A%22FZ-zaSuH7rxAOreYEULP%22%7D 

Допольнительный: https://miro.com/welcomeonboard/Q3dkbWZtdHhCMmRuR3duQXlsZ2phYmJPcXFQaFdPQUMwdWJxV21RbDlHWmxDc0lVZE1KSXhOeklRYXR6Vk5MeHwzNDU4NzY0NTI1OTYzMjk4MDA1fDI=?share_link_id=462577206241
