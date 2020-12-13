<!DOCTYPE html>
<html>
<style>
#top{
background-color:#180054; 
width:100%; 
height:30px; 
position:absolute; 
left:0px; 
top:0px; 
color:white;
text-align:center;
font-size:8px;
line-height: 25px;
}
#left{
background-color:#2A0066; 
width:60%; 
height:300px; 
position:absolute; 
left:0px; 
top:30px;
color:white;
text-align:center;
line-height: 30px;
}
#content{
background-color:#2A0066; 
width:40%; 
height:300px; 
position:absolute; 
right:0px; 
top:30px;
color:white;
line-height: 40px;
}
#footer{
background-color:#FEFDFF; 
width:100%; 
height:400px; 
position:absolute; 
left:0px; 
top:330px;
text-align:center;
}
.box_a, .box_b, .box_c, .box_d{
width: 200px; 
height: 110px; 
background-color: #E5D85C; 
display:inline-block;  
margin-right: 20px;
text-align: center; 
padding-top: 90px;
border-style:dashed;
border-width:thick;
border-color:#2A0066;
border-radius:20%;
}
a{
color:white;
}
button{
width:300px; 
height:30px; 
color:#fff;
background:#004fff;
font-size: 10px;
border: none;
border-radius: 20px
}
</style>
<head>
    <meta charset="utf-8">
    <title>지역별 청렴도 측정 결과 시스템</title>
</head>
<body>

<div id="top">
<a>데이터베이스 프로그래밍 팀13 김은영 임지연 홍채영</a>
</div>

<div id="content"><br>
<a href="listAll.php">전체 지역의 청렴도 결과 목록</a><br>
    <form action="selectRank.php" method="GET">검색 지역의 청렴도 조회<br>
        <input type="text" name="city" placeholder="00도 00시/군/구">
        <input type="submit" value="Search"></form><p>
<form action="search.php" method="POST">입력 점수보다 청렴도가 높은 지역 조회<br>
        <label>17년도 종합청렴도:</label>
        <input type="text" name="inputvalue" placeholder="0부터 10사이 점수 입력">
        <input type="submit" value="Search"></form>
</div>

<div id="left"><br>
  <h1>지역별 청렴도 측정 결과 시스템</h1>
    <h3>청렴도 측정제도가 국제적으로 인정받아서 2012년 UN대상을 받았다<br>
        외부 청렴도 : 공공기관과 업무경험이 있는 국민이 평가<br>
        내부 청렴도 : 공직자가 평가<br>
    </h3>
    <button type="button" onclick="location.href='detail.php' ">청렴도 측정에 대한 더 자세한 정보 보기</button><br>
</div>

<div id="footer">
<br>

</br>
<div class="box_a"><a href="TotalUpperArea.php" style="color: #2A0066">시군구별 청렴도 우수지역</a><br></div>
<div class="box_b"><a href="TotalLowerArea.php" style="color: #2A0066">시군구별 청렴도 하위지역</a><br></div>
<div class="box_c"><a href="AvgRank.php" style="color: #2A0066">우수 자치도별 순위 </a><br></div>
<div class="box_d"><a href="compare.php" style="color: #2A0066">16년도와 17년도 비교</a><br></div>
</div>
</body>
</html>
