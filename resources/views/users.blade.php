@extends('layout')
<!DOCTYPE html>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
-->
{# HTML::style('css/bootstrap-theme.min.css') #}
{# HTML::style('css/bootstrap.min.css') #}
{# HTML::script('js/bootstrap.min.js') #}
{# HTML::script('js/jquery.min.js') #}

<link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
<script src="{{asset('js/jquery.min.js')}}"></script>

@section('content')
<table style="border: 1px solid grey">
    <tr>
        <td>{{ "name" }}</td>
        <td>{{ "email"}}</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }} </td>
    </tr>
    @endforeach
    
</table>
<style>
    td {border: 1px solid grey}
</style>

<script>
$(document).ready(function(){
    alert("TEST");
});
</script>
</html>
@stop