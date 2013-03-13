<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-13 05:55:54 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Users/teamx/workspace/pkohana/system/classes/Kohana/Cookie.php:67
2013-03-13 05:55:54 --- DEBUG: #0 /Users/teamx/workspace/pkohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('__utma', NULL)
#1 /Users/teamx/workspace/pkohana/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('__utma')
#2 /Users/teamx/workspace/pkohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/teamx/workspace/pkohana/system/classes/Kohana/Cookie.php:67
2013-03-13 05:56:03 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Users/teamx/workspace/pkohana/system/classes/Kohana/Cookie.php:67
2013-03-13 05:56:03 --- DEBUG: #0 /Users/teamx/workspace/pkohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('__utma', NULL)
#1 /Users/teamx/workspace/pkohana/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('__utma')
#2 /Users/teamx/workspace/pkohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/teamx/workspace/pkohana/system/classes/Kohana/Cookie.php:67
2013-03-13 05:56:03 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Users/teamx/workspace/pkohana/system/classes/Kohana/Cookie.php:67
2013-03-13 05:56:03 --- DEBUG: #0 /Users/teamx/workspace/pkohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('__utma', NULL)
#1 /Users/teamx/workspace/pkohana/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('__utma')
#2 /Users/teamx/workspace/pkohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/teamx/workspace/pkohana/system/classes/Kohana/Cookie.php:67
2013-03-13 05:56:21 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Users/teamx/workspace/pkohana/system/classes/Kohana/Cookie.php:67
2013-03-13 05:56:21 --- DEBUG: #0 /Users/teamx/workspace/pkohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('__utma', NULL)
#1 /Users/teamx/workspace/pkohana/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('__utma')
#2 /Users/teamx/workspace/pkohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/teamx/workspace/pkohana/system/classes/Kohana/Cookie.php:67
2013-03-13 06:08:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/teamx/workspace/pkohana/system/classes/Kohana/View.php:137
2013-03-13 06:08:46 --- DEBUG: #0 /Users/teamx/workspace/pkohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('site')
#1 /Users/teamx/workspace/pkohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('site', NULL)
#2 /Users/teamx/workspace/pkohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('site')
#3 /Users/teamx/workspace/pkohana/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/teamx/workspace/pkohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hello))
#6 /Users/teamx/workspace/pkohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/teamx/workspace/pkohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/teamx/workspace/pkohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/teamx/workspace/pkohana/system/classes/Kohana/View.php:137