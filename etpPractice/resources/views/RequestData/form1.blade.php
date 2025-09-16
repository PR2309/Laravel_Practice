<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <form action="/submit-form" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required placeholder="Your Name" value="{{old('name')}}"/><br/>
        <label for="name">Age:</label>
        <input type="number" name="age" id="age" required placeholder="Your Age" value="{{old('age')}}"/><br/>
        <button type="submit">Submit</button>
        @if($errors->any())
            <div style="color:red">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</div>
