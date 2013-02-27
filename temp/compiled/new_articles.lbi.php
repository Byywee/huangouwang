<style type="text/css">
.kuaib{width: 280px;}
.huangou_kb{height: 141px;border: 1px solid #DDD;overflow: hidden;background:#fff;}
.huangou_kb h2{height: 25px;line-height:25px;text-indent: 16px;font-size: 14px;color: black;font-family: "Microsoft YaHei";position: relative;background: #F1F1F1;}
.huangou_kb h2 a{position: absolute;right: 10px;top: 0;font-size: 12px;color: #666;font-weight: normal;font-family: "SimSun";}
.huangou_kb ul li{line-height: 22px;text-indent: 18px;}
</style>
<div class="huangou_kb">
<h2>欢购快报
<a href="#" name="dac_index_lc10720" target="_blank">更多&gt;</a></h2>
<ul>
<?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
  <li>
	[<a href="<?php echo $this->_var['article']['cat_url']; ?>"><?php echo $this->_var['article']['cat_name']; ?></a>] <a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo sub_str($this->_var['article']['short_title'],10); ?></a>
	</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>