const { createApp } = Vue;

createApp({
  data() {
    return {
      disks: [],
      searchBar: '',
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