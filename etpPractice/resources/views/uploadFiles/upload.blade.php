<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <form action="/upload-file" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file">Choose File:</label>
        <input type="file" name="file" id="file" required/>
        <button type="submit">Upload</button>
    </form>
</div>
