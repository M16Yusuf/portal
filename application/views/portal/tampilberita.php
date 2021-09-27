<!-- Body -->

<div class="container card">
    <div class="row">
        <!-- Badan artikel -->

        <div class="col-md-8 ">
            <br>
            <blockquote class="blockquote text-center">
                <h2>
                    <p class="mb-0 text-left"><?= $berita['judul'] ?></p>
                </h2>
            </blockquote>

            <img class="card-img-top mt-0 mb-3" src="<?php echo base_url('assets/img/berita/' . $berita['image']) ?>" alt="Card image cap">
            <?= $berita['isi'] ?>
            <blockquote class="blockquote text-center">

                <footer class="blockquote-footer">By : <cite title="Source Title"> <?= $berita['nama'] ?> </cite></footer>
            </blockquote>



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