@extends('direct/master')

@section('content')
<div class="pt-8">
    <ul style="display:flex; list-style: none; padding-left: 0px;">
        <li>Navigate to:</li>
        <li style="padding: 0 16px;"><a href="/">Direct Import</a></li>
        <li style="padding: 0 16px;"><a href="/lazyload">Lazyload</a></li>
        <li style="padding: 0 16px;"><a href="/manual">Manual</a></li>
    </ul>
</div>

<div>
    <h1>Direct Import</h1>
    <p>Currently, we are importing every component created in the project &amp; compile them into 1-single <code>app.js</code> file</p>
    <div style="display: flex;">
        <div>
           <h3>Components</h3>
           <ul>
               <li>component-1.vue</li>
               <li>component-2.vue</li>
               <li>component-3.vue</li>
               <li>component-4.vue</li>
               <li>component-5.vue</li>
               <li>component-6.vue</li>
               <li>component-7.vue</li>
               <li>component-8.vue</li>
               <li>component-9.vue</li>
               <li>component-10.vue</li>
               <li>...</li>
           </ul>
        </div>
       <p style="padding:0 48px;"> --Webpack compilation--></p>
       <div>
           <h3>Application</h3>
           <ul>
                <li> app.js <a href="{{ mix('/js/direct.js') }}" style="color:blue; text-decoration: underline;" target="_blank">View bundled code</a></li>
           </ul>
        </div>
    </div>

    <h3>Test Area</h3>
    <code>// component-1</code>

    </div>
@endsection