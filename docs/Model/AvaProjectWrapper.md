# # AvaProjectWrapper

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project** | [**\Dangl\AVACloud\Model\ProjectDto**](ProjectDto.md) |  |
**invoice_number** | **string** | The number of the invoice | [optional]
**documents** | [**\Dangl\AVACloud\Model\SupportingDocument[]**](SupportingDocument.md) | Attached documents to the invoice | [optional]
**invoice_period** | [**\Dangl\AVACloud\Model\InvoicePeriod**](InvoicePeriod.md) |  | [optional]
**payment_instructions** | [**\Dangl\AVACloud\Model\PaymentInstructions**](PaymentInstructions.md) |  | [optional]
**invoice_type** | [**\Dangl\AVACloud\Model\InvoiceType**](InvoiceType.md) |  |
**is_eu_reverse_charge_invoice** | **bool** | If this is set to true, the invoice will be marked as a reverse charge invoice in all VAT rates. You still need to ensure that the actual tax rates are set to zero in all elements |
**payment_due_date** | **\DateTime** | Until when the payment is due | [optional]
**payment_terms** | **string** | A text description of payment terms, e.g. cash discounts or payment conditions | [optional]
**previous_invoices** | [**\Dangl\AVACloud\Model\PreviousInvoice[]**](PreviousInvoice.md) | In case of partial of final invoices, it&#39;s possible to reference the previous invoice numbers | [optional]
**already_paid_total_gross** | **float** | If parts of this invoice (or of previous invoices) have already been paid, then this property can be used to specify that some parts of the invoice are already paid and this will be deducted from the to be paid amount. |
**references** | [**\Dangl\AVACloud\Model\References**](References.md) |  | [optional]
**allowances** | [**\Dangl\AVACloud\Model\InvoiceAllowance[]**](InvoiceAllowance.md) | Optional document level allowances. For example, those can be used to supply global discounts e.g. for security deposits. When using this property, please pay attention that a deduction factor on the exported ServiceSpecification will also be exported as an allowance, in this case the total price of the invoice might be different from the total price of the ServiceSpecification. | [optional]
**charges** | [**\Dangl\AVACloud\Model\InvoiceCharge[]**](InvoiceCharge.md) | Optional document level charges, e.g. for shipping or handling. When using this property, please pay attention that the charges given here will be applied to the already calculated total price of the ServiceSpecification, in this case the total price of the invoice might be different from the total price of the ServiceSpecification. | [optional]
**delivery_information** | [**\Dangl\AVACloud\Model\DeliveryInformation**](DeliveryInformation.md) |  | [optional]
**seller_tax_representative** | [**\Dangl\AVACloud\Model\Organization**](Organization.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
