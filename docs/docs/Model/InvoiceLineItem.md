# InvoiceLineItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identifier** | **string** | BT-126 An unique identifier for the line item | [optional] 
**note** | **string** | BT-127 An unstructured note to classify line items | [optional] 
**object_identifier** | **string** | BT-128 A seller-defined object identifier for this line item, meaning an identifier for the actual line. This could be a numbering sequence or a reference to a product. | [optional] 
**quantity** | **float** | BT-129 The actual invoiced quantity of the line item | [optional] 
**unit_code** | **string** | BT-130 A code for the unit of the quantity. This should be a code as defined in UN/ECE Recommendation No. 20 „Codes for Units of Measure Used in  International Trade“ und UN/ECE Recommendation No 21 „Codes for Passengers, Types of Cargo, Packages and Packaging Materials(with Complementary Codes for Package Names). See here: https://ec.europa.eu/digital-building-blocks/sites/display/DIGITAL/Registry+of+supporting+artefacts+to+implement+EN16931 | [optional] 
**net_amount** | **float** | BT-131 The net amount for this line item. This is the total price for positions | [optional] 
**purchase_order_reference** | **string** | BT-132 A reference to an item in the buyers purachase order | [optional] 
**line_item_period** | [**\Dangl\AVACloud\Model\InvoicePeriod**](InvoicePeriod.md) | BG-26 Information about the invoice period for this line item. | [optional] 
**allowances** | [**\Dangl\AVACloud\Model\LineItemAllowance[]**](LineItemAllowance.md) | BG-27 Allowances specific to this line item | [optional] 
**charges** | [**\Dangl\AVACloud\Model\LineItemCharge[]**](LineItemCharge.md) | BG-28 charges specific to this line item | [optional] 
**price_details** | [**\Dangl\AVACloud\Model\LineItemPriceDetail**](LineItemPriceDetail.md) | BG-29 Price details for this line item. | [optional] 
**vat_information** | [**\Dangl\AVACloud\Model\LineItemVatInformation[]**](LineItemVatInformation.md) | BG-30 VAT information for this line item | [optional] 
**item_information** | [**\Dangl\AVACloud\Model\LineItemInformation**](LineItemInformation.md) | BG-31 Information about this line item | [optional] 
**sub_items** | [**\Dangl\AVACloud\Model\InvoiceLineItem[]**](InvoiceLineItem.md) | BG-DEX-01 Line items can be nested, in which case this property holds the sub items | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


