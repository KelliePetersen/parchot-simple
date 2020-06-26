class ModalContact {
  constructor() {
    this.modal = document.getElementById('contact');
    this.contactButton = document.querySelectorAll('.js-contact');
    this.menuButton = document.getElementById('menu');
    this.logo = document.getElementById('logo');
    this.nav = document.getElementById('nav__content');
    this.events();
  }

  events() {
    this.contactButton.forEach(button =>
      button.addEventListener('click', this.toggleModal.bind(this))
    );
    this.contactButton.forEach(button =>
      button.addEventListener('click', this.toggleNav.bind(this))
    );
    this.menuButton.addEventListener('click', this.closeMenu.bind(this));
    this.logo.addEventListener('click', this.closeMenu.bind(this));
  }

  toggleModal() {
    this.modal.classList.toggle('contact--is-open');
  }

  toggleNav() {
    this.nav.classList.toggle('nav__content--is-hidden');
  }

  closeMenu() {
    this.modal.classList.remove('contact--is-open');
    this.nav.classList.remove('nav__content--is-hidden');
  }
}

export default ModalContact;
