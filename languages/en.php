<?php
/**
 * @package Elgg
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Roger Curry, Grid Research Centre [curry@cpsc.ucalgary.ca]
 * @author Tingxi Tan, Grid Research Centre [txtan@cpsc.ucalgary.ca]
 * @link http://grc.ucalgary.ca/
 */

return [

	'publications' => "Publications",
	'item:object:publication' => 'Publications',
	'river:create:object:publication' => "%s wrote a new publication titled %s",
	'river:update:object:publication' => "%s updated a publication titled %s",
	
	// settings
	'publications:settings:enable_bibtex' => "Enable BibTeX import and export features",
	'publications:settings:bibtex_import_behaviour' => "How to handle duplicate entries during BibTeX import",
	'publications:settings:bibtex_import_behaviour:skip' => "Skip entry",
	'publications:settings:bibtex_import_behaviour:update' => "Update information",
	'publications:settings:bibtex_import_behaviour:user_skip' => "User can choose (default: skip)",
	'publications:settings:bibtex_import_behaviour:user_update' => "User can choose (default: update)",
	'publications:settings:bibtex_import_duplicates' => "Limit duplicate handling during BibTeX import to owned publications",
	
	// forms
	'publications:forms:required' => "*",
	'publications:forms:required:hint' => "* required fields",
	'publications:forms:required:alert' => "Please fill out all required fields.",
	'publications:forms:partial_required:alert' => "Please provide eighter an author or editor.",
	'publications:details:attachment:download' => "Click to download attachment",
	
	'publication:forms:authors' => "Authors",
	'publications:form:author:input:info' => "Type in the first letters of the author's name and select the suggested author from the dropdown list or simply add a new one. Hit enter to add the author of your publication.",
	
	'publications:add' => "Add a publication",

	// types
	'publications:type:article' => "Article in a journal/review",
	'publications:type:book' => "Book",
	'publications:type:booklet' => "Booklet",
	'publications:type:conference' => "Article in conference",
	'publications:type:inbook' => "Article in a book",
	'publications:type:incollection' => "A book in a collection",
	'publications:type:inproceedings' => "Article in conference",
	'publications:type:manual' => "Technical documentation",
	'publications:type:mastersthesis' => "Master's thesis",
	'publications:type:phdthesis' => "Ph.D. thesis",
	'publications:type:proceedings' => "Proceedings of a conference",
	'publications:type:techreport' => "Report published by a school or other institution",
	'publications:type:unpublished' => "A document not formally published",
	
	// old keys
	'publication:keywords' => "Keywords",
	'publication:keywords:instruction' => "",
	'publication:authors' => "Authors",
	'publication:attachment' => 'Attach File',
	'publication:attachment:instruction' => 'Click on any file to attach it to your publication',
	'publication:attachment:title' => 'File Attachment',
	'publication:type'=>'Type',
	'publication:inviteinfomsg' => "<b>%s</b> is not a registered user.<br/>Send an invitation to <b>%s</b> to join our Community.",
	'publication:invitemsg'=> "Hi %s,

I have included you as an author on a publication titled: '%s' on our Portal. I invite you to register for our Community.

%s

",
	'publication:additionalmsg' => "\"[Text about your community]\"",
	'publication:volume' => "Volume",
	'publication:number' => "Volume no.",
	'publication:month'=> "Month",
	'publication:page_from' => "Page from",
	'publication:page_to' => "Page to",
	'publication:year' => "Year",
	'publication:booktitle' => "Title of book",
	'publication:book_editors' => "Book editors",
	'publication:journaltitle' => "Title of journal/review",
	'publication:publisher' => "Publishing company",
	'publication:publish_location' => "Place of publication",
	'publication:school' => "School",
	'publication:institution' => "Institution",
	'publication:series' => "Series",
	'publication:organization' => "Organization",
	'publication:institution' => "Institution",
	'publication:edition' => "Edition",
	'publication:user' => "%s's created publications",
	'publication:user:author' => "%s's authored publications",
	'publication:friends' => "Friends' publications",
	'publication:modify' => 'External Authors Invititation: ',
	'publication:doi' => 'DOI',
	'publication:url' => 'URL',
	
	'publication:everyone' => "All site publications",
	'publication:export' => "Export to BibTeX file",
	'publication:export:confirm:all' => "Do you want to export all publications as a BibTeX file?",
	'publication:export:confirm:user' => "Do you want to export all %s's publications as a BibTeX file?",
	'publication:export:confirm:single' => "Do you want to export this publication as a BibTeX file?",
	'publication:import' => "Import BibTeX file",
	'publication:bibtex' => 'BibTeX file',
	'publication:bibtex:update' => 'Use the BibTeX file to overwrite your existing publications.',
	'publication:bibtex:skip:description' => 'Publications are matched on Title, if no match is found a new one will be created. Matched publications will be skipped.',
	'publication:bibtex:update:description' => 'Publications are matched on Title, if no match is found a new one will be created. Matched publications will be updated with the information from the BibTeX file.',
	'publication:bibtex:user_update:description' => 'The data in the BibTeX file will be compared with the titles of your publications already listed. If no match can be found, a new publication will be created. <br />If the box is not checked, matching titles will not be imported.',
	'publication:bibtex:description' => 'Here you can upload a BibTeX file in order to import your publication list to %s.',
	'publication:edit' => "Edit a publication",
	'publication:abstract' => "Abstract",
	'publication:details' => "Details",
	'publication:bibtex:fileerror' => 'BibTeX file not found',
	'publication:bibtex:blank' => 'BibTeX file has no entries',
	'publication:enablepublication' => 'Enable group publication',
	'publication:group' => 'Group publications',
	'publication:river:posted' => "%s posted",
	'publications:widget' => "Publications",
	'publications:widget:description' => "Add a list of publications to your profile",
	'publication:posted' => "Your publication was successfully posted.",
	'publication:deleted' => "Your publication was successfully deleted.",
	'publication:error' => 'Something went wrong. Please try again.',
	'publication:blank' => "Sorry; you need to fill in both the title and body before you can post this publication.",
	'publication:blankdefault' => "Please fill in all required fields.",
	'publication:type_not_supported' => "The chosen publication type is not supported",
	'publication:notdeleted' => "Sorry; we could not delete this publication.",
	'publications:seeall' => "See all publications from",
	
	'publication:error:bibtext:enabled' => "BibTeX support is not enabled, the feature you're trying to use is not allowed.",
	
	// notifications
	'publication:notification:create:subject' => "A new publication \"%s\" was created",
	'publication:notification:create:summary' => "New publication \"%s\"",
	'publication:notification:create:body' => "Hi,

%s created a new publication \"%s\".

To view the publication click the link:
%s",
	
	'publication:import:forward' => "After uploading go to the edit page",
	'publication:import:forward:description' => "Only works if a single publication was imported",
	
	'publication:action:import:error:none' => "No publications were imported",
	'publication:action:import:success:single' => "One publication was imported",
	'publication:action:import:success:multiple_duplicates' => "Not all publications could be imported. Some publications are already on %s.",
	'publication:action:import:success:multiple' => "Publications were imported",
	'publication:action:import:success:duplicates' => "No publications were imported",
	'publication:action:import:error:missingtitle' => "%s publication(s) could not be imported due to missing title phrase.",
];
