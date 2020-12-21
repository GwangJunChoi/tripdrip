<template lang="pug">
  .header-wrapper
    q-header(reveal elevated class="text-white" height-hint="98")
      q-toolbar
        q-btn(dense flat round icon="menu" @click="left = !left")
        q-toolbar-title
          router-link(to="/" class="float-right")
            q-avatar 
              img(src="/icons/favicon-96x96.png")
            span  tripdrip
    q-drawer(v-model="left" side="left" overlay bordered)
</template>
<script>
export default {
  data () {
    return {
      left: false
    }
  },
  methods: {
  }
}
</script>

<style lang="scss"> 
  .q-header {
    background: linear-gradient(90deg, #6478fb, #8763fb);

    .q-avatar:hover img {
      transform: rotate(360deg);
      transition: transform .8s ease-in-out;
    }
  }
</style>