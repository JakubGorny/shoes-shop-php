<table  class="table">
<thead class="table-dark">
	<tr>
		<th scope="col">Name</th>
		<th scope="col">Manufacturer</th>
		<th scope="col">Size</th>
		<th scope="col">Color</th>
		<th scope="col">Price</th>
		<th scope="col">Options</th>
	</tr>
</thead>
<tbody>
{foreach $products as $p}
{strip}
	<tr>
		<td>{$p["name"]}</td>
		<td>{$p["manufacturer"]}</td>
		<td>{$p["size"]}</td>
		<td>{$p["color"]}</td>
		<td>{$p["price"]}</td>
		<td>
			<a class="btn btn-secondary" href="{$conf->action_url}productEdit/{$p['product_id']}">Edytuj</a>
			&nbsp;
			<a class="btn btn-danger"
			  onclick= "confirmLink('{$conf->action_url}productDelete/{$p['product_id']}','Na pewno chcesz przejść na stronę główną')" ">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>