<!-- Body -->
<div class="container card px-0">
    <div class="row">
        <div class="col-md-8">
            <!-- list berita -->
            <?php $i = 1; ?>
            <?php foreach ($berita as $w) : ?>
                <div class="row p-4">
                    <div class="col-ms-5 col-sm-5">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/berita/' . $w['image']) ?>" alt="Card image cap">
                    </div>
                    <div class="col-ms-7 col-sm-7">
                        <div class="card-body p-0">
                            <h5 class="card-title"> <?php echo $w['judul'] ?> </h5>
                            <p><?php $text = $w['isi'];
                                if (strlen($text) > 200) {
                                    $text = substr($text, 0, 200) . '<a href=' . base_url('listberita/detail/') . $w['id'] . '> readmore...' . '</a>';
                                }
                                echo $text ?> </p>
                            <p>By : <?php echo $w['nama'] ?> </p>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach ?>
            <!-- end list  -->

            <div class="nav-link">
                <!-- disini page number -->
            </div>
        </div>



        <div class="col-md-3 p-3">
            <!-- Blog sidebar -->
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
            <!-- end blog sidebar -->
        </div>
    </div>


</div>
<!-- end body  -->