
@extends('app')

@section('content')
<ul>
  @foreach($staffs as $staff)
  <li>{{ $staff->workhours }}</li>
  @endforeach
</ul>

<a class="button is-small is-primary">Small</a>

@endsection
