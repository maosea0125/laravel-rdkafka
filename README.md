# laravel-rdkafka

# 安装
1.在 config/app.php 中添加
```php
// RdKafka
RdKafkaApp\RdKafkaServiceProvider::class,
```

2.执行 php artisan vendor:publish , 发布配置文件, 在config中会新增文件kafka.php

# 消费事件
```sh
php artisan rdkafka:consumer 消费者id > kafka.log 2>&1 &
php artisan rdkafka:consumer consumer_client_add > kafka.log 2>&1 &
```

```php
# 发送事件
$eventData = [
    'user_id' => 53753,// 用户uid
    'operation_uid' => 0,// 创建用户
    'operation_time' => date('Y-m-d H:i:s'),
];
\RdKafkaApp\RdKafkaProducer::sendEvent('ADD_USER', $eventData);
```