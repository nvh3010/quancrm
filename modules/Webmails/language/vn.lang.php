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
'LBL_MOVE_TO'=>'Chuyển tới',
'LBL_DELETE'=>'Xóa',

'ERR_DELETE_RECORD'=>"Số hiệu bản ghi cần dược chỉ rõ để xóa vtiger_account.",
'LBL_DATE_SENT'=>'Ngày gửi',
'LBL_SUBJECT'=>'Tiêu đề ',
'LBL_DATE_AND_TIME'=>'Ngày & Giờ  gửi',
'LBL_DATE'=>'Ngày ',
'LBL_TIME'=>'Giờ gửi',
'LBL_BODY'=>'Nội dung',
'LBL_CONTACT_NAME'=>' Tên Liên hệ ',
'LBL_EMAIL'=>'Email',  
'LBL_COLON'=>': ',
'LBL_TO'=>'Tới ',
'LBL_CHK_MAIL'=>'Kiểm tra thư',
'LBL_COMPOSE'=>'Viết thư',
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
'LBL_REPLY_TO_SENDER'=>'Trả lời người gửi',
'LBL_REPLY_ALL'=>'Trả lời tất cả',
'LBL_SHOW_HIDDEN'=>'Ẩn - Hiện',
'LBL_EXPUNGE_MAILBOX'=>'Xóa hộp thư',

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
'Sales Enity Module'=>'Phân hệ bán hàng',
'Activtiy Type'=>'Loại hoạt động',
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
'MESSAGE_MAIL_HAS_SENT_TO_CONTACTS'=>'Mail đã được gửi tới Contact ',
'MESSAGE_MAIL_ID_IS_INCORRECT'=>'Mã Email sai. Hãy kiểm tra lại mã Email...',
'MESSAGE_ADD_USER_OR_CONTACT'=>'Hãy thêm người sử dụng và Contact...',
'MESSAGE_MAIL_SENT_SUCCESSFULLY'=>' Mail đã gửi thành công!',

// Added for web mail post 4.0.1 release
'LBL_FETCH_WEBMAIL'=>'Nạp mail',
//Added for 4.2 Release -- CustomView
'LBL_ALL'=>'Tất cả',
'MESSAGE_CONTACT_NOT_WANT_MAIL'=>'Liên hệ này không muốn nhận mail.',
'LBL_WEBMAILS_TITLE'=>'WebMail',
'LBL_EMAILS_TITLE'=>'Email',
'LBL_MAIL_CONNECT_ERROR_INFO'=>'Lỗi kết nối máy chủ!<br> Kiểm tra trong Tài khoản của bạn->Danh sách máy chủ Mail -> Danh sách tài khoản Mail',
// Added for 5.0.3 release
'LBL_MAIL_CONNECT_ERROR'=>'Không thể kết nối tới máy chủ thư. hãy kiểm tra thông số máy chủ',
'IN_REPLY_TO_THE_MESSAGE' => 'In reply to the message sent by ',
'LBL_CLICK_HERE' => 'Nhấp vào đây ',
'LBL_GOTO_EMAILS_MODULE' => ' tới mục Thư điện tử',
'LBL_NO_EMAILS'=>'Không có thư',
'LBL_MOVE_TO'=>'Chuyển tới...',
'LBL_DEL'=>'Xóa ',
'LABEL_FROM'=>'Từ',
'LBL_INFO'=>'Thông Tin',
'LABEL_DATE'=>'Ngày',
'LBL_NO_IFRAMES_SUPPORTED'=>'Không hỗ trợ Iframes',
'LBL_EMAIL_ATTACHMENTS'=>'Gửi kèm thư',
'LBL_ALLMAILS'=>'Thư điện tử',
'LBL_TO_USERS'=>'Tới người dùng',
'LBL_TO_GROUPS'=>'Tới nhóm',
'SUBJECT' => 'Tiêu đề',
'BODY' => 'Nội dung',
'TO' => 'Tới',
'CC' => 'CC',
'BCC' => 'BCC',
'FROM' => 'Từ',
'IN'=>'trong',
'ADD_FOLDER' => 'Thêm thư mục[X]',
//Added for 5.0.3
'LBL_LOADING_IMAGE' => 'tải ảnh',
'LBL_ENABLE_IMAP_SUPPORT' => 'Hãy bật IMAP trong php để sử dụng phân hệ này',

// Added/Updated for vtiger CRM 5.0.4
'LBL_CONFIGURE_MAIL_SETTINGS'=>'Hãy khai báo thông số thư',
'LBL_PLEASE'=>'Xin mời',
'LBL_HERE'=>'Đây',
//510 {
// Added after 5.0.4 GA
'LBL_FULL_EMAIL_VIEW'=>'Xem chế độ đầy đủ', 
'LBL_MESSAGE'=>'Thông điệp', 
'LBL_MESSAGES'=>'Thông điệp',

'LBL_NO_ATTACHMENTS'=>'Không có tập tin nào để tải', 
'LBL_THERE_ARE'=>'Đó là ', 
'LBL_ATTACHMENTS_TO_CHOOSE'=>' các tập tin để chọn từ',
'LBL_ATTACHMENTS'=>'Đính kèm', 

);
//510 }
?>	