@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 p-5">
                             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRazI0fd4lIJEsFIxoSPhIFL0Hxlchy-Lp3OQXfYwpZcxmMqmo5&usqp=CAU" alt="" class="rounded-circle" height="100" width="100">
                             
                            </div>
                     
                            <div class="col-md-9">
                                 <div class="d-flex justify-content-between">
                                    <h5>{{$user->username}}</h5>
                                    <h5><a href="/p/create">Add new Post</a></h5>

                                 </div>
                                 <div class="d-flex">
                                     <div class="pr-5"><strong>1564</strong></div>
                                     <div class="pr-5"><strong>278K</strong></div>
                                     <div class="pr-5"><strong>123</strong></div>
                                 </div>
                                 <div class="pt-5">
                                     <h5>{{$user->username}}</h5>
                                     <p>{{$user->profile->title}}</p>
                                     <p>{{$user->profile->description?? N/A}}</p>

                                 </div>
                     
                         </div>
                             <div class="row pt-5" style="paddting-top:10px;">
                                @foreach ($user->posts as $item)
                                     <div class="col-md-4 pt-5">
                                    <img src="/storage/{{$item->image}}" alt="" width="100" height="100">
                                </div>
                               @endforeach
                     
                             </div>
                     
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
