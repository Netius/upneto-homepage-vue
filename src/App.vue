<script setup>
import "bootstrap/dist/js/bootstrap.bundle.min";

import NavigationBar from "./components/NavigationBar.vue";
import Hero from "./components/Hero.vue";
import SkillsSets from "./components/SkillsSets.vue";
import AboutMe from "./components/AboutMe.vue";
import ContactForm from "./components/ContactForm.vue";
import FooterPage from "./components/FooterPage.vue";
</script>

<template>
  <div>
    <NavigationBar />
    <Hero />
    <AboutMe />
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
