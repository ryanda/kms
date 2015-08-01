Vue.config.debug = true;
new Vue({
    el: '#app',
    ready: function() {
        setTimeout(this.fetchData, 500);
    },
    data: {
        data    : {},
        detail  : {}
    },
    methods: {
        
        // READ
        fetchData: function() {
            $.ajax({
                type: 'GET',
                context: this,
                url: 'proses.php',
                contentType: 'application/json',
                success: function(result) {
                    // $('#ajax').hide();
                    this.$set('data', result);
                    // this.$set('error', result.error);
                    // this.$set('jmldata', result.length);
                },
                error: function(req, status, ex) {
                    Materialize.toast('Data gagal diload! Status : ' + status + ', Data : ' + ex, 10000);
                },
            });
        },
        detailModal: function(data) {
            $.ajax({
                type: 'GET',
                context: this,
                url: 'proses.php?id=' + data.id,
                contentType: 'application/json',
                success: function(result) {
                    this.$set('detail', result);
                    Materialize.toast('Data diload! ' + result['id'] , 10000);
                    // $('#detail').openModal();
                },
                error: function(req, status, ex) {
                    Materialize.toast('Data gagal diload! ' + status + ' ' + ex, 10000);
                },
            });
        }

    }
});