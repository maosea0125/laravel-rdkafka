<?php
// 文件 /config/kafka.php
return [
    // 默认的生产者配置
    'producer' => [
        'broker_list' => [
            env("ALY_KAFKA_BROKER_LIST"),
        ],
        'topic' => env("ALY_KAFKA_TOPIC"),
        'group_id' => env("ALY_KAFKA_GROUP_ID"),
        "kafka_options" => [
            "offset.store.method" => "broker",
        ],
    ],

    // 消费者列表
    'consumer_list' => [
        'consumer_client_add' => [
            'broker_list' => [
                env("ALY_KAFKA_BROKER_LIST"),
            ],
            'topic_list'    => [
                env("ALY_KAFKA_TOPIC"),
            ],
            'group_id'      => env("ALY_KAFKA_GROUP_ID"),
            "kafka_options" => [
                "offset.store.method" => "broker",
            ],
            'timeout_ms'    => 3000,
            'event_list'    => [
                // 事件名 => ['function' => 事件回调函数(必须是静态方法), 'is_broadcast' => false]
            ],
        ],
    ],
];