# InvoiceCharge

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**net_amount** | **float** | BT-99 The net amount of the charge | [optional] 
**relative_charge_base_amount** | **float** | BT-100 If this is a relative / percentage charge, this should be set and give the base amount that is being used for the calculation | [optional] 
**relative_charge_percentage** | **float** | BT-101 If this is a relative / percentage charge, this should be set and be given in decimal representation, meaning 19% would be 0.19 | [optional] 
**vat_category** | [**\Dangl\AVACloud\Model\VatCategory**](VatCategory.md) | BT-102 The VAT category for the charge | 
**vat_rate** | **float** | BT-103 The actual tax rate as a decimal value, meaning 19% would be 0.19 | [optional] 
**reason** | **string** | BT-104 A description of the charge. This should not be set it ReasonCode is provided, otherwise this one takes precedence. | [optional] 
**reason_code** | **string** | BT-105 A reason code for the charge according to UNTDID 7161. See this list: https://unece.org/fileadmin/DAM/trade/untdid/d16b/tred/tred7161.htm | [optional] 
**reason_type** | [**\Dangl\AVACloud\Model\ChargeReasonType**](ChargeReasonType.md) | A reason type for the charge according to UNTDID 7161. This will be automatically parsed from ReasonCode and is a read-only property. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


