<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../../favicon.ico">

        <title>JDX 관리자</title>

        <!-- Bootstrap core CSS / JS-->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/dashboard.css" rel="stylesheet">
        <link href="/css/common.css" rel="stylesheet"> <!--fles css-->
        <script src="/js/ie-emulation-modes-warning.js"></script>
    </head>

    <body>
        <header class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">JDX</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="h_sns"><a href="#">SMS발송(잔여:<em>6,274</em>)/충전</a></li>
                        <li class="btn-group h_order">
                            <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">주문현황 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">
                                        <strong>입금대기</strong>
                                        <span class="count"><em>0</em>건</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <strong>결제완료</strong>
                                        <span class="count"><em>0</em>건</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <strong>상품준비중</strong>
                                        <span class="count"><em>0</em>건</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <strong>배송중</strong>
                                        <span class="count"><em>0</em>건</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <strong>배송완료</strong>
                                        <span class="count"><em>0</em>건</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <strong>반품접수</strong>
                                        <span class="count"><em>0</em>건</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <strong>교환접수</strong>
                                        <span class="count"><em>0</em>건</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <strong>환불접수</strong>
                                        <span class="count"><em>0</em>건</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="btn-group h_mymenu">
                            <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">자주쓰는메뉴 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">자주쓰는 메뉴1</a></li>
                                <li><a href="#">자주쓰는 메뉴2</a></li>
                                <li><a href="#">자주쓰는 메뉴3</a></li>
                                <li><a href="#">자주쓰는 메뉴4</a></li>
                                <li><a href="#">자주쓰는 메뉴5</a></li>
                                <li><a href="#">자주쓰는 메뉴6</a></li>
                                <li><a href="#">자주쓰는 메뉴7</a></li>
                                <li><a href="#">자주쓰는 메뉴8</a></li>
                                <li class="divider"></li>
                                <li>
                                <button type="button" class="btn" data-toggle="modal" data-target="#myModal">자주쓰는메뉴등록</button>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">메뉴얼</a></li>
                        <li><a href="#">로그아웃</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <div class="side_menu">
                        <ul>
                            <li class="open">
                                <span class="depth2">회원정보 관리</span>
                                <ul class="nav nav-sidebar">
                                    <li class="active"><a href="#">회원리스트</a></li>
                                    <li><a href="#">회원등록</a></li>
                                    <li><a href="#">회원일괄등록</a></li>
                                    <li><a href="#">휴면/탈퇴/관리</a></li>
                                </ul>
                            </li>
                            <li>
                                <span class="depth2">회원등급 관리</span>
                                <ul class="nav nav-sidebar">
                                    <li><a href="#">회원등급관리</a></li>
                                    <li><a href="#">회원등급기준</a></li>
                                </ul>
                            </li>
                            <li>
                                <span class="depth2">실명확인 서비스</span>
                                <ul class="nav nav-sidebar">
                                    <li><a href="#">실명확인정보관리</a></li>
                                    <li><a href="#">아이핀정보관리</a></li>
                                </ul>
                            </li>
                            <li>
                                <span class="depth2">마일리지 관리</span>
                                <ul class="nav nav-sidebar">
                                    <li><a href="#">마일리지설정</a></li>
                                    <li><a href="#">마일리지지급/차감조회</a></li>
                                </ul>
                            </li>
                            <li>
                                <span class="depth2">메일 발송</span>
                                <ul class="nav nav-sidebar">
                                    <li><a href="#">메일발송</a></li>
                                    <li><a href="#">자동메일양식</a></li>
                                    <li><a href="#">메일발송내역</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="depth2">문자 발송</a></li>
                            <li><a href="#" class="depth2">카카오 알림톡</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <div class="depth1_wrap">
                        <ul class="top_nav">
                            <li><a hraf="">기본설정</a></li>
                            <li><a hraf="">디자인</a></li>
                            <li class="active"><a hraf="">회원</a></li>
                            <li><a hraf="">상품</a></li>
                            <li><a hraf="">주문</a></li>
                            <li><a hraf="">커뮤니티</a></li>
                            <li><a hraf="">마케팅</a></li>
                            <li><a hraf="">통계/분석</a></li>
                            <li><a hraf="">브랜드</a></li>
                        </ul>
                    </div>
                    <!--본문내용-->
                    <section id="contain">
                        <div class="content">
                            <h2>회원 리스트</h2>
                            <div>
                                <form>
                                    <fieldset>
                                        <legend>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">이메일 주소</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="이메일을 입력하세요">
                                            </div>
                                        </legend>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- //본문내용-->
                    <!--footer-->
                    <footer>
                        <div class="f_info">
                            <b>(주)에프엘이에스</b>
                            <p class="info">
                                대표이사 : 김우현 | 주소 : 서울특별시 금천구 가산디지털로1로 168, 1008호<br>
                                전화 : 02-2026-0595 | 팩스 : 02-2026-4471 | 이메일 : <a href="mailto:help@fles.co.kr">help@fles.co.kr</a><br>
                                사업자번호 : 174-81-01556
                            </p>
                            <p class="copy">Copyright ⓒ 2019 FLES All rights reserved.</p>
                        </div>
                    </footer>
                    <!--//footer-->        
                </div>
            </div>
        </div>

        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/docs.min.js"></script>
        <script src="/js/ie10-viewport-bug-workaround.js"></script>

        <!-- 자주쓰는메뉴등록 popup -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p class="modal-title" id="myModalLabel">자주 쓰는 매뉴 등록</p>
                    </div>
                    <div class="modal-body">
                        <p>최대 8개까지 등록할 수 있습니다.</p>
                        <div>
                            <span>
                                <select>
                                    <option>Depth1</option>
                                </select>
                            </span>
                            <span>
                                <select>
                                    <option>Depth2</option>
                                </select>
                            </span>
                            <span>
                                <select>
                                    <option>Depth3</option>
                                </select>
                            </span>
                            <button cass="btn">추가</button>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    선택된 메뉴1
                                    <button class="btn">&times;</button>
                                </li>
                                <li>
                                    선택된 메뉴2
                                    <button class="btn">&times;</button>
                                </li>
                                <li>
                                    선택된 메뉴3
                                    <button class="btn">&times;</button>
                                </li>
                                <li>
                                    선택된 메뉴4
                                    <button class="btn">&times;</button>
                                </li>
                                <li>
                                    선택된 메뉴5
                                    <button class="btn">&times;</button>
                                </li>
                                <li>
                                    선택된 메뉴6
                                    <button class="btn">&times;</button>
                                </li>
                                <li>
                                    선택된 메뉴7
                                    <button class="btn">&times;</button>
                                </li>
                                <li>
                                    선택된 메뉴8
                                    <button class="btn">&times;</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">저장</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">취소</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- //자주쓰는메뉴등록 popup -->
    </body>
</html>
