<?php
namespace oasis\names\specification\ubl\schema\xsd\QualifiedDatatypes_2;

use un\unece\uncefact\data\specification\UnqualifiedDataTypesSchemaModule\_2;
/**
 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2
 * @xmlType CodeType
 * @xmlName CurrencyCodeType
 * @xmlDictionaryEntryName Currency_ Code. Type
 * @xmlVersion 2.0
 * @xmlDefinition The set of world currencies.
 * @xmlRepresentationTerm Code
 * @xmlQualifierTerm Currency
 * @xmlUsageRule Derived from the ISO 4217 currency code list and used under the terms of the ISO policy stated at 
http://www.iso.org/iso/en/commcentre/pressreleases/2003/Ref871.html
 */
class CurrencyCodeType
	extends _2\CodeType
	{

	
	/**
	 * @Name Currency_ Code List. Identifier
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listID
	 * @var xsd:normalizedString
	 */
	public $listID;
	/**
	 * @Name Currency_ Code List. Agency. Identifier
	 * @Definition Defaults to the UN/EDIFACT data element 3055 code list.
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listAgencyID
	 * @var xsd:normalizedString
	 */
	public $listAgencyID;
	/**
	 * @Name Currency_ Code List. Agency Name. Text
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listAgencyName
	 * @var xsd:string
	 */
	public $listAgencyName;
	/**
	 * @Name Currency_ Code List. Name. Text
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listName
	 * @var xsd:string
	 */
	public $listName;
	/**
	 * @Name Currency_ Code List. Version. Identifier
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listVersionID
	 * @var xsd:normalizedString
	 */
	public $listVersionID;
	/**
	 * @Name Currency_ Code. Name. Text
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName name
	 * @var xsd:string
	 */
	public $name;
	/**
	 * @Name Currency_ Language. Identifier
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName languageID
	 * @var xsd:language
	 */
	public $languageID;
	/**
	 * @Name Currency_ Code List. Uniform Resource. Identifier
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listURI
	 * @var xsd:anyURI
	 */
	public $listURI;
	/**
	 * @Name Currency_ Code List Scheme. Uniform Resource. Identifier
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listSchemeURI
	 * @var xsd:anyURI
	 */
	public $listSchemeURI;


} // end class CurrencyCodeType