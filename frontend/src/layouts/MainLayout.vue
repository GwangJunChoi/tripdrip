<template lang="pug">
  q-layout(view="hHh lpR fFf")
    Header
    q-page-container
      router-view
    Footer
</template>

<script>
import Header from 'components/common/Header.vue'
import Footer from 'components/common/Footer.vue'

export default {
  components: { 
    Header,
    Footer, 
  },
}
</script>

<style>

</style>