import loadClientScripts from './load-client-scripts'

import { axios } from '../axios-config'

import 'babel-polyfill'

import { createLocales } from '../vue-i18n-config'

window.axios = axios

export function createApp() {
  const i18n = createLocales(window.locale)

  const app = new Vue({
    i18n
  })

  return { app }
}

// Load Client Scripts
loadClientScripts(createApp)
