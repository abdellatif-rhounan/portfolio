<template>
	<section class="portfolio-section" id="contact">
		<div class="container">
			<h2 class="heading">
				Contactez
				<span>Moi</span>
			</h2>

			<div class="row gy-5">
				<div class="form-wrapper col-12 col-lg-7 col-xxl-6">
					<h3 class="sub-heading">Envoyez Moi un Message :</h3>

					<form ref="form" @submit.prevent="submitForm">
						<div class="row">
							<div class="col-6 form-floating mb-3">
								<input
									type="text"
									class="form-control"
									placeholder="Votre Nom Complet"
									id="fullname"
									name="from_name"
									:class="{ 'is-invalid': v.fromName.$error }"
									v-model="fromName"
								/>

								<label class="label" for="fullname">Votre Nom Complet</label>

								<div
									v-if="v.fromName.$errors"
									class="invalid-feedback"
									v-for="error of v.fromName.$errors"
									:key="error.$uid"
								>
									{{ error.$message }}
								</div>
							</div>

							<div class="col-6 form-floating mb-3">
								<input
									type="text"
									class="form-control"
									placeholder="Votre Email"
									id="email"
									name="from_email"
									:class="{ 'is-invalid': v.fromEmail.$error }"
									v-model="fromEmail"
								/>

								<label class="label" for="email">Votre Email</label>

								<div
									v-if="v.fromEmail.$errors"
									class="invalid-feedback"
									v-for="error of v.fromEmail.$errors"
									:key="error.$uid"
								>
									{{ error.$message }}
								</div>
							</div>
						</div>

						<div class="form-floating mb-3">
							<input
								type="text"
								class="form-control"
								placeholder="Objet"
								id="object"
								name="subject"
								:class="{ 'is-invalid': v.subject.$error }"
								v-model="subject"
							/>

							<label class="label" for="object">Objet</label>

							<div
								v-if="v.subject.$errors"
								class="invalid-feedback"
								v-for="error of v.subject.$errors"
								:key="error.$uid"
							>
								{{ error.$message }}
							</div>
						</div>

						<div class="form-floating mb-3">
							<textarea
								class="form-control"
								placeholder="Votre Message Ici"
								id="message"
								name="message"
								:class="{ 'is-invalid': v.message.$error }"
								v-model="message"
							>
							</textarea>

							<label class="label" for="message">Votre Message Ici</label>

							<div
								v-if="v.message.$errors"
								class="invalid-feedback"
								v-for="error of v.message.$errors"
								:key="error.$uid"
							>
								{{ error.$message }}
							</div>
						</div>

						<ButtonComp class="btn-c btn-brand" type="submit">
							Envoyez Message
						</ButtonComp>
					</form>
				</div>

				<div class="info-wrapper col-12 col-lg-5 col-xxl-6">
					<h3 class="sub-heading">Informations de base :</h3>

					<div class="row">
						<div class="info-box col-12 col-sm-6 col-lg-12 col-xxl-6">
							<h4>Nom Complet :</h4>
							<span
								>{{ informations["firstname"] }}
								{{ informations["lastname"] }}</span
							>
						</div>

						<div class="info-box col-12 col-sm-6 col-lg-12 col-xxl-6">
							<h4>
								<i class="bx bxl-gmail"></i>
								Email :
							</h4>
							<span>{{ informations["mail"] }}</span>
						</div>

						<div class="info-box col-12 col-sm-6 col-lg-12 col-xxl-6">
							<h4>
								<i class="bx bx-phone"></i>
								Télephone :
							</h4>
							<span>{{ informations["phone"] }}</span>
						</div>

						<div class="info-box col-12 col-sm-6 col-lg-12 col-xxl-6">
							<h4>
								<i class="bx bxl-whatsapp"></i>
								WhatsApp :
							</h4>
							<span>{{ informations["whatsapp"] }}</span>
						</div>

						<div class="info-box col-12 col-sm-6 col-lg-12 col-xxl-6">
							<h4>
								<i class="bx bx-briefcase"></i>
								Emploi :
							</h4>
							<span>{{ informations["job"] }}</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
