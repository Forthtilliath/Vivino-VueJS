const vue = new Vue({
  data: () => {
    return {
      wines: [],
      searchKey: "",
      inputType: "",
      countries: [],
      countriesOption: [],
      countrySelected: "",
      grapesRadio: [
        { name: "Pinot Noir" },
        { name: "Syrah" },
        { name: "Merlot" },
      ],
      grapesSelected: "",
    };
  },

  computed: {
    search() {
      return this.wines.filter(
        (wine) =>
          wine.name.toLowerCase().includes(this.searchKey.toLowerCase()) &&
          wine.country
            .toLowerCase()
            .includes(this.countrySelected.toLowerCase()) &&
          wine.grapes.toLowerCase().includes(this.grapesSelected.toLowerCase())
      );
    },
  },

  methods: {
    removeItem(id) {
      this.$delete(this.wines, id);
    },
    searchInput(param) {
      this.inputType = param != this.inputType ? param : "";
    },
    cancelSearch() {
      this.searchKey = "";
      this.countrySelected = "";
      this.grapesSelected = "";
    }
  },

  mounted() {
    axios
      .get("libraries/controllers/getData.php")
      .then((res) => res.data)
      .then((res) => (this.wines = res))
      .then(
        () =>
          (this.countries = [
            ...new Set(this.wines.map((wine) => wine.country)),
          ].sort())
      )
      .then(
        () =>
          (this.countriesOption = this.countries.map((country) => ({
            name: country,
            id: country,
          })))
      );
  },
}).$mount("#vue-app");
