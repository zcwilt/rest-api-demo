<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>zcwilt-api-demo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
</head>
<body>
<div class="">
    <h1>Some api access links</h1>
    <div class="content">

    <ul>
        <li>
            <a href="api/user" target="_blank">User Index</a>
        </li>
        <li>
            <a href="api/country" target="_blank">Country Index</a>
        </li>
        <li>
            <a href="api/post" target="_blank">Post Index</a>
        </li>
        <li>
            <a href="api/comment" target="_blank">Comment Index</a>
        </li>
    </ul>
        <ul>
            <li>
                <a href="api/user?whereBetween[]=age:19:70" target="_blank">User Age betwen 19 - 70</a>
            </li>
            <li>
                <a href="api/user?whereBetween[]=age:19:70&orWhere[]=id:eq:1" target="_blank">User Age betwen 19 - 70 or user id =1 </a>
            </li>
            <li>
                <a href="api/user?whereIn=id:(1,2,3)" target="_blank">User Id in (1,2,3)</a>
            </li>
            <li>
                <a href="api/user?whereIn[]=id:(1,2,3)&orWhere[]=age:eq:64" target="_blank">User Id in (1,2,3) or age = 64</a>
            </li>
        </ul>
        </ul>
        <ul>
            <li>
                <a href="api/user?includes=posts" target="_blank">user with posts</a>
            </li>
            <li>
                <a href="api/user?includes[]=posts&where[]=id:eq:1" target="_blank">user with posts and user id = 1</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="api/post?includes[]=comments" target="_blank">posts with comments</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="api/country?per_page=5" target="_blank">per_page</a>
            </li>
            <li>
                <a href="api/country?per_page=5&page=2" target="_blank">per_page & page</a>
            </li>
            <li>
                <a href="api/country?paginate=no" target="_blank">no paginate</a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
