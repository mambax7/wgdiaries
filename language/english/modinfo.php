<?php

declare(strict_types=1);

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * wgDiaries module for xoops
 *
 * @copyright      2020 XOOPS Project (https://xooops.org)
 * @license        GPL 2.0 or later
 * @package        wgdiaries
 * @since          1.0
 * @min_xoops      2.5.9
 * @author         wedega - Email:<webmaster@wedega.com> - Website:<https://xoops.wedega.com>
 */

require_once __DIR__ . '/common.php';

// ---------------- Admin Main ----------------
\define('_MI_WGDIARIES_NAME', 'wgDiaries');
\define('_MI_WGDIARIES_DESC', 'Simple module for a diary for work from home');
// ---------------- Admin Menu ----------------
\define('_MI_WGDIARIES_ADMENU1', 'Dashboard');
\define('_MI_WGDIARIES_ADMENU2', 'Items');
\define('_MI_WGDIARIES_ADMENU3', 'Files');
\define('_MI_WGDIARIES_ADMENU4', 'Categories');
//\define('_MI_WGDIARIES_ADMENU5', 'Groupusers');
\define('_MI_WGDIARIES_ADMENU6', 'Permissions');
\define('_MI_WGDIARIES_ADMENU7', 'Feedback');
\define('_MI_WGDIARIES_ADMENU8', 'Clone');
\define('_MI_WGDIARIES_ABOUT', 'About');
// ---------------- Admin Nav ----------------
\define('_MI_WGDIARIES_ADMIN_PAGER', 'Admin pager');
\define('_MI_WGDIARIES_ADMIN_PAGER_DESC', 'Admin per page list');
// User
\define('_MI_WGDIARIES_INDEX_PAGER', 'Index page');
\define('_MI_WGDIARIES_INDEX_PAGER_DESC', 'Items per list on index page');
\define('_MI_WGDIARIES_USER_PAGER', 'User pager');
\define('_MI_WGDIARIES_USER_PAGER_DESC', 'User per page list');
// Submenu
\define('_MI_WGDIARIES_SMNAME1', 'Index page');
\define('_MI_WGDIARIES_SMNAME2', 'My Items');
\define('_MI_WGDIARIES_SMNAME3', 'Submit Items');
\define('_MI_WGDIARIES_SMNAME4', 'Items of my groups');
\define('_MI_WGDIARIES_SMNAME5', 'Statistics');
\define('_MI_WGDIARIES_SMNAME6', 'Outputs');
\define('_MI_WGDIARIES_SMNAME7', 'Calendar');
\define('_MI_WGDIARIES_SMNAME8', 'Archive');
\define('_MI_WGDIARIES_SMNAME9', 'Items by users');
// Config
\define('_MI_WGDIARIES_EDITOR_ADMIN', 'Editor admin');
\define('_MI_WGDIARIES_EDITOR_ADMIN_DESC', 'Select the editor which should be used in admin area for text area fields');
\define('_MI_WGDIARIES_EDITOR_USER', 'Editor user');
\define('_MI_WGDIARIES_EDITOR_USER_DESC', 'Select the editor which should be used in user area for text area fields');
\define('_MI_WGDIARIES_EDITOR_MAXCHAR', 'Text max characters');
\define('_MI_WGDIARIES_EDITOR_MAXCHAR_DESC', 'Max characters for showing text of a textarea or editor field in admin area');
\define('_MI_WGDIARIES_KEYWORDS', 'Keywords');
\define('_MI_WGDIARIES_KEYWORDS_DESC', 'Insert here the keywords (separate by comma)');
\define('_MI_WGDIARIES_SIZE_MB', 'MB');
\define('_MI_WGDIARIES_MAXSIZE_FILE', 'Max size file');
\define('_MI_WGDIARIES_MAXSIZE_FILE_DESC', 'Define the max size for uploading files');
\define('_MI_WGDIARIES_MAX_FILEUPLOADS', 'Max file uploads');
\define('_MI_WGDIARIES_MAX_FILEUPLOADS_DESC', 'Define the max number of uploading files per item');
\define('_MI_WGDIARIES_MIMETYPES_FILE', 'Mime types file');
\define('_MI_WGDIARIES_MIMETYPES_FILE_DESC', 'Define the allowed mime types for uploading files');
\define('_MI_WGDIARIES_MAXSIZE_IMAGE', 'Max size image');
\define('_MI_WGDIARIES_MAXSIZE_IMAGE_DESC', 'Define the max size for uploading images');
\define('_MI_WGDIARIES_MIMETYPES_IMAGE', 'Mime types image');
\define('_MI_WGDIARIES_MIMETYPES_IMAGE_DESC', 'Define the allowed mime types for uploading images');
\define('_MI_WGDIARIES_MAXWIDTH_IMAGE', 'Max width image');
\define('_MI_WGDIARIES_MAXWIDTH_IMAGE_DESC', 'Set the max width to which uploaded images should be scaled (in pixel)<br>0 means, that images keeps the original size. <br>If an image is smaller than maximum value then the image will be not enlarge, it will be save in original width.');
\define('_MI_WGDIARIES_MAXHEIGHT_IMAGE', 'Max height image');
\define('_MI_WGDIARIES_MAXHEIGHT_IMAGE_DESC', 'Set the max height to which uploaded images should be scaled (in pixel)<br>0 means, that images keeps the original size. <br>If an image is smaller than maximum value then the image will be not enlarge, it will be save in original height');
\define('_MI_WGDIARIES_USE_GROUPS', 'Use groups');
\define('_MI_WGDIARIES_USE_GROUPS_DESC', 'Use group system in order to group user items to specific groups/projects');
\define('_MI_WGDIARIES_INDEXHEADER', 'Index header');
\define('_MI_WGDIARIES_INDEXHEADER_DESC', 'Show this text as header on index page');
\define('_MI_WGDIARIES_INDEXSORT', 'Index sorting');
\define('_MI_WGDIARIES_INDEXSORT_DESC', 'Select how the items on index page be sorted');
\define('_MI_WGDIARIES_INDEXSORT_ACT', 'Last activities');
\define('_MI_WGDIARIES_INDEXSORT_DATEFROM', 'Item date from descending');
\define('_MI_WGDIARIES_ITEMS_CALENDAR', 'Show calendar items');
\define('_MI_WGDIARIES_ITEMS_CALENDAR_DESC', 'Show calendar for own items on items page');
\define('_MI_WGDIARIES_USERITEMS_AVATAR', 'Avatars on user items page');
\define('_MI_WGDIARIES_USERITEMS_AVATAR_DESC', 'Show user avatars on user items page');
\define('_MI_WGDIARIES_USERITEMS_EMPTY', 'Empty users on user items page');
\define('_MI_WGDIARIES_USERITEMS_EMPTY_DESC', 'Show users without any items on user items page');
\define('_MI_WGDIARIES_TABLE_TYPE', 'Table Type');
\define('_MI_WGDIARIES_TABLE_TYPE_DESC', 'Table Type is the bootstrap html table');
\define('_MI_WGDIARIES_IDPAYPAL', 'Paypal ID');
\define('_MI_WGDIARIES_IDPAYPAL_DESC', 'Insert here your PayPal ID for donations');
\define('_MI_WGDIARIES_SHOW_BREADCRUMBS', 'Show breadcrumb navigation');
\define('_MI_WGDIARIES_SHOW_BREADCRUMBS_DESC', 'Show breadcrumb navigation which displays the current page in context within the site structure');
\define('_MI_WGDIARIES_ADVERTISE', 'Advertisement Code');
\define('_MI_WGDIARIES_ADVERTISE_DESC', 'Insert here the advertisement code');
\define('_MI_WGDIARIES_MAINTAINEDBY', 'Maintained By');
\define('_MI_WGDIARIES_MAINTAINEDBY_DESC', 'Allow url of support site or community');
\define('_MI_WGDIARIES_BOOKMARKS', 'Social Bookmarks');
\define('_MI_WGDIARIES_BOOKMARKS_DESC', 'Show Social Bookmarks in the single page');
\define('_MI_WGDIARIES_SHOWCOPYRIGHT', 'Show copyright');
\define('_MI_WGDIARIES_SHOWCOPYRIGHT_DESC', 'You can remove the copyright from the wgSimpleAcc, but a backlinks to www.wedega.com is expected, anywhere on your site');
\define('_MI_WGDIARIES_CALENDAR_FIRSTDAY', 'First day in calendar');
\define('_MI_WGDIARIES_CALENDAR_FIRSTDAY_DESC', 'Decide which day in monthly calendar should be the first one');
\define('_MI_WGDIARIES_CAL_SUNDAY', 'Sunday');
\define('_MI_WGDIARIES_CAL_MONDAY', 'Monday');
\define('_MI_WGDIARIES_CAL_TUESDAY', 'Tuesday');
\define('_MI_WGDIARIES_CAL_WEDNESDAY', 'Wednesday');
\define('_MI_WGDIARIES_CAL_THURSDAY', 'Thursday');
\define('_MI_WGDIARIES_CAL_FRIDAY', 'Friday');
\define('_MI_WGDIARIES_CAL_SATURDAY', 'Saturday');
// ---------------- End ----------------
