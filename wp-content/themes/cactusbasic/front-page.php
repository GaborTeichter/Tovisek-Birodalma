<?php
    get_header();
?>

<!-- Main content -->
<div class="main container fluid">
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
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
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
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="./assets/img/kaktusz-card.jpg" alt="kaktusz-card.jpg">
                        <div class="card-body">
                        <h5 class="card-title">Kaktuszok</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        
                        </div>
                    </div>
                   
                    <div class="card">
                        <img class="card-img-top" src="./assets/img/pozsgas-card.jpg" alt="pozsgas-card.jpg">
                        <div class="card-body">
                        <h5 class="card-title">Pozsgások</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        
                        </div>
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
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
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
