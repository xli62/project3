
<?php
    $pageTitle = "Homepage"; 
    include "inc/top-part.inc";
?>
    
    <?php
    include "inc/nav.inc"; ?>  
    
     <!-- First Section -->
    <section id="first">
        <div class="container">
               
            <div id="content-1" class="content">    
                <h1>Welcome</h1> 
                <p>Xingyi Li's Home Website.</p>
                <a id="learn-more" href="http://www.urcsc174.org/xli62/project3/portfolio.php">Learn More</a>
            </div><!-- .content -->
            
       </div><!-- .container -->

    </section> <!-- First Section -->

 <!-- Second Section -->
       <section id="second">
        <div class="container">
                <h1>Accomplishments</h1>
            <div id="content-2" class="content">
                <article>
                    <div class="article-container">
                        <figure class="box">
                            <img src="http://www.kabukicho.or.jp/img/shop/206/206_1.jpg" alt="Fig1. - Ichiran Logo.">
                            <figcaption>Fig1. - Ichiran Logo.</figcaption>
                        </figure>
                        <div class="article-content">   
                            <h2>Ichiran Project</h2>
                            <p>Me and Yichen create a webstie for Ichiran Ramen. We designed the website based on couple principles of page design on Github. This website included Z-pattern page, F-pattern page and colophon-like card page. </p>

                            <a href="http://urcsc170.org/xli/lab09/">Learn more</a>
                        </div>
                    </div>
                    
                    <div class="article-container">
                        <figure class="box">
                            <img src="https://pbs.twimg.com/profile_images/708452934665773056/dXvBqE4t.jpg" alt="Fig2. - Pokemon">
                            <figcaption>Fig2. - Pokemon Generation.</figcaption>
                        </figure>
                        <div class="article-content">
                            <h2>Team Project 1</h2>
                            <p>This is our first team project. Our webstie is about pokemon.</p>
                            <a href="http://urcsc170.org/xli/project1-team7/">Learn more</a>
                        </div>
                    </div>
                    
                    <div class="article-container">
                        <figure class="box">
                            <img src="http://68.media.tumblr.com/avatar_3532a5c77496_128.png" alt="Fig3. - Marvel.">
                            <figcaption>Fig3. - Marvel.</figcaption>
                        </figure>
                        <div class="article-content">
                            <h2>Team Project 2</h2>
                            <p>This is our second team project which is about marvel.</p>
                            <a href="http://urcsc170.org/xli/CSC174-Project2-Team7/">Learn more</a>
                        </div>
                    </div>

                </article>

            </div><!-- .content -->

       </div><!-- .container -->

    

    </section> <!-- Second Section -->
    

   
<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>

<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>

  <?php include "inc/footer.inc"; ?>

</body>

</html>
