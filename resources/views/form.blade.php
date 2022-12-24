<form action="/postForm" method="POST">
    @csrf
    <label for="name">Name</label><br>
    <input type="text" name="name"><br>
    @error('name')
        <p>{{$message}}</p>
    @enderror
    <label for="desc">Description</label> <br>
    <input type="text" name="desc" id=""><br><br>
    <input type="submit" name="" value="STORE" id="">
</form>