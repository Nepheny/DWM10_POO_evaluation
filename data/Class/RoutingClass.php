<?php
    class RoutingClass
    {
        static function route($templatesAndData)
        {
            PageClass::displayPage($templatesAndData);
        }
    }