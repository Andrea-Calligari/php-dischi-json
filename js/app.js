const { createApp } = Vue;

createApp({
  data() {
    return {
      message: 'Hello Vue!',
      disks: [],
    }
  },
  methods:{

    fetchData() {

        axios.get('./server.php').then((res) => {
            this.disks = res.data.arrayDisks;
            // console.log(this.disks);
        });
    },
  }
  
}).mount('#app')