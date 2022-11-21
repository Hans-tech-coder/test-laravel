<template>
    <div class="root">
    
      <button class="btn btn-primary" style="margin-left:10px" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        props: ['userId' , 'follows'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function (){
          return {
            status: this.follows,
          }
        },

        methods: {
          followUser(){
            //alert("This is just a test for the Follow Button Component!!! If its working!!");
            axios.post('/follow/' + this.userId).then(response => {
              //alert(response.data);
              this.status = ! this.status;
              console.log(response.data);
            });
          }
        
        },

        computed: {
          buttonText(){
            return (this.status) ? 'Unfollow' : 'Follow';
          }
        }
    }
</script>
