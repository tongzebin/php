<?php
    /* 
        会话控制
            cookie
                将用户数据存储到浏览器上(存储有限20左右)
                特点:方便和JavaScript交换数据
                    方便回去以后信息
                风险:浏览器会禁用cookie
                    存储隐私信息可能会被盗取
                <a href="a.php?name=$name"></a>
                要语法格式
                    设置cookie
                        setCookie(名,值,[失效时间,存储路径])
    */