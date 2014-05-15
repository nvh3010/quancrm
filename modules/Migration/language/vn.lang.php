<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/


$mod_strings = Array(
'LBL_MIGRATE_INFO'=>'Nhập các giá trị để chuyển dữ liệu từ <b><i> phiên bản cũ </i></b> tới <b><i> phiên bản hiện tại (mới nhất) </i></b>',
'LBL_CURRENT_VT_MYSQL_EXIST'=>'Dữ liệu MySQL của phần mềm hiện tại ở',
'LBL_THIS_MACHINE'=>'Máy này',
'LBL_DIFFERENT_MACHINE'=>'Máy khác',
'LBL_CURRENT_VT_MYSQL_PATH'=>'Đường dẫn MySQL của phiên bản hiện tại',
'LBL_SOURCE_VT_MYSQL_DUMPFILE'=>'Tên file dump của hệ thống <b>cũ</b>',
'LBL_NOTE_TITLE'=>'Ghi chú',
'LBL_NOTES_LIST1'=>'Nếu MySQL hiện tại ở trên cùng máy hãy nhập đường dẫn MySQL Path (hoặc) bạn có thể nhập file Dump nếu bạn có.',
'LBL_NOTES_LIST2'=>'Nếu MySQL hiện tại ở máy khác hãy nhập tên file Dump (cũ) với đường dẫn đầy đủ.',
'LBL_NOTES_DUMP_PROCESS'=>'Để lấy file dump của cơ sở dữ liệu hãy thực hiện theo các lệnh sau trong thư mục <b>mysql/bin</b> 
			   <br><b>mysqldump --user="mysql_username"  --password="mysql-password" -h "hostname"  --port="mysql_port" "database_name" > dump_filename</b>
			   <br>thêm <b>SET FOREIGN_KEY_CHECKS = 0;</b> -- vào đầu file dump
			   <br>thêm <b>SET FOREIGN_KEY_CHECKS = 1;</b> -- vào cuối file dump',
'LBL_NOTES_LIST3'=>'Nhập đường dẫn MySQL, ví dụ <b>/home/crm/CRM4_5/mysql</b>',
'LBL_NOTES_LIST4'=>'Nhập tên file Dump với đường dẫn đầy dủ, ví dụ <b>/home/fullpath/4_2_dump.txt</b>',

'LBL_CURRENT_MYSQL_PATH_FOUND'=>'Đã tìm thấy đường dẫn MySQL của bản cài đặt hiện tại.',
'LBL_SOURCE_HOST_NAME'=>'Tên máy chủ cũ ',
'LBL_SOURCE_MYSQL_PORT_NO'=>'Số hiệu port MySql cũ ',
'LBL_SOURCE_MYSQL_USER_NAME'=>'Tên tài khoản MySql cũ ',
'LBL_SOURCE_MYSQL_PASSWORD'=>'Mật khẩu MySql cũ ',
'LBL_SOURCE_DB_NAME'=>'Tên cơ sở dữ liệu cũ ',
'LBL_MIGRATE'=>'Chuyển sang phiên bản hiện tại',
//Added after 5 Beta 
'LBL_UPGRADE_VTIGER'=>'Nâng cấp cơ sở dữ liệu phiên bản CRM',
'LBL_UPGRADE_FROM_VTIGER_423'=>'Nâng cấp cơ sở dữ liệu từ phiên bản 4.2.3 lên 5.0.0',
'LBL_SETTINGS'=>'Thiết lập',
'LBL_STEP'=>'Bước',
'LBL_SELECT_SOURCE'=>'Chọn nguồn',
'LBL_STEP1_DESC'=>'Để bắt đầu chuyển cơ sở dữ liệu, bạn phải chọn loại dữ liệu mà các dữ liệu cũ đã dùng',
'LBL_RADIO_BUTTON1_TEXT'=>'Tôi có quyền truy cập vào hệ thống dữ liệu của hệ thống',
'LBL_RADIO_BUTTON1_DESC'=>'Tùy chọn này cho phép bạn có các thông tin truy cập cơ sở dữ liệu và địa chỉ máy chủ (nơi lưu trữ cơ sở dữ liệu). Cả hai hệ thống nội bộ và từ xa đều được hỗ trợ phương thức này. Hãy đọc các tài liệu để được giúp đỡ.',
'LBL_RADIO_BUTTON2_TEXT'=>'Tôi có quyền truy cập vào kho lưu trữ dump của hệ thống',
'LBL_RADIO_BUTTON2_DESC'=>'Tùy chọn này cho phép cơ sở dữ liệu dump chỉ có thể sử dụng trong máy bạn đang nâng cấp. Bạn không thẻ truy cập dữ liệu dump từ một máy tính khác (máy chủ dữ liệu từ xa). Hãy đọc các tài liệu để được giúp đỡ.',
'LBL_RADIO_BUTTON3_TEXT'=>'Tôi có cơ sở dữ liệu mới với dữ liệu của bản 4.2.3',
'LBL_RADIO_BUTTON3_DESC'=>'Tùy chọn này đòi hỏi phải có thông tin về hệ thông dữ liệu của phiên bản 4.2.3 , bao gồm mã máy chủ dữ liệu, tài khoản và mật khẩu. Bạn không thể truy cập dữ liệu dump từ một máy tính khác (máy chủ dữ liệu từ xa).',

'LBL_HOST_DB_ACCESS_DETAILS'=>'Thông tin truy cập máy chủ dữ liệu',
'LBL_MYSQL_HOST_NAME_IP'=>'Tên hoặc địa chỉ IP của máy chủ MySQL  ',
'LBL_MYSQL_PORT'=>'Số hiệu Port MySQL  ',
'LBL_MYSQL_USER_NAME'=>'Tài khoản MySql  ',
'LBL_MYSQL_PASSWORD'=>'Mật khẩu MySql  ',
'LBL_DB_NAME'=>'Tên cơ sở dữ liệu  ',

'LBL_LOCATE_DB_DUMP_FILE'=>'Xác định File Dump cơ sỡ dữ liệu',
'LBL_DUMP_FILE_LOCATION'=>'Vị trí File Dump  ',

'LBL_RADIO_BUTTON3_PROCESS'=>'<font color="red">Xin đừng đưa ra thông tin về cơ sở dữ liệu của phiên bản 4.2.3. Tùy chọn này sẽ làm thay đổi trực tiếp cơ sở dữ liệu đưa ra.</font>
<br>Bạn nên làm theo các bước sau.
<br>1. Tạo file dump của cơ sở dữ liệu 4.2.3 của bạn
<br>2. Tạo cơ sở dữ liệu mới (Nên tạo cơ sở dữ liệu trên máy chủ đang chạy dữ liệu của phiên bản 5.0 của bạn.)
<br>3. Cập nhật file dump 4.2.3 cho cơ sở dữ liệu mới này.
<br>Bây giờ hãy đưa ra các thông tin truy cập cơ sở dữ liệu mới. Việc chuyển dữ liệu sẽ thay đổi cơ sở dữ liệu này thích hợp với kiểu dữ liệu 5.0.
Sau đó bạn có thể đưa tên cơ sở dữ liệu này vào file config.inc.php để sử dụng cơ sở dữ liệu này, ví dụ, $dbconfig[\'db_name\'] = \'new db name\';',

'LBL_ENTER_MYSQL_SERVER_PATH'=>'Nhập đường dẫn máy chủ MySQL',
'LBL_SERVER_PATH_DESC'=>'Đường dẫn MySQL trong máy chủ dưới dạng <b>/home/5beta/CRM5_beta/mysql/bin</b> hoặc <b>c:\Program Files\mysql\bin</b>',
'LBL_MYSQL_SERVER_PATH'=>'Đường dẫn máy chủ MySQL  ',
'LBL_MIGRATE_BUTTON'=>'Chuyển dữ liệu',
'LBL_CANCEL_BUTTON'=>'Hủy bỏ',
'LBL_UPGRADE_FROM_VTIGER_5X'=>'Nâng cấp cơ sở dữ liệu từ vtiger CRM 5.x lên phiên bản mới',
'LBL_PATCH_OR_MIGRATION'=>'bản phải chỉ rõ phiên bản của cơ sở dữ liệu nguồn (Gói nâng cấp hoặc di cư dữ liệu)',
//Added for java script alerts
'ENTER_SOURCE_HOST' => 'Hãy nhập vào tên máy chủ nguồn',
'ENTER_SOURCE_MYSQL_PORT' => 'Hãy nhập cổng của máy chủ MySQL',
'ENTER_SOURCE_MYSQL_USER' => 'Hãy nhập tên người dùng máy chủ MySQL',
'ENTER_SOURCE_DATABASE' => 'Hãy nhập tên cơ sở dữ liệu MySQL',
'ENTER_SOURCE_MYSQL_DUMP' => 'Hãy nhập tên Tập tin kết xuất dữ liệu MySQL',
'ENTER_HOST' => 'Hãy nhập tên máy chủ',
'ENTER_MYSQL_PORT' => 'Hãy nhập cổng máy chủ MySQL',
'ENTER_MYSQL_USER' => 'Hãy nhập tên người dùng máy chủ MySQL',
'ENTER_DATABASE' => 'Hãy nhập tên cơ sở dữ liệu MySQL',
'SELECT_ANYONE_OPTION' => 'Hãy chọn một số tùy chọn',
'ENTER_CORRECT_MYSQL_PATH' => 'Hãy nhập đường dẫn MySQL chính xác',

);






?>
