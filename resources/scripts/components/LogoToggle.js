class LogoToggle {
  constructor() {
    this.logo = document.getElementById('logo');
    this.events();
  }

  events() {
    document.addEventListener('scroll', () => {
      this.rect = this.logo.getBoundingClientRect();
      if (this.rect.y <= 50) {
        this.hide();
      } else {
        this.show();
      }
    });
  }

  hide() {
    this.logo.style.visibility = 'hidden';
  }

  show() {
    this.logo.style.visibility = 'visible';
  }
}

export default LogoToggle;
