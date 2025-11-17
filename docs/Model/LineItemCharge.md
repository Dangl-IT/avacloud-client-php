# LineItemCharge

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**net_amount** | **float** | BT-141 The net amount of the charge | [optional] 
**relative_charge_base_amount** | **float** | BT-142 If this is a relative / percentage charge, this should be set and give the base amount that is being used for the calculation | [optional] 
**relative_charge_percentage** | **float** | BT-143 If this is a relative / percentage charge, this should be set and be given in decimal representation, meaning 19% would be 0.19 | [optional] 
**reason** | **string** | BT-144 A description of the charge. | [optional] 
**reason_code** | **string** | BT-145 A reason code for the charge according to UNTDID 7161. See this list: https://unece.org/fileadmin/DAM/trade/untdid/d16b/tred/tred7161.htm | [optional] 
**reason_type** | [**\Dangl\AVACloud\Model\ChargeReasonType**](ChargeReasonType.md) | A reason type for the charge according to UNTDID 7161. This will be automatically parsed from ReasonCode and is a read-only property. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


