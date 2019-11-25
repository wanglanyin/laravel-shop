<?php

return [
    'alipay' => [
        'app_id'         => '',
        'ali_public_key' => 'zjYNhuJzxBdo8SAKxf3iOJHep4gtTdygiFqcyE8mqzbV8C0uV+a/iJs+XHT2CbqwxAU+ig8kbQHY51VPlBj1HW2Z+WmOTmqyTNw5bxhtuaZ+B407o8WuQTkgRlOzzpP9LK5wQ367OeHtz4oAWCbvHaPOFuninwB1o+HmLprj55uI3xRPCOlmOFFSJETNJQiuM4rJ8YnFqeKFFpKHFUrOeOQGZmdvhtjQGfRUYit2VTRU8UbCudlNlEXyGUIr9xZNAah0xXyO6Ug6h/FbB/Xdyo1jlAQ/ZOB48IwuDU4MYwIDAQAB',
        'private_key'    => '+aiawELIeKo5aoY9miQeNxYUw8hd2hVMZwMy8GYXLtjWGII/iOE1T89OiQ21h+Mf5bPrLY2rwyJ1HVe55pSUZp0zA9NIzx/kMjgeYDLntsT5RelX2c0ENAul+HamXeDvoD5Qw1lhNZsCfXJeF72gLjWrRXNmXDBIR6/6ktpi6LkpLP54eZDfNt6qdOxoqKX04eDyJ8EOyUSwIDAQABAoIBABGs1gfxQLJyFrEf1C3sKMj0MSl4aN6F47Vj/TpfXw4qQgwhMvfjp/0kl1z/xY2bs1fl3pqbZZ/5nhEr4CFsSy85Cx82/J8EWwZS7mNeVDxoRjZCwO/mZlGhELqvDVmDs2htXnmbYA/I/S7q60WZXQAZlXjw6g1dmRs4sb4kT8qczz3WZhmJd4Z0+mfTonQ/5YL8h4lm1vGIzLycivOo8dyqDLhCXNamIyYM2wdQeQHbhe4SJ7gYczTPO1iQ8FIQf3sqWJp+1KCnfgWBgVahP+J4WpBpGTDK27iTiRDPIuQILcc4xoRhYI/HkNE4W5OpUk7LSh3vO+Ce/Je72jr5sWECgYEA8j7VFYXa6Yjf3KAEbUBPaXha3cMIqrUHQ8CP8a5HyhE5FlinyNahXkNs+20gn1ACcaiGhcz7zgoF9w+QtKchojc6mWSTGa9H3kw8zLSi4nRKeaohIUK4rMR0RswL6oRQgS/3Aqe2Wu1BeO/+IDPWpvhmR4+23IZqn8aQoOhZGQMCgYEA2eW8ejHfh8jM5meJ3yxRmBgew4ClHQR+3xtJeSnoWle35cOWEGhNSm/GH8cU0W9vo6aD9B6BkFyX929+OlG9kq4TtzY9+4jK56ubDzJunp4BxbUupWsWPhX3FK7gMXyw7nJZDJfbB32q/W+ZqGyGxO+hIn/D1H7OqLhIIQWVYRkCgYEAuY/79iK1EFNy+DPzcCTlL+ur31f5GZrWV8X3/a/8+gK7ciyzShtvPR/1KZvsc1z8okfv1CqzcJ8o9poLxPaJwxL/ZmUucWxdZyGLKVvtsf5W1l/GRQ4xHNbYIytGrXxxlqRBWN1TyM8ZaiScy9opwXliD8s8ziyBHKckPr39EjUCgYEAtuMjyjBYHOEGUhDvYLkTFySPlapBa9SdJGgDyEXLdyCPArOiHc1dqi+czIlNSOhOfL5DnL+KIgAFsTIMcaiwBBBGDg3iAmBzZfXcJOpAfLPEawxCxabXOW84Pkz1cbPl0Y16fp5qwaPRw/xKrVnB2EQFLC6u0IlKrcRXDhhgo+kCgYEAmTG7jE+llpsshDgBW7pjNJWxhwjqi72TL9wJ8/BXUIHIujlSfTJoSr8fkgI1OQt9ei69lLO/fHGmWNDTggzn7yX44zrIy5PclueTmX0bSrlAIZ/YS1JaHBPfCJ7DUkffdwsTbfC4SHhxkwLGob0bFtNnHgysScNL85MGqSt9Frc=',
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
