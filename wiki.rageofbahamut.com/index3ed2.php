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

	<owl:Ontology rdf:about="http://wiki.rageofbahamut.com/Special:ExportRDF/Altered_Past">
		<swivt:creationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2016-08-16T05:39:35-04:00</swivt:creationDate>
		<owl:imports rdf:resource="http://semantic-mediawiki.org/swivt/1.0"/>
	</owl:Ontology>
	<swivt:Subject rdf:about="http://wiki.rageofbahamut.com/Special:URIResolver/Altered_Past">
		<rdf:type rdf:resource="&wiki;Category-3AEvents"/>
		<rdfs:label>Altered Past</rdfs:label>
		<swivt:page rdf:resource="http://wiki.rageofbahamut.com/Altered_Past"/>
		<rdfs:isDefinedBy rdf:resource="http://wiki.rageofbahamut.com/Special:ExportRDF/Altered_Past"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<property:Event_end rdf:datatype="http://www.w3.org/2001/XMLSchema#date">2015-03-13Z</property:Event_end>
		<property:Event_end-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2457094.5</property:Event_end-23aux>
		<property:Event_img rdf:datatype="http://www.w3.org/2001/XMLSchema#string">AlteredPastBanner.jpg</property:Event_img>
		<property:Event_in_process rdf:resource="&wiki;No"/>
		<property:Event_name rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Altered Past</property:Event_name>
		<property:Event_next_in_line rdf:datatype="http://www.w3.org/2001/XMLSchema#boolean">false</property:Event_next_in_line>
		<property:Event_rewarded rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2015-03-27T17:02:50Z</property:Event_rewarded>
		<property:Event_rewarded-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2457109.2103009</property:Event_rewarded-23aux>
		<property:Event_start rdf:datatype="http://www.w3.org/2001/XMLSchema#date">2015-03-06Z</property:Event_start>
		<property:Event_start-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2457087.5</property:Event_start-23aux>
		<property:Event_summary rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Altered Past</property:Event_summary>
		<property:Event_type rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Quest/Encounters/1v1/Brigades</property:Event_type>
		<swivt:wikiPageModificationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2015-03-15T13:47:10Z</swivt:wikiPageModificationDate>
		<property:Modification_date-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2457097.0744213</property:Modification_date-23aux>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Altered Past</swivt:wikiPageSortKey>
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