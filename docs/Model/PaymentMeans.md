# # PaymentMeans

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_identifier** | **string** | BT-84 This is typically the IBAN or account number BT-84 in XRechnung. | [optional]
**account_name** | **string** | BT-85 The name for the account, typically the name of the owner for a bank account. BT-85 in XRechnung. | [optional]
**service_provider_identifier** | **string** | BT-86 This can be the BIC BT-86 in XRechnung. This will be saved in BG-17. | [optional]
**direct_debit_mandate_id** | **string** | BT-89 If used, this is the mandate id for direct debit under which the direct debit will be performed BT-89 in XRechnung. This will be saved in BG-19. | [optional]
**direct_debit_iban** | **string** | BT-91 If used, this is the IBAN for direct debit BT-91 in XRechnung. | [optional]
**payment_id** | **string** | BT-83 The payment id, e.g. a reference number for the payment. In German, this would be called \&quot;Verwendungszweck\&quot;. BT-83 in XRechnung. | [optional]
**payment_card_holder_name** | **string** | BT-88 If this is a card payment, then this is the name of the cardholder. BT-88 in XRechnung. | [optional]
**payment_card_primary_account_number** | **string** | BT-87 If this is a card payment, then this is the type of card. BT-87 in XRechnung. This will be saved in BG-18. | [optional]
**payment_card_network_id** | **string** | If this is a card payment, then this is the type of card. This has no mapping yet in XRechnung, see: https://github.com/itplr-kosit/validator-configuration-xrechnung/issues/53 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
