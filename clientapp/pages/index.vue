<template>
  <v-container fluid>
    <v-row no-gutters>
      <v-col>
        <v-card class="mb-2">
          <v-col>
            <p class="subtitle-1">
              For details of interns, search by UID or scan the QR on the
              certificate.
            </p>
            <v-row class="align-center px-1">
              <v-text-field
                append-icon="mdi-magnify"
                hide-details
                label="Enter UID"
                filled
                shaped
                v-model="searchid"
              ></v-text-field>
            </v-row>
            <v-btn
              class="mt-2"
              style="background: linear-gradient(180deg, #efd5ff 0%, #515ada 100%);"
              :to="{ name: 'intern-slug', params: { slug: searchid } }"
            >search</v-btn>
          </v-col>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  components: {},
  data() {
    return {
      searchid: null
    }
  },
  methods: {}
}
</script>
