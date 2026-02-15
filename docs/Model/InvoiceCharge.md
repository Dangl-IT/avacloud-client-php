# # InvoiceCharge

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**netAmount** | **float** | BT-99 The net amount of the charge | [optional]
**relativeChargeBaseAmount** | **float** | BT-100 If this is a relative / percentage charge, this should be set and give the base amount that is being used for the calculation | [optional]
**relativeChargePercentage** | **float** | BT-101 If this is a relative / percentage charge, this should be set and be given in decimal representation, meaning 19% would be 0.19 | [optional]
**vatCategory** | [**\Dangl\AVACloud\Model\VatCategory**](VatCategory.md) |  |
**vatRate** | **float** | BT-103 The actual tax rate as a decimal value, meaning 19% would be 0.19 | [optional]
**reason** | **string** | BT-104 A description of the charge. This should not be set it ReasonCode is provided, otherwise this one takes precedence. | [optional]
**reasonCode** | **string** | BT-105 A reason code for the charge according to UNTDID 7161. See this list: https://unece.org/fileadmin/DAM/trade/untdid/d16b/tred/tred7161.htm | [optional]
**reasonType** | [**\Dangl\AVACloud\Model\ChargeReasonType**](ChargeReasonType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
