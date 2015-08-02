<html>
    <head>
        <title>KMS Pinmas Kementerian Agama</title>
        <link rel="shortcut icon" type="image" href="../asset/imagelogo/logo.png">
	    <link href="../asset/css/materialize.min.css" rel="stylesheet">
	    <style type="text/css">
		    body {
	            display: flex;
	            min-height: 100vh;
	            flex-direction: column;
	        }
	        main { flex: 1 0 auto }
	        .container { width:90% }            
.expand-transition {
  transition: all .3s ease;
  height: 30px;
  padding: 10px;
  background-color: #eee;
  overflow: hidden;
}
.expand-enter, .expand-leave {
  height: 0;
  padding: 0 10px;
  opacity: 0;
}
        </style>
    </head>
    <body>
    	<!--    header navbar-->
	    <header>
	        <nav class="green darken-4">
	            <div class="nav-wrapper container">
	                <a class="brand-logo">Dashboard</a>
	                <ul id="nav-mobile" class="right hide-on-med-and-down">
	                <!-- tanda aja -->
						<li><a href="forum.php"><i class="mdi-action-home left"></i>Home</a></li>
						<li class="active"><a><i class="mdi-social-person left"></i>User</a></li>
						<li><a href="index.php">Logout</a></li>	
				    </ul>
	            </div>
	        </nav>
	    </header>
	    <!--    end header navbar-->

	    <!--    main content-->
	    <main style="margin-top:20px" id="app">

	    	<div class="container row">

                <!-- get all data -->
                <div class="col s4" v-repeat="datas:data" stagger="300">
					<div class="card teal">
						<div class="card-content white-text center-align">
							<span class="card-title"> {{datas.judul}}</span>
							<p class="truncate">{{datas.isi}}</p>
						</div>
						<div class="card-action">
							<a>Oleh {{datas.user}}, {{datas.jam}} {{datas.tgl}}</a>
							<a href="#" v-on="click:detailModal(datas)">LINK</a>
						</div>
					</div>
                </div>

				<!-- data detail -->
                <div id="detail" class="modal modal-fixed-footer">
				    <div class="modal-content row"> <!-- v-model="detail" -->
						<h3 class="center-align">Thread {{modal.judul}}</h3>
						
						<div class="card-panel teal lighten-2 white-text col s10 offset-s1">
				          <h5> {{modal.isi}}</h5>
				          <p> {{modal.user}} | {{modal.jam}}, {{modal.tgl}}</p>
				        </div>
				        
				        <div v-repeat="data:modal2" class="card-panel red lighten-1 col s6 offset-s2 white-text">
				          <div class="container" style="margin: 8px 0">
				            <span> <strong>{{data.user}}</strong>> {{data.komentar}} <br/>
				             	 <strong>on...</strong> {{data.jam}}, {{data.tgl}}</span>
				          </div>
				        </div>

				    </div>
				    <div class="modal-footer">
				      	<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
				    </div>
				</div>
	    	
	    	</div>
	    
	    </main>
	    <!--    end main content-->

	    <!--    footer page-->
	    <footer class="page-footer green darken-4">
	        <div class="container">
	            <div class="row">
	                <div class="col l6 s12">
	                    <h5 class="white-text">Knowledge Management System</h5>
	                </div>
	            </div>
	        </div>
	        <div class="footer-copyright">
	            <div class="container">
	                © 2015 Copyright miftaamelia
	            </div>
	        </div>
	    </footer>
	    <!--    end footer page-->

<!-- input user name -->
<div id="user" class="modal modal-fixed-footer" style="max-height: 250px; max-width: 400px">
	<div class="modal-content">
		<h4>Silahkan Input Nama</h4><br>
		<div class="input-field">
          	<input id="user" name="user" type="text" placeholder="Silahkan inputkan nama anda" class="validate">
        </div>
	</div>
	<div class="modal-footer">
		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>		
</div>

        <script src="../asset/js/vue.js"></script>
        <script src="../asset/js/jquery.min.js"></script>
	    <script src="../asset/js/materialize.min.js"></script>
        <script src="../asset/js/vue-resource.min.js"></script>
        <script src="../asset/js/app.js"></script>
	    <script type="text/javascript">
	    	$(".dropdown-button").dropdown();
	    	$('.modal-trigger').leanModal();
	    	// $('#user').openModal({
	    	// 	dismissible: true,
	    	// 	opacity: .9
	    	// });
	    </script>
    </body>
</html>