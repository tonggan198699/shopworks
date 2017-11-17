@extends('app')

@section('content')

<section class="hero is-info">

  <div class="container">
    <h1 class="title">
        Staff Rota Table
      </h1>
    <table class="table is-narrow">

      <thead>
        <tr>
          <th></th>
          <th>Start Time (Day 1 to 6)</th>
          <th>End Time (Day 1 to 6)</th>
        </tr>
        <tr>
          <th>ID</th>
        </tr>

    @foreach($staffs as $staff)
      <tbody>
          <tr>
            <th>
              {{ $staff->id }}
            </th>
            <th>
              @for ($i = 0; $i < ($staff->daynumber); $i++)
                @if ($staff->starttime)
                  {{ $staff->starttime }}
                @endif
              @endfor
            </th>
            <th>
              @for ($i = 0; $i < ($staff->daynumber); $i++)
                @if ($staff->endtime)
                  {{ $staff->endtime }}
                @endif
              @endfor
            </th>
          </tr>
      </tbody>
    @endforeach
      </thead>
    </table>

  </div>
</section>
@endsection
