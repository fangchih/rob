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

	<owl:Ontology rdf:about="http://wiki.rageofbahamut.com/Special:ExportRDF/Gargoyle">
		<swivt:creationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2016-08-16T09:55:06-04:00</swivt:creationDate>
		<owl:imports rdf:resource="http://semantic-mediawiki.org/swivt/1.0"/>
	</owl:Ontology>
	<swivt:Subject rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Gargoyle">
		<rdf:type rdf:resource="&wiki;Category-3ADemons_cards"/>
		<rdfs:label>Gargoyle</rdfs:label>
		<swivt:page rdf:resource="http://wiki.rageofbahamut.com/Gargoyle"/>
		<rdfs:isDefinedBy rdf:resource="http://wiki.rageofbahamut.com/Special:ExportRDF/Gargoyle"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<property:Card_atk rdf:datatype="http://www.w3.org/2001/XMLSchema#double">1280</property:Card_atk>
		<property:Card_azure_card_pack rdf:datatype="http://www.w3.org/2001/XMLSchema#boolean">false</property:Card_azure_card_pack>
		<property:Card_def rdf:datatype="http://www.w3.org/2001/XMLSchema#double">960</property:Card_def>
		<property:Card_faction rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Demons</property:Card_faction>
		<property:Card_img rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Gargoyle.jpg</property:Card_img>
		<property:Card_max_evo_forms rdf:resource="&wiki;4"/>
		<property:Card_max_img rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Gargoyle4.jpg</property:Card_max_img>
		<property:Card_max_power_cost rdf:datatype="http://www.w3.org/2001/XMLSchema#double">12</property:Card_max_power_cost>
		<property:Card_max_rarity rdf:datatype="http://www.w3.org/2001/XMLSchema#string">High Normal</property:Card_max_rarity>
		<property:Card_max_sells_for rdf:resource="&wiki;2250"/>
		<property:Card_max_stars rdf:resource="&wiki;2"/>
		<property:Card_name rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Gargoyle</property:Card_name>
		<property:Card_power_cost rdf:datatype="http://www.w3.org/2001/XMLSchema#double">12</property:Card_power_cost>
		<property:Card_rarity rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Normal</property:Card_rarity>
		<property:Card_released rdf:datatype="http://www.w3.org/2001/XMLSchema#boolean">true</property:Card_released>
		<property:Card_sells_for rdf:datatype="http://www.w3.org/2001/XMLSchema#double">750</property:Card_sells_for>
		<property:Card_stars rdf:datatype="http://www.w3.org/2001/XMLSchema#double">1</property:Card_stars>
		<property:Card_story rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Hey, did you notice that statue? I think it just moved. What, you think I'm kidding? No, I'm not tired from the battle that we just fought. -Tired soldier</property:Card_story>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_maxatk"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_maxdef"/>
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
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_legend_card_pack"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_quest_card"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_realm_booster_box"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_silver_coin_card"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_treasure_card"/>
		<swivt:wikiPageModificationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2013-05-23T05:18:16Z</swivt:wikiPageModificationDate>
		<property:Modification_date-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2456435.7210185</property:Modification_date-23aux>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Gargoyle</swivt:wikiPageSortKey>
	</swivt:Subject>
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#creationDate" />
	<owl:Class rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Category-3ADemons_cards" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#page" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiNamespace" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_atk" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_azure_card_pack" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_def" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_faction" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_img" />
	<owl:ObjectProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_evo_forms" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_img" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_power_cost" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_rarity" />
	<owl:ObjectProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_sells_for" />
	<owl:ObjectProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_stars" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_name" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_power_cost" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_rarity" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_released" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_sells_for" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_stars" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_story" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#specialProperty_ERRP" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageModificationDate" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AModification_date-23aux" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageSortKey" />
	<!-- Created by Semantic MediaWiki, http://semantic-mediawiki.org/ -->
</rdf:RDF>