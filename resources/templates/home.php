<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet"> 
  <title>Parchot</title>
</head>
<body>

  <div class="hero">

    <div class="container__logo">
      <a href="#" class="logo__link"><p class="logo">PARCHOT</p></a>
      <div class="line line__logo"></div>
    </div>
  
    <nav class="menu">
      <div class="menu__content">
        <a href="#contact" class="menu__item">Contact Us</a>
      </div>
    </nav>
    
    <nav class="nav">
      <div class="nav__menu"></div>
      <div class="line line__nav"></div>
      <a href="https://facebook.com" target="_blank"><img class="nav__icon" src="logo-facebook.svg" alt=""></a>
      <a href="https://twitter.com" target="_blank"><img class="nav__icon" src="logo-twitter.svg" alt=""></a>
    </nav>

    <nav class="sidebar">
      <ul class="sidebar__list">
        <li class="sidebar__item"><a class="sidebar__link sidebar__link--active" href="#">00.<span class="sidebar__desc"> Welcome</span></a></li>
        <li class="sidebar__item"><a class="sidebar__link" href="#contact">01.<span class="sidebar__desc"> Contact</span></a></li>
        <li class="sidebar__item"><p class="sidebar__link sidebar__dead">02.<span class="sidebar__desc"> Coming Soon</span></p></li>
        <li class="sidebar__item"><p class="sidebar__link sidebar__dead">03.<span class="sidebar__desc"> Coming Soon</span></p></li>
        <li class="sidebar__item"><p class="sidebar__link sidebar__dead">04.<span class="sidebar__desc"> Coming Soon</span></p></li>
      </ul>
    </nav>
  
    <div class="heading">
      <h1 class="tagline">We create <span class="green">websites</span> & <span class="green">applications</span> that bring people to your business.</h1>
      <p class="summary">At Parchot, we work with you to bring your ideas to life. 
        Our professional design and development services will provide you with a product that leaves lasting impressions.</p>
      
      <div class="button">
        <img src="arrow.svg" alt="" class="button__arrow">
        <a href="#contact" class="button__link">Get Started</a>
      </div>
    </div>

    <div class="rectangle"></div>
    <div class="line__corner"></div>

  </div>

  <section id="contact">

    <nav class="sidebar">
      <ul class="sidebar__list">
        <li class="sidebar__item"><a class="sidebar__link" href="#">00.<span class="sidebar__desc"> Welcome</span></a></li>
        <li class="sidebar__item"><a class="sidebar__link sidebar__link--active" href="#contact">01.<span class="sidebar__desc"> Contact</span></a></li>
        <li class="sidebar__item"><p class="sidebar__link sidebar__dead">02.<span class="sidebar__desc"> Coming Soon</span></p></li>
        <li class="sidebar__item"><p class="sidebar__link sidebar__dead">03.<span class="sidebar__desc"> Coming Soon</span></p></li>
        <li class="sidebar__item"><p class="sidebar__link sidebar__dead">04.<span class="sidebar__desc"> Coming Soon</span></p></li>
      </ul>
    </nav>

    <form class="contact-form" action="" method="POST" id="contact-form">
      <h1 class="contact-form__title">Let's get in touch.</h1>
      <div class="contact-form__body">
        <div class="contact-form__body__column contact-form__body__column--33">
          <div class="contact-form__group">
            <span class="contact-form__group__title">Tell Us About Yourself</span>
            <input class="contact-form__group__input" type="text" autocomplete="off" maxlength="40" placeholder="First Name" required></input>
            <input class="contact-form__group__input" type="text" autocomplete="off" maxlength="40" placeholder="Last Name" required></input>
            <input class="contact-form__group__input" type="text" autocomplete="off" maxlength="40" placeholder="Email" required></input>
          </div>
          <div class="contact-form__group">
            <span class="contact-form__group__title">What can we do for you?</span>
            <select class="contact-form__group__select" autocomplete="off">
              <option selected="selected">Website Development</option>
              <option>Website Design</option>
              <option>Application Development</option>
              <option>Application Design</option>
              <option>Search Engine Optimization</option>
              <option>Content Writing</option>
              <option>Other</option>
            </select>
          </div>
        </div>
        <div class="contact-form__body__column contact-form__body__column--66">
          <div class="contact-form__group">
            <span class="contact-form__group__title">Tell Us All About It</span>
            <textarea class="contact-form__group__textarea" placeholder="Summarize it all."></textarea>
          </div>
        </div>
      </div>
      <button class="button contact__button" type="submit" form="contact-form" value="Submit">
        <img src="arrow.svg" alt="" class="button__arrow">
        <a href="#contact" class="button__link">Submit</a>
      </button>
    </form>
  </section>

  <footer>
    <p class="copyright">(C) Copyright 2020 Parchott Design Studio. All Rights Reserved.</p>
  </footer>
  
</body>
</html>