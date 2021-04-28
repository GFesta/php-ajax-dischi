const app = new Vue({
    el: '#app',
    data:{
        dischi: []
    },
    mounted: function(){
        axios
        .get ('http://localhost/php-ajax-dischi/ajax-version/partials/database.php')
        .then (result => this.dischi = result.data.response);
    
    }
});