@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Treni</h1>
      @forelse ($trains as $train)
      <hr>
      <ul>
         <li><strong>Treno: </strong>{{$train->company_name . " " . $train->train_code}}</li>   
         <li><strong>Numero carrozze: </strong>{{$train->coach_number}}</li>   
         <li><strong>In partenza da: </strong>{{$train->departure_station}}</li>   
         <li><strong>In data: </strong>{{$train->departure_date_time}}</li>   
         <li><strong>Destinazione: </strong><{{$train->arrive_station}}/li>   
         <li><strong>In data: </strong>{{$train->estimate_arrive_date_time}}</li>   
        </ul>
        @empty
            No train found
        @endforelse
    </div>
  </section>
@endsection
