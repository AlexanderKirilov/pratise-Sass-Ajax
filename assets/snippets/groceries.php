<header class="headerRow">
	<h2 class="headerTitle">Groceries</h2>
	<span id="headerGreeting">
	<?= isset($usrName)? "Welcome $usrName" : '' ?>
	</span>
</header>

<section class="productTable">
	<table class="table table-striped">
	<thead>
	  <tr>
	    <th>*</th>
	    <th>Name</th>
	    <th>Quantity</th>
	    <th>Price</th>
	    <th><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></th>
	    <th><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></th>
	  </tr>
	</thead>

	<tbody>
	  <tr> 	
	    <td>John</td>
	    <td>Doe</td>
	    <td>john@example.com</td>	 
	  </tr>
	  <tr>
	    <td>Mary</td>
	    <td>Moe</td>
	    <td>mary@example.com</td>
	  </tr>
	  <tr>
	    <td>July</td>
	    <td>Dooley</td>
	    <td>july@example.com</td>
	  </tr>
	</tbody>
	</table>
</section>

</div>