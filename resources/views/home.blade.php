<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
        <title>Bloodline Clothing</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>Bloodline Clothing</title>
    </head>

    <body>
        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="/products" class="navigation__link"><span>01</span>Purchase Items</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>02</span>Who Are We</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>03</span>Popular Items</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>04</span>Stories</a></li>
                    </ul>
            </nav>
        </div>

        <header class="header">
            <div class="header__logo-box">
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Bloodline Clothing</span>
                    <span class="heading-primary--sub">End His Bloodline</span>
                </h1>

                <a href="/products" class="btn btn--white btn--animated">Buy a Bumper Sticker</a>
            </div>
        </header>

        <main>
        <section class="section-about">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        Take His Life
                    </h2>
                </div>

                <div class="row">
                    <div class="u-center-text col-md-12">
                        <h3 class="heading-tertiary u-margin-bottom-small"></h3>
                        <p class="paragraph">
                            Our Goal is to make Sporting as eventful and as Rowdy as possible
                        </p>

                        <h3 class="heading-tertiary u-margin-bottom-small">Is your body ready for war like a viking?</h3>
                        <p class="paragraph">
                            If so, TAKE HIS LIFE!
                        </p>

                        <a href="/products" class="btn-text">Purchase Products &rarr;</a>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="footer__logo-box">

                <picture class="footer__logo">
                </picture>


                
            </div>
            <div class="row">
                <div class="ml-3 col-md-6">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Carrers</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="footer__copyright">
                        Built by <a href="#" class="footer__link">Bloodline Clothing</a> for the sporting Craziness <a href="#" class="footer__link"></a>.
                        <br />Copyright &copy; by Bloodline Clothing. 
                    </p>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    </body>
</html>
