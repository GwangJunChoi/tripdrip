<template lang="pug">
	.WAL.position-relative.bg-grey-4(:style="style")
		q-layout.WAL__layout.shadow-3(view="lHh Lpr lFf" container)
			Header
			q-page-container
				router-view
			Footer
</template>

<script>
import Header from 'components/common/Header.vue'
import Leftside from 'components/common/Leftside.vue'
import Footer from 'components/common/Footer.vue'

export default {
  components: { 
		Header,
		Leftside,
    Footer, 
	},
	computed: {
    style () {
      return {
        height: this.$q.screen.height + 'px',
      }
    }
  },
  data() {
    return {
    }
  },
  methods: {
  },
}
</script>

<style lang="sass">
.WAL 
  width: 100%
  height: 100%
  padding-top: 20px
  padding-bottom: 20px
  &:before
    content: ''
    height: 127px
    position: fixed
    top: 0
    width: 100%
    background-color: #009688
  &__layout
    margin: 0 auto
    z-index: 4000
    height: 100%
    width: 95%
    max-width: 12500px
    border-radius: 5px
  &__field.q-field--outlined .q-field__control:before
    border: none
  .q-drawer--standard
    .WAL__drawer-close
      display: none
@media (max-width: 850px)
  .WAL
    padding: 0
    &__layout
      width: 100%
      border-radius: 0
@media (min-width: 691px)
  .WAL
    &__drawer-open
      display: none
.conversation__summary
  margin-top: 4px
.conversation__more
  margin-top: 0!important
  font-size: 1.4rem
</style>
