<div class="container">
    <div class="col-md-12">
        <div id="main-slider">
            <?php foreach($slider as $slider){ ?>
            <div class="item">
                <img src="<?php echo base_url('assets/uploads/slider/thumbs/' . $slider->path_file) ?>" alt="" class="img-responsive">
            </div>
            <?php } ?>
        </div>
        <!-- /#main-slider -->

    </div>
</div>