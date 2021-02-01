<?php
    get_header();
?>



<!-- Main content -->
<div class="main container-fluid">

    <article>

    <?php 
        /* if ( have_posts() ) {

            while ( have_posts() ) {
                the_post();
                the_content();
            }

        } */
    ?>

    </article>
    
         <!-- Rólunk -->
         <section class="page-section" id="rolunk">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Rólunk</h2><br>
                    <!-- <h3 class="section-subheading text-muted">Üdvözöllek az oldalamon.</h3><br>-->
                </div>
                <div class="row">
                    <div class="col-md-12">
                
                        <blockquote class="blockquote text-muted text-center">
                        <p>Ha kedvező áron, nagy gonddal és szakértelemmel nevelt kaktuszokat keres, akkor ez az ön oldala!  
                        Mindent megteszünk, hogy a legjobb termékekkel szolgálhassunk vevőink számára, kínálatunk folyamatosan bővül! 
                        Forduljon hozzánk bizalommal!</p>
                        </blockquote>
                    </div>
                
                </div>
            </div>
        </section>
        <!-- Rólunk end -->

        <!-- Termékek -->
        <section class="page-section bg-light">
            <div class="container-fluid">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Termékek</h2>
                    <h3 class="section-subheading text-muted">Válasszon folyamatosan bővülő kínálatunk közül.</h3>
                </div>
               
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card product-card">
                            <img src="wp-content/themes/cactusbasic/assets/img/kaktusz-card.jpg" alt="kaktusz-card.jpg" style="width:100%">
                            <h1>Kaktuszok</h1>
                            <p>Tekintsd meg kaktuszaink széles választékát!</p>
                            <p><button>Megnézem</button></p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card product-card">
                            <img src="wp-content/themes/cactusbasic/assets/img/pozsgas-card.jpg" alt="pozsgas-card.jpg" style="width:100%">
                            <h1>Pozsgások</h1>
                            <p>Tekintsd meg pozsgásaink széles választékát!</p>
                            <p><button>Megnézem</button></p>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <!-- Termékek end -->

        <!-- Facebook section -->
        <div class="container">
            <div class="text-center">
            <h1>Kövess minket!</h1>
            <div class="text-center">
                <a href="https://www.facebook.com/T%C3%B6visek-Birodalma-108672437567451" target="_blank"><button type="button" class="btn btn-primary btn-lg button1">Facebook</button></a>
            </div>
            </div>
        </div>
        <div class="container-fluid facebook-section p-3 my-3">
            
        </div>

        <!-- Facebook section end -->

         <!-- Kapcsolatok -->
        
            
        <?php echo do_shortcode( '[contact-form-7 id="9" title="Kapcsolatok"]' ); ?>

       
        <!-- Kapsolatok end -->
</div>

<!-- Footer section -->
<?php
    get_footer();
?>