import ButtonComp from "@/Components/ButtonComp.vue";
import useVuelidate from "@vuelidate/core";
import { required, email, minLength, maxLength } from "@vuelidate/validators";
import Swal from "sweetalert2";
import emailjs from "@emailjs/browser";

export default {
	name: "Contact",

	setup() {
		return { v: useVuelidate() };
	},

	components: {
		ButtonComp,
	},

	data() {
		return {
			fromName: "",
			fromEmail: "",
			subject: "",
			message: "",
		};
	},

	validations() {
		return {
			fromName: {
				required,
				minLengthValue: minLength(5),
				maxLengthValue: maxLength(50),
			},
			fromEmail: {
				required,
				email,
				maxLengthValue: maxLength(100),
			},
			subject: {
				required,
				minLengthValue: minLength(5),
				maxLengthValue: maxLength(255),
			},
			message: {
				required,
				minLengthValue: minLength(20),
				maxLengthValue: maxLength(1000),
			},
		};
	},

	methods: {
		async submitForm() {
			const isFormCorrect = await this.v.$validate();

			if (!isFormCorrect) {
				return;
			}

			Swal.fire({
				title: "Please Confirm Action!",
				icon: "info",
				showCancelButton: true,
				confirmButtonText: "Send Message",
				timer: 7000,
				width: "48rem",
				padding: "2rem",
			}).then((res) => {
				if (res.isConfirmed) {
					this.sendMail();
				}
			});
		},

		sendMail() {
			emailjs
				.sendForm(
					"service_37l6w0f",
					"template_7cc02nx",
					this.$refs.form,
					"HSl8vPcenw2_26VzA"
				)
				.then(
					() => {
						Swal.fire("Message Sent Successfully", "", "success");
						this.fromName = "";
						this.fromEmail = "";
						this.subject = "";
						this.message = "";
					},
					() => {
						Swal.fire("Failed To Send The Message", "", "error");
					}
				);
		},
	},

	computed: {
		informations() {
			return this.$store.state.informations;
		},
	},
};
</script>

<style lang="scss" scoped>
@use "../../css/helpers/variables" as *;

.portfolio-section {
	display: flex;
	padding-bottom: calc(1.5rem + 52px);
	background: $second_bg_color;
	letter-spacing: 0.5px;
}

.container {
	display: flex;
	flex-basis: 100%;
	flex-direction: column;
	justify-content: center;
	row-gap: 22px;
}

.sub-heading {
	display: inline-block;
	margin-bottom: 30px;
	padding-bottom: 5px;
	border-bottom: 2px solid $brand_color;
	font-size: 20px;
}

.form-floating {
	&.col-6 .label {
		left: calc(var(--bs-gutter-x) * 0.5);
	}

	.form-control {
		background-color: transparent;
		letter-spacing: 1px;
		font-size: 14px;
		color: $text_color;

		&:not(.is-invalid) {
			border-color: $brand_color;

			&:focus {
				box-shadow: 0 0 6px $brand_color;
			}
		}

		&:-webkit-autofill {
			-webkit-text-fill-color: $text_color;
			-webkit-background-clip: text;
		}
	}

	.label {
		font-size: 14px;
		color: lightgray !important;

		&::after {
			background-color: transparent !important;
		}
	}

	textarea {
		height: 130px;
		overflow-y: auto;
	}
}

.info-box {
	margin-bottom: 20px;

	h4 {
		margin-bottom: 7px;
		font-size: 20px;
		color: $brand_color;

		i {
			margin-right: 3px;
			vertical-align: top;
			font-size: 23px;
		}
	}

	> span {
		word-wrap: break-word;
		font-size: 16px;
	}
}

// Large Screen
@media (min-width: 992px) {
	.portfolio-section {
		padding-bottom: calc(1.5rem + 55px);
	}
}
</style>
