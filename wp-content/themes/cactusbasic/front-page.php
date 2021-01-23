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
                
                        <blockquote class="blockquote text-muted">
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
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Termékek</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
               
                <div class="row">
                    <div class="card">
                        <img src="wp-content/themes/cactusbasic/assets/img/kaktusz-card.jpg" alt="kaktusz-card.jpg" style="width:100%">
                        <h1>Kaktuszok</h1>
                        <p>Tekintsd meg kaktuszaink széles választékát!</p>
                        <p><button>Megnézem</button></p>
                    </div>
                
                    <div class="card">
                        <img src="wp-content/themes/cactusbasic/assets/img/pozsgas-card.jpg" alt="pozsgas-card.jpg" style="width:100%">
                        <h1>Pozsgások</h1>
                        <p>Tekintsd meg pozsgásaink széles választékát!</p>
                        <p><button>Megnézem</button></p>
                    </div>
                </div> 
        
            </div>
        </section>
        <!-- Termékek end -->

         <!-- Kapcsolatok -->
        
            
            <?php echo do_shortcode( '[contact-form-7 id="9" title="Kapcsolatok"]' ); ?>

       
        <!-- Kapsolatok end -->
</div>

<!-- Footer section -->
<?php
    get_footer();
?>
