class Slideshow {
  constructor() {
    this.images = document.getElementsByClassName('slideshow__item');
    this.container = document.getElementById('button-container');
    this.buttons = document.getElementsByClassName('slideshow__button');
    this.counter = document.getElementById('slideshow__number');
    this.events();
  }

  events() {
    this.container.addEventListener('click', event => {
      if (event.target.classList.contains('slideshow__button')) {
        this.toggleButtons();
        this.toggleImages();
        event.target.classList.add('slideshow__button--active');
        this.images[event.target.dataset.index].classList.add('slideshow__item--visible');
        this.counter.textContent = `0${Number(event.target.dataset.index) + 1}`;
      }
    });
  }

  toggleButtons() {
    Array.prototype.forEach.call(this.buttons, element =>
      element.classList.remove('slideshow__button--active')
    );
  }

  toggleImages() {
    Array.prototype.forEach.call(this.images, element =>
      element.classList.remove('slideshow__item--visible')
    );
  }
}

export default Slideshow;
