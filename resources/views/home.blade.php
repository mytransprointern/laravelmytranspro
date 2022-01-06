@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table border" id="myTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Tel Number</th>
                                <th>Action</th>
                                {{-- <th>Migration ID</th> --}}
                            </tr>
                        </thead>
                        
                        {{-- <tr>
                            <td colspan="6">                       
                                <form method="POST" action="/viewallagreements/{{ $users->id }}">
                                    @csrf {{ method_field("DELETE") }}
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr> --}}

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
