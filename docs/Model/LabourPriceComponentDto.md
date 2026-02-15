# # LabourPriceComponentDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**label** | **string** | The label associated with this price component. Will be taken from the parent Projects ProjectInformation. | [optional]
**price** | **float** | The total, calculated price of this component. Will multiply the calculated amount of hours with the ServiceSpecifications hourly wage rate. | [readonly]
**hourlyWage** | **float** | The cost per hour of manual labor. |
**values** | [**\Dangl\AVACloud\Model\CalculationDto[]**](CalculationDto.md) | The single Calculation elements this price component is composed of. | [optional]
**useOwnHourlyWage** | **bool** | Indicates if the ServiceSpecification&#39;s standard HourlyWage is to be used or a custom value. |
**totalTime** | **float** | The total, calculated time of this component. Will return the result rounded to three decimal places. | [readonly]
**projectCatalogues** | [**\Dangl\AVACloud\Model\CatalogueDto[]**](CatalogueDto.md) | These are Catalogues that are used within this PriceComponent. Catalogues are used to describe catalogues, or collections, that can be used to describe elements with commonly known properties. For example, QuantityAssignments use these to categorize themselves. They are propagate to all child elements, e.g. other containers and QuantityAssignments. In the context of a ServiceSpecification, all elements share the same instance of the collection. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
