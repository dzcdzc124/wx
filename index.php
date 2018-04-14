<!doctype>
<html>
    <head>
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>秀个恩爱</title>
    </head>
    <body>
        <img src="./images/120.jpg" alt="">
        <script>
            var hash = window.location.hash;
            if(hash == ""){
                var link = getQueryString("link");
                window.location.href = unescape(link);
            }else{
                window.location.hash = "";
                var title = getQueryString("title");
                document.title = title;
            }

            //获取url参数
            function getQueryString(name){
                var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
                //解析中文
                var link = decodeURI(window.location.search);
                var r = link.substr(1).match(reg);
                if( r!=null )
                    return  unescape(r[2]);
                return null;
            }

        </script>
    </body>
</html>