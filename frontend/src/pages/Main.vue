<template lang="pug">
  section
    q-banner.bg-primary.text-white pug 세팅 되었읍니다. 두번쓰고 세번쓰고 네번 계쏙 쓰십셔.
      template(v-slot:action)
        q-btn(flat color="white" label="두번 쓰고")
        q-btn(flat color="white" label="세번 쓰고")
    .sub-title
      .example 아시겠죠?
    
</template>

<script>
export default {
  name: 'Main'
}
</script>

<style lang="scss">
  .sub-title {
    border: 1px solid;

    .example {
      font-weight: bold;
    }
  }
</style>
