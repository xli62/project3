<<?php
    $pageTitle = "Homepage"; 
    include "inc/top-part.inc";
?>
     <?php
    include "inc/nav.inc"; ?> 

<div id="grid-gallery" class="grid-gallery">
    <section class="grid-wrap">
        <ul class="grid">
            <li class="grid-sizer"></li><!-- for Masonry column width -->
            <li>
                <figure>
                    <img src="http://www.kabukicho.or.jp/img/shop/206/206_1.jpg" alt="Fig1. - Ichiran Logo.">
                    <figcaption>
                        <h2>Ichiran Project</h2>
                            <p>Me and Yichen create a webstie for Ichiran Ramen. We designed the website based on couple principles of page design on Github. This website included Z-pattern page, F-pattern page and colophon-like card page. </p>
                            <a href="http://urcsc170.org/xli/lab09/">Learn more</a>
                        </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="https://pbs.twimg.com/profile_images/708452934665773056/dXvBqE4t.jpg" alt="Fig2. - Pokemon">
                    <figcaption>
                            <h2>Team Project 1</h2>
                            <p>This is our first team project. Our webstie is about pokemon.</p>
                            <a href="http://urcsc170.org/xli/project1-team7/">Learn more</a>
                    </figcaption>
                        
                </figure>
            </li>
            <li>
                <figure>
                     <img src="http://68.media.tumblr.com/avatar_3532a5c77496_128.png" alt="Fig3. - Marvel.">
                            <figcaption>
                            <h2>Team Project 2</h2>
                            <p>This is our second team project which is about marvel.</p>
                            <a href="http://urcsc170.org/xli/CSC174-Project2-Team7/">Learn more</a>
                        </figcaption>
                        
                </figure>
            </li>
            
        </ul>
    </section><!-- // grid-wrap -->
    <section class="slideshow">
        <ul>
            <li>
                <figure>
                    <figcaption>
                        <h2>Ichiran Project</h2>
                            <p>Me and Yichen create a webstie for Ichiran Ramen. We designed the website based on couple principles of page design on Github. This website included Z-pattern page, F-pattern page and colophon-like card page. </p>
                             <a href="http://urcsc170.org/xli/lab09/">Learn more</a>
                    </figcaption>
                     <img src="http://www.kabukicho.or.jp/img/shop/206/206_1.jpg" alt="Fig1. - Ichiran Logo.">
                </figure>
            </li>
            <li>
                <figure>
                    <figcaption>
                        <h2>Team Project 1</h2>
                            <p>This is our first team project. Our webstie is about pokemon.</p>
                             <a href="http://urcsc170.org/xli/project1-team7/">Learn more</a>
                    </figcaption>
                    </figcaption>
                   <a href="http://urcsc170.org/xli/project1-team7/">Learn more</a>
                </figure>
            </li>
            <li>
                <figure>
                    <figcaption>
                         <h2>Team Project 2</h2>
                            <p>This is our second team project which is about marvel.</p>
                            <a href="http://urcsc170.org/xli/CSC174-Project2-Team7/">Learn more</a>
                    </figcaption>
                     <img src="http://68.media.tumblr.com/avatar_3532a5c77496_128.png" alt="Fig3. - Marvel.">
                </figure>
            </li>
        </ul>
        <nav>
            <span class="icon nav-prev"></span>
            <span class="icon nav-next"></span>
            <span class="icon nav-close"></span>
        </nav>
        <div class="info-keys icon">Navigate with arrow keys</div>
    </section><!-- // slideshow -->
</div><!-- // grid-gallery -->

<script src="js/cbpGridGallery.js"></script>
<script>
    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>

<?php include "inc/footer.inc"; ?>


</body>

</html>
