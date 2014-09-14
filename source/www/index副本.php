<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>360ic</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<link href="/css/bootstrap.css" rel="stylesheet">
		<link href="/css/bootstrap-responsive.css" rel="stylesheet">
		
		<style>
			.main_page {
				margin-top: 150px;
			}
			.nav-tabs > li > a, .nav-pills > li > a {
			    line-height: 14px;
			    margin-right: 2px;
			    padding-left: 4px;
			    padding-right: 4px;
			}
			
			.navbar {
				margin-bottom: 5px;
			}
			
			.navbar-inner {
			    background-color: white;
			    background-image: none;
			    border: none;
			    min-height: 40px;
			    padding-left: 20px;
			    padding-right: 20px;
			    box-shadow: none;
			}
			
			.form-horizontal {
				margin: 10px 0;
				padding-top: 50px;
				padding-bottom: 25px;
			}
			
			.form-signin {
			    background-color: #fff;
			    border: 1px solid #e5e5e5;
			    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
			    margin: 0 auto 20px;
			}
			
			.form-horizontal .control-group {
				margin: 0;
			}

			.idx-input-search {
				width: 700px;
			}
		</style>
	</head>
	
	<body>
	
		<div class="container main_page">
			
			<div class="navbar">
	          <div class="navbar-inner">
	            <div class="nav-collapse collapse">
	              <ul class="nav">
	                <li><a href="#">登录</a></li>
	                <li><a href="#about">免费注册</a></li>
	                <li><a href="#contact">关于我们</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
			
			<form class="form-horizontal form-signin">
				<div class="control-group">
					<label class="control-label">LOGO</label>
					<div class="controls">
					    <div class="input-append">
					    <input class="idx-input-search" type="text">
					    <button class="btn btn-primary" type="button" id="btnSearch">&nbsp;查&nbsp;询&nbsp;</button>
					    </div>
					    <span class="help-block">
					    	<ul class="nav nav-pills">
					          <li><a href="#">A</a></li>
					          <li><a href="#">B</a></li>
					          <li><a href="#">C</a></li>
					          <li><a href="#">D</a></li>
					          <li><a href="#">E</a></li>
					          <li><a href="#">F</a></li>
					          <li><a href="#">G</a></li>
					          <li><a href="#">H</a></li>
					          <li><a href="#">I</a></li>
					          <li><a href="#">J</a></li>
					          <li><a href="#">K</a></li>
					          <li><a href="#">L</a></li>
					          <li><a href="#">M</a></li>
					          <li><a href="#">N</a></li>
					          <li><a href="#">O</a></li>
					          <li><a href="#">P</a></li>
					          <li><a href="#">Q</a></li>
					          <li><a href="#">R</a></li>
					          <li><a href="#">S</a></li>
					          <li><a href="#">T</a></li>
					          <li><a href="#">U</a></li>
					          <li><a href="#">V</a></li>
					          <li><a href="#">W</a></li>
					          <li><a href="#">X</a></li>
					          <li><a href="#">Y</a></li>
					          <li><a href="#">Z</a></li>
					          <li><a href="#">0</a></li>
					          <li><a href="#">1</a></li>
					          <li><a href="#">2</a></li>
					          <li><a href="#">3</a></li>
					          <li><a href="#">4</a></li>
					          <li><a href="#">5</a></li>
					          <li><a href="#">6</a></li>
					          <li><a href="#">7</a></li>
					          <li><a href="#">8</a></li>
					          <li><a href="#">9</a></li>
					        </ul>
					    </span>
					</div>
				</div>
		    </form>
		    
		    <div>
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
		    			<th>询价</th>
		    		</tr>
		    		<?php for ($i=0;$i<50;$i++):?>
		    		<tr>
		    			<td>xxxx</td>
		    			<td>xxxx</td>
		    			<td>xxxx</td>
		    			<td>xxxx</td>
		    			<td>xxxx</td>
		    			<td>xxxx</td>
		    			<td>xxxx</td>
		    			<td>xxxx</td>
		    			<td>xxxx</td>
		    			<td>xxxx</td>
		    		</tr>
		    		<?php endfor;?>
		    	</table>
		    </div>
		    
		    <div>
		        <p>
			        <address>
					<strong>深圳市xxx公司</strong> 2010-2014 版权所有<br>
					地址：深圳市xxx区xxx<br>
					电话：0755-xxxxxxxx<br>
					电邮：xxxx@xxx.com
					</address>
				</p>
			</div>
		</div>
		
		<script src="/js/jquery.js"></script>
		<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript">
$.ajaxSetup({
    global: false,
    type: 'POST',
    dataType: 'json'
});

$(function () {
	$('#btnSearch').click(function (evn) {
		evn.preventDefault();
		
	})
});
</script>
	</body>
</html>