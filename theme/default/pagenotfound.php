@extends(common)

@block(title)
404 Not Found
@endblock

@block(content)
<p>{{msg}}</p>
<pre>{{stacktrace}}</pre>
<form action="?a=add" method=POST>
    <input type=hidden name=name value="{{page}}">
    <p><input type=submit value='Add "{{page}}"'></p>
</form>
@endblock
