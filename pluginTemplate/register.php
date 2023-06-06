<?php

//Listen to events

function pluginTemplateListener(){
    //Do stuff
    //Call service
}

//Register event listener
\leantime\core\events::add_event_listener("core.template.tpl.pageparts.header.afterLinkTags", 'pluginTemplateListener');

function pluginTemplateFilter($payload, $params){

    //payload is the filterable payload (array)
    //$params contains additional values as needed

    //Do stuff
    //Call service

    return $payload;
}

//Register event listener
\leantime\core\events::add_filter_listener("filterListenerName", 'pluginTemplateFilter');


//Example add menu point


function addExampleMenuItem($menuStructure)
{
    $menuStructure['default'][10]['submenu'][] = ['type' => 'item', 'module' => 'pluginTemplate', 'title' => 'Plugin Template', 'icon' => 'fa fa-fw fa-cogs', 'tooltip' => 'Plugin Template', 'href' => '/pluginTemplate/settings', 'active' => ['settings']];
    return $menuStructure;

}

//Register event listener
\leantime\core\events::add_filter_listener("domain.menu.repositories.menu.getMenuStructure.menuStructures", 'addExampleMenuItem');



