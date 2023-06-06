<?php

namespace leantime\plugins\services {

    use leantime\plugins\repositories;

    class pluginTemplate
    {
        private repositories\pluginTemplate $pluginTemplateSvc;

        public function __construct()
        {
            $pluginTemplateSvc = new repositories\pluginTemplate();

        }

        public function install()
        {
            //Repo call to create tables.
            return true;
        }

        public function uninstall()
        {
            //Remove tables
            return true;
        }
    }

}
