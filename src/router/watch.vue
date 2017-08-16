<template>

<div v-bind:style="{ color: activeColor, fontSize: fontSize + 'px' }">Author: {{ fullName }}</div>

</template>

<script>

  export default { 
  name: 'watch',
  data() {
  return{

    firstName: 'Millicent',
    lastName: 'Jepkoech',
    fullName: 'Millicent Jepkoech',
    activeColor: 'green',
    fontSize: 20
    }
  },

  watch: {
    firstName: function (val) {
      this.fullName = val + ' ' + this.lastName
    },
    lastName: function (val) {
      this.fullName = this.firstName + ' ' + val
    }
  }
}
</script>

<style>
      
</style>