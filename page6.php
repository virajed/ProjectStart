<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container">

	<div class="row"> <!--row 1-->
		<div class="col-md-12"><!--col 3-->

			<?php
				form_create('form-horizontal');

				form_input('fn','First Name','','horizontal');

				form_input('ln','Last Name','','horizontal');

				form_input('ps','Password','password','horizontal');

				form_button('submit','Save');

				form_close();
			?>  
			

		</div>

	</div>


</div>