<template>
  <div id="app">
    <router-link to="/about">About</router-link>
    <router-link to="/coins">Ethereum</router-link>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'app'
}
</script>
