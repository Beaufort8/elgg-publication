<?php
/**
 * @package Elgg
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Roger Curry, Grid Research Centre [curry@cpsc.ucalgary.ca]
 * @author Tingxi Tan, Grid Research Centre [txtan@cpsc.ucalgary.ca]
 * @link http://grc.ucalgary.ca/
 */

$page_owner_entity = elgg_get_page_owner_entity();
if (!($page_owner_entity instanceof ElggUser)) {
	forward(REFERER);
}

$title = elgg_echo('publication:user:author', [$page_owner_entity->name]);

elgg_register_title_button();

if (publications_bibtex_enabled()) {
// 	elgg_register_menu_item('title', [
// 		'name' => 'bibtex_export',
// 		'text' => elgg_echo('publication:export'),
// 		'href' => 'action/publications/export?type=user&user_guid=' . $page_owner_entity->getGUID(),
// 		'is_action' => true,
// 		'class' => 'elgg-button elgg-button-action',
// 		'confirm' => elgg_echo('publication:export:confirm:user', [$page_owner_entity->name])
// 	]);
}

elgg_push_breadcrumb($page_owner_entity->name);

$options = [
	'type' => 'object',
	'subtype' => Publication::SUBTYPE,
	'relationship' => 'author',
	'relationship_guid' => $page_owner_entity->getGUID(),
	'inverse_relationship' => true,
	'full_view' => false,
	'no_results' => elgg_echo('notfound'),
];

$listing = elgg_list_entities_from_relationship($options);

// build page
$page_data = elgg_view_layout('content', [
	'title' => $title,
	'content' => $listing,
	'filter_context' => 'author',
]);

// display the page
echo elgg_view_page($title, $page_data);
