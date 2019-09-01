@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <p>必要なだけ記述できます。</p>

  <!-- messaheコンポーネントの組み込み -->
  @component('components.message')
    <!-- スロット：{{}} で指定された変数に値を設定 -->
    @slot('msg_title')
    CAUTION!
    @endslot

    @slot('msg_content')
    これはメッセージの表示です。
    @endslot
  @endcomponent
  <!-- messaheコンポーネントの組み込み -->

@endsection

@section('footer')
  copyright 2019 yabumoto
@endsection
