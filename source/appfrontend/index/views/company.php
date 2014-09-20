<style type="text/css">

  /* Sticky footer styles
  -------------------------------------------------- */

  html,
  body {
    height: 100%;
    /* The html and body elements cannot have any padding or margin. */
  }

  /* Wrapper for page content to push down footer */
  #wrap {
    min-height: 100%;
    height: auto !important;
    height: 100%;
    /* Negative indent footer by it's height */
    margin: 0 auto -60px;
  }

  /* Set the fixed height of the footer here */
  #push,
  #footer {
    height: 60px;
  }
  #footer {
    background-color: #f5f5f5;
  }

  /* Lastly, apply responsive CSS fixes as necessary */
  @media (max-width: 767px) {
    #footer {
      margin-left: -20px;
      margin-right: -20px;
      padding-left: 20px;
      padding-right: 20px;
    }
  }



  /* Custom page CSS
  -------------------------------------------------- */
  /* Not required for template or sticky footer method. */

  #wrap > .container {
    padding-top: 60px;
  }
  .container .credit {
    margin: 20px 0;
  }

  code {
    font-size: 80%;
  }

</style>
<div id="wrap">

  <!-- Fixed navbar -->
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="#">360ic</a>
        <ul class="nav pull-right">
        	<li><a href="#">登出</a></li>
        </ul>
        
      </div>
    </div>
  </div>

  <div class="container">
    <div class="page-header">
      <h3>深圳市xxx公司</h3>
    </div>
    <p class="lead">
    	<dl class="dl-horizontal">
    		<dt>地址：</dt>
    		<dd>深圳市xxx区xxx</dd>
    	</dl>
    	<dl class="dl-horizontal">
    		<dt>电话：</dt>
    		<dd>0755-xxxxxxxx</dd>
    	</dl>
    	<dl class="dl-horizontal">
    		<dt>传真：</dt>
    		<dd>0755-xxxxxxxx</dd>
    	</dl>
    	<dl class="dl-horizontal">
    		<dt>电邮：</dt>
    		<dd>xxxx@xxx.com</dd>
    	</dl>
    	<dl class="dl-horizontal">
    		<dt>联系人：</dt>
    		<dd>xxxx@xxx.com</dd>
    	</dl>
    	<dl class="dl-horizontal">
    		<dt>联系人电话：</dt>
    		<dd>xxxx@xxx.com</dd>
    	</dl>
    	<dl class="dl-horizontal">
    		<dt>最大上传库存数量：</dt>
    		<dd><code>100,000</code></dd>
    	</dl>
    </p>
    
	<ul class="nav nav-tabs">
	    <li class="active"><a href="#tab1" data-toggle="tab">上传产品</a></li>
	    <li><a href="#tab2" data-toggle="tab">产品列表</a></li>
	</ul>

	<div class="tab-content" id="myTabContent">
		<div id="tab1" class="tab-pane active">
			<form action="<?=$this->buildUrl('upload')?>">
				<dl class="dl-horizontal">
	                <dt><label>产品列表文件</label></dt>
	                <dd><input type="file"></dd>
                </dl>
                <dl class="dl-horizontal">
	                <dt><label>加入方式</label></dt>
	                <dd>
	                	<label class="radio"><input type="radio" name="op" value="1">覆盖</label>
						<label class="radio"><input type="radio" name="op" value="2" checked>追加</label>
	                </dd>
                </dl>
                <dl class="dl-horizontal">
	                <dt></dt>
	                <dd><button class="btn">上传</button></dd>
                </dl>
			</form>
		</div>
		<div id="tab2" class="tab-pane">
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
				</tr>
				<?php if (!count($this->items)): ?>
				<tr>
					<td colspan="10" style="text-align:center">没有库存。</td>
				</tr>
				<?php else: foreach ($this->items as $item):?>
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
					<td><?=$item['partno']?></td>
					<td><?=$item['mfg']?></td>
					<td><?=$item['qty']?></td>
					<td><?=$item['dc']?></td>
					<td><?=$item['pack']?></td>
					<td><span class="label label-success">现货</span></td>
					<td><?=$item['describe']?></td>
					<td><?=$item['warehouse']?></td>
				</tr>
				<?php endforeach; endif;?>
			</table>
		</div>
	</div>
	  
  </div>
  
  <div id="push"></div>
</div>

<div id="footer">
  <div class="container">
    <p class="muted credit">360ic.net.cn ®2014. 技术支持:<a href="it-support@360ic.net.cn">it-support@360ic.net.cn</a>&nbsp;&nbsp;&nbsp;商务支持:<a href="trade-support@360ic.net.cn">trade-support@360ic.net.cn</a></p>
  </div>
</div>