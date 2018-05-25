<?php
    class TemplateClass
    {
        static function displayTemplate($templateName, $data)
        {
            $template = file_get_contents("./templates/$templateName.html");

            foreach($data as $key => $value) {
                $template = str_replace("%$key%", $value, $template);
            }

            return $template;
        }
    }