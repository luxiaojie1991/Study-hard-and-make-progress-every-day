@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>这将追加到主布局的侧边栏。</p>
@endsection

@section('content')
    <h1>Hello word!</h1>
    {{--这里通过对应的键获取相应的值--}}
    {{--注意：不要了忘了 $ 符号--}}
    <p>{{ $data }}</p>

    {{-- 判断 --}}
    @if($array)
    exist
    @else
    not exist
    @endif  {{-- 这个endif一定要写！！ --}}


    {{-- foreach循环 --}}
    @foreach ($array as $key=>$value)
        <p>This is  key {{ $key }} => value {{$value}}</p>
    @endforeach

@endsection