<?php if ($this->_var['top_goods']): ?>
<div class="tabs-panel sale-goods-list tabs-hide">
					<ul>
						<?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_63653000_1466048971');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_63653000_1466048971']):
        $this->_foreach['index_goods']['iteration']++;
?>
                        <?php if ($this->_foreach['index_goods']['iteration'] < 6): ?>
						<li>
							<dl>
								<dt class="goods-name">
									<a target="_blank" href="<?php echo $this->_var['goods_0_63653000_1466048971']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_63653000_1466048971']['name']); ?>"><?php echo $this->_var['goods_0_63653000_1466048971']['short_name']; ?></a>
								</dt>
								<dd class="goods-thumb">
									<a target="_blank" href="<?php echo $this->_var['goods_0_63653000_1466048971']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_63653000_1466048971']['name']); ?>">
										<img src="<?php echo $this->_var['goods_0_63653000_1466048971']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_63653000_1466048971']['name']); ?>">
									</a>
								</dd>
								<dd class="goods-price">
									商城价：
									<em>
										<?php if ($this->_var['goods_0_63653000_1466048971']['promote_price'] != ""): ?>
										<?php echo $this->_var['goods_0_63653000_1466048971']['promote_price']; ?>
										<?php else: ?>
										<?php echo $this->_var['goods_0_63653000_1466048971']['shop_price']; ?>
										<?php endif; ?>
									</em>
								</dd>
							</dl>
						</li>
                        <?php endif; ?>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				</div>
<?php endif; ?> 
