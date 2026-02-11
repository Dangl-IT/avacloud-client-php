# # OenormPositionPropertiesDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**origin_code** | [**\Dangl\AVACloud\Model\OenormOriginCodeDto**](OenormOriginCodeDto.md) |  |
**opening_text_is_free_text** | **bool** | This marks if the opening texts within this element are considered free text. It corresponds to &#39;vorbemerkungskennzeichen&#39; in ÖNorm. |
**is_main_position** | **bool** | This indicates if the ÖNorm &#39;wesentliche position&#39; mark is set. This should no longer be used, please use the IsMainPosition property on the parent position instead. |
**is_undivided_position** | **bool** | This indicates if the ÖNorm position was a &#39;ungeteilteposition&#39; (undivided position). This will only be taken into account when the position is also the sole element inside it&#39;s parent group |
**oenorm_short_text** | **string** | In some ÖNorm formats, the short text can have it&#39;s own addition, so the text is split up in OenormShortText and OenormShortTextAddition To serialize this, either the ShortText property of the parent position needs to be null, or OenormShortText &#39; &#39; OenormShortTextAddition needs to match the ShortText. | [optional]
**oenorm_short_text_addition** | **string** | In some ÖNorm formats, the short text can have it&#39;s own addition, so the text is split up in OenormShortText and OenormShortTextAddition To serialize this, either the ShortText property of the parent position needs to be null, or OenormShortText &#39; &#39; OenormShortTextAddition needs to match the ShortText. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
