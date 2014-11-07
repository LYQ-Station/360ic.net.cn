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
    <div class="nav-collapse collapse">
      <ul class="nav">
        <li><a href="/">首页</a></li>
        <li <?=HTMLUtils::pick_value2($this->request->getActionName()=='signup', 'class="active"')?>><a href="<?=$this->buildUrl('signup')?>">注册会员</a></li>
        <li <?=HTMLUtils::pick_value2($this->request->getActionName()=='about', 'class="active"')?>><a href="<?=$this->buildUrl('about')?>">关于我们</a></li>
      </ul>
    </div>
  </div>
</div>
</div>