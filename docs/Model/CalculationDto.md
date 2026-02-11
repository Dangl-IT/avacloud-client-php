# # CalculationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Descriptive text for this calculation. | [optional]
**formula** | **string** | This Calculation&#39;s mathematical expression. Please note that thousands separators are not supported. Both comma and point will be treated as decimal separators. | [optional]
**result** | **float** | The calculated result from the formula, 0 if invalid. | [readonly]
**valid** | **bool** | Whether the Formula is a valid expression. | [readonly]
**error_position_in_line** | **int** | Will be -1 if the Formula is correct, else it will show the position in the formula where an error was encountered. This is a zero based index. | [readonly]
**project_catalogues** | [**\Dangl\AVACloud\Model\CatalogueDto[]**](CatalogueDto.md) | These are Catalogues that are used within this Calculation. Catalogues are used to describe catalogues, or collections, that can be used to describe elements with commonly known properties. For example, QuantityAssignments use these to categorize themselves. They are propagate to all child elements, e.g. other containers and QuantityAssignments. In the context of a ServiceSpecification, all elements share the same instance of the collection. | [optional]
**catalogue_references** | [**\Dangl\AVACloud\Model\CatalogueReferenceDto[]**](CatalogueReferenceDto.md) | Referenced catalogues for this Calculation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
