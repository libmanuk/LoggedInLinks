<?php
/**
 * LoggedInLinks
 * 
 * @copyright Copyright 2018 Eric C. Weig 
 * @license http://opensource.org/licenses/MIT MIT
 */

/**
 * The LoggedInLinks plugin.
 * 
 * @package Omeka\Plugins\LoggedInLinks
 */
 
    class LoggedInLinksPlugin extends Omeka_Plugin_AbstractPlugin
    {
    
    // Define Hooks

    protected $_hooks = array(
        'install',
        'uninstall',
	'public_collections_show',
        'public_items_show'
	);
	
    public function hookInstall()
    {
        
    }
    
    public function hookUninstall()
    {
    
    }

    public function hookPublicItemsShow()
    {
        echo "<!-- start show link to admin side item edit in admin-bar nav -->\n";
        $id =  metadata('item', 'id');
        echo "<script type=\"text/javascript\">\n";
        echo "$(document).ready(function(){\n";
        echo "  addLink3();\n";
        echo "});\n";
        echo "function addLink3(){\n";
        echo "  var html = \"<li class='nav-item'><a href='/admin/items/edit/$id'>Edit Interview</li>\";\n";
        echo "  $('#admin-bar .navigation').addClass('imageclass').append(html);\n";
        echo "}\n";
        echo "</script>\n";
        echo "<!-- end show link to admin side item edit in admin-bar nav -->\n";
    }    
	
    public function hookPublicCollectionsShow()
    {
        echo "<!-- start show link to admin side collection edit in admin-bar nav -->\n";
        $id =  metadata('collection', 'id');
        echo "<script type=\"text/javascript\">\n";
        echo "$(document).ready(function(){\n";
        echo "  addLink3();\n";
        echo "});\n";
        echo "function addLink3(){\n";
        echo "  var html = \"<li class='nav-item'><a href='/admin/collections/edit/$id'>Edit Project</li>\";\n";
        echo "  $('#admin-bar .navigation').addClass('imageclass').append(html);\n";
        echo "}\n";
        echo "</script>\n";
        echo "<!-- end show link to admin side collection edit in admin-bar nav -->\n";
    }
       
}

