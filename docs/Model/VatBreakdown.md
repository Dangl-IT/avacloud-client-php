# # VatBreakdown

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**net_taxable_amount** | **float** | BT-116 The total net amount of this VAT category | [optional]
**vat_amount** | **float** | BT-117 The total VAT | [optional]
**vat_category** | [**\Dangl\AVACloud\Model\VatCategory**](VatCategory.md) |  |
**tax_rate** | **float** | BT-119 The actual tax rate as a decimal value, e.g. 19% would be 0.19 | [optional]
**vat_exemption_reason_text** | **string** | BT-120 If the VAT is exempt, there should be a description here. For example, in reverse charge scenarios, this text should contain a reference to \&quot;Reverse charge according to ...\&quot;. | [optional]
**vat_exemption_reason_code** | **string** | BT-121 A code from the VAT exemption reason code list(VATEX)“ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
