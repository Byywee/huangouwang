<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/default/group_buy.css" rel="stylesheet" type="text/css" />


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block box">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
</div>

<div class="blank"></div>
<div class="block clearfix">
    
   
<?php $this->assign('ads_id','1'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>


<div class="blank"></div>
<div class="w960 gp_choicePane p10">

            <dl class="gp_cPane_dl">
            <dt>类别：</dt>
                <dd id="fadeTab">
                    <div class="gp_tp" id="category">
                        <a rel="" href="/hoteltuan-web/groupbuy/index__2.htm" class="current">团购精选(206)</a>
                        
                        	<a title="美食(498)" rel="R8005" href="/hoteltuan-web/groupbuy/index_R8005_2.htm">美食<em>(498)</em></a>
                        	<a title="娱乐(100)" rel="R8006" href="/hoteltuan-web/groupbuy/index_R8006_2.htm">娱乐<em>(100)</em></a>
                        	<a title="旅游(1465)" rel="R8014" href="/hoteltuan-web/groupbuy/index_R8014_2.htm">旅游<em>(1465)</em></a>
                        	<a title="生活(275)" rel="R8017" href="/hoteltuan-web/groupbuy/index_R8017_2.htm">生活<em>(275)</em></a>
                          </div>
                 </dd>
                 </dl>
             <div class="gp_bb"></div>
           
            <dl class="gp_cPane_dl">
                <dt>区域：</dt>
                <dd class="gp_tp" id="gp_quyu">
                    <a title="全部" href="javascript:void(0);" class="current" fetch="001" rel="btn1">全 部</a>
                       <a title="长宁区(24)" class="btn1" fetch="2785" rev="2785" rel="btn1">长宁区<em>(24)</em></a>
                       <a title="闸北区(19)" class="btn1" fetch="2786" rev="2786" rel="btn1">闸北区<em>(19)</em></a>
                       <a title="闵行区(26)" class="btn1" fetch="2787" rev="2787" rel="btn1">闵行区<em>(26)</em></a>
                       <a title="徐汇区(43)" class="btn1" fetch="2788" rev="2788" rel="btn1">徐汇区<em>(43)</em></a>
                       <a title="浦东新区(50)" class="btn1" fetch="2789" rev="2789" rel="btn1">浦东新区<em>(50)</em></a>
                       <a title="杨浦区(24)" class="btn1" fetch="2790" rev="2790" rel="btn1">杨浦区<em>(24)</em></a>
                       <a title="普陀区(24)" class="btn1" fetch="2791" rev="2791" rel="btn1">普陀区<em>(24)</em></a>
                       <a title="静安区(28)" class="btn1" fetch="2792" rev="2792" rel="btn1">静安区<em>(28)</em></a>
                       <a title="卢湾区(14)" class="btn1" fetch="2793" rev="2793" rel="btn1">卢湾区<em>(14)</em></a><div class="veiwBox1"><p title="">
                            <b>热门商圈：</b>
                            <a class="current1" title="全部">全部</a>
                            	<a title="人民广场(20)" href="javascript:void(0);" onclick="$GB.pageQuery(1,'','4550');" rel="4550">人民广场<em>(20)</em></a>
                            	<a title="徐家汇(19)" href="javascript:void(0);" onclick="$GB.pageQuery(1,'','4482');" rel="4482">徐家汇<em>(19)</em></a>
                            	<a title="八佰伴(18)" href="javascript:void(0);" onclick="$GB.pageQuery(1,'','4495');" rel="4495">八佰伴<em>(18)</em></a>
                            	<a title="静安寺(18)" href="javascript:void(0);" onclick="$GB.pageQuery(1,'','4529');" rel="4529">静安寺<em>(18)</em></a>
                            	<a title="五角场(15)" href="javascript:void(0);" onclick="$GB.pageQuery(1,'','4511');" rel="4511">五角场<em>(15)</em></a>
                            	<a title="肇嘉浜路沿线(14)" href="javascript:void(0);" onclick="$GB.pageQuery(1,'','4487');" rel="4487">肇嘉浜路沿线<em>(14)</em></a>
                        <span class="clear"></span></p></div>
                    <div class="box1 hide"></div>
                    
                    </dd>
                    </dl>
                
             
            <div class="clear"></div>	
         </div>

<div class="w960 gp_sortWrap cl">
			<p class="fr">
			<span>
				<span id="pageC">1/6</span>
				&nbsp;
				</span>
				<a class="gp_last" title="上一页" href="javascript:void(0);" id="pageP">上一页</a>
				&nbsp;
				<a title="下一页" href="javascript:void(0);" id="pageB">下一页</a>
			</p>
			<p id="gp_sortBtns">
				<span>排序：</span>
				<a rel="default" title="默认排序" id="gp_def" class="gp_sortDef" href="javascript:void(0);">默认</a>
				<a rel="sale" class="" title="按销量从高到低排序" href="javascript:void(0);">销量</a>
				
				<a rel="new" title="按上架时间从近到远排序" href="javascript:void(0);">最新</a>
				<a rel="price" title="按价格排序" href="javascript:void(0);">价格</a>
			</p>
		
		</div>

<div class="blank"></div>

<div class="w960 of">
  <div class="gp_detail_wrap">
     <div class="gp_detail">
					<p class="gp_detail_des">
						<a href="#" target="_blank" title="仅49元！价值238元的iMovie影院视听馆金山店2-3人普通包厢观影一次！不限时段，节假日通用！">【金山区】仅49元！价值238元的iMovie影院视听馆金山...</a>
					</p>
					<a target="_blank" class="gp_detail_img" href="#" title=""><img src="http://image4.suning.cn/vgsimages/groupbuy/0000/00000012/000000128473/000000128473_l.jpg"  alt=""></a>
					
					<div class="gp_detail_price process">
						<a target="_blank" href="#" title="去看看" class="fr">去看看<i class="gp_sp">&nbsp; </i></a>
						<span>
							<i class="gp_sp">&nbsp;</i>￥
							<b>49</b>
						</span>
					</div>
                    <p class="gp_detail_info">
						<em>已购买<b>23</b>件</em>
						<span>原价<i>238</i>元</span>
						<span><b>2.05</b>折</span>
					</p>
					<p class="gp_detail_timer">
					    <input type="hidden" id="000000128473" value="4799659158">
						<span class="process gp_timeFS12" id="time_000000128473">剩余：<b>55</b>天<b>13</b>时<b>13</b>分<b>19</b>秒</span>
					</p>
					<div class="gp_boxShadow"></div>
				</div>
     <div class="gp_detail">
					<p class="gp_detail_des">
						<a href="#" target="_blank" title="仅49元！价值238元的iMovie影院视听馆金山店2-3人普通包厢观影一次！不限时段，节假日通用！">【金山区】仅49元！价值238元的iMovie影院视听馆金山...</a>
					</p>
					<a target="_blank" class="gp_detail_img" href="#" title=""><img src="http://image4.suning.cn/vgsimages/groupbuy/0000/00000012/000000128473/000000128473_l.jpg"  alt=""></a>
					
					<div class="gp_detail_price process">
						<a target="_blank" href="#" title="去看看" class="fr">去看看<i class="gp_sp">&nbsp; </i></a>
						<span>
							<i class="gp_sp">&nbsp;</i>￥
							<b>49</b>
						</span>
					</div>
                    <p class="gp_detail_info">
						<em>已购买<b>23</b>件</em>
						<span>原价<i>238</i>元</span>
						<span><b>2.05</b>折</span>
					</p>
					<p class="gp_detail_timer">
					    <input type="hidden" id="000000128473" value="4799659158">
						<span class="process gp_timeFS12" id="time_000000128473">剩余：<b>55</b>天<b>13</b>时<b>13</b>分<b>19</b>秒</span>
					</p>
					<div class="gp_boxShadow"></div>
		</div>
        <div class="gp_detail">
					<p class="gp_detail_des">
						<a href="#" target="_blank" title="仅49元！价值238元的iMovie影院视听馆金山店2-3人普通包厢观影一次！不限时段，节假日通用！">【金山区】仅49元！价值238元的iMovie影院视听馆金山...</a>
					</p>
					<a target="_blank" class="gp_detail_img" href="#" title=""><img src="http://image4.suning.cn/vgsimages/groupbuy/0000/00000012/000000128473/000000128473_l.jpg" alt=""></a>
					
					<div class="gp_detail_price process">
						<a target="_blank" href="#" title="去看看" class="fr">去看看<i class="gp_sp">&nbsp; </i></a>
						<span>
							<i class="gp_sp">&nbsp;</i>￥
							<b>49</b>
						</span>
					</div>
                    <p class="gp_detail_info">
						<em>已购买<b>23</b>件</em>
						<span>原价<i>238</i>元</span>
						<span><b>2.05</b>折</span>
					</p>
					<p class="gp_detail_timer">
					    <input type="hidden" id="000000128473" value="4799659158">
						<span class="process gp_timeFS12" id="time_000000128473">剩余：<b>55</b>天<b>13</b>时<b>13</b>分<b>19</b>秒</span>
					</p>
					<div class="gp_boxShadow"></div>
				</div>
        <div class="gp_detail">
					<p class="gp_detail_des">
						<a href="#" target="_blank" title="仅49元！价值238元的iMovie影院视听馆金山店2-3人普通包厢观影一次！不限时段，节假日通用！">【金山区】仅49元！价值238元的iMovie影院视听馆金山...</a>
					</p>
					<a target="_blank" class="gp_detail_img" href="#" title=""><img src="http://image4.suning.cn/vgsimages/groupbuy/0000/00000012/000000128473/000000128473_l.jpg" alt=""></a>
					
					<div class="gp_detail_price process">
						<a target="_blank" href="#" title="去看看" class="fr">去看看<i class="gp_sp">&nbsp; </i></a>
						<span>
							<i class="gp_sp">&nbsp;</i>￥
							<b>49</b>
						</span>
					</div>
                    <p class="gp_detail_info">
						<em>已购买<b>23</b>件</em>
						<span>原价<i>238</i>元</span>
						<span><b>2.05</b>折</span>
					</p>
					<p class="gp_detail_timer">
					    <input type="hidden" id="000000128473" value="4799659158">
						<span class="process gp_timeFS12" id="time_000000128473">剩余：<b>55</b>天<b>13</b>时<b>13</b>分<b>19</b>秒</span>
					</p>
					<div class="gp_boxShadow"></div>
				</div>
                
  
  </div>

  <div class="clear"></div>
  <?php echo $this->fetch('library/pages.lbi'); ?>
  <div class="clear"></div>
</div>

    
    
</div>
<div class="blank5"></div>

<div class="f_help">
  <div class="box">
   <div class="helpTitBg clearfix">
    <?php echo $this->fetch('library/help.lbi'); ?>
   </div>
  </div>
</div>



<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
