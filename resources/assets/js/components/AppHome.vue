<template>
  <div>
    <toolbar></toolbar>
      <router-view></router-view>

    <app-footer></app-footer>
  </div>
</template>

<script>
import toolbar from "./Toolbar.vue";
import AppFooter from "./AppFooter.vue";
import Login from "./Login/Login.vue";

export default {
  components: { toolbar, AppFooter, Login }
};
</script>

<style>
</style>
