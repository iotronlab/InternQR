<template>
  <v-sheet>
    <v-simple-table>
      <thead>
        <tr>
          <td>Intern details:</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>UID</td>
          <td>{{intern.uid}}</td>
        </tr>
        <tr>
          <td>Name</td>
          <td>{{intern.name}}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>{{intern.email}}</td>
        </tr>
        <tr>
          <td>Starting Date</td>
          <td>{{intern.startdate}}</td>
        </tr>
        <tr>
          <td>Ending Date</td>
          <td>{{intern.enddate}}</td>
        </tr>
        <tr>
          <td>Duration</td>
          <td>{{intern.duration}}</td>
        </tr>
        <tr>
          <td>Projects</td>
          <td>{{intern.project}}</td>
        </tr>
        <tr>
          <td>Technologies</td>
          <td>{{intern.tech}}</td>
        </tr>
      </tbody>
    </v-simple-table>
  </v-sheet>
</template>
<script>
export default {
  async asyncData({ params, app }) {
    let response = await app.$axios.$get(`/interns/${params.slug}`)

    return {
      intern: response.data
    }
  }
}
</script>