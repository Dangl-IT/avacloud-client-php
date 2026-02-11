# # PriceInformationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Elements GUID identifier. |
**hourly_wage** | **float** | The amount of currency per one hour of manual labour work in this project. |
**deduction_factor** | **float** | The final, total price will be deducted by this rate. |
**flat_sum** | **float** | This is given when there is only one flat price for the whole service specification. |
**tax_rate** | **float** | Global tax rate for the project. Note that certain elements may have a different, specific tax rate. |
**has_unset_tax_rate** | **bool** | This property indicates if the TaxRate property is actually zero (0) or if it&#39;s just unset. The TaxRate is a non-nullable property, so it can&#39;t be null and therefore a distinction between unset and zero relies on this additional property. When exporting to GAEB, this can be used e.g. to decide whether or not the tax rate should be serialized. This property is automtically set to false when the TaxRate is set to any value, even zero. If the TaxRate is not set to zero, this property will always return false and can not be set to true. |
**trade_discounts** | [**\Dangl\AVACloud\Model\TradeDiscountDto[]**](TradeDiscountDto.md) | Trade discounts for offered in this ServiceSpecification. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
