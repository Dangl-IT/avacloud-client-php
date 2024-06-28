# Dangl\AVACloud\DanglIdentityApi

All URIs are relative to *https://avacloud-api.dangl-it.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**danglIdentityGetUserInfo**](DanglIdentityApi.md#danglIdentityGetUserInfo) | **GET** /identity/user-info | 
[**danglIdentityLoginAndReturnToken**](DanglIdentityApi.md#danglIdentityLoginAndReturnToken) | **POST** /identity/token-login | 
[**danglIdentityLoginWithCookie**](DanglIdentityApi.md#danglIdentityLoginWithCookie) | **POST** /identity/login | 
[**danglIdentityRefreshToken**](DanglIdentityApi.md#danglIdentityRefreshToken) | **POST** /identity/token-refresh | 
[**danglIdentityRegister**](DanglIdentityApi.md#danglIdentityRegister) | **POST** /identity/register | 
[**danglIdentityRequestPasswordReset**](DanglIdentityApi.md#danglIdentityRequestPasswordReset) | **POST** /identity/password-forgotten | 
[**danglIdentitySignOutWithSignInManager**](DanglIdentityApi.md#danglIdentitySignOutWithSignInManager) | **DELETE** /identity/login | 


# **danglIdentityGetUserInfo**
> \Dangl\AVACloud\Model\UserInfoGet danglIdentityGetUserInfo()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\DanglIdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->danglIdentityGetUserInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DanglIdentityApi->danglIdentityGetUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Dangl\AVACloud\Model\UserInfoGet**](../Model/UserInfoGet.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **danglIdentityLoginAndReturnToken**
> \Dangl\AVACloud\Model\TokenResponseGet danglIdentityLoginAndReturnToken($model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\DanglIdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \Dangl\AVACloud\Model\TokenLoginPost(); // \Dangl\AVACloud\Model\TokenLoginPost | 

try {
    $result = $apiInstance->danglIdentityLoginAndReturnToken($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DanglIdentityApi->danglIdentityLoginAndReturnToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Dangl\AVACloud\Model\TokenLoginPost**](../Model/TokenLoginPost.md)|  |

### Return type

[**\Dangl\AVACloud\Model\TokenResponseGet**](../Model/TokenResponseGet.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **danglIdentityLoginWithCookie**
> danglIdentityLoginWithCookie($model, $redirect_url)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\DanglIdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \Dangl\AVACloud\Model\LoginPost(); // \Dangl\AVACloud\Model\LoginPost | 
$redirect_url = "redirect_url_example"; // string | 

try {
    $apiInstance->danglIdentityLoginWithCookie($model, $redirect_url);
} catch (Exception $e) {
    echo 'Exception when calling DanglIdentityApi->danglIdentityLoginWithCookie: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Dangl\AVACloud\Model\LoginPost**](../Model/LoginPost.md)|  |
 **redirect_url** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **danglIdentityRefreshToken**
> \Dangl\AVACloud\Model\TokenResponseGet danglIdentityRefreshToken($model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\DanglIdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \Dangl\AVACloud\Model\TokenRefreshPost(); // \Dangl\AVACloud\Model\TokenRefreshPost | 

try {
    $result = $apiInstance->danglIdentityRefreshToken($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DanglIdentityApi->danglIdentityRefreshToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Dangl\AVACloud\Model\TokenRefreshPost**](../Model/TokenRefreshPost.md)|  |

### Return type

[**\Dangl\AVACloud\Model\TokenResponseGet**](../Model/TokenResponseGet.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **danglIdentityRegister**
> danglIdentityRegister($register_model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\DanglIdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$register_model = new \Dangl\AVACloud\Model\RegisterPost(); // \Dangl\AVACloud\Model\RegisterPost | 

try {
    $apiInstance->danglIdentityRegister($register_model);
} catch (Exception $e) {
    echo 'Exception when calling DanglIdentityApi->danglIdentityRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_model** | [**\Dangl\AVACloud\Model\RegisterPost**](../Model/RegisterPost.md)|  |

### Return type

void (empty response body)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **danglIdentityRequestPasswordReset**
> danglIdentityRequestPasswordReset($forgot_password_model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\DanglIdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$forgot_password_model = new \Dangl\AVACloud\Model\ForgotPasswordPost(); // \Dangl\AVACloud\Model\ForgotPasswordPost | 

try {
    $apiInstance->danglIdentityRequestPasswordReset($forgot_password_model);
} catch (Exception $e) {
    echo 'Exception when calling DanglIdentityApi->danglIdentityRequestPasswordReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **forgot_password_model** | [**\Dangl\AVACloud\Model\ForgotPasswordPost**](../Model/ForgotPasswordPost.md)|  |

### Return type

void (empty response body)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **danglIdentitySignOutWithSignInManager**
> danglIdentitySignOutWithSignInManager()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\DanglIdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->danglIdentitySignOutWithSignInManager();
} catch (Exception $e) {
    echo 'Exception when calling DanglIdentityApi->danglIdentitySignOutWithSignInManager: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

