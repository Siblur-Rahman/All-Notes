<style>
.active_properties{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
</style>
<!-- css topics header -->
<?php include'./js_dom_header.php'?>

<div id="main_content"><!-- Start Main Content -->

<div class="mark">
   HTML DOM properties are values (of HTML Elements) that you can set or change. <br> <br>
   A property is a value that you can get or set (like changing the content of an HTML element).
</div>
<?php include './dom_properties/attributes.php'?>
<?php include './dom_properties/classlist.php'?>
<?php include './dom_properties/innerhml.php'?>
<?php include './dom_properties/innertext.php'?>
<?php include './dom_properties/style.php'?>
<?php include './dom_properties/value.php'?>

</div><!-- End Main Content -->
<!--Common footer -->
<?php include('../../common_footer.php') ?>
