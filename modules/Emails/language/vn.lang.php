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
/*********************************************************************************
 * $Header: /advent/projects/wesat/vtiger_crm/sugarcrm/modules/Emails/language/en_us.lang.php,v 1.17 2005/03/28 06:31:38 rank Exp $
 * Description:  Defines the English language pack for the Account module.
 ********************************************************************************/
 
$mod_strings = Array(
// Mike Crowe Mod --------------------------------------------------------added for general search
'LBL_GENERAL_INFORMATION'=>'Thông tin chung',

'LBL_MODULE_NAME'=>'Email',
'LBL_MODULE_TITLE'=>'Email: Trang chủ',
'LBL_SEARCH_FORM_TITLE'=>'Tìm kiếm Email',
'LBL_LIST_FORM_TITLE'=>'Danh sách Email',
'LBL_NEW_FORM_TITLE'=>'Theo dõi Email',

'LBL_LIST_SUBJECT'=>'Tiêu đề',
'LBL_LIST_CONTACT'=>'Liên hệ',
'LBL_LIST_RELATED_TO'=>'Liên quan tới',
'LBL_LIST_DATE'=>'Ngày gửi',
'LBL_LIST_TIME'=>'Thời gian gửi',

'ERR_DELETE_RECORD'=>"Số hiệu bản ghi cần dược chỉ rõ để xóa Khách hàng.",
'LBL_DATE_SENT'=>'Ngày gửi',
'LBL_DATE_AND_TIME'=>'Ngày & Giờ  gửi',
'LBL_DATE'=>'Ngày gửi',
'LBL_TIME'=>'Gửi lúc',
'LBL_SUBJECT'=>'Tiêu đề ',
'LBL_BODY'=>'Nội dung',
'LBL_CONTACT_NAME'=>' Tên Liên hệ ',
'LBL_EMAIL'=>'Email',
'LBL_DETAILVIEW_EMAIL'=>'E-Mail',   
'LBL_COLON'=>': ',
'LBL_CHK_MAIL'=>'Kiểm tra thư',
'LBL_COMPOSE'=>'Viết thư',
//Single change for 5.0.3
'LBL_SETTINGS'=>'Thiết lập để nhận thư',
'LBL_EMAIL_FOLDERS'=>'Thư mục Email',
'LBL_INBOX'=>'Hộp thư đến',
'LBL_SENT_MAILS'=>'Thư đã gửi',
'LBL_TRASH'=>'Thùng rác',
'LBL_JUNK_MAILS'=>'Thư rác',
'LBL_TO_LEADS'=>'Tới Đầu mối',
'LBL_TO_CONTACTS'=>'Tới Liên hệ',
'LBL_TO_ACCOUNTS'=>'Tới Khách hàng',
'LBL_MY_MAILS'=>'Thư của tôi',
'LBL_QUAL_CONTACT'=>'Chuyển email thành Liên hệ',
'LBL_MAILS'=>'Thư',
'LBL_QUALIFY_BUTTON'=>'Chuẩn',
'LBL_REPLY_BUTTON'=>'Trả lời',
'LBL_FORWARD_BUTTON'=>'Chuyển tiếp',
'LBL_DOWNLOAD_ATTCH_BUTTON'=>'Tải đính kèm',
'LBL_FROM'=>'Từ ',
'LBL_CC'=>'Bản sao ',
'LBL_BCC'=>'Bản sao khác ',

'NTC_REMOVE_INVITEE'=>'Bạn muốn xóa người nhận này?',
'LBL_INVITEE'=>'Người nhận',

// Added Fields
// Contacts-SubPanelViewContactsAndUsers.php
'LBL_BULK_MAILS'=>'Thư dung lượng lớn',
'LBL_ATTACHMENT'=>'Đính kèm',
'LBL_UPLOAD'=>'Tải lên',
'LBL_FILE_NAME'=>'Tên Tập tin',
'LBL_SEND'=>'Gửi',

'LBL_EMAIL_TEMPLATES'=>'Mẫu Email',
'LBL_TEMPLATE_NAME'=>'Tên mẫu',
'LBL_DESCRIPTION'=>'Mô tả',
'LBL_EMAIL_TEMPLATES_LIST'=>'Danh sách mẫu Email',
'LBL_EMAIL_INFORMATION'=>'Thông tin Email',




//for v4 release added
'LBL_NEW_LEAD'=>'Đầu mối mới',
'LBL_LEAD_TITLE'=>'Đầu mối',

'LBL_NEW_PRODUCT'=>'Sản phẩm mới',
'LBL_PRODUCT_TITLE'=>'Sản phẩm',
'LBL_NEW_CONTACT'=>'Liên hệ mới',
'LBL_CONTACT_TITLE'=>'Liên hệ',
'LBL_NEW_ACCOUNT'=>'Khách hàng mới',
'LBL_ACCOUNT_TITLE'=>'Khách hàng',

// Added vtiger_fields after vtiger4 - Beta
'LBL_USER_TITLE'=>'Người sử dụng',
'LBL_NEW_USER'=>'Người sử dụng mới',

// Added for 4 GA
'LBL_TOOL_FORM_TITLE'=>'Email : Công cụ',
//Added for 4GA
'Date & Time Sent'=>'Ngày & Giờ  gửi',
'Sales Enity Module'=>'Sales Enity Module',
'Related To'=>'Liên quan tới',
'Assigned To'=>'Gán tới',
'Subject'=>'Tiêu đề',
'Attachment'=>'Đính kèm',
'Description'=>'Mô tả',
'Time Start'=>'Thời gian bắt đầu',
'Created Time'=>'Tạo lúc',
'Modified Time'=>'Cập nhật lúc',

'MESSAGE_CHECK_MAIL_SERVER_NAME'=>'Hãy kiểm tra lại tên máy chủ...',
'MESSAGE_CHECK_MAIL_ID'=>'Hãy kiểm tra lại mã Email của "Gán tới" Người dùng...',
'MESSAGE_MAIL_HAS_SENT_TO_USERS'=>'Mail đã được gửi tới người dùng ',
'MESSAGE_MAIL_HAS_SENT_TO_CONTACTS'=>'Mail đã được gửi tới Liên hệ ',
'MESSAGE_MAIL_ID_IS_INCORRECT'=>'Mã Email sai. Hãy kiểm tra lại mã Email...',
'MESSAGE_ADD_USER_OR_CONTACT'=>'Hãy thêm người sử dụng và Liên hệ...',
'MESSAGE_MAIL_SENT_SUCCESSFULLY'=>' Mail đã gửi thành công!',

// Added for web mail post 4.0.1 release
'LBL_FETCH_WEBMAIL'=>'Nạp mail',
//Added for 4.2 Release -- CustomView
'LBL_ALL'=>'Tất cả',
'MESSAGE_CONTACT_NOT_WANT_MAIL'=>'Liên hệ này không muốn nhận mail.',
'LBL_WEBMAILS_TITLE'=>'WebMail',
'LBL_EMAILS_TITLE'=>'Email',
'LBL_MAIL_CONNECT_ERROR_INFO'=>'Lỗi kết nối máy chủ!<br> Kiểm tra trong tài khoản của bạn->Danh sách máy chủ Mail -> Danh sách tài khoản Mail',
'LBL_ALLMAILS'=>'Tất cả thư',
'LBL_TO_USERS'=>'Tới người sử dụng',
'LBL_TO'=>'Tới',
'LBL_IN_SUBJECT'=>'trong Tiêu đề',
'LBL_IN_SENDER'=>'trong Người gửi',
'LBL_IN_SUBJECT_OR_SENDER'=>'trong Tiêu đề hoặc Người gửi',
'SELECT_EMAIL'=>'Lựa chọn mã Email',
'Sender'=>'Người gửi',
'LBL_CONFIGURE_MAIL_SETTINGS'=>'Máy chủ nhận mail của bạn chưa được cấu hình',
'LBL_MAILSELECT_INFO'=>'có những mã Email sau có liên quan.Hãy chọn những kiểu mã Email để gửi email',
'LBL_MAILSELECT_INFO1'=>'Những kiểu mã Email sau có liên quan tới mã được chọn',
'LBL_MULTIPLE'=>'Nhiều',
'LBL_COMPOSE_EMAIL'=>'Viết Email',
'LBL_VTIGER_EMAIL_CLIENT'=>'Webmail',

//Added for 5.0.3
'TITLE_VTIGERCRM_MAIL'=>'Thư hệ thống',
'TITLE_COMPOSE_MAIL'=>'Soạn thư',

'MESSAGE_MAIL_COULD_NOT_BE_SEND'=>'Thư không thể gửi được.',
'MESSAGE_PLEASE_CHECK_ASSIGNED_USER_EMAILID'=>'hãy kiểm tra ID thư điện tử...',
'MESSAGE_PLEASE_CHECK_THE_FROM_MAILID'=>'Hãy kiểm tra ID thư điện tử gửi',
'MESSAGE_MAIL_COULD_NOT_BE_SEND_TO_THIS_EMAILID'=>'Thư không thể gửi được cho ID thư điện tử này',
'PLEASE_CHECK_THIS_EMAILID'=>'Hãy kiểm tra ID thư này...',
'LBL_CC_EMAIL_ERROR'=>'ID thư CC không phù hợp',
'LBL_BCC_EMAIL_ERROR'=>'ID thư BCC không phù hợp',
'LBL_NO_RCPTS_EMAIL_ERROR'=>'Không có địa chỉ người nhận',
'LBL_CONF_MAILSERVER_ERROR'=>'Hãy thiết lập máy chủ thư outgoing ---> Liên kết máy chủ Outgoing',
'LBL_VTIGER_EMAIL_CLIENT'=>'Webmail',
'LBL_MAILSELECT_INFO3'=>'Bạn không có quyền xem í thư điện tử hoặc các bản ghi đã chọn.',
//Added  for script alerts
'FEATURE_AVAILABLE_INFO' => 'Tính năng này chỉ dùng được với trình duyệt Microsoft Internet Explorer 5.5+ !',
'DOWNLOAD_CONFIRAMATION' => 'Bạn muốn tải Tập tin ?',
'LBL_PLEASE_ATTACH' => 'Hãy chọn lại Tập tin gửi đi và thử lại!',
'LBL_KINDLY_UPLOAD' => 'Hãy khai báo biến <font color="red">upload_tmp_dir</font> trong Tập tin php.ini.',
'LBL_EXCEED_MAX' => 'Xin lỗi, Tập tin tải lên có kích thước vượt quá giới hạn lớn nhất cho phép. Hãy thử một Tập tin nhỏ hơn ',
'LBL_BYTES' => ' bytes',
'LBL_CHECK_USER_MAILID' => 'Hãy kiểm tra id thư hiện tại, phải đúng mới gửi được thư',

// Added/Updated for vtiger CRM 5.0.4
'Activity Type'=>'Loại hoạt động',
'LBL_MAILSELECT_INFO'=>'Các ID thư sau đã liên kết. Hãy chọn các ID thư để gửi thư',
'LBL_NO_RECORDS' => 'không thấy bản ghi nào',
'LBL_PRINT_EMAIL'=> 'In ra',//510

);

?>
