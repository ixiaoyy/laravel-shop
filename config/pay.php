<?php

return [
    'alipay' => [
        'app_id' => '2016102600766748',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtwhtsIWnY5PfeshJ4bB/Xjucw3YdpEEF2PsMEq3oIH9wV7Iu34qi1FM0+TyD9dRdtQ2OLDOkXp7xGwNgJb/gps69IPJcjtV55mA3qIV7Tyy5yrIiSxyx20kSgWgn2d95MAGhZiFBKUT/AYk9u7nHFmKcBWFWB2cO7kxdtKREWXYnhm+bW5Qv46FuRZOPR7r5UehEBFgfqQRdaGg3U1hnK5rA6amklMMWvLZGtgrbP/CbrIuC2AWMy7lBpjTQ8V/82OspLQtmSxYRWKDUCF7vIrRBkwIK4DLJ9Eax+TEDMS7LrLyUqF7elw7V4rI3BB3NFTwMucVu+yQvJ8nuXPQqOQIDAQAB',
        'private_key' => 'MIIEpAIBAAKCAQEAp4HkHElPS6pHS0nPPENFu1gkI9jl1kfZuREHDCOuNT39k9jrWKPjwkKJUdxJ51uQLumRzxhPYu+D3Au7YFE38NPXKRPbiB+qcmlEcT4sva+hcAiRh8344u0+QBfBG8J8trMOqudC7jVYoLMUIRqt3Up6k+9Fr0xHxClCjnr2YWXIMC9VjEVpV+JrKmnTMiwEo37+7q0xCCFYG92uayjIg9DsjV984F/l5OFmQvT/vouOrlkAkpWbkmA7fclDvfdySrXN9PvopM32czEjyuKWhowO6XUS6M1651AiGDTcsVdoDs0vLR1pSN6D//AUkFdct437dnG0DxLs2yO2guEHWwIDAQABAoIBAEtIN0r3L6oj9zLBE2BUI6zVKjjqLDGnzRQ9sNsl1g+bsrGV1f/aeGxAFxMxXA2cuyo6UwuuM0+Vsb9djnL1TZzwuEx/3jRJdwNAiEAU32rI2ldNoopUab0jPszzYBinygEabEcm9I+2bgSbNzrBkM5ZwMlnyfvE3qQsnvsGDGEs8S4uuNOCvyfkwkGb8TE2FW6OKrJNrd9tqruB6rL74mlijzn7pGMs0czdokPrEzgdkwwLPGE+gZqwhYV3jLlM1ky3Xd2RrJPUcG2ws6eaVlimgqtEPjn/nsjP4ow3e+UeLvZ4HrrJuUWwvFIlAaH4Z9iXZwaAQ+g1bH0S5Qrm5JECgYEA0BOuAROqc8dORRFPKtBAA1TWP/RvBoZZmUJJgi3QkvfLHPnFM240hnrNFaPei4Kn0O3fXJDb65+yo0CjUr0UEwJx2RB7eO5JhD03EoT9PgT583EHo2OfFsgn2TINdhiBUE06x8eWhYt4XlY3WTkTlnCTnBNbt2/3cMdTSG2e7wUCgYEAzhY2oFQjsDxS6LKueePmspvTcfvkFepykTWQbwR2UmRLRKWI0FBZUzJjltFq1ru3sys9RANwRXdp9JhUj6I5VbVHAs7qfTBqcFmIXucs/8HUEIDv7zs3vIK9LRFin7HvzTZFrp/X0xMY6ggQsSDoW9UOXc5Ya9WFp3qASw7YKt8CgYBXjXBSE6xNOze76CSfpzDINhJQptFwtWdODY5QsGZq8MkOUCqiEWUYkONqj6E8oqVqTC0IDgv7gR7xgmk2j0i7FvRAmabao6lbc0aRDFRinEVwIcdNAMYYF/Bse5sebgE7gMOS/HBhkOX9C9oOOO39BzGVIrAc54f+dGCewUF24QKBgQDNOz/hQIld62UhiTfJ+RR4UEgs3g2Raa34P+B7PnVarbhrP3JVCX87JBYbTqfX+o8BJZFYlxgKhdYFmGG1vHbejK2P9WF9lGabRf5RjGS6ulsmqFDI7C8gUw5zwDl4EWpe8apJMbNr5zvLbIa67quXMECjWGej07rLQ2pZ1Qme/wKBgQCXmfhpBSYgxL/jgPXFYy0VrAZhijfzYsFpsFSZDbB5rldBtNSaoBXM6igzVw45sDbW4y2HtjheqTySrBQPRJzH/X21+cRUWevQEr4WFduRm+Mn1UUU+JXcPqgFyMT2pgUg2OA+gWkEbdiWX1tTdCQ50a3MeJIhbLfaALCwap4tEg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
