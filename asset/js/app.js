Vue.config.debug = true;
new Vue({
    el: '#app',
    ready: function() {
        // setTimeout(this.fetchData, 500);
        $('#user').openModal({
            dismissible: false,
            opacity: .9
        });
    },
    data: {
        data: {},
        modal: {},
        modal2: {},
        komen: '',
        nama: '',
        modalid:'',
        baru: {
            judul: '',
            isi: ''
        }
    },
    methods: {
        
        fetchData: function() {
            $.ajax({
                type: 'GET',
                context: this,
                url: 'ajax/get.php?all',
                contentType: 'application/json',
                success: function(result) {
                    this.$set('data', result);
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
                url: 'ajax/get.php?id=' + data.id,
                contentType: 'application/json',
                success: function(result) {
                    this.$set("modal", result[0]);
                },
                error: function(req, status, ex) {
                    Materialize.toast('Thread gagal diload! ' + status + ' ' + ex, 10000);
                },
            });
            this.loadKomen(data);
            $('#detail').openModal();
        },
        loadKomen: function(data) {
            $.ajax({
                type: 'GET',
                context: this,
                url: 'ajax/get.php?komen=' + data.id,
                contentType: 'application/json',
                success: function(result) {
                    this.$set("modal2", result);
                },
                error: function(req, status, ex) {
                    Materialize.toast('Komentar gagal diload! ' + status + ' ' + ex, 10000);
                },
            });
        },

        komentar: function(thread) {
            // e.preventDefault();
            this.modalid = thread;
            data = { komen : this.komen, id : this.modalid, nama : this.nama };
            json = JSON.stringify(data);
            $.ajax({
                type: 'POST',
                url: 'ajax/post.php',
                dataType: 'text',
                processData: false,
                data: json,
                contentType: 'application/json',
                success: function() {
                    Materialize.toast('Komentar berhasil ditambah! :D', 1000);
                },
                error: function(req, status, ex) {
                    Materialize.toast('Komunikasi dengan server gagal! ' +req+ ' ' +status+ ' ' +ex, 10000);
                },
            });
            // console.log(json);
            $('#detail').closeModal();
            this.komen = '';
        },

        username: function(e) {
            e.preventDefault();
            $("#nama").html(this.nama);
            this.fetchData();
            $('#user').closeModal();
            $('.fixed-action-btn').show();
        },

        tambahModal: function(data) {
            $('#tambah').openModal();
        },

        tambahThread: function(data, e) {
            e.preventDefault();
            json = JSON.stringify({ 
                judul : data.judul, 
                isi : data.isi, 
                nama : this.nama 
            });
            
            $.ajax({
                type: 'POST',
                url: 'ajax/post2.php',
                dataType: 'text',
                processData: false,
                data: json,
                contentType: 'application/json',
                success: function() {
                    Materialize.toast('Komentar berhasil ditambah! :D', 1000);
                    this.fetchData();
                },
                error: function(req, status, ex) {
                    Materialize.toast('Komunikasi dengan server gagal! ' +req+ ' ' +status+ ' ' +ex, 10000);
                },
            });
            // console.log(json);
            $('#tambah').closeModal();
            this.baru = {
                judul: '',
                isi: ''
            };
        },


    },
    computed: {
        errors: function() {
            for (var key in this.nama) {
                if (! this.nama[key]) return true;
            }
            return false;
        }
    }
});