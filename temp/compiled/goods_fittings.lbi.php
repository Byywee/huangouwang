<?php if ($this->_var['fittings']): ?>
<div class="box">
 <div class="box_1">
  <h3 class="title_1"><span><?php echo $this->_var['lang']['accessories_releate']; ?></span></h3>
  <div class="boxCenterList clearfix">
    <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_31220700_1359102490');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_31220700_1359102490']):
?>
    <ul class="clearfix">
      <li class="goodsimg">
      <a href="<?php echo $this->_var['goods_0_31220700_1359102490']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_31220700_1359102490']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_31220700_1359102490']['name']); ?>" class="B_blue" /></a>
      </li>
      <li>
      <a href="<?php echo $this->_var['goods_0_31220700_1359102490']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_31220700_1359102490']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_31220700_1359102490']['short_name']); ?></a><br />
      <?php echo $this->_var['lang']['fittings_price']; ?><font class="f1"><?php echo $this->_var['goods_0_31220700_1359102490']['fittings_price']; ?></font><br />
      </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
 </div>
</div>
<div class="blank5"></div>
<?php endif; ?>




