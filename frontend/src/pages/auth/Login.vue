<template lang="pug">
  q-page.row.justify-center.items-center(style="background: linear-gradient(#009688, #15423e);")
    .column.q-pa-lg
      .row
        q-card.shadow-24(square style="width:300px;height:485px;")
          q-card-section.bg-green-5
            h4.text-h5.text-white.q-my-md.text-center Sign in to Trip
          q-card-section
            q-form.q-px-sm.q-pt-sm
              q-input(square clearable v-model="email" type="email" label="Email")
                template(v-slot:prepend)
                  q-icon(name="email")
              q-input(square clearable v-model="password" type="password" label="password")
                template(v-slot:prepend)
                  q-icon(name="lock")
          q-card-actions.q-px-lg
            q-btn.full-width.text-white(unelevated size="lg" color="green-10" label="Sign In")
          q-card-section.text-center.q-pa-sm
            p.text-grey-6 Forgot your password?
</template>

<script>
export default {
  name: 'Login',
  data () {
    return {
      email: '',
      username: '',
      password: ''
    }
  }
}
</script>

<style>
</style>