<template>
  <v-container fluid>
    <v-row no-gutters>
      <v-col>
        <v-card class="mb-2">
          <v-col>
            <p class="subtitle-1 ">
              For details of interns, search by UID or scan the QR on the
              certificate.
            </p>

            <v-text-field
              append-icon="mdi-magnify"
              hide-details
              label="Enter UID"
              filled=""
              shaped=""
              v-model="searchid"
            ></v-text-field>
          </v-col>
        </v-card>
        <v-sheet>
          <v-simple-table>
            <thead>
              <tr>
                <td>{{ searchid }}</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Name</td>
                <td>Anand</td>
              </tr>
            </tbody>
          </v-simple-table>
          <internDetails :searchid="searchid" />
        </v-sheet>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import internDetails from '~/components/internDetails.vue'
import VuetifyLogo from '~/components/VuetifyLogo.vue'

export default {
  components: {
    internDetails,
    VuetifyLogo
  },
  data() {
    return {
      searchid: null,

      intern: null
    }
  },
  methods: {}
}
</script>
