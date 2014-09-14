<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?=$this->headMeta()?>
<?=$this->headTitle()?>
<?=$this->headLink()?>
<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body class="iframe_body iframe-mainbar">
<?=$this->layout()->content?>
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<?=$this->headScript()?>
<script type="text/javascript">
$.ajaxSetup({
    global:false,
    type:'POST',
    dataType:'json'
});
</script>
<?=JsUtils::ob_flush()?>
</body>
</html>
