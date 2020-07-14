<?php

return [
    'alipay' => [
        'app_id' => '2016102600766748',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtwhtsIWnY5PfeshJ4bB/Xjucw3YdpEEF2PsMEq3oIH9wV7Iu34qi1FM0+TyD9dRdtQ2OLDOkXp7xGwNgJb/gps69IPJcjtV55mA3qIV7Tyy5yrIiSxyx20kSgWgn2d95MAGhZiFBKUT/AYk9u7nHFmKcBWFWB2cO7kxdtKREWXYnhm+bW5Qv46FuRZOPR7r5UehEBFgfqQRdaGg3U1hnK5rA6amklMMWvLZGtgrbP/CbrIuC2AWMy7lBpjTQ8V/82OspLQtmSxYRWKDUCF7vIrRBkwIK4DLJ9Eax+TEDMS7LrLyUqF7elw7V4rI3BB3NFTwMucVu+yQvJ8nuXPQqOQIDAQAB',
        'private_key' => 'MIIEogIBAAKCAQEAk1peJppEBdjzsf/D4F7LFQgTo6OTu+LmjogY9ILA+tf0J7OicLwzTOwZ5sso2vbC1EZD7YLlW0wLT6ZqPIqdmLrvTBssxBmFwqdsXprsl9DmSBBl5U7iZoX9BTgOGezWlA2VUoS8/jOP3WVPIxi21CIMv6mYuDNVFdFRvLViKlvVapcLiKUbZscdqJjDeYba9BXVZtjXNEtEgig13xLui1roL8SiirWoHT3NKnLWnvxrT+PmIWg8K3Gfe+Ru2xrAVwdhrNiUji/dqOkHLF2nEiK1LEeQXe4hOZD5VdTx0s5eTpU3/PnfKz7FTuldxtogick58ytbIxBBfl+xR7zAywIDAQABAoIBAHnEKpuBzYZ7gt5r+eTW0MFffEM0sKeJ2HaeNukPiAOCI6wPQMQicc42KS1UYz2WvueF7So/ieMJEyvN3GqNLbCBgbAFoNeoM6XojqAbLDpEkZepnVqB9os8XBtM+DIqSiPsmaGoOTljSJZu2pepG6RvQtO7hY1qNfyijgYAac+P8/QcfbaEhEpsB75RW/zG0K/mcm3QFNKJAPATzq1MiaCKYbW4GR7z42Z/WLZXPZY4naRoCQRf6ZvZ++WlJD+ktEfca1rNa/2CmPAo3FyzDUCyaIErIcnUPbqeG25/C8vsSjZttnftGx0Yry657f4xqQEzh1fpJ3f2AEUvrl+b60ECgYEA0eSaj7mPm8CSvod1EXJnnGslx4XAn3wMs/HIwvm9n6jcs2bmaPkRb8cRTuyynKzc0QvbUwCd5zA+owj7+Qa1tPSEztsVjsX0jWczk762w4p2PChbOmSzYh0QsW6+kqVoNBn+a6PVS1q6VbLl/UOiAcod/AYHDPYb0UUfTbAf2OsCgYEAs7jPEA/LpRn9qRnAKsOfF9rw500PwNoJ3HXSj9MWBMsc/B8kMwpqjcLW1sUYMP7S7TcKXnU72J10jP9aCBfrisZTpch1yzvf+fFepE/yDFu1oy1rIg1p4uBf3OZG3VrwRd1KjWB5+aNH6jdiZBcftrQTZ0ffylzcWTdptusav6ECgYAhic3IuXXhBVxtZWenagh0TgqzXwPwd/nvpurVfOJ36Jubbw3SKDpJCh4R5nCD6HtATAy3rpmMn4DivETG/fN6/rdZ9lfzgF4bWio7qXW6uR07b5dkNUMUomBQecmp1RRZfu3QdVVXvR+ZIgTt+yif8JPp+WyW/ZxkTA88crAkEQKBgH3V9W06kgz8wMXo2MtYgwlR7AEXzOLsB6GMAa1gT/d1O8swBsmSDn9Jn+FqyQBtO8SKGEGA9jE6NgQPOruV+/8D1EesrwVo2+8GWIzVyRVsFSa2w19pYu1OyvBBb/bHGJriUbPhjCYFdHIC62pHYpYrSbaz9XacRFBXYzaHMQhhAoGAFRghXExcRFATlJkakn59lq1AaltCJQx8T64c3pfYUlkgIZMY72Ixc9gKiaxF7JBhbMVrFoy2VJkRFOyIc0Qx5FZKy1UnTsxtPWpXs8HFL7RMyMft7Fee4LFV+HUPDx7SuBCfIqTX6csy9ktumjxduuFWJdF/t31Zz1CieFYFSHo=',
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
