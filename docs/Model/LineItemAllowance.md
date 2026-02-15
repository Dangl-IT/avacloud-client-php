# # LineItemAllowance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**netAmount** | **float** | BT-136 The net amount of the allowance | [optional]
**relativeAllowanceBaseAmount** | **float** | BT-137 If this is a relative / percentage allowance, this should be set and give the base amount that is being used for the calculation | [optional]
**relativeAllowancePercentage** | **float** | BT-138 If this is a relative / percentage allowance, this should be set and be given in decimal representation, meaning 19% would be 0.19 | [optional]
**reason** | **string** | BT-139 A description of the allowance. | [optional]
**reasonCode** | **string** | BT-140 A reason code for the allowance according to UNTDID 5189. Should be a code from this list: https://unece.org/fileadmin/DAM/trade/untdid/d16b/tred/tred5189.htm | [optional]
**reasonType** | [**\Dangl\AVACloud\Model\AllowanceReasonType**](AllowanceReasonType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
