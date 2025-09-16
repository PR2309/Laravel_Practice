<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <form action="/submit" method="POST">
        @csrf
        @method('PUT')
        {{--  For PUT, PATCH, DELETE, use @method. --}}
        <input type="text" name="name" id="name" placeholder="Your Name"/>
        <button type="submit">Update</button>
    </form>
</div>
