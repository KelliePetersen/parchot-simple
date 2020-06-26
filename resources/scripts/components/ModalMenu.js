class ModalMenu {
  constructor() {
    this.modal = document.getElementById('modal');
    this.menuButton = document.getElementById('menu');
    this.header = document.getElementById('header');
    this.events();
  }

  events() {
    document.addEventListener('scroll', this.closeMenu.bind(this));
    this.menuButton.addEventListener('click', this.animateMenu.bind(this));
    this.menuButton.addEventListener('click', this.toggleModal.bind(this));
    this.menuButton.addEventListener('click', this.toggleHeader.bind(this));
    this.modal.addEventListener('click', event => {
      if (event.target.classList.contains('modal__link')) {
        this.closeMenu();
      }
    });
    document.addEventListener('click', event => {
      if (event.clientX < window.innerWidth - this.modal.offsetWidth) {
        this.closeMenu();
      }
    });
  }

  animateMenu() {
    this.menuButton.classList.toggle('menu--is-open');
  }

  toggleModal() {
    this.modal.classList.toggle('modal--is-open');
  }

  toggleHeader() {
    this.header.classList.toggle('header--is-hidden');
  }

  closeMenu() {
    this.menuButton.classList.remove('menu--is-open');
    this.modal.classList.remove('modal--is-open');
    this.header.classList.remove('header--is-hidden');
  }
}

export default ModalMenu;
