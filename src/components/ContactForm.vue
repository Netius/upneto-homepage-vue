<template>
  <section id="contact" class="container my-5">
    <div class="row d-block d-md-flex">
      <div
        class="col secondary__bg align-self-center text-center rounded contact__queries text-dark my-3"
      >
        <h1>Any queries <i class="bi bi-patch-question-fill fs-1"></i></h1>
      </div>
      <div class="col">
        <form id="contactForm" action="/send_form_email.php" method="post">
          <div class="mb-3">
            <input
              class="form-control"
              id="name"
              type="text"
              placeholder="Name"
            />
          </div>

          <div class="mb-3">
            <input
              class="form-control"
              id="emailAddress"
              type="email"
              placeholder="Email Address"
            />
          </div>

          <div class="mb-3">
            <textarea
              class="form-control"
              id="message"
              type="text"
              placeholder="Message"
              style="height: 10rem"
            ></textarea>
          </div>

          <div class="d-grid">
            <button class="btn btn__primary btn-lg" type="submit">Send</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</template>
