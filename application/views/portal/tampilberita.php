<!-- Body -->

<div class="container card">
    <div class="row">
        <!-- Badan artikel -->

        <div class="col-md-8 ">
            <br>
            <h1><?= $berita['judul'] ?></h1>
            <img class="card-img-top mt-3 mb-3" src="<?php echo base_url('assets/img/berita/' . $berita['image']) ?>" alt="Card image cap">
            <?= $berita['isi'] ?>
            <div class="float-right">
                <?= $berita['nama'] ?>
            </div>


        </div>
        <!-- end artikel -->

        <!-- Blog sidebar -->
        <div class="col-md-3 p-3">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        <!-- end blog sidebar -->
    </div>
</div>

<!--End body -->