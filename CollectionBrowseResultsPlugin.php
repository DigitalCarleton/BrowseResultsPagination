<?php
/**
 * CollectionsBrowseResults
 * 
 * @copyright Copyright 2018 Eric C. Weig 
 * @license http://opensource.org/licenses/MIT MIT
 */

/**
 * The CollectionsBrowseResults plugin.
 * 
 * @package Omeka\Plugins\CollectionsBrowseResults
 */

class CollectionsBrowseResultsPlugin extends Omeka_Plugin_AbstractPlugin
    {

protected $_filters = array(
    'collections_browse_per_page',
);

public function filterCollectionsBrowsePerPage($perPage, $args)
{
    $totalrecs = total_records('Collection');
    return $totalrecs;
}

}
