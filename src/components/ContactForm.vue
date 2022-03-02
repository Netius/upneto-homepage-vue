<script>
export default {
	data() {
		return {
			errors: [],
			name: null,
			email: null,
			message: null,
		};
	},
	methods: {
		checkForm(e) {
		
			this.errors = [];

			if (!this.name) {
				this.errors.push("Name required.");
			}
			if (!this.email) {
        this.errors.push('Email required.');
      }

			if (!this.message) {
				this.errors.push("Message required.");
			}

      if (!this.errors.length) {
        this.errors=[];
        return true;
			}else{
        e.preventDefault();
      }

		},
	},
};
</script>

<template>
	<section id="contact" class="container my-5">
		<div class="row d-block d-md-flex">
			<div
				class="col secondary__bg align-self-center text-center rounded contact__queries text-dark my-3"
			>
				<h1>
					Any queries
					<i class="bi bi-patch-question-fill fs-1"></i>
				</h1>
			</div>
			<div class="col">
				<form
					id="contactForm"
					@submit="checkForm"
					action="send_form_email.php"
					method="post"
				>
					<div v-if="errors.length">
						<ul>
							<li class="text-danger" v-for="error in errors" :key="error.index">{{ error }}</li>
						</ul>
					</div>
					<div class="mb-3">
						<input
							class="form-control"
							id="name"
							v-model="name"
							type="text"
							placeholder="Name"
						/>
					</div>

					<div class="mb-3">
						<input
							class="form-control"
							id="email"
							v-model="email"
							type="email"
							placeholder="Email address"
						/>
					</div>

					<div class="mb-3">
						<textarea
							class="form-control"
							id="message"
							v-model="message"
							type="text"
							placeholder="Message"
						></textarea>
					</div>

					<div class="d-grid">
						<button title="Send email" class="btn btn__primary btn-lg" type="submit">Send</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</template>
