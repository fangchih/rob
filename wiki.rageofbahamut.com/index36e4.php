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

	<owl:Ontology rdf:about="http://wiki.rageofbahamut.com/Special:ExportRDF/Greatblossom_Treant">
		<swivt:creationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2016-08-16T03:44:58-04:00</swivt:creationDate>
		<owl:imports rdf:resource="http://semantic-mediawiki.org/swivt/1.0"/>
	</owl:Ontology>
	<swivt:Subject rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Greatblossom_Treant">
		<rdf:type rdf:resource="&wiki;Category-3ADemons_cards"/>
		<rdfs:label>Greatblossom Treant</rdfs:label>
		<swivt:page rdf:resource="http://wiki.rageofbahamut.com/Greatblossom_Treant"/>
		<rdfs:isDefinedBy rdf:resource="http://wiki.rageofbahamut.com/Special:ExportRDF/Greatblossom_Treant"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<property:Card_atk rdf:datatype="http://www.w3.org/2001/XMLSchema#double">3600</property:Card_atk>
		<property:Card_azure_card_pack rdf:datatype="http://www.w3.org/2001/XMLSchema#boolean">false</property:Card_azure_card_pack>
		<property:Card_def rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2680</property:Card_def>
		<property:Card_effect rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Big boost to man/demons ATK  (10 %)</property:Card_effect>
		<property:Card_faction rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Demons</property:Card_faction>
		<property:Card_img rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Greatblossom Treant1.jpg</property:Card_img>
		<property:Card_legend_card_pack rdf:datatype="http://www.w3.org/2001/XMLSchema#boolean">false</property:Card_legend_card_pack>
		<property:Card_max_effect rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Big boost to man/demons ATK  (10 %)</property:Card_max_effect>
		<property:Card_max_evo_forms rdf:resource="&wiki;4"/>
		<property:Card_max_img rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Greatblossom Treant4.jpg</property:Card_max_img>
		<property:Card_max_power_cost rdf:datatype="http://www.w3.org/2001/XMLSchema#double">26</property:Card_max_power_cost>
		<property:Card_max_rarity rdf:datatype="http://www.w3.org/2001/XMLSchema#string">S Rare</property:Card_max_rarity>
		<property:Card_max_skill rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Encroaching Bloom</property:Card_max_skill>
		<property:Card_max_stars rdf:resource="&wiki;5"/>
		<property:Card_max_trait rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Willpower</property:Card_max_trait>
		<property:Card_name rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Greatblossom Treant</property:Card_name>
		<property:Card_power_cost rdf:datatype="http://www.w3.org/2001/XMLSchema#double">26</property:Card_power_cost>
		<property:Card_rarity rdf:datatype="http://www.w3.org/2001/XMLSchema#string">High Rare</property:Card_rarity>
		<property:Card_released rdf:datatype="http://www.w3.org/2001/XMLSchema#boolean">true</property:Card_released>
		<property:Card_skill rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Encroaching Bloom</property:Card_skill>
		<property:Card_stars rdf:datatype="http://www.w3.org/2001/XMLSchema#double">4</property:Card_stars>
		<property:Card_story rdf:datatype="http://www.w3.org/2001/XMLSchema#string">We were admiring these gorgeous cherry blossoms, when suddenly we heard growls. Turns out we were under attack... from the cherry trees!</property:Card_story>
		<property:Card_trait rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Willpower</property:Card_trait>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_maxatk"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_maxdef"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_event_skill"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_event_effect"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_event_skill"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_event_effect"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_trait_skill"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_trait_effect"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_trait_skill"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_trait_effect"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_sells_for"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_sells_for"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_referral_card"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_event_card"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_friendship_card_pack"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_quest_card"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_realm_booster_box"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_silver_coin_card"/>
		<swivt:specialProperty_ERRP rdf:resource="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_treasure_card"/>
		<swivt:wikiPageModificationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2015-09-05T06:48:45Z</swivt:wikiPageModificationDate>
		<property:Modification_date-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2457270.7838542</property:Modification_date-23aux>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Greatblossom Treant</swivt:wikiPageSortKey>
	</swivt:Subject>
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#creationDate" />
	<owl:Class rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Category-3ADemons_cards" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#page" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiNamespace" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_atk" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_azure_card_pack" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_def" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_effect" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_faction" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_img" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_legend_card_pack" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_effect" />
	<owl:ObjectProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_evo_forms" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_img" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_power_cost" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_rarity" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_skill" />
	<owl:ObjectProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_stars" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_max_trait" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_name" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_power_cost" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_rarity" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_released" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_skill" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_stars" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_story" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3ACard_trait" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#specialProperty_ERRP" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageModificationDate" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AModification_date-23aux" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageSortKey" />
	<!-- Created by Semantic MediaWiki, http://semantic-mediawiki.org/ -->
</rdf:RDF>