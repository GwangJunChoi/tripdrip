<template>
  <div id="q-app">
    <router-view />
  </div>
</template>
<script>
export default {
  name: 'App'
}
</script>
<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&family=Roboto&display=swap');
a, a:link, a:visited, a:hover, a:active {
  text-decoration: none;
  color: inherit;
}
html, body {
  font-family: 'Noto Sans KR', sans-serif;
//   font-family: 'Roboto', sans-serif;  
}

</style>
