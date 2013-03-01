<?php

/**
 * ECSHOP 管理中心文章处理程序文件
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

/*------------------------------------------------------ */
//-- 欢购卡列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
	admin_priv('hgcard_list');
    $smarty->assign('ur_here',      $_LANG['01_hgcard_list']);
    $smarty->assign('action_link',  array('text' => $_LANG['02_hgcard_add'], 'href' => 'hgcard.php?act=add'));
    $smarty->assign('full_page',    1);
	$smarty->assign('time',       time());
	
    $hgcard_list = get_hgcardlist();
	
    $smarty->assign('hgcard_list',    $hgcard_list['hgcard']);
    $smarty->assign('filter',         $hgcard_list['filter']);
    $smarty->assign('record_count',   $hgcard_list['record_count']);
    $smarty->assign('page_count',     $hgcard_list['page_count']);

    assign_query_info();
    $smarty->display('hgcard_list.htm');
}

/*------------------------------------------------------ */
//-- 排序、分页、查询
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $hgcard_list = get_hgcardlist();
    $smarty->assign('hgcard_list',   $hgcard_list['hgcard']);
    $smarty->assign('filter',       $hgcard_list['filter']);
    $smarty->assign('record_count', $hgcard_list['record_count']);
    $smarty->assign('page_count',   $hgcard_list['page_count']);

    make_json_result($smarty->fetch('hgcard_list.htm'), '',
        array('filter' => $hgcard_list['filter'], 'page_count' => $hgcard_list['page_count']));
}


if ($_REQUEST['act'] == 'add')
{
	admin_priv('hgcard_add');
    $smarty->assign('ur_here',      $_LANG['02_hgcard_add']);
    $smarty->assign('action_link',  array('text' => $_LANG['01_hgcard_list'], 'href' => 'hgcard.php?act=list'));
    $smarty->assign('form_action', $_REQUEST['act'] == 'edit' ? 'update' : 'insert');
	
    assign_query_info();
    $smarty->display('hgcard_info.htm');
}

if ($_REQUEST['act'] == 'insert')
{
	if(empty($_POST['amount']))
	{
		sys_msg($_LANG['hgcard_amount_null'], 1, array(), false);
	}
	
	if(empty($_POST['money']))
	{
		sys_msg($_LANG['hgcard_money_null'], 1, array(), false);
	}
	
	$_POST['suppliers_id']	=	"";
	if(!empty($_POST['suppliers_name']))
	{
		$_POST['suppliers_id']	=	$GLOBALS['db']->getOne("select suppliers_id from ecs_suppliers where suppliers_name='".$_POST['suppliers_name']."'");
		if(empty($_POST['suppliers_id']))
		{
			sys_msg($_LANG['hgcard_suppliers_null'], 1, array(), false);
		}
	}
	
	$_POST['user_id']	=	"";
	if(!empty($_POST['user_name']))
	{
		$_POST['user_id']	=	$GLOBALS['db']->getOne("select user_id from ecs_users where user_name='".$_POST['user_name']."'");
		if(empty($_POST['user_id']))
		{
			sys_msg($_LANG['hgcard_user_null'], 1, array(), false);
		}
	}
	
	if(empty($_POST['hgcard_end_time']))
	{
		sys_msg($_LANG['hgcard_end_time_null'], 1, array(), false);
	}
	else
	{
		$_POST['hgcard_end_time']	=	local_strtotime($_POST['hgcard_end_time']);
	}
	
	if(empty($_CFG['hgcard_id_num']))
	{
		$_CFG['hgcard_id_num']	=	12;
	}
	if(empty($_CFG['hgcard_pw_num']))
	{
		$_CFG['hgcard_pw_num']	=	12;
	}
	
	$_POST['add_time']	=	time();
	
	for($i=1;$i<=$_POST['amount'];$i++)
	{
		$hgcard_id	=	randomkeys_id($_CFG['hgcard_id_num']);	
		$hgcard_pw	=	randomkeys_pw($_CFG['hgcard_pw_num']);
		$sql = "INSERT INTO " . $ecs->table('hgcard') . " (id, card_id, password, money, suppliers_id, suppliers_name, user_id, user_name, add_time, end_time, status ) " ."VALUES (NULL,'".$hgcard_id."','".$hgcard_pw."','".$_POST['money']."','".$_POST['suppliers_id']."','".$_POST['suppliers_name']."','".$_POST['user_id']."','".$_POST['user_name']."','".$_POST['add_time']."','".$_POST['hgcard_end_time']."',0)";	
		//print_r($sql);print_r("<br>");	
		$db->query($sql, 'SILENT');	
	}
	
	sys_msg($_LANG['hgcard_generate_succeed'], 0, $link);	
        
}




/**
 * 获取品牌列表
 *
 * @access  public
 * @return  array
 */
function get_hgcardlist()
{
    $result = get_filter();
    if ($result === false)
    {
        /* 分页大小 */
        $filter = array();

        /* 记录总数以及页数 */
        if (isset($_POST['suppliers_name']))
        {
            $sql = "SELECT COUNT(*) FROM ".$GLOBALS['ecs']->table('hgcard') .' WHERE suppliers_name = \''.$_POST['suppliers_name'].'\'';
        }
        else
        {
            $sql = "SELECT COUNT(*) FROM ".$GLOBALS['ecs']->table('hgcard');
        }

        $filter['record_count'] = $GLOBALS['db']->getOne($sql);

        $filter = page_and_size($filter);

        /* 查询记录 */
        if (isset($_POST['suppliers_name']))
        {
            if(strtoupper(EC_CHARSET) == 'GBK')
            {
                $keyword = iconv("UTF-8", "gb2312", $_POST['suppliers_name']);
            }
            else
            {
                $keyword = $_POST['suppliers_name'];
            }
            $sql = "SELECT * FROM ".$GLOBALS['ecs']->table('hgcard')." WHERE suppliers_name like '%{$keyword}%' ORDER BY id ASC";
        }
        else
        {
            $sql = "SELECT * FROM ".$GLOBALS['ecs']->table('hgcard')." ORDER BY id ASC";
        }

        set_filter($filter, $sql);
    }
    else
    {
        $sql    = $result['sql'];
        $filter = $result['filter'];
    }
    $res = $GLOBALS['db']->selectLimit($sql, $filter['page_size'], $filter['start']);

    $arr = array();
    while ($rows = $GLOBALS['db']->fetchRow($res))
    {
		$rows['add_time']	=	date('Y-m-d',$rows['add_time']);
		$rows['end_times']	=	date('Y-m-d',$rows['end_time']);
        $arr[] = $rows;
    }

    return array('hgcard' => $arr, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/* 获取随机数 */
function randomkeys_id($length)
{
	 $pattern='1234567890123456789012345678901234567890';
	 for($i=0;$i<$length;$i++)
	 {
	   $key .= $pattern{mt_rand(0,35)};    //生成php随机数
	 }
	 return $key;
}
function randomkeys_pw($length)
{
	 $pattern='12345678901234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	 for($i=0;$i<$length;$i++)
	 {
	   $key .= $pattern{mt_rand(0,35)};    //生成php随机数
	 }
	 return $key;
}

?>