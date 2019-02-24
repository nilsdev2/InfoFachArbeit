@extends('layouts.default')

@section('headding') 
Personal Dashboard
@endsection

@section('mainContent')
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Welcome to {{ env('APP_NAME')}} {{ Auth::user()->name }}!</p>
                    
                        <p>Erledigte Aufgaben / noch zu erledigende Aufgaben</p>
                        <canvas id="douchart" width="400" height="200"></canvas>
                            <script>
                            
                            
                            var finished_true = {{ \App\asUser::all()->where('user_id', Auth::user()->id)->where('finished', 1)->count()}}
                            var finished_false = {{ \App\asUser::all()->where('user_id', Auth::user()->id)->where('finished', 0)->count()}} 
                            var ctx = document.getElementById("douchart").getContext('2d');
                            var douchart = new Chart(ctx, {
                                type: 'doughnut',
                                data: {
                                    datasets: [{
                                        data: [finished_true, finished_false],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)'

                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)'
                                        ],
                                        borderWidth: 1
                                    }], 

                                    labels: [
                                        'Noch zu erledigen', 'schon erledigt'
                                    ],
                                },
                                options: {
                                }
                            });
                            </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
