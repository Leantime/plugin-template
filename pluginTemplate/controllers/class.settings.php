<?php

namespace leantime\plugins\controllers {

    use leantime\core;
    use leantime\core\controller;
    use leantime\plugins\repositories;

    class settings extends controller
    {
        public function init()
        {
        }

        /**
         * @return void
         */
        public function get()
        {

            $this->tpl->display("pluginTemplate.settings");
        }

        public function post($params)
        {
        }
    }

}
