const App = new Vue(
    {
        el: '#app',
        data: {
            autoList: []
        },
        created() {
        axios.get('http://localhost/db-first/server/controller-api.php')
        .then((result) => {
            this.autoList = result.data;
            console.log(result);
        })
        .catch((error) => { console.log(error);
        });
        }
    }
);