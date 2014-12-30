<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>{{title}}</title>
        <link rel=stylesheet href=theme/{{theme}}/css/style.css>
    </head>
    <body>
        <header>
            <h1><a href="?p={{page}}">{{title}}</a></h1>
            <nav>
                <ul>
                    <li><a href="?">top</a></li>
                    <li><a href="?p={{page}}&a=edit">edit</a></li>
                    <li><a href="?a=add">add</a></li>
                    <li><a href="?p={{page}}&a=remove">remove</a></li>
                </ul>
            </nav>
        </header>
        <div id=container>
            <nav>{{sidebar}}</nav>
            <main>
                <div>{{content}}</div>
                <footer>
                    <ul class=file-list>
                    @foreach(file in files)
                    <li><a href="{{file.url}}">{{file.name}}</a> ({{file.type}}, {{file.size}}bytes)</li>
                    @endforeach
                    </ul>
                </footer>
            </main>
        </div>
        {{script}}
    </body>
</html>
