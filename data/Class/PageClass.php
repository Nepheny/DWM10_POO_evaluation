<?php
    class PageClass
    {
        static function displayPage($templatesAndData)
        {
            $htmldisplay = "";
            
            foreach ($templatesAndData['templates'] as $value) {
                $htmldisplay .= TemplateClass::displayTemplate($value, $templatesAndData['data']);
            }

            echo $htmldisplay;
        }
    }