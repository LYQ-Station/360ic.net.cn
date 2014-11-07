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
  
  .page-footer {
	  border-top: 1px solid #ccc;
	  margin: 20px 0 30px;
	  padding-top: 9px;
  }

</style>
<div id="wrap">
	<?=$this->render('tpl-nav-bar.php');?>

  <!-- Begin page content -->
  <div class="container">
    <div class="page-header">
      <h1>关于我们</h1>
    </div>
    <p>
	    这里是360ic.com.cn
    </p>
  </div>

  <div id="push"></div>
</div>

<?=$this->render('tpl-footer.php');?>