@extends('layouts.default')
<style>
  .form{
    display:flex;
    justify-content: space-between;
    padding-bottom:30px;
  }
  .create{
    width:80%;
    height:35px;
    border-radius:5px;
    outline:none;
    border-color:#DDDDDD;
  }
  .add{
    color:#FF00FF;
    background-color:white;
    border:2px solid #FF00FF;
    text-decoration:none;
    border-radius:5px;
    padding:5px 15px;
    cursor: pointer;
  }
  .add:hover{
    background:#FF00FF;
    color:white;
    transition:0.7s;
  }
  table{
    width:100%;
  }
</style>

@section('content')
<div >
<form action="/todo/create" class="form" method="POST">
  <input type="text" class="create">
  <input type="submit" value="追加" class="add">
</form>
</div>
<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach($items as $item)
  <tr>
    <td>{{$item->created_at}}</td>
    <td>{{$item->content}}</td>
    <td><a href="/todo/update">更新</a></td>
    <td><a href="/todo/delete">削除</a></td>
  </tr>
  @endforeach
</table>
@endsection