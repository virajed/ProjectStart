<div class="container-fluid">

	<div class="row"> <!--row 1-->
		<div class="col-md-4"><!--col 1-->

			<?php
				form_create();

				form_input('fn','First Name');

				form_input('ln','Last Name');

				form_button('submit','Save');

				form_close();
			?> 

		</div>

		<div class="col-md-4"><!--col 2-->

			<?php
				form_create();

				form_input('fn','First Name');

				form_input('ln','Last Name');

				form_textarea('cmt','Comment');

				form_select('cnt','Country',array('Sri Lanka','India'));

				form_button('submit','Save');

				form_close();
			?>  

		</div>

		<div class="col-md-4"><!--col 3-->


			Hello

		</div>

	</div>


</div>