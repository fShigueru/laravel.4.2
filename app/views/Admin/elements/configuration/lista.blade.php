<table ng-controller="ConfigCtrl">
	<thead>
		<tr>
			<th>Configuração</th>
			<th>Valor</th>
		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="config in configs">
			<td>{{ config.configuracao }}</td>
			<td>{{ config.valor }}</td>
			<td> <% HTML::link('admin/configuration/{{ config.id }}' , 'Editar') %> </td>
		</tr>
	</tbody>
</table>
<script>
var app = angular.module("myApp",[]);

app.controller('ConfigCtrl', function($scope){
    $scope.configs = <% $configurations %>;
})
</script>