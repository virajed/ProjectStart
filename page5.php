<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container">

	
	<div class="row"> <!--row 1-->
		<div class="col-md-12"><!--col 2-->

			<?php
				form_create('form-inline');

				form_input('fn','First Name','text','inline');

				form_input('ln','Last Name','text','inline');

				form_button('submit','Save');

				form_close();


			?>  

		</div>
	</div>

	<div class="row"> <!--row 2-->
		<div class="col-md-12" data-ng-app=""><!--col 3-->

			<?php
				form_create('form-horizontal');

				form_input('fn','First Name','','horizontal','form-control','','data-ng-model="xy"');

				form_input('ln','Last Name','','horizontal');

				form_input('ps','Password','password','horizontal');

				form_button('submit','Save');

				form_close();
			?>  
			
<p> {{xy}} </p>
		</div>

	</div>

</div>