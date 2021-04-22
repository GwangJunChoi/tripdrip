<template lang="pug">
q-drawer(
  v-model="leftDrawer"
  show-if-above
  bordered
  :breakpoint="690")
  q-toolbar.bg-grey-3
    q-avatar
      img(src="/icons/favicon-96x96.png")
    q-space
    q-btn(round flat icon="message")
    q-btn(round flat icon="more_vert")
      q-menu(auto-close :offset="[110, 8]")
        q-list(style="min-width: 150px")
          q-item(clickable)
            q-item-section New group
    q-btn.WAL__drawer-close(round
      flat
      icon="close"
      )
  q-toolbar.bg-grey-2
    q-input(rounded outlined dense class="WAL__field full-width" bg-color="white" v-model="search" placeholder="Search or start a new conversation")
      template(slot="prepend")
        q-icon(name="search")

  q-scroll-area(style="height: calc(100% - 100px)")
    q-list
      q-item(clickable v-ripple)
        q-item-section(avatar)
          img(src="/icons/favicon-96x96.png")    
  
</template>

<script>
export default {
  props:{
    leftDrawer: {type: Boolean, default: true},
  },
  created() {
    console.log(this.leftDrawer)
  },
  data() {
    return {
      search: '',
    }
  },
}
</script>

<style>

</style>