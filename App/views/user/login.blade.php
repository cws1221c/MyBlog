@extends('layout/master')

@section('maincontent')
<div class="login-page">
  <div class="form">
    <form class="login-form" action="/login" method="post">
      <input type="text" name="userid" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button>login</button>
    </form>
  </div>
</div>
@endsection