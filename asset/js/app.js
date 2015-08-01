Vue.config.debug = true;
new Vue({
    el: '#app',
    ready: function() {
        setTimeout(this.fetchData, 500);
    },
    data: {
        data: {},
        modal: {},
        modal2: {}
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
                    this.$set("modal", result[0]);
                },
                error: function(req, status, ex) {
                    Materialize.toast('Thread gagal diload! ' + status + ' ' + ex, 10000);
                },
            });
            $.ajax({
                type: 'GET',
                context: this,
                url: 'proses.php?komen=' + data.id,
                contentType: 'application/json',
                success: function(result) {
                    this.$set("modal2", result);
                },
                error: function(req, status, ex) {
                    Materialize.toast('Komentar gagal diload! ' + status + ' ' + ex, 10000);
                },
            });
            $('#detail').openModal();
        }

    }
});