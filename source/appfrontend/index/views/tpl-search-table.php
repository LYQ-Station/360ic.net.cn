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
	<?php for ($i=0;$i<50;$i++):?>
	<tr>
		<td>
			<div class="hide">
				<address>
				<strong>深圳市xxx公司</strong><br>
				地址：深圳市xxx区xxx<br>
				电话：0755-xxxxxxxx<br>
				电邮：xxxx@xxx.com
				</address>
			</div>
			<a popover="" href="#" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="right" data-original-title="香港美航科技有限公司">香港美航科技有限公司</a>
		</td>
		<td>xxxx</td>
		<td>xxxx</td>
		<td>xxxx</td>
		<td>xxxx</td>
		<td>xxxx</td>
		<td><span class="label label-success">现货</span></td>
		<td>xxxx</td>
		<td>xxxx</td>
		<td><a href="#" class="btn btn-mini btn-info"><i class="icon-plus-sign icon-white"></i>&nbsp;QQ询价</a></td>
	</tr>
	<?php endfor;?>
</table>