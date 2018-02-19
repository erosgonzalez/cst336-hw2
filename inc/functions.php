<?php
    function start(){
      $guitarsArray = array("jacksonV", "lesPual", "fender");
      $guitarVideos = array("https://www.youtube.com/embed/9d4ui9q7eDM", "https://www.youtube.com/embed/1w7OgIMMRc4", "https://www.youtube.com/embed/bDC3ade3JxU");
      $guitarVideos2 = array("https://www.youtube.com/embed/HeSuPB_5wr4","https://www.youtube.com/embed/cibrivYVFZ4", "https://www.youtube.com/embed/APWhx97QvxE");
      
      $randIndex = rand(0,2);
      
      $guitar = $guitarsArray[$randIndex];
      $video = $guitarVideos[$randIndex];
      $video2 = $guitarVideos2[$randIndex];
      
      displayGuitars($guitar, $video, $video2,$randIndex);
    }
    
    function displayGuitars($guitarImg, $guitarMusic, $guitarMusic2, $index){
      echo "<img src = 'images/$guitarImg.png'/>";
      echo "<iframe width='560' height='315' align='right'src='$guitarMusic' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
      echo "<iframe width='560' height='315' align='top'src='$guitarMusic2' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
      
      displayInfo($index);
    }
    
    function displayInfo($indx){
      $guitaristJ = array("Randy Rhoads", "Dave Mustaine", "Vinnie Vincent");
      $guitaristL = array("Slash", "Bob Marley", "Jimmy Page");
      $guitaristF = array("Jimmi Hendrix", "Eric Clapton", "David Gilmour");
      switch ($indx) {
        case 0:
          echo "<h1>Jackson V</h1>";
          
          echo "<h4> 'Jackson began back in the late 1970s, when heavy music experienced a 
          flamboyant and virtuosic resurgence in popularity and a small Southern California guitar 
          repair shop became the epicenter of a new level of shred-approved excellence. Ever since then,
          Jackson guitars have been universally lauded as the metal guitars; the shred machines-highly original 
          high-performance instruments of distinctive style and formidable substance. From metal's chart-topping 
          peaks to its darkest recesses, for discerning guitarists all over the globe, Jackson is the only way to go.
          
          To make a long story short, a new generation of talented and extravagant young guitarists who came of age in 
          the burgeoning MTV era of the late '70s and early '80s needed more-in fact, demanded more-from their instruments. 
          A small staff of highly skilled craftsmen answered the call with a new breed of high-performance custom guitars 
          bearing Jackson's own name on their headstocks.

          At the time, these craftsmen were just starting to taste success under the banner of Charvel's Guitar Repair, an 
          instrument hot-rodding shop in Glendora, Calif., that had been bought in November 1978 from their employer of 14 months, 
          Wayne Charvel. Jackson-built Charvel guitars debuted in summer 1979 and quickly became the axes of choice for the flamboyant
          new breed of Sunset Strip guitar heroes whose loud, heavy bands were then being signed left and right by major record labels.

          A relatively unknown but phenomenally talented young guitarist named Randy Rhoads contacted Jackson in late 1980. Following a 
          stint with L.A. metal outfit Quiet Riot, Rhoads had just joined former Black Sabbath vocalist Ozzy Osbourne's new band and wanted 
          to meet about designing a distinctive new guitar.' - Jackson Website: https://www.jacksonguitars.com/support/history</h4>";
          
          echo "Artist: ";
          
          foreach($guitaristJ as $gJ){
            echo "<ul>
                    <li>$gJ</li>
                  </ul>";
          }
          
          break;
          
        case 1:
          echo "<h2>Gibson Les Paul</h2>";
          
          echo "<h5> 'The Gibson Les Paul was first produced early in 1952, the Les Paul was the very first solid body guitar to be produced
            by the Gibson Company, and was created due to the fact that Leo Fender had proven the viability of such a product with the Fender Telecaster.
    
            With Ted McCarthy at the helm, the Gibson Company wanted to make sure they acquired a share of the solid body market, and came up with the 
            concept of approaching a well known musician, Les Paul, to design a range of solid body electric guitars. Interestingly, Les Paul had already 
            approached Gibson in 1945 with some designs and ideas for an electric solid body guitar, and had been ridiculed by Gibson.

            There is some ambiguity over just who designed which parts of the original Les Paul, with Les Paul himself telling a very different story to the
            Gibson employees at the time. In the Gibson version of the story, the company had already completed the design of the 1952 Les Paul before Les was
            approached to endorse it, the only modifications he made to the design were bridge and the name itself. The story told by Les himself is a little 
            different, he tells that he already had the ideas for the Gold Top and the Black Custom, and Gibson gave him the final say in every part of the design
            process.' - The History of the Les Pual: https://www.guitarmasterclass.net/wiki/index.php/The_history_of_the_Gibson_Les_Paul </h5>";
          
          echo "Artist: ";
          
           foreach($guitaristL as $gJ){
            echo "<ul>
                    <li>$gJ</li>
                  </ul>";
                  
          }
          break;
          
        case 2:
          echo "<h3>Fender Stratocaster</h3>";
          
          echo "<h6>'The Fender Stratocaster history started in 1954, when Leo Fender, George Fullerton and Freddie Tavares designed the double cutaway guitar body 
          that would change the history of music forever. In its experimental phase, from March to September of 1954, the Stratocaster was hand made and its specifications 
          changed a lot, until they settled with the production model released in October.
          
          The first Fender Stratocaster had a single-piece ash body with a two-color sunburst finish; a single-piece maple neck with a thick 'U' (also referred as 'D') profile, 
          7.25' radius fingerboard; 3 hand-wound single coil pickups connected to Stackpole 250k ohms pots and a 3-way switch; Kluson Deluxe (unbranded) tuners and a guitar-shaped 
          case.
          The 1954 Stratocaster is a very rare instrument and can reach unbelievable prices (I have actually seen on for sale for 95000). I had the opportunity to play this instrument 
          once in my life (and probably will not be able to play it ever again). Despite the very uncomfortable neck and Les Paul-grade weight (yes, it was very heavy), it has the best 
          Strat tone I have ever heard.' - Carlos Seo: http://www.carlosseo.com/2011/09/24/fender-stratocaster-history/</h6>";
          
          echo "Artist: ";
          
           foreach($guitaristF as $gJ){
            echo "<ul>
                    <li>$gJ</li>
                  </ul>";
          }
          break;
      }
      
    }
?>