import { createApp } from 'vue'
import { createI18n } from 'vue-i18n'
import { createPinia } from 'pinia'
import translations from './translations'
import App from './App.vue'

const i18n = createI18n({
	locale: 'en',
	fallbackLocale: 'en',
	messages: translations,
})

const app = createApp(App)

app.use(createPinia())
app.use(i18n)

app.mount('#product')
