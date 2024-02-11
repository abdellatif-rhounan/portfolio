<template>
	<section class="portfolio-section" id="contact">
		<div class="container">
			<h2 class="heading">
				Contactez
				<span>Moi</span>
			</h2>

			<div class="content">
				<div class="form-wrapper">
					<h3 class="sub-heading">Envoyez Moi un Message :</h3>

					<form class="form" ref="form" @submit.prevent="submitForm">
						<div class="input-group">
							<input
								type="text"
								class="field"
								:class="{ invalid: v.fromName.$error }"
								placeholder="Votre Nom Complet*"
								name="from_name"
								v-model="fromName"
							/>

							<div
								class="error-field"
								v-for="error of v.fromName.$errors"
								:key="error.$uid"
							>
								{{ error.$message }}
							</div>
						</div>

						<div class="input-group">
							<input
								type="text"
								class="field"
								:class="{ invalid: v.fromEmail.$error }"
								placeholder="Votre Email*"
								name="from_email"
								v-model="fromEmail"
							/>

							<div
								class="error-field"
								v-for="error of v.fromEmail.$errors"
								:key="error.$uid"
							>
								{{ error.$message }}
							</div>
						</div>

						<div class="input-group">
							<input
								type="text"
								class="field"
								:class="{ invalid: v.subject.$error }"
								placeholder="Objet*"
								name="subject"
								v-model="subject"
							/>

							<div
								class="error-field"
								v-for="error of v.subject.$errors"
								:key="error.$uid"
							>
								{{ error.$message }}
							</div>
						</div>

						<div class="input-group">
							<textarea
								class="field textarea"
								:class="{ invalid: v.message.$error }"
								placeholder="Votre Message Ici*"
								name="message"
								v-model="message"
							>
							</textarea>

							<div
								class="error-field"
								v-for="error of v.message.$errors"
								:key="error.$uid"
							>
								{{ error.$message }}
							</div>
						</div>

						<ButtonComp class="btn btn-brand" type="submit">
							Envoyez Message
						</ButtonComp>
					</form>
				</div>

				<div class="info-wrapper">
					<h3 class="sub-heading">Informations de base :</h3>

					<div class="info-content">
						<div class="info-box">
							<h4>Nom Complet :</h4>
							<span>Abdellatif RHOUNAN</span>
						</div>

						<div class="info-box">
							<h4>
								<i class="bx bxl-gmail"></i>
								Email :
							</h4>
							<span>abdellatif.rhounan@gmail.com</span>
						</div>

						<div class="info-box">
							<h4>
								<i class="bx bx-phone"></i>
								Télephone :
							</h4>
							<span>+212-614-17-19-11</span>
						</div>

						<div class="info-box">
							<h4>
								<i class="bx bxl-whatsapp"></i>
								WhatsApp :
							</h4>
							<span>+212-614-17-19-11</span>
						</div>

						<div class="info-box">
							<h4>
								<i class="bx bx-briefcase"></i>
								Emploi :
							</h4>
							<span>Ouvert</span>
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
};
</script>

<style lang="scss" scoped>
@use "../../css/helpers/variables" as *;

.portfolio-section {
	padding-bottom: calc(2rem + 60px);
	background: $second_bg_color;
	letter-spacing: 0.5px;
}

.container {
	display: flex;
	flex-direction: column;
	gap: 4rem;
}

.content {
	display: flex;
	gap: 8rem;
}

.form-wrapper {
	flex-basis: 52%;
}

.info-wrapper {
	flex-basis: 40%;
}

.sub-heading {
	display: inline-block;
	margin-bottom: 30px;
	padding-bottom: 5px;
	border-bottom: 2px solid $brand_color;
	font-size: 23px;
}

.form {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	gap: 2rem;

	.input-group {
		flex-basis: calc(50% - 1rem);

		&:nth-child(3),
		&:nth-child(4) {
			flex-basis: 100%;
		}

		.error-field {
			padding: 0 10px;
			font-size: 12px;
			color: red;
		}
	}

	.field {
		display: inline-block;
		width: 100%;
		margin-bottom: 5px;
		padding: 10px 13px;
		border-radius: 7px;
		border: 1px solid $brand_color;
		background: transparent;
		letter-spacing: 1px;
		font-size: 16px;
		color: $text_color;

		&:focus {
			box-shadow: 0 0 6px $brand_color;
		}

		&:-webkit-autofill {
			box-shadow: 0 0 0 22px rgb(66 61 61) inset;
			-webkit-text-fill-color: $brand_color;
		}

		&.invalid {
			border-color: red;
			box-shadow: 0 0 6px red;
		}
	}

	.textarea {
		height: 130px;
		resize: none;
		overflow-y: auto;
	}
}

.info-content {
	display: flex;
	flex-wrap: wrap;
	column-gap: 3rem;
	row-gap: 2rem;
	font-size: 18px;
}

.info-box {
	width: 40%;

	h4 {
		margin-bottom: 5px;
		color: $brand_color;

		i {
			margin-right: 3px;
			vertical-align: top;
			font-size: 25px;
		}
	}
}
</style>
