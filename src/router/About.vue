
<template>
  <div class="container2">
   <img src="./slide2.jpg" height="400px" width="100%" alt=""> 
     <h2 class="title">My Hobbies</h2>
            <ul>
                <li v-for="passion in passions" v-text="passion"></li>
            </ul>

        <input id="input" type="text" v-model="newPassion">
         <button @click="addPassion">Add Hobby</button>
    
   <p>{{ count }}</p>
   <p>
    <button @click="increment">+</button>
    <button @click="decrement">-</button>
  </p>

        <watch class="section"></watch>

  </div>
</template>

<script>
export default {
  name: 'hello',
  data() {
  return{
  newPassion: '',
            passions: ['Playing Piano', 'Coding', 'Skating']
  }
                   
        },

  computed: {
    count () {
      return this.$store.state.count
    }
  },

        methods: {
            addPassion: function() {
                this.passions.push(this.newPassion);
                this.newPassion = '';
                alert('Hobby Added');
                },
            increment () {
               this.$store.commit('increment')
             },

            decrement () {
               this.$store.commit('decrement')
             }
          }
  }

</script>

<style>
        .container2 { 
            padding-top: 40px;
            background-color: #D0DEFC ;
         } 
      
</style>