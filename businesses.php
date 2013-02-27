<?php

/**
 * ECSHOP 文章内容
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: article.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

/*------------------------------------------------------ */
//-- INPUT
/*------------------------------------------------------ */

$_REQUEST['id'] = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
$cache_id = sprintf('%X', crc32($_CFG['lang']));

/*------------------------------------------------------ */
//-- PROCESSOR
/*------------------------------------------------------ */


if(empty($_REQUEST['id']))
{
	if (!$smarty->is_cached('businesses.dwt', $cache_id))
	{
		
		
		$smarty->assign('helps',           get_shop_help());       // 网店帮助
	}
	assign_template();
    $smarty->display('businesses.dwt', $cache_id);
	exit();
}
else
{
	if (!$smarty->is_cached('businesses_info.dwt', $cache_id))
	{
		
		
		$smarty->assign('helps',           get_shop_help());       // 网店帮助
	}
	assign_template();
    $smarty->display('businesses_info.dwt', $cache_id);
	exit();
}


?>