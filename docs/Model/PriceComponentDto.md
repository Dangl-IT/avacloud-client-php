# # PriceComponentDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**price** | **float** | The total, calculated price of this component. | [readonly]
**label** | **string** | The label associated with this price component. Will be taken from the parent Projects ProjectInformation. | [optional]
**values** | [**\Dangl\AVACloud\Model\CalculationDto[]**](CalculationDto.md) | The single Calculation elements this price component is composed of. | [optional]
**projectCatalogues** | [**\Dangl\AVACloud\Model\CatalogueDto[]**](CatalogueDto.md) | These are Catalogues that are used within this PriceComponent. Catalogues are used to describe catalogues, or collections, that can be used to describe elements with commonly known properties. For example, QuantityAssignments use these to categorize themselves. They are propagate to all child elements, e.g. other containers and QuantityAssignments. In the context of a ServiceSpecification, all elements share the same instance of the collection. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
