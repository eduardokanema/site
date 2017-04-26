Vue.use(VueMaterial)
var App = new Vue({
  el: '#app',
  data: {
    picture: '//graph.facebook.com/1543531044/picture?type=large&width=720',
    email: 'eduardo.pacheco@kanema.com.br',
    email_href: 'mailto:eduardo.pacheco@kanema.com.br',
    phone: '55 51 99825-1921',
  },
  methods: {
    toggleInfo: function() {
      alert('oi')
    }
  }
})
