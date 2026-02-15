# # OenormPositionPropertiesDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**originCode** | [**\Dangl\AVACloud\Model\OenormOriginCodeDto**](OenormOriginCodeDto.md) |  |
**openingTextIsFreeText** | **bool** | This marks if the opening texts within this element are considered free text. It corresponds to &#39;vorbemerkungskennzeichen&#39; in ÖNorm. |
**isMainPosition** | **bool** | This indicates if the ÖNorm &#39;wesentliche position&#39; mark is set. This should no longer be used, please use the IsMainPosition property on the parent position instead. |
**isUndividedPosition** | **bool** | This indicates if the ÖNorm position was a &#39;ungeteilteposition&#39; (undivided position). This will only be taken into account when the position is also the sole element inside it&#39;s parent group |
**oenormShortText** | **string** | In some ÖNorm formats, the short text can have it&#39;s own addition, so the text is split up in OenormShortText and OenormShortTextAddition To serialize this, either the ShortText property of the parent position needs to be null, or OenormShortText &#39; &#39; OenormShortTextAddition needs to match the ShortText. | [optional]
**oenormShortTextAddition** | **string** | In some ÖNorm formats, the short text can have it&#39;s own addition, so the text is split up in OenormShortText and OenormShortTextAddition To serialize this, either the ShortText property of the parent position needs to be null, or OenormShortText &#39; &#39; OenormShortTextAddition needs to match the ShortText. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
