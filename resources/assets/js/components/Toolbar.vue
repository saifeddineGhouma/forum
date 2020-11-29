<template>
  <v-app-bar>
    <!--v-app-bar-nav-icon></v-app-bar-nav-icon-->
    <v-toolbar-title>Title</v-toolbar-title>
    <v-spacer></v-spacer>
    <div class="hidden-sm-and-down">
       <router-link to="/form"><v-btn text>Forum</v-btn></router-link>
       <router-link to="/question"><v-btn text>Ask Questions</v-btn></router-link>
      <router-link to="/category"><v-btn text>Category</v-btn></router-link>
       
        <router-link to="/login"><v-btn text>LOgin</v-btn></router-link>
    </div>
  </v-app-bar>
</template>

<script>
export default {};
</script>

<style>
</style>
