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
 * $Header$
 * Description:  Defines the English language pack 
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
$mod_strings = Array(
'LBL_MODULE_NAME'=>'Nhập hàng',
'LBL_RELATED_PRODUCTS'=>'Thông tin sản phẩm',
'LBL_MODULE_TITLE'=>'Nhập hàng : Trang chủ',
'LBL_SEARCH_FORM_TITLE'=>'Tìm kiếm Nhập hàng',
'LBL_LIST_FORM_TITLE'=>'Danh sách Nhập hàng',
'LBL_NEW_FORM_TITLE'=>'Phiếu nhập hàng mới',
'LBL_MEMBER_ORG_FORM_TITLE'=>'Tổ chức thành viên',

'LBL_LIST_ACCOUNT_NAME'=>'Tên Khách hàng',
'LBL_LIST_CITY'=>'Thành phố',
'LBL_LIST_WEBSITE'=>'Website',
'LBL_LIST_STATE'=>'Tỉnh/Bang',
'LBL_LIST_PHONE'=>'Điện thoại',
'LBL_LIST_EMAIL_ADDRESS'=>'Email',
'LBL_LIST_CONTACT_NAME'=>'Tên Liên hệ',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_name' => 'LBL_LIST_ACCOUNT_NAME',
'db_website' => 'LBL_LIST_WEBSITE',
'db_billing_address_city' => 'LBL_LIST_CITY',

//END DON'T CONVERT

'LBL_ACCOUNT'=>'Khách hàng',
'LBL_ACCOUNT_NAME'=>'Tên Khách hàng',
'LBL_PHONE'=>'Điện thoại',
'LBL_WEBSITE'=>'Website',
'LBL_FAX'=>'Fax',
'LBL_TICKER_SYMBOL'=>'Mã chứng khoán',
'LBL_OTHER_PHONE'=>'Điện thoại khác',
'LBL_ANY_PHONE'=>'Điện thoại khác nữa',
'LBL_MEMBER_OF'=>'Thành viên của',
'LBL_EMAIL'=>'Email',
'LBL_EMPLOYEES'=>'Lao động',
'LBL_OTHER_EMAIL_ADDRESS'=>'Email khác',
'LBL_ANY_EMAIL'=>'Email khác nữa',
'LBL_OWNERSHIP'=>'Chủ quyền',
'LBL_RATING'=>'Đánh giá',
'LBL_INDUSTRY'=>'Ngành nghề',
'LBL_SIC_CODE'=>'Mã ngành',
'LBL_TYPE'=>'Loại',
'LBL_ANNUAL_REVENUE'=>'Doanh thu hàng năm',
'LBL_ADDRESS_INFORMATION'=>'Thông tin địa chỉ',
'LBL_Quote_INFORMATION'=>'Thông tin Khách hàng',
'LBL_CUSTOM_INFORMATION'=>'Thông tin bổ sung',
'LBL_BILLING_ADDRESS'=>'Địa chỉ thanh toán',
'LBL_SHIPPING_ADDRESS'=>'Địa chỉ vận chuyển',
'LBL_ANY_ADDRESS'=>'Địa chỉ khác',
'LBL_CITY'=>'Thành phố',
'LBL_STATE'=>'Tỉnh/Bang',
'LBL_POSTAL_CODE'=>'Mã vùng',
'LBL_COUNTRY'=>'Quốc gia',
'LBL_DESCRIPTION_INFORMATION'=>'Thông tin chi tiết',
'LBL_TERMS_INFORMATION'=>'Quyền hạn và trách nhiệm',
'LBL_DESCRIPTION'=>'Mô tả',
'NTC_COPY_BILLING_ADDRESS'=>'Sao chép địa chỉ thanh toán tới địa chỉ vận chuyển',
'NTC_COPY_SHIPPING_ADDRESS'=>'Sao chép địa chỉ vận chuyển tới địa chỉ thanh toán',
'NTC_REMOVE_MEMBER_ORG_CONFIRMATION'=>'Bạn muốn loại thành viên này khỏi tổ chức?',
'LBL_DUPLICATE'=>'Cơ hội tạo ra từ việc sao chép khách hàng',
'MSG_DUPLICATE' => 'Tạo Khách hàng này có thể khiến Cơ hội nhân đôi. Bạn có thể chọn một khách hàng trong danh sách dưới đây hoặc ấn nút Tạo Khách hàng mới để tiếp tục tạo Khách hàng mới với các thông tin đã nhập.',

'LBL_INVITEE'=>'Liên hệ',
'ERR_DELETE_RECORD'=>"Số hiệu bản ghi cần được chỉ rõ để xóa Khách hàng.",

'LBL_SELECT_ACCOUNT'=>'Chọn Khách hàng',
'LBL_GENERAL_INFORMATION'=>'Thông tin chung',

//for v4 release added
'LBL_NEW_POTENTIAL'=>'Cơ hội mới',
'LBL_POTENTIAL_TITLE'=>'Cơ hội',

'LBL_NEW_TASK'=>'Công việc mới',
'LBL_TASK_TITLE'=>'Công việc',
'LBL_NEW_CALL'=>'Cuộc gọi mới',
'LBL_CALL_TITLE'=>'Cuộc gọi',
'LBL_NEW_MEETING'=>'Cuộc gặp mới',
'LBL_MEETING_TITLE'=>'Cuộc gặp',
'LBL_NEW_EMAIL'=>'Email mới',
'LBL_EMAIL_TITLE'=>'Email',
'LBL_NEW_CONTACT'=>'Liên hệ mới',
'LBL_CONTACT_TITLE'=>'Liên hệ',

//Added vtiger_fields after RC1 - Release
'LBL_ALL'=>'Tất cả',
'LBL_PROSPECT'=>'Triển vọng',
'LBL_INVESTOR'=>'Nhà đầu tư',
'LBL_RESELLER'=>'Đại lý bán hàng',
'LBL_PARTNER'=>'Đối tác',

// Added for 4GA
'LBL_TOOL_FORM_TITLE'=>'Khách hàng : Công cụ',
//Added for 4GA
'Subject'=>'Tiêu đề',
'Quote Name'=>'Tên báo giá',
'Vendor Name'=>'Tên nhà cung cấp',
'Requisition No'=>'Yêu cầu số',
'Tracking Number'=>'Số theo dõi',
'Contact Name'=>'Tên Liên hệ',
'Due Date'=>'Ngày liên quan',
'Carrier'=>'Công ty vận chuyển',
'Type'=>'Loại',
'Sales Tax'=>'Thuế bán hàng',
'Sales Commission'=>'Tiền hoa hồng',
'Excise Duty'=>'Thuế',
'Total'=>'Tổng cộng',
'Product Name'=>'Tên sản phẩm',
'Assigned To'=>'Gán cho',
'Billing Address'=>'Địa chỉ thanh toán',
'Shipping Address'=>'Địa chỉ vận chuyển',
'Billing City'=>'Thanh toán tại thành phố',
'Billing State'=>'Thanh toán tại Tỉnh/Bang',
'Billing Code'=>'Mã vùng thanh toán',
'Billing Country'=>'Thanh toán tại quốc gia',
'Billing Po Box'=>'Hộp thư thanh toán',
'Shipping Po Box'=>'Hộp thư vận chuyển',
'Shipping City'=>'Vận chuyển tới thành phố',
'Shipping State'=>'Vận chuyển tới Tỉnh/Bang',
'Shipping Code'=>'Mã vùng vận chuyển',
'Shipping Country'=>'Vận chuyển tới quốc gia',
'City'=>'Thành phố',
'State'=>'Tỉnh/Bang',
'Code'=>'Mã',
'Country'=>'Quốc gia',
'Created Time'=>'Tạo lúc',
'Modified Time'=>'Cập nhật lúc',
'Description'=>'Mô tả',
'Potential Name'=>'Tên Cơ hội',
'Customer No'=>'Khách hàng thứ',
'Purchase Order'=>'Nhập hàng',
'Vendor Terms'=>'Điều khoản với nhà cung cấp',
'Pending'=>'Lý do chưa thực hiện',
'Account Name'=>'Tên Khách hàng',
'Terms & Conditions'=>'Quyền hạn và trách nhiệm',
//Quote Info
'LBL_PO_INFORMATION'=>'Thông tin Nhập hàng',
'LBL_PO'=>'Phiếu nhập hàng',

 //Added for 4.2 GA
'LBL_SO_FORM_TITLE'=>'Bán',
'LBL_PO_FORM_TITLE'=>'Mua',
'LBL_SUBJECT_TITLE'=>'Tiêu đề',
'LBL_VENDOR_NAME_TITLE'=>'Tên nhà cung cấp',
'LBL_TRACKING_NO_TITLE'=>'Số hiệu theo dõi',
'LBL_PO_SEARCH_TITLE'=>'Tìm kiếm Nhập hàng',
'LBL_SO_SEARCH_TITLE'=>'Tìm kiếm đơn đặt hàng',
'LBL_QUOTE_NAME_TITLE'=>'Tên báo giá',
'Order No'=>'Mã đơn hàng',
'Status'=>'Trạng thái',
'PurchaseOrder'=>'Nhập hàng',
'LBL_MY_TOP_PO'=>'Những Nhập hàng nhiều nhất',

//Added for existing Picklist Entries

'FedEx'=>'FedEx',
'UPS'=>'UPS',
'USPS'=>'USPS',
'DHL'=>'DHL',
'BlueDart'=>'BlueDart',

'Created'=>'Đã tạo',
'Approved'=>'Đã chấp nhận',
'Delivered'=>'Đã giao',
'Cancelled'=>'Hủy bỏ',
'Received Shipment'=>'Đã nhận',

//Added for Reports (5.0.4)
'Tax Type'=>'Kiểu thuế',
'Discount Percent'=>'Phần trăm giảm trừ',
'Discount Amount'=>'Số tiền giảm trừ',
'Terms & Conditions'=>'Điều khoản',
'Adjustment'=>'Điều chỉnh',
'Sub Total'=>'Cộng tiền hàng',
'S&H Amount'=>'S&H Amount',

//Added after 5.0.4 GA
'PurchaseOrder No'=>'Số Nhập hàng',//510

);

?>
