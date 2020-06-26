class ContactForm {
  constructor() {
    this.form = document.getElementById('contact-form');
    this.events();
  }

  events() {
    this.form.addEventListener('focusin', event => {
      if (!event.target.classList.contains('button')) {
        event.target.previousElementSibling.classList.add('contact-form__label--is-focus');
      }
    });
    this.form.addEventListener('focusout', event => {
      if (event.target.value.length === 0) {
        event.target.previousElementSibling.classList.remove('contact-form__label--is-focus');
      }
    });
    this.form.addEventListener('input', event => {
      if (!event.target.validity.valid) {
        event.target.classList.add('contact-form--required');
        event.target.previousElementSibling.classList.add('contact-form__label--required');
      } else {
        event.target.classList.remove('contact-form--required');
        event.target.previousElementSibling.classList.remove('contact-form__label--required');
      }
    });
  }
}

export default ContactForm;