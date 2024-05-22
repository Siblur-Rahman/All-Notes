<style>
   .active_how_to{
      background-color: var(--activeBG-1);
      color: var(--activeColor);
   }
   /* .panel{
      border: 5px solid blue;
      padding: 10px;
   } */
   </style>
   <!-- common header -->
<?php include'../../common_header.php'?>
<div id="main_content"><!-- Start Main Content -->
   <!--  -->
   <h2 class="accordion" id="">Text return & set from/to Element</h2>
   <div class="panel">
      <?php include './topics/text_return_set.php'?>
   </div><!-- End panel-->
   <!--  -->
   <h2 class="accordion">Insert Element </h2>
   <div class="panel">
      <?php include './topics/insert_element.php'?>
   </div><!-- End panel-->

      <!--  -->
   <h2 class="accordion">About CSS Style</h2>
   <div class="panel">
      <?php include './topics/style.php'?>
   </div><!-- End panel-->

   <!--  -->
   <h2 class="accordion">About CSS Class</h2>
   <div class="panel">
      <?php include './topics/class.php'?>
   </div><!-- End panel-->
   <!--  -->
   <h2 class="accordion">Create Element</h2>
   <div class="panel">
      <?php include './topics/create_element.php'?>
   </div><!-- End panel-->

</div><!-- End Main Content -->
<!--common footer -->
<?php include('../../common_footer.php') ?>
<!-- <script src="../this_common.js"></script> -->
