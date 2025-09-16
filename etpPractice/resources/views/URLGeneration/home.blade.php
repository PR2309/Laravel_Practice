<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <h1>Normal links</h1>
    <a href="/urlGeneration-home">urlGeneration Home</a>
    <a href="/urlGeneration-about">urlGeneration About</a>
    <a href="/urlGeneration-details">urlGeneration Details</a>
    <h1>Links Generated using URL</h1>
    <a href="{{URL::to('urlGeneration-home')}}">urlGeneration Home</a>
    <a href="{{URL::to('urlGeneration-about')}}">urlGeneration About</a>
    <a href="{{URL::to('urlGeneration-details')}}">urlGeneration Details</a>
    <h1>Generating Framework URLs using url()</h1>
    <a href="{{url('urlGeneration-home')}}">urlGeneration Home</a>
    <a href="{{url('urlGeneration-about')}}">urlGeneration About</a>
    <a href="{{url('urlGeneration-details')}}">urlGeneration Details</a>
    <h1>Generating Framework URLs using secure_url()</h1>
    <a href="{{secure_url('urlGeneration-home')}}">urlGeneration Home</a>
    <a href="{{secure_url('urlGeneration-about')}}">urlGeneration About</a>
    <a href="{{secure_url('urlGeneration-details')}}">urlGeneration Details</a>
    <h1>URL Generation Home</h1>
    <h3>Current URL:</h3>
    <p>URL::current() => {{URL::current()}}</p>
    <p>url()->current() => {{url()->current()}}</p>
    <h3>Full URL:</h3>
    <p>URL::full() => {{URL::full()}}</p>
    <p>url()->full() => {{url()->full()}}</p>
    <h3>Previous URL:</h3>
    <p>URL::previous() => {{URL::previous()}}</p>
    <p>url()->previous() => {{url()->previous()}}</p>
    <h3>Shows Route:</h3>
    
    {{-- <h3>Current Route Name:</h3>
    <p>Route::currentRouteName() => {{Route::currentRouteName()}}</p>
    <p>url()->currentRouteName() => {{url()->currentRouteName()}}</p>
    <h3>Current Route Action:</h3>
    <p>Route::currentRouteAction() => {{Route::currentRouteAction()}}</p>
    <p>url()->currentRouteAction() => {{url()->currentRouteAction()}}</p>
    <h3>Route Parameters:</h3>
    <p>Route::current()->parameters() => {{Route::current()->parameters()}}</p>
    <p>url()->current()->parameters() => {{url()->current()->parameters()}}</p>
    <h3>Route Parameters (Array):</h3>
    <p>Route::current()->parametersArray() => {{Route::current()->parametersArray()}}</p>
    <p>url()->current()->parametersArray() => {{url()->current()->parametersArray()}}</p> --}}
</div>
