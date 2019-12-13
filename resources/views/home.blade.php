@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Matrix Multiplication</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Session::has('message'))
                        <p class="alert alert-danger">{{ Session::get('message') }}</p>
                    @endif
                    <form method="GET" action="/createMatrix" >
                        <fieldset>
                            <legend>First Matrix</legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Rows</label>
                                        <input type="number" class="form-control" name="first_matrix_rows"  >
                                    </div>
                                </div>
                                <div class="col-md-6">    
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Columns</label>
                                        <input type="number" class="form-control" name="first_matrix_columns" >
                                    </div>
                                </div>
                            </div>        
                        </fieldset>
                        <fieldset>
                            <legend>Second Matrix</legend>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Rows</label>
                                    <input type="number" class="form-control" name="second_matrix_rows" >
                                </div>
                            </div>
                            <div class="col-md-6">    
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Columns</label>
                                    <input type="number" class="form-control" name="second_matrix_columns">
                                </div>
                            </div>
                        </div>    
                       
                        <input class="btn btn-success" type="submit"  />
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
