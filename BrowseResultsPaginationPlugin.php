<?php
/**
 * BrowseResultsPagination
 * 
 * @copyright Copyright 2018 Eric C. Weig 
 * @license http://opensource.org/licenses/MIT MIT
 *
 * Modified by Digital Carleton 2022
 */

/**
 * The BrowseResultsPagination plugin.
 * 
 * @package Omeka\Plugins\BrowseResultsPagination
 */

class BrowseResultsPaginationPlugin extends Omeka_Plugin_AbstractPlugin
    {

protected $_filters = array(
    'collections_browse_per_page',
    'items_browse_per_page',
);

public function filterCollectionsBrowsePerPage($perPage, $args)
{
    $totalrecs = total_records('Collection');
    return $totalrecs;
}

public function filterItemsBrowsePerPage($perPage, $args) 
{
    $totalrecs = total_records('Items');
    return $totalrecs;
}    
    
}
