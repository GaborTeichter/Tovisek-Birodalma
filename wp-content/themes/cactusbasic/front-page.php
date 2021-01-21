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
                    <h2 class="section-heading text-uppercase">Rólunk</h2>
                    <h3 class="section-subheading text-muted">Üdvözöllek az oldalamon.</h3>
                </div>
                <div class="row ">
                    <div class="col-md-4">
                
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
                        <img src="..\assets\img\kaktusz-card.jpg" alt="kaktusz-card.jpg" style="width:100%">
                        <h1>Kaktuszok</h1>
                        <p>Tekintsd meg kaktuszaink széles választékát!</p>
                        <p><button>Megnézem</button></p>
                    </div>

                    <div class="card">
                        <img src="\assets\img\pozsgas-card.jpg" alt="kaktusz-card.jpg" style="width:100%">
                        <h1>Pozsgások</h1>
                        <p>Tekintsd meg pozsgásaink széles választékát!</p>
                        <p><button>Megnézem</button></p>
                    </div>
                </div>

            </div>
        </section>
        <!-- Termékek end -->

         <!-- Kapcsolatok -->
         <section class="page-section" id="kapcsolatok">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kapcsolatok</h2>
                    <h3 class="section-subheading text-muted">Ha kérdésed van vedd fel velünk a kapcsoatot.</h3>
                </div>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e-mail cím">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Név</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="név">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Üzenet</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Küldés</button>
                </form>
            </div>
        </section>
        <!-- Kapsolatok end -->
        <br><br>

</div>

<!-- Footer section -->
<?php
    get_footer();
?>
