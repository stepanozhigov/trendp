<template>
  <form class="form" @submit.prevent="submitForm">
    <div class="input_field">
      <masked-input
        type="tel"
        autocomplete="off"
        placeholder="Ваш телефон"
        class="input"
        :class="{ error: !isValid }"
        v-model="$v.phone.$model"
        :mask="{
          pattern: '\+7 (V11) 111-11-11',
          formatCharacters: {
            V: {
              validate: (char) => /[0-9]/.test(char),
            },
          },
        }"
        @focus.native="isValid = true"
      />
      <div v-if="!isValid" class="error_wrapper">
        <span class="error_alert">некорректный телефон</span>
      </div>
    </div>
    <div class="input_field">
      <button class="btn btn_purple btn_pulse">
        <span>{{ buttonName }}</span>
      </button>
    </div>
  </form>
</template>
<script>
import MaskedInput from "vue-masked-input";
import { required, helpers } from "vuelidate/lib/validators";
import axios from "axios";

//валидация телефона по регулярному вырожению
const phoneValidat = helpers.regex(
  "phoneValidat",
  /^(\+)?(\(\d{2,3}\) ?\d|\d)(([ \-]?\d)|( ?\(\d{2,3}\) ?)){5,12}\d$/
);

export default {
  data: () => ({
    phone: "",
    isValid: true,
  }),
  props: {
    buttonName: {
      type: String,
      default: "Заказать",
    },
    title: {
      type: String,
      default: "",
    },
    type: {
      type: String,
      default: "",
    },
  },
  validations: {
    phone: {
      required,
      phoneValidat,
    },
  },
  methods: {
    submitForm() {
      if (this.$v.phone.$invalid) {
        this.isValid = false;
      } else {
        this.isValid = true;
        if (this.type === "callback") {
          ym(67400167, "reachGoal", "vi-callback");
          ga("send", "event", "callback", "send");
        } else {
          ym(44460466, "reachGoal", "lead");
          ga("send", "event", "lead", "send");
        }
        axios
          .post("/leads", {
            phone: this.phone,
            name: "TREND PRO",
            tag: "TREND PRO TAG",
          })
          .then(
            (response) => (
              (this.phone = ""),
              (this.$store.state.isSuccess = true),
              (this.$store.state.isModal = true)
            )
          );
      }
    },
  },
  components: { MaskedInput },
};
</script>
