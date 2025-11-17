# PostAvaProjectValidationSourceOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ava_project** | [**\Dangl\AVACloud\Model\ProjectDto**](ProjectDto.md) | The project that should be validated | 
**service_specification_index** | **int** | The index of the ServiceSpecification that should be validated. If not given, will default to the first one in the project. | [optional] 
**validation_type** | [**\Dangl\AVACloud\Model\ValidationType**](ValidationType.md) | This can optionally be specified to simulate a conversion to a specific target. | 
**exchange_phase** | [**\Dangl\AVACloud\Model\ExchangePhaseDto**](ExchangePhaseDto.md) | This can optionally be supplied to test for a specific exchange phase. For example, missing prices will only trigger errors in some specific exchange phases. Please note: If a conversion to a specific format, e.g. GAEB or ÖNorm, is given, this parameter is not applied to the internal conversion. The converter options must be set in the appropriate properties as well. | [optional] 
**ava_source_options** | [**\Dangl\AVACloud\Model\PostAvaSourceOptions**](PostAvaSourceOptions.md) | Options for importing the AVA project | [optional] 
**oenorm_destination_options** | [**\Dangl\AVACloud\Model\PostOenormDestinationOptions**](PostOenormDestinationOptions.md) | Options for conversion to Oenorm. Should be given if ValidationType is set to Oenorm. | [optional] 
**gaeb_destination_options** | [**\Dangl\AVACloud\Model\PostGaebDestinationOptions**](PostGaebDestinationOptions.md) | Options for conversion to GAEB. Should be given if ValidationType is set to GAEB. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


