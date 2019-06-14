@extends('layout/master')

@section('maincontent')

@section('scriptsection')
    <script src="/js/editor.js"></script>
@endsection
<div class="row d-flex justify-content-center mt-5">
    <div class="col-10">
        <div class="container">
            <form id="contact" action="/post" method="post">
                <h3>글수정</h3>
                <h4>여기에 글을 써주세요</h4>
                <fieldset>
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <input placeholder="제목을 입력해주세요" name="title" type="text" tabindex="1" value="{{ $data->title }}">
                </fieldset>
                <fieldset>
                    <textarea id="editor" placeholder="내용을 입력해주세요" name="content" tabindex="5">{{ $data->content }}</textarea>
                </fieldset>
                <fieldset>
                    <button class="write" name="submit" type="submit" id="contact-submit">글쓰기</button>
                </fieldset>
            </form>
        </div>
    </div>
@endsection