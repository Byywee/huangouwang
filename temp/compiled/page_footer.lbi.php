

<div class="blank"></div>

<div id="footer">
<p>
   <?php if ($this->_var['navigator_list']['bottom']): ?>
   <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
        <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>

      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php endif; ?>
</p>
 <div ><?php echo $this->_var['copyright']; ?></div>
</div>

