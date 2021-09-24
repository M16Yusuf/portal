<!-- body -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/jumbotron1.jpg') ?>" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/jumbotron2.jpg') ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/jumbotron3.jpg') ?>" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
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