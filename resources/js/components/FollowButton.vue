<template>
    <div class="root">
      <button class="btn btn-primary" style="margin-left:10px" @click="followUser">Follow</button>
    </div>
</template>

<script>
    export default {
        props: ['userId'],

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
          followUser(){
            alert("This is just a test for the Follow Button Component!!! If its working!!");
            axios.post('/follow/' + this.userId).then(response => {
              //alert(response.data);
              console.log(response.data);
            });
          }
        
        }
    }
</script>
