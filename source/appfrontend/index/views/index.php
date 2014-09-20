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

.form-msearch {
    border: 1px solid #e5e5e5;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    margin: 0 auto 20px;
    position: relative;
}

.form-msearch .bg {
	position: absolute;
	top:0;
	right: 0;
	bottom: 0;
	left: 0;
	background-image: url("http://www.taopic.com/uploads/allimg/110602/1900-11060219305882.jpg");
	z-index: -100;
	opacity: 0.2;
}

/*
.form-msearch .help-block a {
	color: red;
}
*/

.form-horizontal .control-group {
	margin: 0;
}

.idx-input-search {
	width: 700px;
}

.fix-head {
	position: fixed;
	top:0;
	z-index: 9999;
	background-color: white;
}
</style>

<div class="container main_page">

	<div id="head">
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
		
		<form class="form-horizontal form-msearch" name="form-search" action="<?=$this->buildUrl('ajaxsearch')?>">
			<div class="control-group">
				<label class="control-label">LOGO</label>
				<div class="controls">
				    <div class="input-append">
				    <input class="idx-input-search" type="text" name="keyword">
				    <button class="btn btn-primary" type="button" mid="btnSearch">&nbsp;查&nbsp;询&nbsp;</button>
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
	</div>
    
    <div id="result_list"></div>
    
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
<?= JsUtils::ob_start(); ?>
<script type="text/javascript">
$(function () {
	var form = document.forms['form-search'];

	var head = $('#head');
	var fixed_head = head.clone();
	var fixed_head_hided = true;
	fixed_head.appendTo($('.main_page')).addClass('fix-head').css({'width':head.outerWidth()}).hide();
	
	var head_offset_top = head.offset().top;
	var win = $(window);
	win.scroll(on_window_scroll);
	
	function on_window_scroll ()
	{
		if (0 <= win.scrollTop() - head_offset_top)
		{
			if (fixed_head_hided)
			{
				fixed_head_hided = false;
				fixed_head.show();
			}
		}
		else
		{
			if (!fixed_head_hided)
			{
				fixed_head_hided = true;
				fixed_head.hide();
			}
		}
	}
	
	on_window_scroll();
	
	$('button[mid=btnSearch]').click(function (evn) {
		evn.preventDefault();
		
		$.ajax({
			url:form.action,
			data:$.param({keyword:form['keyword'].value}),
			complete:fn_search_complete
		});
	});
	
	function fn_search_complete (data)
	{
		$('#result_list').html(data.responseText).find('a[popover]').popover({
			html:true,
			content:function () {
				return $(this).prev().html();
			}
		}).mouseenter(function () {
			var self = $(this);
			self.popover('show').next().mouseleave(function () {
				self.popover('hide');
			});
		}).mouseleave(function (evn) {
			if (!$(evn.relatedTarget).parentsUntil('[class*=popover]').length)
			{
				return;
			}
			$(this).popover('hide');
		});
		
		$('#result_list').find('.text-center>a').click(function (evn) {
			evn.preventDefault();
			
			$.ajax({
				url:this.href,
				data:$.param({keyword:form['keyword'].value}),
				complete:fn_search_complete
			});
		});		
	}
});
</script>
<?= JsUtils::ob_end(); ?>