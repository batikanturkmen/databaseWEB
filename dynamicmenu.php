
<?php include("bootstrap.php") ?>
<br>
<br>
<br>
<ul class="nav nav-tabs" id="rowTab">
    <li class="active"><a href="#personal-info" data-toggle="tab">Calculate Price</a></li>
    <li><a href="#Employment-info" data-toggle="tab">Track Cargo</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="personal-info">
      <?php include("calculate.php") ?>
    </body>
    </div>

    <div class="tab-pane" id="Employment-info">
        <?php include("trackcargo.php") ?>
    </div>

</div>


<!--
<ul class="nav nav-tabs nav-justified">
  <li class="active"><a href="calculate.php">Calculate</a></li>
  <li><a href="hebelek.php">Hebelek</a></li>
</ul>-->