<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<script>
    function check_input() {
        if (!document.member.id.value) { // 현재 document의 member의 id의 value(입력된 값)
            alert("아이디를 입력하세요!");
            document.member.id.focus(); // 해당 창에 마우스커서 focus 해주는 method
            return;
        } 
        if (!document.member.pass.value) {
            alert("비밀번호를 입력하세요!");
            document.member.pass.focus();
            return;
        }
        if (!document.member.pass_confirm.value) {
            alert("비밀번호 확인을 입력하세요!");
            document.member.pass_confirm.focus();
            return;
        }
        if (document.member.pass.value != document.member.pass_confirm.value) {
            alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");
            document.member.pass.focus();
            document.member.pass.select(); // 들어있는 내용 드래그해서 선택되게 해놓는 method -> 입력하면 바로 수정될 수 있게하기 위함
            return;
        }
        if (!document.member.name.value) {
            alert("이름을 입력하세요!");
            document.member.name.focus();
            return;
        }
        if (!document.member.email.value) {
            alert("이메일을 입력하세요!");
            document.member.email.focus();
            return;
        }
        
        document.member.submit();
    }

    function check_id() {
        window.open("check_id.php?id=" + document.member.id.value, //window.open 새창열기 
        "IDcheck", // 새창의 이름
        "left=680, top=300, width=380, height=160, scrollbars=no, resizable=yes"); // 새창열리는 위치 지정가능
    }
</script>
</head>
<body> 
    <form name="member" action="insert.php" method="post">
		<h2>회원 가입</h2>
    	<ul class="join_form">
            <li>
                <span class="col1">아이디</span>
                <span class="col2"><input type="text" name="id"></span>
                <span class="col3"><button type="button" onclick="check_id()">중복체크</button></span>                    
            </li>
            <li>
                <span class="col1">비밀번호</span>
                <span class="col2"><input type="password" name="pass"></span>
            </li>
            <li>
                <span class="col1">비밀번호 확인</span>
                <span class="col2"><input type="password" name="pass_confirm"></span>               
            </li>            
            <li>
                <span class="col1">이름</span>
                <span class="col2"><input type="text" name="name"></span>               
            </li>
            <li>
                <span class="col1">이메일</span>
                <span class="col2"><input type="text" name="email"></span>               
            </li>                        
        </ul>                       
		<ul class="buttons">
	        <li><button type="button" onclick="check_input()">저장하기</button></li>
        </ul> <!-- type submit하면 바로 넘어가니까 button으로 만들고 함수로 오류 체크후 함수안에서 submit -->
    </form>
</body>
</html>