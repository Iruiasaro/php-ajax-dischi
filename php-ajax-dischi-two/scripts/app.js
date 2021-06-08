const root = new Vue({
    el: "#root",
    data: {
        playlist: [],
    },

    methods: {
        getPlaylist() {

            axios.get("http://localhost/Boolean/php-ajax-dischi/php-ajax-dischi-two/partials/raccolta.php")
                .then((resp) => {
                    this.playlist = resp.data;

                }).catch((error) => {
                    alert("Fatal Error - Dati Non Corretti");
                    console.log(error);
                });
        }
    },

    mounted() {
        this.getPlaylist();
    }
})