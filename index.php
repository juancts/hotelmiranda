<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;500;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;500;600&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./scss/main.css" />
    <title>Hotel Miranda</title>
</head>
<body>

<?php
    include 'dist/php/templates/navbar.php'
?>

<!-- <body> -->
    <!-- //BANNER TOP -->
    <section class="banner">
        <div class="banner__content">

            <div class="banner__title">
                <span class="banner__title--ppal">THE ULTIMATE LUXURY EXPERIENCE</span>
            </div>
            <div class="banner__subtitle">
                <span class="">The Perfect Base For You</span>
            </div>
            <button class="banner__button">
                <span class="banner__title--ppal">TAKE A TOUR</span>
            </button>
            <button class="banner__button banner__button--lm">
                <span class="banner__title--ppal">LEARN MORE</span>
            </button>
        </div>
    </section>
    
    
    <!-- //SECTION DATES OF ARRIBAL DEPARTURE -->
    <section class="dates">
        <div class="dates__content">
            <label class="dates__txt" for="dateInput">Arrival Date</label>
            <input type="date">
            <label class="dates__txt" for="dateInput">Departure Date</label>
            <input type="date">
            <button class="banner__button banner__button--ca">CHECK AVAILABILITY</button>
        </div>
    </section>
    
    <!-- //SECTION ABOUT Us -->
    <section class="about__section">
        <div class="about">
            <div class="about__content">
                <div class="banner__title--ppal">
                    <span>ABOUT US</span>
                </div>
                <div class="banner__subtitle banner__subtitle--txt">
                    <span>Discover Our Underground.</span>
                </div>
                <div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur ipsam, maiores dolores praesentium harum ullam obcaecati iure eum quaerat voluptates, quo sapiente dignissimos dolore temporibus, repellat expedita ipsa aspernatur fugiat.
                    </p>
                </div>
                <button class="banner__button banner__button--ca">BOOK NOW</button>
          
                
    
            </div>
        </div>
 <!-- STRONG TEAM -->
 <div class="strongteam">
    <div class="strongteam__box1">
    </div>
    <div class="strongteam__box2">
        <div class="strongteam__box2--imgcontent">
        <img src="./dist/images/svgiconperson.png" alt="">
        <span>Strong Team</span>   
    </div>
    <div class="strongteam__box2--txtcontent">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ea hic odit.
          </p>  
    </div>
    </div>


<!-- LUXURY ROOM -->

    <div class="strongteam__box1">
    </div>
    <div class="strongteam__box2--contentblk">
        <div class="strongteam__box2--imgcontent">
        <img src="./dist/images/svgiconfecha.png" alt="">
        <span>Luxury Room</span>   
    </div>
    <div class="strongteam__box2--txtcontent">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ea hic odit.
          </p>  
    </div>
    </div>
</div>
         

    </section>
 <!-- ROOMS -->
    <section>

    </section>

    <section>

    </section>
    
<!-- </body>     -->
<!-- //SECTION  -->


    
<?php
    include 'dist/php/templates/footer.php'
?>
<script src="../../js/navbar.js></script>
</body>
</html>