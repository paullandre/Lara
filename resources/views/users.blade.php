@extends('layout')
 
@section('content')
<table style="border: 1px solid grey">
 
    @foreach($users as $user)
    <tr>
        <td>{{ "name" }}</td>
        <td>{{ "email"}}</td>
    </tr>
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }} </td>
    </tr>
    @endforeach
    
</table>
<style>
    td {border: 1px solid grey}
</style>
@stop