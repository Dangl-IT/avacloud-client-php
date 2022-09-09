# ValidationCheckResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**severity** | [**\Dangl\AVACloud\Model\ValidationSeverity**](ValidationSeverity.md) | The severity for this check. Usually, low severity checks do not impact data exchange with third party applications | 
**check_type** | [**\Dangl\AVACloud\Model\ValidationCheckType**](ValidationCheckType.md) | The actual check that is represented by this result. Additional information may be found in other properties of this class, depending on the check. | 
**message** | **string** | A human readable message describing the result of the check. | [optional] 
**object_validation_check_details** | [**\Dangl\AVACloud\Model\ObjectValidationCheckDetails**](ObjectValidationCheckDetails.md) | For CheckType of types ObjectValidation | [optional] 
**xml_schema_validation_check_details** | [**\Dangl\AVACloud\Model\XmlSchemaValidationCheckDetails**](XmlSchemaValidationCheckDetails.md) | For CheckType of types XmlSchemaCheck | [optional] 
**project_validation_check_details** | [**\Dangl\AVACloud\Model\ProjectValidationCheckDetails**](ProjectValidationCheckDetails.md) | For CheckType of types ProjectValidation | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


