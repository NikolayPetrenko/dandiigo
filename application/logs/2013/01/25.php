<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-25 00:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL session/registerForStudent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 00:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL session/registerForStudent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resister-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resister-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 00:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 00:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 00:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 00:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:03:48 --- ERROR: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-25 00:03:48 --- STRACE: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/dandiigo/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/index')
#1 /var/www/dandiigo/system/classes/kohana/view.php(30): Kohana_View->__construct('session/index', NULL)
#2 /var/www/dandiigo/application/classes/my/layout.php(53): Kohana_View::factory('session/index')
#3 /var/www/dandiigo/application/classes/controller/session.php(28): My_Layout->view('session/index')
#4 [internal function]: Controller_Session->action_index()
#5 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Session))
#6 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-25 00:03:56 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2013-01-25 00:03:56 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/dandiigo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/dandiigo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/dandiigo/index.php(108): Kohana_Request::factory()
#3 {main}
2013-01-25 00:05:16 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2013-01-25 00:05:16 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/dandiigo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/dandiigo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/dandiigo/index.php(108): Kohana_Request::factory()
#3 {main}
2013-01-25 00:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL session/registerForStudent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 00:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL session/registerForStudent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 00:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 00:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL session/register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 00:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL session/register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:12:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:12:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:12:39 --- ERROR: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-25 00:12:39 --- STRACE: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/dandiigo/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/index')
#1 /var/www/dandiigo/system/classes/kohana/view.php(30): Kohana_View->__construct('session/index', NULL)
#2 /var/www/dandiigo/application/classes/my/layout.php(53): Kohana_View::factory('session/index')
#3 /var/www/dandiigo/application/classes/controller/session.php(28): My_Layout->view('session/index')
#4 [internal function]: Controller_Session->action_index()
#5 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Session))
#6 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-25 00:12:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:12:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:13:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/controller/session.php [ 58 ]
2013-01-25 00:13:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/controller/session.php [ 58 ]
--
#0 /var/www/dandiigo/application/classes/controller/session.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/dandii...', 58, Array)
#1 [internal function]: Controller_Session->action_registerForStudend()
#2 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Session))
#3 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-25 00:13:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:13:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:14:08 --- ERROR: View_Exception [ 0 ]: The requested view session/registerForStudent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-25 00:14:08 --- STRACE: View_Exception [ 0 ]: The requested view session/registerForStudent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/dandiigo/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/registe...')
#1 /var/www/dandiigo/system/classes/kohana/view.php(30): Kohana_View->__construct('session/registe...', NULL)
#2 /var/www/dandiigo/application/classes/my/layout.php(53): Kohana_View::factory('session/registe...')
#3 /var/www/dandiigo/application/classes/controller/session.php(58): My_Layout->view('session/registe...')
#4 [internal function]: Controller_Session->action_registerForStudend()
#5 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Session))
#6 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-25 00:14:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:14:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:16:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 00:16:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:17:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 00:17:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:17:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:17:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:17:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 00:17:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:17:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:17:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:19:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:19:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:19:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:19:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:35:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:35:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:35:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:35:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:35:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:35:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:35:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:35:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:38:47 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Route - assumed 'Route' ~ APPPATH/bootstrap.php [ 138 ]
2013-01-25 00:38:47 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Route - assumed 'Route' ~ APPPATH/bootstrap.php [ 138 ]
--
#0 /var/www/dandiigo/application/bootstrap.php(138): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/dandii...', 138, Array)
#1 /var/www/dandiigo/index.php(102): require('/var/www/dandii...')
#2 {main}
2013-01-25 00:38:48 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Route - assumed 'Route' ~ APPPATH/bootstrap.php [ 138 ]
2013-01-25 00:38:48 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Route - assumed 'Route' ~ APPPATH/bootstrap.php [ 138 ]
--
#0 /var/www/dandiigo/application/bootstrap.php(138): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/dandii...', 138, Array)
#1 /var/www/dandiigo/index.php(102): require('/var/www/dandii...')
#2 {main}
2013-01-25 00:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 00:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 00:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 00:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 00:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/session was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/session was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:05:50 --- ERROR: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-25 01:05:50 --- STRACE: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/dandiigo/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/index')
#1 /var/www/dandiigo/system/classes/kohana/view.php(30): Kohana_View->__construct('session/index', NULL)
#2 /var/www/dandiigo/application/classes/my/layout.php(53): Kohana_View::factory('session/index')
#3 /var/www/dandiigo/application/classes/controller/session.php(28): My_Layout->view('session/index')
#4 [internal function]: Controller_Session->action_index()
#5 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Session))
#6 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-25 01:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:05:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:05:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:29:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:29:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:34:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:34:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL session/register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 01:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL session/register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:35:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:35:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL session/registerstudent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 01:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL session/registerstudent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL registerstudent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL registerstudent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL registerstudent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL registerstudent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL registerstudent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL registerstudent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:48:10 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 15 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2013-01-25 01:48:10 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 15 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/dandii...', 402, Array)
#1 /var/www/dandiigo/system/classes/kohana/route.php(402): preg_match('#^(?:(?P<studen...', 'favicon.ico', NULL)
#2 /var/www/dandiigo/system/classes/kohana/request.php(582): Kohana_Route->matches('favicon.ico')
#3 /var/www/dandiigo/system/classes/kohana/request.php(800): Kohana_Request::process_uri('favicon.ico', Array)
#4 /var/www/dandiigo/system/classes/kohana/request.php(208): Kohana_Request->__construct('/favicon.ico', NULL, Array)
#5 /var/www/dandiigo/index.php(108): Kohana_Request::factory()
#6 {main}
2013-01-25 01:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:48:11 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 15 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2013-01-25 01:48:11 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 15 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/dandii...', 402, Array)
#1 /var/www/dandiigo/system/classes/kohana/route.php(402): preg_match('#^(?:(?P<studen...', 'favicon.ico', NULL)
#2 /var/www/dandiigo/system/classes/kohana/request.php(582): Kohana_Route->matches('favicon.ico')
#3 /var/www/dandiigo/system/classes/kohana/request.php(800): Kohana_Request::process_uri('favicon.ico', Array)
#4 /var/www/dandiigo/system/classes/kohana/request.php(208): Kohana_Request->__construct('/favicon.ico', NULL, Array)
#5 /var/www/dandiigo/index.php(108): Kohana_Request::factory()
#6 {main}
2013-01-25 01:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:52:08 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 8 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2013-01-25 01:52:08 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 8 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/dandii...', 402, Array)
#1 /var/www/dandiigo/system/classes/kohana/route.php(402): preg_match('#^(?:(?P</stude...', 'favicon.ico', NULL)
#2 /var/www/dandiigo/system/classes/kohana/request.php(582): Kohana_Route->matches('favicon.ico')
#3 /var/www/dandiigo/system/classes/kohana/request.php(800): Kohana_Request::process_uri('favicon.ico', Array)
#4 /var/www/dandiigo/system/classes/kohana/request.php(208): Kohana_Request->__construct('/favicon.ico', NULL, Array)
#5 /var/www/dandiigo/index.php(108): Kohana_Request::factory()
#6 {main}
2013-01-25 01:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student_registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student_registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 01:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL session/student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 01:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL session/student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL session/student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 01:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL session/student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL session/student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-25 01:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL session/student-registration was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 01:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/student_registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/student_registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/student_registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/student_registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/student_registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/student_registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/student_registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/student_registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/student_registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session/student_registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 01:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 01:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: student-registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: student-registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: student-registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: student-registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: student-registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: student-registration ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-25 02:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register-student was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-25 02:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 02:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 02:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:15:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:15:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:30:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:30:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 03:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 03:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 05:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 05:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 05:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 05:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 05:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 05:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 05:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 05:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 05:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 05:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 06:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 06:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 06:17:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 06:17:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 06:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 06:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 06:26:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 06:26:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 06:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 06:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 06:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 06:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 06:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 06:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 06:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 06:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 06:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 06:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 06:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 06:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 06:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 06:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 06:28:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: arr ~ APPPATH/classes/helper/main.php [ 16 ]
2013-01-25 06:28:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: arr ~ APPPATH/classes/helper/main.php [ 16 ]
--
#0 /var/www/dandiigo/application/classes/helper/main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/dandii...', 16, Array)
#1 /var/www/dandiigo/application/classes/helper/main.php(8): Helper_Main::clean(Array)
#2 /var/www/dandiigo/application/classes/controller/session.php(42): Helper_Main::clean(Array)
#3 [internal function]: Controller_Session->action_student_registration()
#4 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Session))
#5 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-25 06:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 06:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 06:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 06:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 07:05:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 07:05:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 07:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 07:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 08:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 08:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 08:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 08:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-25 23:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-25 23:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}