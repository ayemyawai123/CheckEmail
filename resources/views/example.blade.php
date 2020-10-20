<html>
<form action="{{url('example')}}" method="post">
    {{csrf_field()}}
    <input width="200" height="48" type="text" name="email" placeholder="enter email">
    <input type="submit" name="Submit" value="Submit">
    </form>

</html>
