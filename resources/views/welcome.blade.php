<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>zcwilt-api-demo</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
</head>
<body>
<div class="">
    <div class="content">
        <h1 class="text-center">Some api access links</h1>
        <div class="row">
            <div class="col-sm">
                <div class="list-group">
                    <h2>Basic Api Controller Calls</h2>
                    <a class="list-group-item list-group-item-action" href="api/user" target="_blank">User Index</a>
                    <a class="list-group-item list-group-item-action" href="api/country" target="_blank">Country
                        Index</a>
                    <a class="list-group-item list-group-item-action" href="api/post" target="_blank">Post Index</a>
                    <a class="list-group-item list-group-item-action" href="api/comment" target="_blank">Comment
                        Index</a>
                </div>
            </div>
            <div class="col-sm">
                <div class="list-group">
                    <h2>Some where based filters</h2>
                    <a class="list-group-item list-group-item-action" href="api/user?whereBetween[]=age:19:70"
                       target="_blank">User
                        Age betwen 19 - 70</a>
                    <a class="list-group-item list-group-item-action"
                       href="api/user?whereBetween[]=age:19:70&orWhere[]=id:eq:1"
                       target="_blank">User Age betwen 19 - 70 or
                        user id =1 </a>
                    <a class="list-group-item list-group-item-action" href="api/user?whereIn=id:(1,2,3)"
                       target="_blank">User
                        Id
                        in (1,2,3)</a>
                    <a class="list-group-item list-group-item-action"
                       href="api/user?whereIn[]=id:(1,2,3)&orWhere[]=age:eq:64"
                       target="_blank">User Id in (1,2,3) or age =
                        64</a>
                </div>
            </div>
            <div class="col-s">
                <div class="list-group">
                    <h2>Includes</h2>
                    <a class="list-group-item list-group-item-action" href="api/user?includes=posts" target="_blank">user
                        with posts</a>
                    <a class="list-group-item list-group-item-action" href="api/user?includes[]=posts&where[]=id:eq:1"
                       target="_blank">user with posts and user id = 1</a>
                    <a class="list-group-item list-group-item-action" href="api/post?includes[]=comments"
                       target="_blank">posts
                        with comments</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="list-group">
                    <h2>Pagination</h2>
                    <a class="list-group-item list-group-item-action" href="api/country?per_page=5"
                       target="_blank">per_page</a>
                    <a class="list-group-item list-group-item-action" href="api/country?per_page=5&page=2"
                       target="_blank">per_page
                        & page</a>
                    <a class="list-group-item list-group-item-action" href="api/country?paginate=no" target="_blank">no
                        paginate</a>
                </div>
            </div>
            <div class="col-sm">
                <div class="list-group">
                    <h2>Joins</h2>
                    <a class="list-group-item list-group-item-action"
                       href="api/user?join[]=inner:posts:posts.user_id:users.id" target="_blank">inner join</a>
                    <a class="list-group-item list-group-item-action"
                       href="api/user?join[]=left:posts:posts.user_id:users.id" target="_blank">left join</a>
                    <a class="list-group-item list-group-item-action"
                       href="api/user?join[]=cross:posts:posts.user_id:users.id" target="_blank">cross join</a>
                    <a class="list-group-item list-group-item-action"
                       href="api/user?join[]=inner:posts:posts.user_id:users.id&where[]=published:eq:1" target="_blank">inner
                        join with where</a>
                </div>
            </div>
            <div class="col-sm">
                <div class="list-group">
                    <h2>Misc.</h2>
                    <a class="list-group-item list-group-item-action"
                       href="api/user?sort[]=age" target="_blank">Sort by Age(ASC)</a>
                    <a class="list-group-item list-group-item-action"
                       href="api/user?sort[]=-age" target="_blank">Sort by Age(DESC)</a>
                    <a class="list-group-item list-group-item-action"
                       href="api/user?columns[]=name,age" target="_blank">limit columns returned (name,age)</a>
                    <a class="list-group-item list-group-item-action"
                       href="api/user?withTrashed" target="_blank">with trashed</a>
                    <a class="list-group-item list-group-item-action"
                       href="api/user?onlyTrashed" target="_blank">only trashed</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
