<?php

namespace Leantime\Plugins\PluginTemplate\Repositories;

use Illuminate\Contracts\Container\BindingResolutionException;
use \Leantime\Core\Db;

class PluginTemplateRepository
{
    private Db $db;

    /**
     * @throws BindingResolutionException
     */
    public function __construct()
    {
        // Get DB Instance
        $this->db = app()->make(Db::class);
    }

    // Repo methods here.
}

