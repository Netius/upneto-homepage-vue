<script setup>
import NavigationBar from "./components/NavigationBar.vue";
import "bootstrap/dist/js/bootstrap.bundle.min";
import SkillsSets from "./components/SkillsSets.vue";
import ContactForm from "./components/ContactForm.vue";
import FooterPage from "./components/FooterPage.vue";
</script>

<template>
  <div>
    <NavigationBar />
    <SkillsSets />
    <div class="container">
      <ContactForm />
    </div>
    <FooterPage />
  </div>
</template>

<style>
@import "./assets/styles.css";
</style>
