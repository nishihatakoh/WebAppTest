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
  .update{
    color:orange;
    background-color:white;
    border:2px solid orange;
    text-decoration:none;
    border-radius:5px;
    padding:5px 15px;
    cursor: pointer;
  }
  .update:hover{
    background:orange;
    color:white;
    transition:0.7s;
  }
  .delete{
    color:#00FFFF;
    background-color:white;
    border:2px solid #00FFFF;
    text-decoration:none;
    border-radius:5px;
    padding:5px 15px;
    cursor: pointer;
  }
  .delete:hover{
    background:#00FFFF;
    color:white;
    transition:0.7s;
  }
  table{
    width:100%;
    text-align:center;
    padding:20px 0;
  }
</style>

@section('content')
<div >
<form action="/todo/create" class="form" method="POST">
  @csrf
  <input type="text" class="create" name="content">
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
    <form method="post" action="/todo/update">
      @csrf
        <td><input type="text" name="content" value="{{$item->content}}"></td>
        <td>
          <input type="hidden" name="id" value="{{$item->id}}">
          <input type="submit"  class="update" value="更新">
        </td>
    </form>
    <form action="/todo/delete" method="post">
      @csrf
      <td>
        <input type="hidden" name="id" value="{{$item->id}}">
        <input type="submit"  class="delete"  value="削除" >
      </td>
  </form>  
  </tr>
  
  @endforeach
</table>
@endsection
