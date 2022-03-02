<script>
  export default {
    data() {
      return {
        errors: [],
        name: null,
        emailAddress: null,
        message: null
      }
    }
  }

</script>

<template>
  <section id="contact" class="container my-5">
    <div class="row d-block d-md-flex">
      <div
        class="col secondary__bg align-self-center text-center rounded contact__queries text-dark my-3"
      >
        <h1>Any queries <i class="bi bi-patch-question-fill fs-1"></i></h1>
      </div>
      <div class="col">
        <form id="contactForm" 
              @submit.prevent="checkForm"
              action="send_form_email.php" 
              method="post">
          <div v-if="errors.length">
            <b>Please correct the following error(s):</b>
            <ul>
              <li v-for="error in errors">{{ error }}</li>
            </ul>
          </div>
          <div class="mb-3">
            <input
              class="form-control"
              id="name"
              v-model="name"
              type="text"
              placeholder="Name"
              required
            />
          </div>

          <div class="mb-3">
            <input
              class="form-control"
              id="emailAddress"
              v-model="emailAddress"
              type="email"
              placeholder="Email address"
              required
            />
          </div>

          <div class="mb-3">
            <textarea
              class="form-control"
              id="message"
              v-model="message"
              type="text"
              placeholder="Message"
              required
            ></textarea>
          </div>

          <div class="d-grid">
            <button class="btn btn__primary btn-lg" type="submit">Send</button>
          </div>
        </form>
        {{name}} {{message}} {{emailAddress}}
        dasdsadas
      </div>
    </div>
  </section>
</template>
