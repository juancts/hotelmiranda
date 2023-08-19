<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;500;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;500;600&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./scss/style.css" />
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
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur ipsam, maiores dolores
                        praesentium harum ullam obcaecati iure eum quaerat voluptates, quo sapiente dignissimos dolore
                        temporibus, repellat expedita ipsa aspernatur fugiat.
                    </p>
                </div>
                <button class="banner__button banner__button--ca">BOOK NOW</button>



            </div>
        </div>
        <!-- STRONG TEAM -->
        <div class="strongteam">
            <div class="strongteam__content">
                <div class="strongteam__box1">
                </div>
                <div class="strongteam__box2">
                    <div class="strongteam__box2--imgcontent">
                        <img src="./dist/assets/svgiconperson.png" alt="">
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
                        <img src="./dist/assets/svgiconfecha.png" alt="">
                        <span>Luxury Room</span>
                    </div>
                    <div class="strongteam__box2--txtcontent">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ea hic odit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ROOMS -->
    <section class="rooms">
        <div class="rooms__content">
            <div class="rooms__title">
                <h3>
                    ROOMS
                </h3>
            </div>
            <div class="rooms__title rooms__title--subtitle">
                <h1>
                    Hand Picked Rooms
                </h1>
            </div>
            <div class="rooms__icons">
                <i class="fas fa-bed"></i>
                <i class="fas fa-wifi"></i>
                <i class="fas fa-car"></i>
                <i class="fas fa-snowflake"></i>
                <i class="fas fa-dumbbell"></i>
                <i style="width: 25px;"><img src="./dist/assets/9081473_smoking_no_icon 1.png" alt="nosmoking"></i>
                <i class="fas fa-cocktail"></i>
            </div>
            <div class="rooms__slider">
                <img class="rooms__slider--left" src="./dist/assets/Frame 59.png" alt="siguiente">
                <img class="rooms__slider--right" src="./dist/assets/Frame 60.png" alt="atras">
            </div>
        </div>

        <div class="minimal">

            <div class="minimal__content">
                <div class="minimal__txt">
                    <h1>
                        Minimal Duplex Room
                    </h1>
                </div>
                <div class="minimal__txt">
                    <h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque veritatis non dolor adipisci
                        sequi.
                    </h3>
                </div>
                <div class="minimal__price">
                    <span class="minimal__price--value">$345</span>
                    <span class="minimal__price--night">/Night</span>
                </div>
            </div>

        </div>
    </section>

    <section class="introvideo">
        <div class="introvideo__content">
            <div class="introvideo__title">
                <h3>INTRO VIDEO</h3>
            </div>
            <div class="introvideo__subtitle">
                <h1>Meet With Our Luxury Place.</h1>
            </div>
            <div class="introvideo__paragraph">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ex hic quis officiis soluta cupiditate
                    nihil recusandae voluptate dolor vitae, fugit aliquam quos repudiandae. Accusantium incidunt
                    inventore quaerat qui iusto!</p>
            </div>
            <div class="introvideo__video">
                <img src="./dist/assets/Rectanglevideo.png"></img>
            </div>
            <div class="introvideo__button">
                <button class="banner__button banner__button--ca">BOOK NOW</button>
            </div>

        </div>

    </section>

    <section class="facilities">
        <div class="facilities__content">
            <div class="facilities__title">
                <h3>FACILITIES</h3>
            </div>
            <div class="facilities__subtitle">
                <h1>Core Features</h1>
            </div>
            <div class="facilities__iconos">
                <img id="img1" src="./dist/assets/icon1.png" alt="iconodedo">
                <img id="img2" src="./dist/assets/01.png" alt="icononumero">
            </div>
            <div class="facilities__subsubtitle">
                <h1>
                    Have High Rating
                </h1>
            </div>
            <div class="facilities__paragraph">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptates suscipit excepturi incidunt
                    voluptas earum corporis dolor iure quis similique sit laudantium, rerum reiciendis dolore,
                    quibusdam, rem esse sapiente accusamus!</p>
            </div>
            <div class="facilities__pagination">
                <img src="./dist/assets/Frame90.png" alt="">
            </div>
        </div>


    </section>

    <section class="menu">
        <div class="menu__icono">
            <img src="./dist/assets/icon4.png" alt="iconomenu">
        </div>
        <div class="menu__content">
            <div class="menu__title">
                <h3>MENU</h3>
            </div>
    
            <div class="menu__submenu">
                <h1>
                    Our Foods Menu
                </h1>
            </div>
            <div class="menuslider">
                <!-- DATA SLIDER 1 -->
                <div class="menuslider__data">
                    <div class="menuslider__data--photo">
                        <img src="./dist/assets/Rectangle38.png" alt="img">
                    </div>
                    <div class="menuslider__data--content">
                    <div class="menuslider__data--title">
                        <h1>Eggs & Bacon</h1>
                    </div>
                    <div class="menuslider__data--description">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
                </div>
            </div>
            <!-- DATA SLIDER 2 -->
            <div class="menuslider__data">
                <div class="menuslider__data--photo">
                    <img src="./dist/assets/Rectangle38.png" alt="photo">
                </div>
                <div class="menuslider__data--content">
                    <div class="menuslider__data--title">
                        <h1>Eggs & Bacon</h1>
                    </div>
                    <div class="menuslider__data--description">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>

                </div>
            </div>
            <!-- DATA SLIDER 3 -->
            <div class="menuslider__data">
                <div class="menuslider__data--photo">
                    <img src="./dist/assets/Rectangle38.png" alt="photo">
                </div>
                <div class="menuslider__data--content">
                <div class="menuslider__data--title">
                    <h1>Eggs & Bacon</h1>
                </div>
                <div class="menuslider__data--description">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
                </div>
            </div>
            <div class="menuslider__buttons">
                <img src="./dist/assets/Frame 59.png" alt="button">
                <img src="./dist/assets/Frame 60.png" alt="button">
            </div>
        </div>
    </section>

    <section class="slider">
        <div class="slider__content">
            <img id="image" src="./dist/assets/Rectangle46.png" alt="rectangle">
            <img id="buttons" src="./dist/assets/Frame 90.png" alt="points">
        </div>

    </section>

    <section class="statistics">
            <div class="statistics__content">
                <!-- PROJECTS COMPLETED -->
                <div class="statistics__content statistic__content">
                    <img src="./dist/assets/icon 5.png" alt="cohete">
                    <div class="statistics__content--qtty">
                            <span id="qtty">84k</span>
                            <span>+</span>
                    </div>
                    <div>
                        <p>Projects are completed</p>
                    </div>

                </div>
           <!-- BACKERS AROUND WORLD -->
                <div class="statistics__content statistic__content">
                    <img src="./dist/assets/icon 6.png" alt="persons">
                    <div class="statistics__content--qtty">
                            <span id="qtty">10M</span>
                            <span>+</span>
                    </div>
                    <div>
                        <p>Active Backers Around World</p>
                    </div>

                </div>

                <!-- CATEGORIES SERVED -->
                <div class="statistics__content statistic__content">
                    <img src="./dist/assets/icon 7.png" alt="money">
                    <div class="statistics__content--qtty">
                            <span id="qtty">02k</span>
                            <span>+</span>
                    </div>
                    <div>
                        <p>Categories Served</p>
                    </div>

                </div>
                <!-- IDEA RAISED FUNDS -->
                <div class="statistics__content statistic__content">
                    <img src="./dist/assets/icon 8.png" alt="book">
                    <div class="statistics__content--qtty">
                            <span id="qtty">100M</span>
                            <span>+</span>
                    </div>
                    <div>
                        <p>Idea Raised funds</p>
                    </div>

                </div>

            </div>
    </section>

    <!-- </body>     -->
    <!-- //SECTION  -->



    <?php
    include 'dist/php/templates/footer.php'
?>
    <script src="../../js/navbar.js"></script>
</body>
</html>