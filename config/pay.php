<?php

return [
    // 支付宝
    'alipay' => [
        'app_id'         => '', // appid
        'ali_public_key' => '', // 公钥
        'private_key'    => '', // 私钥
        'notify_url' => '', // 服务端回调地址
        'return_url' => '', // 前端回调地址
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    // 微信
    'wechat' => [
        'app_id'      => '', // appid
        'mch_id'      => '', // 商户号
        'key'         => '', // api秘钥
        'cert_client' => resource_path('wechat_pay/xxxx_cert.pem'), // API证书地址，下载后放到resources/wechat_pay下
        'cert_key'    => resource_path('wechat_pay/xxxx_key.pem'),
        'notify_url' => '', // 服务端回调地址，建议用route助手函数生成url
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],

    ],
];
