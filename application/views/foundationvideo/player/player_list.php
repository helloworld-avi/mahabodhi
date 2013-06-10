<h2>See More</h2>
<div style="padding-left: 15px;">
    <?php
    foreach($video as $v){
	?>
    <div class="box">
	<a href="<?php echo base_url('foundation/player/'.$v['category'].'/'.$v['y_id']); ?>">
	<div class="img"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
	<div class="ttl"><?php echo $v['title'];?></div>
	</a>
    </div>
    <?php
    }
    ?>
    
    <!--
    <div class="box">
	<div class="img"><a href="#"><img src="<?php echo base_url().'images/vol8.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
	<div class="ttl"><a href="#">Amrit Bachan</a></div>
    </div>
    <div class="box">
	<div class="img"><a href="#"><img src="<?php echo base_url().'images/vol9.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
	<div class="ttl"><a href="#">Prabachan</a></div>
    </div>
    <div class="box">
	<div class="img"><a href="#"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
	<div class="ttl"><a href="#">Documentry of CHOPEMA MAHA TIRTHAYATRA</a></div>
    </div>
    <div class="box">
	<div class="img"><a href="#"><img src="<?php echo base_url().'images/vol8.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
	<div class="ttl"><a href="#">Amrit Bachan</a></div>
    </div>
    <div class="box">
	<div class="img"><a href="#"><img src="<?php echo base_url().'images/vol9.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
	<div class="ttl"><a href="#">Prabachan</a></div>
    </div>
    <div class="box">
	<div class="img"><a href="#"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
	<div class="ttl"><a href="#">Documentry of CHOPEMA MAHA TIRTHAYATRA</a></div>
    </div>
    <div class="box">
	<div class="img"><a href="#"><img src="<?php echo base_url().'images/vol8.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
	<div class="ttl"><a href="#">Amrit Bachan</a></div>
    </div>
    <div class="box">
	<div class="img"><a href="#"><img src="<?php echo base_url().'images/vol9.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
	<div class="ttl"><a href="#">Prabachan</a></div>
    </div>
    <div class="box">
	<div class="img"><a href="#"><img src="<?php echo base_url().'images/vol9.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
	<div class="ttl"><a href="#">Prabachan</a></div>
    </div>
    <div class="box">
	<div class="img"><a href="#"><img src="<?php echo base_url().'images/vol9.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
	<div class="ttl"><a href="#">Prabachan</a></div>
    </div>
    -->
</div>
