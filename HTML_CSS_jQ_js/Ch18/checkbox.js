Vue.createApp({
  data() {
    return {
      interest: []
    }
  }
}).mount('#app');

Vue.createApp({
  data(){
    return{
      message:''
    }
  }
}).mount('#textarea');

Vue.createApp({
  data(){
    return{
      education:''
    }
  }
}).mount('#dropdown');

Vue.createApp({
  data(){
    return{
      num1: 0,
      num2: 0
    }
  }
}).mount('#sum');