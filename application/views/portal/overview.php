<!-- body -->
<div class="container pt-0">
    <div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(<?php echo base_url('assets/img/jumbotron.jpg') ?>);">
        <h2 class="mb-4">
            DESA LAKSANAMEKAR
        </h2>
        <p class="lead mb-4">
            Jl. Raya Batujajar No.270, Laksanamekar, Padalarang, Kabupaten Bandung Barat, Jawa Barat 40553
        </p>
        <a href="https://www.google.com/maps/place/Kantor+Kepala+Desa+Laksanamekar/@-6.8825935,107.501757,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e4e79b10b24f:0xef6af5613ac05bcd!8m2!3d-6.8825925!4d107.5039195?hl=ID" target="#" class="btn btn-outline-light">
            <i class="fas fa-map-marker-alt"></i> Google Map</a>
    </div>
</div>

<div class="container card">
    <!-- carousel -->
    <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            echo "<script type='text/javascript'>alert('$jumlahberita');</script>";
            for ($i = 0; $i < $jumlahberita;) {
                echo '<li data-target="#transition-timer-carousel" data-slide-to="' . $i . '"';
                if ($i == 0) {
                    echo 'class="active"';
                }
                echo '></li>';
                $i++;
            }
            ?>
        </ol>

        <div class="carousel-inner">
            <?php $i = 0; ?>
            <?php foreach ($berita as $wx) : ?>
                <div class="carousel-item<?= $i === 0 ? ' active' : '' ?>">
                    <img class="d-block w-100" src="<?php echo base_url('assets/img/berita/' . $wx['image']) ?>" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $wx['judul'] ?></h5>
                        <p> By : <?php echo $wx['nama'] ?> </p>
                        <a href="" target="#" class="btn btn-outline-light">
                            Readmore</a>
                    </div>
                </div>
            <?php $i++;
            endforeach ?>
        </div>

        <!-- control -->
        <a class="carousel-control-prev" href="#transition-timer-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#transition-timer-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end carousel -->


    <div class="card-deck">
        <!-- showcase berita -->
        <?php $i = 1; ?>
        <?php foreach ($berita as $w) : ?>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/berita/' . $w['image']) ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $w['judul'] ?> </h5>
                    <?php $w['judul'] ?>
                </div>
                <div class="card-footer">

                    <small class="text-muted"> <?php echo $w['nama'] ?> </small>
                </div>
            </div>
            <?php $i++; ?>
        <?php endforeach ?>
        <!-- end showcase berita -->
    </div>

</div>
<!-- end body -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 spanduk" src="<?php echo base_url('assets/img/jumbotron3.jpg') ?>" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/jumbotron1.jpg') ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/jumbotron2.jpg') ?>" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>