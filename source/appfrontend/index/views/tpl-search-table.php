<table class="table table-striped table-hover">
	<tr>
		<th>供应商</th>
		<th>型号</th>
		<th>厂商</th>
		<th>数量</th>
		<th>批号</th>
		<th>封装</th>
		<th>交货期</th>
		<th>备注</th>
		<th>仓库</th>
		<th width="80">询价</th>
	</tr>
	<?php if (!count($this->items)): ?>
	<tr>
		<td colspan="10" style="text-align:center">没有查询到相关型号的库存。</td>
	</tr>
	<?php else: foreach ($this->items as $item):?>
	<tr>
		<td>
			<div class="hide">
				<address>
				地址：<?=$item['address']?><br>
				电话：<?=$item['phone']?>
				</address>
			</div>
			<a popover="" href="#" data-placement="right" data-original-title="<?=$item['company']?>"><?=$item['company']?></a>
		</td>
		<td><?=$item['model']?></td>
		<td><?=$item['vandor']?></td>
		<td><?=$item['qty']?></td>
		<td><?=$item['dc']?></td>
		<td><?=$item['pack']?></td>
		<td><span class="label label-success"><?=$item['type']?></span></td>
		<td><?=$item['describe']?></td>
		<td><?=$item['warehouse']?></td>
		<td><a href="#" class="btn btn-mini btn-info"><i class="icon-plus-sign icon-white"></i>&nbsp;QQ询价</a></td>
	</tr>
	<?php endforeach; endif;?>
</table>
<?php if (count($this->items)): echo $this->navigator; endif; ?>
