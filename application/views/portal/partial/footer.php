<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted mt-5">
    <!-- Section: Links  -->
    <section class="mt-5">
        <hr>
        <div class="container text-left text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class=""></i>Desa Laksanamekar
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                    </h6>
                    <p><i class="fas fa-map-marked-alt"></i> Jl. Raya Batujajar No.270, Laksanamekar, Padalarang, Kabupaten Bandung Barat, Jawa Barat 40553</p>
                    <p><a href="https://www.google.com/maps/place/Kantor+Kepala+Desa+Laksanamekar/@-6.8825935,107.501757,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e4e79b10b24f:0xef6af5613ac05bcd!8m2!3d-6.8825925!4d107.5039195?hl=ID">
                            <i class="fas fa-map-marker-alt"></i> Google Map</a>
                    </p>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                    </h6>
                    <p><i class="far fa-clock"></i> <?php echo $kontak['0']['isi'] ?></p>
                    <p><i class="fas fa-envelope me-3"></i> <?php echo $kontak['1']['isi'] ?> </p>
                    <p><i class="fas fa-phone me-3"></i> <?php echo $kontak['2']['isi'] ?> </p>
                    <p><i class="fab fa-whatsapp"></i> <?php echo $kontak['3']['isi'] ?></p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- End Footer -->

<!-- js core-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"> </script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"> </script>

<!-- optional js -->
<script src="http://maps.google.com/maps/api/js"> </script>

</body>

</html>