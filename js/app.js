const { createApp } = Vue;

createApp({
  data() {
    return {
      disks: [],
      searchBar: '',
    }
  },
  methods:{
// chiamat axios.post con tre parametri 1- la chiamata all/API 2-data 3- header per riferire il tipo di dato 
    fetchData() {
        axios.post('./server.php', {
          input: this.searchBar
        }, {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        }).then((res) => {
            this.disks = res.data.arrayDisks;
            // console.log(this.disks);
        });
    },
  },
  getModal(disc){
    
  }
 
  
}).mount('#app')