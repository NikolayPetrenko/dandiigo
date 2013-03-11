<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-05 02:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:11:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: subject ~ APPPATH/views/classes/view.php [ 6 ]
2013-03-05 02:11:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: subject ~ APPPATH/views/classes/view.php [ 6 ]
--
#0 /var/www/dandiigo/application/views/classes/view.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/dandii...', 6, Array)
#1 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#2 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#3 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/dandiigo/application/views/layouts/main.php(24): Kohana_View->__toString()
#5 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#6 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#7 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/dandiigo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/dandiigo/application/classes/my/layout.php(87): Kohana_Response->body(Object(View))
#10 /var/www/dandiigo/application/classes/controller/classes.php(17): My_Layout->render()
#11 [internal function]: Controller_Classes->action_view()
#12 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Classes))
#13 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#16 {main}
2013-03-05 02:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:19:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: subject ~ APPPATH/views/classes/view.php [ 6 ]
2013-03-05 02:19:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: subject ~ APPPATH/views/classes/view.php [ 6 ]
--
#0 /var/www/dandiigo/application/views/classes/view.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/dandii...', 6, Array)
#1 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#2 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#3 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/dandiigo/application/views/layouts/main.php(24): Kohana_View->__toString()
#5 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#6 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#7 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/dandiigo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/dandiigo/application/classes/my/layout.php(87): Kohana_Response->body(Object(View))
#10 /var/www/dandiigo/application/classes/controller/classes.php(17): My_Layout->render()
#11 [internal function]: Controller_Classes->action_view()
#12 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Classes))
#13 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#16 {main}
2013-03-05 02:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:38:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:38:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:48:37 --- ERROR: Kohana_Exception [ 0 ]: The class_id property does not exist in the Model_Class_Template class ~ MODPATH/orm/classes/kohana/orm.php [ 692 ]
2013-03-05 02:48:37 --- STRACE: Kohana_Exception [ 0 ]: The class_id property does not exist in the Model_Class_Template class ~ MODPATH/orm/classes/kohana/orm.php [ 692 ]
--
#0 /var/www/dandiigo/modules/orm/classes/kohana/orm.php(643): Kohana_ORM->set('class_id', '88')
#1 /var/www/dandiigo/application/classes/controller/classes.php(58): Kohana_ORM->__set('class_id', '88')
#2 [internal function]: Controller_Classes->action_change_teacher()
#3 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Classes))
#4 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-05 02:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 02:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 02:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:13:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:13:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:13:56 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 897 ]
2013-03-05 03:13:56 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 897 ]
--
#0 /var/www/dandiigo/application/views/academicrecords/recordsList.php(20): Kohana_ORM->find()
#1 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#2 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#3 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/dandiigo/application/views/layouts/main.php(24): Kohana_View->__toString()
#5 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#6 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#7 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/dandiigo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/dandiigo/application/classes/my/layout.php(87): Kohana_Response->body(Object(View))
#10 /var/www/dandiigo/application/classes/controller/academicrecords.php(27): My_Layout->render()
#11 [internal function]: Controller_Academicrecords->action_list()
#12 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Academicrecords))
#13 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#16 {main}
2013-03-05 03:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:15:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:15:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:15:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:15:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:16:46 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 897 ]
2013-03-05 03:16:46 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 897 ]
--
#0 /var/www/dandiigo/application/views/academicrecords/recordsList.php(20): Kohana_ORM->find()
#1 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#2 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#3 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/dandiigo/application/views/layouts/main.php(24): Kohana_View->__toString()
#5 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#6 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#7 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/dandiigo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/dandiigo/application/classes/my/layout.php(87): Kohana_Response->body(Object(View))
#10 /var/www/dandiigo/application/classes/controller/academicrecords.php(27): My_Layout->render()
#11 [internal function]: Controller_Academicrecords->action_list()
#12 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Academicrecords))
#13 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#16 {main}
2013-03-05 03:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:23:20 --- ERROR: Kohana_Exception [ 0 ]: The teacher_id property does not exist in the Model_Year_Subject class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2013-03-05 03:23:20 --- STRACE: Kohana_Exception [ 0 ]: The teacher_id property does not exist in the Model_Year_Subject class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/dandiigo/application/views/academicrecords/recordsList.php(172): Kohana_ORM->__get('teacher_id')
#1 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#2 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#3 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/dandiigo/application/views/layouts/main.php(24): Kohana_View->__toString()
#5 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#6 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#7 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/dandiigo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/dandiigo/application/classes/my/layout.php(87): Kohana_Response->body(Object(View))
#10 /var/www/dandiigo/application/classes/controller/academicrecords.php(27): My_Layout->render()
#11 [internal function]: Controller_Academicrecords->action_list()
#12 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Academicrecords))
#13 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#16 {main}
2013-03-05 03:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:28:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:28:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:28:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:28:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:28:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:28:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:28:36 --- ERROR: Kohana_Exception [ 0 ]: The teacher_id property does not exist in the Model_Year_Subject class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2013-03-05 03:28:36 --- STRACE: Kohana_Exception [ 0 ]: The teacher_id property does not exist in the Model_Year_Subject class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/dandiigo/application/views/academicrecords/recordsList.php(87): Kohana_ORM->__get('teacher_id')
#1 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#2 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#3 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/dandiigo/application/views/layouts/main.php(24): Kohana_View->__toString()
#5 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#6 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#7 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/dandiigo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/dandiigo/application/classes/my/layout.php(87): Kohana_Response->body(Object(View))
#10 /var/www/dandiigo/application/classes/controller/academicrecords.php(27): My_Layout->render()
#11 [internal function]: Controller_Academicrecords->action_list()
#12 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Academicrecords))
#13 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#16 {main}
2013-03-05 03:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:29:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/academicrecords/recordsList.php [ 87 ]
2013-03-05 03:29:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/academicrecords/recordsList.php [ 87 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-05 03:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:30:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:30:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 03:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 03:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:17:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:17:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:17:48 --- ERROR: ErrorException [ 2 ]: Missing argument 7 for Model_Record_Academic::getTotal(), called in /var/www/dandiigo/application/views/academicrecords/recordsList.php on line 116 and defined ~ APPPATH/classes/model/record/academic.php [ 125 ]
2013-03-05 05:17:48 --- STRACE: ErrorException [ 2 ]: Missing argument 7 for Model_Record_Academic::getTotal(), called in /var/www/dandiigo/application/views/academicrecords/recordsList.php on line 116 and defined ~ APPPATH/classes/model/record/academic.php [ 125 ]
--
#0 /var/www/dandiigo/application/classes/model/record/academic.php(125): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/dandii...', 125, Array)
#1 /var/www/dandiigo/application/views/academicrecords/recordsList.php(116): Model_Record_Academic::getTotal('83', '2', '2A', '0', 100, Object(Model_User))
#2 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#3 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#4 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/dandiigo/application/views/layouts/main.php(24): Kohana_View->__toString()
#6 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#7 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#8 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /var/www/dandiigo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#10 /var/www/dandiigo/application/classes/my/layout.php(87): Kohana_Response->body(Object(View))
#11 /var/www/dandiigo/application/classes/controller/academicrecords.php(27): My_Layout->render()
#12 [internal function]: Controller_Academicrecords->action_list()
#13 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Academicrecords))
#14 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#17 {main}
2013-03-05 05:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:22:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:22:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 05:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 05:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 06:04:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 06:04:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 06:04:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 06:04:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 06:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 06:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 06:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 06:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 06:41:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 06:41:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 07:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 07:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 07:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 07:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 07:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 07:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 07:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-05 07:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}