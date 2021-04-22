<template lang="pug">
  q-header(elevated) 
    q-toolbar.bg-primary.text-white.shadow-2
      q-btn.WAL__drawer-open.q-mr-sm(
        round
        flat
        icon="keyboard_arrow_left"
        @click="leftDrawer = true"
      )
      router-link(:to="'/'")
        q-avatar
          img(src="/icons/favicon-96x96.png")
      span.text-h5.q-pl-sm.text-bold Trip
      q-toolbar
        q-input.WAL__field(rounded outlined dense bg-color="white" v-model="search" placeholder="search")
          template(slot="prepend")
            q-icon(name="search")

      q-btn(round flat icon="more_vert")
        q-menu(auto-close :offset="[110, 0]")
          q-list(style="min-width: 150px")
            q-item(clickable)
              q-item-section 
                router-link(:to="'/login'") Sign in
            q-item(clickable)
              q-item-section 
                router-link(:to="'/signup'") Sign up
    q-drawer(
      v-model="leftDrawer"
      show-if-above
      bordered
      :breakpoint="690")
      q-toolbar.bg-secondary.text-white.shadow-2
        q-space
        q-btn(round flat icon="people")
        q-btn(round flat icon="place")
        q-btn(round flat icon="message")
          q-badge(floating color="red") N
        q-btn.WAL__drawer-close(
          round
          flat
          icon="close"
          @click="leftDrawer = false"
          )
      q-scroll-area.light-green-2.text-green-10(style="height: calc(100% - 50px)")
        q-list
          q-item(clickable v-ripple)
            q-item-section(avatar)
              q-avatar
                img(src="/icons/favicon-96x96.png")
            q-item-section
              q-item-label(lines="1") person
              q-item-label.conversation__summary(caption) i`m working on quasar
                q-icon(name="check")
                q-icon(name="not_interested")
            q-item-section(side)   
              q-item-label(caption) 15:00
              q-icon(name="keyboard_arrow_down")
</template>
<script>
export default {
  data () {
    return {
      leftDrawer: false,
      search: '',
    }
  },
  created() {
    console.log(this.$router)
  },
  methods: {
  }
}
</script>

<style lang="sass"> 
  .q-header
    background: linear-gradient(90deg, #6478fb, #8763fb)
    .q-avatar:hover img
      transform: rotate(360deg)
      transition: transform .8s ease-in-out
</style>