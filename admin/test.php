<?php

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * modulebuilder module.
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 *
 * @since           2.5.0
 *
 * @author          Txmod Xoops http://www.txmodxoops.org
 *
 */

use XoopsModules\Wgdiaries\Common\TableChecker;

// Define main template
$templateMain = 'wgdiaries_admin_index.tpl';

require __DIR__ . '/header.php';

$tablechecker = new \XoopsModules\Wgdiaries\Common\TableChecker('wgdiaries');
$result = $tablechecker->processSQL();
var_dump($result);

require __DIR__ . '/footer.php';
