@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <!--  <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div> -->
          <table class="table table-hover table-info">
            <thead>
              <tr>
                <th scope="col">User id</th>
                <th scope="col">Account balance</th>
              </tr>
            </thead>
            <tbody>
                <th scope="row"></th>
                      <tr>
                        <td>{{Auth::user()->id}}</td>
                        <td>{{$balance}}</td>
                      </tr>
              </tr>
            </tbody>
          </table>

          <table class="table table-hover table-active">
            <thead>
              <tr>
                <th scope="col">Transfers to/from</th>
                <th scope="col">Ammount</th>
              </tr>
            </thead>
            <tbody>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>

</div>
@endsection
