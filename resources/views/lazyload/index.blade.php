@extends('lazyload/master')

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
    <h1>Lazyload Import</h1>
    <p>This method utilises Webpack's auto code-splitting tool, which comes together with Laravel Mix package. When using this method, by default, Webpack will compile every component into individual js files, and lazy loads them through the root app <code>app.js</code>. </p>
    <p>But, we can override this behavior and tell Webpack how the compiled components to be grouped into our own modules, by declaring, <code> /** webpackChunkName: "[module_name]" */</code></p>

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
                <li> app.js <a href="{{ mix('/js/lazyload.js') }}" style="color:blue; text-decoration: underline;" target="_blank">View bundled code</a></li>
                <li> ll_module_1.js</li>
                    <ul>
                        <li>component-1</li>
                    </ul>
                <li> ll_module_2.js</li>
                    <ul>
                        <li>component-2</li>
                        <li>component-3</li>
                        <li>component-4</li>
                        <li>component-5</li>
                        <li>component-6</li>
                    </ul>
                <li> ll_module_3.js</li>
                    <ul>
                        <li>component-7</li>
                        <li>component-8</li>
                    </ul>
                <li> ll_module_4.js</li>
                    <ul>
                        <li>component-9</li>
                        <li>component-10</li>
                    </ul>
           </ul>
        </div>
    </div>

    <h3>Test Area</h3>
    <code>// component-1</code>
    <component-1></component-1>
    <code>// component-7</code>
    <component-7></component-7>
</div>
@endsection