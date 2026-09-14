<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Tugas</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 2rem auto;
			max-width: 900px;
			padding: 0 1rem;
		}

		table {
			border-collapse: collapse;
			margin-top: 1rem;
			width: 100%;
		}

		th, td {
			border: 1px solid #ddd;
			padding: 0.75rem;
			text-align: left;
		}

		th {
			background: #f3f4f6;
		}

		.empty {
			color: #6b7280;
			margin-top: 1rem;
		}
	</style>
</head>
<body>
	<h1>Daftar Tugas</h1>

	@if ($tugas->isEmpty())
		<p class="empty">Belum ada data tugas.</p>
	@else
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Dibuat</th>
					<th>Diperbarui</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($tugas as $item)
					<tr>
						<td>{{ $item->id }}</td>
						<td>{{ optional($item->created_at)->format('d-m-Y H:i') }}</td>
						<td>{{ optional($item->updated_at)->format('d-m-Y H:i') }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endif
</body>
</html>
