<template>
  <div id="app">
    <router-link to="/about">About Me</router-link>
    <router-link to="/talents">My Skills</router-link>
    <router-link :to="{ name: 'Hello' }">My Talents</router-link>

    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'app'
}
</script>
