<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>

      <div id="show_best_area" class="clearfix goodsBox f_l">
      <?php endif; ?>
      <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <div class="goodsItem2">
             <span class="best"></span>
               <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a><br />
               <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></p>
               <p class="db-price">
                  <span class="db-num market_s ">￥300元</span>
                  <span class="db-vip f1">
                      欢购价<em><?php if ($this->_var['goods']['promote_price'] != ""): ?>
                      <?php echo $this->_var['goods']['promote_price']; ?>
                      <?php else: ?>
                      <?php echo $this->_var['goods']['shop_price']; ?>
                      <?php endif; ?></em>
                  </span>
               </p>
               
            </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     
      <?php if ($this->_var['cat_rec_sign'] != 1): ?>
      </div>
      
  <?php endif; ?>
<?php endif; ?>