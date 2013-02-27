
<style type="text/css">
.list {height:auto; margin:0px 5px 5px 5px; padding-top:10px;line-height:24px;}
.list dt {color:#676767;}
.list dt a {float:left;}
.list dt span {float:right; cursor:pointer; display:block; height:11px; width:11px; line-height:0; margin-top:6px; margin-right:5px; background-image:url(http://i1.quwan.com/themes/default/imgs/catogry/newchannel_bg.gif); background-repeat:no-repeat;}
.son {background-position:-153px -22px;}
.soff {background-position:-164px -22px;}
.list dd {padding-left:16px;}
#list_on {background-position:-200px -3px;}
.wrapa{padding: 5px;border-top: solid 2px #C43F52;border-right: solid 1px #C43F52;border-bottom: solid 1px #C43F52;border-left: solid 1px #C43F52;overflow: hidden;margin-bottom: 10px;clear: both;}
</style>
<script type="text/javascript">
$(document).ready(function(){
	//列表页左侧列表弹出操作事件
	$('.son').click( function(){
		if($(this).hasClass('soff')){   
			//alert('打开的');
			$(this).removeClass("soff");
			
		　　 $(this).parent().parent().find('dd').hide();
		}
		else{
			if(!$(this).hasClass('soff')){
				//alert('关闭的');		
				$(this).addClass("soff");
				$(this).parent().parent().find('dd').show();
			}	
		}
	  })
})
</script>
<div class="box">
 <div class="box_1">
  <div id="category_tree" class="sidebar_list list">
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
     <dl>
     <dt><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a><span class="son soff"></span><div style="clear:both;"></div></dt>
     <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
     <dd><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dd>
       <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
       <dd>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></dd>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       
       </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>
 </div>
</div>
<div class="blank5"></div>
