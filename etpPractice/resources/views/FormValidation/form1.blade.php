<div>
    <!-- Be present above all else. - Naval Ravikant -->
    <form action="/submit" method="POST">
        @csrf
        <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Your Name"/>
        @error('name')
            <p>{{$message}}</p>
        @enderror
        <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Your Email"/>
        @error('email')
            <p>{{$message}}</p>
        @enderror
        <button type="submit">Submit</button>
    </form>
    @if($data)
        <hr>
        <h3>Submitted Data:</h3>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Age:</strong> {{ $data['age'] }}</p>
    @endif
</div>
