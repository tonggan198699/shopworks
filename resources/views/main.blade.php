@extends('app')

@section('content')

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Number of Days</th>
      </tr>

              @foreach($staffs as $staff)
    <tbody>
        <tr>
          <th>{{ $staff->id }}</th>
          @if ($staff->starttime)
            <th>{{ $staff->starttime }}</th>
          @else
            <th> N.A </th>
          @endif
          @if ($staff->starttime)
            <th>{{ $staff->endtime }}</td>
          @else
            <th> N.A </th>
          @endif
          <th>{{ $staff->daynumber }}</td>
        </tr>
    </tbody>
                  @endforeach
    </thead>
  </table>

</div>


@endsection
