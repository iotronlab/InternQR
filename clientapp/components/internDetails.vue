<template>
  <div>
    intern details
    {{ intern }}
  </div></template
>
<script>
export default {
  data() {
    return {
      searchid: null,

      intern: null
    }
  },
  mounted() {
    this.search()
  },
  methods: {
    async search({ searchid }) {
      let response = await this.$axios.$get(`/intern/${searchid}`)

      return {
        intern: response.data
      }
    }
  }
}
</script>
