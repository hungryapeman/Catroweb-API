# OpenAPI\Server\Api\AuthenticationApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticationDelete**](AuthenticationApiInterface.md#authenticationDelete) | **DELETE** /authentication | Expires refresh token
[**authenticationGet**](AuthenticationApiInterface.md#authenticationGet) | **GET** /authentication | Check token
[**authenticationOauthPost**](AuthenticationApiInterface.md#authenticationOauthPost) | **POST** /authentication/oauth | OAuth Login
[**authenticationPost**](AuthenticationApiInterface.md#authenticationPost) | **POST** /authentication | Login
[**authenticationPut**](AuthenticationApiInterface.md#authenticationPut) | **PUT** /authentication | Refresh token


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.authentication:
        class: Acme\MyBundle\Api\AuthenticationApi
        tags:
            - { name: "open_api_server.api", api: "authentication" }
    # ...
```

## **authenticationDelete**
> authenticationDelete($refresh_request)

Expires refresh token

Sets refresh token to expired

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface
{

    // ...

    /**
     * Implementation of AuthenticationApiInterface#authenticationDelete
     */
    public function authenticationDelete(RefreshRequest $refresh_request)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_request** | [**OpenAPI\Server\Model\RefreshRequest**](../Model/RefreshRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **authenticationGet**
> authenticationGet()

Check token

Checks if a token is valid or expired.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface
{

    // ...

    /**
     * Implementation of AuthenticationApiInterface#authenticationGet
     */
    public function authenticationGet()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **authenticationOauthPost**
> OpenAPI\Server\Model\JWTResponse authenticationOauthPost($o_auth_login_request)

OAuth Login

Returns an JWT token which provides authorization.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface
{

    // ...

    /**
     * Implementation of AuthenticationApiInterface#authenticationOauthPost
     */
    public function authenticationOauthPost(OAuthLoginRequest $o_auth_login_request)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **o_auth_login_request** | [**OpenAPI\Server\Model\OAuthLoginRequest**](../Model/OAuthLoginRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\JWTResponse**](../Model/JWTResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **authenticationPost**
> OpenAPI\Server\Model\JWTResponse authenticationPost($login_request)

Login

Returns an JWT token which provides authorization for a limited time.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface
{

    // ...

    /**
     * Implementation of AuthenticationApiInterface#authenticationPost
     */
    public function authenticationPost(LoginRequest $login_request)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_request** | [**OpenAPI\Server\Model\LoginRequest**](../Model/LoginRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\JWTResponse**](../Model/JWTResponse.md)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **authenticationPut**
> OpenAPI\Server\Model\JWTResponse authenticationPut($refresh_request)

Refresh token

Returns a new JWT token with help of the refresh token

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface
{

    // ...

    /**
     * Implementation of AuthenticationApiInterface#authenticationPut
     */
    public function authenticationPut(RefreshRequest $refresh_request)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_request** | [**OpenAPI\Server\Model\RefreshRequest**](../Model/RefreshRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\JWTResponse**](../Model/JWTResponse.md)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

