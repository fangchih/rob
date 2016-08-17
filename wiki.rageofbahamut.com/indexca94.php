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

	<owl:Ontology rdf:about="http://wiki.rageofbahamut.com/Special:ExportRDF/G%C3%B6tterd%C3%A4mmerung">
		<swivt:creationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2016-08-16T07:36:37-04:00</swivt:creationDate>
		<owl:imports rdf:resource="http://semantic-mediawiki.org/swivt/1.0"/>
	</owl:Ontology>
	<swivt:Subject rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/G-C3-B6tterd-C3-A4mmerung">
		<rdf:type rdf:resource="&wiki;Category-3AEvents"/>
		<rdfs:label>Götterdämmerung</rdfs:label>
		<swivt:page rdf:resource="http://wiki.rageofbahamut.com/G%C3%B6tterd%C3%A4mmerung"/>
		<rdfs:isDefinedBy rdf:resource="http://wiki.rageofbahamut.com/Special:ExportRDF/G%C3%B6tterd%C3%A4mmerung"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<property:Event_end rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2013-04-07T22:00:00Z</property:Event_end>
		<property:Event_end-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2456390.4166667</property:Event_end-23aux>
		<property:Event_img rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Gotterdammerung1.jpg</property:Event_img>
		<property:Event_in_process rdf:resource="&wiki;No"/>
		<property:Event_name rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Götterdämmerung</property:Event_name>
		<property:Event_next_in_line rdf:datatype="http://www.w3.org/2001/XMLSchema#boolean">false</property:Event_next_in_line>
		<property:Event_rewarded rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2015-03-27T17:00:50Z</property:Event_rewarded>
		<property:Event_rewarded-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2457109.208912</property:Event_rewarded-23aux>
		<property:Event_start rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2013-03-21T21:00:00Z</property:Event_start>
		<property:Event_start-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2456373.375</property:Event_start-23aux>
		<property:Event_summary rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Defeat the mad Odin!</property:Event_summary>
		<property:Event_type rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Quest (CW, Boss Battles)</property:Event_type>
		<swivt:wikiPageModificationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2013-04-24T10:14:02Z</swivt:wikiPageModificationDate>
		<property:Modification_date-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2456406.926412</property:Modification_date-23aux>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Götterdämmerung</swivt:wikiPageSortKey>
	</swivt:Subject>
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#creationDate" />
	<owl:Class rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Category-3AEvents" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#page" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiNamespace" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AEvent_end" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AEvent_end-23aux" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AEvent_img" />
	<owl:ObjectProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AEvent_in_process" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AEvent_name" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AEvent_next_in_line" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AEvent_rewarded" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AEvent_rewarded-23aux" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AEvent_start" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AEvent_start-23aux" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AEvent_summary" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AEvent_type" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageModificationDate" />
	<owl:DatatypeProperty rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Property-3AModification_date-23aux" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageSortKey" />
	<!-- Created by Semantic MediaWiki, http://semantic-mediawiki.org/ -->
</rdf:RDF>