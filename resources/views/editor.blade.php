<form method="post" action={{ url('store') }}>
    <p><textarea name="editor" id="editor" cols="30" rows="10"></textarea></p>
    {{ csrf_field() }}
    <input type="submit" name="submit" value="Submit">
</form>