@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div calss="col col-md-offset-3 col-md-6">
        <div class="text-conter">
          <p>お探しのページは見つかりませんでした。</p>
          <a href="{{ route('home') }}" class="btn">
            ホームへ戻る
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection