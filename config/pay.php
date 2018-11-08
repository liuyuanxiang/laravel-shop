<?php

return [
    'alipay' => [
        'app_id'         => '2016092000552986',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnZwL9RgAATInxXgmsyj0eCG6X5ueRuvJIgVlMjs8+VyF0YAWA2kGFC6dq8uhAe7/wqv8N5RPjCRY1XlC5Ce1bg72nM20AKr76Rf6ZUK+9pBMyOg3UVTz9hjCOcZwffnNL81rh+nXgs8ooJ5EuEGpYHFvOWcodUQAbgCBz21ovKT+mJ3tOPwh/seIUS/lLAmpmSHsM3r8BSnZsUCfKaP0qoTQbc2YTyzOXr1qv5x21vCdbqJ5NStuxAkqjPtlZXd/d6Xei5t1QrXmENUqR49R6p8ftGb1lFXCfuiA8xY8ITDIkMnc+hUo4+KBThD7QU6W8qyRhtMW3R+hxnHV25VaFQIDAQAB',
        'private_key'    => 'MIIEpgIBAAKCAQEAtbTDJ+nawf6Yl2vLkxsRkkgOeDaiCcNMVpm4ZZVTB3jomGecrBQjF7uyDUWpjHNCGAuyEdCCVHRulENkyMcCdag1zosQLRussHc4cS0njha5woOagxR7pb37VajFxy3g+JG6vuo6wSASn0GgpQNkNZ930iN3pUDotgumeVse5qWKNbOWNIkQwdMnWzQKl9EMLXrjZEbyZDDbsjWx6eOBE+uJv2MmM9xFfp6qDgtQ+nOwv8j9wAax/+H43Ac5hsHph6mdWAs07PjFSG+BhJU4Huqk3uxbqhuWUq343+PELeRhqGeV717MJJQ+H/RfWpHpgzT3na0xr5RxhazKcQNH6wIDAQABAoIBAQCm0UBFuX17koh2o6Eu+a/lE0Atf0K+Ic1IyDGxGSkz9/3aRW1h0c7x8ACkDKt+5SXtu3cMwdeVP5txhHnXllUcvYRAjg0YzIp7K8jmpqTk3tpFyNqmsrxdypAe8SY6GVWr/uZqddHhEdfm27JnLDjovfGcO7GRRoke8I0yZsR0zENfGo52lCyAxp4Es6uhvRJjTkGDACldnITpV60b0DI4gP6VNGicMkbZ4QTi2jEtBXBvyM+AFa0D/EfCXS0UvujJWbYae80m7teTP+pkQPOJtO6w1Og0ld23kfy0RxB5PucWeP+F628khi8tMkkz5qgyfOtdw+uBDpZFtGfpwNlZAoGBAN7d/giLZzHXmq+Ptt853VGJj6HFwZqzAhTF62nBpWopOb48yel0xHXTYJRuztzv8PBhWtd82KW2FJLgOqS2gUQpIlGcG4CJx1tGko8/n3E4ARnlAZzr6KU55pw8HuuswTL6AChtH3TJvHXIv6NP8atse5pm9HftbLuPtgT283sHAoGBANC4PRr61cGAZOKK9RTpnRmtv8btD+L2RM+AVqlW7NfwKlEV0vRrnjvRP0XGP5A9ukq+SUEyJrzfmcV8ELqa7C95uSS3cHyors5MHtRfz5C1svBkFtz62v9er9CDtJ+Fw9wv6GD1GAST0nYIoVQmkn2TCoEVUNSGjrKIz+Nf8T79AoGBAKD3KRE2zjO7iyed3vDfNDA98JVg5XI8NBaY1Gyvxi8k02XJNfP9uB95qdnLJnGAgz66sgfNThRxq+5hMTnh7v8xzm2vGFYALRKJqDT6OMhnMLRpKH8UDBW5+guBiLujLG8LDa4lEoEha5KOiYsEpIGxepyMG6m6u7vEEi0Hx9dlAoGBAJCWkP4XteyOXVTynkUWcNZRHwFXSCIaKCD27xHwPbJ5lVcGn1TjGIKnugVECNSLbnpIx8Z6T4uX+pZsE8qxd9yLnk5pJWu2DyKqaNEGbmv48zTEoXID9aHinjj8hCveJohqR7ijEThajvllkR0Se3iyXBx//7a6YDAdxqXk2OKhAoGBAL0PG6LU9EAcG1jW1Ww6GARWcOpeX/OM+byX+/SOGMkisRaUlsQKMnjwAh5xP4SFPSIbxUkkMvyPwH1u6uOS0jGndtDRdMO5HZQHvG3aKt/XMgVXpHXKlEzizoxgLpMkv4kMSU1DU5v59aQ40HiU6kFHHH0mG3hnfb/mNKqn2CpX',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => 'wx*******',   // 公众号 app id
        'mch_id'      => '14*****',  // 第一步获取到的商户号
        'key'         => '******', // 刚刚设置的 API 密钥
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];