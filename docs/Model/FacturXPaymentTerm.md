# # FacturXPaymentTerm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | A text description of the payment discount term. BT-20 in XRechnung, but this parent object is only used for Factur-X / ZUGFeRD and holds more detailled information about the payment term. | [optional]
**due_date** | **\DateTime** | The date until which the payment term applies. | [optional]
**base_amount** | **float** | The base amount unto which the discount applies. | [optional]
**actual_discount_amount** | **float** | The actual discount amount that will be deducted if the payment is done within the specified period. | [optional]
**base_date** | **\DateTime** | The base date for calculating the discount period. This is typically the invoice date. | [optional]
**period_measure** | **float** | The duration of the discount period, e.g. \&quot;30\&quot; for 30 days. | [optional]
**period_measure_unit_code** | **string** | The unit in which the period is specified, e.g. \&quot;DAY\&quot;. | [optional]
**calculation_percent** | **float** | The percentage of the discount, e.g. \&quot;.02\&quot; for 2%. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
