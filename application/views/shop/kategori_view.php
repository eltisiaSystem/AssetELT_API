
        <div id="content">
            <div class="container">

                <div class="col-md-3">

                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Kategori</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <!-- <a href="category.html">Sapi <span class="badge pull-right">42</span></a> -->
                                    <ul>
                                        <?php foreach($header_sapi as $header_sapi){ ?>
                                            <li><a href="#"><?php echo $header_sapi->ras_kategori; ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="category.html">Kambing  <span class="badge pull-right">123</span></a>
                                    <ul>
                                        <?php foreach($header_kambing as $header_kambing){ ?>
                                            <li><a href="#"><?php echo $header_kambing->ras_kategori; ?></a>
                                            </li>
                                            <?php } ?>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </div>


                    <!-- <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div> -->
                </div>