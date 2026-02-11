# # InvoiceTotals

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_net** | **float** | BT-106 Sum of all invoice items in net. BT-106 in XRechnung. | [optional]
**total_allowances** | **float** | BT-107 This is the sum of all allowances (e.g. deductions or withheld tax) in the invoice BT-107 in XRechnung. | [optional]
**total_charges** | **float** | BT-108 This is the sum of all charges in the invoice, except VAT. For example, late fees or surcharges. BT-108 in XRechnung. | [optional]
**total_after_deductions** | **float** | BT-109 This is the total net value of the invoice after applied allowances and charges, meaning the actual net sum to be paid. BT-109 in XRechnung. | [optional]
**total_vat_amount** | **float** | BT-110 The total amount of VAT in the invoice. BT-110 in XRechnung. | [optional]
**total_gross** | **float** | BT-112 The total gross amount of the invoice, including all taxes and deductions. BT-112 in XRechnung. | [optional]
**already_paid_total** | **float** | BT-113 The total amount that has already been paid for this invoice, e.g. used when previous invoice sums are included here that have already been paid. BT-113 in XRechnung. | [optional]
**payable_rounding_amount** | **float** | BT-114 If this is given, this specifies if any rounding amount is applied to the invoice, before calculating the TotalToBePaid value. BT-114 in XRechnung. | [optional]
**total_to_be_paid** | **float** | BT-115 The sum that needs to be paid for this invoice. This is the total gross amount minus the already paid amount. BT-115 in XRechnung. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
