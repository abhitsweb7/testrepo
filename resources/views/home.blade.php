<html>
<body>
	
	<h1>{{ $data }}</h1>
	@if($data!='')
		<p>TEst</p>
	@else
		<p>else</p>	
	@endif

	<table border="1">
		<tr>
			<th>Sl. No.</th>
			<th>F-Name</th>
			<th>L-Name</th>
		</tr>
		@if(isset($users))
			<?php $i = 1; ?>
			@foreach($users as $row)
				<tr>
					<td>{{ $i }}</td>
					<td>{{ $row->fname }}</td>
					<td>{{ $row->lname }}</td>
				</tr>
			<?php $i++; ?>
			@endforeach
		@endif
	</table>


</body>
</html>