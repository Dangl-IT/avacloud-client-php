# InvoiceAllowance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**net_amount** | **float** | BT-92 The net amount of the allowance | [optional] 
**relative_allowance_base_amount** | **float** | BT-93 If this is a relative / percentage allowance, this should be set and give the base amount that is being used for the calculation | [optional] 
**relative_allowance_percentage** | **float** | BT-94 If this is a relative / percentage allowance, this should be set and be given in decimal representation, meaning 19% would be 0.19 | [optional] 
**vat_category** | [**\Dangl\AVACloud\Model\VatCategory**](VatCategory.md) | BT-95 The VAT category for the allowance | 
**vat_rate** | **float** | BT-96 The actual tax rate as a decimal value, meaning 19% would be 0.19 | [optional] 
**reason** | **string** | BT-97 A description of the allowance. This should not be set it ReasonCode is provided, otherwise this one takes precedence. | [optional] 
**reason_code** | **string** | BT-98 A reason code for the allowance according to UNTDID 5189. See this list: https://unece.org/fileadmin/DAM/trade/untdid/d16b/tred/tred5189.htm | [optional] 
**reason_type** | [**\Dangl\AVACloud\Model\AllowanceReasonType**](AllowanceReasonType.md) | A reason type for the allowance according to UNTDID 5189. This will be automatically parsed from ReasonCode and is a read-only property. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


