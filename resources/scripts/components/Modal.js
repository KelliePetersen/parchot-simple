class Modal {
  constructor() {
    this.modalMenu = document.getElementById('modal');
    this.modalContact = document.getElementById('contact');
    this.menuButton = document.getElementById('menu');
    this.contactButton = document.querySelectorAll('.js-contact');
    this.header = document.getElementById('header');
    this.nav = document.getElementsByClassName('nav');
    this.hashChangeFn = this.hashChangeFunction.bind(this);
    this.closeModalOnScrollFn = this.closeModalOnScroll.bind(this);
    this.closeModalOnClickAwayFn = this.closeModalOnClickAway.bind(this);
    this.events();
  }

  events() {
    this.modalMenu.addEventListener('click', event => {
      if (
        event.target.classList.contains('modal__link') &&
        !event.target.classList.contains('js-contact')
      ) {
        this.removeAnimateMenu();
        this.closeModalMenu();
        this.showHeader();
      }
    });
    this.menuButton.addEventListener('click', () => {
      if (this.modalContact.classList.contains('contact--is-open')) {
        this.unlockBodyScroll();
        window.removeEventListener('hashchange', this.hashChangeFn);
      }
      if (
        this.modalMenu.classList.contains('modal--is-open') ||
        this.modalContact.classList.contains('contact--is-open')
      ) {
        this.removeAnimateMenu();
        this.closeModalMenu();
        this.closeModalContact();
        this.showHeader();
      } else {
        this.animateMenu();
        this.openModalMenu();
        this.hideHeader();
        document.addEventListener('scroll', this.closeModalOnScrollFn);
        document.addEventListener('click', this.closeModalOnClickAwayFn);
      }
    });
    this.contactButton.forEach(button => {
      button.addEventListener('click', () => {
        this.openModalContact();
        this.hideHeader();
        this.animateMenu();
        window.addEventListener('hashchange', this.hashChangeFn);
      });
    });
  }

  animateMenu() {
    this.menuButton.classList.add('menu--is-open');
  }

  removeAnimateMenu() {
    this.menuButton.classList.remove('menu--is-open');
  }

  openModalMenu() {
    this.modalMenu.classList.add('modal--is-open');
  }

  closeModalMenu() {
    this.modalMenu.classList.remove('modal--is-open');
    document.removeEventListener('scroll', this.closeModalOnScrollFn);
    document.removeEventListener('click', this.closeModalOnClickAwayFn);
  }

  openModalContact() {
    this.lockBodyScroll();
    this.modalContact.classList.add('contact--is-open');
  }

  closeModalContact() {
    this.modalContact.classList.remove('contact--is-open');
  }

  // eslint-disable-next-line class-methods-use-this
  lockBodyScroll() {
    document.body.style.top = `-${window.scrollY}px`;
    this.nav[0].style.right = `${document.body.offsetWidth - document.documentElement.clientWidth}px`;
    this.modalMenu.style.right = `${document.body.offsetWidth - document.documentElement.clientWidth}px`;
    document.body.style.position = 'fixed';
  }

  // eslint-disable-next-line class-methods-use-this
  unlockBodyScroll() {
    this.nav[0].style.right = '0';
    this.modalMenu.style.right = '0';
    const scrollY = document.body.style.top;
    document.documentElement.style.scrollBehavior = 'auto';
    document.body.style.position = '';
    document.body.style.top = '';
    // eslint-disable-next-line radix
    window.scrollTo(0, parseInt(scrollY || '0') * -1);
    document.documentElement.style.scrollBehavior = 'smooth';
  }

  hideHeader() {
    this.header.classList.add('header--is-hidden');
  }

  showHeader() {
    this.header.classList.remove('header--is-hidden');
  }

  hashChangeFunction() {
    if (this.modalContact.classList.contains('contact--is-open') && location.hash !== '#contact') {
      this.removeAnimateMenu();
      this.closeModalMenu();
      this.closeModalContact();
      this.showHeader();
      this.unlockBodyScroll();
      window.removeEventListener('hashchange', this.hashChangeFn);
    }
  }

  closeModalOnScroll() {
    if (!this.modalContact.classList.contains('contact--is-open')) {
      this.removeAnimateMenu();
      this.closeModalMenu();
      this.showHeader();
    }
  }

  closeModalOnClickAway(event) {
    if (
      !event.target.classList.contains('js-contact') &&
      !this.modalContact.classList.contains('contact--is-open') &&
      event.clientX < window.innerWidth - this.modalMenu.offsetWidth
    ) {
      this.removeAnimateMenu();
      this.closeModalMenu();
      this.showHeader();
    }
  }
}

export default Modal;
