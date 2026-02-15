# # LineItemPriceDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**netPrice** | **float** | BT-146 The net price of this line item. This is the unit price | [optional]
**absoluteDiscountPerItem** | **float** | BT-147 A discount for this line item, given as an absolute value. It is essentially the difference between NetPrice (or the list price) and the actual invoiced price GrossPrice. | [optional]
**grossPrice** | **float** | BT-148 The gross price of this line item, meaning the price without taxes that will be invoiced | [optional]
**baseQuantity** | **float** | BT-149 The quantity for which this price is valid. In combination with the NetPrice, you basically specify the denominator of the unit price for a line item. | [optional]
**baseQuantityUnitCode** | **string** | BT-150 A code representing the unit for the base quantity | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
