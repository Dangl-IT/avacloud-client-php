# # PostOenormDestinationOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destinationOenormType** | [**\Dangl\AVACloud\Model\DestinationOenormType**](DestinationOenormType.md) |  |
**tryRepairProjectStructure** | **bool** | Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target |
**skipTryEnforceSchemaCompliantXmlOutput** | **bool** | If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option. |
**removeUnprintableCharactersFromTexts** | **bool** | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
