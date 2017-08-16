<template>
    <div class="container2">
      <img src="./slide2.jpg" height="400px" width="100%" alt=""> 
         <h2 class="title">My Talents</h2>
        <ul>
        <li v-for="skill in talentSkill" v-text="skill.description"></li>
       </ul>
      <watch class="section"></watch>

    </div>
</template>


<script>

  export default { 
  name: 'hello',
  data() {
  return{
  skills: [
                {description: 'Programming', talent: true},
                {description: 'Blogging', talent: false},
                {description: 'Web Design', talent: true},
                {description: 'Networking', talent: false}
            ]
        }
    },
                   
       computed: {
            talentSkill: function() {
                return this.skills.filter(skill => skill.talent);
            }
        }
    }
</script>

<style>
        .container2 { 
            padding-top: 40px;
            background-color: #D0DEFC;
         } 
      
</style>