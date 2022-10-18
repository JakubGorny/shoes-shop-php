<table  class="table">
<thead class="table-dark">
	<tr>
		<th scope="col">Login</th>
		<th scope="col">Client</th>
		<th scope="col">Role</th>
		<th scope="col">Options</th>
	</tr>
</thead>
<tbody>
{foreach $users as $u}
{strip}
	<tr>
		<td>{$u["login"]}</td>
		<td>{$u["name"]} {$u["lastname"]}</td>
		<td>{$u["role"]}</td>
		<td>
			<form action="{$conf->action_url}roleUpdate/{$u['user_id']}" method="post">
			<select class="form-select" aria-label="Change user role" name="role" id="">
				<option value=100>admin</option>
				<option value=70>employee</option>
				<option value=10>user</option>
					
			</select>
			<button type="submit" class="btn btn-success"
					href= "">Zapisz</button>
			</form>

			&nbsp;

		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>