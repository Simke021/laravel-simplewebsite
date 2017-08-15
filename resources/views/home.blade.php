@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non aliquid nulla officia expedita explicabo aut obcaecati debitis amet impedit, est illo minima iusto neque sint fuga atque cupiditate saepe, tempora.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur provident ad, dignissimos possimus, error ullam corporis beatae perferendis aliquam excepturi atque magnam facilis ipsum quas maxime culpa nulla asperiores molestiae.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is the apended to the sidebear</p>
@endsection