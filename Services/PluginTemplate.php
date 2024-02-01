<?php

namespace Leantime\Plugins\PluginTemplate\Services;

use Leantime\Plugins\PluginTemplate\Repositories\PluginTemplateRepository;

class PluginTemplate
{
    private PluginTemplateRepository $pluginTemplateRepos;

    public function __construct()
    {
        $this->pluginTemplateRepos = new PluginTemplateRepository();
    }

    public function install(): void
    {
        // Repo call to create tables.
    }

    public function uninstall(): void
    {
        // Remove tables
    }
}
