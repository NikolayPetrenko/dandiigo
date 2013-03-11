<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-27 06:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 06:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 06:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 06:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:05:12 --- ERROR: Database_Exception [ 1146 ]: Table 'daniigo_campus.dj_students' doesn't exist [ SHOW FULL COLUMNS FROM `dj_students` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-27 07:05:12 --- STRACE: Database_Exception [ 1146 ]: Table 'daniigo_campus.dj_students' doesn't exist [ SHOW FULL COLUMNS FROM `dj_students` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/dandiigo/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/dandiigo/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('dj_students')
#2 /var/www/dandiigo/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /var/www/dandiigo/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/dandiigo/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/dandiigo/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /var/www/dandiigo/application/classes/controller/session.php(52): Kohana_ORM::factory('student')
#7 [internal function]: Controller_Session->action_student_registration()
#8 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Session))
#9 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-27 07:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:11:50 --- ERROR: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 07:11:50 --- STRACE: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
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
2013-01-27 07:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:25:42 --- ERROR: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 07:25:42 --- STRACE: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
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
2013-01-27 07:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:25:51 --- ERROR: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 07:25:51 --- STRACE: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
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
2013-01-27 07:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:26:00 --- ERROR: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 07:26:00 --- STRACE: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
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
2013-01-27 07:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:26:30 --- ERROR: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 07:26:30 --- STRACE: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
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
2013-01-27 07:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:26:41 --- ERROR: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 07:26:41 --- STRACE: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
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
2013-01-27 07:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:42:09 --- ERROR: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 07:42:09 --- STRACE: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
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
2013-01-27 07:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:43:27 --- ERROR: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 07:43:27 --- STRACE: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
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
2013-01-27 07:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 07:44:40 --- ERROR: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 07:44:40 --- STRACE: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
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
2013-01-27 07:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 07:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 08:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 08:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 08:12:52 --- ERROR: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 08:12:52 --- STRACE: View_Exception [ 0 ]: The requested view session/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
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
2013-01-27 08:12:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 08:12:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 08:41:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 08:41:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL thankyou was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-27 09:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL thankyou was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-27 09:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:04:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:04:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:06:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH/views/session/thankyou.php [ 1 ]
2013-01-27 09:06:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH/views/session/thankyou.php [ 1 ]
--
#0 /var/www/dandiigo/application/views/session/thankyou.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/dandii...', 1, Array)
#1 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#2 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#3 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/dandiigo/application/views/layouts/main.php(19): Kohana_View->__toString()
#5 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#6 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#7 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/dandiigo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/dandiigo/application/classes/my/layout.php(87): Kohana_Response->body(Object(View))
#10 /var/www/dandiigo/application/classes/controller/session.php(71): My_Layout->render()
#11 [internal function]: Controller_Session->action_thankyou()
#12 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Session))
#13 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#16 {main}
2013-01-27 09:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:12:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:12:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:16:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:16:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:17:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:17:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:17:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:17:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:23:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:23:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:23:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:23:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:28:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:28:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:28:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:28:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:32:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:32:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:34:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:34:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:35:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:35:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:35:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:35:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 09:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 09:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}