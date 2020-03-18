<?php
    //function permettant de gerer les titres de l'application
    if(! function_exists('page_title'))
        {
            function page_title($title)
                {
                    $base_title = 'Laracarte';
                    if($title == '')
                        {
                            return $base_title;
                        }
                        else
                        {
                            return $title.' - '.$base_title;
                        }
                }
        }
    //function permettant de gerer les routes ou menu active de l'application
    if(! function_exists('set_active_route'))
        {
            function set_active_route($route)
                {
                    return Route::is($route)? 'active' : '';
                }
        }
    




?>