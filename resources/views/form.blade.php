<form action="/postForm" method="POST">
    @csrf
    <label for="name">Name</label><br>
    <input type="text" name="name" id="name" placeholder="First name"><br>
    @error('name')
        <p>{{$message}}</p>
    @enderror
    <label for="description">Description</label> <br>
    <input type="text" name="description" id="desc"><br><br>
    <input type="submit" name="" value="STORE" id="">
</form>