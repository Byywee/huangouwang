<div class="g-top">
    <div class="g-top-wrap">
        
        
        <?php if ($this->_var['user_info']): ?>
        <dl class="user-panel">
            <dd class="login-info" id="js-login-info"><?php echo $this->_var['lang']['hello']; ?>，<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！
            <a href="user.php" class="top-login"><?php echo $this->_var['lang']['user_center']; ?></a>
            <a href="user.php?act=logout" class="top-regiter"><?php echo $this->_var['lang']['user_logout']; ?></a></dd>
            <dd>
                <a href="#">充值</a>
            </dd>
            <dd>
                <a href="#">我的订单</a>
            </dd>
            <dd>
                <a href="#">收藏夹</a>
            </dd>            <dd>
                <a href="#" target="_blank">帮助中心</a>
            </dd>
            
            <dd><strong>订购热线：</strong>4006-002-1308</dd>
            
        </dl>
        <?php else: ?>
                   <dl class="user-panel">
            <dd class="login-info" id="js-login-info"><?php echo $this->_var['lang']['welcome']; ?>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="user.php" class="top-login">登录</a>
            <a href="user.php?act=register" class="top-regiter">注册</a></dd>
            <dd>
                <a href="#">充值</a>
            </dd>
            <dd>
                <a href="#">我的订单</a>
            </dd>
            <dd>
                <a href="#">收藏夹</a>
            </dd>
            <dd>
                <a href="#" target="_blank">帮助中心</a>
            </dd>
            
            <dd><strong>订购热线：</strong>4006-002-1308</dd>
            
        </dl>
        <?php endif; ?>
    </div>
</div>