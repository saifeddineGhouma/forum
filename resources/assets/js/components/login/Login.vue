<template>
  <v-form>
    <v-container>
      <v-row>
        <v-col cols="12" md="12">
          <v-text-field
            v-model="emaile"
            label="E-mail"
            type="email"
            required
          ></v-text-field>
        </v-col>
        <v-col cols="12" md="12">
          <v-text-field
            v-model="password"
            type="password"
            label="password"
            required
          ></v-text-field>
        </v-col>
        <v-col cols="12" md="12">
          <v-btn
          type="submit"
          color="green"
          >LogIn</v-btn>
        </v-col>
      </v-row>
    </v-container>
  </v-form>
</template>
<script>
export default {};
</script>

<style>
</style>

