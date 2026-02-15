# # InvoiceAllowance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**netAmount** | **float** | BT-92 The net amount of the allowance | [optional]
**relativeAllowanceBaseAmount** | **float** | BT-93 If this is a relative / percentage allowance, this should be set and give the base amount that is being used for the calculation | [optional]
**relativeAllowancePercentage** | **float** | BT-94 If this is a relative / percentage allowance, this should be set and be given in decimal representation, meaning 19% would be 0.19 | [optional]
**vatCategory** | [**\Dangl\AVACloud\Model\VatCategory**](VatCategory.md) |  |
**vatRate** | **float** | BT-96 The actual tax rate as a decimal value, meaning 19% would be 0.19 | [optional]
**reason** | **string** | BT-97 A description of the allowance. This should not be set it ReasonCode is provided, otherwise this one takes precedence. | [optional]
**reasonCode** | **string** | BT-98 A reason code for the allowance according to UNTDID 5189. See this list: https://unece.org/fileadmin/DAM/trade/untdid/d16b/tred/tred5189.htm | [optional]
**reasonType** | [**\Dangl\AVACloud\Model\AllowanceReasonType**](AllowanceReasonType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
