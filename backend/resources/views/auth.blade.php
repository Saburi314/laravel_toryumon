{{ $message }}
<form action="/auth" method="post">
@csrf
mail:<input type="text" name="email">
password:<input type="password" name="password">
<input type="submit" value="send">
</form>
