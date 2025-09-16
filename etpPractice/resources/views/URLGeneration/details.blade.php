<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <h1>URL Generation Details</h1>
    <a href="/urlGeneration-home">urlGeneration Home</a>

    <a href="{{URL::to('urlGeneration-details',['nameData'])}}">"urlGeneration Details with Data"</a>
    Data: {{$data}}
</div>
