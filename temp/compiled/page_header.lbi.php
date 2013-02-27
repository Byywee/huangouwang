<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.3.2.min.js,jquery.json-1.3.js')); ?>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>

<font id="ECS_MEMBERZONE"> </font>


<div class="header_bg clearfix">
<div class="Header clearfix">
  <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
  <div class="logo"><a href="index.php" name="top"><img src="themes/default/images/logo.png" /></a></div>
  <div class="mid">
      
    <div id="search"  class="header-search">
      
      <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  style="_position:relative; top:5px;" class="search-form">
       
       <input name="keywords" type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" class="search-input"/>
       <input name="imageField" type="submit" value="" class="search-btn" style="cursor:pointer;" />
       </form>
       <div class="keys f_l">
       <script type="text/javascript">
        
        <!--
        function checkSearchForm()
        {
            if(document.getElementById('keyword').value)
            {
                return true;
            }
            else
            {
                alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
                return false;
            }
        }
        -->
        
        </script>
        <?php if ($this->_var['searchkeywords']): ?>
       <?php echo $this->_var['lang']['hot_search']; ?> ：
       <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
       <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       <?php endif; ?>
      </div>
    </div>
      
  </div>
  <div class="head_r">
      <div class="qq_jiesuan" onmouseover="this.className='qq_jiesuan_on'" onmouseout="this.className='qq_jiesuan'">
    <a class="shop-packet" href="flow.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我的购物车</a><div class="jiesuan_t"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>

    </div>
  </div>
</div>
</div>
<div class="mainNav_bg clearfix">
 <div id="mainNav">
    <div class="mc_head">
    全部分类 
    <div style="POSITION: absolute; TOP: 36px; LEFT: 0px" class="allsort fl allsorthover">
        <div class="category fl">
            <div class="mc">
                <div class="item fore " onmouseover="this.className='item fore hover '" onmouseout="this.className='item fore '"><span class="icon1">
                <h3 style="FONT-SIZE: 14px; FONT-WEIGHT: bold"><a href="category.htm?id=16">彩妆 
                <br><font style="COLOR: #666; FONT-SIZE: 12px; FONT-WEIGHT: lighter">BB霜</font> 
                <font style="COLOR: #666; FONT-SIZE: 12px; FONT-WEIGHT: lighter">睫毛膏</font> 
                <font style="COLOR: #666; FONT-SIZE: 12px; FONT-WEIGHT: lighter">眼影</font> 
                </a></h3></span>
                <div class="i-mc">
                
                <div class="subitem">
                <dl class="fore">
                  <dt><a href="category.htm?id=21">BB霜</a> 
                  </dt>
                  <dd></dd></dl>
                <dl class="fore">
                  <dt><a href="category.htm?id=22">睫毛膏</a> 
                  </dt>
                  <dd></dd></dl>
                <dl class="fore">
                  <dt><a href="category.htm?id=117">眼影</a> 
                  </dt>
                  <dd></dd></dl>
                <dl class="fore">
                  <dt><a href="category.htm?id=118">眼线</a> 
                  </dt>
                  <dd></dd></dl>
                <dl class="fore">
                  <dt><a href="category.htm?id=119">眉笔眉粉</a> 
                  </dt>
                  <dd></dd></dl>
                <dl class="fore">
                  <dt><a href="category.htm?id=120">粉底遮瑕</a> 
                  </dt>
                  <dd></dd></dl>
                <dl class="fore">
                  <dt><a href="category.htm?id=121">粉饼</a> 
                  </dt>
                  <dd></dd></dl>
                <dl class="fore">
                  <dt><a href="category.htm?id=122">散粉</a> 
                  </dt>
                  <dd></dd></dl>
                <dl class="fore">
                  <dt><a href="category.htm?id=123">腮红</a> 
                  </dt>
                  <dd></dd></dl>
                <dl class="fore">
                  <dt><a href="category.htm?id=124">美甲</a> 
                  </dt>
                  <dd></dd></dl>
                <dl class="fore">
                  <dt><a href="category.htm?id=125">唇膏唇彩</a> 
                  </dt>
                  <dd></dd></dl></div>
                <div id="JD_sort_a" class="f_r">
                <dl class="brands">
                  <dt>推荐品牌 </dt>
                  <dd><em><a href="category.htm?id=1&amp;cat=16">诺基亚</a></em><em><a href="category.htm?id=7&amp;cat=16">索爱</a></em><em><a href="category.htm?id=2&amp;cat=16">摩托罗拉</a></em><em><a href="category.htm?id=21&amp;cat=16">测试品牌4</a></em><em><a href="category.htm?id=19&amp;cat=16">测试品牌2</a></em></dd></dl>
                
                    </div></div></div>
                <div class="item_bottom">
                    <a class="left_zi" href="category.htm?intro=hot">风云榜</a> 
                    <font class="right_zi">热卖排行</font>
                </div>
            </div>
        </div>
    </div>
    
  </div>
    <ul class="mainmenu f_l">
      
      <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
      <li class="mainmenu_li">
         <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?><span></span></a>
      </li>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

    </ul>
    <div class="f_r" style="position: absolute;right: 80px;top: 6px;">
    <wb:follow-button uid="2991975565" type="red_1" width="67" height="24" ></wb:follow-button>
    </div>
 </div>
</div>
