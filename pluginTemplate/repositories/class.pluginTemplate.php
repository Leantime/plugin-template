<?php

namespace leantime\plugins\repositories {


    class pluginTemplate
    {

        private core\db $db;

        public function __construct()
        {

            $this->db = core\db::getInstance();

        }

        //Repo methods here.
        //Use fetchMode class  to fetch as model.
        //Example: $stmn->setFetchMode(PDO::FETCH_CLASS, "leantime\plugins\models\pluginTemplate\pluginTemplateModel");
    }

}
