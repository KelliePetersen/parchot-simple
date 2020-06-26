class HeaderToggle {
  constructor() {
    this.menu = document.getElementById('menu');
    this.navContent = document.getElementById('nav__content');
    this.hero = document.getElementById('hero');
    this.events();
  }

  events() {
    document.addEventListener('scroll', () => {
      if (window.scrollY <= this.hero.clientHeight) {
        this.showNav();
      } else {
        this.hideNav();
      }
    });
  }

  showNav() {
    this.menu.classList.add('menu--is-active');
    this.navContent.classList.add('nav__content--is-visible');
  }

  hideNav() {
    this.menu.classList.remove('menu--is-active');
    this.navContent.classList.remove('nav__content--is-visible');
  }
}

export default HeaderToggle;
