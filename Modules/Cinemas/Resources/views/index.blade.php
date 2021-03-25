@extends('layout')
@section('content')

<div class="hero user-hero" style="height: 85px;">
</div>
<div class="page-single">
	<div class="container">
        <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Time Inserted</th>
                        <th>Date Inserted</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $x=1; foreach($location as $locations): ?>
                        <tr>
                            <td><?=$x; $x++;?></td>
                            <td>{{ $locations->city }}</td>
                            <td>{{ $locations->address }}</td>
                            <td>{{ date_format($locations->created_at,"h:i:sa") }}</td>
                            <td>{{ date_format($locations->created_at,"l jS \of F Y") }}</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>
</div>




@endsection