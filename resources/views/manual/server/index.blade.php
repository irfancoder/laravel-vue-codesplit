@extends('manual/master')
@section('module')
    <script src="/js/mi_module_1.js" ></script>
@endsection

@section('content')
<div class="pt-8">
    <ul style="display:flex; list-style: none; padding-left: 0px;">
        <li>Navigate to:</li>
        <li style="padding: 0 16px;"><a href="/">Direct Import</a></li>
        <li style="padding: 0 16px;"><a href="/lazyload">Lazyload</a></li>
        <li style="padding: 0 16px;"><a href="/manual">Manual</a></li>
    </ul>
</div>

    <component-3></component-3>
    <component-1></component-1>
    <component-2></component-2>
    <component-5></component-5>
    <component-5></component-5>
@endsection