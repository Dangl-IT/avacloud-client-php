# Dangl\AVACloud\ValidationApi

All URIs are relative to *https://avacloud-api.dangl-it.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**validationValidateFile**](ValidationApi.md#validationValidateFile) | **POST** /validation/file | This endpoint validates AVA files, typically GAEB or ÖNorm. The type of file needs to be provided as a query parameter, since there is no auto detection of the uploaded file type.
[**validationValidateProject**](ValidationApi.md#validationValidateProject) | **POST** /validation/project | This endpoint provides a full validation of a provided ProjectDto. It will take the given exchange phase into account and do some general project validation. Optionally, a conversion to a desired target can also be done, in which case the target file will also be validated.


# **validationValidateFile**
> \Dangl\AVACloud\Model\ValidationResult validationValidateFile($ava_file, $file_validation_source_type)

This endpoint validates AVA files, typically GAEB or ÖNorm. The type of file needs to be provided as a query parameter, since there is no auto detection of the uploaded file type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\ValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_file = "/path/to/file.txt"; // \SplFileObject | The file to validate
$file_validation_source_type = "file_validation_source_type_example"; // string | You need to indicate which type of file is being provided, there is no auto detection mechanism

try {
    $result = $apiInstance->validationValidateFile($ava_file, $file_validation_source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationApi->validationValidateFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_file** | **\SplFileObject**| The file to validate | [optional]
 **file_validation_source_type** | **string**| You need to indicate which type of file is being provided, there is no auto detection mechanism | [optional]

### Return type

[**\Dangl\AVACloud\Model\ValidationResult**](../Model/ValidationResult.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validationValidateProject**
> \Dangl\AVACloud\Model\ValidationResult validationValidateProject($ava_project_validation_source_options)

This endpoint provides a full validation of a provided ProjectDto. It will take the given exchange phase into account and do some general project validation. Optionally, a conversion to a desired target can also be done, in which case the target file will also be validated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Dangl\AVACloud\Api\ValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ava_project_validation_source_options = new \Dangl\AVACloud\Model\PostAvaProjectValidationSourceOptions(); // \Dangl\AVACloud\Model\PostAvaProjectValidationSourceOptions | The options used for the validation operation

try {
    $result = $apiInstance->validationValidateProject($ava_project_validation_source_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationApi->validationValidateProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ava_project_validation_source_options** | [**\Dangl\AVACloud\Model\PostAvaProjectValidationSourceOptions**](../Model/PostAvaProjectValidationSourceOptions.md)| The options used for the validation operation |

### Return type

[**\Dangl\AVACloud\Model\ValidationResult**](../Model/ValidationResult.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

