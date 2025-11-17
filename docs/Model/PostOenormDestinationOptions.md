# PostOenormDestinationOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destination_oenorm_type** | [**\Dangl\AVACloud\Model\DestinationOenormType**](DestinationOenormType.md) | Defaults to Lv2015 | 
**try_repair_project_structure** | **bool** | Defaults to false. If this is enabled, the converter will try to ensure that the project structure can be mapped to Oenorm. It might introduce additional group levels to ensure a compatible target | 
**skip_try_enforce_schema_compliant_xml_output** | **bool** | If this option is enabled, AVACloud will not attempt to force a schema-compliant Xml output for ÖNorm targets that are Xml based. By default, AVACloud will try to add required fields, even if no data is present, with sensible defaults. This behavior can be disabled with this option. | 
**remove_unprintable_characters_from_texts** | **bool** | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. Defaults to true. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


