<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container">

	<div class="row"> <!--row 1-->
		<div class="col-md-12"><!--col 1-->

			<?php
				form_create('form-horizontal');

				form_glyphicon_input('fn','First Name','text','glyphicon glyphicon-user');

				form_glyphicon_input('ps','Password','password','glyphicon glyphicon-lock');

				form_glyphicon_input('cmt','Comment','','','Your comment','disabled');

				form_glyphicon_button('submit','Save','submit','glyphicon glyphicon-search');

				form_close();
			?>  

		</div>
	</div>


</div>