<div>
    <h1>Upload Your File Here</h1>
    <form action="addfile" method="post" enctype="multipart/form-data">
        @csrf

        <input type="file" name="file" />
        <br>
        <br>
        <br>
        <button type="submit">Upload</button>
    </form>
</div>
