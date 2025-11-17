# PaymentInstructions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | BT-82 Additional text to describe the payment instructions. | [optional] 
**payment_type_code** | **string** | BT-81 This should be a code according to UNCL 4461 to identify the type of payment. For example, code \&quot;58\&quot; means SEPA Credit Transfer, and code \&quot;30\&quot; means non-SEPA Credit Transfer. See this list: https://docs.peppol.eu/poacc/billing/3.0/codelist/UNCL4461/ | [optional] 
**payment_type** | [**\Dangl\AVACloud\Model\PaymentType**](PaymentType.md) | This should be a type according to UNCL 4461 to identify the type of payment. | [optional] 
**payment_creditor_identifier** | **string** | BT-90 If a SEPA direct debit payment mean is used, then this reference should be provided. It&#39;s the creditor identifier in SEPA, in German \&quot;Gläubiger-Identifikationsnummer\&quot;. Field BT-90 in XRechnung. | [optional] 
**payment_means** | [**\Dangl\AVACloud\Model\PaymentMeans[]**](PaymentMeans.md) | BG-16 A list of payment means that can be used to pay the invoice. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


