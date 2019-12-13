@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Matrix Multiplication</div>
                <div class="card-body">
                    <form method="POST" action="/matrixResult" >
                    @csrf
                        <fieldset>
                            <legend>First Matrix</legend>
                            <div class="row">
                                @for( $j=1;  $j <= $firstMatrixColumns; $j++) 
                                    <div class="col-md-2 text-center">
                                        <span  >A{{$j}}</span>
                                    </div>
                                @endfor
                            </div>    
                            @for( $i=1;  $i <= $firstMatrixRows; $i++)
                                <div class="row">
                                    @for( $j=1;  $j <= $firstMatrixColumns; $j++) 
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="A{{$i}}{{$j}}"  >
                                        </div>
                                    </div>
                                    @endfor
                                    <br/>         
                                </div>        
                            @endfor
                        </fieldset>
                        <fieldset>
                            <legend>Second Matrix</legend>
                            <div class="row">
                                @for( $j=1;  $j <= $secondMatrixColumns; $j++) 
                                    <div class="col-md-2 text-center">
                                        <span  >B{{$j}}</span>
                                    </div>
                                @endfor
                            </div>    
                            @for( $i=1;  $i <= $secondMatrixRows; $i++)
                                <div class="row">
                                    @for( $j=1;  $j <= $secondMatrixColumns; $j++) 
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="B{{$i}}{{$j}}"  >
                                        </div>
                                    </div>
                                    @endfor
                                    <br/>         
                                </div>        
                            @endfor
                        <input type="hidden" name="firstMatrixRows"  value="{{$firstMatrixRows}}" />
                        <input type="hidden" name="secondMatrixColumns" value="{{$secondMatrixColumns}}"  />
                        <input type="hidden" name="secondMatrixRows" value="{{$secondMatrixRows}}"  />    
                        <input class="btn btn-success" type="submit"  />
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
