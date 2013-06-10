<div id="foundation_rit_bdy">
    <div class="scroll">
	<div class="scrollContainer">
            <div class="panel" id="teaching">
	    <h2>Teaching</h2>
	    <?php foreach($videos['teaching'] as $t){
		?>
		<div class="box">
		    <div class="img"><a href="<?php echo base_url('foundation/player/teaching/'.$t['y_id']); ?>"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#"><?php echo $t['title']; ?></a></div>
		</div>
		<?php
	    }
	    ?>
	    
	    <!--
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">CHOPEMA MAHA TIRTHAYATRA</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol8.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Amrit Bachan</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol9.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Prabachan</a></div>
		</div>
		<br>
	    -->
	    
	    
		<div class="box1"><a href="<?php echo base_url().'foundation/teaching/'; ?>">See More</a></div>		
	    </div>
            <!-- end of home -->
            <div class="panel" id="meditation">
	    <h2>Meditation</h2>
	    <?php foreach($videos['meditation'] as $t){
		?>
		<div class="box">
		    <div class="img"><a href="<?php echo base_url('foundation/player/meditation/'.$t['y_id']); ?>"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#"><?php echo $t['title']; ?></a></div>
		</div>
		<?php
	    }
	    ?>
	    <!--
	    <div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol3.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Documentry of CHOPEMA MAHA TIRTHAYATRA</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol7.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Amrit Bachan</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol14.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Prabachan</a></div>
		</div>
	    -->
		<div class="box1"><a href="<?php echo base_url().'foundation/meditation/'; ?>">See More</a></div>
	    </div>
	    <div class="panel" id="pilgrimage">
	    <h2>Pilgrimage</h2>
	    <?php foreach($videos['pilgrimage'] as $t){
		?>
		<div class="box">
		    <div class="img"><a href="<?php echo base_url('foundation/player/pilgrimage/'.$t['y_id']); ?>"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#"><?php echo $t['title']; ?></a></div>
		</div>
		<?php
	    }
	    ?>
	    
	    
	    <!--
	    <div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol12.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Documentry of CHOPEMA MAHA TIRTHAYATRA</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol8.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Amrit Bachan</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol7.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Prabachan</a></div>
		</div>
	    -->
		
		<div class="box1"><a href="<?php echo base_url().'foundation/pilgrimage/'; ?>">See More</a></div>
	    </div>
	    <div class="panel" id="workshop">
	    <h2>Workshop</h2>
	    <?php foreach($videos['workshop'] as $t){
		?>
		<div class="box">
		    <div class="img"><a href="<?php echo base_url('foundation/player/workshop/'.$t['y_id']); ?>"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#"><?php echo $t['title']; ?></a></div>
		</div>
		<?php
	    }
	    ?>
	    
	    <!--
	    <div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol12.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Documentry of CHOPEMA MAHA TIRTHAYATRA</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol14.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Amrit Bachan</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol11.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Prabachan</a></div>
		</div>
	    -->
		<div class="box1"><a href="<?php echo base_url().'foundation/workshop/'; ?>">See More</a></div>
	    </div>
	    <div class="panel" id="eventts">
	    <h2>Events</h2>
	    <?php foreach($videos['event'] as $t){
		?>
		<div class="box">
		    <div class="img"><a href="<?php echo base_url('foundation/player/event'.$t['y_id']); ?>"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#"><?php echo $t['title']; ?></a></div>
		</div>
		<?php
	    }
	    ?>
	    
	    <!--
	    <div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol14.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Documentry of CHOPEMA MAHA TIRTHAYATRA</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol12.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Amrit Bachan</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol3.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Prabachan</a></div>
		</div>
	    -->
		<div class="box1"><a href="<?php echo base_url().'foundation/event/'; ?>">See More</a></div>
	    </div>
	    <div class="panel" id="biography">
	    <h2>Biography</h2>
	    <?php foreach($videos['biography'] as $t){
		?>
		<div class="box">
		    <div class="img"><a href="<?php echo base_url('foundation/player/biography/'.$t['y_id']); ?>"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#"><?php echo $t['title']; ?></a></div>
		</div>
		<?php
	    }
	    ?>
	    
	    <!--
	    <div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol8.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Documentry of CHOPEMA MAHA TIRTHAYATRA</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol7.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Amrit Bachan</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol14.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Prabachan</a></div>
		</div>
	    -->
		<div class="box1"><a href="<?php echo base_url().'foundation/biography/'; ?>"">See More</a></div>
	    </div>
	    <div class="panel" id="documentry">
	    <h2>Documentry</h2>
	    <?php foreach($videos['documentry'] as $t){
		?>
		<div class="box">
		    <div class="img"><a href="<?php echo base_url('foundation/player/documentry/'.$t['y_id']); ?>"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#"><?php echo $t['title']; ?></a></div>
		</div>
		<?php
	    }
	    ?>
	    
	    <!--
	    <div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Documentry of CHOPEMA MAHA TIRTHAYATRA</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol12.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Amrit Bachan</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol13.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Prabachan</a></div>
		</div>
	    -->
		<div class="box1"><a href="<?php echo base_url().'foundation/documentry/'; ?>">See More</a></div>
	    </div>
	    <div class="panel" id="other" >
	    <h2>Other</h2>
	    <?php foreach($videos['other'] as $t){
		?>
		<div class="box">
		    <a href="<?php echo base_url('foundation/player/other/'.$t['y_id']); ?>">
		    <div class="img"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><?php echo $t['title']; ?></div>
		    </a>
		</div>
		<?php
	    }
	    ?>
	    
	    <!--
	    <div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol2.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Documentry of CHOPEMA MAHA TIRTHAYATRA</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol11.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Amrit Bachan</a></div>
		</div>
		<div class="box">
		    <div class="img"><a href="#"><img src="<?php echo base_url().'images/vol7.jpg'; ?>" alt="Image 3" width="206px" height="195px"/></div>
		    <div class="ttl"><a href="#">Prabachan</a></div>
		</div>
	    -->
		<div class="box1"><a href="<?php echo base_url().'foundation/other/'; ?>">See More</a></div>
	    </div>
        </div>
    </div>
</div>