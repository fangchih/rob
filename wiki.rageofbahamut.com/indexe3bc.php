<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE rdf:RDF[
	<!ENTITY rdf 'http://www.w3.org/1999/02/22-rdf-syntax-ns#'>
	<!ENTITY rdfs 'http://www.w3.org/2000/01/rdf-schema#'>
	<!ENTITY owl 'http://www.w3.org/2002/07/owl#'>
	<!ENTITY swivt 'http://semantic-mediawiki.org/swivt/1.0#'>
	<!ENTITY wiki 'http://wiki.rageofbahamut.com/Special:URIResolver/'>
	<!ENTITY property 'http://wiki.rageofbahamut.com/Special:URIResolver/Property-3A'>
	<!ENTITY wikiurl 'http://wiki.rageofbahamut.com/'>
]>

<rdf:RDF
	xmlns:rdf="&rdf;"
	xmlns:rdfs="&rdfs;"
	xmlns:owl ="&owl;"
	xmlns:swivt="&swivt;"
	xmlns:wiki="&wiki;"
	xmlns:property="&property;">

	<owl:Ontology rdf:about="http://wiki.rageofbahamut.com/Special:ExportRDF/Miniature_Mandrake">
		<swivt:creationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2016-08-16T10:37:49-04:00</swivt:creationDate>
		<owl:imports rdf:resource="http://semantic-mediawiki.org/swivt/1.0"/>
	</owl:Ontology>
	<swivt:Subject rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Miniature_Mandrake">
		<rdf:type rdf:resource="&wiki;Category-3ADemons_cards"/>
		<rdfs:label>Miniature Mandrake</rdfs:label>
		<swivt:page rdf:resource="http://wiki.rageofbahamut.com/Miniature_Mandrake"/>
		<rdfs:isDefinedBy rdf:resource="http://wiki.rageofbahamut.com/Special:ExportRDF/Miniature_Mandrake"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<property:Atk_to_pwr rdf:datatype="http://www.w3.org/2001/XMLSchema#double">5.22</property:Atk_to_pwr>
		<property:Card_atk rdf:datatype="http://www.w3.org/2001/XMLSchema#double">1170</property:Card_atk>
		<property:Card_atk4_7 rdf:datatype="http://www.w3.org/2001/XMLSchema#double">6048</property:Card_atk4_7>
		<property:Card_atk6_11 rdf:datatype="http://www.w3.org/2001/XMLSchema#double">6236</property:Card_atk6_11>
		<property:Card_atk8_15 rdf:datatype="http://www.w3.org/2001/XMLSchema#double">6258</property:Card_atk8_15>
		<property:Card_azure_card_pack rdf:datatype="http://www.w3.org/2001/XMLSchema#boolean">false</property:Card_azure_card_pack>
		<property:Card_def rdf:datatype="http://www.w3.org/2001/XMLSchema#double">1080</property:Card_def>
		<property:Card_def4_7 rdf:datatype="http://www.w3.org/2001/XMLSchema#double">5552</property:Card_def4_7>
		<property:Card_def6_11 rdf:datatype="http://www.w3.org/2001/XMLSchema#double">5724</property:Card_def6_11>
		<property:Card_def8_15 rdf:datatype="http://www.w3.org/2001/XMLSchema#double">5746</property:Card_def8_15>
		<property:Card_faction rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Demons</property:Card_faction>
		<property:Card_img rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Miniature Mandrake1.jpg</property:Card_img>
		<property:Card_legend_card_pack rdf:datatype="http://www.w3.org/2001/XMLSchema#boolean">false</property:Card_legend_card_pack>
		<property:Card_max_evo_forms rdf:resource="&wiki;4"/>
		<property:Card_max_img rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Miniature Mandrake4.jpg</property:Card_max_img>
		<property:Card_max_power_cost rdf:datatype="http://www.w3.org/2001/XMLSchema#double">12</property:Card_max_power_cost>
		<property:Card_max_rarity rdf:datatype="http://www.w3.org/2001/XMLSchema#string">High Normal</property:Card_max_rarity>
		<property:Card_max_sells_for rdf:resource="&wiki;2250"/>
		<property:Card_max_stars rdf:resource="&wiki;2"/>
		<property:Card_maxatk rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2930</property:Card_maxatk>
		<property:Card_maxdef rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2690</property:Card_maxdef>
		<property:Card_name rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Miniature Mandrake</property:Card_name>
		<property:Card_power_cost rdf:datatype="http://www.w3.org/2001/XMLSchema#double">12</property:Card_power_cost>
		<property:Card_rarity rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Normal</property:Card_rarity>
		<property:Card_released rdf:datatype="http://www.w3.org/2001/XMLSchema#boolean">true</property:Card_released>
		<property:Card_sells_for rdf:datatype="http://www.w3.org/2001/XMLSchema#double">750</property:Card_sells_for>
		<property:Card_stars rdf:datatype="http://www.w3.org/2001/XMLSchema#double">1</property:Card_stars>
		<property:Card_story rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Its eyes might be alluring, but don't let that tempt you. Only wizards and alchemists can handle a flower like that.</property:Card_story>
		<property:Def_to_pwr rdf:datatype="http://www.w3.org/2001/XMLSchema#double">4.79</property:Def_to_pwr>
		<property:Stats_to_pwr rdf:datatype="http://www.w3.org/2001/XMLSchema#double">10</property:Stats_to_pwr>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_skill"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_effect"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_skill"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_effect"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_event_skill"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_event_effect"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_event_skill"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_event_effect"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_trait_skill"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_trait_effect"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_trait_skill"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_trait_effect"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_trait"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_trait"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_referral_card"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_event_card"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_friendship_card_pack"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_quest_card"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_realm_booster_box"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_silver_coin_card"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_treasure_card"/>
		<swivt:wikiPageModificationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2014-05-31T00:36:00Z</swivt:wikiPageModificationDate>
		<property:Modification_date-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2456808.525</property:Modification_date-23aux>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Miniature Mandrake</swivt:wikiPageSortKey>
	</swivt:Subject>
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#creationDate" />
	<owl:Class rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Category-3ADemons_cards" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#page" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiNamespace" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AAtk_to_pwr" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_atk" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_atk4_7" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_atk6_11" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_atk8_15" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_azure_card_pack" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_def" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_def4_7" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_def6_11" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_def8_15" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_faction" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_img" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_legend_card_pack" />
	<owl:ObjectProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_evo_forms" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_img" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_power_cost" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_rarity" />
	<owl:ObjectProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_sells_for" />
	<owl:ObjectProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_stars" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_maxatk" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_maxdef" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_name" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_power_cost" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_rarity" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_released" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_sells_for" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_stars" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_story" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ADef_to_pwr" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AStats_to_pwr" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#specialProperty_ERRP" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageModificationDate" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AModification_date-23aux" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageSortKey" />
	<!-- Created by Semantic MediaWiki, http://semantic-mediawiki.org/ -->
</rdf:RDF>