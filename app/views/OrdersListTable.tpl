<table  class="table">
<thead class="table-dark">
	<tr>
		<th scope="col">Order Number</th>
		<th scope="col">Client</th>
		<th scope="col">Status</th>
		<th scope="col">Options</th>
	</tr>
</thead>
<tbody>
{foreach $orders as $o}
{strip}
	<tr>
		<td>{$o["order_id"]}</td>
		<td>{$o["name"]} {$o["lastname"]}</td>
		<td>{$o["order_status"]}</td>
		<td>
			<form action="{$conf->action_url}statusUpdate/{$o['order_id']}" method="post">
			<select class="form-select" aria-label="Change order status" name="status" id="">
					<option value="Nowe">Nowe</option>
					<option value="W realizacji">W realizacji</option>
					<option value="Wysłane">Wysłane</option>
			</select>
			<button type="submit"class="btn btn-success"
					href= "">Zapisz</button>
				<a class="btn btn-secondary" href="{$conf->action_url}orderView/{$o['order_id']}">Podgląd</a>
			</form>

			&nbsp;

		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>