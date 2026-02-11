# Dangl\AVACloud\IdsConnectConversionApi



All URIs are relative to https://avacloud-api.dangl-it.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**idsConnectConversionConvertToAva()**](IdsConnectConversionApi.md#idsConnectConversionConvertToAva) | **POST** /conversion/ids-connect/ava | Converts IDS Connect files to Dangl.AVA projects |
| [**idsConnectConversionConvertToFlatAva()**](IdsConnectConversionApi.md#idsConnectConversionConvertToFlatAva) | **POST** /conversion/ids-connect/flat-ava | Converts IDS Connect files to Dangl.AVA projects |


## `idsConnectConversionConvertToAva()`

```php
idsConnectConversionConvertToAva($remove_plain_text_long_texts, $remove_html_long_texts, $ids_connect_file): \Dangl\AVACloud\Model\ProjectDto
```

Converts IDS Connect files to Dangl.AVA projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\IdsConnectConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$remove_plain_text_long_texts = True; // bool | If set to true, plain text long texts will be removed from the output to reduce response sizes
$remove_html_long_texts = True; // bool | If set to true, html long texts will be removed from the output to reduce response sizes
$ids_connect_file = '/path/to/file.txt'; // \SplFileObject | The input file

try {
    $result = $apiInstance->idsConnectConversionConvertToAva($remove_plain_text_long_texts, $remove_html_long_texts, $ids_connect_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdsConnectConversionApi->idsConnectConversionConvertToAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **remove_plain_text_long_texts** | **bool**| If set to true, plain text long texts will be removed from the output to reduce response sizes | [optional] |
| **remove_html_long_texts** | **bool**| If set to true, html long texts will be removed from the output to reduce response sizes | [optional] |
| **ids_connect_file** | **\SplFileObject****\SplFileObject**| The input file | [optional] |

### Return type

[**\Dangl\AVACloud\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/vnd.com.dangl-it.ProjectDto.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `idsConnectConversionConvertToFlatAva()`

```php
idsConnectConversionConvertToFlatAva($ids_connect_file): \Dangl\AVACloud\Model\FlatAvaProject
```

Converts IDS Connect files to Dangl.AVA projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Dangl.Identity
$config = Dangl\AVACloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new Dangl\AVACloud\Api\IdsConnectConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids_connect_file = '/path/to/file.txt'; // \SplFileObject | The input file

try {
    $result = $apiInstance->idsConnectConversionConvertToFlatAva($ids_connect_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdsConnectConversionApi->idsConnectConversionConvertToFlatAva: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids_connect_file** | **\SplFileObject****\SplFileObject**| The input file | [optional] |

### Return type

[**\Dangl\AVACloud\Model\FlatAvaProject**](../Model/FlatAvaProject.md)

### Authorization

[Dangl.Identity](../../README.md#Dangl.Identity)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
