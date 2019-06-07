@extends('layout/master')

@section('maincontent')
<div class="row d-flex justify-content-center mt-5">
    <div class="col-10">
        <div class="container">
            <form id="contact" action="/post" method="post">
                <h3>글쓰기</h3>
                <h4>여기에 글을 써주세요</h4>
                <fieldset>
                    <input placeholder="재목을 입력해주세요" name="title" type="text" tabindex="1">
                </fieldset>
                <fieldset>
                    <textarea placeholder="내용을 입력해주세요" name="content" tabindex="5"></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit">글쓰기</button>
                </fieldset>
            </form>
        </div>
    </div>
@endsection