# Dangl\AVACloud\AvaMergeApi

All URIs are relative to *https://avacloud-api.dangl-it.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**avaMergeConvertToAva**](AvaMergeApi.md#avaMergeConvertToAva) | **POST** /ava-merge | This will merge two AVA projects into one. Typically this is used for merging offers into a base project, which preserves the base projects structure and adds prices and text additions from the offer project. This is currently in a preview phase, and the endpoint and its models are subject to change in the next versions of AVACloud.


# **avaMergeConvertToAva**
> \Dangl\AVACloud\Model\GetProjectMergeResult avaMergeConvertToAva($merge_configuration)

This will merge two AVA projects into one. Typically this is used for merging offers into a base project, which preserves the base projects structure and adds prices and text additions from the offer project. This is currently in a preview phase, and the endpoint and its models are subject to change in the next versions of AVACloud.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\AvaMergeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merge_configuration = new \Dangl\AVACloud\Model\PostAvaProjectMerge(); // \Dangl\AVACloud\Model\PostAvaProjectMerge | 

try {
    $result = $apiInstance->avaMergeConvertToAva($merge_configuration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaMergeApi->avaMergeConvertToAva: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merge_configuration** | [**\Dangl\AVACloud\Model\PostAvaProjectMerge**](../Model/PostAvaProjectMerge.md)|  |

### Return type

[**\Dangl\AVACloud\Model\GetProjectMergeResult**](../Model/GetProjectMergeResult.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/vnd.com.dangl-it.ProjectDto.v1+json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

