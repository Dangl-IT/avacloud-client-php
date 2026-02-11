# # ProjectDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. |
**price_accuracy** | **int** | This property controls the accuracy of all price properties, meaning how many decimal places are preserved in calculations. It defaults to DEFAULT_PRICE_ACCURACY. Please see the Dangl.AVA documentation for further information about decimal precision. If UnitPriceAccuracy is set, then this property is ignored for unit prices. |
**unit_price_accuracy** | **int** | This property controls the accuracy of position unit price properties, meaning how many decimal places are preserved in calculations. Please see the Dangl.AVA documentation for further information about decimal precision. This can be separately set from PriceAccuracy, and it only controls the accuracy of the unit price of positions, not the total price. It defaults to null, which means the standard PriceAccuracy is used for unit prices. | [optional]
**force_strict_totals** | **bool** | This forces total prices to be the strict product of quantities times unit price in positions. It is enabled by default. If this is disabled, both the unit price and the total price of positions is calculated from the non-rounded values. Please see the documentation for a more detailed explanation of this setting. |
**price_rounding_mode** | [**\Dangl\AVACloud\Model\PriceRoundingModeDto**](PriceRoundingModeDto.md) |  |
**project_information** | [**\Dangl\AVACloud\Model\ProjectInformationDto**](ProjectInformationDto.md) |  | [optional]
**service_specifications** | [**\Dangl\AVACloud\Model\ServiceSpecificationDto[]**](ServiceSpecificationDto.md) | The ServiceSpecifications in this Project. | [optional]
**gaeb_xml_id** | **string** | This is used to store the GAEB XML Id within this Project. This data is not used for any calculations or evaluations but only for GAEB serialization and deserialization. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
