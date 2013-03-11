<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-03 04:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:34:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:34:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:36:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:36:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:37:21 --- ERROR: Kohana_Exception [ 0 ]: The end_year property does not exist in the Model_Teacher class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2013-03-03 04:37:21 --- STRACE: Kohana_Exception [ 0 ]: The end_year property does not exist in the Model_Teacher class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/dandiigo/application/classes/controller/achievementteacherrecords.php(14): Kohana_ORM->__get('end_year')
#1 [internal function]: Controller_Achievementteacherrecords->action_list()
#2 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Achievementteacherrecords))
#3 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-03 04:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:37:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'teacher_id' in 'where clause' [ SELECT `record_teacher_disciplinary`.`id` AS `id`, `record_teacher_disciplinary`.`record` AS `record`, `record_teacher_disciplinary`.`notes` AS `notes`, `record_teacher_disciplinary`.`action` AS `action`, `record_teacher_disciplinary`.`date` AS `date`, `record_teacher_disciplinary`.`student_id` AS `student_id`, `record_teacher_disciplinary`.`year_id` AS `year_id` FROM `dg_dscplnrrcrds_tchrs` AS `record_teacher_disciplinary` WHERE `year_id` = '2013' AND `teacher_id` = '89' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-03-03 04:37:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'teacher_id' in 'where clause' [ SELECT `record_teacher_disciplinary`.`id` AS `id`, `record_teacher_disciplinary`.`record` AS `record`, `record_teacher_disciplinary`.`notes` AS `notes`, `record_teacher_disciplinary`.`action` AS `action`, `record_teacher_disciplinary`.`date` AS `date`, `record_teacher_disciplinary`.`student_id` AS `student_id`, `record_teacher_disciplinary`.`year_id` AS `year_id` FROM `dg_dscplnrrcrds_tchrs` AS `record_teacher_disciplinary` WHERE `year_id` = '2013' AND `teacher_id` = '89' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/dandiigo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `record_...', 'Model_Record_Te...', Array)
#1 /var/www/dandiigo/modules/orm/classes/kohana/orm.php(993): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/dandiigo/modules/orm/classes/kohana/orm.php(934): Kohana_ORM->_load_result(true)
#3 /var/www/dandiigo/application/classes/controller/disciplinaryteacherrecords.php(15): Kohana_ORM->find_all()
#4 [internal function]: Controller_Disciplinaryteacherrecords->action_list()
#5 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Disciplinaryteacherrecords))
#6 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#9 {main}
2013-03-03 04:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:38:40 --- ERROR: Kohana_Exception [ 0 ]: The end_year property does not exist in the Model_Teacher class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2013-03-03 04:38:40 --- STRACE: Kohana_Exception [ 0 ]: The end_year property does not exist in the Model_Teacher class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/dandiigo/application/classes/controller/achievementteacherrecords.php(14): Kohana_ORM->__get('end_year')
#1 [internal function]: Controller_Achievementteacherrecords->action_list()
#2 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Achievementteacherrecords))
#3 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-03 04:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:42:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: start_year ~ APPPATH/views/achievementteacherrecords/recordsList.php [ 10 ]
2013-03-03 04:42:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: start_year ~ APPPATH/views/achievementteacherrecords/recordsList.php [ 10 ]
--
#0 /var/www/dandiigo/application/views/achievementteacherrecords/recordsList.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/dandii...', 10, Array)
#1 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#2 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#3 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/dandiigo/application/views/layouts/main.php(24): Kohana_View->__toString()
#5 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#6 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#7 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/dandiigo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/dandiigo/application/classes/my/layout.php(87): Kohana_Response->body(Object(View))
#10 /var/www/dandiigo/application/classes/controller/achievementteacherrecords.php(20): My_Layout->render()
#11 [internal function]: Controller_Achievementteacherrecords->action_list()
#12 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Achievementteacherrecords))
#13 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#16 {main}
2013-03-03 04:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:44:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: start_year ~ APPPATH/views/achievementteacherrecords/recordsList.php [ 10 ]
2013-03-03 04:44:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: start_year ~ APPPATH/views/achievementteacherrecords/recordsList.php [ 10 ]
--
#0 /var/www/dandiigo/application/views/achievementteacherrecords/recordsList.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/dandii...', 10, Array)
#1 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#2 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#3 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/dandiigo/application/views/layouts/main.php(24): Kohana_View->__toString()
#5 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#6 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#7 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/dandiigo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/dandiigo/application/classes/my/layout.php(87): Kohana_Response->body(Object(View))
#10 /var/www/dandiigo/application/classes/controller/achievementteacherrecords.php(21): My_Layout->render()
#11 [internal function]: Controller_Achievementteacherrecords->action_list()
#12 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Achievementteacherrecords))
#13 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#16 {main}
2013-03-03 04:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:54:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:54:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:59:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-03-03 04:59:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-03 04:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 04:59:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Year' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-03-03 04:59:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Year' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-03 04:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 04:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:01:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'teacher_id' in 'where clause' [ SELECT `record_teacher_disciplinary`.`id` AS `id`, `record_teacher_disciplinary`.`record` AS `record`, `record_teacher_disciplinary`.`notes` AS `notes`, `record_teacher_disciplinary`.`action` AS `action`, `record_teacher_disciplinary`.`date` AS `date`, `record_teacher_disciplinary`.`student_id` AS `student_id`, `record_teacher_disciplinary`.`year_id` AS `year_id` FROM `dg_dscplnrrcrds_tchrs` AS `record_teacher_disciplinary` WHERE `year_id` = '2' AND `teacher_id` = '89' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-03-03 05:01:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'teacher_id' in 'where clause' [ SELECT `record_teacher_disciplinary`.`id` AS `id`, `record_teacher_disciplinary`.`record` AS `record`, `record_teacher_disciplinary`.`notes` AS `notes`, `record_teacher_disciplinary`.`action` AS `action`, `record_teacher_disciplinary`.`date` AS `date`, `record_teacher_disciplinary`.`student_id` AS `student_id`, `record_teacher_disciplinary`.`year_id` AS `year_id` FROM `dg_dscplnrrcrds_tchrs` AS `record_teacher_disciplinary` WHERE `year_id` = '2' AND `teacher_id` = '89' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/dandiigo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `record_...', 'Model_Record_Te...', Array)
#1 /var/www/dandiigo/modules/orm/classes/kohana/orm.php(993): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/dandiigo/modules/orm/classes/kohana/orm.php(934): Kohana_ORM->_load_result(true)
#3 /var/www/dandiigo/application/classes/controller/disciplinaryteacherrecords.php(16): Kohana_ORM->find_all()
#4 [internal function]: Controller_Disciplinaryteacherrecords->action_list()
#5 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Disciplinaryteacherrecords))
#6 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#9 {main}
2013-03-03 05:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:09:25 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'teacher_id' in 'where clause' [ SELECT `record_teacher_disciplinary`.`id` AS `id`, `record_teacher_disciplinary`.`record` AS `record`, `record_teacher_disciplinary`.`notes` AS `notes`, `record_teacher_disciplinary`.`action` AS `action`, `record_teacher_disciplinary`.`date` AS `date`, `record_teacher_disciplinary`.`student_id` AS `student_id`, `record_teacher_disciplinary`.`year_id` AS `year_id` FROM `dg_dscplnrrcrds_tchrs` AS `record_teacher_disciplinary` WHERE `year_id` = '2' AND `teacher_id` = '89' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-03-03 05:09:25 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'teacher_id' in 'where clause' [ SELECT `record_teacher_disciplinary`.`id` AS `id`, `record_teacher_disciplinary`.`record` AS `record`, `record_teacher_disciplinary`.`notes` AS `notes`, `record_teacher_disciplinary`.`action` AS `action`, `record_teacher_disciplinary`.`date` AS `date`, `record_teacher_disciplinary`.`student_id` AS `student_id`, `record_teacher_disciplinary`.`year_id` AS `year_id` FROM `dg_dscplnrrcrds_tchrs` AS `record_teacher_disciplinary` WHERE `year_id` = '2' AND `teacher_id` = '89' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/dandiigo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `record_...', 'Model_Record_Te...', Array)
#1 /var/www/dandiigo/modules/orm/classes/kohana/orm.php(993): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/dandiigo/modules/orm/classes/kohana/orm.php(934): Kohana_ORM->_load_result(true)
#3 /var/www/dandiigo/application/classes/controller/disciplinaryteacherrecords.php(16): Kohana_ORM->find_all()
#4 [internal function]: Controller_Disciplinaryteacherrecords->action_list()
#5 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Disciplinaryteacherrecords))
#6 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#9 {main}
2013-03-03 05:09:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:09:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:10:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:10:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:17:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:17:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:17:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:17:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:17:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:17:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:19:05 --- ERROR: Kohana_Exception [ 0 ]: The teacher_id property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2013-03-03 05:19:05 --- STRACE: Kohana_Exception [ 0 ]: The teacher_id property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/dandiigo/application/views/teachers/list.php(50): Kohana_ORM->__get('teacher_id')
#1 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#2 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#3 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/dandiigo/application/views/layouts/main.php(24): Kohana_View->__toString()
#5 /var/www/dandiigo/system/classes/kohana/view.php(61): include('/var/www/dandii...')
#6 /var/www/dandiigo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/dandii...', Array)
#7 /var/www/dandiigo/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/dandiigo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/dandiigo/application/classes/my/layout.php(87): Kohana_Response->body(Object(View))
#10 /var/www/dandiigo/application/classes/controller/teachers.php(17): My_Layout->render()
#11 [internal function]: Controller_Teachers->action_list()
#12 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Teachers))
#13 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#16 {main}
2013-03-03 05:19:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:19:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:20:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:20:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:22:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:22:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:22:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:22:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-soft_75_cccccc_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-soft_75_cccccc_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_glass_75_e6e6e6_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_glass_75_e6e6e6_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_glass_55_fbf9ee_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_glass_55_fbf9ee_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-soft_75_cccccc_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-soft_75_cccccc_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_glass_75_e6e6e6_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_glass_75_e6e6e6_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_glass_55_fbf9ee_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_glass_55_fbf9ee_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_glass_75_dadada_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_glass_75_dadada_1x400.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:41:13 --- ERROR: Kohana_Exception [ 0 ]: The student_id property does not exist in the Model_Teacher class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2013-03-03 05:41:13 --- STRACE: Kohana_Exception [ 0 ]: The student_id property does not exist in the Model_Teacher class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/dandiigo/application/classes/controller/achievementteacherrecords.php(37): Kohana_ORM->__get('student_id')
#1 [internal function]: Controller_Achievementteacherrecords->action_new()
#2 /var/www/dandiigo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Achievementteacherrecords))
#3 /var/www/dandiigo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/dandiigo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-03 05:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_flat_75_ffffff_40x100.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 05:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 05:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 06:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 06:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 06:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 06:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-03 06:09:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-03-03 06:09:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/dandiigo/index.php(109): Kohana_Request->execute()
#1 {main}