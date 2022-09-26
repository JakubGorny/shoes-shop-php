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
				<a class="btn btn-secondary" href="{$conf->action_url}orderView/{$o['order_id']}">Podgląd</a>

			&nbsp;
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>