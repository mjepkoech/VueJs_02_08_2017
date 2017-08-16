<template>
    <div class="container2">
     <img src="./slide2.jpg" height="400px" width="100%" alt=""> 
        <h2 class="title">My Skills</h2>
        <ul>
          <li v-for="skill in skills" v-text="skill.description"></li>
        </ul>
       <watch class="section"></watch>

    </div>
</template>


<script>
 
  export default { 
  name: 'Talents',
  data() {
        return{
            skills: [
                { description: 'Programming', talent: true },
                { description: 'Blogging', talent: false },
                { description: 'Web Design', talent: true },
                { description: 'Networking', talent: false }
            ]
        }
    }, 
}

</script>

<style>
        .container2 { 
            padding-top: 40px;
            background-color: #D0DEFC ;
         } 
      
</style>