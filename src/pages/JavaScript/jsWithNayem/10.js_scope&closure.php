<!-- common_header -->
<?php include('../../common_header.php') ?>
<!-- style -->
<style>
.scope_closure_active{
    background: #BB2966;
    line-height: 30px;
    color: white !important;
}
/* .basic_dropdown{
   display: block !important;
} */
.to_jump{
   padding-top: 110px;
}
p{
   display: inline-block;
}
</style>

<!-- left-bar -->

   <?php include('../left_bar.php') ?>

<!-- right-bar -->

   <?php include('../right_bar.php') ?>
<!-- Start main Content-->
<?php include'./10.js_scope%26closureText.php'?>
<!-- End main Content-->

<!-- footer -->
<?php include('../../common_footer.php') ?>
<script>
   $("#toggle_1_1").click(function(){
      $(".code_1_1").toggle();     
   })
</script>
