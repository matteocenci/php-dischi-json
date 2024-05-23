const {createApp } = Vue;

createApp({
    data() {
        return {
            message: "Hello",
            disks: [],

        }
    },
    created() {
        axios
            .get("http://localhost/boolean/php-dischi-json/server.php").then((resp) => {
                this.disks = resp.data.results;
                console.log(resp);
            });
    },

    
}).mount("#app");