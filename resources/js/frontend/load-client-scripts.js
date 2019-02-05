import '../fontawesome'
import intlTelInput from 'intl-tel-input'
import swal from 'sweetalert2'
import WebFont from 'webfontloader'

/**
 * JS Settings App
 */
let jsonSettings = document.querySelector(
  '[data-settings-selector="settings-json"]'
)
window.settings = jsonSettings ? JSON.parse(jsonSettings.textContent) : {}

window.swal = swal
window.locale = $('html').attr('lang')

export default createApp => {
  /**
   * Font
   */
  WebFont.load({
    google: {
      families: ['Roboto']
    }
  })
  /**
   * Cookie Consent
   */
  window.addEventListener('load', () => {
    window.cookieconsent.initialise({
      palette: {
        popup: {
          background: '#fff',
          text: '#777'
        },
        button: {
          background: '#3097d1',
          text: '#ffffff'
        }
      },
      showLink: false,
      theme: 'edgeless',
      content: {
        message: window.settings.cookieconsent.message,
        dismiss: window.settings.cookieconsent.dismiss
      }
    })
  })
}
